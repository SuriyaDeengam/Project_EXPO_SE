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
// Check if file already exists
if (file_exists($newfilename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if($imageFileType != "xlsx") {
     echo "Sorry, XLSX files are allowed.";
     $uploadOk = 0;
 }
 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        set_time_limit(0); 
header('Content-Type: text/html; charset=utf-8');
 
//Connect DB
$mysqli = new mysqli('localhost','root','','se_project');
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
 
//File สำหรับ Import
$inputFileName="uploads/".basename( $_FILES["fileToUpload"]["name"]);
 
/** PHPExcel */
require_once 'PHPExcel/Classes/PHPExcel.php';
 
/** PHPExcel_IOFactory - Reader */
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
 $result = $mysqli->query("SELECT student_id FROM gradetable WHERE student_id = '".$resx['student_id']."' ");
    if($result->num_rows == 0)
    {
  $query = " INSERT INTO gradetable (No,student_id,subject_A,value_A,
  credit_A,subject_B,value_B,credit_B,subject_C,value_C,credit_C,subject_D,value_D,credit_D,sum_subject,sum_credit,grade) VALUES
      (
       '".$resx['No']."',
       '".$resx['student_id']."',
       '".$resx['subject_A']."',
       '".$resx['value_A']."',
       '".$resx['credit_A']."',
       '".$resx['subject_B']."',
       '".$resx['value_B']."',
       '".$resx['credit_B']."',
       '".$resx['subject_C']."',
       '".$resx['value_C']."',
       '".$resx['credit_C']."',
       '".$resx['subject_D']."',
       '".$resx['value_D']."',
       '".$resx['credit_D']."',
       '".$resx['sum_subject']."',
       '".$resx['sum_credit']."',
       '".$resx['grade']."'
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