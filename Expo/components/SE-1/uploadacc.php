<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["fileToUpload"]["name"]));

move_uploaded_file($_FILES["fileToUpload"]["name"], "uploads/" . $newfilename);
if(isset($_POST["submit"])) {
        $uploadOk = 1;
}
if (file_exists($newfilename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if($imageFileType != "xlsx") {
     echo "Sorry, XLSX files are allowed.";
     $uploadOk = 0;
 }
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        set_time_limit(0); 
header('Content-Type: text/html; charset=utf-8');
 
$mysqli = new mysqli('localhost','root','','se_project');
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
 
$inputFileName="uploads/".basename( $_FILES["fileToUpload"]["name"]);
 
require_once 'PHPExcel/Classes/PHPExcel.php';
include 'PHPExcel/Classes/PHPExcel/IOFactory.php';
 
 
$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
$objReader->setReadDataOnly(true);  
$objPHPExcel = $objReader->load($inputFileName);  
 
$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
 
$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
$headingsArray = $headingsArray[1];
 
$r = -1;
$namedDataArray = array();
for ($row = 2; $row <= $highestRow; ++$row) {
    $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
    if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
        ++$r;
        foreach($headingsArray as $columnKey => $columnHeading) {
            $namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
        }
    }
}

foreach ($namedDataArray as $resx) {
 //Insert
 $result = $mysqli->query("SELECT ID FROM account WHERE ID = '".$resx['ID']."' ");
    if($result->num_rows == 0)
    {
  $query = " INSERT INTO account (Account_Id,Email,Password,ID,AccountStatus) VALUES
      (
       '".$resx['Account_Id']."',
       '".$resx['Email']."',
       '".$resx['Password']."',
       '".$resx['ID']."',
       '".$resx['AccountStatus']."'
      )";
  $res_i = $mysqli->query($query);
      }
 //
}
$mysqli->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html>
    <button onclick="window.close();window.open('index.php')" id="red" type="button" class="btn btn-secondary btn-lg">
        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
        <tagfont> ย้อนกลับ </tagfont>
    </button>
</html>