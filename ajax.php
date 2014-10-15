<?php
    $randomnames = $params->get('randomnames');

    if (isset($_GET['button'])){
		$names = explode(', ', $randomnames);
		$rand = array_rand($names);
	
		return $names[$rand];
	}
	else{
		$app->enqueueMessage('Sorry No Name for Random Found!!.', 'warning');
		return false;
	}
?>