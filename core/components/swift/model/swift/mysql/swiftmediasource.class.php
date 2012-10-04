<?php
/**
 * @package swift
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/swiftmediasource.class.php');
class SwiftMediaSource_mysql extends SwiftMediaSource {}
?>