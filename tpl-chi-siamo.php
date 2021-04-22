<?php
/*
*Template Name:chi-siamo
*/

get_header();
?>

<main id= "chi-siamo">
    <div class="container">
        <div class="row">
            <div class="slick-container col-12">
                <?php
                $args=array(
                    'post_type' => 'employee',
                    'order' => 'ASC'
                );
                
                $emploop = new WP_Query($args);
                while($emploop -> have_posts()) : $emploop -> the_post();
                ?>
                <div class="employee-container col-3">
                    <img class="img-fluid round-border" src="<?php the_post_thumbnail_url('full');?>" alt="">
                    <h4><?php echo get_post_meta(get_the_ID() , 'name' , true)?></h4>
                    <p><?php echo get_post_meta(get_the_ID() , 'role' , true)?></p>
                    <p><?php echo get_post_meta(get_the_ID() , 'mail' , true)?></p>
                </div>
                <?php endwhile;?>
            </div>
            <button id="slick-next">next</button>
            <button id="slick-prev">prev</button>
        </div>
    </div>
</main>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slick-container').slick({
  infinite: true,
  prevArrow: $('#slick-prev'),
  nextArrow: $('#slick-next'),
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
<?php get_footer();?>