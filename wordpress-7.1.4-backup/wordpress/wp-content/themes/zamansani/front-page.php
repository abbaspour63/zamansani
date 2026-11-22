<?php get_header(); ?>
<?php //include get_template_directory() . '/hero-3d.php'; 
?>
<?php include get_template_directory() . '/hero-new.php'; ?>
<main>

    <?php get_template_part('template-parts/home/services-cards'); ?>
    <?php get_template_part('template-parts/home/process1'); ?>
    <?php get_template_part('template-parts/home/industries'); ?>
    <?php get_template_part('template-parts/home/faq'); ?>
</main>
<?php get_footer(); ?>