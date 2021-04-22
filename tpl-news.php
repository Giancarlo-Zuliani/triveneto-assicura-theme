<?php
/*
*Template Name:news
*/
get_header();
?>

<main style="padding-top:250px;">
<div class="container">
    <div class="row">
        <div id="lastpost">
    <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => '1'
        );
        
        $lastpost = new WP_Query($args);
        
        while($lastpost -> have_posts()) : $lastpost -> the_post();
            
            $textpreview = substr(get_the_excerpt(),0,900) . '<a href="'. get_post_permalink() . '">.....continua </a>';
            $length = strlen(get_the_excerpt());
            if($length > 500 && $lenght < 1000 ){
                $readingtime = '3 minuti';
            }elseif ($lenght < 500){
                $readingtime = '2 minuti';
            }else{
                $readingtime = '5 minuti';
            };
   ?>
                <h1><?php the_title();?></h1>
                <img class="w-100" src="<?php the_post_thumbnail_url('full')?>" alt="">
                <div id="lastpost-excerpt">
                   <p>
                       <?php echo $textpreview; ?>
                   </p> 
                </div>
                <h5><?php echo $readingtime; ?></h5>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="controls">
                <?php
    $all_categories = get_categories(array(
        'hide_empty' => true
    ));
    ?>
    <?php foreach($all_categories as $category): ?>
        <button type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
    <?php endforeach; ?>
</div>
            </div>
            <div class="row mix-container">
    <?php
            $args = array(
                'post_type' => 'news',
            );
            $loop = new WP_Query($args);
            while($loop -> have_posts()) : $loop -> the_post();
            $preview = substr(get_the_excerpt(), 0 , 350) . '....';
            
           ?>

<?php
        $categories = get_the_category();
        $slugs = wp_list_pluck($categories, 'slug');
        $class_names = join(' ', $slugs);
        ?>
                <div class="mix<?php if ($class_names) { echo ' ' . $class_names;} ?> items col-lg-4 col-12">
                    <a href="<?php the_permalink()?>">
                        <img class="round-border img-fluid" src="<?php echo the_post_thumbnail_url('full');?>" alt="">
                    </a>
                    <span><?php echo strtoupper($categories[0] -> name);?></span>
                    <a href="<?php the_permalink();?>">
                        <h3 class="title title-3 text-left"><?php the_title();?></h3>
                    </a>
                    <?php echo $preview;?>
                    <br>
                    <a href="<?php the_permalink();?>">
                        <i class="fas fa-arrow-right"></i> <span>Scopri</span>
                    </a>
                </div>
                

            <?php endwhile; ?>
            </div>
    </div>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" defer></script>
<script src="<?php echo get_template_directory_uri() . '/assets/scripts/js/mix.js'  ?>" defer></script>
<?php get_footer();?>