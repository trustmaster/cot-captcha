<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.first
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

$rverify = cot_import('rverify', 'P', 'INT');

if (!cot_captcha_validate($rverify))
{
	cot_error('captcha_verification_failed', 'rverify');
}

?>