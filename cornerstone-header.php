<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137522237-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-137522237-1');
    </script>
    <?php
    /**
     * educator_edge_header_meta hook
     *
     * @see educator_edge_header_meta() - hooked with 10
     * @see educator_edge_user_scalable_meta - hooked with 10
     */
    do_action('educator_edge_header_meta');

    // determine current page
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    $current_path = str_replace("https://pathways-cornerstonedayschool.com/","",$current_url);
    $current_path = str_replace("https://pathways-cornerstonedayschool.com","",$current_path);
    $current_path = str_replace("https://cornerstonedayschool.com/","",$current_path);
    $current_path = str_replace("https://cornerstonedayschool.com","",$current_path);

    $current_page = "NONE";
    $include_slider = "NO";
    $include_picstrip = "NO";
    $header_img_narrow = "/wp-content/themes/educator-child/images/blank1200.jpg";
    $header_img_wide = "/wp-content/themes/educator-child/images/blank1350.jpg";
    $spacer_class = "";

    if ($current_path=="") { 
      $current_page = "HOME";
    } else if ($current_path=="therapeutic-services") { 
      $current_page = "THERAPEUTIC";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/therapeutic1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/therapeutic1350.jpg";
    } else if ($current_path=="academics") { 
      $current_page = "ACADEMICS";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/academics1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/academics1350.jpg";
    } else if ($current_path=="school-avoidance") { 
      $current_page = "AVOIDANCE";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/school-avoidance1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/school-avoidance1350.jpg";
    } else if ($current_path=="transitions") { 
      $current_page = "TRANSITIONS";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/transitions1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/transitions1350.jpg";
    } else if ($current_path=="admissions") { 
      $current_page = "ADMISSIONS";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/admissions1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/admissions1350.jpg";
    } else if ($current_path=="parents-faq") { 
      $current_page = "FAQ";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/parentsfaq1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/parentsfaq1350.jpg";
    } else if ($current_path=="getting-started") { 
      $current_page = "STARTED";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/gettingstarted1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/gettingstarted1350.jpg";
    } else if ($current_path=="getting-connected") { 
      $current_page = "CONNECTED";
      $include_picstrip = "YES";
      $header_img_narrow = "/wp-content/themes/educator-child/images/gettingconnected1200.jpg";
      $header_img_wide = "/wp-content/themes/educator-child/images/gettingconnected1350.jpg";
    } else if ($current_path=="cornerstone-experience") { 
      $current_page = "EXPERIENCE";
      $include_slider = "experience700-slider";
    } else if ($current_path=="virtual-tour") { 
      $current_page = "VIRTUALTOUR";
      $include_slider = "virtualtour";
    } else if ($current_path=="who-we-are") {
      $current_page = "WHO";
      $spacer_class = "cds-no-pic-spacer";
    } else if ($current_path=="publications") {
      $current_page = "PUBLICATIONS";
      $spacer_class = "cds-no-pic-spacer";
    }

    wp_head(); 
    ?>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" id="educator-edge-child-style-css" href="/wp-content/themes/educator-child/style.css?ver=RUERUEIKDSJFKDLCCBSBSJDLS" type="text/css" media="all">
</head>
<body <?php body_class();?> itemscope itemtype="http://schema.org/WebPage">
    <?php if (referrer_is_pathways()) { ?>
      <div class="cds-referrer-frame">
        <a href="https://pathways-cornerstonedayschool.com"><img class="cds-referrer-frame-logo" src="/wp-content/themes/educator-child/images/return-to-pathways760.png" /></a>
      </div>
    <?php } ?>
    <?php if (FALSE and referrer_is_cornerstone()) { ?>
      <div class="cds-referrer-frame">
        <a href="https://cornerstonedayschool.com"><img class="cds-referrer-frame-logo" src="/wp-content/themes/educator-child/images/return-to-cornerstone760.png" /></a>
      </div>
    <?php } ?>
    <?php
    /**
     * educator_edge_after_body_tag hook
     *
     * @see educator_edge_get_side_area() - hooked with 10
     * @see educator_edge_smooth_page_transitions() - hooked with 10
     */
    do_action('educator_edge_after_body_tag'); ?>

    <div class="edgt-wrapper">
        <div class="edgt-wrapper-inner">
            <?php educator_edge_get_header(); ?>
	
	        <?php
	        /**
	         * educator_edge_after_header_area hook
	         *
	         * @see educator_edge_back_to_top_button() - hooked with 10
	         * @see educator_edge_get_full_screen_menu() - hooked with 10
	         */
	        do_action('educator_edge_after_header_area'); ?>
	        
            <div class="edgt-content <?php echo $spacer_class ?>" <?php educator_edge_content_elem_style_attr(); ?>>
              <div class="edgt-content-inner">
                <?php 
                  if ($include_slider!="NO") { 
                    echo do_shortcode('[rev_slider alias="' . $include_slider . '"]');
                  }
                ?>

                <?php if ($include_picstrip=="YES") { ?>
                  <div class="cds-picstrip"><div class="cds-narrowview"><img src="<?php echo $header_img_narrow ?>" /></div><div class="cds-wideview"><img src="<?php echo $header_img_wide ?>" /></div></div>
                  <div class="cds-picstrip"><div class="cds-wideview"><img src="<?php echo $header_img2_wide ?>" /></div></div>
                <?php } ?>
