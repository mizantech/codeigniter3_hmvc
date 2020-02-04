<?php defined('BASEPATH') OR exit('No direct script access allowed');

function d($data = NULL, $pre = TRUE) 
{
	if($pre) { echo '<pre>'; }
	print_r($data);
	if($pre) { echo '</pre>'; }	
	exit;
}

function debugz($data = NULL, $pre = TRUE) 
{
	if($pre) { echo '<pre>'; }
	print_r($data);
	if($pre) { echo '</pre>'; }	
	exit;
}

function dumpz($data = NULL, $pre = TRUE) 
{
	if($pre) { echo '<pre>'; }
	var_dump($data);
	if($pre) { echo '</pre>'; }	
	exit;
}

/* debug_helper.php */