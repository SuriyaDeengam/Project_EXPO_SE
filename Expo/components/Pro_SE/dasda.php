<tr class='tablegroup'>
    <td>
        <div>
            <h3 align='center'
                style='width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; w'>กลุ่มที่ "+
                Obj[i][0]+ " </h3>
        </div><input class='form-control groupname' value='"+Obj[i][1]+"' placeholder='ชื่อโปรเจค'
            style='margin-bottom: 5%' </td> <td>
        <div class='col-sm-12'><select class='studentname browser-default custom-select custom-select-lg mb-3'>
                <option value='' disabled selected>เลือกชื่อนิสิต</option>
                <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                    <?php if(Obj[i][0] == $result['Student_id']){ ?>
                    <option selected value='<?php echo $result['Student_id']; ?>'>
                    <?php }else{ ?>
                        <option value='<?php echo $result['Student_id']; ?>'>
                    <?php } ?>   
                    <?php echo $result['FnameT'];echo ' ';echo $result['LnameT']; ?></option>
                <?php } mysqli_data_seek($student,0);?>
            </select><select class='studentname browser-default custom-select custom-select-lg mb-3'>
                <option value='' disabled selected>เลือกชื่อนิสิต</option>
                <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                    <?php if(Obj[i][1] == $result['Student_id']){ ?>
                    <option selected value='<?php echo $result['Student_id']; ?>'>
                    <?php }else{ ?>
                        <option value='<?php echo $result['Student_id']; ?>'>
                    <?php } ?>  
                    <?php echo $result['FnameT'];echo ' ';echo $result['LnameT']; ?></option>
                <?php } mysqli_data_seek($student,0);?>
            </select><select class='studentname browser-default custom-select custom-select-lg mb-3'>
                <option value='' disabled selected>เลือกชื่อนิสิต</option>
                <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                    <?php if(Obj[i][2] == $result['Student_id']){ ?>
                    <option selected value='<?php echo $result['Student_id']; ?>'>
                    <?php }else{ ?>
                        <option value='<?php echo $result['Student_id']; ?>'>
                    <?php } ?>
                    <?php echo $result['FnameT'];echo ' ';echo $result['LnameT']; ?></option>
                <?php } mysqli_data_seek($student,0);?>
            </select></div>
    </td>
</tr>