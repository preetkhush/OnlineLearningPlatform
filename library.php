


<?php

    $conn=new PDO('mysql:host=localhost; dbname=onlinelearningsystem', 'root', '') or die(mysql_error());

    if(isset($_POST['submit'])!=""){
      $name=$_FILES['file']['name'];
      $size=$_FILES['file']['size'];
      $type=$_FILES['file']['type'];
      $temp=$_FILES['file']['tmp_name'];
      $fname = date("YmdHis").'_'.$name;
      $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
      if($chk){
        $i = 1;
        $c = 0;
        while($c == 0){
            $i++;
            $reversedParts = explode('.', strrev($name), 2);
            $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
            $chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
            if($chk2 == 0){
                $c = 1;
                $name = $tname;
            }
        }
    }
     $move =  move_uploaded_file($temp,"upload/".$fname);
     if($move){
        $query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
        if($query){
        header("location:library.php");
        }
        else{
        die(mysql_error());
        }
     }
    }
    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Open-source Library</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>

    <!-- Upload Books -->


    <div class="head2">
        <img src="images/library.jpg" width="1200" height="200" align="center">
    </div>
    <br>
    <div class="nav">
        <ul class="nav nav-pills">
  <li class="active"><a href="home.php">  Home  </a></li>
      <li><a href="library.php"> Upload Books </a></li>
      <li><a href="download.php"> Download Books </a></li>
      <li><a href="kidsactivities.php"> Kids Books </a></li>
    </ul>
    </div>


   <div class="row-fluid">
            <div class="span12">
                <div class="container">
        <h2 align="center">Upload and Download Books for Free</h2> 

       
        <br />
            <form enctype="multipart/form-data" action="" name="form" method="post">
                <h4>Upload Book</h4>
                    <input type="file" name="file" id="file" />
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit" />
            </form>
        <br />
        <br />
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th width="90%" align="center">Files</th>
                    <th align="center">Action</th>  
                </tr>
            </thead>
            <?php
            $query=$conn->query("select * from upload order by id desc");
            while($row=$query->fetch()){
                $name=$row['name'];
            ?>
            <tr>
            
                <td>
                    &nbsp;<?php echo $name ;?>
                </td>
                <td>
                    <button class="btn btn-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
    </div>
    </div>


    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

</body>
</html>