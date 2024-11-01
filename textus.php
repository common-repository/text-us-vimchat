<?php
/*
Plugin Name: Text us! Vimchat
Plugin URI: http://vimchat.com
Description: Add your mobile phone number and we will send you a secure text to get conversation started
Version: 1.0
Author: Vimchat
*/
?>
<?php
/*  Copyright 2017  Notfar Web (email: notfarweb@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
if ( ! defined( 'ABSPATH' ) )
	 exit;

add_action('admin_menu', 'vimchatMenu');


function vimchatMenu(){

	add_menu_page('Text us!', 'Text us!', 'manage_options', 'vimchatSnippet-manage','vimchatSnippets',plugins_url('img/icon.png', __FILE__ ), 84);

}


function vimchatSnippets() {
	echo "<h1>Text us! Vimchat</h1>";
	echo "<div class='myfish-text'><p>Stettings</p></div>";
	require dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'form.php';
}
#-----------------------------------------------------------------#
# Include JS/CSS
#-----------------------------------------------------------------#
add_action( 'wp_enqueue_scripts', 'vimchatScripts' );
function vimchatScripts() {
	wp_enqueue_style( 'style-button', plugins_url('css/vimchat-button.css', __FILE__), array(), '1.0.0', $media = 'all', true );
	wp_enqueue_style( 'style-vimchat', plugins_url('css/style.css', __FILE__), array(), '1.0.0', $media = 'all', true );
	wp_enqueue_script( 'vimchat-button', 'https://vimchat-development.firebaseapp.com/js/send-message-wp.js', array(), '2.0.0', true );
}
#-----------------------------------------------------------------#
# Include CSS/PAGE
#-----------------------------------------------------------------#
function btnvimNoscript() {
	?>
		<style>
			#btn-vim {
				position: <?php echo get_option('position'); ?>;
				left: <?php echo get_option('leftinp'); ?>px;
				right: <?php echo get_option('rightinp'); ?>px;
				bottom: <?php echo get_option('bottominp'); ?>px;
			}

			.btn-vimchat.btn-vimchat #btn-tel, .btn-send {
				padding: <?php echo get_option('heightBtn'); ?>vmin <?php echo get_option('widthBtn'); ?>vmin;
				background-color: <?php echo get_option('backgroundColor'); ?>;
				color: <?php echo get_option('colorText'); ?>;
			}

		</style>
	<?php
}
add_action( 'wp_head', 'btnvimNoscript' );

function btnvimLink() {
	?>
    <div id="btn-vim" class="btn-block-vimchat">
		<a href="#" class="btn-send show-modal" data-handle="<?php echo get_option('handle'); ?>" data-production="true">Instant message</a>
	</div>
	<?php
}
add_action( 'wp_footer', 'btnvimLink' );
?>