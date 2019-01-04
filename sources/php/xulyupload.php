<?php
    session_start();
    if ($_FILES["fileUpload"]["error"] > 0)
    {
        echo '<p style="color:red">Bạn chưa nhập file để upload!</p>';
        
    }
    else
     {
     
      if($_FILES["fileUpload"]["type"] != "audio/mp3")//kiểm tra xem file upload có đúng dạng mp3 không
      {
        echo '<p style="color:red">file upload không đúng định dạng mp3 !</p>';
      }else{
        if($_FILES["fileUpload"]["size"]>30*1024*1024)
        {
          echo '<p style="color:red">bạn chỉ được upload file <30MB !</p>';
        }else{
           
            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], '../mp3/' . $_FILES["fileUpload"]["name"]);
            echo "upload thành công <br/>";
            $_SESSION['namefileupload'] =$_FILES["fileUpload"]["name"];
            
            header('location:formupload.php');
        }
      }
     }

?>
 