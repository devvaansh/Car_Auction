<?php 
$profile_data = get_profile($car_view["post_author_id"]);

$profile_admin_data = get_profile(1);

$footer_data = get_header_footer_by_id(1);

?>
<style>
.car-details-area .overview-content ul li {
    color: black;
}
li span {
    color: black;
}
    </style>
<div class="car-details-area pt-50 mb-40" style="padding-top:0px;">
<div class="container">
<div class="row mt_po5 mb-50">
<div class="col-lg-12 position-relative">
<div class="car-details-menu">
<nav id="navbar-example2" class="navbar">
<ul class="nav nav-pills">
<li class="nav-item">
<a class="nav-link" href="#car-img">Bilfoton</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#car-info">Bilinfo</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#kye-features">Utrustning</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#overview">Bilfakta</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#performance">Tekniska data</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#car-color">Anmärkning Bilder</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#recommended">Rekommenderad  </a>
</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-12" style="font-size:0px !important;">
    	<div>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                   
                   <?php 
            
            if(!empty($car_view["car_photo_gallery_ids"])){
              $gallery_images = json_decode($car_view["car_photo_gallery_ids"], true); 
              
          
            ?>
<?php
       // Decode as an associative array
        
   
        $gallery_images  =    json_decode( $gallery_images);
          /*  if(count($gallery_images )>5){
                
            }else{
                ?>
                <style>
                    .mibreit-thumbview-previous{
                        display:none;
                    }
                  .mibreit-thumbview-next{
                        display:none;
                    }
                </style>
                <?php 
            } */
          
          if (is_array($gallery_images) && !empty($gallery_images)) {
              foreach ($gallery_images as $image) {

               
          ?>
            
              
              
              <li><a class="ns-img" href="<?php if (!empty($image)) { echo get_image_path_by_id($image); }else{ echo base_url()."/uploads/preview.png"; } ?>"></a></li>
              <?php
              }
          }
               
          ?>

              <?php } ?>
                </ul>
            </div>
        </div>
		<div id="thumbnail-slider" style="float:left;">
            <div class="inner">
                <ul>
                
                  <?php 
               if (is_array($gallery_images) && !empty($gallery_images)) {
                foreach ($gallery_images as $image) {
  
        ?>


			<li><a class="thumb" href="<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>"></a></li>
              <?php 
                   }
                  }
              ?>
                	
                    
                </ul>
            </div>
        </div>
        </div>
    </div>
        
    <div class="col-lg-12">
        <div class="single-item mb-30" id="car-img">
<div class="car-img-area">
<div class="flex-vertical">
<?php /*?><div id="content">
			
            <div id="full-gallery" class="content-slideshow">

            <?php 
            
            if(!empty($car_view["car_photo_gallery_ids"])){
              $gallery_images = json_decode($car_view["car_photo_gallery_ids"], true); 
              
          
            ?>
<?php
       // Decode as an associative array
        
   
        $gallery_images  =    json_decode( $gallery_images);
            if(count($gallery_images )>5){
                
            }else{
                ?>
                <style>
                    .mibreit-thumbview-previous{
                        display:none;
                    }
                  .mibreit-thumbview-next{
                        display:none;
                    }
                </style>
                <?php 
            }
          
          if (is_array($gallery_images) && !empty($gallery_images)) {
              foreach ($gallery_images as $image) {

               
          ?>
              <div class="mibreit-imageElement" style=" background-image:url(<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>); background-size:auto 600px; background-position:center; background-repeat:no-repeat;">
                <img src="<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>" style="opacity:0; display:none;" alt="" />
              </div>
              <?php
              }
          }
               
          ?>

              <?php } ?>

              </div>
            </div>
<div class="mibreit-thumbview">
        <?php 
               if (is_array($gallery_images) && !empty($gallery_images)) {
                foreach ($gallery_images as $image) {
  
        ?>
              <div class="mibreit-thumbElement"> <img src="<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>" width="100" alt="" /></div>

              <?php 
                   }
                  }
              ?>

	
            </div><?php */?>
</div>
</div>
</div>
    </div>
<div class="col-lg-8">
    
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">


<div class="inner-page-banner bg_wrap555">
<div class="banner-wrapper p-0">
<div class="banner-main-content-wrap p-0">
<div class="banner-content style-2">
<?php 
  if (empty($this->session->userdata('user_id'))) {
    $user_id = 0;
  }else{
    $user_id = $this->session->userdata('user_id');
  }

  if(is_already_favourite($car_view["id"],$user_id)==0){

     $class = 'fa-heart-o';
  }else{
    $class = 'fa-heart';
  }

?>


<h1 class="mar_p5"> <?php echo $car_view["car_title"]; ?>




<?php 
  if (empty($this->session->userdata('user_id'))) {
    $user_id = 0;
	$class = 'fa-heart-o';
	?>
	<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#signUpModal01"  class="fav add-fav share-icon5 add-fav innerfav"><i class="fa <?php echo $class; ?>"></i></a>
	<?php
  }else{
    $user_id = $this->session->userdata('user_id');
	 if(is_already_favourite($car_view['id'],$user_id)==0){

     $class = 'fa-heart-o';
	 ?>
	 <a href="javascript:;" data-id="<?php echo $car_view['id']; ?>" data-user_id="<?php echo $this->session->userdata('user_id'); ?>"  class="fav add-fav share-icon5 add-fav innerfav"><i class="fa <?php echo $class; ?>"></i></a>
	 <?php
  }else{
    $class = 'fa-heart';
	?>
	 <a href="<?php echo base_url();  ?>/favourite"   class="fav add-fav share-icon5 add-fav innerfav"><i class="fa <?php echo $class; ?>"></i></a>
	 <?php
  }
  }

 


  // print_r();
?>



<?php /*?><a  data-id="<?php echo $car_view["id"]; ?>" data-user_id="<?php echo $this->session->userdata('user_id'); ?>" class="share-icon5 add-fav innerfav">
    <svg width="22" height="" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
<path d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
</path>
</svg>

<!-- <i class="fa <?php echo $class; ?>"></i> -->
</a><?php */?></h1> 
<div class="location-and-notification">
<ul>
<li><?php echo $car_view["car_sub_title"]; ?></li>
</ul>
</div>

</div>
</div>
</div>
</div>

<style>
.mibreit-thumbElement {
    height: auto !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center;
	cursor:pointer;}

</style>

<div class="single-item mb-50" id="car-info">
<div class="car-info">
<div class="title mb-20">
<h5>Bilinfo</h5>
</div>
<ul>
<li>
<div class="icon">
<img src="<?php echo base_url();  ?>assets/img/inner-page/icon/mileage.svg" alt>
</div>
<div class="content">
<h6><?php if(!empty($car_view["mileage"])){ echo $car_view["mileage"]; }else{ echo"-"; } ?></h6>
<span><?php echo $footer_data["mileage_text"]; ?></span>
</div>
</li>
<li>
<div class="icon">
<img src="<?php echo base_url();  ?>assets/img/inner-page/icon/engine.svg" alt>
</div>
<div class="content">
<h6><?php if(!empty($car_view["cat_engine"])){ 
 $cat_engine= get_car_cat_by_id_and_table_name($car_view["cat_engine"],'engine_category');
 if(!empty( $cat_engine)){
 echo $cat_engine["engine_name"];
 }else{
     echo"-";
 }
 }else{ echo"-"; } ?></h6>
<span><?php echo $footer_data["engine_text"]; ?></span>
</div>
</li>
<li>
<div class="icon">
<img src="<?php echo base_url();  ?>assets/img/inner-page/icon/fuel.svg" alt>
</div>
<div class="content">
<h6><?php if(!empty($car_view["cat_fuel"])){ 
 $cat_engine= get_car_cat_by_id_and_table_name($car_view["cat_fuel"],'fuel_category');
 if(!empty($cat_engine)){
 echo $cat_engine["fuel_name"];
 }else{
      echo"-";
 }
 }else{ echo"-"; } ?></h6>
<span><?php echo $footer_data["fuel_type_text"]; ?></span>
</div>
</li>
<li>
<div class="icon">
<img src="<?php echo base_url();  ?>assets/img/inner-page/icon/condition.svg" alt>
</div>
<div class="content">
<h6><?php if(!empty($car_view["condition"])){ echo ucwords($car_view["condition"]); }else{ echo"-"; } ?></h6>
<span><?php echo $footer_data["condition_text"]; ?></span>
</div>
</li>
</ul>
</div>
</div>
<div class="single-item mb-50" id="kye-features">
    <?php 
    if(!empty($car_view['cat_equipment'])){
$cat_equipment = json_decode($car_view['cat_equipment'], true); 
if(!empty($cat_equipment)){
    ?>
<div class="kye-features" style="color: black;">
<div class="title mb-20">
<h5><?php echo $footer_data["equipment_text"]; ?></h5>
</div>
<ul>
<?php 

foreach ($cat_equipment as $value7) { 
    
    if(!empty($value7)){
         $cat_engine= get_car_cat_by_id_and_table_name($value7,'equipment_category');
if(!empty($cat_engine)){
?>
<li style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
<path d="M6 11.25C4.60761 11.25 3.27226 10.6969 2.28769 9.71231C1.30312 8.72774 0.75 7.39239 0.75 6C0.75 4.60761 1.30312 3.27226 2.28769 2.28769C3.27226 1.30312 4.60761 0.75 6 0.75C7.39239 0.75 8.72774 1.30312 9.71231 2.28769C10.6969 3.27226 11.25 4.60761 11.25 6C11.25 7.39239 10.6969 8.72774 9.71231 9.71231C8.72774 10.6969 7.39239 11.25 6 11.25ZM6 12C7.5913 12 9.11742 11.3679 10.2426 10.2426C11.3679 9.11742 12 7.5913 12 6C12 4.4087 11.3679 2.88258 10.2426 1.75736C9.11742 0.632141 7.5913 0 6 0C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6C0 7.5913 0.632141 9.11742 1.75736 10.2426C2.88258 11.3679 4.4087 12 6 12Z" />
<path d="M8.22751 3.72747C8.22217 3.73264 8.21716 3.73816 8.21251 3.74397L5.60776 7.06272L4.03801 5.49222C3.93138 5.39286 3.79034 5.33876 3.64462 5.34134C3.49889 5.34391 3.35985 5.40294 3.25679 5.506C3.15373 5.60906 3.0947 5.7481 3.09213 5.89382C3.08956 6.03955 3.14365 6.18059 3.24301 6.28722L5.22751 8.27247C5.28097 8.32583 5.34463 8.36788 5.4147 8.39611C5.48476 8.42433 5.5598 8.43816 5.63532 8.43676C5.71084 8.43536 5.78531 8.41876 5.85428 8.38796C5.92325 8.35716 5.98531 8.31278 6.03676 8.25747L9.03076 4.51497C9.13271 4.40796 9.18845 4.26514 9.18593 4.11737C9.18341 3.9696 9.12284 3.82875 9.0173 3.72529C8.91177 3.62182 8.76975 3.56405 8.62196 3.56446C8.47417 3.56486 8.33247 3.62342 8.22751 3.72747Z" />
</svg> <?php 
 echo $cat_engine["equipment_name"];

 ?></li>

<?php } } } ?>


</ul>
</div>
<?php  } } ?>
</div>
<div class="single-item mb-50" id="overview">
<div class="overview">
<div class="title mb-25">
<h5><?php echo $footer_data["car_facts_text"]; ?></h5>
</div>
<div class="overview-content">
<ul>
    <?php 
    $brand=get_car_cat_by_id_and_table_name($car_view["cat_brand"],'brand_category');
    $model =get_car_cat_by_id_and_table_name($car_view["cat_model"],'model_category');
    $fuel =get_car_cat_by_id_and_table_name($car_view["cat_fuel"],'fuel_category');
    $body =get_car_cat_by_id_and_table_name($car_view["cat_body"],'body_category');
     $year= get_car_cat_by_id_and_table_name($car_view["cat_year"],'model_year_category');
	 
	 $model_year= get_car_cat_by_id_and_table_name($car_view["cat_year"],'model_year_category');
	 
     $engine= get_car_cat_by_id_and_table_name($car_view["cat_engine"],'engine_category');
    
	//print_r($model_year);
	?>

<li><span><?php echo $footer_data["category_text"]; ?> </span> <?php if(!empty($car_view["category"])){ echo ucwords($car_view["category"]); }else{ echo"-"; } ?> </li>  
<li><span><?php echo $footer_data["brand_text"]; ?>  </span> <?php if(!empty($brand["brand_name"])){ echo ucwords($brand["brand_name"]); }else{ echo"-"; } ?> </li> 
<li><span><?php echo $footer_data["model_text"]; ?>  </span> <?php if(!empty($model["model_name"])){ echo ucwords($model["model_name"]); }else{ echo"-"; } ?> </li> 
<li><span><?php echo $footer_data["fuel_type_text"]; ?>  </span> <?php if(!empty($fuel["fuel_name"])){ echo ucwords($fuel["fuel_name"]); }else{ echo"-"; } ?> </li> 
<li><span><?php echo $footer_data["mileage_text"]; ?>  </span> <?php if(!empty($car_view["mileage"])){ echo $car_view["mileage"]." Mileage"; }else{ echo"-"; } ?>  </li> 
<li><span><?php echo $footer_data["model_year_text"]; ?> year</span> <?php if(!empty($model_year["year_name"])){ echo $year["year_name"]; }else{ echo"-"; } ?></li> 
 <li><span><?php echo $footer_data["body_text"]; ?> </span> <?php if(!empty($body["body_name"])){ echo ucwords($body["body_name"]); }else{ echo"-"; } ?> </li>
 <li><span><?php echo $footer_data["engine_text"]; ?> </span> <?php if(!empty($engine["engine_name"])){ echo ucwords($engine["engine_name"]); }else{ echo"-"; } ?> </li>
 
<li><span><?php echo $footer_data["previous_owners_text"]; ?></span> <?php if(!empty($car_view["previous_owners"])){ echo $car_view["previous_owners"]; }else{ echo"-"; } ?> </li>
<li><span><?php echo $footer_data["license_number"]; ?></span> <?php if(!empty($car_view["license_number"])){ echo $car_view["license_number"]; }else{ echo"-"; } ?> </li>

</ul>
<ul>
<li><span><?php echo $footer_data["Number_of_seats"]; ?></span> <?php if(!empty($car_view["number_of_seats"])){ echo $car_view["number_of_seats"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["number_of_keys"]; ?></span> <?php if(!empty($car_view["number_of_keys"])){ echo $car_view["number_of_keys"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["color_text"]; ?></span> <?php if(!empty($car_view["color"])){ echo $car_view["color"]; }else{ echo"-"; } ?></li>
<li><span><?php echo "Import"; ?></span> <?php if(!empty($car_view["finish"])){ echo $car_view["finish"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["textile_text"]; ?></span> <?php if(!empty($car_view["textile"])){ echo $car_view["textile"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["first_date_traffic_sweden_text"]; ?> </span> <?php if(!empty($car_view["first_date_traffic_sweden"])){ echo $car_view["first_date_traffic_sweden"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["service_history_text"]; ?></span>  <?php if(!empty($car_view["service_history"])){ echo $car_view["service_history"]; }else{ echo"-"; } ?></li>
<!-- manufracture_month is actually status, in database it is wrong field, to make it up I am just giving "status" as constant value -->
<li><span><?php echo "Status"; ?></span> <?php if(!empty($car_view["manufacture_month"])){ echo $car_view["manufacture_month"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["horsepower_text"]; ?></span> <?php if(!empty($car_view["horsepower"])){ echo $car_view["horsepower"]; }else{ echo"-"; } ?> </li>
</ul>
</div>
</div>
</div>
<div class="single-item mb-50" id="performance">
<div class="engine-performance">
<div class="title mb-25">
<h5><?php echo $footer_data["technical_data_text"]; ?></h5>
</div>
<div class="overview-content">
<ul>
<li><span><?php echo $footer_data["chassis_number_text"]; ?></span> <?php if(!empty($car_view["chassis_number"])){ echo $car_view["chassis_number"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["engine_effect_text"]; ?></span> <?php if(!empty($car_view["engine_effect"])){ echo $car_view["engine_effect"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["max_payload_text"]; ?></span>  <?php if(!empty($car_view["max_playload"])){ echo $car_view["max_playload"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["max_pull_weight_text"]; ?></span> <?php if(!empty($car_view["max_pull_weight"])){ echo $car_view["max_pull_weight"]; }else{ echo"-"; } ?></li>
</ul>
<ul>
<!--<li><span>Max pull weight</span> <?php if(!empty($car_view["max_pull_weight"])){ echo $car_view["max_pull_weight"]; }else{ echo"-"; } ?></li>-->
<li><span><?php echo $footer_data["vehicle_total_weight_text"]; ?> </span> <?php if(!empty($car_view["vehicle_tital_weight"])){ echo $car_view["vehicle_tital_weight"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["next_inspection_the_latest_text"]; ?></span> <?php if(!empty($car_view["next_inspection"])){ echo $car_view["next_inspection"]; }else{ echo"-"; } ?></li>
<li><span><?php echo $footer_data["curb_weight_text"]; ?></span>  <?php if(!empty($car_view["curb_weight"])){ echo $car_view["curb_weight"]; }else{ echo"-"; } ?></li>
</ul>
</div>
</div>
</div>
<div class="single-item mb-50" id="car-color">
<div class="car-colors">
<div class="title-and-slider-btn mb-25">
<div class="title">
<h5>Remark Images</h5>
</div>
<div class="slider-btn-group2">
<div class="slider-btn prev-2">
<svg width="7" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
</svg>
</div>
<div class="slider-btn next-2">
<svg width="7" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
</svg>
</div>
</div>
</div>
<div class="swiper car-color-slider">
<div class="swiper-wrapper">

<?php 
            
            if(!empty($car_view["car_photo_gallery_ids"])){
              $remark_images = json_decode($car_view['remark_image_ids'], true); 
            ?>
<?php
       // Decode as an associative array
        
   
       $remark_images  =    json_decode( $remark_images);
          
       if (is_array($remark_images) && !empty($remark_images)) {
           foreach ($remark_images as $image) {

               
          ?>
             
              <div class="swiper-slide">
<div class="car-color-wrap">
    
<div class="car-img">
<img src="<?php if (!empty($image)) { echo get_image_path_by_id($image); } ?>" alt>
</div>
</div>
</div>
              <?php
              }
          }
               
          ?>

              <?php } ?>




</div>
</div>
</div>
</div>
<div class="single-item mb-0" id="car-milage">
<div class="car-milage">
<div class="title mb-25">
<h5><?php echo $footer_data["remark_text"]; ?></h5>
</div>
<div class="row">
  <div class="col-md-6">
  <div class="overview-content">
	<ul class="add15468">
    <li class="brad_inq"><span><img src="<?php echo base_url();  ?>assets/img/icon1.jpg" alt="" /> <?php echo $footer_data["breaks_text"]; ?> </span>
    <p class="<?php if($car_view['bracks_count']==1){ echo"active"; }  ?>">1</p>
     <p class="<?php if($car_view['bracks_count']==2){ echo"active"; }  ?>">2</p>
     <p class="<?php if($car_view['bracks_count']==3){ echo"active"; }  ?>">3</p>
     <p class="<?php if($car_view['bracks_count']==4){ echo"active"; }  ?>">4</p>
     <p class="<?php if($car_view['bracks_count']==5){ echo"active"; }  ?>">5</p>
    </li>
    <li><?php echo $car_view['Breaks_description']; ?></li>
    </ul>
  </div>
  </div>
  <div class="col-md-6">
  <div class="overview-content">
	<ul class="add15468">
    <li class="brad_inq"><span><img src="<?php echo base_url();  ?>assets/img/icon2.jpg" alt="" /> <?php echo $footer_data["tires_text"]; ?></span> 
  
    <p class="<?php if($car_view['tires']==1){ echo"active"; }  ?>">1</p>
     <p class="<?php if($car_view['tires']==2){ echo"active"; }  ?>">2</p>
     <p class="<?php if($car_view['tires']==3){ echo"active"; }  ?>">3</p>
     <p class="<?php if($car_view['tires']==4){ echo"active"; }  ?>">4</p>
     <p class="<?php if($car_view['tires']==5){ echo"active"; }  ?>">5</p>
  </li>
    <li><?php echo $car_view['tires_description']; ?></li>
    </ul>
  </div>
  </div>
  <div class="col-md-6">
  <div class="overview-content">
	<ul class="add15468">
    <li class="brad_inq"><span><img src="<?php echo base_url();  ?>assets/img/icon3.jpg" alt="" /> <?php echo $footer_data["exterior_body_text"]; ?> </span> 
    <p class="<?php if($car_view['exterior_body']==1){ echo"active"; }  ?>">1</p>
     <p class="<?php if($car_view['exterior_body']==2){ echo"active"; }  ?>">2</p>
     <p class="<?php if($car_view['exterior_body']==3){ echo"active"; }  ?>">3</p>
     <p class="<?php if($car_view['exterior_body']==4){ echo"active"; }  ?>">4</p>
     <p class="<?php if($car_view['exterior_body']==5){ echo"active"; }  ?>">5</p>
  </li>
    <li><?php echo $car_view['exterior_body_description']; ?></li>
    </ul>
  </div>
  </div>
  <div class="col-md-6">
  <div class="overview-content">
	<ul class="add15468">
    <li class="brad_inq"><span><img src="<?php echo base_url();  ?>assets/img/icon4.jpg" alt="" /> <?php echo $footer_data["interior_body_text"]; ?></span> 
     <p class="<?php if($car_view['interior_body']==1){ echo"active"; }  ?>">1</p>
     <p class="<?php if($car_view['interior_body']==2){ echo"active"; }  ?>">2</p>
     <p class="<?php if($car_view['interior_body']==3){ echo"active"; }  ?>">3</p>
     <p class="<?php if($car_view['interior_body']==4){ echo"active"; }  ?>">4</p>
     <p class="<?php if($car_view['interior_body']==5){ echo"active"; }  ?>">5</p>
    
      </li>
    <li><?php echo $car_view['interior_body_description']; ?></li>
    </ul>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="car-details-sidebar">


  
<?php 


if($car_view["cat_buy_method"]==2){
  ?>

  <?php 

}else{

?>
<div class="contact-info mb-40">
<div class="title">
<h4>Budgivning</h4>
</div>

<div class="lead_wrap_add">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td class="lead_wrap1">Ledande bud inkl. Moms </td>
    <td class="lead_wrap2"><span class="leadingbox" ><?php if(!empty($highest_bid)){  ?><?php echo number_format($highest_bid); ?>  <?php echo $this->config->item('CURRENCY'); ?><?php }else{ echo "Inga bud har lagts ännu"; } ?></span></td>
  </tr>
  <?php if($car_view["emi_show"]=='yes'){ ?>
  <tr>
    <td class="lead_wrap1">Med billån från</td>
    <td class="lead_wrap2 <?php if(!empty($highest_bid)){  ?> emi_wapper <?php } ?>"  >
        <?php if(!empty($highest_bid)){  ?>
      <?php
      $principal = $highest_bid; // Example principal amount
      $annual_rate = 12; // Annual interest rate in percentage
      $months = 48; // Number of monthly installments
      
    echo $emi = number_format(calculate_emi($principal, $annual_rate, $months));
      ?> <?php echo $this->config->item('CURRENCY'); ?> / month
  <?php }else{ echo "Det finns inget ledande bud"; } ?>
  </td>
  </tr>
  <?php } ?>

  <?php if(!empty($car_view["market_price"])){  ?> 
  <tr>
    <td class="lead_wrap1">Marknadsvärde Pris</td>
    <td class="lead_wrap2"><?php echo number_format($car_view["market_price"]); ?> <?php echo $this->config->item('CURRENCY'); ?></td>
  </tr>
  <?php } ?>

</table>
</div>

<div class="resv_wrap">
<span class="reservation_cls">Reservationspriset har inte uppnåtts</span>
<a href="javascript:void(0)" onClick="openNav()" class="see_wrap_bid">Se Budgivning</a>

<span>Budgivning Avslutas: <?php if (get_post_status($car_view["id"]) == 'timer'): ?>
        <b id="countdown_inner_<?php echo $car_view["id"]; ?>" style="color:red;"></b>
     
    <?php else: ?>
        <b><?php echo get_post_status($car_view["id"]); ?></b>
    <?php endif; ?>

</span>

</div>
</div>
<?php } ?>



<div class="contact-info blue_wrap mb-40">
<div class="title">
<h4>Fast Pris</h4>
</div>

<div class="lead_wrap_add">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td class="lead_wrap1">Fast pris inkl. moms</td>
    <?php 
    if($car_view["fixed_price"]==0){ 
        ?>
        <td class="lead_wrap2"><span class="fix_st2 ledf55">Inte Nämnt</span></td>
    
    <?php
    }else{
    ?>
    <td class="lead_wrap2"><span class="fix_st2 ledf55"><?php if(!empty($car_view["reduce_price"])){  ?>  
<?php echo number_format($car_view["reduce_price"]); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }else{ ?>
  <?php echo number_format($car_view["fixed_price"]); ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }  ?></span>
<?php if(!empty($car_view["reduce_price"])){ ?>
<div class="price_wrap16"><?php echo  number_format($car_view["fixed_price"]); ?> <?php echo $this->config->item('CURRENCY'); ?></div>
<?php } ?>
</td>
<?php } ?>
  </tr>
  <?php if($car_view["emi_show"]=='yes'){ ?>
  <tr>
    <td class="lead_wrap1">With car loan from</td>
    <td class="lead_wrap2 emi_wapper1">     <?php
   
        $fixed_price = $car_view["fixed_price"]; // Example principal amount
          $reduce_price = $car_view["reduce_price"];
          
          if(!empty($reduce_price)){
             $principal = $reduce_price;
          }else{
             $principal = $fixed_price;
          }
    
      $annual_rate = 12; // Annual interest rate in percentage
      $months = 48; // Number of monthly installments
      
    echo $emi = number_format(calculate_emi($principal, $annual_rate, $months));
      ?> <?php echo $this->config->item('CURRENCY'); ?> / month</td>
  </tr>
  <?php } ?>
</table>
</div>

<div class="resv_wrap">
<span class="see_wrap_bid5">
<p>RING MIG FÖR ATT BOKA NU</p>
<?php echo $profile_admin_data["phone_number"]; ?>
</span>
</div>

</div>
<?php if(!empty($profile_data["address"]) && !empty($profile_data["city"]) && !empty($profile_data["pincode"]) ){ ?>
<div class="inquiry-form mb-40">
<div class="title">
<h4>Återförsäljarinformation</h4>
</div>
<form>
  <?php if(!empty($profile_data["address"])){ ?>
<div class="form-inner mb-20">
<label>Adress</label>
<input type="text" disabled class="mrt_wrp5" value="<?php echo $profile_data["address"]; ?>"> <?php } ?>
</div>
<?php if(!empty($profile_data["city"])){ ?>
<div class="form-inner mb-20">
<label>Stad</label>
<input type="text" class="mrt_wrp5" disabled value="<?php echo $profile_data["city"]; ?>"> <?php } ?>
</div>
<?php if(!empty($profile_data["pincode"])){ ?>
<div class="form-inner mb-20">
<label>Postadress</label>
<input type="text" class="mrt_wrp5" disabled value="<?php echo $profile_data["pincode"]; ?>"> <?php } ?>
</div>
</form>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>

<div id="recommended" class="most-search-area style-2 pt-50 pb-60 mb-0">
<div class="container">
<div class="row mb-30 wow fadeInUp" data-wow-delay="300ms">
<div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
<div class="section-title1">
<h2>Rekommenderas för dig</h2>


<?php

// print_r($cars);

?>
</div>
</div>
</div>

<div class="row wow fadeInUp" data-wow-delay="300ms">

<div class="col-lg-12 position-relative">
<div class="swiper upcoming-car-slider mb-50">
<div class="swiper-wrapper pb-3">

<?php

if(count($cars)>5){
  
}else{
  
    ?>
    <style>
    .slider-btn{
        display: none !important;
    }
    
    </style>
    <?php 
}
if(!empty($cars)){



foreach ($cars as $car):

  $gallery_images = json_decode($car->car_photo_gallery_ids, true); 

  $model_year= get_car_cat_by_id_and_table_name($car->cat_year,'model_year_category');
  $engine= get_car_cat_by_id_and_table_name($car->cat_engine,'engine_category');
  

?>

<div class="swiper-slide hovgh55" style="cursor: pointer;" <?php /*?>onclick=' window.location.href = "<?php echo base_url();  ?>car/<?php echo $car->car_slug; ?>"'<?php */?>>
<div class="product-card">
<div class="product-img">
<div class="number-of-img">
<i class="fa fa-clock"></i> 


    <?php if (get_post_status($car->id) == 'timer'): ?>
        <span id="countdown_<?php echo $car->id; ?>" style="color:red;"></span>
     
    <?php else: ?>
        <span><?php if(get_post_status($car->id) == "Auction Time Completed" ) { echo "Auktionstid slutförd"; } else { echo get_post_status($car->id); } ?></span>
    <?php endif; ?>
</div>

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
<div class="reduc_wrap">Sänkt Pris</div>
<?php } ?>
<?php if(!empty($gallery_images)){ ?>
<a href="<?php echo base_url();  ?>car/<?php echo $car->car_slug; ?>"><div class="suporty587">
    <?php
        $gallery_images  =    json_decode( $gallery_images);
        
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
<div class="date_wrap"><span><?php if(!empty($model_year)){ echo  $model_year["year_name"]; } ?></span> <span><?php echo $car->mileage; ?> miles</span> <span><?php if(!empty($engine)){ echo  $engine["engine_name"]; } ?></span></div>

<?php if($car->cat_buy_method==3){

$bids=get_bid_by_id($car->id);

if(!empty($bids)){
    ?>

<div class="price_wrap15"><span class="fix_st1">Ledande Bud:</span>

<span class="fix_st2 ledf55">
<?php echo $bids[0]->bidding_price; ?> <?php echo $this->config->item('CURRENCY'); ?>

</span>

</div>

    
    <?php
    
}else{
    


?>
<div class="price_wrap15"><span class="fix_st1">Fast Pris:</span>

<span class="fix_st2 ledf55">
<?php if(!empty($car->reduce_price)){  ?>  
<?php echo $car->reduce_price; ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }else{ ?>
  <?php echo $car->fixed_price; ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }  ?>
</span>

</div>
<?php if(!empty($car->reduce_price)){ ?>
<div class="price_wrap16"><?php echo $car->fixed_price; ?> <?php echo $this->config->item('CURRENCY'); ?></div>
<?php } ?>

<?php } ?>

<?php if($car->emi_show=='yes'){ ?>
<div class="price_wrap17"><span class="pr1556">With financing:</span> <span class="pr1557"><?php monthlyEMI($car->id); ?></span></div>
<?php } ?>

<?php }else{ ?>

<div class="price_wrap15"><span class="fix_st1">Fast Pris:</span>

<span class="fix_st2 ledf55">
<?php if(!empty($car->reduce_price)){  ?>  
<?php echo $car->reduce_price; ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }else{ ?>
  <?php echo $car->fixed_price; ?> <?php echo $this->config->item('CURRENCY'); ?>
<?php }  ?>
</span>

</div>
<?php if(!empty($car->reduce_price)){ ?>
<div class="price_wrap16"><?php echo $car->fixed_price; ?> <?php echo $this->config->item('CURRENCY'); ?></div>
<?php } ?>

<?php if($car->emi_show=='yes'){ ?>
<div class="price_wrap17"><span class="pr1556">With financing:</span> <span class="pr1557"><?php monthlyEMI($car->id); ?></span></div>
<?php } ?>


<?php } ?>

</div>

</div>
</div>


<?php 
endforeach;

}else{

  echo"<p>HITTADE INTE !</p>";

} ?>



</div>
</div>
</div>
</div>
<div class="row wow fadeInUp" data-wow-delay="400ms">
<div class="col-lg-12 divider">
<div class="slider-btn-group style-2 justify-content-md-between justify-content-center">
<div class="slider-btn prev-2 d-md-flex d-none">
<svg width="11" height="19" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
</svg>
</div>
<div class="view-btn-area">
<p>There will be <?php echo total_cars(); ?>+ Similar Car</p>
<a class="view-btn" href="<?php echo base_url();  ?>search">View More</a>
</div>
<div class="slider-btn next-2 d-md-flex d-none">
<svg width="11" height="19" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
<path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</div>

<?php


$gallery_images = json_decode($car_view["car_photo_gallery_ids"], true); 

    $gallery_images  =    json_decode( $gallery_images);
?>


<div id="mySidenav55" class="sidenav55">
   <div class="wrapper_inq_side">
    <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
     <div class="bid_destails_wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
           <div class="bid_deatil_car">
           <img src="<?php if (!empty($gallery_images[0])) { echo get_image_path_by_id($gallery_images[0]); } ?>" class="mrapp_mk5" alt="" />
           <h2><?php echo $car_view["car_title"]; ?></h2>
           <p><?php echo $car_view["car_sub_title"]; ?></p>
           </div>
          </div>
          <div class="col-md-4">
          <div class="bid_wrap_call">
          <span id="bidcount" > </span>
          
          <a href="#help15" data-bs-toggle="modal"><i class="fa fa-comments"></i> Budgivningsguide</a>
          </div>
          </div>
        </div>
        
        <div class="row mt_r155">
          <div class="col-md-5">
          <div class="par_wrap_time">
          <h2><?php if($this->session->userdata('user_id')!=$car_view["post_author_id"]) { echo "Delta i budgivningen"; } else { echo "Du kan inte delta i budet"; } ?></h2>
          <p><?php if (get_post_status($car_view["id"]) == 'timer'): ?>
        <span id="countdown_<?php echo $car_view["id"]; ?>" style="color:red;"></span>
     
    <?php else: ?>
        <span><?php echo get_post_status($car_view["id"]); ?></span>
    <?php endif; ?></p>
          </div>
          
          <div class="gray_wrap554">
          <?php if(!$this->session->userdata('user_id')){ ?>
          <div class="sign_filpo5">
      
          <a onclick="closeNav()" href="javascript:;" data-bs-toggle="modal" data-bs-target="#logInModal01" >Sign in</a> <span>or</span> <a onclick="closeNav()" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signUpModal01">Skapa konto</a>
       
          <p>in order to participate in bidding.</p>
          </div>
          <input type="hidden" name="car_id" id="car_id" value="<?php echo $car_view["id"]; ?>" /> 
          <?php }else{ ?>

            <?php 
			//print_r($car_view);
			
			if($car_view["auction_status"]!=1){ ?>
            
          <div class="plaf55" id="bidformbox">
          <?php if($this->session->userdata('user_id')!=$car_view["post_author_id"] && get_post_status($car_view["id"]) != "Auction Time Completed"){ ?>  <h3>Lägg ett bud på detta fordon</h3><?php } ?>
          <form name="bidform" id="bidform" >
          <div class="place_wrap_add">
          <?php if(($this->session->userdata('user_id')!=$car_view["post_author_id"]) && get_post_status($car_view["id"]) != "Auction Time Completed"){ ?>
          <input name="bidprice" id="bidprice" class="plac_inpt" placeholder="Budbelopp" type="text" required>
          
          <div style="margin-top: 10px;">
            <label style="display: block; margin-bottom: 5px;">
              <input type="checkbox" id="enable_auto_bid" name="enable_auto_bid" style="margin-right: 5px;">
              <span style="font-size: 14px;">Aktivera Auto Bid</span>
            </label>
            <div id="auto_bid_section" style="display: none; margin-top: 5px;">
              <input name="max_auto_bid" id="max_auto_bid" class="plac_inpt" placeholder="Max Auto Bid Belopp" type="text" style="margin-bottom: 5px;">
              <p style="font-size: 12px; color: #666; margin: 5px 0;">
                <i class="fa fa-info-circle"></i> Systemet kommer automatiskt att lägga bud åt dig upp till ditt maxbelopp
              </p>
            </div>
          </div>
          
          <input name="" class="plac_inpt2" value="Lägg bud" type="submit" style="margin-top: 10px;"> 
          <?php } ?>
          
          <input type="hidden" name="car_id" id="car_id" value="<?php echo $car_view["id"]; ?>" />
          </div>   </form>
          </div>
          <p class="message"></p>
          
          <?php }else{ ?>
		  <button name="" class="plac_inpt" style="border-radius: 7px;font-size: 13px;font-weight: 600;background-color: #ff7400;padding: 5px 0px; color: #fff;" value="" type="button"><i class="fa fa-trophy"></i> Vinnare utsedd</button>
            <input type="hidden" name="car_id" id="car_id" value="<?php echo $car_view["id"]; ?>" />
            <?php

          } } ?>

          </div>
          </div>
          <div class="col-md-7">
            <div class="resv_wrap_bid">
               <div class="head_res_p5 reservation_cls">Reservationspriset har inte uppnåtts</div>

              
               
               <div class="row">
                <div class="col-md-12">
                 <div class="row" id="yourContainerId" >

                <!-- <div class="leading_wrap15">
                <div class="leading_bh">
                 <div class="call_bid958">
                 <i class="fa fa-user"></i> LEADING BID  <span class="ad52 ml_a55">1</span>
                 </div>
                 
                 <div class="bid_amoi55">
                 <h5>330000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
               </div>

                 <div class="col-md-6">
                 <div class="leading_wrap16">
                  <div class="leading_bh">
                 <div class="call_bid959">
                 <i class="fa fa-user"></i> <span class="ad52">8</span>
                 </div>
                 
                 <div class="bid_amoi56">
                 <h5>320000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
                 </div>
                 </div>

                 <div class="col-md-6">
                 <div class="leading_wrap16">
                  <div class="leading_bh">
                 <div class="call_bid959">
                 <i class="fa fa-user"></i> <span class="ad52">7</span>
                 </div>
                 
                 <div class="bid_amoi56">
                 <h5>300000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
                 </div>
                 </div>
                 <div class="col-md-6">
                 <div class="leading_wrap16">
                  <div class="leading_bh">
                 <div class="call_bid959">
                 <i class="fa fa-user"></i> <span class="ad52">1</span>
                 </div>
                 
                 <div class="bid_amoi56">
                 <h5>290000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
                 </div>
                 </div>
                 <div class="col-md-6">
                 <div class="leading_wrap16">
                  <div class="leading_bh">
                 <div class="call_bid959">
                 <i class="fa fa-user"></i> <span class="ad52">6</span>
                 </div>
                 
                 <div class="bid_amoi56">
                 <h5>280000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
                 </div>
                 </div>
                 <div class="col-md-6">
                 <div class="leading_wrap16">
                  <div class="leading_bh">
                 <div class="call_bid959">
                 <i class="fa fa-user"></i> <span class="ad52">5</span>
                 </div>
                 
                 <div class="bid_amoi56">
                 <h5>270000 SEK</h5>
                 <span>Auto bid, Today at 4:09 AM</span>
                 </div>
                </div>
                 </div>
                 </div> -->

                 </div>
                 </div>
                 


               </div>

            </div>
          </div>
        </div>
      </div>
     </div>
   </div>
</div>

<div class="modal signUp-modal fade" id="help15" tabindex="-1" aria-labelledby="signUpModal01Label" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="signUpModal01Label"> Budgivningsguide</h4>

<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>
</div>
<div class="modal-body">
<p><?php 
$footer_data = get_header_footer_by_id(1);

echo $footer_data["bidding_guide"]; ?></p>
</div>
</div>
</div>
</div>

<script>



 const offset = 330; // Offset value (200px from the top)
const scrollDuration = 100; // Duration in milliseconds (increase for slower scrolling)

document.querySelectorAll('a.nav-link').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    if (this.hash !== "") {
      e.preventDefault();
      const targetID = this.hash;
      const targetElement = document.querySelector(targetID);

      if (targetElement) {
        const startPosition = window.pageYOffset;
        const targetPosition = targetElement.offsetTop - offset;
        const distance = targetPosition - startPosition;
        let startTime = null;

        function animation(currentTime) {
          if (startTime === null) startTime = currentTime;
          const timeElapsed = currentTime - startTime;
          const run = ease(timeElapsed, startPosition, distance, scrollDuration);

          window.scrollTo(0, run);

          if (timeElapsed < scrollDuration) {
            requestAnimationFrame(animation);
          }
        }

        function ease(t, b, c, d) {
          t /= d / 2;
          if (t < 1) return c / 2 * t * t + b;
          t--;
          return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
      }
    }
  });
});

</script>



        
            <style>
#ninja-slider {
    width:80%;
    padding: 0px;

    margin:0 auto;
    overflow:hidden;
    box-sizing:border-box;
}

#ninja-slider.fullscreen {
    background:#1b1b1b;
}

#ninja-slider div.fs-icon {
    top:10px;
    right:6px;
    width:60px;
    height:26px;
    background: rgba(0,0,0,0.3);
    z-index:2;
    color:white;
    text-align:center;
    font:bold 11px/26px arial;
    border:1px solid rgba(255,255,255,0.3);
    border-radius:2px;
    opacity:0;
    -webkit-transition:opacity 0.8s;
    transition:opacity 0.8s;
}

#ninja-slider .slider-inner:hover div.fs-icon,
#ninja-slider.fullscreen div.fs-icon {
    opacity: 1;
}

#ninja-slider div.fs-icon::before {    
    content:"EXPAND";
    display:block;
}

#ninja-slider.fullscreen div.fs-icon::before {
    content:"CLOSE";
}

#ninja-slider .slider-inner {
    margin:0 auto;
    font-size:0px;
    position:relative;
    box-sizing:border-box;
}

#ninja-slider.fullscreen .slider-inner {
    width:80%;
    max-width:1440px;
}

#ninja-slider ul {
    position:relative;
    list-style:none;
    padding:0;
    box-sizing:border-box;
    touch-action:pan-y;
}

#ninja-slider li {
    
    width:100%;
    height:100%;
    top:0;
    left:0;
    position: absolute;
    font-size:12px;
    list-style:none;
    margin:0;
    padding:0;
    opacity:0;
    overflow:hidden;
    box-sizing:border-box;
}

#ninja-slider li.ns-show {
    opacity:1;
}


#ninja-slider .ns-img {
    background-size:contain;
    box-shadow: 0 0px 0px rgba(0,0,0,.8),inset 0 0 0px rgba(255,255,255,.4);
    cursor:default;
    display:block;
    position: absolute;
    width:100%;
    height:100%;
    background-repeat:no-repeat;
    background-position:center center;}


#ninja-slider .video, .video-playbutton-layer {
    top:0; left:0; border:0;
    width: 100%;height: 100%;
    text-align: center;
    background: black;
    position: absolute;}

.video-playbutton-layer {
    background: transparent url(../css-img/video.png) no-repeat center center;}

#ninja-slider div.stopVideoIcon {
    position:absolute;
    width:30px;height:30px;
    top:0;right:0px;
    margin:0 0 6px 6px;
    background:rgba(0,0,0,0.7);
    border-bottom-left-radius:4px;
    cursor:pointer;}
	
#ninja-slider div.stopVideoIcon::before {
    content:"+";
    color:white;
    font:bold 30px/30px arial;
    -webkit-transform:rotate(45deg);
    transform: rotate(45deg);
    display:block;}

#ninja-slider-pause-play { display:none;} 

#ninja-slider-prev, #ninja-slider-next{
    position: absolute;
    display:inline-block;
    width:42px;
    height:56px;
    line-height:56px;
    top: 50%;
    margin-top:-28px;
    background-color:transparent;
    backface-visibility:hidden;
    color:white;
    overflow:hidden;
    white-space:nowrap;
    -webkit-user-select: none;
    user-select:none;
    border-radius:2px;
    z-index:10;
    opacity:1; 
    font-family:sans-serif;   
    font-size:13px;
    cursor:pointer;
    -webkit-transition:all 0.7s;
    transition:all 0.7s;}
	
#ninja-slider-prev:hover, #ninja-slider-next:hover {
    opacity:1;}

#ninja-slider.fullscreen #ninja-slider-prev:hover, #ninja-slider.fullscreen #ninja-slider-next:hover {
    width:90px;
}

#ninja-slider-prev {
    left: 0;
}

#ninja-slider-next {
    right: 0;
}

#ninja-slider.fullscreen #ninja-slider-prev {
    left: -50px; 
    opacity:1; 
}
#ninja-slider.fullscreen #ninja-slider-next {
    right: -50px;
    opacity:1; 
}

#ninja-slider-prev div {opacity:0;margin-left:30px;transition:opacity 0.7s;}
#ninja-slider-next div {opacity:0;margin-right:30px;transition:opacity 0.7s;}
#ninja-slider.fullscreen #ninja-slider-prev:hover div {opacity:1;}
#ninja-slider.fullscreen #ninja-slider-next:hover div {opacity:1;}

#ninja-slider-prev::before, #ninja-slider-next::before {
    position: absolute;
    top: 17px;
    content: "";
    display: inline-block;
    width: 30px;
    height: 30px;
    border-left: 2px solid #000;
    border-top: 2px solid #000;}

#ninja-slider-prev::before {
    -ms-transform:rotate(-45deg);
    -webkit-transform:rotate(-45deg);
    transform: rotate(-45deg);
    backface-visibility:hidden;
    left:14px;}

#ninja-slider-next::before {
    -ms-transform:rotate(135deg);
    -webkit-transform:rotate(135deg);
    transform: rotate(135deg);
    backface-visibility:hidden;
    right:14px;}


#ninja-slider-pager { display:none;}   

#ninja-slider-pager, #ninja-slider-prev, #ninja-slider-next, #ninja-slider-pause-play{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    user-select: none;}

#thumbnail-slider {    
    height:567px; 
	width:20%;
    display:inline-block;
    padding:0px;
    position:relative;
    -webkit-user-select: none;
    user-select:none;
}

#thumbnail-slider div.inner {
    border-radius:3px;
    padding:0 12px;   
    height:100%;  
	text-align:center;
	box-sizing:border-box;
    position:relative;
    overflow:hidden;
    margin:0;
}
 
#thumbnail-slider div.inner ul {    
    position:relative;
    left:0; top:0;
    list-style:none;
    font-size:0;
    padding:0;
    margin:0;
    float:left!important;
    width:100% !important;
    height:auto!important;
}

#thumbnail-slider ul li {
    opacity:1;
    display:block;
	margin:0px auto !important;
    border:3px solid transparent;
    margin:4px 0;
    transition:all 0.5s;
    text-align:center;
    padding:0;
    position:relative;
    list-style:none;
    box-sizing:content-box;
    backface-visibility:hidden;    
	-webkit-filter: grayscale(100%);
	filter: grayscale(50%);}

#thumbnail-slider ul li.active {
    border-color:white;    
	-webkit-filter: initial;
	filter: initial;}
	
#thumbnail-slider li:hover {
    border-color:rgba(255,255,255,0.5);   
	-webkit-filter: grayscale(50%);
	filter: grayscale(50%);}

#thumbnail-slider .thumb {
    width:100%;
    height: 100%;
    background-size:contain;
    background-repeat:no-repeat;
    background-position:center center;
    display:block;
    position:absolute;
    font-size:0;}

#thumbnail-slider-pause-play {display:none;} 

#thumbnail-slider-prev, #thumbnail-slider-next{
    position: absolute;
    background-color:transparent;
    width:100%;
    height:30px;
    line-height:30px;
    text-align:center;
    margin:0;
    color:white;
    z-index:10;
    cursor:pointer;
    transition:opacity 0.6s;
    background: rgba(255, 255, 255, 0.55);
    backface-visibility:hidden;}

#thumbnail-slider-prev {
    top:0;}

#thumbnail-slider-next {
    bottom:0;}
	
#thumbnail-slider-next.disabled, #thumbnail-slider-prev.disabled {
    opacity:0.1;
    cursor:default;}

#thumbnail-slider-prev::before, #thumbnail-slider-next::before {
    position:absolute;
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-left:-5px;
    border-left: 2px solid #000;
    border-top: 2px solid #000;}

#thumbnail-slider-prev::before {
    top:12px;
    -ms-transform:rotate(-45deg);
    -webkit-transform:rotate(45deg);
    transform: rotate(45deg);}

#thumbnail-slider-next::before {
    bottom:12px;
    -ms-transform:rotate(135deg);
    -webkit-transform:rotate(-135deg);
    transform: rotate(-135deg);}

@media screen and (max-width: 950px){
#ninja-slider{
	width:100%;}

#thumbnail-slider{
	display:none;}
}
</style>

<script>    
var nsOptions =
{
    sliderId: "ninja-slider",
    transitionType: "slide", //"fade", "slide", "zoom", "kenburns 1.2" or "none"
    autoAdvance: false,
    delay: "default",
    transitionSpeed: 1000,
    aspectRatio: "16:9",
    initSliderByCallingInitFunc: false,
    shuffle: false,
    startSlideIndex: 0, //0-based
    navigateByTap: true,
    pauseOnHover: false,
    keyboardNav: true,
    before: function (currentIdx, nextIdx, manual) { if(manual && typeof mcThumbnailSlider!="undefined") mcThumbnailSlider.display(nextIdx);},
    license: ""
};

var nslider = new NinjaSlider(nsOptions);

/* Ninja Slider v2016.12.29 Copyright www.menucool.com */
function NinjaSlider(a){"use strict";if(typeof String.prototype.trim!=="function")String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")};var e="length",t=a.sliderId,pb=function(d){var a=d.childNodes,c=[];if(a)for(var b=0,f=a[e];b<f;b++)a[b].nodeType==1&&c.push(a[b]);return c},E=function(b,a){return b.getAttribute(a)},db=function(a,b){return a.getElementsByTagName(b)},j=document,O="documentElement",u="addEventListener",g="className",F="height",A="zIndex",Q="backgroundImage",Qb=function(c){var a=c.childNodes;if(a&&a[e]){var b=a[e];while(b--)a[b].nodeType!=1&&a[b][y].removeChild(a[b])}},x=function(a,c,b){if(a[u])a[u](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},yb=function(d,c){for(var b=[],a=0;a<d[e];a++)b[b[e]]=String[nb](d[Z](a)-(c?c:3));return b.join("")},sb=function(a){if(a&&a.stopPropagation)a.stopPropagation();else if(window.event)window.event.cancelBubble=true},rb=function(b){var a=b||window.event;if(a.preventDefault)a.preventDefault();else if(a)a.returnValue=false},Tb=function(b){if(typeof b[d].webkitAnimationName!="undefined")var a="-webkit-";else a="";return a},Ob=function(){var b=db(j,"head");if(b[e]){var a=j.createElement("style");b[0].appendChild(a);return a.sheet?a.sheet:a.styleSheet}else return 0},J=function(){return Math.random()},Ab=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],Yb=function(a){return null;},zb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],m=setTimeout,y="parentNode",g="className",d="style",L="paddingTop",nb="fromCharCode",Z="charCodeAt",v,Y,D,H,I,vb,R={},s={},B;v=(navigator.msPointerEnabled||navigator.pointerEnabled)&&(navigator.msMaxTouchPoints||navigator.maxTouchPoints);Y="ontouchstart"in window||window.DocumentTouch&&j instanceof DocumentTouch||v;var Eb=function(){if(Y){if(navigator.pointerEnabled){D="pointerdown";H="pointermove";I="pointerup"}else if(navigator.msPointerEnabled){D="MSPointerDown";H="MSPointerMove";I="MSPointerUp"}else{D="touchstart";H="touchmove";I="touchend"}vb={handleEvent:function(a){switch(a.type){case D:this.a(a);break;case H:this.b(a);break;case I:this.c(a)}sb(a)},a:function(a){b[c][d][h?"top":"left"]="0";if(v&&a.pointerType!="touch")return;M();var e=v?a:a.touches[0];R={x:e.pageX,y:e.pageY,t:+new Date};B=null;s={};f[u](H,this,false);f[u](I,this,false)},b:function(a){if(!v&&(a.touches[e]>1||a.scale&&a.scale!==1))return;if(v&&a.pointerType!="touch")return;var f=v?a:a.touches[0];s[h?"y":"x"]=f.pageX-R.x;s[h?"x":"y"]=f.pageY-R.y;if(v&&Math.abs(s.x)<21)return;if(B===null)B=!!(B||Math.abs(s.x)<Math.abs(s.y));!B&&rb(a);b[c][d][h?"top":"left"]=s.x+"px"},c:function(){var g=+new Date-R.t,e=g<250&&Math.abs(s.x)>20||Math.abs(s.x)>99;if(c==r-1&&s.x<0||!c&&s.x>0)e=0;B===null&&a.navigateByTap&&!b[c].player&&n(c+1,1);if(B===false)if(e)n(c+(s.x>0?-1:1),1);else{b[c][d][h?"top":"left"]="0";wb()}f.removeEventListener(H,this,false);f.removeEventListener(I,this,false)}};f[u](D,vb,false)}},i={};i.a=Ob();var Wb=function(a){for(var c,d,b=a[e];b;c=parseInt(J()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},Vb=function(a,c){var b=a[e];while(b--)if(a[b]===c)return true;return false},K=function(a,c){var b=false;if(a[g]&&typeof a[g]=="string")b=Vb(a[g].split(" "),c);return b},o=function(a,b,c){if(!K(a,b))if(a[g]=="")a[g]=b;else if(c)a[g]=b+" "+a[g];else a[g]+=" "+b},C=function(c,f){if(c[g]){for(var d="",b=c[g].split(" "),a=0,h=b[e];a<h;a++)if(b[a]!==f)d+=b[a]+" ";c[g]=d.trim()}},gb=function(a){if(a[g])a[g]=a[g].replace(/\s?sl-\w+/g,"")},Gb=function(){var a=this;if(a[g])a[g]=a[g].replace(/sl-s\w+/,"ns-show").replace(/sl-c\w+/,"")},q=function(a){a="#"+t+a.replace("__",i.p);i.a.insertRule(a,0)},Sb=function(a){var b=Yb(document.domain.replace("www.",""));try{typeof atob=="function"&&(function(a,c){var b=yb(atob("dy13QWgsLT9taixPLHowNC1BQStwKyoqTyx6MHoycGlya3hsMTUtQUEreCstd0E0P21qLHctd19uYTJtcndpdnhGaWpzdmksbV9rKCU2NiU3NSU2RSUlNjYlNzUlNkUlNjMlNzQlNjklNkYlNkUlMjAlNjUlMjglKSo8Zy9kYm1tKXVpanQtMio8aCkxKjxoKTIqPGpnKW4+SylvLXAqKnx3YnMhcz5OYnVpL3Nib2VwbikqLXQ+ZAFeLXY+bCkoV3BtaGl2JHR5dmdsZXdpJHZpcW1yaGl2KCotdz4ocWJzZm91T3BlZig8ZHBvdHBtZi9tcGgpcyo8amcpdC9vcGVmT2JuZj4+KEIoKnQ+ayl0KgE8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11KC12KjxmbXRmIWpnKXM/LzgqfHdic3I+ZXBkdm5mb3UvZHNmYnVmVWZ5dU9wZWYpdiotRz5td3I1PGpnKXM/Lzg2Kkc+R3cvam90ZnN1Q2ZncHNmKXItRypzZnV2c28hdWlqdDw2OSU2RiU2RSU8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11cGR2bmYlJG91L2RzZmJ1ZlVmeQ=="),a[e]+parseInt(a.charAt(1))).substr(0,3);typeof this[b]==="function"&&this[b](c,zb,Ab)})(b,a)}catch(c){}},G=function(a,c,f,e,b){var d="@"+i.p+"keyframes "+a+" {from{"+c+";} to{"+f+";}}";i.a.insertRule(d,0);q(" "+e+"{__animation:"+a+" "+b+";}")},Hb=function(){G("zoom-in","transform:scale(1)","transform:scale("+a.scale+")","li.ns-show .ns-img",a.e+l+"ms 1 alternate none");U();q(" ul li .ns-img {background-size:cover;}")},Fb=function(){var c=a.e*100/(a.e+l),b="@"+i.p+"keyframes zoom-in {0%{__transform:scale(1.4);__animation-timing-function:cubic-bezier(.1,1.2,.02,.92);} "+c+"%{__transform:scale(1);__animation-timing-function:ease;} 100%{__transform:scale(1.1);}}";b=b.replace(/__/g,i.p);i.a.insertRule(b,0);q(" li.ns-show .ns-img {__animation:zoom-in "+(a.e+l)+"ms 1 alternate both;}");U();q(" ul li .ns-img {background-size:cover;}")},U=function(){q(" li {__transition:opacity "+l+"ms;}")},Db=function(){if(h)var b="100%";else b=(screen.width/(1.5*f[y].offsetWidth)+.5)*100+"%";var c=l+"ms ease both";if(a.c!="slide"&&!h&&l>294)c="294ms ease both";var k=i.p+"transform:translate"+(h?"Y":"X")+"(",g=k+b+")",e=k+"-"+b+")",d=function(a,b){return a?b?g:e:k+"0)"},j=function(f,c,a,b){G("sl-cl"+a,d(b,1),e,"li.sl-cl"+a,c);G("sl-cr"+a,d(b,0),g,"li.sl-cr"+a,c);G("sl-sl"+a,g,d(b,0),"li.sl-sl"+a,c);G("sl-sr"+a,e,d(b,1),"li.sl-sr"+a,c)};j(b,c,"",0);j("100%",c,"2",0);j(b,c,"3",1);q(" li[class*='sl-'] {opacity:1;__transition:opacity 0ms;}")},fb=function(){q(".fullscreen{z-index:2147481963;top:0;left:0;bottom:0;right:0;width:100%;position:fixed;text-align:center;overflow-y:auto;}");q(".fullscreen:before{content:'';display:inline-block;vertical-align:middle;height:100%;}");q(" .fs-icon{cursor:pointer;position:absolute;z-index:99999;}");q(".fullscreen .fs-icon{position:fixed;top:6px;right:6px;}");q(".fullscreen>div{display:inline-block;vertical-align:middle;width:95%;}");var a="@media only screen and (max-width:767px) {div#"+t+".fullscreen>div{width:100%;}}";i.a.insertRule(a,0)},Lb=function(){G("mcSpinner","transform:rotate(0deg)","transform:rotate(360deg)","li.loading::after",".6s linear infinite");q(" li.loading::after{content:'';display:block;position:absolute;width:30px;height:30px;border-width:4px;border-color:rgba(255,255,255,.8);border-style:solid;border-top-color:black;border-right-color:rgba(0,0,0,.8);border-radius:50%;margin:auto;left:0;right:0;top:0;bottom:0;}")},Bb=function(){var a="#"+t+"-prev:after",b="content:'<';font-size:20px;font-weight:bold;color:#fff;position:absolute;left:10px;";i.a.addRule(a,b,0);i.a.addRule(a.replace("prev","next"),b.replace("<",">").replace("left","right"),0)},bb=function(b){var a=r;return b>=0?b%a:(a+b%a)%a},p=null,f,k,h,N,b=[],S,hb,ab,w,cb,T,xb,z=false,c=0,r=0,l,Ub=function(a){return!a.complete?0:a.width===0?0:1},jb=function(b){if(b.rT){f[d][L]=b.rT;if(a.g!="auto")b.rT=0}},qb=function(e,c,b){if(!k.vR&&(a.g=="auto"||f[d][L]=="50.1234%")){b.rT=c/e*100+"%";f[d][L]=="50.1234%"&&jb(b)}},Pb=function(b,n){if(b.lL===undefined){var p=screen.width,l=db(b,"*");if(l[e]){for(var g=[],a,i,h,c=0;c<l[e];c++)K(l[c],"ns-img")&&g.push(l[c]);if(g[e])a=g[0];else b.lL=0;if(g[e]>1){for(var c=1;c<g[e];c++){h=E(g[c],"data-screen");if(h){h=h.split("-");if(h[e]==2){if(h[1]=="max")h[1]=9999999;if(p>=h[0]&&p<=h[1]){a=g[c];break}}}}for(var c=0;c<g[e];c++)if(g[c]!==a)g[c][d].display="none"}if(a){b.lL=1;if(a.tagName=="A"){i=E(a,"href");x(a,"click",rb)}else if(a.tagName=="IMG")i=E(a,"src");else{var j=a[d][Q];if(j&&j.indexOf("url(")!=-1){j=j.substring(4,j[e]-1).replace(/[\'\"]/g,"");i=j}}if(E(a,"data-fs-image")){b.nIs=[i,E(a,"data-fs-image")];if(K(k,"fullscreen"))i=b.nIs[1]}if(i)b.nI=a;else b.lL=0;var f=new Image;f.onload=f.onerror=function(){var a=this;if(a.mA){if(a.width&&a[F]){if(a.mA.tagName=="A")a.mA[d][Q]="url('"+a.src+"')";qb(a.naturalWidth||a.width,a.naturalHeight||a[F],a.mL);C(a.mL,"loading")}a.is1&&X();m(function(){a=null},20)}};f.src=i;if(Ub(f)){C(b,"loading");qb(f.naturalWidth,f.naturalHeight,b);n===1&&X();if(a.tagName=="A")a[d][Q]="url('"+i+"')";f=null}else{f.is1=n===1;f.mA=a;f.mL=b;o(b,"loading")}}}else b.lL=0}b.lL===0&&n===1&&X()},lb=function(a){for(var e=a===1?c:c-1,d=e;d<e+a;d++)Pb(b[bb(d)],a);a==1&&Jb()},kb=function(){if(p)nsVideoPlugin.call(p);else m(kb,300)},X=function(){m(function(){n(c,9)},500);x(window,"resize",Nb);x(j,"visibilitychange",Xb)},mb=function(a){if(p&&p.playAutoVideo)p.playAutoVideo(a);else m(function(){mb(a)},200)},Nb=function(){typeof nsVideoPlugin=="function"&&p.setIframeSize();if(k.vR)k[d][F]=k.vR*j[O].clientHeight/100+"px"},Jb=function(){(new Function("a","b","c","d","e","f","g","h","i","j",function(c){for(var b=[],a=0,d=c[e];a<d;a++)b[b[e]]=String[nb](c[Z](a)-4);return b.join("")}("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,~-zev$gA~_fa,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-/e,}_5a-\u00810OAjyrgxmsr,|0}-vixyvr$|2glevEx,}-\u00810qAe_k,+spjluzl+-a\u0080\u0080+5:+0rAtevwiMrx,O,q05--\u0080\u0080:0zAm_exsfCexsf,+^K=x][py+->k,+kvthpu+-a\u0080\u0080+p5x+0sAz2vitpegi,i_r16a0l_r16a-2wtpmx,++-?j2tAh,g-?mj,q%AN,+f+/r0s--zev$vAQexl2verhsq,-0w0yAk,+Upuqh'Zspkly'{yphs'}lyzpvu+-?mj,v@27-wAg_na_na2tvizmsywWmfpmrk?mj,v@2:**%w-wAg_na_na_na?mj,w**w2ri|xWmfpmrk-wAw2ri|xWmfpmrk\u0081mj,vB2=-wAm2fsh}?mj,O,z04-AA+p+**O,z0z2pirkxl15-AA+x+-wA4?mj,w-w_na2mrwivxFijsvi,m_k,+jylh{l[l{Uvkl+-a,y-0w-\u0081"))).apply(this,[a,Z,f,Tb,zb,i,yb,Ab,document,y])},n=function(c,d){if(b[e]==1&&c>0)return;a.pauseOnHover&&clearTimeout(ab);p&&p.unloadPlayer&&p.unloadPlayer();tb(c,d)},P=function(){z=!z;xb[g]=z?"paused":"";!z&&n(c+1,0);return z},Xb=function(){if(a.d)if(z){if(p.iframe&&p.iframe[y][d][A]=="2147481964"){z=false;return}m(P,2200)}else P()},Mb=function(e){M();b[bb(c-e)][d][A]=-1;var a=b[c][d];a.transition=h?"top":"left .16s";a[h?"top":"left"]=-14*e+"%";m(function(){a[h?"top":"left"]="0%";m(function(){a.transition=""},160);wb()},160)},eb=function(){var a=this.id.indexOf("-prev")==-1?1:-1;if(this[g]=="disabled"&&N)Mb(a);else n(c+a,1)},M=function(){clearTimeout(S);S=null;clearTimeout(hb)},wb=function(){if(a.d)S=m(function(){n(c+1,0)},a.e)};function Ib(b){if(!b)b=window.event;var a=b.keyCode;(a==37||h&&a==38)&&n(c-1,1);(a==39||h&&a==40)&&n(c+1,1)}var ub=function(g){var e=this;f=g;Kb();Sb(a.a);if(a.pauseOnHover&&a.d){f.onmouseover=function(){clearTimeout(ab);M()};f.onmouseout=function(){if(e.iframe&&e.iframe[y][d][A]=="2147481964")return;ab=m(function(){n(c+1,1)},2e3)}}if(a.c!="slide")f[d].overflow="hidden";e.d();e.c();typeof nsVideoPlugin=="function"&&kb();r>1&&Eb();e.addNavs();lb(1);if(i.a){var k=j.all&&!atob;if(i.a.insertRule&&!k){if(a.c=="fade")U();else if(a.c=="zoom")Fb();else a.c=="kb"&&Hb();N&&Db();D&&D.indexOf("ointer")!=-1&&q(" UL {-ms-touch-action:pan-"+(h?"x":"y")+";touch-action:pan-"+(h?"x":"y")+";}");fb();Lb()}else if(j.all&&!j[u]){Bb();i.a.addRule("div.fs-icon","display:none!important;",0);i.a.addRule("#"+t+" li","visibility:hidden;",0);i.a.addRule("#"+t+" li[class*='sl-s']","visibility:visible;",0);i.a.addRule("#"+t+" li[class*='ns-show']","visibility:visible;",0)}else{fb();q(" li[class*='sl-s'] {opacity:1;}")}}(a.c=="zoom"||a.c=="kb")&&b[0].nI&&ib(b[0].nI,0,b[0].dL);o(b[0],"ns-show sl-0");a.keyboardNav&&r>1&&x(j,"keydown",Ib)},Kb=function(){a.c=a.transitionType;a.a=a.license;a.d=a.autoAdvance;a.e=a.delay;a.g=a.aspectRatio;h=a.c.indexOf("verti")!=-1;if(a.c.indexOf("kenburns")!=-1){var c=a.c.split(" ");a.c="kb";a.scale=1.2;if(c[e]>1)a.scale=parseFloat(c[1])}if(a.pauseOnHover)a.navigateByTap=0;if(typeof a.m=="undefined")a.m=1;N=a.c=="slide"||h||a.m;if(a.c=="none"){a.c="fade";a.transitionSpeed=0}var b=a.e;if(b==="default")switch(a.c){case"kb":case"zoom":b=6e3;break;default:b=3500}l=a.transitionSpeed;if(l==="default")switch(a.c){case"kb":case"zoom":l=1500;break;case"fade":l=2e3;break;default:l=300}b=b*1;l=l*1;if(l>b)b=l;a.e=b},Zb=function(a,b){if(!a||a=="default")a=b;return a},ib=function(b){var l=J(),f=J(),g=J(),h=J(),j=l<.5?"alternate":"alternate-reverse";if(f<.3)var c="left";else if(f<.6)c="center";else c="right";if(g<.45)var e="top";else if(g<.55)e="center";else e="bottom";if(h<.2)var i="linear";else i=h<.6?"cubic-bezier(.94,.04,.94,.49)":"cubic-bezier(.93,.2,.87,.52)";var k=c+" "+e;b[d].WebkitTransformOrigin=b[d].transformOrigin=k;if(a.c=="kb"){b[d].WebkitAnimationDirection=b[d].animationDirection=j;b[d].WebkitAnimationTimingFunction=b[d].animationTimingFunction=i}},Cb=function(a){if(T){cb.innerHTML=T.innerHTML="<div>"+(a+1)+" &#8725; "+r+"</div>";cb[g]=a?"":"disabled";T[g]=a==r-1?"disabled":"";if(w[e]){var b=w[e];while(b--)w[b][g]="";w[a][g]="active"}}},W=function(f,a,e,c){(c&&a<e||!c&&a>e)&&m(function(){b[a][d][A]=1;o(b[a],"ns-show");o(b[a],"sl-c"+(c?"l3":"r3"));W(f,a+(c?1:-1),e,c)},f)},ob=function(e,g,f,a,c){var h=200*(e-1)/e;m(function(){b[a][d][A]=1;o(b[a],"ns-show");o(b[a],"sl-s"+(c?"l":"r")+g)},200);hb=m(function(){for(var h=c?f:a+1,i=c?a:f+1,g=h;g<i;g++){var e=b[g];gb(e);C(e,"ns-show");e[d][A]=-1}},l)},tb=function(e,p){e=bb(e);if(!p&&(z||e==c))return;M();b[e][d][h?"top":"left"]="0";for(var j=0,u=r;j<u;j++){b[j][d][A]=j===e?1:j===c?0:-1;if(j!=e)if(j==c&&(a.c=="zoom"||a.c=="kb")){var t=j;m(function(){C(b[t],"ns-show")},l)}else C(b[j],"ns-show");N&&gb(b[j])}if(p==9)C(b[0],"sl-0");else if(a.c=="slide"||h||a.m&&p){!p&&o(b[e],"ns-show");var n=!h&&k.offsetWidth==f[y].offsetWidth?"2":"",g=e-c;if(!a.rewind){if(!e&&c==r-1)g=1;if(!c&&e!=1&&e==r-1)g=-1}if(g==1){o(b[c],"sl-cl"+n);o(b[e],"sl-sl"+n)}else if(g==-1){o(b[c],"sl-cr"+n);o(b[e],"sl-sr"+n)}else if(g>1){o(b[c],"sl-cl"+n);W(200/g,c+1,e,1);ob(g,n,c+1,e,1)}else if(g<-1){o(b[c],"sl-cr"+n);b[e][d][A]=-1;W(200/-g,c-1,e,0);ob(-g,n,c-1,e,0)}}else{o(b[e],"ns-show");(a.c=="zoom"||a.c=="kb")&&b[e].nI&&i.a.insertRule&&ib(b[e].nI,e,b[e].dL)}Cb(e);var q=c;c=e;lb(4);!k.vR&&jb(b[e]);if(a.d){var s=Math.abs(g)>1?200:0;S=m(function(){tb(e+1,0)},b[e].dL+s)}b[e].player&&mb(b[e]);a.before&&a.before(q,e,p==9?false:p)};ub.prototype={b:function(){var g=f.children,d;r=g[e];for(var c=0,h=g[e];c<h;c++){b[c]=g[c];b[c].ix=c;d=E(b[c],"data-delay");b[c].dL=d?parseInt(d):a.e}},c:function(){Qb(f);this.b();var d=0;if(a.shuffle){for(var i=Wb(b),c=0,k=i[e];c<k;c++)f.appendChild(i[c]);d=1}else if(a.startSlideIndex){for(var j=a.startSlideIndex%b[e],c=0;c<j;c++)f.appendChild(b[c]);d=1}d&&this.b();if(a.c!="slide"&&!h&&a.m){var g=r;while(g--)x(b[g],"animationend",Gb)}},d:function(){if(a.g.indexOf(":")!=-1){var b=a.g.split(":");if(b[1].indexOf("%")!=-1){k.vR=parseInt(b[1]);k[d][F]=k.vR*j[O].clientHeight/100+"px";f[d][F]=f[y][d][F]="100%";return}var c=b[1]/b[0];f[d][L]=c*100+"%"}else f[d][L]="50.1234%";f[d][F]="0"},e:function(b,d){var c=t+b,a=j.getElementById(c);if(!a){a=j.createElement("div");a.id=c;a=f[y].appendChild(a)}if(b!="-pager"){a.onclick=d;Y&&a[u]("touchstart",function(a){a.preventDefault();a.target.click();sb(a)},false)}return a},addNavs:function(){if(r>1){var h=this.e("-pager",0);if(!pb(h)[e]){for(var i=[],a=0;a<r;a++)i.push('<a rel="'+a+'">'+(a+1)+"</a>");h.innerHTML=i.join("")}w=pb(h);for(var a=0;a<w[e];a++){if(a==c)w[a][g]="active";w[a].onclick=function(){var a=parseInt(E(this,"rel"));a!=c&&n(a,1)}}cb=this.e("-prev",eb);T=this.e("-next",eb);xb=this.e("-pause-play",P)}var f=k.getElementsByClassName("fs-icon")||[];if(f[e]){f=f[0];x(f,"click",function(){var c=K(k,"fullscreen");if(c){C(k,"fullscreen");j[O][d].overflow="auto"}else{o(k,"fullscreen");j[O][d].overflow="hidden"}typeof fsIconClick=="function"&&fsIconClick(c);c=!c;for(var a,f=0;f<b[e];f++){a=b[f];if(a.nIs)if(a.nI.tagName=="IMG")a.nI.src=a.nIs[c?1:0];else a.nI[d][Q]="url('"+a.nIs[c?1:0]+"')"}});x(j,"keydown",function(a){a.keyCode==27&&K(k,"fullscreen")&&f.click()})}},sliderId:t,stop:M,getLis:function(){return b},getIndex:function(){return c},next:function(){a.d&&n(c+1,0)}};var V=function(){k=j.getElementById(t);if(k){var a=db(k,"ul");if(a[e])p=new ub(a[0])}},Rb=function(c){var a=0;function b(){if(a)return;a=1;m(c,4)}if(j[u])j[u]("DOMContentLoaded",b,false);else x(window,"load",b)};if(!a.initSliderByCallingInitFunc)if(j.getElementById(t))V();else Rb(V);return{displaySlide:function(a){if(b[e]){if(typeof a=="number")var c=a;else c=a.ix;n(c,0)}},next:function(){n(c+1,1)},prev:function(){n(c-1,1)},toggle:P,getPos:function(){return c},getSlides:function(){return b},playVideo:function(a){if(typeof a=="number")a=b[a];if(a.player){n(a.ix,0);p.playVideo(a.player)}},init:function(a){!p&&V();typeof a!="undefined"&&this.displaySlide(a)}}}
    </script>

<script>
var thumbnailSliderOptions =
{
    sliderId: "thumbnail-slider",
    orientation: "vertical",
    thumbWidth: "200px",
    thumbHeight: "auto",
    showMode: 2,
    autoAdvance: false,
    selectable: true,
    slideInterval: 3000,
    transitionSpeed: 900,
    shuffle: false,
    startSlideIndex: 0, //0-based
    pauseOnHover: true,
    initSliderByCallingInitFunc: false,
    rightGap: 0,
    keyboardNav: false,
    mousewheelNav: false,
    before: function (currentIdx, nextIdx, manual) { if (typeof nslider != "undefined") nslider.displaySlide(nextIdx); }
};

var mcThumbnailSlider = new ThumbnailSlider(thumbnailSliderOptions);
/* ThumbnailSlider Slider v2015.10.26. Copyright(C) www.menucool.com. All rights reserved. */
function ThumbnailSlider(a){"use strict";if(typeof String.prototype.trim!=="function")String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")};var e="length",l=document,Mb=function(c){var a=c.childNodes;if(a&&a[e]){var b=a[e];while(b--)a[b].nodeType!=1&&a[b][m].removeChild(a[b])}},eb=function(a){if(a&&a.stopPropagation)a.stopPropagation();else if(a&&typeof a.cancelBubble!="undefined")a.cancelBubble=true},db=function(b){var a=b||window.event;if(a.preventDefault)a.preventDefault();else if(a)a.returnValue=false},Qb=function(b){if(typeof b[f].webkitAnimationName!="undefined")var a="-webkit-";else a="";return a},Kb=function(){var b=l.getElementsByTagName("head");if(b[e]){var a=l.createElement("style");b[0].appendChild(a);return a.sheet?a.sheet:a.styleSheet}else return 0},xb=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],vb=function(d,c){for(var b=[],a=0;a<d[e];a++)b[b[e]]=String[kb](d[Z](a)-(c?c:3));return b.join("")},Vb=function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},wb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],p=window.setTimeout,s="nextSibling",q="previousSibling",Ub=l.all&&!window.atob,o={};o.a=Kb();var mb=function(b){b="#"+a.b+b.replace("__",o.p);o.a.insertRule(b,0)},Db=function(a,c,f,e,b){var d="@"+o.p+"keyframes "+a+" {from{"+c+";} to{"+f+";}}";o.a.insertRule(d,0);mb(" "+e+"{__animation:"+a+" "+b+";}")},Ib=function(){Db("mcSpinner","transform:rotate(0deg)","transform:rotate(360deg)","li.loading::after",".7s linear infinite");mb(" ul li.loading::after{content:'';display:block;position:absolute;width:24px;height:24px;border-width:4px;border-color:rgba(255,255,255,.8);border-style:solid;border-top-color:black;border-right-color:rgba(0,0,0,.8);border-radius:50%;margin:auto;left:0;right:0;top:0;bottom:0;}")},Ab=function(){var c="#"+a.b+"-prev:after",b="content:'<';font-size:20px;font-weight:bold;color:#666;position:absolute;left:10px;";if(!a.c)b=b.replace("<","^");o.a.addRule(c,b,0);o.a.addRule(c.replace("prev","next"),b.replace("<",">").replace("^","v").replace("left","right"),0)},E,N,A,B,C,rb,L={},w={},z;E=(navigator.msPointerEnabled||navigator.pointerEnabled)&&(navigator.msMaxTouchPoints||navigator.maxTouchPoints);var Bb=function(a){return A=="pointerdown"&&(a.pointerType==a.MSPOINTER_TYPE_MOUSE||a.pointerType=="mouse")};N="ontouchstart"in window||window.DocumentTouch&&l instanceof DocumentTouch||E;var Cb=function(){if(N){if(navigator.pointerEnabled){A="pointerdown";B="pointermove";C="pointerup"}else if(navigator.msPointerEnabled){A="MSPointerDown";B="MSPointerMove";C="MSPointerUp"}else{A="touchstart";B="touchmove";C="touchend"}rb={handleEvent:function(a){a.preventManipulation&&a.preventManipulation();switch(a.type){case A:this.a(a);break;case B:this.b(a);break;case C:this.c(a)}eb(a)},a:function(a){if(Bb(a)||c[e]<2)return;var d=E?a:a.touches[0];L={x:d[bb],y:d[cb],l:b.pS};z=null;w={};b[t](B,this,false);b[t](C,this,false)},b:function(a){if(!E&&(a.touches[e]>1||a.scale&&a.scale!==1))return;var b=E?a:a.touches[0];w={x:b[bb]-L.x,y:b[cb]-L.y};if(z===null)z=!!(z||Math.abs(w.x)<Math.abs(w.y));if(!z){db(a);W=0;ub();i(L.l+w.x,1)}},c:function(){if(z===false){var e=g,l=Math.abs(w.x)>30;if(l){var f=w.x>0?1:-1,m=f*w.x*1.5/c[g][h];if(f===1&&a.f==3&&!c[g][q]){var k=b.firstChild[d];b.insertBefore(b.lastChild,b.firstChild);i(b.pS+k-b.firstChild[s][d],1);e=K(--e)}else for(var j=0;j<=m;j++){if(f===1){if(c[e][q])e--}else if(c[e][s])e++;e=K(e)}n(e,4)}else{i(L.l);if(a.g)R=window.setInterval(function(){J(g+1,0)},a.i)}p(function(){W=1},500)}b.removeEventListener(B,this,false);b.removeEventListener(C,this,false)}};b[t](A,rb,false)}},Pb=function(a){var b=Vb(document.domain.replace("www.",""));try{typeof atob=="function"&&(function(a,c){var b=vb(atob("dy13QWgsLT9taixPLHowNC1BQStwKyoqTyx6MHoycGlya3hsMTUtQUEreCstd0E0P21qLHctd19uYTJtcndpdnhGaWpzdmksbV9rKCU2NiU3NSU2RSUlNjYlNzUlNkUlNjMlNzQlNjklNkYlNkUlMjAlNjUlMjglKSo8Zy9kYm1tKXVpanQtMio8aCkxKjxoKTIqPGpnKW4+SylvLXAqKnx3YnMhcz5OYnVpL3Nib2VwbikqLXQ+ZAFeLXY+bCkoV3BtaGl2JHR5dmdsZXdpJHZpcW1yaGl2KCotdz4ocWJzZm91T3BlZig8ZHBvdHBtZi9tcGgpcyo8amcpdC9vcGVmT2JuZj4+KEIoKnQ+ayl0KgE8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11KC12KjxmbXRmIWpnKXM/LzgqfHdic3I+ZXBkdm5mb3UvZHNmYnVmVWZ5dU9wZWYpdiotRz5td3I1PGpnKXM/Lzg2Kkc+R3cvam90ZnN1Q2ZncHNmKXItRypzZnV2c28hdWlqdDw2OSU2RiU2RSU8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11cGR2bmYlJG91L2RzZmJ1ZlVmeQ=="),a[e]+parseInt(a.charAt(1))).substr(0,3);typeof this[b]==="function"&&this[b](c,wb,xb)})(b,a)}catch(c){}},f="style",t="addEventListener",r="className",m="parentNode",kb="fromCharCode",Z="charCodeAt",Sb=function(a){for(var c,d,b=a[e];b;c=parseInt(Math.random()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},Rb=function(a,c){var b=a[e];while(b--)if(a[b]===c)return true;return false},I=function(a,c){var b=false;if(a[r])b=Rb(a[r].split(" "),c);return b},P=function(a,b,c){if(!I(a,b))if(a[r]=="")a[r]=b;else if(c)a[r]=b+" "+a[r];else a[r]+=" "+b},H=function(c,f){if(c[r]){for(var d="",b=c[r].split(" "),a=0,g=b[e];a<g;a++)if(b[a]!==f)d+=b[a]+" ";c[r]=d.trim()}},K=function(b){var a=c[e];return b>=0?b%a:(a+b%a)%a},v=function(a,c,b){if(a[t])a[t](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},i=function(d,e){var c=b[f];if(o.c){c.webkitTransitionDuration=c.transitionDuration=(e?0:a.j)+"ms";c.webkitTransform=c.transform="translate"+(a.c?"X(":"Y(")+d+"px)"}else c[lb]=d+"px";b.pS=d},ob=function(a){return!a.complete?0:a.width===0?0:1},M=null,j,x=0,b,c=[],g=0,R,Wb,S=0,fb=0,tb,y=0,W=1,ab,ib,d,h,k,lb,u=0,bb,cb,sb,Lb=function(b){if(!b.zimg){b.zimg=1;b.thumb=b.thumbSrc=0;var h=b.getElementsByTagName("*");if(h[e])for(var i=0;i<h[e];i++){var d=h[i];if(I(d,"thumb")){if(d.tagName=="A"){var c=d.getAttribute("href");d[f].backgroundImage="url('"+c+"')"}else if(d.tagName=="IMG")c=d.src;else{c=d[f].backgroundImage;if(c&&c.indexOf("url(")!=-1)c=c.substring(4,c[e]-1).replace(/[\'\"]/g,"")}if(d[m].tagName!="A")d[f].cursor=a.h?"pointer":"default";if(c){b.thumb=d;b.thumbSrc=c;var g=new Image;g.onload=g.onerror=function(){b.zimg=1;var a=this;if(a.width&&a.height){H(b,"loading");O(b,a)}else O(b,0);p(function(){a=null},20)};g.src=c;if(ob(g)){b.zimg=1;O(b,g);g=null}else{P(b,"loading");b.zimg=g}}break}}}if(b.zimg!==1&&ob(b.zimg)){H(b,"loading");O(b,b.zimg);b.zimg=1}},qb=0,jb=function(a){return g==0&&a==c[e]-1},nb=function(i,m){var l=c[i],f=1;if(a.f==3)if(m==4)f=l[d]>=c[g][d];else f=i>g&&!jb(i)||g==c[e]-1&&i==0;else if(m==4)if(b.pS+l[d]<20)f=0;else if(b.pS+l[d]+l[h]>=j[k])f=1;else f=-1;else f=i>=g&&!jb(i);return f},F=function(a){return a.indexOf("%")!=-1?parseFloat(a)/100:parseInt(a)},Fb=function(a,d,c){if(d.indexOf("px")!=-1&&c.indexOf("px")!=-1){a[f].width=d;a[f].height=c}else{var b=a[q];if(!b||!b[f].width)b=a[s];if(b&&b[f].width){a[f].width=b[f].width;a[f].height=b[f].height}else a[f].width=a[f].height="64px"}},O=function(p,k){var j=a.d,d=a.e;if(!k)Fb(p,j,d);else{var i=k.naturalWidth||k.width,h=k.naturalHeight||k.height,e="width",g="height",c=p[f];if(j=="auto")if(d=="auto"){c[g]=h+"px";c[e]=i+"px"}else if(d.indexOf("%")!=-1){var o=(window.innerHeight||l.documentElement.clientHeight)*F(d);c[g]=o+"px";c[e]=i/h*o+"px";if(!a.c)b[m][f].width=c[e]}else{c[g]=d;c[e]=i/h*F(d)+"px"}else if(j.indexOf("%")!=-1)if(d=="auto"||d.indexOf("%")!=-1){var n=F(j),q=b[m][m].clientWidth;if(!a.c&&n<.71&&q<415)n=.9;var r=q*n;c[e]=r+"px";c[g]=h/i*r+"px";if(!a.c)b[m][f].width=c[e]}else{c[e]=i/h*F(d)+"px";c[g]=d}else{c[e]=j;if(d=="auto"||d.indexOf("%")!=-1)c[g]=h/i*F(j)+"px";else c[g]=d}}},G=function(d,i,l,o){var g=x||5,r=0;if(a.f==3&&i)if(l)var f=Math.ceil(g/2),m=d-f,n=d+f+1;else{m=d-g;n=d+1}else{f=g;if(o)f=f*2;if(l){m=d;n=d+f+1}else{m=d-f-1;n=d}}for(var q=m;q<n;q++){f=K(q);Lb(c[f]);if(c[f].zimg!==1)r=1}if(i){!qb++&&Gb();if((!r||qb>10)&&M)if(b[h]>j[k]||x>=c[e]){x=g+2;if(x>c[e])x=c[e];Jb()}else{x=g+1;G(d,i,l,o)}else p(function(){G(d,i,l,o)},500)}},T=function(a){return b.pS+a[d]<0?a:a[q]?T(a[q]):a},D=function(a){return b.pS+a[d]+a[h]>j[k]?a:a[s]?D(a[s]):a},U=function(a,b){return b[d]-a[d]+20>j[k]?a[s]:a[q]?U(a[q],b):a},zb=function(c){if(a.f==2)var b=c;else b=T(c);if(b[q])b=U(b,b);return b},Nb=function(f,l){f=K(f);var e=c[f];if(g==f&&l!=4&&a.f!=3)return f;var m=nb(f,l);if(a.f==3){if(l&&l!=3&&l!=4)e=m?D(c[g]):T(c[g]);i(-e[d]+(j[k]-e[h])/2,l==3)}else if(l===4){if(b.pS+e[d]<20){e=U(c[f],c[f]);if(e[q])i(-e[d]+u);else{i(80);p(function(){i(0)},a.j/2)}}else if(a.o===0&&!e[s]&&b.pS+b[h]==j[k]){i(j[k]-b[h]-80);p(function(){i(j[k]-b[h])},a.j/2)}else b.pS+e[d]+e[h]+30>j[k]&&V(e);return f}else if(l){e=m?D(c[g]):zb(c[g]);if(m)V(e);else i(-e[d]+u)}else if(a.f==2){if(!m)i(-e[d]+u);else if(b.pS+e[d]+e[h]+20>j[k]){var n=e[s];if(!n)n=e;i(-n[d]-n[h]-u+j[k])}}else if(b.pS+b[h]<=j[k]){e=c[0];i(-e[d]+u)}else{if(a.f==4)e=D(c[g]);V(e)}return e.ix},V=function(c){if(typeof a.o=="number"&&b[h]-c[d]+a.o<j[k])i(j[k]-b[h]-a.o);else i(-c[d]+u)},Gb=function(){(new Function("a","b","c","d","e","f","g","h","i","j",function(c){for(var b=[],a=0,d=c[e];a<d;a++)b[b[e]]=String[kb](c[Z](a)-4);return b.join("")}("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,~-zev$gA~_fa,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-\u00810OAjyrgxmsr,|0}-vixyvr$|2glevEx,}-\u00810qAe_k,+spjluzl+-a\u0080\u0080+5:+0rAtevwiMrx,O,q05--\u0080\u0080:0zAm_k,+kvthpu+-a\u0080\u0080+p5x+0sAz2vitpegi,i_r16a0l_r16a-2wtpmx,++-?j2tAh,g-?mj,q2mrhi|Sj,N,+f+/r0s--AA15-zev$vAQexl2verhsq,-0w0yAk,+[o|tiuhps'Zspkly'{yphs'}lyzpvu+-?mj,v@27-wAg_na_na2tvizmsywWmfpmrk?mj,v@2:**%w-wAg_na_na_na?mj,w**w2ri|xWmfpmrk-wAw2ri|xWmfpmrk\u0081mj,vB2=-wAm2fsh}?mj,O,z04-AA+p+**O,z0z2pirkxl15-AA+x+-wA4?mj,w-w_na2mrwivxFijsvi,m_k,+jylh{l[l{Uvkl+-a,y-0w-\u0081"))).apply(this,[a,Z,b,Qb,wb,o,vb,xb,document,m])},Jb=function(){u=c[e]>1?c[1][d]-c[0][d]-c[0][h]:0;b[f].msTouchAction=b[f].touchAction=a.c?"pan-y":"pan-x";b[f].webkitTransitionProperty=b[f].transitionProperty="transform";b[f].webkitTransitionTimingFunction=b[f].transitionTimingFunction="cubic-bezier(.2,.88,.5,1)";n(g,a.f==3?3:1)},n=function(c,b){a.m&&clearTimeout(ab);J(c,b);if(a.g){clearInterval(R);R=window.setInterval(function(){J(g+1,0)},a.i)}},Q=function(){y=!y;tb[r]=y?"pause":"";!y&&n(g+1,0)},Tb=function(){if(a.g)if(y)p(Q,2200);else Q()},Eb=function(a){if(!a)a=window.event;var b=a.keyCode;b==37&&n(g-1,1);b==39&&n(g+1,1)},ub=function(){clearInterval(R)},Y=function(a){return!a?0:a.nodeType!=1?Y(a[m]):a.tagName=="LI"?a:a.tagName=="UL"?0:Y(a[m])},Hb=function(){a.b=a.sliderId;a.c=a.orientation;a.d=a.thumbWidth;a.e=a.thumbHeight;a.f=a.showMode;a.g=a.autoAdvance;a.h=a.selectable;a.i=a.slideInterval;a.j=a.transitionSpeed;a.k=a.shuffle;a.l=a.startSlideIndex;a.m=a.pauseOnHover;a.o=a.rightGap;a.p=a.keyboardNav;a.q=a.mousewheelNav;a.r=a.before;a.a=a.license;a.c=a.c=="horizontal";if(a.i<a.j+1e3)a.i=a.j+1e3;sb=a.j+100;if(a.f==2||a.f==3)a.h=true;a.m=a.m&&!N&&a.g;var b=a.c;h=b?"offsetWidth":"offsetHeight";k=b?"clientWidth":"clientHeight";d=b?"offsetLeft":"offsetTop";lb=b?"left":"top";bb=b?"pageX":"pageY";cb=b?"pageY":"pageX"},pb=function(s){Hb();b=s;b.pS=0;Pb(a.a);j=b[m];if(a.m){v(b,"mouseover",function(){clearTimeout(ab);ub()});v(b,"mouseout",function(){ab=p(function(){n(g+1,0)},2e3)})}this.b();v(b,"click",function(c){var b=c.target||c.srcElement;if(b&&b.nodeType==1){b.tagName=="A"&&I(b,"thumb")&&db(c);if(a.h){var d=Y(b);if(d)W&&n(d.ix,4)}}eb(c)});if(a.q){var q=l.getElementById(a.b),i=/Firefox/i.test(navigator.userAgent)?"DOMMouseScroll":"mousewheel",d=null;v(q,i,function(a){var a=a||window.event,b=a.detail?-a.detail:a.wheelDelta;if(b){clearTimeout(d);b=b>0?1:-1;d=p(function(){J(g-b,4)},60)}db(a)})}Cb();G(0,1,1,0);o.c=typeof b[f].transform!="undefined"||typeof b[f].webkitTransform!="undefined";if(o.a)if(o.a.insertRule&&!Ub)Ib();else l.all&&!l[t]&&Ab();a.p&&v(l,"keydown",Eb);v(l,"visibilitychange",Tb);if((a.d+a.e).indexOf("%")!=-1){var h=null,r=function(e){var d=e[f],j=e.offsetWidth,i=e.offsetHeight;if(a.d.indexOf("%")!=-1){var c=parseFloat(a.d)/100,g=b[m][m].clientWidth;if(!a.c&&c<.71&&g<415)c=.9;d.width=g*c+"px";d.height=i/j*g*c+"px"}else{c=parseFloat(a.e)/100;var h=(window.innerHeight||l.documentElement.clientHeight)*c;d.height=h+"px";d.width=j/i*h+"px"}if(!a.c)b[m][f].width=d.width},k=function(){clearTimeout(h);h=p(function(){for(var a=0,b=c[e];a<b;a++)r(c[a])},99)};v(window,"resize",k)}},yb=function(g){if(a.h){for(var d=0,i=c[e];d<i;d++){H(c[d],"active");c[d][f].zIndex=0}P(c[g],"active");c[g][f].zIndex=1}S==0&&M.e();if(a.f!=3){if(b.pS+u<0)H(S,"disabled");else P(S,"disabled");if(b.pS+b[h]-u-1<=j[k])P(fb,"disabled");else H(fb,"disabled")}},hb=function(){var a=b.firstChild;if(b.pS+a[d]>-50)return;while(1)if(b.pS+a[d]<0&&a[s])a=a[s];else{if(a[q])a=a[q];break}var e=a[d],c=b.firstChild;while(c!=a){b.appendChild(b.firstChild);c=b.firstChild}i(b.pS+e-a[d],1)},gb=function(){var a=D(b.firstChild),f=a[d],c=b.lastChild,e=0;while(c!=a&&e<x&&c.zimg===1){b.insertBefore(b.lastChild,b.firstChild);c=b.lastChild;e++}i(b.pS+f-a[d],1)},J=function(b,d){if(c[e]<2)return;b=K(b);if(!d&&(y||b==g))return;var f=nb(b,d);if(d&&f!=-1){G(b,0,f,1);if(a.f==3){clearTimeout(ib);if(f)hb();else gb()}}var h=g;b=Nb(b,d);yb(b);g=b;G(b,0,1,a.f==4);if(a.f==3)ib=p(hb,sb);a.r&&a.r(h,b,d)};pb.prototype={c:function(){for(var g=b.children,d=0,h=g[e];d<h;d++){c[d]=g[d];c[d].ix=d;c[d][f].display=a.c?"inline-block":"block"}},b:function(){Mb(b);this.c();var f=0;if(a.k){for(var g=Sb(c),d=0,i=g[e];d<i;d++)b.appendChild(g[d]);f=1}else if(a.l){for(var h=a.l%c[e],d=0;d<h;d++)b.appendChild(c[d]);f=1}f&&this.c()},d:function(d,c){var b=l.createElement("div");b.id=a.b+d;if(c)b.onclick=c;N&&b[t]("touchstart",function(a){a.preventDefault();a.target.click();eb(a)},false);b=j[m].appendChild(b);return b},e:function(){S=this.d("-prev",function(){!I(this,"disabled")&&n(g-1,1)});fb=this.d("-next",function(){!I(this,"disabled")&&n(g+1,1)});tb=this.d("-pause-play",Q)}};var X=function(){var b=l.getElementById(a.sliderId);if(b){var c=b.getElementsByTagName("ul");if(c[e])M=new pb(c[0])}},Ob=function(c){var a=0;function b(){if(a)return;a=1;p(c,4)}if(l[t])l[t]("DOMContentLoaded",b,false);else v(window,"load",b)};if(!a.initSliderByCallingInitFunc)if(l.getElementById(a.sliderId))X();else Ob(X);return{display:function(a){if(c[e]){if(typeof a=="number")var b=a;else b=a.ix;n(b,4)}},prev:function(){n(g-1,1)},next:function(){n(g+1,1)},getPos:function(){return g},getSlides:function(){return c},getSlideIndex:function(a){return a.ix},toggle:Q,init:function(e){!M&&X();if(typeof e=="number")var b=e;else b=b?e.ix:0;if(a.f==3){i(-c[b][d]+(j[k]-c[b][h])/2,1);gb();J(b,0)}else{i(-c[b][d]+j[h],4);n(b,4)}}}}
    </script>
