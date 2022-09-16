<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    <? include_once(G5_THEME_PATH."/skin/nav/mysubmenu.php")?>
</div>
 <!-- 컨텐츠 끝 -->

<!-- 하단 시작 -->
 <footer class="" >
    <div class="ftTop" style="">
        <div class="container ftMenu" >
            <div class="row">
                <div class=" col-md-3">
                    <h4 class="fs-6 fw-bold text-white border-bottom">YBM Lemon 스토리</h4>
                    <ul class="mt-3">
                        <li><a class=" fw-bold" href="#">YBM Lemon 스토리</a></li>
                        <li><a class=" fw-bold" href="#">온라인 문의</a></li>
                        <li><a class=" fw-bold" href="#">오시는 길</a></li>
                        <li><a class=" fw-bold" href="#">공지사항</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fs-6 fw-bold text-white border-bottom">수강신청</h4>
                    <ul class="mt-3">
                        <li><a class=" fw-bold" href="#">무료체험</a></li>
                        <li><a class=" fw-bold" href="#">갤러리</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fs-6 fw-bold text-white border-bottom">커뮤니티</h4>
                    <ul class="mt-3">
                        <li><a class=" fw-bold " href="#">이벤트</a></li>
                        <li><a class=" fw-bold " href="#">체험 수업 후기</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="fs-6 fw-bold text-white border-bottom">마이클래스</h4>
                    <ul class="mt-3">
                        <li><a class=" fw-bold " href="#">Report</a></li>
                        <li><a class=" fw-bold " href="#">숙제 제출 및 확인</a></li>
                        <li><a class=" fw-bold " href="#">정회원 공지사항</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ftBtm ">
        <div class="ftLine"></div>
        <div class="btmWrap container">
            <div class="row ">
                <div class="col-12 col-md-9 ftNav">
                    <li><a class=" text-white" href="">로그인</a></li>
                    <li><a class=" text-white" href="">이용약관</a></li>
                    <li><a class=" text-white" href="">개인정보처리방침</a></li>
                    <li><a class=" text-white" href="">영상정보처리기기 운영관리방침</a></li>
                </div>
                <div class="col-12 col-md-3 ftIcon d-flex justify-content-end align-items-center">
                    <a href=""><img src="<?php echo G5_THEME_IMG_URL?>/naver_blog.png" alt="#"></a>
                    <a href=""><img src="<?php echo G5_THEME_IMG_URL?>/instagram.png" alt="#"></a>
                    <a href=""><img src="<?php echo G5_THEME_IMG_URL?>/youtube.png" alt="#"></a>
                </div>
            </div>
            <div class="ftAdd py-3">
                <ul>
                    <li>
                        <p>사업자 등록번호</p><span>101-81-92326</span>
                    </li>
                    <li>
                        <p>대표이사</p><span>화찬권</span>
                    </li>
                    <li>
                        <p>통신판매업신고번호</p><span>제 01-985호</span>
                    </li>
                    <li>
                        <p>TEL</p><span>1670-7978</span>
                        <p>FAX</p><span>02-2260-4410</span>
                    </li>
                    <li>
                        <p>E-mail</p><span>ybmky@ybm.co.kr</span>
                    </li>
                    <li>
                        <p>서울특별시 종로구 창경궁로 112-7 (주)YBM교육</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </footer>



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");