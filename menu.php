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

    <link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/orange-scheme.css">
    <!-- BOOTSTRAP JS -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    
    <!-- OWL CAROUSEL JS-->
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/jquery.js"></script>

    <script src="./js/jquery-1.10.2.min.js"></script>
	<script src="./js/jquery-migrate-1.2.1.min.js"></script>
    <title>LAM DONG</title>
</head>

<body>
    <header>
        <!-- header-top -->
        <div class="header__top d-flex justify-content-between align-items-center text-center container-fluid py-2">
            <div class="header__left">

                <a href="mailto:jennyho1503@gmail.com" class="text-black-50 text-decoration-none"><i
                        class="far fa-envelope"></i>Email</a>
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
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link" href="menu.php">MENU</a>
                                <div class="dropdown-content ">
                                    <a class="dropdown-item" href="diadiem.php">Tourist Spot</a>
                                    <a class="dropdown-item" href="amthuc.php">Food and Dring</a>
                                    <a class="dropdown-item" href="giaothong.php">Traffic And Hotel</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link line" href="blog.php">BLOG<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="contact.php">CONTACT <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- OFFER -->
    <section class="offer section">
        <div class="offer__content container">
            <div class="row">
                <div class="col-12 col-lg-4 offer__col">
                    <a href="diadiem.php">
                        <div class="offer__items">
                            <i class="fas fa-globe"></i>
                            <h3>Tourist Spot</h3>
                            <p>noi dung</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 offer__col">
                    <a href="amthuc.php">
                        <div class="offer__items">
                            <i class="fas fa-utensils"></i>
                            <h3>Food and Dring</h3>
                            <p>noi dung</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 offer__col">
                    <a href="giaothong.php">
                        <div class="offer__items">
                            <i class="fas fa-car"></i>
                            <h3>Traffic</h3>
                            <p>noi dung</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- hinh -->
    <section>
    <div class="container">	
		<div class="row">
			<div class="col-md-12">
				<ul id="filters" class="mixitup-controls">
					<li class="filter" data-filter="all">All</li>
					<li class="filter" data-filter="tourist">Tourist Spot</li>
					<li class="filter" data-filter="hotel">Hotel</li>
					<li class="filter" data-filter="food">Food</li>
					<li class="filter" data-filter="drink">Drink</li>
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<div class="container text-center w-auto">
		<div class="row w-100">
			<div class="portfolio-holder" id="Grid">
				<div class="portfolio-post col-sm-6 col-md-3 mix hotel">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">サミーホテルダラット</span>
                                    <h3 class="portfolio-title"><a href="#">Khách sạn Sammy Đà Lạt</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/ks1.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/ks1.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix tourist">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">ダラットのラムビエン広場</span>
                                    <h3 class="portfolio-title"><a href="#">Quảng Trường Lâm Viên Đà Lạt</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh2-2.jpg" title="Compass Template">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh2-2.jpg" alt="Compass Template">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix food">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">ブンボーフエ</span>
                                    <h3 class="portfolio-title"><a href="#">Bún Bò Huế</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/bunbo.jpg" title="Awesome Theme">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/bunbo.jpg" alt="Awesome Theme">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix drink">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">グレープフルーツティー</span>
                                    <h3 class="portfolio-title"><a href="#">Chè Bưởi</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/chebuoi.jpg" title="Volton Personal Site">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/chebuoi.jpg" alt="Volton Personal Site">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix tourist">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Linh Quy Phap An Pagoda</span>
                                    <h3 class="portfolio-title"><a href="#">Linh Quy Pháp Ấn</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh9.jpg" title="Rectangle Design">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh9.jpg" alt="Rectangle Design">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix hotel">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">ROY DALAT ホテル</span>
                                    <h3 class="portfolio-title"><a href="#">Khách sạn ROY DA LAT</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/ks2.jpg" title="Masonry Gallery">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/ks2.jpg" alt="Masonry Gallery">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix tourist ">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">スアンフォン湖</span>
                                    <h3 class="portfolio-title"><a href="#">Hồ Xuân Hương</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh10.jpg" title="Gloss Template">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh10.jpg" alt="Gloss Template">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix food ">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">チキンハートのウェットケーキ</span>
                                    <h3 class="portfolio-title"><a href="#">Bánh ướt lòng gà</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/dac san/hinh1.jpg" title="Ion Template">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/dac san/hinh1.jpg" alt="Ion Template">
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="portfolio-post col-sm-6 col-md-3 mix tourist">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">リンアンパゴダ</span>
                                    <h3 class="portfolio-title"><a href="#">Chùa LINH ẤN</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh8.jpg" title="Freshness">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh8.jpg" alt="Freshness">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix hotel">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">ゴックファットホテル</span>
                                    <h3 class="portfolio-title"><a href="#">Khách sạn Ngọc Phát</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/ks3.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/ks3.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix food">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">焼きライスペーパー</span>
                                    <h3 class="portfolio-title"><a href="#">Bánh tráng nướng</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh1.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh1.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix food">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">焼きネム</span>
                                    <h3 class="portfolio-title"><a href="#">Nem Nướng</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh2.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh2.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix drink">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">イチゴジュース</span>
                                    <h3 class="portfolio-title"><a href="#">Nước ép dâu tây</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh5.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh5.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->
                
                <div class="portfolio-post col-sm-6 col-md-3 mix drink">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">豆乳</span>
                                    <h3 class="portfolio-title"><a href="#">Sữa đậu nành</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh6.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh6.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix tourist">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">チキンチャーチ</span>
                                    <h3 class="portfolio-title"><a href="#">Nhà Thờ con gà</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh11.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh11.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix tourist">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">リンフォックパゴダ</span>
                                    <h3 class="portfolio-title"><a href="#">Chùa Linh Phước(chùa ve chai)</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/diadiem/hinh7-7.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/diadiem/hinh7-7.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix food">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">揚げ春巻き</span>
                                    <h3 class="portfolio-title"><a href="#">Nem Rán</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh3.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh3.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

                <div class="portfolio-post col-sm-6 col-md-3 mix food">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">焼きライスペーパー</span>
                                    <h3 class="portfolio-title"><a href="#">Bánh tráng nướng</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/doan/hinh4.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/doan/hinh4.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-3 -->

			</div> <!-- /.portfolio-holder -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->

    </section>
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
    <script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>
</body>

</html>