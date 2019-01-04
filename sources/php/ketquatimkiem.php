
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGHE NHẠC ONLINE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  audio{
    width:750px;
    height:54px;
  } 

  </style>
  
</head>
<?php require('connect.php'); ?>
<body>
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
      <?php
session_start();
if(isset($_SESSION['username'])){
?>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
<?php
}else{
?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
<?php
}
?>
      <form class="navbar-form navbar-center" action="ketquatimkiem.php" method="get"><?php //sử dụng get để hiển thị từ khóa tìm kiếm lên url?>
        <div class="form-group input-group">
          <input type="text" class=" form-control" id="txtsearch" name="keyword" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="searchbutton">
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
    <h1 class="text-danger">KẾT QUẢ TÌM KIẾM</h1><br>
    <div>
      <?php
          
         $keyword=$_GET['keyword'];
         //tìm kiếm theo bài hát
         $sql="select tenbaihat from baihat where tenbaihat like'%$keyword%'";
         $query= mysqli_query($con,$sql);
         $num =mysqli_num_rows($query);
         if($num==0){
             echo '<h3 style="color:red">';
            echo 'Không có bài hát nào phù hợp với từ khóa " ';
             echo $keyword;
             echo ' "</h3>';
         }
         
         else{
            echo'<h3>';
            echo 'BÀI HÁT';
            echo '</h3>';
            echo '<div class="well">';
            while($row=mysqli_fetch_array($query)){
                
                echo'<a href"#">';
                echo'<h3>';
                echo $row['tenbaihat'];
                echo '</h3>';
                echo '</a>';
               
            }echo'</div>';
         }
         //Tìm kiếm theo ca sĩ
         $sql2="select casi from danhsachcasi where casi like'%$keyword%'";
         $query2= mysqli_query($con,$sql2);
         $num2 =mysqli_num_rows($query2);
         if($num2==0){
            echo '<h3 style="color:red">Không có ca sĩ nào phù hợp với từ khóa "';
            echo $keyword;
            echo ' "</h3>';
         }else{
            echo'<h3>';
            echo 'Ca Sĩ';
           
            echo '</h3>';
            echo '<div class="well">';
            while($row2=mysqli_fetch_array($query2)){
                echo'<div class="results">';
                echo'<a href"#">';
                echo'<h3>';
                echo $row2['casi'];
                echo '</h3>';
                echo '</a>';
                echo '</div>';
            }echo'</div>';
         }
      ?>
    </div>
    <h1 class="text-danger">BÀI HÁT MỚI</h1><br>
      <div class="well"><div class="bg-info"> <div class="container-fluid bg-4 text-center">   
            
            <div class="row">
               <div class="col-sm-4"> 
                  <a href="anhsairoi.php"><img src="../images/anhsairoi.jpg" class="img-responsive" style="width:100%"  alt="Anh sai rồi-Sơn Tùng MTP"><p>Anh sai rồi-Sơn Tùng MTP</p></a>
                </div>
              <div class="col-sm-4"> 
                <a href="#"><img src="../images/thuong.jpg" class="img-responsive" style="width:100%"  alt="Thương-Quốc Thiên"><p>Thương-Quốc Thiên</p></a>
              </div>
              <div class="col-sm-4"> 
                <a href="#"><img src="../images/chiconmotdemcuoi.jpg" class="img-responsive" style="width:100%" alt="Nếu chỉ còn một đêm cuối-Tuấn Hưng"><p>Nếu chỉ còn một đêm cuối-Tuấn Hưng</p></a>
              </div>
              <div class="col-sm-4">
                    <a href="#"><img src="../images/sainguoisaithoidiem.jpg" class="img-responsive" style="width:100%" alt="Sai người sai thời điểm"><p>Sai người sai thời điểm</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/giupanhtraloinhungcauhoi.jpg" class="img-responsive" style="width:100%"  alt="Giúp anh trả lời những câu hỏi"><p>Giúp anh trả lời những câu hỏi</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/chiacachbinhyen.jpg" class="img-responsive" style="width:100%" alt="Chia cách bình yên-Quốc Thiên"><p>Chia cách bình yên-Quốc Thiên</p></a>
              </div>
              <div class="col-sm-4">
                    <a href="#"><img src="../images/buoncuaanh.jpg" class="img-responsive" style="width:100%" alt="Buồn của anh-Huy Đạt"><p>Buồn của anh-Huy Đạt</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/buonkhongem.jpg" class="img-responsive" style="width:100%"  alt="Buồn không em-Đạt G"><p>Buồn không em-Đạt G</p></a>
              </div>
              <div class="col-sm-4"> 
                    <a href="#"><img src="../images/anhyeuem.jpg" class="img-responsive" style="width:100%" alt="Anh yêu em-Khắc Việt"><p>Anh yêu em-Khắc Việt</p></a>
              </div>
            </div>
          </div><br></div></div>
       <h1 class="text-danger">MV HOT</h1><br>
       <div class="well"><div class="bg-warning"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
            <div class="col-sm-4">
                    <a href="#"><img src="../images/chieuhomay.jpg" class="img-thumbnail" style="width:100%" alt="Chiều hôm ấy-Jayki"><p>Chiều hôm ấy-Jayki</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/doithay.jpg" class="img-thumbnail" style="width:100%"  alt="Đổi thay-Hồ Quang Hiếu"><p>Đổi thay-Hồ Quang Hiếu</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/dungnhuthoiquen.jpg" class="img-thumbnail" style="width:100%" alt="Đừng như thòi quen-Jayki"><p>Đừng như thòi quen-Jayki</p></a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../images/emthatlangoc.jpg" class="img-thumbnail" style="width:100%" alt="Em thật là ngốc-Vũ Duy Khánh"><p>Em thật là ngốc-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-sm-4">
                <a href="#"><img src="../images/thanghekhoc.jpg" class="img-thumbnail" style="width:100%" alt="Thằng hề khóc-Dương 565"><p>Thằng hề khóc-Dương 565</p></a>
              </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/chayngaydi.jpg" class="img-thumbnail" style="width:100%" alt="Chạy ngay đi-Sơn Tùng MTP"><p>Chạy ngay đi-Sơn Tùng MTP</p></a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../images/emsehoihan.jpg" class="img-thumbnail" style="width:100%" alt="Em sẽ hối hận-Vũ Duy Khánh"><p>Em sẽ hối hận-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/guongmatlalam.jpg" class="img-thumbnail" style="width:100%"  alt="Gương mặt lạ lẫm -MR SIRO"><p>Gương mặt lạ lẫm -MR SIRO</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/ngaymaisekhac.jpg" class="img-thumbnail" style="width:100%" alt="Ngày mai sẽ khác-Khắc Hiếu"><p>Ngày mai sẽ khác-Khắc Hiếu</p></a>
                </div>
                </div>
              </div><br></div></div> 
    </div>
   
   <div class="col-sm-4 sidenav">
      <h1 class="text-danger">CHỦ ĐỀ HOT</h1><br>
      <a href="#"><img src="../images/chude1.jpg" class="img-responsive" style="width:100%" alt="EDM">EDM</a>
      <a href="#"><img src="../images/chude2.jpg" class="img-responsive" style="width:100%" alt="CHRISTMAS">CHRISTMAS</a>
      <a href="#"><img src="../images/chude7.jpg" class="img-responsive" style="width:100%" alt="WINTER">WINTER</a>
      <a href="#"><img src="../images/chude4.jpg" class="img-responsive" style="width:100%" alt="MUSIC FOR LOVE">MUSIC FOR LOVE</a>
      <a href="#"><img src="../images/chude5.jpg" class="img-responsive" style="width:100%" alt="RADIO MP3">RADIO MP3</a>
      <a href="#"><img src="../images/chude6.png" class="img-responsive" style="width:100%" alt="NHỮNG BÀI HIT">NHỮNG BÀI HIT</a>
      
     
        
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
