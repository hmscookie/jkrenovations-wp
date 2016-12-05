<?php get_header();  ?>


<body <?php body_class(); ?>>
<header>
  <div class="hero-image">
    <div class="wrapper1 header-text">
      <h1>JK Construction & Renovations<span class="yellow">.</span></h1>
      <h2>Additions, custom cabinetry, kitchens & bathrooms </h2>
     <a href="#contact"> <button>GET IN TOUCH</button></a>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->
<nav class="wrapper">
      <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="#projects">PROJECTS</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="http://localhost:3000/jkRenovation/blog">BLOG</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
</nav>



  <!-- flickity Section Ends -->

    <!-- our services start -->
<div class="background">
<section class="services wrapper" id="services">
	<div>
	<h3>Our <span class="yellow">services</span></h3>
	<p>Some of the things that I'm really super good at like making things really damn nice!</p>
	</div>
		<aside class="servce-flex">
			<?php while(have_rows('services')) : the_row(); ?>
				<div>
				<?php $serviceimage = get_sub_field('service_icon') ?>
				<img src="<?php echo $serviceimage['url'] ?>" alt="">
				<h4><?php the_sub_field('service_title') ?></h4>
				<!-- this is in an a tag because hover. -->
				<p><?php the_sub_field('service_description')?></p>
				</div>
			<?php endwhile ?>
		</aside>
</section>
</div>

    <!-- our project slider start -->
<main>
	<div class="container " id="projects">
		<div class="content wrapper">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      	<!-- Flickity images start  -->
			<h3 class="our-projects">Some of my recent <span class="yellow">work</span></h3>

			<div class="main-carousel"" data-flickity>
				<div class="picOne carousel-cell">  
					<?php $image = get_field('images') ?>
					<img src="<?php echo $image['url'] ?> " alt="">
				</div>
					<div class="picTwo carousel-cell">
					<?php $image2 = get_field('image_two') ?>
					<img src="<?php echo $image2['url'] ?> " alt="">
				</div>
					<div class="picTwo carousel-cell">
					<?php $image3 = get_field('image_three') ?>
					<img src="<?php echo $image3['url'] ?> " alt="">
				</div> <div class="picTwo carousel-cell">
					<?php $image4 = get_field('image_four') ?>
					<img src="<?php echo $image4['url'] ?> " alt="">
				</div>
			</div> <!-- /.carousel -->
		</div>
	</div>
</main>

    <!-- about section starts -->
<section class="background" id="about">
	<div class="wrapper about-section">
		<?php the_field('about_section')?>
		<div class="about-flex">
			<div class="about-text">
				<?php the_field('our_history') ?>
				<?php the_field('no_shit') ?>
				<?php the_field('about_para') ?>
			</div>
			<div class="about-img">
				<?php $imageJer = get_field('jeremy_img') ?>
				<img src="<?php echo $imageJer['url'] ?> " alt="">
			</div>
		</div>
	</div>
</section>
<section class="wrapper contact-me" id="contact">
<h3>Get In <span class="yellow">Touch</h3>
 <div class="contact-flex" >
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]')?> 
        </div>
</section>
      

    </div> <!-- /,content -->

	</div> <!-- /.container -->
</main>
<?php endwhile; // end the loop?>

<?php get_footer(); ?>