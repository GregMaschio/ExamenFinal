
<link rel="stylesheet" id="underscores-style-css" href="http://localhost/2020-veille/wp-content/themes/exercice9/style.css?ver=5.3.2" type="text/css" media="all">

<?php
/////////////////////////////////ATELIER
// echo '<h1>' . category_description(get_category_by_slug('atelier')) . '</h1>';        

$args = array(
    "category_name" => "atelier",
    "posts_per_page" => 10,
    "orderby" => "date",
    "order" => "DSC"
);
$query1 = new WP_Query( $args );

// echo '<div class ="conteneur-nouvelles">';
// The 2nd Loop
while ( $query1->have_posts() ) {
            $query1->the_post();
            echo '<div class ="posts-atelier">';
            echo '<h3> <a href ="' . get_permalink($id) . '">' . get_the_title() . '</a></h3>';
            echo '</div>';
}
// echo '</div>';
// Restore original Post Data
wp_reset_postdata();
?>