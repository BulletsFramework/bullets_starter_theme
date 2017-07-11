<?php
    //vars
    $contact_form = get_field('contact_form');
    get_header();
/*
Template Name: Contact
*/
?>
<main id="main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="column">
                <?php get_template_part( 'parts/loop', 'page' ); ?>
            </div>
        </div>          
    </div>

    <?php endwhile; endif; ?>

    <?php if ($contact_form) : ?>
        <div class="container">
            <div class="row">
                <div class="column column-m-12">
                    <?php echo do_shortcode('[contact-form-7 id="' . $contact_form->ID . '" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php include(locate_template('parts/page-modules.php' )); ?>                       

</main>
<?php get_footer(); ?>