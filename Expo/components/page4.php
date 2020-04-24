<?php
    require('dbcon.php');
    session_start();
    $s_id = $_SESSION['user'];
    $q = "SELECT subject.Subject_Id,subject.Subject_Name from student join subject on student.Student_Subject = subject.Subject_Id WHERE student.Student_Id like '$s_id' ";
    $res = $con->query($q);
    $before = $res->fetch_assoc();

    $q = "SELECT * FROM subject WHERE subject.Subject_Status = 1";
    $res = $con->query($q);
    

?>
<!DOCTYPE html>

<body>
    <div class="row d-flex justify-content-center" style="padding-left:1em;margin-top: 50px;">
        <div class="col-4">
        </div>
        <div class="col-4 d-flex justify-content-center">
            <h1><B>ยื่นคำร้องเปลี่ยนสายการเรียน</B></h1>
        </div>
        <div class="col-4 d-flex justify-content-center">
        </div>
    </div>

    <div class="row d-flex justify-content-center" style="padding-left:1em;margin-top: 10px;">
        <div class="col-12 d-flex justify-content-center">
            <h3><FONT COLOR=#B00707>************ นิสิตสามารถเลือกสายการเรียนใหม่ได้แค่ครั้งเดียวเท่านั้น ************</FONT></h3>
        </div>
    </div>
    
    <div class="d-flex flex-column justify-content-center" style="height: 65%">
        <div class="row d-flex justify-content-center" style="padding-left:1em;">
            <div class="col-8">
                <div class="input-group mb-3" style="height: 3em;">
                    <div class="input-group-prepend">
                        <label class="input-group-text pt-3" for="inputGroupSelect01">
                            <h3>สายเดิม</h3>
                        </label>
                    </div>
                    <input class="custom-select" value="<?php echo $before['Subject_Name']; ?>" readonly style="height: 100%;font-size: 1.5em" id="inputGroupSelect01">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="padding-left:1em;">
            <div class="col-8">
                <div class="input-group mb-3" style="height: 3em;">
                    <div class="input-group-prepend">
                        <label class="input-group-text pt-3" for="inputGroupSelect01">
                            <h3>สายใหม่</h3>
                        </label>
                    </div>
                    <select class="custom-select" style="height: 100%;font-size: 1.5em" id="select1">
                        <option value="None" selected>Choose...</option>    
                    
                        <?php while($after = $res->fetch_assoc()){ if($before['Subject_Id']!=$after['Subject_Id']){?>
                            <option value="<?php echo $after['Subject_Id']; ?>"><?php echo $after['Subject_Name'] ?></option>
                        <?php }} ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em">
            <div class="col-1">
                <h3>หมายเหตุ</h3>
            </div>
            <div class="col-7">
                <input class="form-control" id='reason' type="text" style="font-size: 1.5em">
            </div>

        </div>

        <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em">
            <a onclick="changeCourse()" class="col-4 d-flex justify-content-center" style="cursor: pointer; height: 100%">
                <img style="height: 100%;" src="./recourses/confirm.png">
            </a>
        </div>
    </div>
    <script>
        function changeCourse(){
            var s_id = '<?php echo $s_id; ?>';
            var before = '<?php echo $before['Subject_Id']; ?>';
            var after = document.getElementById('select1').value;
            var reason = document.getElementById('reason').value;
            if(after == "None"){
                alert('กรุณาเลือกสายการเรียนใหม่');
                return false;
            }
            console.log(s_id);
            console.log(before);
            console.log(after);
            console.log(reason);
            var xml = new XMLHttpRequest();
        
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);
                    $("#content").load("./components/page5.php");
                }
            }
            xml.open('GET','components/insertHistory.php?s_id='+s_id+'&before='+before+'&after='+after+'&reason='+reason,true);
            xml.send();
        }
    
    </script>
</body>