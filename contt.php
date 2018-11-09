<?php

if ( isset( $_POST['submit'] ) ) {
$name       =$_POST['name'];
$email      =$_POST['email'];
$comments   =$_POST['comments'];

$message   ="{$name} wrote the following on your site:\n\n {$comments}";

if( mail( 'office@thesolafaids.org','submit', $message ) ){
	$response = "<h1>Message sent successfully! Thank you {$name}, we will contact you shortly.</h1>";
}else {
	$response ="<h1>Something went wrong.Please try again.</h1>";
}
        
echo $response;
}

?>