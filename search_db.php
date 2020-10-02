<?php
    $con = mysqli_connect('localhost','root','','project');

    if(isset($_POST['search']))
    {
        $id = $_POST['id'];
        $dept=$_POST['dept'];
       
    
    $result= mysqli_query($con,"SELECT * FROM project_table where id ='$id' and dept='$dept'");
    if($row=mysqli_fetch_array($result)){
    ?>

        <div class="style">
        <span>YOUR ROOM NUMBER</span>
        <b id="bold"><?php echo $row['room_no']; ?></b>
        </div>
        <?php
        }else{
            ?>
        <div class="style" id="error">
        <?php echo "please enter the valid ID"; ?>
        </div>
    <?php
        }
        ?>
    <?php  
        }
    ?>
    