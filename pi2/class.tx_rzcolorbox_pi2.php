<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Raphael Zschorsch <rafu1987@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin 'rzcolorbox' for the 'rzcolorbox' extension.
 *
 * @author	Raphael Zschorsch <rafu1987@gmail.com>>
 * @package    TYPO3
 * @subpackage    tx_rzcolorbox
 */
 
class tx_rzcolorbox_pi2 extends tslib_pibase {
    var $prefixId      = 'tx_rzcolorbox_pi2';        // Same as class name
    var $scriptRelPath = 'pi2/class.tx_rzcolorbox_pi2.php';    // Path to this script relative to the extension dir.
    var $extKey        = 'rzcolorbox';    // The extension key.
    var $pi_checkCHash = true;
    
    /**
     * The main method of the PlugIn
     *
     * @param    string        $content: The PlugIn content
     * @param    array        $conf: The PlugIn configuration
     * @return    The content that is displayed on the website
     */ 
     
    function main($content, $conf) {
        $this->conf = $conf;
        $this->pi_setPiVarDefaults();
        $this->pi_loadLL();
        
        // Read Flexform	
      	$this->pi_initPIflexForm();
      	$text = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'text', 'sDEF');
      	$width = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'width', 'options');
      	$height = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'height', 'options');
      	$deactivate_width = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'deactivate_width', 'options');
      	$deactivate_height = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'deactivate_height', 'options');
      	$template_file = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'template', 'options');
      	$type = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'type', 'sDEF'); 
      	$transition = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'transition', 'options'); 
        $open = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'open', 'options');  
      	$link = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'iframe', 'sDEF');
      	        
        if(is_numeric($link)) {
          $link = $this->pi_linkTP_keepPIvars_url("","","",$link);
        }
        $html = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'html', 'sDEF');         
        $html_output = str_replace("\n","",$html);
           
      	$ce = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'ce', 'sDEF');        
        $ce_id = $this->cObj->data['uid'];
      	
      	// TypoScript values
      	$ts_linkClass = $this->conf['linkClass'];
      	$ts_contentClass = $this->conf['contentClass'];
      	
      	if(empty($ts_linkClass)) {
          $ts_linkClass = 'rzcolorbox-content';
        }
      	
      	if(empty($ts_contentClass)) {
          $ts_contentClass = 'rzce';
        }
      	
      	$linkClass = ''.$ts_linkClass.''.$ce_id;
      	$contentClass = ''.$ts_contentClass.''.$ce_id;
      	
      	if($width == '') {
          $width = $this->conf['colorboxWidth'];
          if($width == '') {
            $width = '100%';
          }
        }
        
        if($height == '') {
          $height = $this->conf['colorboxHeight'];
          if($height == '') {
            $height = '100%';
          }
        }
        
        // Output the Content Elements        
        $ce_conf = array('tables' => 'tt_content','source' => $ce,'dontCheckPid' => 1);
        $ce_output = $this->cObj->RECORDS($ce_conf);
        
        // Template
        $singleTemplate = $template_file;
		    if($singleTemplate == '') {
          $singleTemplate = $this->conf['templateFile'];
        }
        
        $this->templateCode = $this->cObj->fileResource($singleTemplate);
      	if($this->templateCode == '') {
      		return "<h3>No HTML-Template found:</h3>".$singleTemplate;
        } 
        
        // Set the type
        if($type == 'iframe') {
          $type_js = 'iframe:true';  
        }
        else if($type == 'inline') {
          $type_js = 'inline:true, href:".'.$contentClass.'"';
        }                                                    
        else if($type == 'html') {
          $type_js = 'html:"'.$html_output.'"';
        }
        
        // Automatically open ColorBox
        if($open == '1') {
          $open_js = 'open:true,';
        }
        else {
          $open_js = '';
        }
        
        // Set the transistion
        if($transition == 'elastic') {
          $transition_js = 'transition: "elastic",';
        }
        else if($transition == 'fade') {
          $transition_js = 'transition: "fade",';
        }
        else if($transition == 'none') {
          $transition_js = 'transition: "none",';
        }
        
        // JS for the Content
        if($deactivate_width == '1' && $deactivate_height == '0' ) {
          $js = '$(".'.$linkClass.'").colorbox({'.$open_js.''.$transition_js.'height:"'.$height.'", '.$type_js.'})';
        }
        else if($deactivate_height == '1' && $deactivate_width == '0') {
          $js = '$(".'.$linkClass.'").colorbox({'.$open_js.''.$transition_js.'width:"'.$width.'", '.$type_js.'})';  
        }
        else if($deactivate_width == '1' && $deactivate_height == '1') {
          $js = '$(".'.$linkClass.'").colorbox({'.$open_js.''.$transition_js.'inline:true, '.$type_js.'})';   
        }
        else {
          $js = '$(".'.$linkClass.'").colorbox({'.$open_js.''.$transition_js.'width:"'.$width.'", height:"'.$height.'", '.$type_js.'})'; 
        }
          
        // Include JS 
        $GLOBALS['TSFE']->additionalHeaderData[$this->prefixId] .= '
          <script type="text/javascript">
            $(document).ready(function(){   
          	 '.$js.'
          	});	
          </script>
        ';
        
        // Set the template and define the markers
        $template['main'] = $this->cObj->getSubpart($this->templateCode,'###TEMPLATE###');
        $markerArray['###TEXT###'] = $this->pi_RTEcssText($text);
        
        // Set the link appropriate to the type
        if($type == 'iframe') {
          $markerArray['###LINK_OPEN###'] = '<a href="'.$link.'" class="'.$linkClass.'">';
        }
        else if($type == 'inline' || $type == 'html') {
          $markerArray['###LINK_OPEN###'] = '<a href="#" class="'.$linkClass.'">';
        }
        
        $markerArray['###LINK_CLOSE###'] = '</a>';
        
        $content = $this->cObj->substituteMarkerArrayCached($template['main'], $markerArray, array());     
    
        // Only include the Content Elements, if the type "inline" is chosen
        if($type == 'inline') {
          $content .= '
            <div style="display:none;">
              <div class="'.$contentClass.'">
                '.$ce_output.'
              </div>
            </div>
          ';
        }
    
        return $this->pi_wrapInBaseClass($content);
    }
}              

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rzcolorbox/pi2/class.tx_rzcolorbox_pi2.php'])    {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rzcolorbox/pi2/class.tx_rzcolorbox_pi2.php']);
}

?>