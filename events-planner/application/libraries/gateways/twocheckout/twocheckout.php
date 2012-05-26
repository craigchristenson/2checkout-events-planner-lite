<?php

//This script is of course GNU, and used at your own risk..and so on..... ;-)

class TCO_Payment 
{
    protected $_errors = array( );

// Construct return URL
    public function __construct()
    {
        $this->erm = EPL_Base::get_instance()->load_model( 'epl-registration-model' );
    }


    //Define 2Checkout account info
    function setAcctInfo()
    {
        $gateway_info = $this->erm->get_gateway_info();
        $this->sid = $gateway_info['_epl_tco_sid'];
        $this->secret_word = $gateway_info['_epl_tco_secret'];
        if ($gateway_info['_epl_sandbox'] == 10) {
            $this->demo = 'Y';
        } else {
            $this->demo = 'N';
        }

    }

    //Define purchase routine selection (single page or standard multi_page)
    function setCheckout($purchase_routine)
    {
        if ($purchase_routine == 'multi_page')
        {
        $this->purchase_url = "https://www.2checkout.com/checkout/purchase";
        }
        else if ($purchase_routine == 'single_page')
        {
        $this->purchase_url = "https://www.2checkout.com/checkout/spurchase";
        }
    }

    //Add parameters to the form
    function addParam($name, $value)
    {
        $this->params["$name"] = $value;
    }

    //Remove parameters from the form
    function removeParam($name)
    {
        unset($this->params[$name]);
    }

    //Builds out HTML form and submits the payment to 2Checkout
    //Please note that the sid, demo and secret word.
    function submitPayment()
    {
        echo '<body onload="document.form.submit();"><h3>Passing sale to 2Checkout for Processing</h3>';
        echo "<form name=\"form\" action=\"$this->purchase_url\" method=\"post\">\n";
        echo "<input type=\"hidden\" name=\"sid\" value=\"$this->sid\"/>\n";
        echo "<input type=\"hidden\" name=\"demo\" value=\"$this->demo\"/>\n";

        foreach ($this->params as $name => $value)
        {
             echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
        }

        echo "<input type=\"submit\" value=\"Click here to pay using 2Checkout\" /></form></body></html>";
    }

    //Prints out the return parameters and checks against the MD5 Hash to confirm the validity of the sale
    function getResponse()
    {
        //Quick sanitation and variable assignment
        foreach ($_REQUEST as $k => $v) {
            $v = htmlspecialchars($v);
            $v = stripslashes($v);
            $responseArray[$k] = $v;
        }

        $hashTotal = $responseArray['total'];
        $returned_hash = $responseArray['key'];

        //Assign variables for hash from AcctInfo()
        $hashSecretWord = $this->secret_word;
        $hashSid = $this->sid;

        //2Checkout breaks the hash on demo sales, we must do the same here so the hashes match.
        if (($this->demo) == 'Y') {
            $hashOrder = 1;
        } else {
            $hashOrder = $responseArray['order_number'];
        }

        //Create hash
        $our_hash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));

        //Compare hashes to check the validity of the sale and print the response
        if ($our_hash == $returned_hash) {
            return $responseArray;
        } else {
            $this->_errors = array( 'ERROR' => "MD5 Hash does not match! Contact the seller!" );
            return false;
        }
    }
}