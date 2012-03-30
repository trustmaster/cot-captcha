<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.send.first
[END_COT_EXT]
==================== */

defined('COT_CODE') or die("Wrong URL.");

if ($usr['id'] == '0')
{
	$rverify  = cot_import('rverify', 'P', 'TXT');

	if (!cot_captcha_validate($rverify))
	{
		cot_error('captcha_verification_failed', 'rverify');
	}
}

?>