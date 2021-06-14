<?php declare(strict_types=1);

sleep((int)($_REQUEST['sleep'] ?? 0));

$value = $_REQUEST['key'] ?? '';

if ($value) {
    $date = date('Y/m/d H:i:s');
    error_log("[BG_ASYNC_JOB]: [$date]: I have written the value - $value", 0);
}
