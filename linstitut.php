<?php
// Forward linstitut.php to new clean slug /a-propos
header("Location: a-propos", true, 301);
require_once __DIR__ . '/a-propos.php';
exit;
