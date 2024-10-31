<?php
/*
Plugin Name: PageRank Button
Plugin URI: http://www.ahmadsuhendri.com/2012/02/wordpress-plugins-pagerank-button/
Description: Shows your site PageRank instantly in the widget area. Go to <a href="widgets.php">widgets configuration</a> after install this plugin.
Version: 0.2
Author: Ahmad Suhendri
Author URI: http://www.ahmadsuhendri.com/
*/

class PageRankButton extends WP_Widget {
  function PageRankButton() { 
  parent::WP_Widget(false, $name = 'PageRank Button'); 
  }

  function widget($args) {
    extract($args, EXTR_SKIP);

?>
    <div align="center">
    <a href="http://www.checkpagerank.info" target="_blank"><img src="http://www.checkpagerank.info/pagerank-button.php?url=<?php echo $_SERVER['HTTP_HOST'] ?>" border="0" title="Check PageRank" alt="Check PageRank" /></a>
    </div>
<?php
  }

}
add_action('widgets_init', create_function('', 'return register_widget("PageRankButton");')); 

?>
