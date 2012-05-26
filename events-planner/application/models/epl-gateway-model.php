<?php

class EPL_Gateway_Model extends EPL_Model {


    function __construct() {
        parent::__construct();

        $this->erm = $this->epl->load_model( 'epl-registration-model' );
        $this->ecm = $this->epl->load_model( 'epl-common-model' );
    }

/*************************************************************************************************************\
    Commented all the PP methods out and recreated for 2Checkout.
\*************************************************************************************************************/

    /*
     * get the token and redirect to paypal
     


    // function _express_checkout_redirect() {
    //     global $event_details;

    //     $event_id = $event_details['ID']; //key( ( array ) $_SESSION['__epl'][$regis_id]['events'] );

    //     if ( is_null( $event_id ) ) {
    //         return false;
    //     }
    //     $this->epl->load_file( 'libraries/gateways/paypal/paypal.php' );

    //     $url = (!empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off') ? "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] : "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    //     //echo "<pre class='prettyprint'>" . print_r( $_SESSION, true ) . "</pre>";
    //     $regis_id = $this->erm->get_regis_id();
    //     $gateway_info = $this->erm->get_gateway_info();




    //     $post_ID = $_SESSION['__epl']['post_ID'];

    //     //echo "<pre class='prettyprint'>" . print_r($post_ID, true). "</pre>";

    //     $this->ecm->setup_event_details( $event_id );

    //     $_totals = $this->erm->calculate_totals();


    //     $requestParams = array(
    //         'RETURNURL' => add_query_arg( array( 'cart_action' => '', 'p_ID' => $post_ID, 'regis_id' => $regis_id, 'epl_action' => '_exp_checkout_payment_success' ), $url ),
    //         'CANCELURL' => add_query_arg( array( 'cart_action' => '', 'p_ID' => $post_ID, 'regis_id' => $regis_id, 'epl_action' => '_exp_checkout_payment_cancel' ), $url ),
    //         "SOLUTIONTYPE" => 'Sole',
    //         "LANDINGPAGE" => epl_nz($gateway_info['_epl_pp_landing_page'],'Login')
    //     );

    //     $orderParams = array(
    //         'PAYMENTREQUEST_0_AMT' => $_totals['money_totals']['grand_total'],
    //         'PAYMENTREQUEST_0_SHIPPINGAMT' => 0,
    //         'PAYMENTREQUEST_0_CURRENCYCODE' => epl_nz(epl_get_general_setting('epl_currency_code'), 'USD') ,
    //         'PAYMENTREQUEST_0_ITEMAMT' => $_totals['money_totals']['grand_total']
    //     );

    //     $item = array(
    //         'L_PAYMENTREQUEST_0_NAME0' => epl__('Registration'),
    //         'L_PAYMENTREQUEST_0_DESC0' => $event_details['post_title'] . ', ' . $_totals['_att_quantity']['total'][$event_details['ID']] . ' ' . epl__('attendees'),
    //         'L_PAYMENTREQUEST_0_AMT0' => $_totals['money_totals']['grand_total'],
    //         'L_PAYMENTREQUEST_0_QTY0' => 1 //$_totals['_att_quantity']['total'][$event_details['ID']]
    //     );

    //     //echo "<pre class='prettyprint'>" . print_r($requestParams + $orderParams +  $item , true). "</pre>";

    //     $paypal = new Paypal();

    //     $response = $paypal->request( 'SetExpressCheckout', $requestParams + $orderParams + $item );

    //     if ( is_array( $response ) && $response['ACK'] == 'Success' ) { //Request successful
    //         $token = $response['TOKEN'];

    //         if ( $gateway_info['_epl_sandbox'] == 10 )
    //             header( 'Location: https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' . urlencode( $token ) );
    //         else
    //             header( 'Location: https://www.paypal.com/webscr?cmd=_express-checkout&token=' . urlencode( $token ) );
    //     }
    //     else {


    //         $error = 'ERROR: ' . $response['L_SHORTMESSAGE0'] . '. ' . $response['L_LONGMESSAGE0'];

    //         echo EPL_Util::get_instance()->epl_invoke_error( 0, $error, false );
    //     }
    // }

    // /*
    //  * payment successfull and  back to the overview page
    //  *
    //  */


    // function _exp_checkout_payment_success() {


    //     $this->epl->load_file( 'libraries/gateways/paypal/paypal.php' );
    //     if ( isset( $_GET['token'] ) && !empty( $_GET['token'] ) ) { // Token parameter exists
    //         // Get checkout details, including buyer information.
    //         // We can save it for future reference or cross-check with the data we have
    //         $paypal = new Paypal();
    //         $checkoutDetails = $paypal->request( 'GetExpressCheckoutDetails', array( 'TOKEN' => $_GET['token'] ) );
    //         //echo "<pre class='prettyprint'>" . print_r( $checkoutDetails, true ) . "</pre>";
    //         // Complete the checkout transaction

    //         return true;
    //     }

    //     return false;
    // }

    // /*
    //  * collect payment and send to payment made page.
    //  */


    // function _exp_checkout_do_payment() {

    //     global $event_details;
    //     $event_id = $event_details['ID'];

    //     if ( is_null( $event_id ) ) {
    //         return false;
    //     }

    //     $regis_id = $this->erm->get_regis_id();


    //     $post_ID = $_SESSION['__epl']['post_ID'];


    //     $this->ecm->setup_event_details( $event_id );

    //     $_totals = $this->erm->calculate_totals();


    //     $this->epl->load_file( 'libraries/gateways/paypal/paypal.php' );
    //     $paypal = new Paypal();
    //     $requestParams = array(
    //         'TOKEN' => $_GET['token'],
    //         'PAYMENTACTION' => 'Sale',
    //         'PAYERID' => $_GET['PayerID'],
    //         'PAYMENTREQUEST_0_AMT' => $_totals['money_totals']['grand_total'], // Same amount as in the original request
    //         'PAYMENTREQUEST_0_CURRENCYCODE' => epl_nz(epl_get_general_setting('epl_currency_code'), 'USD')
    //     );

    //     $response = $paypal->request( 'DoExpressCheckoutPayment', $requestParams );
    //     if ( is_array( $response ) && $response['ACK'] == 'Success' ) {

    //         $data['post_ID'] = $post_ID;
    //         $data['_epl_regis_status'] = '5';
    //         $data['_epl_grand_total'] = $_totals['money_totals']['grand_total'];
    //         $data['_epl_payment_amount'] = $response['PAYMENTINFO_0_AMT'];
    //         $data['_epl_payment_date'] = current_time( 'mysql' );
    //         $data['_epl_payment_method'] = '_pp_exp';
    //         $data['_epl_transaction_id'] = $response['PAYMENTINFO_0_TRANSACTIONID'];

    //         $data = apply_filters( 'epl_pp_exp_response_data', $data, $response );

    //         $this->erm->update_payment_data( $data );


    //         return true; //echo "DONE";
    //     }
    //     else {
    //         //display error message
    //         $error = 'ERROR: ' . $response['L_SHORTMESSAGE0'] . '. ' . $response['L_LONGMESSAGE0'];
    //     }
    // }
/*************************************************************************************************************\
    End of comment
\*************************************************************************************************************/




    function _express_checkout_redirect() {
        global $event_details;
        global $epl_fields;

        $event_id = $event_details['ID']; //key( ( array ) $_SESSION['__epl'][$regis_id]['events'] );

        if ( is_null( $event_id ) ) {
            return false;
        }

        $url = (!empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off') ? "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] : "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        $regis_id = $this->erm->get_regis_id();

        $gateway_info = $this->erm->get_gateway_info();
        $post_ID = $_SESSION['__epl']['post_ID'];

        $this->ecm->setup_event_details( $event_id );

        $_totals = $this->erm->calculate_totals();
        $regis_data = $this->ecm;

        $requestParams = array(
            'RETURNURL' => add_query_arg( array( 'cart_action' => '', 'p_ID' => $post_ID, 'regis_id' => $regis_id, 'epl_action' => '_exp_checkout_do_payment' ), $url )
        );

        $this->epl->load_file( 'libraries/gateways/twocheckout/twocheckout.php' );
        $twocheckout = new TCO_Payment();

        // Set account info
        $twocheckout->setAcctInfo();

        // Specify purchase routine type (single_page or multi_page)
        $twocheckout->setCheckout('single_page');
        $twocheckout->addParam('cart_order_id', epl__('Registration').': '.$event_details['post_title']); //Required - Cart ID
        $twocheckout->addParam('total', $_totals['money_totals']['grand_total']); //Required - Sale Total
        $twocheckout->addParam('x_receipt_link_url', $requestParams['RETURNURL']);       
        $twocheckout->submitPayment();
        
    }

    /*
     * payment successfull and  back to the overview page
     *
     */


    function _exp_checkout_payment_success() {
        return true;
    }

    /*
     * collect payment and send to payment made page.
     */


    function _exp_checkout_do_payment() {
        global $event_details;
        $event_id = $event_details['ID'];

        if ( is_null( $event_id ) ) {
            return false;
        }

        $regis_id = $this->erm->get_regis_id();
        $post_ID = $_SESSION['__epl']['post_ID'];
        $this->ecm->setup_event_details( $event_id );
        $_totals = $this->erm->calculate_totals();
        $total = $_totals['money_totals']['grand_total'];

        $this->epl->load_file( 'libraries/gateways/twocheckout/twocheckout.php' );
        $twocheckout_response = new TCO_Payment();
        $twocheckout_response->setAcctInfo();
        $response = $twocheckout_response->getResponse();
        if ( is_array( $response )) {
            $data['post_ID'] = $post_ID;
            $data['_epl_regis_status'] = '5';
            $data['_epl_grand_total'] = $total;
            $data['_epl_payment_amount'] = $response['total'];
            $data['_epl_payment_date'] = current_time( 'mysql' );
            $data['_epl_payment_method'] = '_tco';
            $data['_epl_transaction_id'] = $response['order_number'];

            $data = apply_filters( 'epl_tco_response_data', $data, $response );

            $this->erm->update_payment_data( $data );

            return true;
        } else {
            $error = 'ERROR: ' . 'MD5 Hash does not match! Contact the seller!';
        }
    }
}