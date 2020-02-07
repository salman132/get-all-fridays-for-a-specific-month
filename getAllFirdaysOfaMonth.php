  
<?php //php 7.0.8
    
$offDays = array();

$date = date('2020-02');
$day= 'Wednesday';
$offDays[0] = date('d',strtotime("first {$day} of ".$date));
$offDays[1] = $offDays[0] + 7;
$offDays[2] =  $offDays[0] + 14;
$offDays[3] =  $offDays[0] + 21;
$offDays['last'] = date('d',strtotime("last {$day} of ".$date));

if($offDays[3] == $offDays['last']){
  unset($offDays['last']);
}
else {
  $offDays[4] = $offDays['last'];
  unset($offDays['last']);
}

foreach($offDays as $off){
    echo date('Y-m-d-D',strtotime(date($date."-".$off)));
    echo "\n";
}

?>
