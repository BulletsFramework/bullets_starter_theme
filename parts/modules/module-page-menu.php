<?php
//vars
$modulemenu = get_sub_field('module_menu');
if( $modulemenu ): ?>
<nav class="module" aria-labelledby="modulemenu<?php echo $count;?>">
    <div class="container">
        <div class="row">
            <div class="column column-m-12">
               <h2 id="modulemenu<?php echo $count;?>"><?php the_sub_field('title'); ?></h2>
            </div>
        </div>
        <ul class="row">
            <?php foreach( $modulemenu as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <li class="columns column-m-12">                
                    <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt();?>
                    </article >
                </li>
            <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
    </div>
</nav>
<?php endif; ?>