<?php
  require_once 'vendor/autoload.php';

  $clientID = '72066569432-h87651qmeihq0f5hvm1e80oqmt0quqia.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost:4200/';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>