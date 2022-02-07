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
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
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
    <!-- NOI DUNG -->
    <section>
        <div class="amthuc">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">名物</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">場所</a>
                            <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">おお八つ</a> -->
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510370-150650999422034-ld3.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Trà Atiso(アティソティー)</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#dacsan1">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510370-15065099947784-ld2.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Cafe Chồn (イタチコーヒー)</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#dacsan2">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/hinh1.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh tráng nướng (焼きライスペーパー)</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#dacsan3">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999417421-ld7.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Dâu tây (いちご)</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#dacsan4">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999419579-ld4.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Chả răm bắp (春巻)</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#dacsan5">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999423549-ld5.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Lẩu bò tiềm (牛鍋)</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#dacsan6">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999447977-ld6.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Mứt (ジャム)</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#dacsan7">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999472643-ld9.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh ướt lòng gà (チキンハートのウェットケーキ)</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#dacsan8">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/1506510371-150650999491438-ld8.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Nai nướng (鹿のグリル)</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#dacsan9">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/Untitled-1.png" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Nem Nướng Bà Hùng</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#nem1"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/cropper_636919028332812967.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Nem Bà Nghĩa</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#nem2"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/doanvat.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Khu ăn vặt Chợ Đà Lạt</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#cho"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/cah-lam-mon-banh-trang-nuong-61-nguyen-van-troi.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh tráng nướng Nguyễn Văn Trỗi</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#cho1"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/review-banh-trang-nuong-112-nguyen-van-troi.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh tráng nướng 112 Nguyễn Văn Trỗi</h5>
                                                <div class="center-img">
                                                    <a href="" class="view" data-toggle="modal" data-target="#cho2"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/quan-banh-can-4-da-lat.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh Căn bình dân</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#cho3"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/foody-mobile-hmb-jpg-680-636021078743196557.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh Căn Tăng Bạt Hổ</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#cho4"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/banh-uot-long-ga-da-lat-1.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Bánh ướt lòng gà Long</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#cho5"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="card">
                                            <div class="card-imgs"><img src="./images/doan/quanan/banh-uot-2.jpg" class="card-img-top" alt="..."></div>
                                            <div class="card-body">
                                                <h5 class="card-title">Quán Trang-Bánh ướt lòng gà</h5>
                                                <div class="center-img">
                                                    </br><a href="" class="view" data-toggle="modal" data-target="#cho6"><i class="fas fa-map-marker-alt"></i>&ensp;Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
            <!--click đặc sản-->
            <div class="modal fade" id="dacsan1" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Trà Atiso(アティソティー)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/artichoke-in-baskets-fresh-spring-vegetables-at-royalty-free-image-157315654-1547835108-16189389874251284802650-124-0-1938-2903-crop-16189390010081224627973.jpg" alt="trang1">
                            <p>アーティチョークを育てるのに適した天気はダラットだけです。 ここに来る訪問者はしばしばアーティチョークティーを贈り物として購入します。 このお茶はとても香りがよく、美味しくてとても健康的です。 お茶を作るだけでなく、花やアーティチョークの植物も薬やスープとして使われています。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan2" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cafe Chồn (イタチコーヒー)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/cf chon 2.jpg" alt="trang1">
                            <p>ラムドンのように天候の良い地域でしか高品質のコーヒーの木を育てられないプレミアムコーヒーです。 イタチコーヒーを楽しむと、コーヒーの強い香りに加えて、大地の肉質と森の香りが感じられます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan3" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh tráng nướng (焼きライスペーパー)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/50908-banh-trang-nuong-da-lat6-700x700.jpg" alt="trang1">
                            <p>この歩道のケーキは、全国のすべての州と都市を襲いました。 ここの焼きライスペーパーはベトナム版のピザと比較されています。 ケーキは一年中販売されていますが、まだ肌寒い日が一番です。 チーズ、乾燥牛肉、香ばしい卵で満たされた熱くて金色のケーキを手に持って、食事をする人はとても暖かく感じるでしょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan4" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Dâu tây (いちご)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/vuon-dau-tay-dulichdalat-1.jpg" alt="trang1">
                            <p>ほとんどの観光客のお気に入りの趣味は、ダラットの庭でイチゴを選ぶことです。 ここで栽培されているイチゴは、他の多くの場所とは味と品質が異なります。 大きくてジューシーで甘酸っぱいベリーはとても人気があります。 その上、いちごはまた、いちごワイン、いちごジャム、スムージー、カクテルなど、他の多くのものに加工されます...</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan5" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Chả răm bắp (春巻)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/cha-ram-bap-da-lat.jpeg" alt="trang1">
                            <p>春巻は多くの人に馴染みがあるかもしれませんが、ラムドンのコーンケーキは非常に独特の風味があります。 唐辛子の辛味、ピーナッツのサクサク感、ベイビーコーンの甘い香りが特徴です。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan6" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Lẩu bò tiềm (牛鍋)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/3-lau-bo-da-lat-mon-ngon-hoi-tu-tinh-tuy-cua-nui-rung.jpg" alt="trang1">
                            <p>初めてこの料理を食べると、薬の香りと牛肉の強い香りの両方で不思議な味わいが感じられ、スープもコクがあります。 また、お腹や肝臓にもとても良い一品です。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan7" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Mứt (ジャム)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/27522-mut-da-lat-670x446.jpg" alt="trang1">
                            <p>ダラットはフルーツパラダイスなので、ここのジャムの種類は無数にあります。 ここのジャムは、すべての色、すべての種類のユニークな味があります。 おいしいジャムを購入したい場合は、ピンクジャム、裸のキンカンジャム、柔らかいサツマイモジャム、特にローズジャムに言及する必要があります。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan8" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh ướt lòng gà (チキンハートのウェットケーキ)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/long__ansapsaigon_1.jpg" alt="trang1">
                            <p>濡れたケーキですが、春巻きやロールパンと一緒に食べられませんが、鶏の腸は多くの訪問者に好奇心をそそります。 これは、柔らかくてしなやかなケーキと、甘くて香りのよい鶏肉、カリカリの脂っこい鶏肉の腸、そして少しのラクサの葉とバナナのユニークで斬新な組み合わせです。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dacsan9" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nai nướng (鹿のグリル)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" src="./images/doan/dac san/Xieng Nuong Da Lat.jpg" alt="trang1">
                            <p>グリルした鹿を楽しむためにダラットに行くことは、適切であるために寒い午後に行かなければなりません。 片側には暖かい炭ストーブがあり、反対側には友達がいて、炭ストーブで焼けるように暑い鹿肉を食べながらおしゃべりをしています。 調理された肉の香りは、香りがよく、脂っこくて甘いです。緑の塩とコショウで味付けし、少量のワインを飲むと、いつまでも思い出に残るひとときを過ごすことができます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--click map-->
            <div class="modal fade" id="nem1" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nem Nướng Bà Hùng</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.338768054818!2d108.43176031481167!3d11.951030891531127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112d60d249fe7%3A0x7a83cb43341aad05!2sNem%20Mrs%20Hung%20(Qu%C3%A1n%20Nem%20B%C3%A0%20H%C3%B9ng)!5e0!3m2!1svi!2sjp!4v1641646571446!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="nem2" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nem Bà Nghĩa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15613.79740645551!2d108.4405289!3d11.9433596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b3f722ed63fd943!2zTmVtIELDoCBOZ2jEqWE!5e0!3m2!1svi!2sjp!4v1641648815443!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Khu ăn vặt Chợ Đà Lạt</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15613.521259613633!2d108.43299502763718!3d11.948149314527676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317113ff4e41e7c3%3A0x21cff9ad21a7243c!2zQ2jhu6MgxJDDqm0gxJDDoCBM4bqhdA!5e0!3m2!1svi!2sjp!4v1641650140546!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho1" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh tráng nướng Nguyễn Văn Trỗi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15613.63174463098!2d108.4356805!3d11.9462332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cb76e879a6cfe0e!2zQsOhbmggdHLDoW5nIG7GsOG7m25n!5e0!3m2!1svi!2sjp!4v1641650424397!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho2" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh tráng nướng 112 Nguyễn Văn Trỗi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15613.497547985802!2d108.4373632!3d11.9485605!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x110a05b28a894c63!2zQsOhbmggVHLDoW5nIE7GsOG7m25nIDExMg!5e0!3m2!1svi!2sjp!4v1641650608284!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho3" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh Căn bình dân</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.4339121906323!2d108.43187845045995!3d11.944430939772058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317113295105f589%3A0x94fe186c1fefc6f!2zNjIgUGhhbiDEkMOsbmggUGjDuW5nLCBQaMaw4budbmcgMSwgVGjDoG5oIHBo4buRIMSQw6AgTOG6oXQsIEzDom0gxJDhu5NuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sjp!4v1641651004297!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho4" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh Căn Tăng Bạt Hổ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15613.764249562759!2d108.4351737!3d11.9439348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c88d2004c0b0922!2zQsOhbmggY8SDbiBUxINuZyBC4bqhdCBI4buV!5e0!3m2!1svi!2sjp!4v1641651672908!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho5" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bánh ướt lòng gà Long</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7806.89616359037!2d108.42664667435673!3d11.943447716144657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112d776d0dcf9%3A0xf6791b517c1491c6!2zQsOhbmggxrDhu5t0IGzDsm5nIGfDoCBMb25n!5e0!3m2!1svi!2sjp!4v1641652091265!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cho6" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Quán Trang-Bánh ướt lòng gà</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.439919687309!2d108.43278981481163!3d11.944014091535854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171132eca7969cd%3A0x5936a295e8c57c41!2zUXXDoW4gVHJhbmcgLSBCw6FuaCDGsOG7m3QgbMOybmcgZ8Og!5e0!3m2!1svi!2sjp!4v1641652287488!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var $filter = $('#codinh');
            var $filterSpacer = $('<div />', {
                "class": "vnovernight",
                "height": $filter.outerHeight()
            });
            if ($filter.size()) {
                $(window).scroll(function() {
                    if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top) {
                        $filter.before($filterSpacer);
                        $filter.addClass("fix");
                    } else if ($filter.hasClass('fix') && $(window).scrollTop() < $filterSpacer.offset().top) {
                        $filter.removeClass("fix");
                        $filterSpacer.remove();
                    }
                });
            }
        });
    </script>
</body>

</html>