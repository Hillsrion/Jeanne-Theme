<section class="row main-container">
<?php
$args = array( 'post_type' => 'dessins', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ($loop->have_posts()) : $loop->the_post();
    echo "<h2><a href='".get_the_permalink()."'>".get_the_title()."</a></h2>";
    echo '<div class="entry-content">';
    the_content();
    echo '</div>';
endwhile; ?>
</section>
