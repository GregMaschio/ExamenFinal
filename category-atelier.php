<?php
get_header();
/////////////////////////////////ATELIER
echo '<h1>' . category_description(get_category_by_slug('atelier')) . '</h1>';        

$args = array(
    "category_name" => "atelier",
    "posts_per_page" => -1,
    "orderby" => "name",
    "order" => "ASC"
);
$query1 = new WP_Query( $args );

// echo '<div class ="conteneur-nouvelles">';
// The 2nd Loop
while ( $query1->have_posts() ) {
            $query1->the_post();
            echo '<div class ="posts-atelier">';
            echo '<p> <a href ="' . get_permalink($id) . '">' . get_the_title() . " ________<span class='texteRouge'> " .get_post_field('post_name') . " </span><span class='texteBleu'>________ " .get_the_author_meta( 'display_name', $post->post_author )   . '</span></a></p>';
            echo '</div>';
}
// echo '</div>';
// Restore original Post Data
wp_reset_postdata();
?>