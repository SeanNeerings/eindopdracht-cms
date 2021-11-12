<html>
<head>
<title><?php bloginfo('name'); ?> </title>
<link href="<?php bloginfo('template_url');?>/css/wildvecht.css" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />

</head>

<body>

<div id="container">
	
	<div id="header_logo">
  	<img src="<?php bloginfo('template_url');?>/imgs/logo.png" id="logo" />
	</div>
  
  <div id="header_image">
  	<img src="<?php bloginfo('template_url');?>/imgs/header_img.jpg" />
	</div>
  
  <div id="menu">
  
  <?php
  wp_nav_menu( array( 
    'theme_location' => 'hoofdmenu', 
     ) ); 
  ?>
</div>
  
  <div id="content_wrapper">
    
    <div id="content">
      <div class="area">


        <?php
          if(have_posts()){
          while(have_posts()){
          the_post();
 
          the_title('<h1>','</h1>');
 
          the_content();
              }
          }
        ?>

      </div>
    </div>
    
    <?php get_sidebar(); ?>
    
    <div class="break"></div>
    
  </div>
  
  
</div>

<?php get_footer(); ?>

</body>
</html>
