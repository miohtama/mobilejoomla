<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$links=array();

$count=count($url);
for($i=0;$i<$count;$i++)
	$links[]=($url[$i]=='')?('<span>'.$text[$i].'</span>'):('<a href="'.$url[$i].'">'.$text[$i].'</a>');

echo implode(' | ',$links);