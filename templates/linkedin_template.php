<!DOCTYPE html>
<html lang="it-IT" prefix="og: http://ogp.me/ns#">

<?php while ( have_posts() ) : the_post(); ?>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="content-type" content="<?php echo get_bloginfo( 'html_type' ); ?>; charset=<?php echo get_bloginfo( 'charset' ); ?>" />

	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>

	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php wp_title('-', true, 'right'); ?>" />
	<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>" />
	<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( ) ); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />

	<meta property="og:locale" content="<?php echo get_bloginfo( 'language' ); ?>" />
	<meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>" />
	<link rel="canonical" href="<?php the_permalink(); ?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php wp_title( '-', true, 'right' ); ?> Feed" href="<?php the_permalink(); ?>feed/" />

</head>

<body class="home page page-id-6 page-template page-template-template-home-php logged-in admin-bar no-customize-support custom-background chrome header-fixed">

	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
	<?php the_excerpt(); ?>

</body>
<?php endwhile; // end of the loop. ?>

</html>
