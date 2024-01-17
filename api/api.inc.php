<?php

file_exists('../main.inc.php') or die('System Error');

/*
 * Why API_SESSION ??
 * It indicates that the session is API - which session handler should handle as
 * stateless for new sessions.
 * Existing session continue to work as expected - this it's important for
 * SSO authentication, which uses /api/auth/* endpoints. Such calls are not
 * stateless.
 *
 */
define('API_SESSION', true);

// APICALL const.
define('APICALL', true);

require_once('../main.inc.php');
require_once(INCLUDE_DIR.'class.http.php');
require_once(INCLUDE_DIR.'class.api.php');

?>
