<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN LÝ NHẠC</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
  require('connect.php');
  ?>
<nav class="navbar navbar-inverse  navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      <a class="navbar-brand" href="index.php"><img src="../images/logomega.png" class="img-responsive" alt="mega"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="admin.php">Quản Lý Thành Viên</a></li>
      <li><a href="quanlynhac.php">Quản Lý Nhạc</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<?php
    $id_nhac=$_GET['id'];//lấy id trên url trang suauser
    //echo $id;
     $sql="select * from baihat where id_nhac='$id_nhac'";
     $query=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($query);
     
?>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">SỬA THÔNG TIN BÀI HÁT</h2>
    <div >
        <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['tenbaihat']) || empty($_POST['casi'])|| empty($_POST['theloai'])|| empty($_POST['duongdan'])|| empty($_POST['loibaihat'])|| empty($_POST['nguoidang']))
                  {
                    echo '<p style="color:red">Vui lòng nhập đầy đủ thông tin</p>';
                  }else{//nếu điền đầy đủ thông tin thì update
                    $tenbaihat=$_POST['tenbaihat'];
                    $casi=$_POST['casi'];
                    $theloai=$_POST['theloai'];
                    $duongdan=$_POST['duongdan'];
                    $loibaihat=$_POST['loibaihat'];
                    $nguoidang=$_POST['nguoidang'];
                    $sql2="update baihat set tenbaihat='$tenbaihat',casi='$casi',theloai='$theloai',duongdan='$duongdan',loibaihat='$loibaihat' ,nguoidang='$nguoidang'where id_nhac='$id_nhac'  ";
                    $query2=mysqli_query($con,$sql2);
                    if($query2){
                        header('location:quanlynhac.php');//nếu câu lệnh truy vấn được được thực thì thì sẽ chuyển hướng đến trang quanlynhac.php
                    }
                    } 
                  }      
            
        ?>
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label  for="">Tên Bài Hát:</label>
            <input type="text" class="form-control" name="tenbaihat" placeholder="Tên Bài Hát..." value="<?php echo $row['tenbaihat']; ?>">
            <label for="">Ca Sĩ:</label>
            <input type="text" class="form-control" name="casi" placeholder="Ca Sĩ..." value="<?php echo $row['casi']; ?>">
            <label for="">Thể Loại:</label>
            <input type="text" class="form-control" name="theloai" placeholder="Thể Loại..." value="<?php echo $row['theloai']; ?>">
            <label for="">Đường Dẫn:</label>
            <input type="tex" class="form-control" name="duongdan" placeholder="Đường Dẫn..." value="<?php echo $row['duongdan']; ?>">
            <label for="">Lời Bài Hát:</label>
            <input type="text" class="form-control" name="loibaihat" placeholder="Lời Bài Hát..." value="<?php echo $row['loibaihat']; ?>">
            <label for="">Người Đăng:</label>
            <input type="text" class="form-control" name="nguoidang" placeholder="Người Đăng..." value="<?php echo $row['nguoidang']; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Sửa</button> 
      </form>
  </div>
</div>
</div>
<footer class="container-fluid text-center">
  <img src="../images/thanghekhoc.jpg" class="img-responsive" style="width:15% " alt="Image">
  <p></p>
</footer>

</body>
</html>
<?php
    }else{
      header('location:index.php');
    }
?>
