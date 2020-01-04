<?php

// boolean function - is this referrer a cornerstone/pathways site?

function referrer_is_cornerstone() {
  $ret = false;
  // is there a session cookie indicating referrer?
  if (isset($_COOKIE['cds_cornerstone_referrer'])) {
    $ret = true;
  } else {
     // is this a cornerstone referrer?
    $ref = $_SERVER['HTTP_REFERER'];
    $dev_cds_url = 'http://cornerstone2.marceliotstein.net';
    $prod_cds_url = 'https://cornerstonedayschool.com';
    if ((strpos($ref,$dev_cds_url)!==FALSE) ||
        (strpos($ref,$prod_cds_url)!==FALSE)) {
      // set session cookie
      setcookie('cds_cornerstone_referrer','true',0);
      $ret = true;
    }
  }
  return($ret);
}

function referrer_is_pathways() {
  $ret = false;
  // is there a session cookie indicating referrer?
  if (isset($_COOKIE['cds_pathways_referrer'])) {
    $ret = true;
  } else {
     // is this a pathways referrer?
    $ref = $_SERVER['HTTP_REFERER'];
    ?>
    <!-- REFERRER IS <?php echo $ref ?> -->
    <?
    $dev_cds_url = 'http://pathways.marceliotstein.net';
    $prod_cds_url = 'https://pathways-cornerstonedayschool.com';
    if ((strpos($ref,$dev_cds_url)!==FALSE) ||
        (strpos($ref,$prod_cds_url)!==FALSE)) {
      // set session cookie
      setcookie('cds_pathways_referrer','true',0);
      $ret = true;
    }
  }
  return($ret);
}

/*** Child Theme Function  ***/
if ( ! function_exists( 'educator_edge_child_theme_enqueue_scripts' ) ) {
	function educator_edge_child_theme_enqueue_scripts()
	{

		$parent_style = 'educator-edge-default-style';

		wp_enqueue_style('educator-edge-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action('wp_enqueue_scripts', 'educator_edge_child_theme_enqueue_scripts');
}
