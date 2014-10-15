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

	// include the helper file
	require_once(dirname(__FILE__).'/helper.php');

	$doc =& JFactory::getDocument();
	$module_name = basename(dirname(__FILE__));
    
	/* Params */
    $randomnames = $params->get('randomnames');
    $loadjquery = $params->get('loadjquery');
    $loadbootstrap = $params->get('loadbootstrap');
    
    $modRandomnameHelper = new modRandomnameHelper();

    if(empty($randomnames)){
        JFactory::getApplication()->enqueueMessage('Sorry No Name for Random Found!!.', 'warning');
        return false;
    }
    
    //Add Scripts
    if ($loadjquery) $doc->addscript('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    if ($loadbootstrap) $doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
	$doc->addscript(JURI::root().'modules/'.$module_name.'/assets/js/randomname_ajax.js');

    require JModuleHelper::getLayoutPath($module_name, $params->get('layout', 'default'));
?>