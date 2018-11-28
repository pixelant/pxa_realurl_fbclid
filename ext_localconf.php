<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DmitryDulepov\Realurl\Configuration\ConfigurationReader::class] = [
            'className' => \Pixelant\PxaRealurlFbclid\Xclass\ConfigurationReader::class
        ];
    }
);
