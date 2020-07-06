<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.1.5
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = language_school_get_global_options();


echo '</div>' . "\r" . 
	'</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Middle _________________________ -->' . "\n\n\n";

get_sidebar('bottom');

echo '<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>' . "\n";
?>
	</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" role="contentinfo" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['language-school' . '_footer_scheme'] . ($cmsmasters_option['language-school' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_border">
		<div class="footer_inner">
		<?php 
		language_school_footer_logo($cmsmasters_option);
		
		
		language_school_get_footer_custom_html($cmsmasters_option);
		
		
		language_school_get_footer_nav($cmsmasters_option);
		
		
		language_school_get_footer_social_icons($cmsmasters_option);
		
		?>
			<span class="footer_copyright copyright">
			<?php 
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('', ' / ');
			}
			
			echo esc_html(stripslashes($cmsmasters_option['language-school' . '_footer_copyright']));
			?>
			</span>
		</div>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>

<div class="menu_bottom">
    <ul class="none_tag" id="siteMenu">
        <li>
            <a href="/bang-gia" title="Bảng giá">
                <div class="icon_mn"></div>
                <div class="text_mnbottom" style="text-align: center !important;">Bảng giá</div>
            </a>
        </li>
        <li>
            <a href="https://nhapkhautrungquoc.vn/huong-dan-tim-hang/" title="Thanh toán">
                <div class="icon_tieuhoc"></div>
                <div class="text_mnbottom" style="text-align: center !important;">Hướng dẫn</div>
            </a>
        </li>
        <li class="li_main" data-load="0" data-module="load-menu" data-show="0">
            <a href="javascript:void(0);">
                <div class="close_menu_main xmenu" style="opacity: 0;"></div>
                <div class="icon_menu"style="opacity: 1;"></div>
            </a>
        </li>
        <li style="margin-left: 18px;">
            <a href="tel:0365222000" title="Chăm sóc khách hàng">
                <div class="icon-img runeff">
                    <img src="https://haitau.vn/wp-content/themes/hai-tau/images/icon-hotline-final.png">
                </div>
            </a>
        </li>
        <li>
            <a href="https://zalo.me/0365222000" title="Chát với nhập khẩu trung quốc">
                <div class="icon-img runeff">
                    <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.15752-9/105769031_2332463287063458_7989887899487338935_n.jpg?_nc_cat=110&_nc_sid=b96e70&_nc_ohc=IXixc6aBtlEAX_IhQ_b&_nc_ht=scontent.fhan2-4.fna&oh=8cac7fe408d960d3b4eccb101400476d&oe=5F1AB807">
                </div>
            </a>
        </li>
    </ul>
</div>
<div class="contentMenu" data-module="load-menu">
    <div class="menu_mamnon" style="width: 100%;height: 100%;float: left;">
        <div class="content_menu_mamnon" style="width: 100%;height: 100%;float: left;">
            <div class="ct_menu_mn" style="width: 100%;height: 100%;float: left;">
                <div class="logo-menu">
                    <a href="" title="">
                    
                    </a>
                </div>
                <ul>
                    <li class="">
                        <a href="https://nhapkhautrungquoc.vn/" title="TRANG CHỦ"><i class="fa fa-angle-right" aria-hidden="true"></i>  TRANG CHỦ</a>
                    </li>
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/gioi-thieu/" title="GIỚI THIỆU"><i class="fa fa-angle-right" aria-hidden="true"></i>  GIỚI THIỆU</a>
                    </li>
					
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/mat-hang-nhap-khau/" title="MẶT HÀNG NHẬP KHẨU"><i class="fa fa-angle-right" aria-hidden="true"></i>  MẶT HÀNG NHẬP KHẨU</a>
                    </li>
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/bang-gia-van-chuyen/" title="BẢNG GIÁ"><i class="fa fa-angle-right" aria-hidden="true"></i>  BẢNG GIÁ</a>
                           <span class="menuSub1"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                 <div class="list-menu-item" id="menuSub1">
                                      <a href="https://nhapkhautrungquoc.vn/dich-vu-2/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch Vụ</a>
                                      <a href="https://nhapkhautrungquoc.vn/van-chuyen-duong-bo/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Bảng giá đường bộ</a>
									 <a href="https://nhapkhautrungquoc.vn/van-tai-duong-bien/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Bảng giá đường biển</a>
									 <a href="https://nhapkhautrungquoc.vn/uy-thac-nhap-khau/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Ủy thác nhập khẩu</a>
									 <a href="https://nhapkhautrungquoc.vn/dich-vu-kho-bai/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ kho bãi</a>
									 <a href="https://nhapkhautrungquoc.vn/dich-vu-khac/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ khác</a>
									 <a href="https://nhapkhautrungquoc.vn/khai-bao-thong-quan/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Khai báo - Thông quan</a>
                                 </div>
                    </li>
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/tin-tuc/" title="TIN TỨC"><i class="fa fa-angle-right" aria-hidden="true"></i>  TIN TỨC</a>
                           <span class="menuSub2"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                 <div class="list-menu-item" id="menuSub2">
                                      <a href="https://nhapkhautrungquoc.vn/chia-se-kinh-nghiem/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Chia sẻ kinh nghiệm</a>
                                      <a href="https://nhapkhautrungquoc.vn/tin-tuc-hai-quan/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Tin tức hải quan</a>
									 <a href="https://nhapkhautrungquoc.vn/tin-tuc-xuat-nhap-khau/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Tin tức xuất nhập khẩu</a>
                                 </div>
                    </li>
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/huong-dan-tim-hang/" title="HƯỚNG DẪN"><i class="fa fa-angle-right" aria-hidden="true"></i>  HƯỚNG DẪN</a>
                           <span class="menuSub3"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                 <div class="list-menu-item" id="menuSub3">
                                      <a href="https://nhapkhautrungquoc.vn/huong-dan-nhap-khau/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Hướng dẫn nhập khẩu</a>
                                      <a href="https://nhapkhautrungquoc.vn/huong-dan-thanh-toan-voi-xuong/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Hướng dẫn thanh toán với xưởng</a>
									 <a href="https://nhapkhautrungquoc.vn/huong-dan-noi-chuyen-voi-xuong/" title=""><i class="fa fa-angle-right" aria-hidden="true"></i> Hướng dẫn nói chuyện với xưởng</a>
                                 </div>
                    </li>
                    
					
					
                    <li class="">
                        <a href="https://nhapkhautrungquoc.vn/lien-he/" title="LIÊN HỆ"><i class="fa fa-angle-right" aria-hidden="true"></i>  LIÊN HỆ</a>
                    </li>
					<li class="">
                        <a href="https://nhapkhautrungquoc.vn/dich-vu-2/" title="DỊCH VỤ"><i class="fa fa-angle-right" aria-hidden="true"></i>  DỊCH VỤ</a>
                    </li>
                    <li class="">
                        <a href="https://nhapkhautrungquoc.vn/tuyen-dung/" title="TUYỂN DỤNG"><i class="fa fa-angle-right" aria-hidden="true"></i>  TUYỂN DỤNG</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>




<script>
	
	jQuery(document).ready(function( $ ) {
		
	$(".menuSub1").on('click', function () {
        $('#menuSub1').slideToggle();
    });
		$(".menuSub2").on('click', function () {
        $('#menuSub2').slideToggle();
    });
		$(".menuSub3").on('click', function () {
        $('#menuSub3').slideToggle();
    });
		
	
	$("#siteMenu li.li_main").on('click', function () {
        var elements = $(this);
        var module = elements.attr('data-module');
        var show = elements.attr('data-show');
        var load = elements.attr('data-load');
        textMenu = elements.find(".text_mnbottom").text();
        /*Reset*/
        $("#siteMenu li").attr('data-show', '0');
        $(".contentMenu").slideUp(200);
        $("#siteMenu li").find("div").css({'opacity': '1'});
        $("#siteMenu li").find(".xmenu").css({'opacity': '0'});
        /*Reset*/
        if (show === '0') {
            elements.find("div").css({'opacity': '0'});
            elements.find(".xmenu").css({'opacity': '1'});
            elements.find(".xmenu").addClass('fa-spin');
            elements.find(".xmenu").removeClass('fa-spin');
            $(".contentMenu").slideDown(400);
            elements.attr('data-show', '1');
        } else {
            $(".contentMenu").slideUp(200);
            elements.attr('data-show', '0');
            elements.find("div").css({'opacity': '1'});
            elements.find(".xmenu").css({'opacity': '0'});
        }
    });
	
});
    
</script>
</body>
</html>
