<?php
//echo  'Hello world'.'<br>';

$name = 'Shah Ibne Fahad';
$id = 'C193048';
$dept = 'CSE';
echo 'Name : '.$name.'<br>'.'Id : '.$id.'<br>'.'Department : ' . $dept . '<br><br><br>';

$num1 = 20;
$num2 = 50;
$sum = $num1 + $num2 ;
echo 'first number : ' . $num1 . '<br>' . 'second number : ' . $num2 . '<br>' . 'Sum : ' . $sum.'<br><br><br>';

$data=array(10,12,11,15,16);//index aray
array_push($data, 100);
for($index=1;$index<=5;$index++)
{
    array_push($data, $index);
}

echo '<br>*************** Foreach start**************<br>';
foreach ($data as $value)
{
    echo $value.'<br>';
    
}
sort($data);
echo '<br>************* For loop start **************<br>';
for($index=0;$index<count($data);$index++)
{
    echo 'data['.$index.'] = '.$data[$index].'<br>';
}


echo '<pre>';
print_r($data);
var_dump($data);//debugger//show with datatype

$associative_array=array('karim'=>100,"rahim"=>250,"mamun"=>520);
foreach ($associative_array as $key => $value) {
    echo 'The value of '.$key.' is = '.$value.'<br>';
}

echo '<pre>';
print_r($associative_array);




?>
