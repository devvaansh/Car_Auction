<?php
$footer_data = get_header_footer_by_id(1);

?>

<footer>
<div class="container-fluid">
<div class="footer-top">
<div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-1 justify-content-center g-lg-4 gy-5 ">
<div class="col d-flex justify-content-lg-start">
<div class="footer-widget">
<div class="widget-title">
<h5><?php echo $footer_data["footer_menu1_heading"]; ?></h5>
</div>
<div class="menu-container">
<?php echo $footer_data["footer_menu1_content"]; ?>
</div>
</div>
</div>
<div class="col d-flex justify-content-sm-center">
<div class="footer-widget">
<div class="widget-title">
<h5><?php echo $footer_data["footer_menu2_heading"]; ?></h5>
</div>
<div class="menu-container">
<?php echo $footer_data["footer_menu2_content"]; ?>

</div>
</div>
</div>
<div class="col d-flex justify-content-lg-center justify-content-sm-end">
<div class="footer-widget">
<div class="widget-title">
<h5><?php echo $footer_data["footer_menu3_heading"]; ?></h5>
</div>
<div class="menu-container">
<?php echo $footer_data["footer_menu3_content"]; ?>
</div>
</div>
</div>
<div class="col d-flex justify-content-xl-center justify-content-lg-end justify-content-sm-center">
<div class="footer-widget">
<div class="widget-title">
<h5><?php echo $footer_data["footer_menu4_heading"]; ?></h5>
</div>
<div class="menu-container">
<?php echo $footer_data["footer_menu4_content"]; ?>
</div>
</div>
</div>
</div>
</div>
<div class="footer-center">
<div class="footer-logo">
<a href="<?php echo base_url(); ?>"><img src="<?php if(!empty($footer_data['footer_logo_id'])){echo get_image_path_by_id($footer_data['footer_logo_id']);  } ?>" alt></a>
</div>
<div class="contact-area">
<div class="hotline-area">
<div class="icon">
<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
<path d="M31.1603 24.6852L24.6834 20.3658C23.8615 19.8221 22.7597 20.001 22.152 20.7769L20.2654 23.2027C20.1481 23.3573 19.9789 23.4645 19.789 23.5045C19.599 23.5444 19.4011 23.5145 19.2314 23.4203L18.8725 23.2224C17.6828 22.574 16.2025 21.7667 13.22 18.7831C10.2375 15.7995 9.42859 14.3181 8.78012 13.1306L8.58334 12.7717C8.48781 12.6021 8.45678 12.4037 8.49597 12.213C8.53516 12.0223 8.64193 11.8522 8.79662 11.734L11.2208 9.84792C11.9964 9.2402 12.1756 8.13874 11.6324 7.31655L7.31309 0.83963C6.75648 0.00237835 5.63977 -0.24896 4.77809 0.269026L2.06967 1.89597C1.21867 2.39626 0.594346 3.20652 0.327557 4.15695C-0.647737 7.71055 0.0859667 13.8435 9.12038 22.879C16.3071 30.0651 21.6572 31.9976 25.3345 31.9976C26.1809 32.0013 27.0239 31.8912 27.8409 31.6703C28.7915 31.4038 29.6018 30.7794 30.1018 29.9281L31.7304 27.2214C32.2491 26.3595 31.9979 25.2421 31.1603 24.6852ZM30.8115 26.6742L29.1867 29.3826C28.8277 29.997 28.2449 30.4488 27.5603 30.6432C24.2797 31.5439 18.5483 30.7979 9.87489 22.1245C1.20149 13.4511 0.455538 7.72017 1.35622 4.4391C1.55097 3.75367 2.00324 3.17011 2.61841 2.81053L5.32682 1.1857C5.7007 0.960737 6.18538 1.06978 6.4269 1.4331L8.77324 4.95577L10.7426 7.90946C10.9784 8.26609 10.9009 8.74409 10.5645 9.00798L8.13978 10.8941C7.40188 11.4583 7.19117 12.4792 7.64547 13.2895L7.83801 13.6393C8.51953 14.8892 9.36684 16.4442 12.4603 19.5371C15.5537 22.63 17.1081 23.4773 18.3575 24.1588L18.7078 24.3518C19.518 24.8061 20.539 24.5954 21.1032 23.8575L22.9893 21.4328C23.2533 21.0966 23.7311 21.0191 24.0879 21.2547L30.5642 25.5741C30.9278 25.8154 31.0368 26.3004 30.8115 26.6742ZM18.1324 5.33496C23.1367 5.34053 27.1921 9.39599 27.1977 14.4003C27.1977 14.6948 27.4364 14.9335 27.7309 14.9335C28.0255 14.9335 28.2642 14.6948 28.2642 14.4003C28.258 8.8072 23.7255 4.27462 18.1324 4.2685C17.8378 4.2685 17.5991 4.50721 17.5991 4.80173C17.5991 5.09625 17.8378 5.33496 18.1324 5.33496Z" />
<path d="M18.1324 8.53424C21.3704 8.53805 23.9944 11.162 23.9982 14.4001C23.9982 14.5415 24.0544 14.6771 24.1544 14.7771C24.2544 14.8771 24.39 14.9333 24.5314 14.9333C24.6728 14.9333 24.8085 14.8771 24.9085 14.7771C25.0085 14.6771 25.0646 14.5415 25.0646 14.4001C25.0602 10.5733 21.9591 7.47215 18.1324 7.46777C17.8378 7.46777 17.5991 7.70649 17.5991 8.00101C17.5991 8.29553 17.8378 8.53424 18.1324 8.53424Z" />
<path d="M18.1324 11.7344C19.6041 11.7362 20.7968 12.9289 20.7986 14.4007C20.7986 14.5422 20.8548 14.6778 20.9548 14.7778C21.0548 14.8778 21.1905 14.934 21.3319 14.934C21.4733 14.934 21.6089 14.8778 21.7089 14.7778C21.8089 14.6778 21.8651 14.5422 21.8651 14.4007C21.8627 12.3402 20.1929 10.6703 18.1324 10.668C17.8378 10.668 17.5991 10.9067 17.5991 11.2012C17.5991 11.4957 17.8378 11.7344 18.1324 11.7344Z" />
</svg>
</div>
<div class="content">
  <?php if(!empty($footer_data['footer_phone'])){ ?>
<span>För Mer Information</span>
<h6><a href="tel:<?php echo $footer_data['footer_phone']; ?>"> <?php echo $footer_data['footer_phone']; ?> </a></h6> <?php } ?>

</div>
</div>
<div class="hotline-area">
<div class="icon">
<svg width="32" height="33" viewBox="0 0 32 33" xmlns="http://www.w3.org/2000/svg">
<path d="M16.6608 18.13C15.4654 18.1243 14.2777 17.9369 13.1387 17.5742C12.2446 17.2751 11.446 16.7441 10.8242 16.0355C10.2024 15.3269 9.77978 14.466 9.59946 13.5406C9.19786 11.6068 9.93012 9.56195 11.6069 7.92995C11.7871 7.75461 11.9742 7.58665 12.168 7.42649C13.0138 6.71831 14.0193 6.22662 15.0976 5.99386C16.1759 5.7611 17.2947 5.79426 18.3573 6.09049C19.3764 6.4159 20.2699 7.04873 20.915 7.90213C21.5601 8.75553 21.9253 9.78766 21.9605 10.8569C22.0387 12.1181 21.6276 13.3609 20.8128 14.3268C20.5045 14.715 20.0953 15.0108 19.6299 15.1816C19.1646 15.3525 18.6612 15.3918 18.1749 15.2953C17.9743 15.2536 17.7841 15.172 17.6158 15.0551C17.4474 14.9383 17.3044 14.7887 17.1952 14.6153C17.0972 14.4468 17.0342 14.2603 17.01 14.067C16.9858 13.8736 17.0009 13.6774 17.0544 13.49C17.5211 11.7268 17.9952 9.04729 18 9.02062C18.0122 8.95163 18.0378 8.88572 18.0755 8.82665C18.1132 8.76757 18.1621 8.7165 18.2195 8.67633C18.2769 8.63617 18.3416 8.6077 18.41 8.59256C18.4784 8.57742 18.5491 8.5759 18.6181 8.58809C18.6871 8.60027 18.753 8.62593 18.8121 8.66359C18.8712 8.70125 18.9222 8.75017 18.9624 8.80757C19.0026 8.86497 19.031 8.92972 19.0462 8.99812C19.0613 9.06652 19.0628 9.13723 19.0507 9.20622C19.0309 9.31769 18.5637 11.9566 18.0859 13.7625C18.069 13.812 18.0625 13.8645 18.0666 13.9167C18.0707 13.9689 18.0854 14.0197 18.1099 14.066C18.1836 14.1679 18.2949 14.2364 18.4192 14.2564C18.7169 14.3061 19.0226 14.2735 19.3032 14.1621C19.5838 14.0507 19.8286 13.8648 20.0112 13.6244C20.644 12.8674 20.961 11.8958 20.8965 10.9113C20.8711 10.0601 20.5829 9.23771 20.0714 8.55687C19.56 7.87603 18.8504 7.37014 18.04 7.10862C17.1472 6.86304 16.2081 6.83838 15.3036 7.03675C14.3992 7.23513 13.5566 7.65059 12.8485 8.24729C12.6773 8.38969 12.5104 8.53849 12.3504 8.69422C11.5216 9.50062 10.1973 11.1742 10.6437 13.3236C10.7911 14.0615 11.1287 14.7481 11.6231 15.3153C12.1175 15.8826 12.7515 16.3109 13.4624 16.5577C15.9637 17.3556 19.5584 17.4521 21.4517 15.0974C21.5414 14.9907 21.6693 14.9234 21.808 14.9098C21.9467 14.8962 22.0852 14.9375 22.1939 15.0248C22.3026 15.1121 22.3728 15.2384 22.3895 15.3768C22.4061 15.5151 22.368 15.6546 22.2832 15.7652C20.8827 17.507 18.7515 18.13 16.6608 18.13Z" />
<path d="M14.8353 15.3649C14.2714 15.3747 13.7214 15.1899 13.2779 14.8417C12.2545 14.0225 12.2262 12.599 12.5131 11.6299C12.6102 11.3073 12.7398 10.9953 12.9009 10.6993C13.301 9.89185 13.9409 9.22779 14.7329 8.79794C15.2132 8.54876 15.761 8.46069 16.2953 8.54674C16.8295 8.63279 17.322 8.8884 17.6998 9.27581C18.0847 9.69756 18.3746 10.197 18.5499 10.7403C18.594 10.8728 18.5844 11.0172 18.5232 11.1427C18.4621 11.2681 18.3541 11.3646 18.2226 11.4113C18.0911 11.4581 17.9465 11.4514 17.8198 11.3928C17.6932 11.3342 17.5946 11.2282 17.5451 11.0977C17.4187 10.6964 17.2085 10.3265 16.9286 10.0123C16.7085 9.78721 16.4209 9.6402 16.1095 9.59369C15.7981 9.54719 15.4801 9.60374 15.2038 9.75474C14.6098 10.0897 14.1325 10.5983 13.8358 11.2123C13.7112 11.4425 13.6106 11.6848 13.5355 11.9355C13.3281 12.6363 13.3739 13.5515 13.9457 14.0091C14.5707 14.5115 15.6257 14.2993 16.2193 13.7873C16.6614 13.389 17.0413 12.9266 17.3462 12.4155C17.3831 12.356 17.4314 12.3043 17.4884 12.2635C17.5453 12.2226 17.6097 12.1934 17.6779 12.1774C17.7461 12.1614 17.8168 12.159 17.886 12.1704C17.9551 12.1817 18.0213 12.2066 18.0809 12.2435C18.1404 12.2805 18.1921 12.3288 18.2329 12.3857C18.2738 12.4426 18.303 12.507 18.319 12.5753C18.335 12.6435 18.3374 12.7142 18.326 12.7833C18.3147 12.8524 18.2898 12.9187 18.2529 12.9782C17.8914 13.5802 17.4413 14.1245 16.9179 14.5926C16.3348 15.0847 15.5982 15.3578 14.8353 15.3649Z" />
<path d="M30.4005 32.0023H1.60049C1.17627 32.0019 0.769552 31.8332 0.469585 31.5332C0.169619 31.2332 0.000911967 30.8265 0.000488386 30.4023V10.669C0.000424993 10.5676 0.0292616 10.4683 0.0836186 10.3827C0.137976 10.2971 0.215601 10.2288 0.307397 10.1858C0.399192 10.1427 0.501355 10.1267 0.601912 10.1397C0.702468 10.1526 0.797252 10.1939 0.875155 10.2588L13.961 21.1346C14.535 21.6089 15.2564 21.8683 16.001 21.8683C16.7456 21.8683 17.467 21.6089 18.041 21.1346L31.1258 10.2583C31.2038 10.1934 31.2986 10.152 31.3992 10.1391C31.4998 10.1262 31.602 10.1422 31.6938 10.1853C31.7856 10.2284 31.8633 10.2968 31.9176 10.3825C31.9719 10.4682 32.0007 10.5675 32.0005 10.669V30.4023C32.0001 30.8265 31.8314 31.2332 31.5314 31.5332C31.2314 31.8332 30.8247 32.0019 30.4005 32.0023ZM1.06716 11.8055V30.4023C1.06716 30.6967 1.30609 30.9356 1.60049 30.9356H30.4005C30.5419 30.9356 30.6776 30.8794 30.7776 30.7794C30.8776 30.6794 30.9338 30.5438 30.9338 30.4023V11.8055L18.7216 21.9548C17.956 22.5875 16.994 22.9337 16.0009 22.9339C15.0079 22.934 14.0457 22.5882 13.28 21.9559L1.06716 11.8055Z" />
<path d="M0.534374 11.2024C0.42111 11.2026 0.310717 11.1668 0.219187 11.1C0.127657 11.0333 0.0597426 10.9392 0.0252829 10.8313C-0.00917678 10.7234 -0.00839247 10.6074 0.0275222 10.4999C0.063437 10.3925 0.132617 10.2993 0.22504 10.2339L5.02504 6.83119C5.14046 6.74936 5.28366 6.71673 5.42314 6.74049C5.56262 6.76424 5.68695 6.84243 5.76877 6.95785C5.8506 7.07327 5.88323 7.21648 5.85947 7.35595C5.83572 7.49543 5.75753 7.61976 5.64211 7.70159L0.842107 11.1043C0.752234 11.1682 0.644662 11.2025 0.534374 11.2024ZM31.4666 11.2024C31.3564 11.2025 31.2488 11.1682 31.1589 11.1043L26.3589 7.70159C26.2447 7.61935 26.1676 7.49531 26.1445 7.35649C26.1213 7.21768 26.154 7.07534 26.2353 6.9605C26.3167 6.84566 26.4401 6.76762 26.5788 6.7434C26.7174 6.71918 26.86 6.75073 26.9754 6.83119L31.7754 10.2339C31.8678 10.2993 31.9369 10.3924 31.9729 10.4997C32.0088 10.607 32.0097 10.723 31.9754 10.8308C31.941 10.9386 31.8733 11.0328 31.7819 11.0996C31.6906 11.1664 31.5798 11.2024 31.4666 11.2024ZM20.9285 3.73572C20.8181 3.73582 20.7103 3.70152 20.6202 3.63759L18.0709 1.82959C17.4975 1.34491 16.7721 1.07691 16.0213 1.07233C15.2705 1.06775 14.5419 1.32688 13.9626 1.80452L11.3813 3.63759C11.2659 3.71941 11.1227 3.75204 10.9832 3.72828C10.8437 3.70453 10.7194 3.62634 10.6376 3.51092C10.5557 3.3955 10.5231 3.2523 10.5469 3.11282C10.5706 2.97334 10.6488 2.84901 10.7642 2.76719L13.3136 0.959185C14.0773 0.33469 15.0346 -0.00443301 16.0212 4.37621e-05C17.0077 0.00452053 17.9619 0.352318 18.72 0.983718L21.2373 2.76719C21.3297 2.83266 21.3989 2.92585 21.4348 3.03327C21.4707 3.14069 21.4715 3.25675 21.4371 3.36465C21.4026 3.47254 21.3347 3.56667 21.2432 3.63338C21.1516 3.7001 21.0412 3.73594 20.928 3.73572H20.9285ZM0.880507 31.7144C0.770687 31.7146 0.663477 31.6809 0.573522 31.6179C0.483567 31.5549 0.415252 31.4657 0.377909 31.3624C0.340566 31.2591 0.336016 31.1468 0.364879 31.0409C0.393742 30.9349 0.454612 30.8405 0.539174 30.7704L12.7098 20.6584C12.7637 20.6136 12.8259 20.5799 12.8928 20.5592C12.9598 20.5385 13.0301 20.5311 13.0999 20.5376C13.1696 20.5441 13.2374 20.5642 13.2994 20.5969C13.3614 20.6295 13.4163 20.6741 13.461 20.728C13.5058 20.7819 13.5395 20.8441 13.5602 20.911C13.5809 20.9779 13.5883 21.0482 13.5818 21.118C13.5754 21.1878 13.5552 21.2556 13.5226 21.3175C13.4899 21.3795 13.4453 21.4344 13.3914 21.4792L1.22077 31.5912C1.12524 31.6708 1.00485 31.7144 0.880507 31.7144ZM31.12 31.7144C30.9956 31.7145 30.8752 31.6709 30.7797 31.5912L18.609 21.4792C18.5538 21.4349 18.5079 21.38 18.474 21.3178C18.4402 21.2556 18.4191 21.1872 18.4119 21.1167C18.4048 21.0463 18.4117 20.9751 18.4324 20.9073C18.4531 20.8396 18.4871 20.7766 18.5323 20.7221C18.5776 20.6676 18.6333 20.6227 18.6961 20.59C18.7589 20.5573 18.8276 20.5374 18.8982 20.5315C18.9688 20.5256 19.0399 20.5338 19.1073 20.5557C19.1746 20.5776 19.237 20.6127 19.2906 20.6589L31.4613 30.7709C31.5459 30.841 31.6067 30.9355 31.6356 31.0414C31.6645 31.1474 31.6599 31.2597 31.6226 31.3629C31.5852 31.4662 31.5169 31.5554 31.427 31.6184C31.337 31.6814 31.2298 31.7146 31.12 31.7144Z" />
<path d="M26.6672 15.1919C26.5258 15.1919 26.3901 15.1358 26.2901 15.0357C26.1901 14.9357 26.1339 14.8001 26.1339 14.6586V3.74021C26.1323 3.75088 26.1109 3.73595 26.0752 3.73595H5.92587C5.91421 3.73524 5.90252 3.73691 5.89152 3.74085C5.88052 3.7448 5.87043 3.75093 5.86187 3.75888L5.8672 14.6586C5.8672 14.8001 5.81101 14.9357 5.71099 15.0357C5.61097 15.1358 5.47532 15.1919 5.33387 15.1919C5.19242 15.1919 5.05677 15.1358 4.95675 15.0357C4.85673 14.9357 4.80054 14.8001 4.80054 14.6586V3.73595C4.80891 3.44547 4.93203 3.17014 5.14294 2.97023C5.35384 2.77032 5.63536 2.66211 5.92587 2.66928H26.0752C26.3657 2.66211 26.6472 2.77032 26.8581 2.97023C27.069 3.17014 27.1922 3.44547 27.2005 3.73595V14.6586C27.2005 14.8001 27.1443 14.9357 27.0443 15.0357C26.9443 15.1358 26.8087 15.1919 26.6672 15.1919Z" />
</svg>
</div>
<div class="content">
<?php if(!empty($footer_data['footer_email'])){ ?>
<span>Mail</span>
<h6><a href="mailto:<?php echo $footer_data['footer_email']; ?>"><span data-cfemail="523b3c343d12353f333b3e7c313d3f"><?php echo $footer_data['footer_email']; ?></span></a></h6> <?php } ?>
</div>
</div>
</div>

</div>
<div class="footer-btm">
<div class="copyright-area">
<p><?php echo $footer_data['footer_copyright']; ?></p>
</div>
<div class="social-area">
<h6>Följ:</h6>
<ul>
<li><a target="blank" href="<?php echo $footer_data['footer_facebook']; ?>"><i class="bx bxl-facebook"></i></a></li>
<li><a target="blank" href="<?php echo $footer_data['footer_twitter']; ?>"><i class="bx bxl-twitter"></i></a></li>
<li><a target="blank" href="<?php echo $footer_data['footer_linkedin']; ?>"><i class="bx bxl-linkedin"></i></a></li>
<li><a target="blank" href="<?php echo $footer_data['footer_instagram']; ?>"><i class="bx bxl-instagram-alt"></i></a></li>
</ul>
</div>
</div>
</div>
</footer>





<div class="modal signUp-modal fade" id="signUpModal01" tabindex="-1" aria-labelledby="signUpModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="signUpModal01Label">Registrera dig</h4>
<p>Har redan ett konto? <button type="button" data-bs-toggle="modal" data-bs-target="#logInModal01">Logga in</button></p>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body mt-3">
<form name="registrationform" id="registrationform" action="" method="" >
<div class="row g-4">
<div class="col-md-6">
<div class="form-inner">
<label>Förnamn*</label>
<input type="text" name="first_name" id="first_name">
</div>
</div>
<div class="col-md-6">
<div class="form-inner">
<label>Efternamn*</label>
<input type="text" name="last_name" id="last_name" >
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<label>Ange din e-postadress*</label>
<input type="email" name="email_address" id="email_address" >
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<label>Ange Din Telefon*</label>
<input type="text" name="phone_number" id="phone_number" >
</div>
</div>
<div class="col-md-6">
<div class="form-inner">
<label>Lösenord*</label>
<input id="password" type="password" name="password">
<i class="bi bi-eye-slash" id="togglePassword"></i>
</div>
</div>
<div class="col-md-6">
<div class="form-inner">
<label>Bekräfta Lösenord*</label>
<input id="confirm_password" name="confirm_password" type="password" >
<i class="bi bi-eye-slash" id="togglePassword2"></i>
</div>
</div>

<div class="col-md-12">
<div class="form-inner input5595">
<label>Roll</label>
<input checked name="role" id="user" type="radio" value="user"> <span>Privat Användare</span>  <input  name="role" id="dealer" type="radio" value="dealer"> <span>Företag</span>
</div>
</div>
<div class="col-md-6 mt-2 dealerbox"  style="display: none;" >
<div class="form-inner">
<label>Företag Namm*</label>
<input type="text" name="company_name" id="company_name">
</div>
</div>
<div class="col-md-6 mt-2 dealerbox"  style="display: none;">
<div class="form-inner">
<label>Org-Nummer*</label>
<input type="text" name="registration_number" id="registration_number">
</div>
</div>

<div class="col-md-12 mt-4">
<div class="form-inner">
<button class="primary-btn2" type="submit">Registrera Dig Nu</button>
</div>
</div>
</div>
<div class="terms-conditon">
<p>Genom att registrera dig godkänner <a href="<?= base_url('terms-and-conditions') ?>">Du Villkoren</a></p>
</div>
</form>

<p class="message"></p>
</div>
</div>
</div>
</div>

<div class="modal signUp-modal fade" id="logInModal01" tabindex="-1" aria-labelledby="logInModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="logInModal01Label">Logga in</h4>
<p>Har inget konto? <button type="button" data-bs-toggle="modal" data-bs-target="#signUpModal01">Registrera dig</button></p>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">
<form id="loginform" name="loginform" method="" action="" >
<div class="row g-4">
<div class="col-md-12">
<div class="form-inner">
<label>Ange din e-postadress*</label>
<input type="email" name="email_address" id="email_address" >
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<label>Lösenord*</label>
<input id="password" name="password" type="password"  >
<i class="bi bi-eye-slash" id="togglePassword3"></i>
</div>
</div>
<div class="col-lg-12">
<div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
<div class="form-group">
<input type="checkbox" id="html">
<label for="html">Kom ihåg mig</label>
</div>
<a href="#pass101" data-bs-toggle="modal" class="forgot-pass">Glöm lösenord?</a>
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<button class="primary-btn2" type="submit">Logga in</button>
</div>
</div>
</div>
</form>
<br/>
<p class="message"></p>
</div>
</div>
</div>
</div>


<div class="modal signUp-modal sell-with-us fade" id="sellUsModal01" tabindex="-1" aria-labelledby="sellUsModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="sellUsModal01Label">Sälj Din Bil</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">
<form name="sellyourcar" id="sellyourcar" >
<div class="row">
<div class="col-lg-12 mb-15">
<h5>Din personliga information</h5>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Förnamn*</label>
<input type="text" name="firstname" id="firstname" >
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Efternamn*</label>
<input type="text" name="lastname" id="lastname" >
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Telefon*</label>
<input type="text" name="phone" id="phone">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Registreringsnummer*</label>
<input type="text" name="registrationnumber" id="registrationnumber" >
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Email</label>
<input type="text" name="emailaddress" id="emailaddress">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Plats*</label>
<input type="text" name="location" id="location">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 mb-15 mt-25">
<h5>Din Bilinformation</h5>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Bilmärke*</label>
<input type="text" name="brandname" id="brandname">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Modell*</label>
<input type="text" name="model" id="model">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Registreringsår</label>
<input type="text" name="reg_year" id="reg_year">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Miltal</label>
<input type="text" name="mileage" id="mileage" >
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Bränsletyp</label>
<input type="text" name="fule_type" id="fule_type">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Försäljningspris*</label>
<input type="text" name="selling_price" id="selling_price" >
</div>
</div>
<div class="col-md-12 mb-20">
<div class="form-inner">
<label>Din Anteckning*</label>
<textarea name="car_note" style="border:solid 1px #989898;" id="car_note" ></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner">
<button class="primary-btn2" type="submit">Skicka in Nu</button>
</div>
</div>
</div>
</form>
<p class="message"></p>
</div>
</div>
</div>
</div>

<div class="modal signUp-modal fade" id="pass101" tabindex="-1" aria-labelledby="logInModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="logInModal01Label">Glömt lösenord</h4>
<p>Ange din registrerade e-postadress för att återställa ditt lösenord.</p>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">
<form name="forgetform" id="forgetform" >
<div class="row g-4">
<div class="col-md-12">
<div class="form-inner">
<label>Ange din e-postadress*</label>
<input name="email" id="email" >
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<button class="primary-btn2" type="submit">Återställ lösenord</button>
</div>
</div>
</div>
</form>
<br/>
<p class="message"></p>
</div>
</div>
</div>
</div>

<div class="modal signUp-modal sell-with-us fade" id="sellUsModal01" tabindex="-1" aria-labelledby="sellUsModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="sellUsModal01Label">Sälj Din Bil</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-lg-12 mb-15">
<h5>Din personliga information</h5>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Fullständigt namn*</label>
<input type="text" placeholder="Full Name*">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Telefon*</label>
<input type="text" placeholder="+880- 123 234 ***">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Email (Frivillig)</label>
<input type="text" placeholder="Enter your email address">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Plats*</label>
<input type="text" placeholder="Enter your address">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 mb-1 mt-15">
<h5>Din bilinformation</h5>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Bilmärke*</label>
<input type="text" placeholder="Toyota">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Modell*</label>
<input type="text" placeholder="RS eTN 80">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Registreringsår*</label>
<input type="text" placeholder="2022">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Miltal*</label>
<input type="text" placeholder="23,456 miles">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Bränsletyp*</label>
<input type="text" placeholder="Petrol">
</div>
</div>
<div class="col-md-6 mb-20">
<div class="form-inner">
<label>Försäljningspris*</label>
<input type="text" placeholder="Ex- $23,342.000">
</div>
</div>
<div class="col-md-12 mb-35">
<div class="form-inner">
<label>Din Anteckning*</label>
<textarea placeholder="Write somethings"></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner">
<button class="primary-btn2" type="submit">Skicka In Nu</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="modal signUp-modal sell-with-us fade" id="dele_wrap" tabindex="-1" aria-labelledby="sellUsModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="sellUsModal01Label">Sälj Din Bil</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">

<div class="row">
    <form name="deletecar" id="deletecar" >
<div class="col-md-12 mb-10">
<div class="form-inner">
<label>Vill du verkligen ta bort den här bilen ?</label>

<textarea required name="delete_message" id="delete_message" placeholder="Skriv i detalj varför du vill ta bort den här bilen?"></textarea>
<input name="post_id" id="post_id" value="" type="hidden" />
</div>
</div>
<div class="col-lg-12">
<div class="form-inner">
<button class="primary-btn2" type="submit">Skicka In Nu</button>
</div>
</div>
</form>
</div>
<p class="message"></p>
</div>
</div>
</div>
</div>
<style>
select{
width: 100% !important;
    height: 45px!important;
	}
</style>



<script src="<?php echo base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slick.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/simpleParallax.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/TweenMax.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.marquee.min.js"></script>
<?php 
global $sd;
if($sd==1)
{

}
else
{
?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.nice-select.min.js"></script>
<?php
}
?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

<?php if(isset($script_car_inner)){ ?>
<script src="<?php echo base_url(); ?>/assets/js/mibreitGallery.min.js"></script> 
<script>$(document).ready(function(){mibreitGallery.createGallery({slideshowContainer:"#full-gallery",thumbviewContainer:".mibreit-thumbview",titleContainer:"#full-gallery-title",allowFullscreen:!0,preloadLeftNr:2,preloadRightNr:3})})</script>
<?php } ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/src/richtext.min.css">
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/src/jquery.richtext.js"></script>


        <script>
        $(document).ready(function() {
            // $('#delete_message').richText();
        });

        function deletepost(id){

            $("#post_id").val(id);
        
        }

            
    $('#deletecar').validate({
        rules: {
            delete_message: {
            required: true
        }
    },
    messages: {
        email_address: {
            required: "Please enter message",
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('car/delete') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                     
                        setTimeout(function() {
                            window.location.href = " ";
                    }, 2000);
                                               
                    } else {

                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function(response) {
                    var res = JSON.parse(response);
                    // $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });


    
    function loadbidbyid() {

       var car_id = $("#car_id").val();

    $.ajax({
        url: '<?php echo base_url('car/bid/gets'); ?>',
        method: 'POST',
        data: { id: car_id },
        success: function(response) {
            var bids = JSON.parse(response);
            var html = '';

            // Sort bids by bidding_price in descending order
            bids.sort(function(a, b) {
                return b.bidding_price - a.bidding_price;
            });

            if (bids.length > 0) {
                // Get the leading bid
                var leadingBid = bids[0];

                // Generate HTML for the leading bid
                var leadingBidHtml = `
                <div class="col-md-12">
                    <div class="leading_wrap15">
                        <div class="leading_bh">
                            <div class="call_bid958">
                             <?php if ($this->session->userdata('user_id') and $this->session->userdata('user_role')=='admin') { ?>  <div class="namj55">${leadingBid.username}</div> <?php } ?>
                                <i class="fa fa-user"></i> LEDANDE BUD  <span class="ad52 ml_a55">${leadingBid.unique_id}</span>
                            </div>
                            <div class="bid_amoi55">
                                <h5>${leadingBid.bidding_price} <?php echo $this->config->item('CURRENCY'); ?></h5>
                                <span><!--Auto--> bud, at ${new Date(leadingBid.created).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</span>
                            </div>
                        </div>
                    </div> </div>
                `;
                html += leadingBidHtml;


                // Generate HTML for the remaining bids
                bids.slice(1).forEach(function(bid) {
                    var bidHtml = `
                        <div class="col-md-6">
                            <div class="leading_wrap16">
                                <div class="leading_bh">
                                    <div class="call_bid959">
                                     <?php if ($this->session->userdata('user_id') and $this->session->userdata('user_role')=='admin') { ?>   <div class="namj55">${bid.username}</div><?php } ?>
                                        <i class="fa fa-user"></i> <span class="ad52">${bid.unique_id}</span>
                                    </div>
                                    <div class="bid_amoi56">
                                        <h5>${bid.bidding_price} <?php echo $this->config->item('CURRENCY'); ?></h5>
                                        <span><!--Auto--> bud, at ${new Date(bid.created).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    html += bidHtml;
                });
            }else{
                html +='<p style="text-align: center;">Inga bud har lagts ännu</p>';

            }

            // Insert HTML into the page
            $('#yourContainerId').html(html);
        }
    });
}
    

loadbidbyid();


function loadbidcountbyid() {

var car_id = $("#car_id").val();

$.ajax({
 url: '<?php echo base_url('car/bid/count'); ?>',
 method: 'POST',
 data: { id: car_id },
 success: function(response) {
     var bids = JSON.parse(response);
     var html = '<i class="fa fa-gavel"></i> '+response+' bud';


$('#bidcount').html(html);

 }
});
}

loadbidcountbyid();



function check_reservationbyid() {

var car_id = $("#car_id").val();

$.ajax({
 url: '<?php echo base_url('car/bid/reservation'); ?>',
 method: 'POST',
 data: { id: car_id },
 success: function(response) {
    var res = JSON.parse(response);


$(".reservation_cls").html(res.message );

// $('#bidcount').html(html);

 }
});
}

check_reservationbyid();


function get_highest_bid() {

var car_id = $("#car_id").val();

$.ajax({
 url: '<?php echo base_url('car/bid/highestbid'); ?>',
 method: 'POST',
 data: { id: car_id },
 success: function(response) {
    var res = JSON.parse(response);


$(".leadingbox").html(res.message );

// $('#bidcount').html(html);

 }
});
}

get_highest_bid();


function get_emi_data() {

var car_id = $("#car_id").val();

$.ajax({
 url: '<?php echo base_url('car/bid/emi'); ?>',
 method: 'POST',
 data: { id: car_id },
 success: function(response) {
    var res = JSON.parse(response);


$(".emi_wapper").html(res.message );

// $('#bidcount').html(html);

 }
});
}

get_emi_data();


    //********* bid */

    // Toggle auto-bid section visibility
    $('#enable_auto_bid').change(function() {
        if ($(this).is(':checked')) {
            $('#auto_bid_section').slideDown();
            $('#max_auto_bid').prop('required', true);
        } else {
            $('#auto_bid_section').slideUp();
            $('#max_auto_bid').prop('required', false).val('');
        }
    });

    $('#bidform').validate({
        rules: {
            bidprice: {
            required: true,
            number: true, // Ensures only numeric values
            min: 499
        },
        max_auto_bid: {
            number: true,
            min: function() {
                return parseFloat($('#bidprice').val()) + 500 || 500;
            }
        }
    },
    messages: {
        bidprice: {
            required: "",
            number:"",
            min:"",
        },
        max_auto_bid: {
            number: "Vänligen ange ett giltigt nummer",
            min: "Max auto bid måste vara minst 500 SEK högre än ditt bud"
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            var formData = $(form).serialize();
            
            // Add max_auto_bid only if auto-bid is enabled
            if (!$('#enable_auto_bid').is(':checked')) {
                formData += '&max_auto_bid=';
            }
            
            $.ajax({
                url: '<?= base_url('car/bid/added') ?>',
                type: 'POST',
                data: formData,
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                        
                        // Reset auto-bid form
                        $('#enable_auto_bid').prop('checked', false);
                        $('#auto_bid_section').hide();
                        $('#max_auto_bid').val('');
                        $('#bidprice').val('');
                        
                        loadbidbyid();
                        loadbidcountbyid();
                        check_reservationbyid();
                        get_highest_bid();
                        get_emi_data();
                     
                        setTimeout(function() {
                            // window.location.href = " ";
                    }, 2000);
                                               
                    } else {

                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function(response) {
                    var res = JSON.parse(response);
                    // $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });

        </script>

<script>
  function openNav() {
    $("#mySidenav55").css("width", "");
$("#bid_side").addClass("sidecart");
$("#mySidenav55").addClass("sidecart5");
}

function closeNav() {
  document.getElementById("mySidenav55").style.width = "0";
  document.getElementById("bid_side").classList.remove("sidecart");
  document.getElementById("mySidenav55").classList.add("sidecart5");
}

// Detect outside click to close the side div
$(document).mouseup(function(e) {
    var container = $(".wrapper_inq_side");

    // If the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        closeNav();  // Trigger the close function
    }
});

</script>
<script>
    $(document).ready(function() {


        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    
    
        //  singleSelect()('#select');


    $('#cat_brand').on('change', function() {

        // Get the selected value
        var selectedValue = $(this).val();
        
        // Check if a value is selected
        if (selectedValue) {
            // Perform AJAX request
            $.ajax({ 
                url: '<?= base_url('getmodelbybrands') ?>', // Replace with your server-side script
                type: 'POST', // Or 'POST' if you're sending data
                data: { brand_id: selectedValue }, // Data to send to the server
                success: function(response) {
                    // Handle the response from the server
                    console.log(response); // For debugging purposes
                    // You can update the DOM or take other actions here

                        // Call the function with the example data
    populateDropdown(response);
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('AJAX Error:', status, error);
                }
            });
        }
    });



    



    function populateDropdown(data) {
  
    
    // Ensure data is an array
    if (typeof data === 'string') {
        try {
            data = JSON.parse(data);
        } catch (e) {
            console.error('Failed to parse JSON data:', e);
            return;
        }
    }
    
    var $select = $('#cat_model');
        var $niceSelect = $('.modelbox .nice-select');

        // Clear existing options
        $select.empty();
        $niceSelect.find('.list').empty();

        // Add the default option
        $select.append('<option value="0">Select type</option>');
        $niceSelect.find('.list').append('<li data-value="0" class="option selected focus">Select type</li>');

        // Add new options
        $.each(data, function(index, item) {
            var optionHtml = '<option value="' + item.id + '">' + item.model_name + '</option>';
            var listItemHtml = '<li data-value="' + item.id + '" class="option">' + item.model_name + '</li>';
            $select.append(optionHtml);
            $niceSelect.find('.list').append(listItemHtml);
        });

        // Initialize niceSelect
        $select.niceSelect();
}




$('#cat_brand1').on('change', function() {

// Get the selected value
var selectedValue = $(this).val();

// Check if a value is selected
if (selectedValue) {
    // Perform AJAX request
    $.ajax({ 
        url: '<?= base_url('getmodelbybrandsslug') ?>', // Replace with your server-side script
        type: 'POST', // Or 'POST' if you're sending data
        data: { brand_id: selectedValue }, // Data to send to the server
        success: function(response) {
            // Handle the response from the server
            console.log(response); // For debugging purposes
            // You can update the DOM or take other actions here

                // Call the function with the example data
                populateDropdown1(response);
        },
        error: function(xhr, status, error) {
            // Handle any errors
            console.error('AJAX Error:', status, error);
        }
    });
}
});




function populateDropdown1(data) {
  
    
  // Ensure data is an array
  if (typeof data === 'string') {
      try {
          data = JSON.parse(data);
      } catch (e) {
          console.error('Failed to parse JSON data:', e);
          return;
      }
  }
  
  var $select = $('#cat_model');
      var $niceSelect = $('.modelbox .nice-select');

      // Clear existing options
      $select.empty();
      $niceSelect.find('.list').empty();

      // Add the default option
      $select.append('<option value="0">Select type</option>');
      $niceSelect.find('.list').append('<li data-value="0" class="option selected focus">Select type</li>');

      // Add new options
      $.each(data, function(index, item) {
          var optionHtml = '<option value="' + item.model_slug + '">' + item.model_name + '</option>';
          var listItemHtml = '<li data-value="' + item.model_slug + '" class="option">' + item.model_name + '</li>';
          $select.append(optionHtml);
          $niceSelect.find('.list').append(listItemHtml);
      });

      // Initialize niceSelect
      $select.niceSelect();
}


$('#order').on('change', function() {

// Get the selected value
var selectedValue = $(this).val();

// Check if a value is selected
if (selectedValue) {
    // Perform AJAX request
    var selectedValue = selectedValue;
    var currentUrl = new URL(window.location.href);
    
    // Update or add the 'order_by' parameter
    currentUrl.searchParams.set('order_by', selectedValue);
    
    // Redirect to the updated URL
    window.location.href = currentUrl.href;
}
});


        
        $('#registrationform').validate({
        rules: {
            email_address: {
            required: true,
            email: true // Add the email validation rule
        },
        first_name: {
                required: true
        },
        last_name: {
                required: true
        },
        company_name: {
                required: true
        },
         phone_number: {
                  required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 10, // Ensures the minimum length is 10 digits
            maxlength: 10 // Ensures the maximum length is 10 digits
        },
        registration_number: {
                required: true,
                 digits: true, 
                minlength: 10,
                maxlength: 10
        },
        password: {
            required: true,
            minlength: 6
        },
        confirm_password: {
            required: true,
            minlength: 6,
            equalTo: "#password" // Matches confirm_password with password
        }
    },
    messages: {
        email_address: {
            required: "Please enter your email address",
            email: "Please enter a valid email address" // Custom message for invalid email
        },
        first_name: {
            required: "Please enter Förnamn"
        },
        last_name: {
            required: "Please enter Efternamn"
        },
        company_name: {
            required: "Please enter company name"
        },
        registration_number: {
            required: "Please enter registration number"
        },
        password: {
            required:"",
            minlength: "Password must be at least 6 characters long"
        },
        confirm_password: {
            required:"",
            equalTo: "Password and confirm password must match",
            minlength: "Confirm password must be at least 6 characters long"
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('signup') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                    //    window.location.reload();
                 
                    setTimeout(function() {
                        window.location.href = "<?= base_url('profile') ?>";  
                    }, 2000);  

                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });


    
    $('#loginform').validate({
        rules: {
            email_address: {
            required: true,
            email: true // Add the email validation rule
        },
        password: {
            required: true,
            minlength: 6
        }
    },
    messages: {
        email_address: {
            required: "Please enter your email address",
            email: "Please enter a valid email address" // Custom message for invalid email
        },       
        password: {
            required:""
             }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('login') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                              setTimeout(function() {
                        window.location.href = "<?= base_url('profile') ?>";  
                    }, 2000);  
                                               
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });



    
    $('#forgetform').validate({
        rules: {
            email: {
            required: true,
            email: true // Add the email validation rule
        }
    },
    messages: {
        email_address: {
            required: "Please enter your email address",
            email: "Please enter a valid email address" // Custom message for invalid email
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('forget') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                              setTimeout(function() {
                        window.location.href = " ";  
                    }, 2000);  
                                               
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });


    $('#sellyourcar').validate({
        rules: {
            emailaddress: {
            required: true,
            email: true // Add the email validation rule
        },
        firstname: {
            required: true
        },
        lastname: {
            required: true
        },
        phone: {
            required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 10, // Ensures the minimum length is 10 digits
            maxlength: 10 // Ensures the maximum length is 10 digits
        },
        registrationnumber: {
            required: true,
            minlength: 6, // Ensures the minimum length is 6 digits
            maxlength: 6 // Ensures the maximum length is 6 digits

        },
        location: {
            required: true
        },
        brandname: {
            required: true
        },
        model: {
            required: true
        },
        reg_year: {
            required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 4, // Ensures the minimum length is 4 digits
            maxlength: 4 // Ensures the maximum length is 4 digits
        },
        mileage: {
            required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 1,
            maxlength: 6
        },
        fule_type: {
            required: true
        },
        selling_price: {
            required: true,
            digits: true // Ensures only numbers are entered
        },
        car_note: {
            required: true
        }
    },
    messages: {
        email_address: {
            required: "Please enter your email address",
            email: "Please enter a valid email address" // Custom message for invalid email
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('sellyourcar') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                              setTimeout(function() {
                        window.location.href = "";  
                    }, 2000);  
                                               
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });



    $('#profle_photo').on('change', function() {
        var formData = new FormData();
        formData.append('file', $(this)[0].files[0]);
        
        $.ajax({
            url: '<?= base_url('admin/about/uploadImage') ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    // Show and set background image for banner preview
                    $('#profile_photo_preview').show().css('background-image', 'url(' + res.file_url + ')');
                    // Set banner image ID in hidden input
                    $("#profle_photo_id").val(res.media_id);
                } else {
                    alert(res.message);
                }
            }
        });
    });


    $('#profile_photo_preview').on('click', '#remove_profile_photo', function(e) {
        e.preventDefault();
        // Clear background image and hide banner image preview
        $('#profile_photo_preview').css('background-image', 'url()').hide();
        // Clear banner image ID from hidden input
        $("#profle_photo_id").val("");
    });

    $('#profileform').validate({
        rules: {
            email_address: {
            required: true,
            email: true // Add the email validation rule
        },
        first_name: {
                required: true
        },
        last_name: {
                required: true
        },
        phone_number: {
                  required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 10, // Ensures the minimum length is 10 digits
            maxlength: 10 // Ensures the maximum length is 10 digits
        },
        social_security_number: {
                  required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 10, // Ensures the minimum length is 10 digits
            maxlength: 10 // Ensures the maximum length is 10 digits
        },
          pincode: {
            required: true,
            digits: true, // Ensures only numbers are entered
            minlength: 5, // Ensures the minimum length is 10 digits
            maxlength: 5 // Ensures the maximum length is 10 digits
        },
        country: {
                required: true
        },
        state: {
                required: true
        },
        city: {
                required: true
        },
        registration_number: {
                required: true
        },
        company_name: {
                required: true
        },
       
        change_password: {
            required: false,
            minlength: 6
        },
        confirm_password: {
            required: false,
            minlength: 6,
            equalTo: "#change_password" // Matches confirm_password with password
        }
    },
    messages: {
        email_address: {
            required: "Please enter your email address",
            email: "Please enter a valid email address" // Custom message for invalid email
        },
        first_name: {
            required: "Please enter Förnamn"
        },
        last_name: {
            required: "Please enter Efternamn"
        },
        phone_number: {
            required: "Please enter phone number"
        },
        social_security_number: {
            required: "Please enter social security number"
        },
        country: {
            required: "Select country"
        },
        state: {
            required: "Please enter state"
        },
        city: {
            required: "Please enter city"
        },
        change_password: {
            minlength: "Password must be at least 6 characters long"
        },
        confirm_password: {
            equalTo: "Password and confirm password must match",
            minlength: "Confirm password must be at least 6 characters long"
        }
    },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('admin/profileprocess') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                       
                        setTimeout(function() {
                        window.location.href = "";  
                    }, 2000);  
                                               
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });


              /** post car **/


             // Initialize array for gallery image IDs
             var fileUrls = [];

// Handle multiple image uploads for gallery
$('#car_photo_gallery').on('change', function() {
    var files = $(this)[0].files;
    $.each(files, function(i, file) {
        var formData = new FormData();
        formData.append('file', file);
        
        $.ajax({
            url: '<?= base_url('admin/about/uploadImage') ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    // Append new image to gallery preview
                    $('#car_photo_gallery_preview').append('<div id="img_' + res.media_id  + '" class="add_imk_car2" style="background-image:url(' + res.file_url + ');"><a href="javascript:;" class="remove-image" data-id="' + res.media_id + '"><i class="fa fa-close"></i></a></div>');
                    // Store media ID in fileUrls array
                    fileUrls.push(res.media_id);
                    // Update hidden input with JSON string of fileUrls
                    $('#car_photo_gallery_ids').val(JSON.stringify(fileUrls));
                } else {
                    alert(res.message);
                }
            }
        });
    });
});

// Initialize fileUrls from data-ids attribute on page load
 var dataIds = $('#car_photo_gallery_preview').attr('data-ids');
 try {
     fileUrls = JSON.parse(dataIds);
 } catch (e) {
     console.error('Invalid JSON data:', dataIds);
     fileUrls = [];
 }
 $('#car_photo_gallery_ids').val(JSON.stringify(fileUrls));

// Handle removing images from the gallery preview and input field
$('#car_photo_gallery_preview').on('click', '.remove-image', function(e) {
    e.preventDefault();
    var mediaId = $(this).data('id');
    // Remove image container from gallery preview
    $('#img_' + mediaId).remove();
    // Remove media ID from fileUrls array
    fileUrls = fileUrls.filter(function(id) {
        return id !== mediaId;
    });
    // Update hidden input with updated fileUrls array as JSON string
    $('#car_photo_gallery_ids').val(JSON.stringify(fileUrls));
});


             // Initialize array for gallery image IDs
var fileUrls1 = [];

// Handle multiple image uploads for gallery
$('#remark_image').on('change', function() {
    var files = $(this)[0].files;
    $.each(files, function(i, file) {
        var formData = new FormData();
        formData.append('file', file);
        
        $.ajax({
            url: '<?= base_url('admin/about/uploadImage') ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    // Append new image to gallery preview
                    $('#remark_image_preview').append('<div id="img_' + res.media_id  + '" class="add_imk_car2" style="background-image:url(' + res.file_url + ');"><a href="javascript:;" class="remove-image" data-id="' + res.media_id + '"><i class="fa fa-close"></i></a></div>');
                    // Store media ID in fileUrls array
                    fileUrls1.push(res.media_id);
                    // Update hidden input with JSON string of fileUrls
                    $('#remark_image_ids').val(JSON.stringify(fileUrls1));
                } else {
                    alert(res.message);
                }
            }
        });
    });
});

// Initialize fileUrls from data-ids attribute on page load
 var dataIds = $('#remark_image_preview').attr('data-ids');

 try {
     fileUrls1 = JSON.parse(dataIds);
 } catch (e) {
     console.error('Invalid JSON data:', dataIds);
     fileUrls1 = [];
 }
 $('#remark_image_ids').val(JSON.stringify(fileUrls1));

// Handle removing images from the gallery preview and input field
$('#remark_image_preview').on('click', '.remove-image', function(e) {
    e.preventDefault();
    var mediaId = $(this).data('id');
    // Remove image container from gallery preview
    $('#img_' + mediaId).remove();
    // Remove media ID from fileUrls array
    fileUrls1 = fileUrls1.filter(function(id) {
        return id !== mediaId;
    });
    // Update hidden input with updated fileUrls array as JSON string
    $('#remark_image_ids').val(JSON.stringify(fileUrls1));
});


$('#post_car_form').validate({
    rules: {
        category: {
            required: true
        },
        car_title: {
            required: true
        },
        car_sub_title: {
            required: true
        },
        fixed_price: {
            
			required: function() {
                // Check the value of cat_buy_method
                var buyMethod = $('#cat_buy_method').val();
                return buyMethod == 2;  // Only require if cat_buy_method is 2
            },
			digits: true,
			minlength: 5,
			maxlength: 6,
			
        },
        mileage: {
            required: true,
			digits: true,
			minlength: 1,
			maxlength: 6
			
        },
        reservation_price: {
            required: true,
			digits: true,
			minlength: 5
        },
         horsepower: {
            required: true
        },
        cat_brand: {
            required: true
        },
		cat_year: {
            required: true
        },
		cat_model: {
            required: true
        },
        cat_fuel: {
            required: true
        },
        cat_year: {
            required: true
        },
        cat_buy_method: {
            required: true
        },
        cat_body: {
            required: true
        },
        cat_engine: {
            required: true
        },
        condition: {
            required: true
        },
        cat_equipment: {
            required: true
        },
        previous_owners: {
            required: true
        },
        license_number: {
            required: true
        },
        number_of_seats: {
            required: true
        },
        manufacture_month: {
            required: true
        },
        number_of_keys: {
            required: true
        },
        odometer_reading: {
            required: true
        },
        color: {
            required: true
        },
        first_date_traffic_sweden: {
            required: true
        },
        finish: {
            required: true,
            minlength: 1,
			maxlength: 2
        },
        service_history: {
            required: true
        },
        textile: {
            required: true
        },
        chassis_number_text: {
            required: true
        },
        next_inspection: {
            required: true
        },
        engine_effect: {
            required: true
        },
        curb_weight: {
            required: true
        },
        max_playload: {
            required: true
        },
        tax_weight: {
            required: true
        },
        max_pull_weight: {
            required: true
        },
        vehicle_tital_weight: {
            required: true
        },
        Breaks_description: {
            required: true
        },
        exterior_body_description: {
            required: true
        },
        tires_description: {
            required: true
        },
        interior_body_description: {
            required: true
        },
        'cat_equipment[]': {
            required: true,
            minlength: 1
        }
    },
    messages: {
        'cat_equipment[]': {
            required: "*"
        },
        fixed_price: {
            required: "Fixed price is required."

        }
    },
    submitHandler: function(form) {
            $.ajax({
                url: '<?= base_url('car-added') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                        // loadCategories();
                        setTimeout(function() {
                        window.location.href = "";  
                    }, 2000);  
                        
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });


$('#api_car_search').validate({
    rules: {
        CAR_NO: {
            required: true
        }
    },
    messages: {
        CAR_NO: {
            required: "Car No. is required."

        }
    }//,
    // submitHandler: function(form) {
    //         $.ajax({
    //             url: '<?= base_url('post-car') ?>',
    //             type: 'POST',
    //             data: $(form).serialize(),
    //             success: function(response) {
    //                 var res = JSON.parse(response);
    //                 // Show success or error message
    //                 if (res.status == 'success') {
    //                     $(".message_car").html('<span style="color:green;">' + res.message + '</span>');
    //                     // loadCategories();
    //                     setTimeout(function() {
    //                     window.location.href = "";  
    //                 }, 2000);  
                        
    //                 } else {
    //                     $(".message_car").html('<span style="color:red;">' + res.message + '</span>');
    //                 }
    //                 // Hide message after 5 seconds
    //                 setTimeout(function() {
    //                     $(".message_car span").fadeOut(500, function() {
    //                         $(this).remove();
    //                     });
    //                 }, 5000);
    //             },
    //             error: function() {
    //                 $(".message_car").html('<span style="color:red;">An error occurred. Please try again later.</span>');
    //                 // $(".message_car").html('<span style="color:red;">' + res.message +'</span>');
    //                 // Hide message after 5 seconds
    //                 setTimeout(function() {
    //                     $(".message_car span").fadeOut(500, function() {
    //                         $(this).remove();
    //                     });
    //                 }, 5000);
    //             }
    //         });
    //         return false; // Prevent default form submission
    //     }
    });




    $('#post_car_edit_form').validate({
        rules: {
            category: {
                required: true
            },
            car_title: {
                required: true
            },
            car_sub_title: {
                required: true
            },
            // fixed_price: {
            //     required: true,
			// 	digits: true,
			// minlength: 5,
			// maxlength: 6,
            // },
           
            mileage: {
                required: true,
				digits: true,
				minlength: 1,
				maxlength: 6
            },
            reservation_price: {
            required: true,
			digits: true,
			minlength: 5
            },
             horsepower: {
            required: true
              },
            cat_brand: {
                required: true
            },
            cat_model: {
                required: true
            },
            cat_fuel: {
                required: true
            },
            cat_year: {
                required: true
            },
            cat_buy_method: {
                required: true
            },
            cat_body: {
                required: true
            },
            cat_engine: {
                required: true
            },
            condition: {
                required: true
            },
            cat_equipment: {
                required: true
            },
            previous_owners: {
                required: true
            },
            license_number: {
                required: true
            },
            number_of_seats: {
                required: true
            },
            manufacture_month: {
                required: true
            },
            number_of_keys: {
                required: true
            },
            odometer_reading: {
                required: true
            },
            color: {
                required: true
            },
            first_date_traffic_sweden: {
                required: true
            },
            finish: {
                required: true
            },
            service_history: {
                required: true
            },
            textile: {
                required: true
            },

            chassis_number: {
                required: true
            },
            next_inspection: {
                required: true
            },
            engine_effect: {
                required: true
            },
            curb_weight: {
                required: true
            },
            max_playload: {
                required: true
            },
            tax_weight: {
                required: true
            },
            max_pull_weight: {
                required: true
            },
            vehicle_tital_weight: {
                required: true
            },
            Breaks_description: {
                required: true
            },
            exterior_body_description: {
                required: true
            },
            tires_description: {
                required: true
            },
            interior_body_description: {
                required: true
            },
            'cat_equipment[]': {
            required: true,
            minlength: 1
        },

        },
        messages: {
            'cat_equipment[]': {
            required: "*"
        }
           
        },
        submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('car/update') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                        // loadCategories();
                        setTimeout(function() {
                        window.location.href = "";  
                    }, 2000);  
                        
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });



    document.querySelectorAll('.bracks_count').forEach(function(element) {
    element.addEventListener('click', function() {
      // Remove the 'active' class from all elements
      document.querySelectorAll('.bracks_count').forEach(function(el) {
        el.classList.remove('active');
      });
      
      // Add the 'active' class to the clicked element
      this.classList.add('active');
      
      // Get the data-num attribute value
      var numValue = this.getAttribute('data-num');
      
      // Set the value to the input field
      document.getElementById('bracks_count').value = numValue;
    });
  });

  
  document.querySelectorAll('.exterior_body').forEach(function(element) {
    element.addEventListener('click', function() {
      // Remove the 'active' class from all elements
      document.querySelectorAll('.exterior_body').forEach(function(el) {
        el.classList.remove('active');
      });
      
      // Add the 'active' class to the clicked element
      this.classList.add('active');
      
      // Get the data-num attribute value
      var numValue = this.getAttribute('data-num');
      
      // Set the value to the input field
      document.getElementById('exterior_body').value = numValue;
    });
  });

  document.querySelectorAll('.tires').forEach(function(element) {
    element.addEventListener('click', function() {
      // Remove the 'active' class from all elements
      document.querySelectorAll('.tires').forEach(function(el) {
        el.classList.remove('active');
      });
      
      // Add the 'active' class to the clicked element
      this.classList.add('active');
      
      // Get the data-num attribute value
      var numValue = this.getAttribute('data-num');
      
      // Set the value to the input field
      document.getElementById('tires').value = numValue;
    });
  });


  document.querySelectorAll('.interior_body').forEach(function(element) {
    element.addEventListener('click', function() {
      // Remove the 'active' class from all elements
      document.querySelectorAll('.interior_body').forEach(function(el) {
        el.classList.remove('active');
      });
      
      // Add the 'active' class to the clicked element
      this.classList.add('active');
      
      // Get the data-num attribute value
      var numValue = this.getAttribute('data-num');
      
      // Set the value to the input field
      document.getElementById('interior_body').value = numValue;
    });
  });


  $(document).on('click', '.add-fav', function() {
           

                var carId = $(this).data('id');
                var user_id = $(this).data('user_id');

                if(user_id==""){

                    $('#logInModal01').modal('show');

                }else{ 
                    var icon = $(this).find('i');
        if (icon.hasClass('fa-heart-o')) {
            icon.removeClass('fa-heart-o').addClass('fa-heart');
        } else {
            icon.removeClass('fa-heart').addClass('fa-heart-o');
        }

                $.ajax({
                    url: '<?php echo base_url('favourite-add'); ?>',
                    method: 'POST',
                    data: { id: carId,user_id: user_id },
                    success: function(response) {
                 
                    }
                });

            }


            });


});
    </script>

<script>
$(document).ready(function() {
    // Function to handle the visibility of fields based on selected role
    function toggleFields() {
        if ($('#dealer').is(':checked')) {
            $('.dealerbox').show();
        } else {
            $('.dealerbox').hide();
        }
    }

    // Initial check when the page loads
    toggleFields();

    // Bind change event to radio buttons
    $('input[name="role"]').change(function() {
        toggleFields();
      
    });
});


$(document).on('click', '.remove_fav', function() {


if (!confirm('Are you sure you want to remove from favourite?')) return;

var carId = $(this).data('id');
var user_id = $(this).data('user_id');

$.ajax({
    url: '<?php echo base_url('favourite-add'); ?>',
    method: 'POST',
    data: { id: carId,user_id: user_id },
    success: function(response) {
        location.reload();

        
    }
});
});
</script>

<script>
         $(document).ready(function() {
        function startCountdown(expirationTimestamp, countdownId) {
            function updateCountdown() {
                var now = new Date().getTime();
                var distance = expirationTimestamp - now;

                if (distance < 0) {
                    $('#' + countdownId).text("Expired");
                    clearInterval(interval);
                    $("#bidformbox").hide();
                    return;
                }

                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                $('#' + countdownId).text(hours + "H " + minutes + "M " + seconds + "S ");
            }

            var interval = setInterval(updateCountdown, 1000);
        }

        <?php
        if(!empty($cars)){
        foreach ($cars as $car): ?>
            <?php if (get_post_status($car->id) == 'timer'): ?>
                var expirationTimestamp_<?php echo $car->id; ?> = <?php echo get_post_expiration_timestamp($car->id); ?>;
                var countdownId_<?php echo $car->id; ?> = 'countdown_<?php echo $car->id; ?>';
                startCountdown(expirationTimestamp_<?php echo $car->id; ?>, countdownId_<?php echo $car->id; ?>);
            <?php endif; ?>
        <?php endforeach;
        }
        ?>

<?php if(isset($car_view)){
        if (get_post_status($car_view["id"]) == 'timer'){ ?>
        var expirationTimestamp_<?php echo $car_view["id"]; ?> = <?php echo get_post_expiration_timestamp($car_view["id"]); ?>;
                var countdownId_<?php echo $car_view["id"]; ?> = 'countdown_<?php echo $car_view["id"]; ?>';
                startCountdown(expirationTimestamp_<?php echo $car_view["id"]; ?>, countdownId_<?php echo $car_view["id"]; ?>);

                var expirationTimestamp_inner_<?php echo $car_view["id"]; ?> = <?php echo get_post_expiration_timestamp($car_view["id"]); ?>;
                var countdown_inner_<?php echo $car_view["id"]; ?> = 'countdown_inner_<?php echo $car_view["id"]; ?>';
                startCountdown(expirationTimestamp_inner_<?php echo $car_view["id"]; ?>, countdown_inner_<?php echo $car_view["id"]; ?>);

        <?php 
    } } ?>





    });
       

 
 $(document).ready(function() {
    $('#contact_form').validate({
        rules: {
            fullname: {
                required: true,
                minlength: 2 // You can set a minimum length if needed
            },
            phone: {
                required: true,
                digits: true, // Ensures the input contains only numbers
                minlength: 10, // Minimum length for a phone number
                maxlength: 15 // Maximum length for a phone number
            },
            email: {
                required: true,
                email: true // Validates the email format
            },
            subject: {
                required: true,
                minlength: 5 // Minimum length for a subject
            },
            message: {
                required: true,
                minlength: 10 // Minimum length for the message
            }
        },
        messages: {
            fullname: {
                required: "Please enter your full name",
                minlength: "Your name must be at least 2 characters long"
            },
            phone: {
                required: "Please enter your phone number",
                digits: "Please enter a valid phone number",
                minlength: "Your phone number must be at least 10 digits long",
                maxlength: "Your phone number must not exceed 15 digits"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            subject: {
                required: "Please enter the subject",
                minlength: "The subject must be at least 5 characters long"
            },
            message: {
                required: "Please enter a short note",
                minlength: "The note must be at least 10 characters long"
            }
        },
           submitHandler: function(form) {
            // Handle form submission via AJAX
            $.ajax({
                url: '<?= base_url('contactprocess') ?>',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    var res = JSON.parse(response);
                    // Show success or error message
                    if (res.status == 'success') {
                        $(".message").html('<span style="color:green;">' + res.message + '</span>');
                        // loadCategories();
                        setTimeout(function() {
                        window.location.href = "";  
                    }, 2000);  
                        
                    } else {
                        $(".message").html('<span style="color:red;">' + res.message + '</span>');
                    }
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                error: function() {
                    $(".message").html('<span style="color:red;">An error occurred. Please try again later.</span>');
                    // Hide message after 5 seconds
                    setTimeout(function() {
                        $(".message span").fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                }
            });
            return false; // Prevent default form submission
        }
    });
});

$(document).ready(function() {
    $('#togglePassword2').click(function() {
        var input = $('#confirm_password');
          var togglePassword2 = $('#togglePassword2');
        var button = $(this);

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            // button.text('Hide');
        } else {
            input.attr('type', 'password');
            // button.text('Show');
        }

        // Toggle a class on the input field
        togglePassword2.toggleClass('bi-eye');
    });
    
      $('#togglePassword3').click(function() {
        var input = $('#loginform #password');
          var togglePassword2 = $('#togglePassword3');
        var button = $(this);

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            // button.text('Hide');
        } else {
            input.attr('type', 'password');
            // button.text('Show');
        }

        // Toggle a class on the input field
        togglePassword2.toggleClass('bi-eye');
    });
    
    
       $('#togglePassword').click(function() {
        var input = $('#profileform #change_password');
          var togglePassword2 = $('#togglePassword');
        var button = $(this);

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            // button.text('Hide');
        } else {
            input.attr('type', 'password');
            // button.text('Show');
        }

        // Toggle a class on the input field
        togglePassword2.toggleClass('bi-eye');
    });
    
    
});
$(document).ready(function() {
    // Make the images sortable
    $("#car_photo_gallery_preview").sortable({
        // Use a clone of the dragged item as a helper instead of the actual image
        helper: "clone",
        // To avoid jitter, apply some tolerance
        tolerance: "pointer",
        update: function(event, ui) {
            // Get the new order of image IDs after sorting
            let sortedIDs = [];
            $("#car_photo_gallery_preview .add_imk_car2").each(function() {
                let id = $(this).attr("id").replace("img_", ""); // Get the ID from div
                sortedIDs.push(id); // Push the ID into array
            });

            // Update the hidden input with the new order
            $("#car_photo_gallery_ids").val("[" + sortedIDs.join(",") + "]");
        }
    });

 $("#remark_image_preview").sortable({
        // Use a clone of the dragged item as a helper instead of the actual image
        helper: "clone",
        // To avoid jitter, apply some tolerance
        tolerance: "pointer",
        update: function(event, ui) {
            // Get the new order of image IDs after sorting
            let sortedIDs = [];
            $("#car_photo_gallery_preview .add_imk_car2").each(function() {
                let id = $(this).attr("id").replace("img_", ""); // Get the ID from div
                sortedIDs.push(id); // Push the ID into array
            });

            // Update the hidden input with the new order
            $("#car_photo_gallery_ids").val("[" + sortedIDs.join(",") + "]");
        }
    });
    
    // Optional: Add the remove functionality (if not already present)
    $(".remove-image").on("click", function() {
        let imageID = $(this).data("id");
        $("#img_" + imageID).remove();

        // Trigger update to refresh the order
        $("#car_photo_gallery_preview").sortable("refresh");
    });
});

$(document).ready(function(){
		$("#selectAll").click(function(){
        $(".eq_inpput").prop('checked', $(this).prop('checked'));

});
});


$(document).on('click', function (e) {
    if ($(e.target).closest("#sdr").length === 0) {
        $("#slider1").hide();
    }
	
	if ($(e.target).closest("#sdr2").length === 0) {
        $("#slider2").hide();
    }
	if ($(e.target).closest("#sdr1").length === 0) {
        $("#year-slider1").hide();
    }
});
    </script>
	
	<script>
$(document).ready(function(){
$('li.dropdown').click(function() {
   $('.dropdown ul').hide();
    $(this).children('ul').show();
});
});
</script>

<style>
.rs-container .rs-scale{
    display: flex;}

body{
    overflow-x: hidden;
}
</style>

</body>
</html>