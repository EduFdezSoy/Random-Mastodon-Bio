<?php

require_once('vendor/autoload.php');

use Fundevogel\Mastodon\Api;


// mastodon auth things
const INSTANCE = getenv("INSTANCE") ?? 'mastodon.social';
const ACCESS_TOKEN = getenv("ACCESS_TOKEN") ?? 'your_access_token_here';

// where are the sentences?
$biosFile = getenv("BIOS_FILE") ?? 'bios';

// load the file and pick a random one
$file = file($biosFile);
$randIndex = array_rand($file);
$description = $file[$randIndex];

// set credentials
$api = new Api(INSTANCE);
$api->accessToken = ACCESS_TOKEN;

// login
$api->logIn();

// retrive profile data
$accData = $api->accounts()->verifyCredentials();

// put new profile data
$res = $api->accounts()->updateCredentials(
  $discoverable     = $accData->discoverable(),
  $bot              = $accData->bot(),
  $displayName      = $accData->displayName(),
  $note             = $description,
  $avatar           = '',
  $header           = '',
  $locked           = $accData->locked(),
  $sourcePrivacy    = $accData->source()->privacy(),
  $sourceSensitive  = $accData->source()->sensitive(),
  $fieldAttributes  = ""
);
