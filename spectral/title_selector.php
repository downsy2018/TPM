<?php
$pageName=basename($_SERVER['PHP_SELF']);

$title="The Parent Mentor";

if ($pageName == 'index.php')
	{$title = "The Parent Mentor";
return $title;}
if ($pageName == 'about.php')
	{$title = "About us | The Parent Mentor";
return $title;}
;
if ($pageName == 'whatwedo.php')
	{$title = "What we do | The Parent Mentor";
return $title;}
;
if ($pageName == 'howwework.php')
	{$title = "How we work | The Parent Mentor";
return $title;}
;
if ($pageName == 'inspiration.php')
	{$title = "The inspiration | The Parent Mentor";
return $title;}
if ($pageName == 'business.php')
	{$title = "The business case | The Parent Mentor";
return $title;}
if ($pageName == 'contact.php')
	{$title = "Be the start of something | The Parent Mentor";
return $title;}
if ($pageName == 'shop.php')
	{$title = "Shop | The Parent Mentor";
return $title;}
if ($pageName == 'purpleshark.php')
	{$title = "Purple Shark | The Parent Mentor";
return $title;}
if ($pageName == 'links.php')
	{$title = "Useful links &amp; information | The Parent Mentor";
return $title;}

 
?>