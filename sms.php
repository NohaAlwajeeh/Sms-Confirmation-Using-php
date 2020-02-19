<?php

require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
$AccountSid = "AC92d455317fbb670a2a342a590dec102a";

$AuthToken = "749556a24c814806bff0395731d031f3";


$client = new Client($AccountSid, $AuthToken);

try {

    $number=$_POST['Number'];

    $msg=$_POST['Message'];
 // Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14178153201',
        // the body of the text message you'd like to send
        'body' => $msg
    )
);

} catch (Services_Twilio_RestException $e) {

    echo $e->getMessage();

}

?>
