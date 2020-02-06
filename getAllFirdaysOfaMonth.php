<?php //php 7.0.8
    
$fridays = array();

$date = date('2020-02');
$day= 'Sunday';
$fridays[0] = date('d',strtotime("first {$day} of ".$date));
$fridays[1] = $fridays[0] + 7;
$fridays[2] =  $fridays[0] + 14;
$fridays[3] =  $fridays[0] + 21;
$fridays['last'] = date('d',strtotime("last {$day} of this month"));

if($fridays[3] == $fridays['last']){
  unset($fridays['last']);
}
else {
  $fridays[4] = $fridays['last'];
  unset($fridays['last']);
}

foreach($fridays as $off){
    echo date($date."-".$off);
    echo "\n";
}

?>
