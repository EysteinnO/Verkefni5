        
<?php

$filepath = "myndir.json";

if(isset($_POST['imgName']) && isset($_POST['imgSrc']))
{

if(empty($_POST['imgName']) || empty($_POST['imgSrc']))    
{
    echo "All fields are required";
}


else
{
    $data = array(
        'imgName' => $_POST['imgName'],
        'imgSrc' => $_POST['imgSrc']
        );
}

$arr_data = array();

if(file_exists($filepath)) {
    $jsonData = file_get_contents($filepath);

    $arr_data = json_decode($jsonData, true);
}

$arr_data[] = $data;

// encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
$jsonData = json_encode($arr_data, JSON_PRETTY_PRINT);

if(file_put_contents('/mnt/volume-nyc1-01/html/Verkefni5/application/view/home/myndir.json', $jsonData)){
echo "Data successfully stored";    
} 
else echo "Data not successfully stored";
}

?>