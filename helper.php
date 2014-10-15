<?php
/**
 * Randomname
 *
 * @version    1.0.0
 * @package    Joomla 2.5.0
 * @subpackage Modules
 * @author Jan-Frederik Stieler http://www.janstieler.de
 * @Copyright  Copyright (c)2014 Jan-Frederik Stieler
 * @license    GNU/GPL, see the gpl-3.0.txt file included in this package
 *
 * mod_anythingslider is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 **/ 

    // no direct access
    defined('_JEXEC') or die('Restricted access');

    if( !class_exists('modRandomnameHelper')){
    
        class modRandomnameHelper{
            
            public static function names(){
					$names = explode(', ', $randomnames);
					$rand = array_rand($names);
				
					return $names[$rand];
			}
        }
	}
?>