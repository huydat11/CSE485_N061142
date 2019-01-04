

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
<?php
         
     
         require('connect.php');
         
          $sql="SELECT * FROM baihat WHERE tenbaihat= 'Anh Sai Rồi' ";
          $query=mysqli_query($con,$sql);//truy vấn dữ liệu
          $row=mysqli_fetch_array($query);//truy xuất dữ liệu 
          
        ?>
        
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left">
    <div >
    <a href="#"><img src="../images/nennhac2.gif" style="width:750px;  height:150px;" id="nennhac" alt="gif sóng âm"></a>
    <audio   loop controls  autoplay>
        <source src="<?php echo $row['duongdan'];?>" type="audio/mpeg">
    </audio>
     
 </div>
     
      <div class="well">
      <h3 class="text-danger">Ca Khúc :<a href="anhsairoiindex.php"><?php echo $row['tenbaihat'];?></a></h3>
    <h3 class="text-danger">Thể hiện : <a href="#"><?php echo $row['casi'];?></a></h3>
    <h3 class="text-danger">Sáng Tác : <a href="#"><?php echo $row['tacgia'];?></a></h3>
    <h3 class="text-danger">Thể loại : <a href="#"><?php echo $row['theloai'];?></a></h3>
        <h3 class="text-danger">Lời Bài Hát:</h3><br>
        <p><?php echo $row['loibaihat'];?></p>
            
  </div>
  <h1 class="text-danger">BÀI HÁT CỦA SƠN TÙNG MTP</h1><br>
      <div><div > <div class="container-fluid bg-4 text-center">   
            
            <div class="row">
               <div class="col-sm-3"> 
                  <a href="#"><img src="../images/anhsairoi.jpg" class="img-responsive" style="width:100%"  alt="Anh Sai Rồi"><p>Anh Sai Rồi</p></a>
                </div>
              <div class="col-sm-3"> 
                <a href="#"><img src="../images/lactroi.jpg" class="img-responsive" style="width:100%"  alt="Lạc Trôi"><p>Lạc Trôi</p></a>
              </div>
              <div class="col-sm-3"> 
                <a href="#"><img src="../images/thaibinh.jpg" class="img-responsive" style="width:100%" alt="Thái Bình mồ hôi rơi"><p>Thái Bình mồ hôi rơi</p></a>
              </div>
              <div class="col-sm-3">
                    <a href="#"><img src="../images/nangamxadan.jpg" class="img-responsive" style="width:100%" alt="Nắng Ấm Xa Dần"><p>Nắng Ấm Xa Dần</p></a>
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
        <h1 class="text-danger">CA SĨ NỔI BẬT</h1><br>
        <div class="well"><div class="bg-success"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
            <div class="col-sm-6">
                    <a href="#"><img src="../images/sontung.jpg" class="img-circle" style="width :60%" alt="SƠN TÙNG MTP"><p>SƠN TÙNG MTP</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/vuduykhanh.jpg" class="img-circle" style="width:60%"  alt="VŨ DUY KHÁNH"><p>VŨ DUY KHÁNH</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/jayki.jpg" class="img-circle" style="width:60%" alt="JAYKI"><p>JAYKI</p></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="../images/quocthien.jpg" class="img-circle" style="width:60%" alt="QUỐC THIÊN"><p>QUỐC THIÊN</p></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="../images/hoquanghieu.jpg" class="img-circle" style="width :60%" alt="HỒ QUANG HIẾU"><p>HỒ QUANG HIẾU</p></a>
                </div>
                <div class="col-sm-6"> 
                    <a href="#"><img src="../images/mrsiro.jpg" class="img-circle" style="width:60%"  alt="MR.SIRO"><p>MR.SIRO</p></a>
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
      
      <h1 class="text-danger">BXH VIỆT NAM</h1><br>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Bài Hát</th>
              <th scope="col">Ca sĩ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="#"> Anh đang ở đâu đấy anh</a></td>
              <td><a href="#">Hương Giang Idol</a></td>
              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="#"> Con trai cưng</a></td>
              <td><a href="#">Bray</a></td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="#">Em không thể</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><a href="#">Vô tình</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><a href="#">Hongkong1</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><a href="#"> Suýt Nữa Thì</a></td>
              <td><a href="#">Hương Giang Idol</a></td>
              
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="#"> Một Phút</a></td>
              <td><a href="#">Bray</a></td>
              
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="#">Vài Giây Nữa Thôi</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><a href="#">Chạy Ngay Đi</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">10</th>
              <td><a href="#">Người Phản Bội</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
          </tbody>
        </table>
        <br>
        <h1 class="text-danger">BXH HÀN QUỐC</h1><br>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Bài Hát</th>
              <th scope="col">Ca sĩ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="#">Really Bad Boy</a></td>
              <td><a href="#">Red Velvet</a></td>
             
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="#">Yes or Yes</a></td>
              <td><a href="#">Twice</a></td>
             
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="#"> DDU DU DDu</a></td>
              <td><a href="#">Black Pink</a></td>
             
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><a href="#"> Idol</a></td>
              <td><a href="#"> BTS</a></td>
              
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><a href="#">fake Love</a></td>
              <td><a href="#">BTS</a></td>
              
            </tr><tr>
              <th scope="row">6</th>
              <td><a href="#">The End</a></td>
              <td><a href="#">Red Velvet</a></td>
             
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="#">NO NO NO</a></td>
              <td><a href="#">Twice</a></td>
             
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="#"> Pink</a></td>
              <td><a href="#">Black Pink</a></td>
             
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><a href="#"> The Blue</a></td>
              <td><a href="#"> BTS</a></td>
              
            </tr>
            <tr>
              <th scope="row">10</th>
              <td><a href="#">Hello</a></td>
              <td><a href="#">BTS</a></td>
              
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div>

<footer class="container-fluid  ">
<div class="col-sm-4 text-left">
  <img src="../images/logomega.png" style="width:150px;  height:100px;">
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
