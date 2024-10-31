<?php
/*
Plugin Name: Seçim 2011 CHP Destek Afişi
Plugin URI: http://www.mentalmasturbasyon.com/secim-destek-plugin
Description: CHP'ye 2011 Seçimlerinde Blogunuzdan Destek Olmak için Yan Menünüze Seçim Afişi Asın
Version: 1.0
Author: Meriç 'Megu' Güven
Author URI: http://www.mentalmasturbasyon.com
*/

//Define plugin directories
define( 'WP_2011DESTEK_URL_CHP', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_2011DESTEK_DIR_CHP', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_2011destek_chp($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
  
		<a href="http://www.chp.org.tr" target="_blank"><img src="<?php echo WP_2011DESTEK_URL_CHP ?>/img/chp.png" alt="Seçim 2011'de Oyumuz CHP'ye" /></a>
<center><a href="http://www.mentalmasturbasyon.com/secim-destek-plugin"><font size="1px">Seçim 2011 Afişleri</font></a></center>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('Seçim 2011 CHP Afişi', 'widget_2011destek_chp');
?>