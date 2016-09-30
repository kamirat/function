<?php

function is_future_date($target_date) {
  // UNIX TIMESTAMPを[$timestamp]という変数に格納する
  $timestamp = time() ;
  if(strtotime($target_date) > $timestamp) {
    return true;
  }
  elseif (strtotime($target_date) == $timestamp){
    return false;
  }
  else{
    return false;
  }
  // var_dump($target_date);
  // exit;
}

$result = is_future_date('2016/10/01');
var_dump($result);  // true

$result = is_future_date('2016/09/01');
var_dump($result);  // false

$now = time();
$next_day = $now + 60 * 60 * 24;
$tomorrow = date('Y/m/d', $next_day);
$tomorrow_datetime = date('Y/m/d H:i:s', $next_day);


var_dump($tomorrow_datetime);

?>