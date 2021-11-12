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

      <?php if(have_posts()) : while(have_posts()) : the_post() ?>
            <?php the_title('<h1>','</h1>'); ?>
            <?php if ( is_single() && 'post' == get_post_type() ): ?>
                <?php the_content(); ?>
                <?php if (comments_open() || get_comments_number() ): ?> 
                    <?php comments_template(); ?>
                <?php endif; ?>                     
            <?php else: ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">lees meer</a>
            <?php endif; ?>
        <?php endwhile; endif; ?>

      </div>
    </div>
    
    <?php get_sidebar(); ?>
    
    <div class="break"></div>

    <?php get_footer(); ?>

    <div class="break"></div>
    
  </div>
  
  
</div>

</body>
</html>
