<?php
get_header();
?>

<img src="<?php echo the_post_thumbnail_url()?>" alt="">
<?php the_excerpt()?>
<?php
get_footer();
?>