<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.css">
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="./js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/orange-scheme.css">
    <!-- OWL CAROUSEL JS-->
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/jquery.js"></script>
    <title>LAM DONG</title>
</head>

<body>
    <header>
        <!-- header-top -->
        <div class="header__top d-flex justify-content-between align-items-center text-center container-fluid py-2">
            <div class="header__left">

                <a href="mailto:jennyho1503@gmail.com" class="text-black-50 text-decoration-none"><i class="far fa-envelope"></i>Email</a>
            </div>
            <div class="header__right">
                <a href="https://www.facebook.com/hoang.m.huan/"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/superman_minhhuan/"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <!-- header-center -->
        <div id="header-center ">
            <nav class="container-fluid">
                <div id="center">
                    <div class="center-left">
                        <div class="flex">
                            <a href="" id="logo">
                                <img src="img/lam dong1.png" alt="" />
                            </a>
                            <h2 class="animate__animated animate__flash"> Wellcom to LAM DONG </h2>
                        </div>
                    </div>

                    <div class="center-right">
                        <div class="flex-end">
                            <div class="contact-top">
                                <p class="bold"><i class="fas fa-envelope-square"></i>C200636@ccg.ac.jp </br>C200***@ccg.ac.jp</p>
                            </div>
                            <div class="login">
                                <h4>Login</h4>
                                <a href="login.php"><i class="fas fa-sign-in-alt"></i></a>
                            </div>
                            <div class="hotro">
                                <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    <span>Need help</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- MENU -->
        <div class="container-">
            <div id="Menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="menu.php">MENU</a>
                                <div class="dropdown-content ">
                                    <a class="dropdown-item" href="diadiem.php">Tourist Spot</a>
                                    <a class="dropdown-item" href="amthuc.php">Food and Dring</a>
                                    <a class="dropdown-item" href="giaothong.php">Traffic And Hotel</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link line" href="blog.php">BLOG</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- NOIDUNG -->
    <?php
    $gioHienTai = gmdate("H")+ 9;
    echo "Bây giờ là <b>" . $gioHienTai . " giờ ! </b> ";
   if(gmdate("H")<=12) echo "<span class='sang'>Chào buổi sáng! Chúc an lành</span>"; 
   else echo "<span class='chieu'>Chào buổi chiều! Chúc mạnh khỏe</span>";
?>
    <div class="container">	
		<div class="row">

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<h3>中央情報専門学校</h3>
              <p>
                HOANG MINH HUAN - ホアンミンフアン</br>
                HO THI THANH TRANG - ホティタンチャン
              </p>
							<div class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.1486286904624!2d139.57473325097604!3d35.820828929813025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e9cfd7d1432f%3A0xb3bd977e73abf923!2z5Lit5aSu5oOF5aCx5bCC6ZaA5a2m5qCh!5e0!3m2!1svi!2sjp!4v1643198962048!5m2!1svi!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			                </div>
						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <h3>Send a Direct Message</h3>
	                        <div class="widget-inner">
                            <form action="#" method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                            <label for="name">Your Name:</label>
                                            <input type="text" name="name" id="name">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="email">Email Address:</label>
                                             <input type="email" name="email" id="email">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="subject">Subject:</label>
                                             <input type="text" name="subject" id="subject">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="message">Your message:</label>
                                            <textarea name="message" id="message"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="mainBtn" id="submit">Send Message</button>
                                    </div>
                                </div>
                                <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
                                <!-- <div class="row">
                                	<div class="col-md-12">
                                		<div id="result"></div>
                                	</div> 
                                </div>  -->
                            </form>
                          </div> <!-- /.widget-inner -->
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					
					
					
					<div class="sidebar-widget">
          <div class="sidebar-heading">
                      <h2>お問い合わせ</h2>
                    </div>
            <div class="col-lg-8">
                  <div class="sidebar-item contact-information">
                  
                    <div class="content">
                      <ul>
                        <li>
                          <h5>090-2914-8756＿＿＿090-***-***</h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>C200636@ccg.ac.jp</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>〒352-0001 埼玉県新座市東北２丁目３３−10</h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	

    <footer>
        <div class="footer__top section">
            <div class="footer__content container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <h3>about us</h3>
                        <p>thong tin ve nhóm, thanh vien</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h3>thanh vien</h3>
                        <div class="footer__link">
                            <i class="fa fa-long-arrow-alt-right"></i>
                            <a href="#">ホティタンチャン</a>
                        </div>
                        <div class="footer__link">
                            <i class="fa fa-long-arrow-alt-right"></i>
                            <a href="#">ホアンミンフアン</a>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <h3>contact info</h3>
                        <div class="footer__contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <a href="#"> 埼玉県富士見市</a>
                        </div>
                        <div class="footer__contact">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:C200636@ccg.ac.jp"> Email</a>
                        </div>
                        <div class="footer__contact">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:07044711101">123456789</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__form container mt-5">
                <form>
                    <div class="form-group form-row">
                        <label class="col-12 col-lg-4  col-form-label" for="staticEmail2">Sign up for our Newsletter</label>
                        <div class="col-8 col-lg-6">
                            <input type="email" class="form-control" id="emailFooter" placeholder="Enter Email Address ...">
                        </div>
                        <div class="col-4 col-lg-2 text-center">
                            <button type="submit" class="btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer__bot">
            <div>
                &copy; 2021 All right reserved | Designed by <a href="#">Trang va Huan</a>
            </div>
        </div>
    </footer>
    <!-- BACK TO TOP -->
    <div class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>
        $(document).ready(function() {
            var offset = 220;
            var duration = 500;
            $(window).scroll(function() {
                if ($(this).scrollTop() >
                    offset) {
                    $('.back-to-top').fadeIn(duration);
                } else {
                    $('.back-to-top').fadeOut(duration);
                }
            });
            $('.back-to-top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                return false;
            })
        });
    </script>

</body>
<script type="text/javascript" src="js/script.js"></script>
<script src="./js/jquery-1.10.2.min.js"></script>
</html>