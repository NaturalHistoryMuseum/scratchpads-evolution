<?php

namespace Drupal\nhm_api_client\Service;

use Drupal\Core\Site;
use Drupal\Core\Site\Settings;
use GuzzleHttp\Client;
use Drupal\Component\Serialization\Json;


// https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Site%21Settings.php/function/Settings%3A%3Aget/9.0.x

/**
 * Class NhmAPIClient
 */
class NhmAPIClient implements NhmAPIClientInterface {

protected $httpClient;

/**
 * @param
 */
public function __construct() {
  $this->httpClient = \Drupal::httpClient();
}

public function getSimple( $listType, $callingParams = array() ) {
  /*
  $base_url = Settings::get("api_base_url_1");
  $api_key = Settings::get("api_key_1");
  */

  $base_url =  "";
  $api_key = "";

  $uri = $base_url.'get/'.$listType.'?'.'api_key='.$api_key.'&'.implode( '=', $callingParams );

  $json = file_get_contents($uri);
  $obj = Json::decode($json);

  // is this an array or an obj? need to check
    // https://drupal.stackexchange.com/a/208505/1082 
  return $obj;
}

public function get( $listType, $paramsArray = array() ) {
  // this should be in settings.php and not stored in git 	  

  $base_url = Settings::get("api_base_url_1");
  $api_key = Settings::get("api_key_1");


  //$call = $base_url.$listType; 


  /*
  $callingParamsArray = [
          'api_key' => $api_key
  ];

  $callingParams = array_merge(  $callingParamsArray, $paramsArray );

 */

 $callingParams = $paramsArray;

  // https://www.drupal.org/docs/8/modules/http-client-manager/introduction
  //$response = $this->httpClient->request('GET', $call, $callingParams );

  // https://hotexamples.com/examples/-/Drupal/httpClient/php-drupal-httpclient-method-examples.html#0xf0b6bcc9105bd64296da0ccdc140b70733f7f9f8690e08954d372cd160fa8f11-49,,70,


  $uri = $base_url.'get/'.$listType.'?'.'api_key='.$api_key.'&'.implode( '=', $callingParams );

  \Drupal::messenger()->addMessage( 'uri call: '.$uri );

  $response = $this->httpClient->get($uri);

  \Drupal::messenger()->addMessage( 'response: '.implode( ',', $response ), 'notice');

  // https://api.drupal.org/api/drupal/vendor%21guzzlehttp%21guzzle%21src%21Client.php/function/Client%3A%3Arequest/8.2.x
  // https://api.drupal.org/api/drupal/vendor%21psr%21http-message%21src%21MessageInterface.php/function/MessageInterface%3A%3AgetBody/8.2.x
  // https://api.drupal.org/api/drupal/vendor%21psr%21http-message%21src%21StreamInterface.php/interface/StreamInterface/8.2.x
  
  $apiDataAsString = $response->getBody()->getContents();

  // https://drupal.stackexchange.com/a/208505/1082 
  $apiDataAsArray = Json::decode($apiDataAsString);

  return $apiDataAsArray;
}
}