<?php
require 'gapi.class.php';

$ga = new gapi("quickstart@peppy-ridge-88104.iam.gserviceaccount.com", "Dogmeng-2277613ad32f.p12");

$ga->requestAccountData();

foreach($ga->getAccounts() as $result)
{
  echo $result . ' ' . $result->getId() . ' (' . $result->getProfileId() . ")<br />";
}
