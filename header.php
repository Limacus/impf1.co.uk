<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package impf1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="style.css">  
      <script src="scripts.js"></script>
        <!-- Page title -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Page title -->
        <title>IMPF1 - Professional Ro-Racing</title>

        <!-- Page Description -->
        <meta name="description" content="Welcome to IMPF1 - The home of professional Ro-Racing. Looking for a friendly and fun league with responsive cars and exceptional track design? You've come to the right place.">

        <!-- Theme colour -->
        <meta name="theme-color" content="#FFFFFF">

        <!-- Page canonical URL -->
        <link rel="canonical" href="https://impf1.co.uk/">

        <!-- Icons -->
        <link rel="icon" href="https://impf1.co.uk/media/IMP_lines.png/" type="image/x-icon"> 
        <link rel="shortcut icon" href="https://impf1.co.uk/media/IMP_lines.png/" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="192x192" href="https://impf1.co.uk/media/IMP_lines.png/">
        <link rel="icon" type="image/png" sizes="32x32" href="https://impf1.co.uk/IMP_lines.png/">
        <link rel="icon" type="image/png" sizes="16x16" href="https://impf1.co.uk/media/IMP_lines.png/">

        <!-- Facebook Open Graph -->
        <meta property="og:title" content="IMPF1 - Professional Ro-Racing">
        <meta property="og:type" content="IMPF1">
        <meta property="og:url" content="https://impf1.co.uk/">
        <meta property="og:image" content="https://impf1.co.uk/media/IMPLOGONEW.png">
        <meta property="og:image:alt" content="IMPF1 logo">
        <meta property="og:description" content="Welcome to IMPF1 - The home of professional Ro-Racing. Looking for a friendly and fun league with responsive cars and exceptional track design? You've come to the right place.">
        <meta property="og:site_name" content="IMPF1">
        <meta property="og:locale" content="en_US">
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@website-account">
        <meta name="twitter:creator" content="@personal-account">
        <meta name="twitter:url" content="https://impf1.co.uk/">
        <meta name="twitter:title" content="IMPF1 - Professional Ro-Racing">
        <meta name="twitter:description" content="Welcome to IMPF1 - The home of professional Ro-Racing. Looking for a friendly and fun league with responsive cars and exceptional track design? You've come to the right place.">
        <meta name="twitter:image" content="https://impf1.co.uk/media/IMPLOGONEW.png">
        <meta name="twitter:image:alt" content="IMPF1 logo">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'impf1' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/media/IMPLOGONEW.png" href="index.php" alt="IMP logo" />
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'impf1' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
