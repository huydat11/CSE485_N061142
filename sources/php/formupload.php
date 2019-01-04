<?php
    session_start();
    if(isset($_SESSION['username'])&&isset($_SESSION['namefileupload'])){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGHE NHẠC ONLINE-UPLOAD</title>
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
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Trữ Tình</a></li>
              <li><a href="#">Pop</a></li>
              <li><a href="#">Vinahouse</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nghệ Sĩ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng Xếp Hạng<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
      <form class="navbar-form navbar-center" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
       </form>
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left">
    <div >
        <?php
           if(isset($_POST['submit'])){
                if(empty($_POST['tenbaihat']) || empty($_POST['casi'])|| empty($_POST['theloai'])|| empty($_POST['duongdan'])|| empty($_POST['loibaihat'])|| empty($_POST['nguoidang']))
                  {
                    echo '<p style="color:red">Vui lòng nhập đầy đủ thông tin</p>';
                  }else{//nếu điền đầy đủ thông tin thì update
                   $tenbaihat=$_POST['tenbaihat'];
                    $casi=$_POST['casi'];
                    $tacgia=$_POST['tacgia'];
                    $theloai=$_POST['theloai'];
                    $duongdan=$_POST['duongdan'];
                    $loibaihat=$_POST['loibaihat'];
                    $nguoidang=$_POST['nguoidang'];
                   /* echo $casi.' '.$tacgia.' '.$theloai.' '.$duongdan.' '.$loibaihat.' '.$nguoidang;*/
                     $sql="INSERT INTO `baihat` (`id_nhac`, `tenbaihat`, `casi`, `tacgia`, `theloai`, `duongdan`, `loibaihat`, `nguoidang`) VALUES (NULL, '$tenbaihat', '$casi', '$tacgia', '$theloai', '$duongdan', '$loibaihat', '$nguoidang')";
                    $query=mysqli_query($con,$sql);
                    if($query){
                     
        
                        echo"<script type='text/javascript'>";
                        echo"alert('upload thành công và đang chờ xử lý')";
                       
                        echo"</script>";
                      }
                    }
                  }      
                
        ?>
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label  for="">Tên Bài Hát:</label>
            <input type="text" class="form-control" name="tenbaihat" placeholder="Tên Bài Hát...">
            <label for="">Ca Sĩ:</label>
            <input type="text" class="form-control" name="casi" placeholder="Ca Sĩ..." >
            <label for="">Tác Giả:</label>
            <input type="text" class="form-control" name="tacgia" placeholder="Tác Giả..." >
            <label for="">Thể Loại:</label>
            <input type="text" class="form-control" name="theloai" placeholder="Thể Loại..." >
            <label for="">Đường Dẫn (không được thay đổi):</label>
            <input type="tex" class="form-control" name="duongdan" placeholder="Đường Dẫn..."  value="../mp3/<?php echo $_SESSION['namefileupload'];?>">
            <label for="">Lời Bài Hát:</label>
            <input type="text" class="form-control" name="loibaihat" placeholder="Lời Bài Hát...">
            <label for="">Người Đăng (không được thay đổi):</label>
            <input type="tex" class="form-control" name="nguoidang" placeholder="Người đăng..."  value="<?php echo $_SESSION['username'];?>">
        </div>
        <button type="submit" name="submit" class="btn btn-danger">UpLoad</button> 
      </form>
  </div>
    </div>
   
    <div class="col-sm-4 sidenav" text-left>
        
            <h3 class="text-danger">Nội dung cấm upload:</h3><br>
            <p>- Nội dung liên quan đến chính trị, trái thuần phong mỹ tục</p>
            <p>- Nội dung đã thuộc sở hữu của bên thứ ba, được quy định rõ ở đây.</p>
            <p text-left>- Nội dung đã được phát hành trên Zing MP3.</p>
    
   <h3 class="text-danger">Quy định upload:</h3><br>
            <p>- Kích thước file nhạc tối đa là 60MB.                </p>
            
            <p>- Mỗi tài khoản thường được phép upload tối đa 200 bài hát (không giới hạn đối với tài khoản VIP).</p>
            <p>- Tính năng upload sẽ bị khóa (tạm thời) nếu bạn cố tình vi phạm nhiều lần các quy định về nội dung cấm (đã nêu ở trên)</p>
    </div>
  </div>
</div>

<footer class="container-fluid  ">
<div class="col-sm-4 text-left">
  <img src="../images/logomega.png" style="width:150px;  height:150px;">
  </div>
  <div class="col-sm-8 text-left">
  
<table style="width:50%">
  
  <tr>
    <td><a href="#">Giới Thiệu</td>
    <td><a href="#">Điều Khoản </td>
    <td><a href="#">Liên Hệ</td>
  </tr>
  <tr>
  <td><a href="#">Quảng Cáo</td>
  <td><a href="#">Ứng Dụng</td>
  <td><a href="#">Góp Ý</td>
  </tr>
  <tr>
  <td><a href="#">Copyright</td>
  <td><a href="#">FAQs</td>
 
  </tr>
</table>
</div>
  </div>
</footer>

</body>
</html>
<?php
    }else{
      header('location:index.php');
    }
?>
