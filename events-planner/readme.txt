=== Events Planner ===
Contributors: abelony
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=abels122%40gmail%2ecom&lc=US&item_name=Events%20Planner%20for%20Wordpress&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest
Tags: events, event, events planner, event planner, event registration, event calendar, events calendar, event management, paypal, registration, ticket, tickets, ticketing, tickets, widget, locations, maps, booking, attendance, attendee, calendar, payment, payments, sports, training, dance
Requires at least: 3.1
Tested up to: 3.2
Stable tag: 1.3.2

Events Planner: A powerful next generation event management plugin, built with Custom Post Types 

== Description ==

Events Planner is a next generation [Event Registration](http://www.wpeventsplanner.com/) Plugin, built with standard Wordpress tools (Custom Post Types, Custom Fields, Options), making it extremely powerful and flexible.

= New in version 1.3.2 =
* Confirmation emails to the registrant and the admin, date and time formatting ....
* [Read More](http://www.wpeventsplanner.com/2011/11/whats-new-in-events-planner-lite-v1-3-2/)

= New in version 1.3 =
* Downloadable list of registrations (status, payment info, attendees, regis field responses...) in CSV format, AJAX powered quick info access to Registration and Payment Info, better available space calculations....
* [Read More](http://www.wpeventsplanner.com/2011/11/whats-new-in-events-planner-lite-version-1-3/)


= New in version 1.2 =
* Registration activated.  Use Events Planner to accept registrations for Free and Paid events (using PayPal ExpressCheckout).
* [Read More](http://www.wpeventsplanner.com/2011/11/event-registration-using-events-planner/)

= New in version 1.1 =
* Use theme templates (samples provided) to change the look and content of the event list, individual event, location, organization pages.
* Use custom event template tags to include event specific information on your event pages.
* [Read More](http://www.wpeventsplanner.com/2011/10/whats-new-in-v1-1/)

= List of features =

* All the data is stored in Wordpress tables (post, post meta, options...)  **No custom tables are used.**  As such, the plugin is powerful enough to let you add and
retrieve any type of information that you would like to associate with the events.  With the tools in the Pro version, you don't have to wait for us to make changes to the data structure.  You
will be able to do it yourself, easily and safely.
* You can use custom templates and custom Events Planner template tags for displaying event details.  In the Pro version, you will have the option to select a different template for each event, and create your own.
* Can be extended using custom hooks and configurations. Use filters to add fields and meta boxes to any section of the plugin. -Pro
* Coming Soon, with the help of an extender plugin, the ability to modify all the views and styles that come with the plugin. -Pro

= Inside Each Event =

1.  Have unlimited number of days.  You can use the **Recurrence Helper** for previewing and creating the dates.
1.  Create unlimited times
1.  Create unlimited prices/tickets
1.  Allow the user to register for **only one day**.
1.  Allow the user to register for **one or more days**. -Pro
1.  Register the user **for all the days in your event**. -Pro
1.  Register the user for a **class/course** with multiple days and use the recurrence helper to show a calendar of the course. -Pro
1.  Allow the user to register more than one person.
1.  Create unlimited forms and collect any information that you would like from the ticket buyer (and optionally, from additional attendees).
1.  and more...


= If the user chooses to register for more than one day =

1.  Allow the user to select **the same time for all the days**
1.  Allow the user to select **different time for each day that they choose** -Pro
1.  Allow the user to select **the same price for all the days**
1.  Choose if the prices apply to **the whole event or each day**
1.  Allow the user to select **different price for each day that they choose** -Pro
1.  Have time specific pricing -Pro
1.  Control available spaces per day (event, time or price in pro).

= Accept Payments =

1.  Create unlimited payment profiles.  This means that you can have **multiple settings for each gateway**.
1.  Inside each event, you can select which account the payment goes to and **pick and choose which payment methods the user can use.**
1.  Current payment choices: PayPal ExpressCheckout (in the Lite version). Check, PayPal Pro (Direct Payments), Authorize.net AIM and SIM in the Pro version.  More on the way.

= Manage Locations =

1.  Create **unlimited event locations**.  As this is also a custom post type, you can create your own templates and use the custom template tags.

= Manage Organizations =

1.  Create and manage **unlimited organizations** and inside each event, select which organization is hosting the event.

= Manage Registration Forms =

1.  Use the AJAX powered form manager to easily create and use as many forms as you would like.
1.  Inside each form, you can sort the order of the fields.
1.  Inside each event, you can choose which forms to use to collect the registration information from the ticket buyer (and optionally, the other attendees).

= Accept Registrations =

1.  All the registration information is stored in a custom post type.
1.  The user will go through a process similar to a shopping cart (i.e. select event > select event options > enter registration info > see overview > pay > done).
1.  Along with the registration data, you will see the payment information inside the post.
1.  You can create new registrations and modify them from inside the Wordpress admin -Pro.

= Some features being worked on right now =

[Please let us know about your needs](http://www.wpeventsplanner.com/contact-us/)

*   Notification manager for creating unlimited notification types and use shortcodes to include information in the email body.
*   Comprehensive Discount manager
*   Various AJAX calendar widgets
*   and some that are a secret for now :)

[Again, please let us know about your needs](http://www.wpeventsplanner.com/contact-us/)

== Installation ==


1. Upload `events-planner` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create a new page and place `[events_planner]` shortcode in there
1. Go to Events Planner > Settings and make selections
1. Go to Events Planner > Form Manager and create some fields and forms.  By default, the Ticket buyer form configurations are installed.
1. Go to Events Planner > Organizations and create one or more organizations that will be hosting the event.
1. Go to Events Planner > Payment Profiles and create payment profiles.
1. Go to Events Planner > Locations and create locations for the events.
1. Go to Events Planner > Categories and create some event categories.


== Screenshots ==

1. Event Management Page
2. Form Builder
3. Registration Page Overview

== Changelog ==

= 1.3.2 =

* Added confirmation email to registrant and admin
* Added empty date check to the cart
* Added empty quantity check to the cart
* Fixed the slashes on labels
* Fixed recurrence helper year overlap issue
* Added organization email
* Better data sanitizer
* Masked PayPal API password and signature as password


= 1.3.1 =

* Added CAD and EUR to the currency list in the Settings.  Adjusted the gateway files for the change.
* Added an option to PayPal ExpressCheckout to select the PayPal landing page (login or credit card).
* Fixed the register button link in the template files.

= 1.3 =

* Downloadable CSV of event registration info.
* AJAX snapshots of registration and payment info.
* Hardened available space calculation.
* Ability to exclude org. info form the event list.
* Fixed a few php notices.

= 1.2 =

* Activated registration process.

= 1.1 =

* Added Help section
* Added Theme Template Support
* Added custom template tags for locations and organizations
* Fixed some minor bugs

= 1.0 =

* Hello World

== Upgrade Notice ==

* None

== Frequently Asked Questions ==

Please visit our [Contact Page](http://www.wpeventsplanner.com/contact-us/) and ask us anything about the plugin.