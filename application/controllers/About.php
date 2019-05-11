<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $this->load->library('googlemaps');

        $config['center'] = '27.189020,31.168453';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = '27.189020,31.168453';
        $this->googlemaps->add_marker($marker);
        $marker = array();
        $marker['position'] = '27.188638,31.165621';
        $marker['onclick'] = 'alert(" كليه الزراعه")';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $this->googlemaps->add_marker($marker);

        $marker = array();
        $marker['position'] = '27.18727,31.166758';
        $marker['draggable'] = TRUE;
        $marker['animation'] = 'DROP';
        $this->googlemaps->add_marker($marker);

        $marker = array();
        $marker['position'] = '27.188075,31.166415';
        $marker['onclick'] = 'alert("كليه الصيدله")';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();


        $this->load->view('about/about', $data);
    }
    public function test() {
        $t=array('a'=>0,'b'=>1);
        $a=json_decode('{"a":"b"}');
        var_dump($a);
    }
   public function an()
   {
    define('APPLICATION_ID',    YOUR_APP_ID);
define('APPLICATION_KEY',  YOUR_APP_KEY);

function call_api($endpoint, $parameters) {
  $ch = curl_init('https://api.aylien.com/api/v1/' . $endpoint);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'X-AYLIEN-TextAPI-Application-Key: ' . APPLICATION_KEY,
    'X-AYLIEN-TextAPI-Application-ID: '. APPLICATION_ID
  ));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
  $response = curl_exec($ch);
  return json_decode($response);
}


$endpoints = array("language", "sentiment", "classify", "hashtags");
$url = "http://www.bbc.com/news/science-environment-27688511";

foreach($endpoints as $endpoint)
  {
    switch($endpoint){
      case "language":
      {
        $params = array('text' => 'What language is this sentence written in?');
        $language = call_api('language', $params);
        echo sprintf("Text: %s 
n", $language->text);
        echo sprintf("Language: %s (%F) 
n", $language->lang, $language->confidence);
        break;
      }
      case "sentiment":
      {
        $params = array('text' => 'John is a very good football player!');
        $sentiment = call_api('sentiment', $params);
        echo sprintf(" 
nText: %s 
n", $sentiment->text);
        echo sprintf("Sentiment: %s (%F) 
n", $sentiment->polarity, $sentiment->polarity_confidence);
        break;
      }
      case "classify":
      {
        echo sprintf("
nClassification:
n");
        $params = array('url' => $url);
        $classify = call_api('classify', $params);
        foreach($classify->categories as $val) {
          echo sprintf("
nLabel        :   %s     ", $val->label);
          echo sprintf("
nIPTC code    :   %s     ", $val->code);
          echo sprintf("
nConfidence   :   %F     ", $val->confidence);
        }
        break;
      }
      case "hashtags":
      {
        echo sprintf("
n
nHashtags:");
        $params = array('url' => $url);
        $hashtags = call_api('hashtags', $params);
        foreach($hashtags->hashtags as $val) {
          echo sprintf(" 
n %s", $val );
        }
        break;
      }
    }

  }
   }

}
