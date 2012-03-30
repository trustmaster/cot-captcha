<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

defined('COT_CODE') or die("Wrong URL.");

require $cfg['plugins_dir']."/captcha/inc/securimage.php";
include_once cot_langfile('captcha', 'plug');
$image = new Securimage();

function captcha_validate($verify = 0)
{
	global $cfg, $image;
	return (bool) $image->check($verify);
}

function captcha_generate()
{
	global $cfg;
	$verifyimg = "<img src='".$cfg['plugins_dir']."/captcha/inc/securimages.php?sid=".md5(uniqid(time())).">' id='image' align='absmiddle'>";
	return ($verifyimg);
}

$cot_captcha[] = 'captcha';

?>