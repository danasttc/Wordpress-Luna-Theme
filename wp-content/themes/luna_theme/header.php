<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>



  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
   
    <div id="page" class="site">

  <?php wp_body_open(); ?>
  
  <header class="header">
    <div class="header-inner">
        <div class="topnav">
        <a> <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                        )
                    ); ?>
        </a>
           <!-- <a href ="">Home</a>
            <a href ="">Pages</a>
            <a href ="">Life Style</a>
            <a href ="">Fashion</a>
            <a href ="">About me</a>
            <a href ="">Contact me</a>
            <a href ="">Features</a> -->
            <div class="search-container">
                <form action="/search.php">
                  <input type="text" placeholder="Search" name="search">
                  <button type="submit" id="searchsubmit" />
                  <span class="icon"><i class="fa fa-search"></i></span>   
              </button>
          </form>
      </div>
  </div>

  <?php if(has_nav_menu( 'primary' )):?>
    <nav class="header-nav">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'primary',
            )
        ); ?>
    </nav>
<?php endif; ?>

</div>

<div class="logo"> <a href="#"><img src="wp-content/themes/luna_theme/assets/images/logo.png" alt="logo" /> </a>
</div>



<div class="socialMediaLinks">
    <a href="https://facebook.com" class="fab fa-facebook-f"></a>
    <a href="https://twitter.com" class="fab fa-twitter"></a>
    <a href="https://plus.google.com" class="fab fa-google-plus-g"></a>
    <a href="https://pinterest.com" class="fab fa-pinterest"></a>
    <a href="https://tumblr.com" class="fab fa-tumblr"></a>
    <a href="https://instagram.com" class="fab fa-instagram"></a>
    <a href="https://youtube.com" class="fab fa-youtube"></a>
    <a href="#" class="fas fa-rss"></a>

</div>

</header>