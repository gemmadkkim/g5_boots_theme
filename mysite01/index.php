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
        <div class="col-md-7 imgBox mb-3 mb-md-0 order-2 mt-5 mt-md-0">
            <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_visual_all.png" alt="">
        </div>
        <div class="col-md-5 txtBox order-1 order-md-2 mb-5 mb-md-0">
            <div class="txtWrap">
                <h2 class="fs-1 fw-bold text-center text-md-start">YBM 레몬만의 </h2>
                <h2 class="fs-1 fw-bold text-center text-md-start mb-3">전용뷰어로 수업 </h2>
                <p class="text-secondary text-center text-md-start fs-6 fs-md-5">화상 회의실 같은 딱딱한 뷰어가 아닙니다. </p>
                <p class="text-secondary text-center text-md-start fs-6 fs-md-5">YBM교육이 개발한 <span class="text-success fs-6 fs-md-5 fw-bold">화상수업 전용 뷰어</span>입니다.</p>
            </div>
        </div>
    </div>
</div>
<div class="mainCon02 container ">
    <div class="graph mb-5 ">
        <h2 class="fs-1 fw-bold text-center mb-3" >YBM 레몬만의 밀착 학습관리</h2>
        <p class="text-secondary text-center fs-6 fs-md-5">체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
        <img class="gImg" src="<?php echo G5_THEME_IMG_URL?>/graph.png" alt="">
    </div>
    <div class="row mb-3 ">
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_report.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">학습 결과 보고서</h4>
                    <h4 class="text-secondary fs-5">Daily Class Report</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_test.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">성취도 테스트</h4>
                    <h4 class="text-secondary fs-5">Daily Class Report</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_solution.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">화상솔루션</h4>
                    <h4 class="text-secondary fs-5">Daily Class Report</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_homework.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">온ㆍ오프라인 숙제관리</h4>
                    <h4 class="text-secondary fs-5">Daily Class Report</h4>
                </div>
            </div>
        </div>
        

    </div>
    <div class="row mb-3 ">
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_attendance.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">출결관리</h4>
                    <h4 class="text-secondary fs-5">Attendance</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_counsel.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">정기상담관리</h4>
                    <h4 class="text-secondary fs-5">Regular Consulting</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_alert.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">모바일 알림</h4>
                    <h4 class="text-secondary fs-5">Notifications</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 " >
            <div class="card rounded-4 border-0 py-3 
            d-flex flex-row justify-content-center align-items-center mb-2">
                <div class="icon">
                    <img class="img-fluid" src="<?php echo G5_THEME_IMG_URL?>/main_icon_point.png" alt="">
                </div>
                <div class="txtBox">
                    <h4 class="text-black fs-5">포인트 제도</h4>
                    <h4 class="text-secondary fs-5">Reward System</h4>
                </div>
            </div>
        </div>
        

    </div>


</div>

<!-- slick slide -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="slideWrap">
    <h1 class="text-center fs-1 fw-bold mb-5">갤러리</h1>
    <div class="container position-relative slide2">
        <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_left.png" alt="" class="prev d-none d-md-block" >
        <img src="<?php echo G5_THEME_IMG_URL?>/slide_arrow_right.png" alt="" class="next d-none d-md-block">
        <div class="slickslide2">
            <?php
                echo latest('theme/pic_dorong', 'gallery', 10, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
            <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span> 
            </div>
    </div>
</div>

<script>
    $('.slickslide2').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 5,
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

<!-- 게시판 최근 게시물 -->
<!-- <div class="container cont">
    <div class="row">
        <div class="p-4">
            <?php  
             // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
             // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
             // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            // echo latest('theme/basic', 'pic_block', 5, 23);		
            // 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
    </div>
</div> -->





<?php
include_once(G5_THEME_PATH.'/tail.php');