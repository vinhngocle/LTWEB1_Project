<?php
  require_once './lib/db.php';
?>

<?php
session_start();

require_once './vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;

if (isset($_POST["btnRegister"])) {
	$input = $_POST["txtUserInput"];
	if ($input == $_SESSION["captcha"]) {
    
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop Obaju</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- <script type="text/javascript">
        function CheckRegister()
        {
          var username = document.getElementById("txtUsername");
          var password = document.getElementById("txtPassword");
          var capcha = document.getElementById("txtUserInput");          
          var re_password = document.getElementById("txtRepassword");

          if(username.value == "")
          {
            alert("Username trống!");
            username.focus();
            return flase;
          }
          if(password.value == "")
          {
            alert("Password trống!");
            password.focus();
            return flase;
          }
          if(re_password.value == "" || re_password.value != password.value)
          {
            alert("Password trống!");
            password.focus();
            return flase;
          }
          if(capcha.value == "")
          {
            alert("capcha không đúng!");
            capcha.focus();
            return flase;
          }
          alert("Đăng ký thành công.");
          return true;
        }
      </script> -->
  </head>
  <body>
    <?php
      if(isset($_POST["btnRegister"]))
      {
        $tentaikhoan = $_POST["txtUsername"];
        $matkhau = $_POST["txtPassword"];
        $dienthoai = $_POST["txtPhone"];
        $diachi = $_POST["txtAddress"];
        $email = $_POST["txtEmail"];
        $sql = "insert into taikhoan(NguoiDung, MatKhau, DienThoai, DiaChi, Email) values('$tentaikhoan', '$matkhau', '$dienthoai', '$diachi', '$email')";
        $result = write($sql);
      }
    ?>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="login.php">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h5>Quần áo</h5>
                        <ul class="list-unstyled mb-3">               
                          <li class="nav-item"><a href="#" class="nav-link">Áo thun</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Áo khoác</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Quần jeans</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5>Giày</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="#" class="nav-link">Giày thể thao</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Giày Sandals</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Giày lười</a></li>                         
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Quần áo</h5>
                        <ul class="list-unstyled mb-3">               
                          <li class="nav-item"><a href="#" class="nav-link">Áo thun</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Áo khoác</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Quần jeans</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Giày</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="#" class="nav-link">Giày thể thao</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Giày Sandals</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Giày lười</a></li>                         
                        </ul>
                      </div>

                    </div>
                  </li>
                </ul>
              </li>
    
              
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>New account</h1>               
                <form action="register.php" method="post" onsubmit="return CheckRegister();">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="txtUsername" name="txtUsername" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="txtPassword" name="txtPassword" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="re_password">Re_Password</label>
                    <input id="txtRepassword" name="txtRepassword" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="phone">Điện thoại</label>
                    <input id="txtPhone" name="txtPhone" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input id="txtAddress" name="txtAddress" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="txtEmail" name="txtEmail" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <?php
                      $builder = new CaptchaBuilder;
                      $builder->build();
                      $_SESSION["captcha"] = $builder->getPhrase();
                    ?>
                    <img src="<?= $builder->inline() ?>" alt="captcha" />
					        </div>
                  <div class="form-group">
                    <label for="txtUserInput">Captcha</label>
                    <input type="text" class="form-control" id="txtUserInput" name="txtUserInput">
				        	</div>
                  <div class="text-center">
                    <button type="submit" name="btnRegister" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">  
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2018 Your name goes here.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious: E-commerce</a>
              <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :)-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/front.js"></script>


    <script type="text/javascript">
		$('#f').on('submit', function (e) {
			e.preventDefault();

			var form = this;

			var username = $('#txtUsername').val();
			if (username.length === 0) {
				alert('null');
				return;
			}
      
			//var url = 'api/user_check.php?user=' + username;
			$.getJSON(url, function (data) {
				if (data === 1) {
					alert('existed');
				} else {
					form.submit();
				}
			});
		});
	</script>
  </body>
</html>