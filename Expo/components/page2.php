<?php
    require("dbcon.php");
    session_start();
    $s_id = $_SESSION["user"];


    $q = "select * from subject where Subject_Status = 1";
    $res = $con->query($q);

 

    $q = "select * from student where Student_Id like '$s_id'";
    $studentresult = $con->query($q);
    $studentdetail = $studentresult->fetch_assoc();

    $q = "SELECT DISTINCT register.Course from register WHERE register.User_Id like '$s_id'";
    $res1 = $con->query($q);
    $selector = $res1->fetch_assoc();
    $pri1 = $selector['Course'];
    $selector = $res1->fetch_assoc();
    $pri2 = $selector['Course'];
    $selector = $res1->fetch_assoc();
    $pri3 = $selector['Course'];
    $selector = $res1->fetch_assoc();
    $pri4 = $selector['Course'];


?>


<!DOCTYPE html>
<html>
<body>

    <div class="p1-con1 d-flex justify-content-center">
        <div class="con1logo m-2 mt-3 d-flex justify-content-center align-items-center" style="background-color: black;background-size:100%; background-image: url('https://reg1.src.ku.ac.th/picnisit/<?php echo $s_id; ?>.jpg')">
        </div>


        <div class="con1detail d-flex flex-column justify-content-center">
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">
                    <h4>รหัสนิสิต :&nbsp</h4>
                </div>
                <div class="con1-text2 ">
                    <input readonly class="form-control" type="text" value="<?php echo $studentdetail['Student_Id']; ?>"
                     aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">    
                    <h4>ชื่อ-สกุล(Eng) :&nbsp</h4>
                </div>
                <div class="con1-text2 ">
                    <input readonly class="form-control" type="text" type="text" value="<?php echo $studentdetail['Tname_En']." ".$studentdetail['Fname_En']." ".$studentdetail['Lname_En'] ?>"
                    aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">
                    <h4>สาขา :&nbsp</h4>
                </div>
                <div class="con1-text2 d-flex">
                    <input readonly class="form-control" type="text" type="text" value="<?php echo $studentdetail['Branch'] ?>"
                    aria-describedby="basic-addon1">
                </div>
            </div>
        </div>



        <div class="con1detail d-flex flex-column justify-content-center">
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">
                    <h4>ชื่อ-สกุล(ไทย) :&nbsp</h4>
                </div>
                <div class="con1-text2 ">
                    <input readonly class="form-control" type="text" type="text" value="<?php echo $studentdetail['Tname_Th'].$studentdetail['Fname_Th']." ".$studentdetail['Lname_Th'] ?>"
                    aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">
                    <h4>คณะ :&nbsp</h4>
                </div>
                <div class="con1-text2 ">
                    <input readonly class="form-control" type="text" type="text" value="<?php echo $studentdetail['Faculty'] ?>"
                    aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="con1detail-row d-flex">
                <div class="con1-text1 d-flex justify-content-end">
                    <h4>ชั้นปี :&nbsp</h4>
                </div>
                <div class="con1-text2 d-flex">
                    <input readonly class="form-control" type="text" type="text" value="<?php echo $studentdetail['Year'] ?>"
                    aria-describedby="basic-addon1">
                </div>
            </div>

            
        </div>




    </div>
    <div class="p1-con2 d-flex justify-content-center">
        <h2><B>__________________________________ เลือกสายการเรียนตามลำดับ __________________________________</B></h2>
    </div>



    <div class="p1-con3 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column align-items-center" style="height: 80%;width: 100%;">
                <div class="con3-box d-flex align-items-center">
                        <div class="input-group mb-3" style="height: 3em;">
                            <div class="input-group-prepend">
                                <label class="input-group-text pt-3" for="inputGroupSelect01"><h3>สายที่ 1</h3></label>
                            </div>
                            <select id = "option1" class="custom-select" style="height: 100%;font-size: 1.5em" id="inputGroupSelect01">
                                    <option value="None" selected>Choose...</option>
                                    <?php while($option1 = $res->fetch_assoc()){ ?>
                                        <?php if($option1['Subject_Id'] == $pri1){ ?>
                                            <option selected value="<?php echo $option1["Subject_Id"] ?>"><?php echo $option1["Subject_Name"] ?></option>
                                        <?php }else{?>
                                            <option value="<?php echo $option1["Subject_Id"] ?>"><?php echo $option1["Subject_Name"] ?></option>
                                        <?php } ?>
                                    <?php } $res->data_seek(0);?>                  
                            </select>
                        </div>
                    </div>
            
            
                    <div class="con3-box d-flex align-items-center">
                            <div class="input-group mb-3" style="height: 3em;">
                                <div class="input-group-prepend">
                                    <label class="input-group-text pt-3" for="inputGroupSelect01"><h3>สายที่ 2</h3></label>
                                </div>
                                <select id = "option2" class="custom-select" style="height: 100%;font-size: 1.5em" id="inputGroupSelect01">
                                    <option value="None" selected>Choose...</option>
                                    <?php while($option2 = $res->fetch_assoc()){ ?>
                                        <?php if($option2['Subject_Id'] == $pri2){ ?>
                                            <option selected value="<?php echo $option2["Subject_Id"] ?>"><?php echo $option2["Subject_Name"] ?></option>
                                        <?php }else{?>
                                            <option value="<?php echo $option2["Subject_Id"] ?>"><?php echo $option2["Subject_Name"] ?></option>
                                        <?php } ?>
                                    <?php } $res->data_seek(0);?>
                                </select>
                            </div>
                        </div>
            
                        <div class="con3-box d-flex align-items-center">
                                <div class="input-group mb-3" style="height: 3em;">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text pt-3" for="inputGroupSelect01"><h3>สายที่ 3</h3></label>
                                    </div>
                                    <select id = "option3" class="custom-select" style="height: 100%;font-size: 1.5em" id="inputGroupSelect01">
                                    <option value="None" selected>Choose...</option>
                                    <?php while($option3 = $res->fetch_assoc()){ ?>
                                        <?php if($option3['Subject_Id'] == $pri3){ ?>
                                            <option selected value="<?php echo $option3["Subject_Id"] ?>"><?php echo $option3["Subject_Name"] ?></option>
                                        <?php }else{?>
                                            <option value="<?php echo $option3["Subject_Id"] ?>"><?php echo $option3["Subject_Name"] ?></option>
                                        <?php } ?>
                                    <?php } $res->data_seek(0);?>
                                </select>
                                </div>
                            </div>
            
            
            
                            <div class="con3-box d-flex align-items-center">
                                    <div class="input-group mb-3" style="height: 3em;">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text pt-3" for="inputGroupSelect01"><h3>สายที่ 4</h3></label>
                                        </div>
                                        <select id = "option4" class="custom-select" style="height: 100%;font-size: 1.5em" id="inputGroupSelect01">
                                    <option value="None" selected>Choose...</option>
                                    <?php while($option4 = $res->fetch_assoc()){ ?>
                                        <?php if($option4['Subject_Id'] == $pri4){ ?>
                                            <option selected value="<?php echo $option4["Subject_Id"] ?>"><?php echo $option4["Subject_Name"] ?></option>
                                        <?php }else{?>
                                            <option value="<?php echo $option4["Subject_Id"] ?>"><?php echo $option4["Subject_Name"] ?></option>
                                        <?php } ?>
                                    <?php } $res->data_seek(0);?>
                                </select>
                                    </div>
                                </div>
        </div>
    </div>



    <a onclick="Isconfirm()"  class="p1-con4 d-flex justify-content-center">
        <img src="./recourses/confirm.png">
    </a>

    <script>

function checkNone(){
            var option1 = document.getElementById("option1");
            var option2 = document.getElementById("option2");
            var option3 = document.getElementById("option3");
            var option4 = document.getElementById("option4");

            var array = [option1.value, option2.value, option3.value, option4.value];
            
            console.log(array);
            for(let i=0;i<4;i++){
                if(array[i] == "None"){
                    alert('กรุณาเลือกให้ครบทุกลำดับ');
                    return false;
                }
                for(let j=0;j<4;j++){ 
                    if(i == j){ 
                        continue;
                    }
                    if(array[i]==array[j]){
                        alert('มีการเลือกลำดับซ้ำ กรุณาเลือกใหม่');
                        return false;
                    }
                }
            }
            return true;
        }


        function Isconfirm(){
            if(checkNone()){
                console.log('Checking ...');
                if( confirm("คุณแน่ใจที่จะยืนยันการส่งข้อมูล ?") ){
                    save();
                }
            }
        
        }

        function save(){
            var option1 = document.getElementById("option1");
            var option2 = document.getElementById("option2");
            var option3 = document.getElementById("option3");
            var option4 = document.getElementById("option4");
           
            console.log("option1 : ",option1.value);
            
        
            
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){

                }
            }
            xml.open("GET","components/updatecourse.php?pri=1&"+"us="+"<?php echo "$s_id"; ?>"+"&co="+option1.value,true);
            xml.send();

            
            console.log("option2 : ",option2.value);

            var xml = new XMLHttpRequest();
            xml.open("GET","components/updatecourse.php?pri=2&"+"us="+"<?php echo "$s_id"; ?>"+"&co="+option2.value,true);
            xml.send();


            
            console.log("option3 : ",option3.value);

            var xml = new XMLHttpRequest();
            xml.open("GET","components/updatecourse.php?pri=3&"+"us="+"<?php echo "$s_id"; ?>"+"&co="+option3.value,true);
            xml.send();

            
            console.log("option4 : ",option3.value);

            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){ //ajax  javascript request to api
                if(this.readyState == 4 && this.status == 200){
                    alert("ส่งข้อมูลของคุณแล้ว");
                }
            }
            xml.open("GET","components/updatecourse.php?pri=4&"+"us="+"<?php echo "$s_id"; ?>"+"&co="+option4.value,true);
            xml.send();
            
        }

    </script>
</body>

</html>