<?php
  /*
  Template Name: Example Page Template
  */
  get_header();
  // API endpoint here take data from API 
  $api_url = 'https://www.donedeal.ie/search/api/v4/find/';

  // API request data
  $request_data = array(
      'adType' => 'forsale',
      'sort' => 'relevance desc',
      'max' => 30,
      'start' => 0,
      // replace dealerId
      'dealerId' => 'someid',
  );

  // Make API request
  $response = wp_remote_post($api_url, array(
      'body' => json_encode($request_data),
      'headers' => array(
      'Content-Type' => 'application/json', 
      'Accept'       => 'application/json',
    ),
  ));

  echo 'Reponse';
  print_r($response);

  get_footer();
?>
