<?php
require_once 'EpornerAPI.php';

function getEpornerVideos($page = 1, $query = 'all') {
    $api_url = 'https://www.eporner.com/api/v2/video/search/';
    $params = array(
        'query' => $query,
        'page' => $page
    );
    
    $response = EpornerAPICall($api_url, $params);
    
    if ($response) {
        return json_decode($response);
    }
    return false;
}
