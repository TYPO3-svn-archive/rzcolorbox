<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addStaticFile($_EXTKEY,'static/base/','jQuery ColorBox Base');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/style1/','jQuery ColorBox Style 1');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/style2/','jQuery ColorBox Style 2');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/style3/','jQuery ColorBox Style 3');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/style4/','jQuery ColorBox Style 4');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/style5/','jQuery ColorBox Style 5');

$tempColumns = array (
  'tx_rzcolorbox_slideshow' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:rzcolorbox/locallang_db.xml:tt_content.tx_rzcolorbox_slideshow',		
		'config' => array (
			'type' => 'check',
		)
	),
);


t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);

$GLOBALS['TCA']['tt_content']['palettes']['7']['showitem'] .= ',tx_rzcolorbox_slideshow';

?>