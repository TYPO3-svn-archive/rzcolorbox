<?php

########################################################################
# Extension Manager/Repository config file for ext "rzcolorbox".
#
# Auto generated 26-05-2010 18:26
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'jQuery Colorbox',
	'description' => 'The extension includes the jQuery ColorBox for images, which is a nice-looking alternative for the allknown Lightbox.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.10-dev',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Raphael Zschorsch',
	'author_email' => 'rafu1987@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:96:{s:9:"ChangeLog";s:4:"9e0a";s:12:"ext_icon.gif";s:4:"9012";s:17:"ext_localconf.php";s:4:"f1ce";s:14:"ext_tables.php";s:4:"6fd1";s:14:"ext_tables.sql";s:4:"9cce";s:15:"ff_data_pi2.xml";s:4:"0127";s:13:"locallang.xml";s:4:"9864";s:16:"locallang_db.xml";s:4:"2061";s:17:"locallang_tca.xml";s:4:"c379";s:12:"t3jquery.txt";s:4:"d4fe";s:14:"doc/manual.pdf";s:4:"1f5e";s:14:"doc/manual.sxw";s:4:"7c03";s:19:"doc/wizard_form.dat";s:4:"cca3";s:20:"doc/wizard_form.html";s:4:"f04c";s:31:"lib/class.tx_rzcolorbox_css.php";s:4:"b17d";s:38:"lib/class.tx_rzcolorbox_dbrelation.php";s:4:"aaf3";s:34:"lib/class.tx_rzcolorbox_ttnews.php";s:4:"8a23";s:14:"pi2/ce_wiz.gif";s:4:"a50e";s:31:"pi2/class.tx_rzcolorbox_pi2.php";s:4:"8114";s:39:"pi2/class.tx_rzcolorbox_pi2_wizicon.php";s:4:"f63c";s:13:"pi2/clear.gif";s:4:"cc11";s:17:"pi2/locallang.xml";s:4:"c42a";s:20:"pi2/static/setup.txt";s:4:"72bf";s:33:"res/js/jquery-1-4-2-noconflict.js";s:4:"1a75";s:22:"res/js/jquery-1-4-2.js";s:4:"65b3";s:25:"res/js/jquery.colorbox.js";s:4:"dfb6";s:27:"res/style1/css/colorbox.css";s:4:"4523";s:31:"res/style1/css/images/Thumbs.db";s:4:"72cf";s:32:"res/style1/css/images/border.png";s:4:"7ca8";s:34:"res/style1/css/images/controls.png";s:4:"e687";s:33:"res/style1/css/images/loading.gif";s:4:"e661";s:44:"res/style1/css/images/loading_background.png";s:4:"acf4";s:33:"res/style1/css/images/overlay.png";s:4:"e241";s:49:"res/style1/css/images/internet_explorer/Thumbs.db";s:4:"7d3b";s:62:"res/style1/css/images/internet_explorer/borderBottomCenter.png";s:4:"1936";s:60:"res/style1/css/images/internet_explorer/borderBottomLeft.png";s:4:"7cee";s:61:"res/style1/css/images/internet_explorer/borderBottomRight.png";s:4:"297f";s:60:"res/style1/css/images/internet_explorer/borderMiddleLeft.png";s:4:"64df";s:61:"res/style1/css/images/internet_explorer/borderMiddleRight.png";s:4:"9fa4";s:59:"res/style1/css/images/internet_explorer/borderTopCenter.png";s:4:"01ec";s:57:"res/style1/css/images/internet_explorer/borderTopLeft.png";s:4:"bf49";s:58:"res/style1/css/images/internet_explorer/borderTopRight.png";s:4:"5131";s:27:"res/style2/css/colorbox.css";s:4:"f608";s:31:"res/style2/css/images/Thumbs.db";s:4:"e371";s:32:"res/style2/css/images/border.png";s:4:"7ca8";s:34:"res/style2/css/images/controls.png";s:4:"e9bd";s:33:"res/style2/css/images/loading.gif";s:4:"8732";s:44:"res/style2/css/images/loading_background.png";s:4:"acf4";s:33:"res/style2/css/images/overlay.png";s:4:"e241";s:27:"res/style3/css/colorbox.css";s:4:"3623";s:31:"res/style3/css/images/Thumbs.db";s:4:"561c";s:32:"res/style3/css/images/border.png";s:4:"7ca8";s:34:"res/style3/css/images/controls.png";s:4:"2615";s:33:"res/style3/css/images/loading.gif";s:4:"8732";s:44:"res/style3/css/images/loading_background.png";s:4:"acf4";s:33:"res/style3/css/images/overlay.png";s:4:"e241";s:27:"res/style4/css/colorbox.css";s:4:"eb11";s:31:"res/style4/css/images/Thumbs.db";s:4:"7389";s:32:"res/style4/css/images/border.png";s:4:"7ca8";s:33:"res/style4/css/images/border1.png";s:4:"c079";s:33:"res/style4/css/images/border2.png";s:4:"680e";s:34:"res/style4/css/images/controls.png";s:4:"e9bd";s:33:"res/style4/css/images/loading.gif";s:4:"b5e2";s:44:"res/style4/css/images/loading_background.png";s:4:"acf4";s:33:"res/style4/css/images/overlay.png";s:4:"e241";s:49:"res/style4/css/images/internet_explorer/Thumbs.db";s:4:"6f9d";s:62:"res/style4/css/images/internet_explorer/borderBottomCenter.png";s:4:"3f90";s:60:"res/style4/css/images/internet_explorer/borderBottomLeft.png";s:4:"3262";s:61:"res/style4/css/images/internet_explorer/borderBottomRight.png";s:4:"a5f6";s:60:"res/style4/css/images/internet_explorer/borderMiddleLeft.png";s:4:"3521";s:61:"res/style4/css/images/internet_explorer/borderMiddleRight.png";s:4:"7409";s:59:"res/style4/css/images/internet_explorer/borderTopCenter.png";s:4:"8053";s:57:"res/style4/css/images/internet_explorer/borderTopLeft.png";s:4:"8e9e";s:58:"res/style4/css/images/internet_explorer/borderTopRight.png";s:4:"97c3";s:27:"res/style5/css/colorbox.css";s:4:"e181";s:31:"res/style5/css/images/Thumbs.db";s:4:"abfd";s:32:"res/style5/css/images/border.png";s:4:"84ac";s:34:"res/style5/css/images/controls.png";s:4:"5aec";s:33:"res/style5/css/images/loading.gif";s:4:"e661";s:44:"res/style5/css/images/loading_background.png";s:4:"7c96";s:33:"res/style5/css/images/overlay.png";s:4:"e241";s:26:"res/template/template.html";s:4:"ba5a";s:25:"static/base/constants.txt";s:4:"0751";s:21:"static/base/setup.txt";s:4:"ebe7";s:27:"static/style1/constants.txt";s:4:"d41d";s:23:"static/style1/setup.txt";s:4:"c84a";s:27:"static/style2/constants.txt";s:4:"d41d";s:23:"static/style2/setup.txt";s:4:"1d9c";s:27:"static/style3/constants.txt";s:4:"d41d";s:23:"static/style3/setup.txt";s:4:"1236";s:27:"static/style4/constants.txt";s:4:"d41d";s:23:"static/style4/setup.txt";s:4:"e315";s:27:"static/style5/constants.txt";s:4:"d41d";s:23:"static/style5/setup.txt";s:4:"833f";s:29:"static/t3jquery/constants.txt";s:4:"a1fc";s:25:"static/t3jquery/setup.txt";s:4:"ebef";}',
	'suggests' => array(
	),
);

?>