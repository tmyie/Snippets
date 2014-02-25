<?php if ( get_field('images') ): ?>
 
<?php
$image = get_field('images');
$image = $image[0]['image'];  //This will get the image
$image_url = $image['url'];
?>
 
<a href="<?php the_permalink() ?>"><img src="<?php echo $image_url ?>" /></a>
 
 <?php endif; ?>