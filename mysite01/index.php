<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .mView{
        width: 100%;padding-top: 36%;
        position: relative;overflow: hidden;
        clear: both;
        
        }
    .mView video{position: absolute;width: 100%;left: 50%;top: 50%; transform:translate(-50%,-50%);object-fit: fill;}
</style>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted="" draggable="true"></video>
</div>

<div class="mainCon01 container py-5 mt-5">
    <div class="row">
        <div class="col-12 col-md-7 imgBox mb-3 mb-md-0 order-2 mt-5 mt-md-0">
            <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_visual_all.png" alt="">
        </div>
        <div class="col-12 col-md-5 txtBox order-1 order-md-2 mb-5 mb-md-0">
            <div class="txtWrap">
                <h2 class="fs-1 fw-bold text-center text-md-start">YBM 레몬만의 </h2>
                <h2 class="fs-1 fw-bold text-center text-md-start mb-3">전용뷰어로 수업 </h2>
                <p class="text-secondary text-center text-md-start fs-6 fs-md-5">화상 회의실 같은 딱딱한 뷰어가 아닙니다. </p>
                <p class="text-secondary text-center text-md-start fs-6 fs-md-5">YBM교육이 개발한 <span class="text-success fs-6 fs-md-5 fw-bold">화상수업 전용 뷰어</span>입니다.</p>
            </div>
        </div>
    </div>
</div>








<div class="container cont">
    <div class="row">
        <div class="col-md-4 p-4">
            <?php 
             // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
             // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
             // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
        <div class="col-md-4 p-4">
            <?php echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
        <div class="col-md-4 p-4">
            <?php echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .slide1 .next,.slide1 .prev{cursor: pointer;}
    .slide1 img.prev, .slide1 img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide1 img.prev{left: -50px;}
    .slide1 img.next{right: -50px;}
    .slickslide1 .sItem{
        padding: 10px;opacity: 0.7;transition:.3s;
        transform:scale(0.8);
    }
    .slickslide1 .sItem.slick-center{
        opacity: 1;
        transform:scale(1);
    }


    .slide2 .next,.slide2 .prev{cursor: pointer;}
    .slide2 img.prev, .slide2 img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide2 img.prev{left: -50px;}
    .slide2 img.next{right: -50px;}
    .slickslide2 .sItem{margin: 0 10px;}
    .slide2 .sItem{position: relative;border-radius:10px;overflow: hidden;}
    .slide2 .sItem .txt{
        width: 100%;height: 100%;
        position: absolute;
        top: 0;left: 0;background-color: rgba(0,0,0,.3);

    }
    .slide2 .sItem .txt a {
        height: 100%;
        display: flex;justify-content: center;align-items: center;
        color:#fff;font-size: 2em;
    }
    /* .slickslide2 .sItem.slick-center{
        opacity: 1;
        transform:scale(1);
    } */
</style>
<div class="container position-relative slide1">
    <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_left.png" alt="" class="prev d-none d-md-block" >
    <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_right.png" alt="" class="next d-none d-md-block">
    <div class="slickslide1">
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img1.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img2.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img3.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img4.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img5.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img6.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img7.jpg" alt="" class="img-fluid">
        </div>
       
    </div>
</div>


<div class="container position-relative slide2">
    <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_left.png" alt="" class="prev d-none d-md-block" >
    <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_right.png" alt="" class="next d-none d-md-block">
    <div class="slickslide2">  
        <?php 
            echo latest('theme/pic_dorong', 'gallery', 7, 23);		// 최소설치시 자동생성되는 갤러리게시판
        ?>
        </div>
</div>


<script>
    $('.slickslide1').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,
    nextArrow:$('.slide1 .next'),
    prevArrow:$('.slide1 .prev'),
    
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
    });


    $('.slickslide2').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,
    nextArrow:$('.slide2 .next'),
    prevArrow:$('.slide2 .prev'),
    
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
    });

</script>




<?php
include_once(G5_THEME_PATH.'/tail.php');