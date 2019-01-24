<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head();?>

</head>
<body <?php body_class(); ?>>
<?php 
global $enable_home_page;
$enable_home_page = meris_options_array('enable_home_page');
if(is_home()){$wrapper_class = 'homepage header-wrapper';}else{$wrapper_class = 'blog-list-page both-aside header-wrapper';}
       if(('page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' )) || $enable_home_page==""){$wrapper_class = 'blog-list-page both-aside header-wrapper';}
?>

	<div class="<?php echo $wrapper_class;?>">
		<!--Header-->

		<header>
<div class = "fullWrapper">
	<div class = "row">	
<div class = "logoHolder"><a href = "http://siliconforestelectronics.com"><img class = "logoImage" src = "http://www.siliconforestelectronics.com/wp-content/uploads/2014/09/SFE_Logo_new-tagline-transparent-BG.png" /></a></div>	
	<div class = "socialMediaButtons">
<div class = "site-sns" style = "margin:0;"><a href = "https://www.facebook.com/SFE.Inc" target = "_blank"><i class = "fa fa-facebook"></i></a><a href = "https://twitter.com/Silicon_Forest" target = "_blank"><i class = "fa fa-twitter"></i></a><a href = "https://www.linkedin.com/company/107954?trk=prof-exp-company-name" target = "_blank"><i class = "fa fa-linkedin"></i></a>
</div>
</div>
</div>
			<div class="container" style = "position: relative;width: 100%;padding: 0;border-top: 1px;border-bottom: 1px;border-style: solid;border-color: #EFC500;">
				<nav class="site-nav" role="navigation test">
					<?php 
					 wp_nav_menu(array('theme_location'=>'primary','depth'=>0,'fallback_cb' =>false,'container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));
					?>
				</nav>
			</div>
		</header>
            </div>
  </div>