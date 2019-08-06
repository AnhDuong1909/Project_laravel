<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="source/css/style.css">
    <link type="text/css" rel="stylesheet" href="source/css/header.css">
    <link type="text/css" rel="stylesheet" href="source/css/home_slides.css">
    <link type="text/css" rel="stylesheet" href="source/css/san_pham.css">
    <link type="text/css" rel="stylesheet" href="source/css/chitiet_sp.css">
    <link type="text/css" rel="stylesheet" href="source/css/aside.css">
    <link type="text/css" rel="stylesheet" href="source/css/footer.css">
    <link type="text/css" rel="stylesheet" href="source/css/tin_tuc.css">
</head>
<body>
    <section id="main" >
     @include('header')
        <!-- END: header -->

        <!-- BEGIN: home_slides -->
        <section class="home_slides">
            <section class="home_slides_img">
                   <img src="source/img/homeslides/hinh1.jpg" style="height: 360px;">
               </section>
               <section class="home_slides_news">
                   <div class="home_slides_news_top">
                       <a href=""><h1>TIN CÔNG NGHỆ</h1></a>
                   </div>

                       <!-- BEGIN: ds_tt -->
                       <div class="home_slides_news_row">
                           <div class="home_slides_news_row_left">
                               <a href="">Tiêu đề bài viết </a>
                               <div>Ngày đăng</div>
                           </div>
                           <div class="home_slides_news_row_right">
                                <img src="source/img/homeslides/hinh1.jpg">
                           </div>
                       </div><br>
                       <!-- END: ds_tt -->

               </section>
           </section>
        <!-- END: home_slides -->

        <section class="content">
         <!-- BEGIN: content_main -->
             @yield('content')
         <!-- END: content_main -->
        <!-- BEGIN: aside -->

       <!-- BEGIN: aside -->
<aside>
    <div class="aside_block">

        <a href=""><h4>ĐANG HOT</h4></a>


        <ul>
            <li>
            <!-- BEGIN: dang_hot1 -->
                <div class="aside_block_sp">
                    <a href=""><img src="source/img/homeslides/hinh3.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: dang_hot1 -->
            </li>
            <li>
                <!-- BEGIN: dang_hot2 -->
                <div class="aside_block_sp">
                    <a href=""><img src="source/img/homeslides/hinh2.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: dang_hot2 -->
            </li>
        </ul>
    </div><br>
    <div class="aside_block">

        <a href=""><h4>HÀNG MỚI VỀ</h4></a>


        <ul>
            <li>
            <!-- BEGIN: hang_moi_ve1 -->
                <div class="aside_block_sp">
                    <a href=""><img src="source/img/homeslides/hinh1.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: hang_moi_ve1 -->
            </li>
            <li>
                <!-- BEGIN: hang_moi_ve2 -->
                <div class="aside_block_sp">
                    <a href=""><img src="source/img/homeslides/hinh3.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: hang_moi_ve2 -->
            </li>
        </ul>
    </div><br>
    <div class="aside_block">

    <a href=""><h4>SẢN PHẨM KHUYỄN MÃI</h4></a>


        <ul>
            <li>
            <!-- BEGIN: khuyen_mai1 -->
                <div class="aside_block_sp">
                    <a href="#"><img src="source/img/homeslides/hinh1.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: khuyen_mai1 -->
            </li>
            <li>
                <!-- BEGIN: khuyen_mai2 -->
                <div class="aside_block_sp">
                    <a href="#"><img src="source/img/homeslides/hinh3.jpg"></a>
                    <h5>Tên sản phẩm</h5>
                </div>
            <!-- END: khuyen_mai2 -->
            </li>
        </ul>
    </div><br>
    <div class="aside_block">
        <a href="#"><h4>DỊCH VỤ</h4></a>
        <p><strong><em>1.</em></strong><strong>Dịch vụ 1: </strong>
             abcdèghiklm</p>

    </div>
</aside>
<!-- END: aside -->
    <!-- END: aside -->

                        </section>
                    </section>
         <!-- BEGIN: footer -->

@include('footer')
    <!-- END: footer -->

</body>
</html>
