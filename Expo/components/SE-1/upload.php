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
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 2000000) {
//   echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}

// Allow certain file formats
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
 $result = $mysqli->query("SELECT Student_Id FROM student WHERE Student_Id = '".$resx['Student_Id']."' ");
    if($result->num_rows == 0)
    {
  $query = " INSERT INTO student (Student_Id,Tname_Th,Fname_Th,Lname_Th,
  Tname_En,Fname_En,Lname_En,Faculty,Branch,Year,Academic_Year,Student_Status,Status_Year,Student_Subject) VALUES
      (
       '".$resx['Student_Id']."',
       '".$resx['Tname_Th']."',
       '".$resx['Fname_Th']."',
       '".$resx['Lname_Th']."',
       '".$resx['Tname_En']."',
       '".$resx['Fname_En']."',
       '".$resx['Lname_En']."',
       '".$resx['Faculty']."',
       '".$resx['Branch']."',
       '".$resx['Year']."',
       '".$resx['Academic_Year']."',
       '".$resx['Student_Status']."',
       '".$resx['Status_Year']."',
       '".$resx['Student_Subject']."'
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