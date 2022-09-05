<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<!-- header s -->
<div class="bg-info">
    <div class="container py-3 d-flex">
        <h1><a href="#"><img src="<? echo G5_THEME_IMG_URL ?>/m_logo.svg" alt=""></a></h1>
        <nav id="gnb" class="ms-auto">
         <h2>메인메뉴</h2>
         <div class="gnb_wrap">
            <ul id="gnb_1dul" class="d-flex">
               
               <?php
               $menu_datas = get_menu_db(0, true);
               $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
               $i = 0;
               foreach( $menu_datas as $row ){
                  if( empty($row) ) continue;
                  $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
               ?>
               <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                  <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                  
               </li>
               <?php
               $i++;
               }   //end foreach $row

               if ($i == 0) {  ?>
                  <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
               <?php } ?>
            </ul>
            
            
         </div>
       </nav>
    </div>
</div>
<!-- header e -->
<!-- content s -->
    <div class="container">



