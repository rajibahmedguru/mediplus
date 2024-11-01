<?php get_header( );?>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php get_template_part('template-part/top_bar');?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php get_template_part('template-part/navbar');?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <?php get_template_part('template-part/header');?>
    <!-- Header End -->


    <!-- About Start -->
    <?php get_template_part('template-part/about');?>
    <!-- About End -->


    <!-- Service Start -->

    <?php get_template_part('template-part/service');?>
    
    <!-- Service End -->


    <!-- Feature Start -->
    <?php get_template_part('template-part/feature');?>
    <!-- Feature End -->


    <!-- Team Start -->
    <?php get_template_part('template-part/team');?>
    <!-- Team End -->


    <!-- Appointment Start -->
    <?php get_template_part('template-part/appointment');?>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <?php get_template_part('template-part/testimonial');?>
    <!-- Testimonial End -->


   <?php get_footer( );?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    

    <?php wp_footer();?>
</body>

</html>