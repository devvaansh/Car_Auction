<?php $home_data = get_home_page_by_id(1); 
$reviews = get_revews();
?>

<div class="banner-section1">
<div class="container">
<div class="row g-xl-4 gy-5">
<div class="col-xxl-8 col-xl-7 d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
<div class="banner-content">
<span class="sub-title"> <?php echo $home_data["home_page_banner_title"]; ?>  <svg width="30" height="23" viewBox="0 0 30 23" xmlns="http://www.w3.org/2000/svg">
<path d="M27.5455 22.9817C27.4552 22.9815 27.3665 22.9573 27.2884 22.9115C27.2103 22.8658 27.1454 22.8001 27.1004 22.7211C27.0553 22.6421 27.0316 22.5525 27.0317 22.4613C27.0317 22.3701 27.0555 22.2805 27.1007 22.2016C28.3257 20.0567 28.9696 17.6237 28.9675 15.1475C28.9675 7.3693 22.7008 1.04076 14.9987 1.04076C7.29658 1.04076 1.02995 7.3693 1.02995 15.1475C1.02871 17.6237 1.67347 20.0564 2.89932 22.2009C2.93658 22.2601 2.9616 22.3263 2.97287 22.3955C2.98415 22.4647 2.98144 22.5355 2.96492 22.6036C2.94839 22.6718 2.91839 22.7358 2.87672 22.7919C2.83505 22.848 2.78257 22.8951 2.72244 22.9302C2.66231 22.9653 2.59577 22.9877 2.52682 22.9962C2.45787 23.0046 2.38795 22.9989 2.32124 22.9794C2.25454 22.9598 2.19244 22.9269 2.13868 22.8825C2.08492 22.8381 2.04061 22.7831 2.00841 22.721C0.692402 20.4183 -0.000272498 17.8064 8.04167e-08 15.1478C0.000272659 12.4891 0.693483 9.87736 2.00996 7.57499C3.32645 5.27261 5.21982 3.36073 7.4998 2.03148C9.77979 0.70223 12.3661 0.00244141 14.9987 0.00244141C17.6314 0.00244141 20.2176 0.70223 22.4976 2.03148C24.7776 3.36073 26.671 5.27261 27.9875 7.57499C29.3039 9.87736 29.9972 12.4891 29.9974 15.1478C29.9977 17.8064 29.305 20.4183 27.989 22.721C27.9441 22.7998 27.8795 22.8653 27.8017 22.9111C27.7239 22.9568 27.6355 22.9812 27.5455 22.9817Z" />
<path d="M23.8916 20.852C23.8005 20.8519 23.7111 20.8274 23.6324 20.781C23.5537 20.7346 23.4886 20.668 23.4438 20.5878C23.399 20.5077 23.376 20.4171 23.3772 20.325C23.3784 20.233 23.4038 20.143 23.4507 20.0641C24.3667 18.5232 24.8505 16.7596 24.8501 14.9623C24.8501 9.4795 20.4329 5.01604 15.0012 5.01604C9.56949 5.01604 5.15227 9.4769 5.15227 14.9623C5.15139 16.7589 5.63424 18.522 6.54914 20.0628C6.58726 20.1214 6.61326 20.1871 6.62561 20.256C6.63795 20.3249 6.63638 20.3957 6.62098 20.464C6.60558 20.5323 6.57668 20.5967 6.536 20.6535C6.49533 20.7102 6.44372 20.7581 6.38428 20.7942C6.32483 20.8303 6.25878 20.8539 6.19008 20.8636C6.12138 20.8733 6.05144 20.8689 5.98448 20.8506C5.91751 20.8323 5.8549 20.8006 5.80038 20.7572C5.74587 20.7139 5.70059 20.6599 5.66725 20.5985C4.65594 18.8959 4.12192 16.9477 4.12231 14.9623C4.12231 8.90547 9.00108 3.97591 15.0012 3.97591C21.0013 3.97591 25.8801 8.90287 25.8801 14.9623C25.8805 16.9477 25.3465 18.8959 24.3352 20.5985C24.2894 20.676 24.2244 20.7401 24.1466 20.7845C24.0689 20.829 23.981 20.8523 23.8916 20.852Z" />
<path d="M15.0014 5.01863C14.8648 5.01863 14.7338 4.96384 14.6373 4.86631C14.5407 4.76877 14.4864 4.63649 14.4864 4.49856V0.520065C14.4864 0.382135 14.5407 0.249855 14.6373 0.152324C14.7338 0.0547925 14.8648 0 15.0014 0C15.138 0 15.269 0.0547925 15.3655 0.152324C15.4621 0.249855 15.5164 0.382135 15.5164 0.520065V4.49856C15.5164 4.63649 15.4621 4.76877 15.3655 4.86631C15.269 4.96384 15.138 5.01863 15.0014 5.01863ZM9.74348 6.46961C9.65306 6.46963 9.56424 6.44561 9.48593 6.39997C9.40762 6.35432 9.34259 6.28866 9.29738 6.20958L7.31343 2.74009C7.24514 2.62061 7.22665 2.47863 7.26202 2.34538C7.29739 2.21212 7.38373 2.09852 7.50204 2.02955C7.62036 1.96059 7.76095 1.94191 7.8929 1.97763C8.02485 2.01335 8.13734 2.10055 8.20563 2.22003L10.1889 5.68951C10.2341 5.76853 10.2579 5.85817 10.2579 5.94941C10.258 6.04066 10.2342 6.1303 10.1891 6.20935C10.1439 6.28839 10.079 6.35405 10.0008 6.39974C9.92257 6.44542 9.83383 6.46952 9.74348 6.46961ZM5.95132 10.3909C5.86084 10.391 5.77198 10.3667 5.69383 10.3207L2.20035 8.28399C2.08204 8.21502 1.9957 8.10142 1.96033 7.96817C1.92496 7.83492 1.94345 7.69293 2.01174 7.57345C2.08003 7.45397 2.19252 7.36678 2.32447 7.33106C2.45642 7.29533 2.59702 7.31401 2.71533 7.38298L6.20945 9.42033C6.30768 9.47755 6.38447 9.56591 6.42789 9.6717C6.47131 9.7775 6.47894 9.8948 6.44959 10.0054C6.42025 10.116 6.35557 10.2138 6.26559 10.2835C6.17561 10.3532 6.06536 10.3909 5.95196 10.3909H5.95132ZM4.64199 15.667H0.517663C0.381082 15.667 0.250096 15.6122 0.153519 15.5146C0.0569419 15.4171 0.00268555 15.2848 0.00268555 15.1469C0.00268555 15.009 0.0569419 14.8767 0.153519 14.7792C0.250096 14.6816 0.381082 14.6268 0.517663 14.6268H4.64199C4.77857 14.6268 4.90955 14.6816 5.00613 14.7792C5.10271 14.8767 5.15696 15.009 5.15696 15.1469C5.15696 15.2848 5.10271 15.4171 5.00613 15.5146C4.90955 15.6122 4.77857 15.667 4.64199 15.667ZM2.45655 22.9817C2.34315 22.9817 2.23291 22.944 2.14293 22.8743C2.05295 22.8046 1.98826 22.7068 1.95892 22.5962C1.92957 22.4856 1.9372 22.3683 1.98062 22.2625C2.02404 22.1567 2.10083 22.0683 2.19906 22.0111L5.85347 19.8808C5.91209 19.8445 5.97732 19.8204 6.04531 19.81C6.1133 19.7995 6.18267 19.8029 6.24933 19.82C6.31598 19.8371 6.37858 19.8675 6.43342 19.9094C6.48826 19.9513 6.53424 20.0039 6.56863 20.064C6.60303 20.1241 6.62515 20.1906 6.63369 20.2595C6.64223 20.3284 6.63702 20.3984 6.61836 20.4652C6.5997 20.5321 6.56798 20.5945 6.52505 20.6487C6.48213 20.703 6.42888 20.748 6.36845 20.7812L2.7134 22.9121C2.63529 22.9576 2.54672 22.9816 2.45655 22.9817ZM27.5462 22.9817C27.4559 22.9817 27.3671 22.9577 27.2888 22.9121L23.6343 20.7812C23.5739 20.748 23.5207 20.703 23.4777 20.6487C23.4348 20.5945 23.4031 20.5321 23.3844 20.4652C23.3658 20.3984 23.3606 20.3284 23.3691 20.2595C23.3776 20.1906 23.3998 20.1241 23.4342 20.064C23.4686 20.0039 23.5145 19.9513 23.5694 19.9094C23.6242 19.8675 23.6868 19.8371 23.7535 19.82C23.8201 19.8029 23.8895 19.7995 23.9575 19.81C24.0255 19.8204 24.0907 19.8445 24.1493 19.8808L27.8037 22.0111C27.902 22.0683 27.9788 22.1567 28.0222 22.2625C28.0656 22.3683 28.0732 22.4856 28.0439 22.5962C28.0145 22.7068 27.9499 22.8046 27.8599 22.8743C27.7699 22.944 27.6596 22.9817 27.5462 22.9817ZM29.4851 15.667H25.3653C25.2287 15.667 25.0977 15.6122 25.0012 15.5146C24.9046 15.4171 24.8503 15.2848 24.8503 15.1469C24.8503 15.009 24.9046 14.8767 25.0012 14.7792C25.0977 14.6816 25.2287 14.6268 25.3653 14.6268H29.4851C29.6217 14.6268 29.7527 14.6816 29.8493 14.7792C29.9459 14.8767 30.0001 15.009 30.0001 15.1469C30.0001 15.2848 29.9459 15.4171 29.8493 15.5146C29.7527 15.6122 29.6217 15.667 29.4851 15.667ZM24.0515 10.3909C23.9381 10.3909 23.8278 10.3532 23.7379 10.2835C23.6479 10.2138 23.5832 10.116 23.5538 10.0054C23.5245 9.8948 23.5321 9.7775 23.5756 9.6717C23.619 9.56591 23.6958 9.47755 23.794 9.42033L27.2881 7.38298C27.4064 7.31401 27.547 7.29533 27.679 7.33106C27.8109 7.36678 27.9234 7.45397 27.9917 7.57345C28.06 7.69293 28.0785 7.83492 28.0431 7.96817C28.0077 8.10142 27.9214 8.21502 27.8031 8.28399L24.3083 10.3207C24.2304 10.3666 24.1417 10.3908 24.0515 10.3909ZM20.2593 6.46896C20.1689 6.46924 20.08 6.44524 20.0018 6.3994C19.9432 6.36526 19.8919 6.3198 19.8507 6.26561C19.8095 6.21143 19.7793 6.14958 19.7618 6.08359C19.7443 6.01761 19.7398 5.94879 19.7486 5.88106C19.7574 5.81333 19.7794 5.74802 19.8132 5.68886L21.7965 2.21938C21.8648 2.0999 21.9773 2.0127 22.1093 1.97698C22.2412 1.94126 22.3818 1.95994 22.5001 2.0289C22.6184 2.09787 22.7048 2.21147 22.7401 2.34473C22.7755 2.47798 22.757 2.61996 22.6887 2.73944L20.7054 6.20893C20.6602 6.28801 20.5952 6.35367 20.5169 6.39931C20.4386 6.44496 20.3497 6.46898 20.2593 6.46896ZM15.0014 21.3071C14.6983 21.3072 14.3986 21.2419 14.1225 21.1157C13.8464 20.9894 13.6001 20.8051 13.4002 20.575C13.2003 20.3449 13.0514 20.0743 12.9634 19.7814C12.8754 19.4884 12.8504 19.1799 12.89 18.8764L14.4909 6.55152C14.5074 6.42659 14.5682 6.31194 14.6621 6.22891C14.756 6.14588 14.8766 6.1001 15.0014 6.1001C15.1262 6.1001 15.2468 6.14588 15.3407 6.22891C15.4346 6.31194 15.4954 6.42659 15.5119 6.55152L17.1128 18.8784C17.1521 19.1817 17.1268 19.49 17.0387 19.7827C16.9506 20.0754 16.8016 20.3457 16.6017 20.5756C16.4019 20.8055 16.1557 20.9897 15.8798 21.1158C15.6038 21.242 15.3043 21.3072 15.0014 21.3071ZM15.0014 10.6178L13.9109 19.0142C13.891 19.1707 13.9043 19.3297 13.9499 19.4806C13.9956 19.6315 14.0726 19.7709 14.1758 19.8894C14.279 20.0079 14.406 20.1028 14.5483 20.1678C14.6907 20.2328 14.8452 20.2664 15.0014 20.2664C15.1576 20.2664 15.3121 20.2328 15.4545 20.1678C15.5968 20.1028 15.7238 20.0079 15.827 19.8894C15.9302 19.7709 16.0072 19.6315 16.0529 19.4806C16.0985 19.3297 16.1118 19.1707 16.0919 19.0142L15.0014 10.6178Z" />
</svg></span>
<h1><?php echo $home_data["home_page_banner_main_title"]; ?></h1>
<p><?php echo $home_data["banner_paragraph"]; ?></p>
<div class="customar-review">
<ul>
<li>
<img src="<?php if(!empty($home_data['home_page_banner_image_id'])){echo get_image_path_by_id($home_data['home_page_banner_image_id']);  } ?>" class="max_wra155" alt="" />
</li>
</ul>
</div>
</div>
</div>
<div class="col-xxl-4 col-xl-5 wow zoomIn" data-wow-delay="300ms">
<div class="car-filter-area">
<h4>Hitta din drömbil</h4>

<div class="tab-content" id="myTabContent1">
<div class="tab-pane fade show active" id="new-car" role="tabpanel" aria-labelledby="new-car-tab">

<div class="tab-content tab-content3" id="myTabContent2">
<div class="tab-pane fade show active" id="budget1" role="tabpanel" aria-labelledby="budget1-tab">
<div class="form-inner mb-25">
<form name="search" id="search" action="<?= base_url('search') ?>" method="get" >
<div class="search_wrap_add">
<input name="title" id="title" require placeholder="sök" class="sear_wrp_bt" type="text">
<input type="hidden" name="cat_buy_method" value="auction">
<button type="submit" class="sear_wrp_bt2"><i class="fa fa-search"></i></button>
</div>
</form>
<div class="search_toatal_car">Sök Fordon</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="show_wrap_acction">
<a href="<?= base_url('search') ?>?cat_buy_method=auction" class="action_wrap">BIL AUKTION</a>  
<a href="<?= base_url('search') ?>?cat_buy_method=fixed-price" class="action_wrap2">Fast Pris</a>
</div>
</div>
</div>
</div>
</div>



<div class="brand-category-area pt-50 mb-60">
<div class="container">
<div class="col-lg-12">
<div class="section-title-2 text-center mb-40">
<h2>Se vårt urval</h2>
</div>
</div>
<div class="row row-cols-xl-6 row-cols-lg-5 row-cols-md-3 row-cols-sm-3 row-cols-2 g-4 justify-content-center mb-40">
<div class="col wow fadeInUp" data-wow-delay="200ms">
<a href="<?= base_url('search') ?>?cat_buy_method=auction" class="add_catr_wrap">
<img src="<?php echo base_url(); ?>/assets/img/ic1.png" alt="" />
<span>Bil</span>
</a>
</div>
<div class="col wow fadeInUp" data-wow-delay="200ms">
<a href="<?= base_url('search') ?>?category=light_truck&cat_buy_method=auction" class="add_catr_wrap">
<img src="<?php echo base_url(); ?>/assets/img/ic2.png" alt="" />
<span>skåpbil</span>
</a>
</div>
</div>
</div>
</div>





<div class="recent-product-section bg_wrap_gray">
<div class="container max_wrapfull">
<div class="row mb-30 wow fadeInUp" data-wow-delay="200ms">
<div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
<div class="section-title1">
<span><?php echo $home_data["brand_sub_title"]; ?></span>
<h2><?php echo $home_data["brand_main_title_name"]; ?></h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content">
<div class="tab-pane fade show active" id="popular-car1" role="tabpanel" aria-labelledby="popular-car1-tab">
<div class="row g-4 justify-content-center1">




<?php

if(!empty($cars)){
    

foreach ($cars as $car):

  $gallery_images = json_decode($car->car_photo_gallery_ids, true); 

  $model_year= get_car_cat_by_id_and_table_name($car->cat_year,'model_year_category');
  $engine= get_car_cat_by_id_and_table_name($car->cat_engine,'engine_category');
  $fuel= get_car_cat_by_id_and_table_name($car->cat_fuel,'fuel_category');

//   print_r($fuel);
  

?>
<div class="col-lg-3 col-md-6 col-sm-10 wow hovgh55 fadeInUp" data-wow-delay="200ms" style="cursor: pointer;" <?php /*?>onclick=' window.location.href = "<?php echo base_url();  ?>car/<?php echo $car->car_slug; ?>"'<?php */?>>
<div class="product-card">
<div class="product-img">
  <?php if($car->cat_buy_method==3){
 ?>
<div class="number-of-img">
<i class="fa fa-clock"></i> 


    <?php if (get_post_status($car->id) == 'timer'): ?>
        <span id="countdown_<?php echo $car->id; ?>" style="color:red;"></span>
     
    <?php else: ?>
        <span><?php echo get_post_status($car->id); ?></span>
    <?php endif; ?>
</div>
<?php } ?>

<?php 
  if (empty($this->session->userdata('user_id'))) {
    $user_id = 0;
	$class = 'fa-heart-o';
	?>
	<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#signUpModal01"  class="fav add-fav"><i class="fa <?php echo $class; ?>"></i></a>
	<?php
  }else{
    $user_id = $this->session->userdata('user_id');
	if(is_already_favourite($car->id,$user_id)==0){

     $class = 'fa-heart-o';
	 ?>
	 <a href="javascript:;" data-id="<?php echo $car->id; ?>" data-user_id="<?php echo $this->session->userdata('user_id'); ?>"  class="fav add-fav"><i class="fa <?php echo $class; ?>"></i></a>
	 <?php
  }else{
    $class = 'fa-heart';
	?>
	 <a href="<?php echo base_url();  ?>/favourite"   class="fav add-fav"><i class="fa <?php echo $class; ?>"></i></a>
	 <?php
  }
  }

  


  // print_r();
?>


<?php 
if(!empty($car->reduce_price)){
?>
<div class="reduc_wrap">Reduced price</div>
<?php } ?>
<?php if(!empty($gallery_images)){ ?>
<a href="<?php echo base_url();  ?>car/<?php echo $car->car_slug; ?>"><div class="suporty587">
    <?php
        // $gallery_images is already decoded as an array on line 113
        
        $image_url ="";
        $image_url1 ="";
        $i =0;
         if (is_array($gallery_images) && !empty($gallery_images)) {
              foreach ($gallery_images as $image) {
                if($i==0){
                  $image_url =  get_image_path_by_id($image);
                } 
                if($i==1){
                     $image_url1 =  get_image_path_by_id($image);
                } 
        
        $i++;      }
             
         }

    ?>
<div class="nwt1" style="background-image:url(<?php if (!empty($image_url)) { echo $image_url; }else{ echo base_url()."/uploads/preview.png"; } ?>);"></div>
<div class="nwt2" style="background-image:url(<?php if (!empty($image_url1)) { echo $image_url1; }else{ echo base_url()."/uploads/preview.png"; } ?>);"></div>
</div></a>
<?php } ?>
<?php /* ?>
<div class="slider-btn-group">
<div class="product-stand-next swiper-arrow">
<svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
</svg>
</div>
<div class="product-stand-prev swiper-arrow">
<svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
</svg>
</div>
</div>
<div class="swiper product-img-slider add_sp55">
<div class="swiper-wrapper">
<?php
       // Decode as an associative array
        
   
        $gallery_images  =    json_decode( $gallery_images);
          
          if (is_array($gallery_images) && !empty($gallery_images)) {
              foreach ($gallery_images as $image) {

               
          ?>
<div class="swiper-slide" style="background-image:url(<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>);"></div>
<?php
              }
          }
               
          ?>
</div>
</div>

<?php */ ?>

</div>
<div class="product-content">
<h5><a href="<?php echo base_url();  ?>car/<?php echo $car->car_slug; ?>"> <?php echo $car->car_title; ?> </a></h5>
<div class="date_wrap"><span><?php if(!empty($model_year)){ echo  $model_year["year_name"]; } ?></span> <span><?php echo $car->mileage; ?> Mil</span> <span><?php if(!empty($fuel)){ echo  $fuel["fuel_name"]; } ?></span> <span><?php if(!empty($engine)){ echo  $engine["engine_name"]; } ?></span></div>

<?php if($car->cat_buy_method==3){

$bids=get_bid_by_id($car->id);

// if(!empty($bids)){
    ?>

<div class="price_wrap15"><span class="fix_st1">Ledande Bud:</span>

<span class="fix_st2 ledf55">
<?php if(!empty($bids)) { echo number_format($bids[0]->bidding_price); } else { echo 0; } ?> <?php echo $this->config->item('CURRENCY'); ?>

</span>

</div>

    
    <?php
    
// }else{
    


?>
<?php if($car->fixed_price != 0) {  ?>
<div class="price_wrap15"><span class="fix_st1">Fast Pris:</span>

<span class="fix_st2 ledf55">
<?php if(!empty($car->reduce_price)){  ?>  
<?php echo number_format($car->reduce_price); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }else{ ?>
  <?php echo number_format($car->fixed_price); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }  ?>
</span>

</div>
<?php } ?>
<?php if(!empty($car->reduce_price)){ ?>
<div class="price_wrap16"><?php echo number_format($car->fixed_price); ?> <?php echo $this->config->item('CURRENCY'); ?></div>
<?php } ?>

<?php #} ?>

<?php if($car->emi_show=='yes'){ ?>
<div class="price_wrap17"><span class="pr1556">Med Finansiering:</span> <span class="pr1557"><?php monthlyEMI($car->id); ?></span></div>
<?php } ?>

<?php }else{ ?>

<div class="price_wrap15"><span class="fix_st1">Fast Pris:</span>

<span class="fix_st2 ledf55">
<?php if(!empty($car->reduce_price)){  ?>  
<?php echo number_format($car->reduce_price); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }else{ ?>
  <?php echo number_format($car->fixed_price); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }  ?>
</span>

</div>
<?php if(!empty($car->reduce_price)){ ?>
<div class="price_wrap16"><?php echo number_format($car->fixed_price); ?> <?php echo $this->config->item('CURRENCY'); ?></div>
<?php } ?>

<?php if($car->emi_show=='yes'){ ?>
<div class="price_wrap17"><span class="pr1556">Med Finansiering:</span> <span class="pr1557"><?php monthlyEMI($car->id); ?></span></div>
<?php } ?>


<?php } ?>

</div>

</div>
</div>

<?php 
endforeach;

}else{

  echo"<p>NOT FOUND !</p>";

} ?>


</div>
</div>
<div class="view-btn-area pt-50 pb-40">
<p>Tillgängliga bilar</p>
<a class="view-btn" href="<?php echo base_url(); ?>search?cat_buy_method=auction">Visa alla bilar</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="home2-inner-banner">
<div class="container">
<div class="row wow fadeInUp" data-wow-delay="700ms">
<div class="col-lg-12">
<div class="inner-banner-content section-title-2" style="background-image: linear-gradient(90deg,#000 0%,rgba(0,0,0,0) 100%),url(<?php if(!empty($header_data['main_banner_image_id'])){echo get_image_path_by_id($header_data['main_banner_image_id']);  } ?>);">
<h2><?php echo $home_data["banner_main_title"]; ?></h2>
<p><?php echo $home_data["banner_paragraph1"]; ?></p>
<?php
if(!$this->session->userdata('user_id')){
?>
<a class="primary-btn3" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signUpModal01" >
<?php
}
else
{
?>
<a class="primary-btn3" type="button" href="<?php echo $home_data["button_link"]; ?>" >
<?php
}
?>

<svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
<path d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z"></path>
<path d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z"></path>
</svg>
Sök Efter Bilar
</a>
</div>
</div>
</div>
</div>
</div>



<div class="trusted-partner-section pt-40 pb-60">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="sub-title">
<h6>Våra Partner</h6>
<div class="dash"></div>
</div>
<div class="partner-slider">
<div class="marquee_text2">
<?php 
if(!empty($home_data['our_trusted_partners_id'])){
   $gallery_images = json_decode($home_data['our_trusted_partners_id'], true); 

   $gallery_images  =    json_decode( $gallery_images);
          
   if (is_array($gallery_images) && !empty($gallery_images)) {
       foreach ($gallery_images as $image) {        
?>
<img src="<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>" alt>


<?php
   }
  }
} ?>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="why-choose-area pt-50 mb-50">
<div class="container">
<div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
<div class="col-lg-12 d-flex justify-content-center">
<div class="section-title1 text-center">
<span><?php echo $home_data["middle_section_sub_title"]; ?></span>
<h2><?php echo $home_data["middle_section_sub_title"]; ?></h2>
</div>
</div>
</div>
<div class="row mb-50 g-4 justify-content-center">
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
<div class="choose-card">
<div class="choose-top">
<div class="choose-icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/affordable.svg" alt>
</div>
<h5><?php echo $home_data["middle_section_part1"]; ?></h5>
</div>
<p><?php echo $home_data["middle_section_part11"]; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
<div class="choose-card">
<div class="choose-top">
<div class="choose-icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/guarantee.svg" alt>
</div>
<h5><?php echo $home_data["middle_section_part2"]; ?></h5>
</div>
<p><?php echo $home_data["middle_section_part22"]; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
<div class="choose-card">
<div class="choose-top">
<div class="choose-icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/warranty.svg" alt>
</div>
<h5><?php echo $home_data["middle_section_part3"]; ?></h5>
</div>
<p><?php echo $home_data["middle_section_part33"]; ?></p>
</div>
</div>
</div>
<div class="our-activetis">
<div class="row justify-content-center g-lg-4 gy-5">
<div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-lg-start justify-content-sm-center wow fadeInUp" data-wow-delay="200ms">
<div class="single-activiti">
<div class="icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/av-car.svg" alt>
</div>
<div class="content">
<div class="number">
<h5 class="counter"><?php echo $home_data["car_available"]; ?></h5>
<span>K+</span>
</div>
<p>Bil Tillgänglig</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="300ms">
<div class="single-activiti">
<div class="icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/sold-car.svg" alt>
</div>
<div class="content">
<div class="number">
<h5 class="counter"><?php echo $home_data["car_sold"]; ?></h5>
<span>K+</span>
</div>
<p>Sålda Bilar</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="400ms">
<div class="single-activiti">
<div class="icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/use-car.svg" alt>
</div>
<div class="content">
<div class="number">
<h5 class="counter"><?php echo $home_data["used_cars"]; ?></h5>
<span>K+</span>
</div>
<p>Begagnade bil</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-4 col-sm-6 d-flex justify-content-lg-end justify-content-sm-center wow fadeInUp" data-wow-delay="500ms">
<div class="single-activiti">
<div class="icon">
<img src="<?php echo base_url(); ?>/assets/img/home1/icon/happy-customar.svg" alt>
</div>
<div class="content">
<div class="number">
<h5 class="counter"><?php echo $home_data["customer_satisfaction"]; ?></h5>
<span>%</span>
</div>
<p>Kundnöjdhet</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="home2-testimonial-section mb-50">
<div class="container">

<div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
<div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
<div class="section-title-2">
<h2><?php echo $home_data["testimonial_title"]; ?></h2>
<p><?php echo $home_data["testimonial_sub_title"]; ?></p>
</div>
<div class="review-and-btn d-flex flex-wrap align-items-center gap-sm-5 gap-3">

<div class="slider-btn-group2">
<div class="slider-btn prev-6">
<svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
</svg>
</div>
<div class="slider-btn next-6">
<svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
</svg>
</div>
</div>
</div>
</div>
</div>

<div class="row wow fadeInUp" data-wow-delay="300ms">
<div class="col-lg-12">
<div class="swiper customer-feedback-slider2">
<div class="swiper-wrapper">

<?php 

if(!empty($reviews)){
foreach ($reviews as $value) {
?>

<div class="swiper-slide">
<div class="feedback-card">
<p><?php echo htmlspecialchars($value->review, ENT_QUOTES, 'UTF-8'); ?></p>
<div class="author-name">
<h6><?php echo htmlspecialchars($value->name, ENT_QUOTES, 'UTF-8'); ?>,</h6>
<span><?php 

 $currentDate = new DateTime();
 $createdDateObj = new DateTime($value->created);

 // Calculate the difference between the current time and the created date
 $interval = $currentDate->diff($createdDateObj);

 // Format the difference into a human-readable string
 if ($interval->y > 0) {
     $timeAgo = $interval->y . ' years ago';
 } elseif ($interval->m > 0) {
     $timeAgo = $interval->m . ' months ago';
 } elseif ($interval->d > 0) {
     $timeAgo = $interval->d . ' days ago';
 } elseif ($interval->h > 0) {
     $timeAgo = $interval->h . ' hours ago';
 } elseif ($interval->i > 0) {
     $timeAgo = $interval->i . ' minutes ago';
 } else {
     $timeAgo = $interval->s . ' seconds ago';
 }

 echo $timeAgo;
?></span>
</div>
</div>
</div>

<?php } } ?>


</div>
</div>
</div>
</div>
</div>
</div>


<div class="news-section pt-50 pb-60">
<div class="container">
<div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
<div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
<div class="section-title1">
<h2><?php echo $home_data["blog_heading"]; ?></h2>
<span><?php echo $home_data["blog_sub_heading"]; ?></span>
</div>
</div>
</div>

<div class="row g-4 ">

<?php 
$blogs=get_latest_three_blogs();


if(!empty($blogs)){
  foreach ($blogs as $blog) {
   
   $catdata = get_category_by_id($blog->blog_category);

  //  print_r($catdata);

?>

<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
<div class="news-card">
<div class="news-img">
<a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_slug; ?>"><img src="<?php if (!empty($blog->blog_list_image_id)) { echo get_image_path_by_id($blog->blog_list_image_id); } ?>" alt></a>
<div class="date">
<a href="<?php echo base_url(); ?>category/<?php echo  $catdata["cat_slug"]; ?>"><?php echo  $catdata["cat_name"]; ?></a>
</div>
</div>
<div class="content">
<h6><a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_slug; ?>"><?php echo $blog->blog_title; ?></a></h6>
<div class="news-btm">
<div class="author-area">
<div class="author-content">
<a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_slug; ?>"><h6>Läs Mer</h6></a>
<a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_slug; ?>"><?php echo 'Postat på - ' . date('d F, Y', strtotime($blog->created)); ?></a>
</div>
</div>
</div>
</div>
</div>
</div>

<?php   } } ?>



</div>
</div>
</div>
