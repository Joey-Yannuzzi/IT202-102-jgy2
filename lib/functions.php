<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/project/';

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");

require(__DIR__ . "/sanitizers.php");

require(__DIR__ . "/user_helpers.php");

require(__DIR__ . "/flash_messages.php");

//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/score_helpers.php");
?>