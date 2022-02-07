<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if($_SESSION["login_user"] != true){
    echo 'not logged in';
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
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

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <title>LAM DONG</title>
</head>

<body>
    <header>
        <!-- header-top -->
        <div class="header__top d-flex justify-content-between align-items-center text-center container-fluid py-2">
            <div class="header__left">

                <a href="mailto:C200636@ccg.ac.jp" class="text-black-50 text-decoration-none"><i class="far fa-envelope"></i>Email</a>
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
                                <img src="images/lam dong1.png" alt="" />
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
                            <li class="nav-item active">
                                <a class="nav-link line" href="index.php">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link line" href="menu.php">MENU</a>
                                <div class="dropdown-content ">
                                    <a class="dropdown-item line" href="diadiem.php">Tourist Spot</a>
                                    <a class="dropdown-item line" href="amthuc.php">Food and Dring</a>
                                    <a class="dropdown-item line" href="giaothong.php">Traffic And Hotel</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link line" href="blog.php">BLOG<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link line" href="contact.php">CONTACT<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- SLIDE -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/slide/Untitled-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/slide/Untitled-2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/slide/Untitled-3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- wellcome -->
    <section class="welcome section">
        <div class="heading">
            <h2>WELCOME TO DA LAT - LAM DONG</h2>
            <p></p>
        </div>
        <div class="welcome__content">
            <p>ラムドンは、ベトナムの<ruby>中部高原<rt>ちゅうぶこうげん</rt></ruby>にある5つの州の1つであり、南部の主要経済地域に隣接する、国内で7番目に大きな州です。 中部(ちゅうぶ)高原(こうげん)の最も(もっとも)高い(たかい)高原(こうげん)に位置(いち)するのは海抜(かいばつ)1500(１５００)メートル(めーとる)のラムビエン(らむびえん)-(－)ディリン(でぃりん)であり、国境(こっきょう)を持たない(もたない)中部(ちゅうぶ)高原(こうげん)で唯一(ゆいいつ)の州(しゅう)です。
                州(しゅう)都(と)はホーチミン(ほーちみん)市(し)の北東(ほくとう)300km(３００ｋｍ)、ダナン(だなん)市(し)の南(みなみ)658(６５８) km(ｋｍ)、国道(こくどう)1A(１Ａ)沿い(ぞい)のハノイ(はのい)の首都(しゅと)から1(１),414km(４１４ｋｍ)に位置(いち)するダラット(だらっと)市です。2010年にラムドンは中央高地の最初の州でした。州(しゅう)の直下(ちょっか)の都市(とし)（ダラット、バオロク）。
            </p>
        </div>
    </section>
    <!-- OFFER -->
    <section class="offer section">
        <div class="heading">
            <h2>Some characteristics of Lam Dong</h2>
            <p></p>
        </div>
        <div class="offer__content container">
            <div class="row">

                <div class="col-12 col-lg-4 offer__col">
                    <a href="#" data-toggle="modal" data-target="#climate">
                        <div class="offer__items">
                            <i class="fas fa-snowflake"></i>
                            <h3>Climate</h3>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 offer__col">
                    <a href="amthuc.php">
                        <div class="offer__items">
                            <i class="fas fa-utensils"></i>
                            <h3>Food and Dring</h3>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 offer__col">
                    <a href="#" data-toggle="modal" data-target="#traffic">
                        <div class="offer__items">
                            <i class="fas fa-car"></i>
                            <h3>Traffic</h3>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- click offer -->
    <div class="modal fade" id="climate" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">気候</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/10ddvn-sapa1.jpg" alt="trang1">
                    <p>ラムドンは熱帯モンスーン気候の影響を受ける地域にあり、標高によって異なり、1年に2つの異なる季節があります。 5月から11月までの雨季、12月から翌年4月までの乾季。平均気温は18度から250度で、一年中穏やかで涼しい天気です。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="traffic" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">交通</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/Giao-thong-2-700x375.jpg" alt="trang1">
                    <p>ダラットの交通には、他の場所とは異なる特別な機能があります。ここの道路はほとんど急勾配なので、ここには信号はありません。代わりに、交差点で多くのラウンドアバウトがあります。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- hinh -->
    <section class="dark-content portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">ラムドンのいくつかの観光地</h2>

                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">谷が大好き</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#thunglung">Thung Lũng Tình Yêu</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh1.jpg" title="Thung Lũng Tình Yêu">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh1.jpg" alt="Thung Lũng Tình Yêu">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">ダラットのラムビエン広場</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#quangtruong">Quảng Trường Lâm Viên Đà Lạt</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh2.jpg" title="Quảng Trường Đà Lạt">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh2.jpg" alt="Quảng Trường Đà Lạt">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">ダンブリ滝</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#dambri">Thác DamBri</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh3.jpg" title="Thác DamBri">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh3.jpg" alt="Thác DamBri">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Truc Lam Zen Monastery</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#chua">Thiền Viện Trúc Lâm</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh4.jpg" title="Thiền Viện Trúc Lâm">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh4.jpg" alt="Thiền Viện Trúc Lâm">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Linh Quy Phap An Pagoda</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#linhquy">Linh Quy Pháp Ấn</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh5.jpg" title="Linh Quy Phấp Ấn">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh5.jpg" alt="Linh Quy Phấp Ấn">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">チキンチャーチ</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#conga">Nhà Thờ Con Gà</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh6.jpg" title="Nhà thờ con gà">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh6.jpg" alt="Nhà thờ con gà">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">ヴェチャイ神殿</span>
                                <h3 class="portfolio-title"><a href="" data-toggle="modal" data-target="#vechai">Chùa Ve Chai</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="./images/diadiem/hinh7.jpg" title="Chùa Ve Chai">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./images/diadiem/hinh7.jpg" alt="Chùa Ve Chai">
                </div>
            </div> <!-- /.item -->
        </div> <!-- /#owl-demo -->
    </section> <!-- /.portfolio-holder -->
    <!--click View-->
    <div class="modal fade" id="thunglung" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thung Lũng Tình Yêu (谷が大好き)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/hinh1-1.jpg" alt="trang1">
                    <p>愛の谷は、市内中心部から北に約5 kmのところにある、ダラットで最も詩的な風景の1つです。 ここは、ダティエンダムが高い丘や山から流れる小川を集め、緑の松の木が並ぶ谷に曲がりくねった透明なダティエン湖を形成する場所です。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quangtruong" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quảng Trường Lâm Viên Đà Lạt(ダラットのラムビエン広場)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/hinh2-2.jpg" alt="trang1">
                    <p>ダラットのラムビエン広場は2009年に建設され、2016年に完成して稼働するまでに6回の建設工事が必要でした。最大6,810億ドンの予算で、このプロジェクトはラムドン省の重要な主要プロジェクトの1つと見なされています。 。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="chua" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thiền Viện Trúc Lâm (Truc Lam Zen Monastery)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/thien-vien-truc-lam-da-lat-2.jpg" alt="trang1">
                    <p>Truc Lam Zen Monasteryは、Truc Lam YenTu宗派の禅僧院です。僧院は、トゥエンラム湖の上のプンホアン山にあるダラット市の中心部から5kmです。ここはラムドンで最大の僧院であるだけでなく、多くの国内外の観光客を訪れて崇拝する場所でもあります。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dambri" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thác DamBri (ダムブリ滝)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/thac dambri.jpg" alt="trang1">
                    <p>ダムブリ滝はラムドンの有名な光景です。この場所はバオロクの中心部から約18kmで、ラムドンで最大かつ最も美しい滝の1つです。滝は、多くの観光サービスや娯楽スポットがあるダンブリ観光団地にあります。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="linhquy" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Linh Quy Pháp Ấn(Linh Quy Phap An Pagoda)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/hinh5-5.jpg" alt="trang1">
                    <p>Linh Quy Phap An Pagodaは、ラムドン省バオロク市のLocThanhコミューンの丘45に隠されています。 ここの風景は、純粋で平和なおとぎの国に例えられます。 新鮮で調和のとれた気候は、緑豊かな木々に囲まれています。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="conga" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nhà Thờ Con Gà(チキンチャーチ)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/hinh6-6.jpg" alt="trang1">
                    <p>ダラット大聖堂（正式名称：聖ニコラス大聖堂、鐘楼の頂上に大きな鶏の像があるため、鶏教会としても知られています）は、ベトナムのカトリック教会です。 これはダラット教区の司教の大聖堂教会であり、フランス人が残したこの都市の最も典型的で古代の建築作品の1つであるダラットで最大の教会でもあります。 教会は、ベトナムのラムドン県ダラット市第3区、トランフー通り13番地にあります。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="vechai" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chùa Ve Chai(ヴェチャイ神殿)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="./images/diadiem/hinh7-7.jpg" alt="trang1">
                    <p>Ve ChaiPagoda-ダラットにある大胆なアジアのアイデンティティを持つ寺院。 この神殿はリンフォックパゴダとしても知られていますが、地元の人々は「ヴェチャイ」という名前をよく知っています。 この名前はまた、神殿の奇妙で美しい建築に由来しています。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- event -->
    <section class="news section">
        <div class="heading">
            <h2>EVENT</h2>
            <p></p>
        </div>
        <div class="news__content container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <img class="img-fluid" src="./images/diadiem/30687-le-hoi-tra-o-da-lat.jpg" alt="trang1">
                </div>
                <div class="col-12 col-md-6 col-lg-7 mt-3 mt-md-0">
                    <h3>
                        <a href="#" data-toggle="modal" data-target="#exampleModal-1">お茶文化祭</a>
                    </h3>
                    <h4>毎年12月</h4>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-7 mt-3 mt-md-0">
                    <h3>
                        <a href="#" data-toggle="modal" data-target="#exampleModal-2">ダラットフラワーフェスティバル</a>
                    </h3>
                    <h4>12月に2年に1回</h4>

                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <img class="img-fluid" src="./images/diadiem/festival-hoa-da-lat-2020.jpg" alt="trang2">
                </div>
            </div>
        </div>


    </section>


    <!-- click-event -->
    <section>
        <div class="modal fade" id="exampleModal-1" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">お茶文化祭</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="./images/diadiem/du-lich-canh-viet-1344850537-an-tuong-sunlight-chanh-dau-tien-3.jpg" alt="trang1">
                        <p>バオロク茶文化祭は、ラムドンでの茶の栽培と加工を称えるお祭りです。同時に、ここに来て、長年のお茶のブランドを宣伝してください。そして、全国的に、そして特にラムドン省で有名です。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal-2" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ダラットフラワーフェスティバル</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="./images/diadiem/festival-hoa-da-lat-1.jpg" alt="trang1">
                        <p>ダラットフラワーフェスティバルは、ダラット市、ラムドン、ベトナム、およびラムドン県の他のいくつかの地域で12月に開催されるお祭りイベントです。ダラットは一年で最も美しい天気の月です。フラワーフェスティバルは、観光客を誘致する目的で、地元だけでなく、国内の多くの地域や他のいくつかの国からの野菜、花、観賞植物を展示および展示する機会です。ダラットのリゾート、経済成長を促進する都市。フラワーフェスティバルは、花と花卉園芸の価値を称え、ダラットの花卉園芸への投資を呼びかけ、ダラットの街、文化、人々のイメージと美しさを促進する活動でもあります。これは国内および国際的なイベントです。</p>
                    </div>
                </div>
            </div>
        </div>
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
                        <h3>member</h3>
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
    <script src="./js/min/plugins.min.js"></script>
    <script src="./js/min/medigo-custom.min.js"></script>

</body>

</html>