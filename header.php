<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?=get_theme_file_uri('/assets/dist/css/main.css');?>" type="text/css">

<?php wp_head(); ?>
</head>
<style >
 .navbar{
  /* border-bottom: 2px solid var(--mainColor); */
  direction: rtl;
  padding:0 30px;
 }
 .logo{
  width: 45px;
  margin-left: 5px;
 }
 .logoText{
   display: flex;
   flex-direction: column;
   font-size: 8px;
 }
 .nav-link{
  color: #868891 !important;
  cursor: pointer;
  font-size:14px;
 }
 .nav-link:hover{
  color: #000 !important;
 }
 .Nav-link-active{
   color: #363848 !important;
   position: relative;
   display: flex;
   flex-direction: column;
   align-items: center;
 }
 .Nav-link-active::after{
   content: url('./wp-content/themes/alhutacademy_wp/assets/src/img/whale.svg');
    position: absolute;
   bottom: -20px;
 }
 .title{
	color:#4774AC;
 }
 .img{
	border-radius: 50%;
	width: 40px;
	height: 40px;
	margin: 5px
 }
 .name, .title{
	font-size:12px
 }

/* .NavIcon{
  background-image: url('./assets/src/img/menu.png') !important;
  width: 40px;
    height: 40px;
    background-size: contain;
    display: flex;
} */
</style>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			if ( is_front_page() || is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			?>

		</div> -->
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation"> -->
			<!-- <?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?> -->
			
		<!-- </nav> -->
		<!-- #site-navigation -->
		<nav class="navbar navbar-expand-lg shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<div  class="d-flex align-items-center">
						<img src="<?= get_theme_file_uri('assets/src/img/logo.svg'); ?>"  class="logo" alt="icon"/>
						<div class="logoText">
						<span>أكاديمية الحوت</span>
						<span>Alhut Academy</span>
						</div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<ul class="navbar-nav mx-auto w-50 mb-2 mb-lg-0  justify-content-around align-items-center">
					<li class="nav-item"><a class="nav-link Nav-link-active" aria-current="page" href="#">الرئيسية</a></li>
					<li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
					<li class="nav-item"><a class="nav-link" href="#">قدرات</a></li>
					<li class="nav-item"><a class="nav-link" href="#">تحصيلي</a></li>
					<li class="nav-item"><a class="nav-link" href="#">الدعم الفني</a></li>
					<li class="nav-item"><a class="nav-link" href="#">اخر الاخبار</a></li>
				</ul>
				<div class="d-flex">
					<img src="<?= get_theme_file_uri('assets/src/img/person.png'); ?>" class="img">
					<div class="mt-1">
						<p class="m-0 name"> محمد مصطفي علي</p>
						<span class="title">اللقب</span>
					</div>
				</div>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<script>
	let active_link = document.querySelectorAll('.navbar-nav .nav-link');
	let arr_active_link = Array.from(active_link);
	arr_active_link.forEach(element => {
	element.addEventListener('click',()=>{

		arr_active_link.forEach(ele =>{
		ele.classList.remove('Nav-link-active')
		})
		element.classList.add('Nav-link-active')
	})
	});
</script>