<!DOCTYPE html>
<!--suppress ALL -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fudi - Creative One Page Template</title>

    <!-- Bootstrap core CSS -->
    {{--<link href="{{asset('css/app.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="{{asset('component/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('component/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <!-- Add custom CSS here -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/my_style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body id="home">

<!-- Button trigger modal -->
<!--<button >-->
<!--Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div id="boxWrapp">
    <nav id="myNav">
        <a href="#" class="closed">(<i class="fa fa-times"></i>)</a>
        <ul>
            <li><a href="#home">НАЧАЛО</a></li>
            <li><a href="#service">СЕРВИС</a></li>
            <li><a href="#app">О НАС</a></li>
            <li><a href="#testimonial">МЕНЮ</a></li>
            <li><a href="#recipes">КОММЕНТАРИИ</a></li>
        </ul>
    </nav>
    <!-- content -->
    <header class="wrapp-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">
                    <div class="logo">
                        <img src="img/logo.png" alt="fudi"/>
                    </div>
                </div><!-- end col -->
                <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="main-nav clearfix">
                        <div class="btn-group pull-right">
                            <!-- <button type="button" class="btn btn-link">LOG IN</button> -->
                            <!-- <button type="button" class="btn btn-link">SIGN UP</button> -->
                            <button  type="button" class="btn navToggle"><span>МЕНЮ</span> <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </header>
    <!-- content -->
    <section class="main-header">
        <div class="main-head text-center">
            <div class="logo hidden-lg hidden-md visible-sm visible-xs">
                <img src="img/logo.png" alt="fudi"/>
            </div>
            <p class="top animated hidding" data-animated="bounceInUp">Выпечка на заказ</p>
            <h1 class="animated hidding delay2" data-animated="bounceInUp">Кулинария у Вас дома</h1>

            <a type="button" data-toggle="modal" data-target="#exampleModal"
               class="btn btn-clear animated hidding delay3 about-more" data-animated="bounceInUp">Заказать</a>
            <!--<p class="animated hidding delat4" data-animated="bounceInUp">Придумайте текст <a href="#">сами!</a></p>-->
        </div><!-- end main head -->
    </section>
    <!-- end content -->

    <!-- content -->
    <section class="page" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 animated hidding" data-animated="bounceInUp">
                    <div class="build fudi-get text-center">
                        <div class="get-icon">
                            <img src="img/vector-1.png" alt="fudi"/>
                        </div>
                        <h3>ВКУСНО</h3>
                        <div class="title-line"></div>
                        <p>Текст</p>
                    </div><!-- end build -->
                </div><!-- end col -->
                <div class="col-md-4 col-lg-4 animated hidding delay1" data-animated="bounceInUp">
                    <div class="build fudi-get text-center">
                        <div class="get-icon">
                            <img src="img/vector-2.png" alt="fudi"/>
                        </div>
                        <h3>ВЫГОДНО</h3>
                        <div class="title-line"></div>
                        <p>Текст</p>
                    </div><!-- end build -->
                </div><!-- end col -->
                <div class="col-md-4 col-lg-4 animated hidding delay2" data-animated="bounceInUp">
                    <div class="build fudi-get text-center">
                        <div class="get-icon">
                            <img src="img/vector-3.png" alt="fudi"/>
                        </div>
                        <h3>ТЕКСТ</h3>
                        <div class="title-line"></div>
                        <p>Текст</p>
                    </div><!-- end build -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end content -->

    <!-- content -->
    <section class="page-color" id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 animated hidding" data-animated="bounceInUp">
                    <div class="build fudi-app">
                        <div class="img-app">
                            <img src="img/chef.png" alt="fudi"/>
                        </div>
                    </div><!-- end build -->
                </div><!-- end col -->
                <div class="col-md-6 col-lg-6 animated hidding delay2" data-animated="bounceInUp">
                    <div class="build fudi-app">
                        <h3>О нас</h3>
                        <div class="title-line"></div>
                        <!--<p>Morbi eget posuere dolor. Pellentesque cursus aliquet aliquet. Aeneanet felis sit amet diam mollis ullamcorper. Nullam consequat sem a ante vestibulum tristique. Suspendisse tristique lacus ac mattis porta.</p>-->
                        <!--<p>Vivamus ligula quam, vehicula non lacinia sed, faucibus sit amet libero. In-->
                        <!--libero dui, eleifend eu nisi id, egestas fringilla odio. In varius quam a massa hendrerit ullamcorper a eu justo. Suspendisse porta mattis convallis. Aenean tempus ligula ac odio rhoncus, quis aliquam dolor accumsan.</p>-->
                        <!--<p>Suspendisse aliquet felis consectetur libero congue, sed pulvinar diam malesuada. Duis vehicula a nibh id hendrerit. Donec sit amet ultrices ante, a mattis massa.</p>-->
                        <!--<a href="#"><img src="img/appstore.png" alt="fudi" /></a>-->
                        <!--<a href="#"><img src="img/googleplay.jpg" alt="fudi" /></a>-->

                        <p>Приготовим у вас дома - вкусно,быстро.профессионально.</p>
                        <p>Выпечка,Горячие блюда,Лепка пельменей и мантов на ваш вкус.</p>
                        <p>Помощь в проведении банкетов.торжеств у вас дома,возможен выезд на дачу или на природу.</p>
                        <p>Пекарь профессионал научит молодых мам приготовлению выпечки и поделится вами секретами
                            приготовления вкусного теста.</p>

                    </div><!-- end build -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end content -->

    <!-- content -->
    <section class="page-img" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 animated hidding"
                     data-animated="bounceInUp">
                    <div class="build testimonial">
                        <div class="flexslider" id="testiSlide">
                            <ul class="slides">
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar.jpg" alt="fudi" class="img-circle"/>
                                    </div>
                                    <p>"Текст комментария"</p>
                                    <span>Имя Отчество</span>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar.jpg" alt="fudi" class="img-circle"/>
                                    </div>
                                    <p>"Текст комментария"</p>
                                    <span>Имя Отчество</span>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar.jpg" alt="fudi" class="img-circle"/>
                                    </div>
                                    <p>"Текст комментария"</p>
                                    <span>Имя Отчество</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end content -->

    <!-- content -->
    <section class="page" id="recipes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 animated hidding" data-animated="bounceInUp">
                    <div class="build title-page text-center">
                        <h2>НАШЕ МЕНЮ</h2>
                        <div class="title-line"></div>
                    </div><!-- end col -->
                </div><!-- end col -->
            </div><!-- end row -->

            <nav class="navbar navbar-default animated hidding" data-animated="bounceInUp" role="navigation">
                <div class="container ">

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div style="display: flex !important; justify-content: center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Выпечка</a></li>
                            <li><a href="#">Салаты</a></li>
                            <li><a href="#">Горячие блюда</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="row">
                <div class="metro">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay1 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>Текст</p>
                                        <h3>Пироги</h3>
                                    </div>
                                </div>
                                <img src="img/pirog2.png" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay2 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>Текст</p>
                                        <h3>Губадия</h3>
                                    </div>
                                </div>
                                <img src="img/gubadia.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay3 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>27 Recipes</p>
                                        <h3>FRENCH</h3>
                                    </div>
                                </div>
                                <img src="img/portfolio/f3.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay4 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>174 Recipes</p>
                                        <h3>Осетинские пироги</h3>
                                    </div>
                                </div>
                                <img src="img/oseti.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay5 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>131 Recipes</p>
                                        <h3>SEAFOOD</h3>
                                    </div>
                                </div>
                                <img src="img/portfolio/f5.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay6 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>237 Recipes</p>
                                        <h3>SUSHI</h3>
                                    </div>
                                </div>
                                <img src="img/portfolio/f6.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay7 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>329 Recipes</p>
                                        <h3>MEXICAN</h3>
                                    </div>
                                </div>
                                <img src="img/portfolio/f7.jpg" alt="folio">
                            </div>

                        </div>
                    </div><!-- end col -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 hidding animated delay8 mywork"
                         data-animated="bounceInUp">

                        <div class="folio">
                            <div class="hcaption">
                                <div class="myToggle"></div>
                                <div class="attr-icon">
                                    <div class="caption animated onHover" data-animatedin="zoomInUp"
                                         data-animatedout="zoomOutDown">
                                        <p>145 Recipes</p>
                                        <h3>CHINESE</h3>
                                    </div>
                                </div>
                                <img src="img/portfolio/f8.jpg" alt="folio">
                            </div>
                        </div>

                    </div><!-- end col -->


                </div><!-- end metro -->
            </div><!-- end row -->
            <!--<div class="row">-->
            <!--<div class="col-lg-offset-2 col-lg-10">-->
            <!--<div class="row">-->
            <!--<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 animated hidding" data-animated="bounceInUp">-->
            <!--<div class="build fudi-count text-center">-->
            <!--<h3>23,567</h3>-->
            <!--<p>Recipes Available</p>-->
            <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 animated hidding delay2" data-animated="bounceInUp">-->
            <!--<div class="build fudi-count text-center">-->
            <!--<h3>431,726</h3>-->
            <!--<p>Active Users</p>-->
            <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 animated hidding delay2" data-animated="bounceInUp">-->
            <!--<div class="build fudi-count text-center">-->
            <!--<h3>892,726</h3>-->
            <!--<p>Positive Reviewes</p>-->
            <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 animated hidding delay3" data-animated="bounceInUp">-->
            <!--<div class="build fudi-count text-center">-->
            <!--<h3>56,581</h3>-->
            <!--<p>Photos & Video</p>-->
            <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 animated hidding delay4" data-animated="bounceInUp">-->
            <!--<div class="build fudi-count text-center">-->
            <!--<h3>3,182</h3>-->
            <!--<p>Spices and Herbs</p>-->
            <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end row &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end col &ndash;&gt;-->
            <!--</div>&lt;!&ndash; end row &ndash;&gt;-->
        </div><!-- end container -->

    </section>
    <!-- end content -->
    <section class="page" id="recipes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 animated hidding" data-animated="bounceInUp">
                    <div class="build title-page text-center">
                        <h2>СДЕЛАТЬ ЗАКАЗ</h2>
                        <div class="title-line"></div>
                    </div><!-- end col -->
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
            </div><!-- end row -->
        </div><!-- end container -->

    </section>

    <footer>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 ">
                    <div class="build cpright">
                        <p>&copy;2019 Все права защищены</p>
                    </div><!-- end build -->
                </div><!-- end col -->
                <div class="col-lg-6 ">
                    <!--<div class="build desBy text-right">-->
                    <!--<p>Design by: www.bekades.com | Code by: OmahPSD.com </p>-->
                    <!--</div>&lt;!&ndash; end build &ndash;&gt;-->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </footer>
    <!-- end content -->

</div>
<!-- JavaScript -->
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script src="{{asset('js/less-1.7.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('component/jQuery-One-Page-Nav/jquery.nav.js')}}"></script>
<script src="{{asset('component/jquery.inview/jquery.inview.min.js')}}"></script>
<script src="{{asset('component/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
</body>

</html>
