<?php
/*
	Plugin Name: WordCount
	Plugin URI: http://
	Description: measure your reading speed
	Version: 1.0
	Author: Adrian Soluch
	Author URI: http://
	
	THX to Peter-Paul Koch for the DragDrop script



	Copyright 2009  Adrian Soluch (email : n0mad_10@yahoo.de)

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
--------------------------------------------------------------------------------*/

if (! defined('WCS_PLUGIN_URL'))
	define('WCS_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)));

add_action('wp_head', 'wcs_head'); // print css js
add_action('wp_footer', 'wcs_display');


function wcs_head() {
        $stylesheet_url = WCS_PLUGIN_URL . '/wordcount.css';
        echo '<link rel="stylesheet" href="' . $stylesheet_url . '" type="text/css" media="screen" />';

        $javascript_url = WCS_PLUGIN_URL . '/wordcount.js';
?>
		<script language="JavaScript" type='text/javascript' src='<?php echo $javascript_url; ?>'></script>
<?php
}

function wcs_display() {
?>
<div id="wcbox">
	<div class="wcbox_top">
	<table border="0">	
	<tr>
    	<td width="110" align="right"><a title="info" href="#" class="infowcboxl">?</a>
	    <a title="close" href="#" class="closewcboxi" onclick="closeWcsBox();return false;">x</a>
	</tr>
    </table>
    </div>
    <table border="0" class="wcboxtable">
    <tr>
        <td width="64" class="wctablepadding">words:</td>
        <td><div id="words" class="wcboxkatinhalt"></div></td>
    </tr>
    </table>

    <div class="hr_wcbox"></div>

    <table border="0" class="wcboxtable2">
    <tr>
        <td width="64" class="wctablepadding">amount last words:</td>
        <td><div id="words2" class="wcboxkatinhalt"></div></td>
    </tr>
    <tr>
        <td class="wctablepadding">time needed:</td>
        <td><div id="ttime" class="wcboxkatinhalt"></div></td>
    </tr>
    <tr>
        <td class="wctablepadding">words per second:</td>
        <td><div id="wpm" class="wcboxkatinhalt wcboxkatinhalt2"></div></td>
    </tr>
    </table>

    <div class="hr_wcbox"></div>

    <table border="0" class="wcboxtable">
    <tr>
        <td width="64" class="wctablepadding">average words per second:</td>
        <td><div id="overall" class="wcboxkatinhalt"></div></td>
    </tr>
    </table>
</div>
<script type="text/javascript">dragDrop.initElement(document.getElementById('wcbox'));</script>
<?php
}
?>
