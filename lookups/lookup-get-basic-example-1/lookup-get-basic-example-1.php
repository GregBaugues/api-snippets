<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC3094732a3c49700934481addd5ce1659";
$token = "{{ auth_token }}";
$client = new Lookups_Services_Twilio($sid, $token);

$number = $client->phone_numbers->get("+15108675309");
echo $number->carrier->name;