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

                <a href="mailto:jennyho1503@gmail.com" class="text-black-50 text-decoration-none"><i class="far fa-envelope"></i>C200***@ccg.ac.jp</a>
            </div>
            <div class="header__right">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                            <li class="nav-item active">
                                <a class="nav-link " href="blog.php">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- NOIDUNG -->
    <section>
        <div class="container">
            <div class="card mb-3">
                <div class="card-img"><img src="./images/blog/kinh-nghiem-du-lich-da-lat-ban-can-luu-lai-1.png" class="card-img-top" alt="..."></div>
                <div class="card-body">
                    <div class="center-img">
                       <h5><a href="https://4travel.jp/travelogue/11617389" class="view">BLOG 1</a></h5>
                    </div>
                    <h2><p class="card-text text-center">ダラットの旅行体験。</p></h2>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-img"><img src="./images/blog/nhung-dia-diem-dep-o-da-lat.jpg" class="card-img-top" alt="..."></div>
                <div class="card-body">
                    <div class="center-img">
                       <h5><a href="https://vn-kankou.com/safety-dalat/" class="view" >BLOG 2</a></h5>
                    </div>
                    <h2><p class="card-text text-center">ダラットの旅行体験。</p></h2>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            
        </div>


    </section>
    <!-- FOOTER -->
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
                            <a href="mailto:jennyho1503@gmail.com"> C200***@ccg.ac.jp</a>
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

</html>