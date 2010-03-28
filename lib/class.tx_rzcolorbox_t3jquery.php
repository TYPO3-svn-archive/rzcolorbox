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
  
class tx_rzcolorbox_t3jquery {
  function getjquery() {
    // checks if t3jquery is loaded     
    if (t3lib_extMgm::isLoaded('t3jquery')) {      
      require_once(t3lib_extMgm::extPath('t3jquery').'class.tx_t3jquery.php');
    }
    
    // if t3jquery is loaded and the custom Library had been created    
    if (T3JQUERY === true) {
      tx_t3jquery::addJqJS();
    }
    else {
      // Do nothing
    }  
  }
}

?>