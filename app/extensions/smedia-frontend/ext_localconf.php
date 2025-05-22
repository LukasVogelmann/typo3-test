<?php

defined('TYPO3') or die('Access denied.');

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['smedia_frontend'] = 'EXT:smedia_frontend/Configuration/RTE/Default.yaml';
})();
