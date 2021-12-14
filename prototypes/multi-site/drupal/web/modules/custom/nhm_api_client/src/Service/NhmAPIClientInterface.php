<?php

namespace Drupal\nhm_api_client\Service;

interface NhmAPIClientInterface {
	public function get( $listType, $params ); 
    public function getSimple( $listType, $callingParams = array() );
	public function post( $body );
}