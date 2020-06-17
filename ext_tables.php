<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.VideoModal',
            'Videomodal',
            'Video Modal'
        );

        $_EXTKEY='video_modal';
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

        $frontendpluginName = 'Videomodal';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/video.xml');


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Unal.VideoModal',
            'web', // Make module a submodule of 'web'
            'videounalbe', // Submodule key
            '', // Position
            [
                'Video' => 'list',
            ],
            [
                'access' => 'user,group',
                'labels' => 'LLL:EXT:video_modal/Resources/Private/Language/locallang_plugin_video.xlf',
            ]
        );


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('video_modal', 'Configuration/TypoScript', 'Video Modal');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_videomodal_domain_model_video', 'EXT:video_modal/Resources/Private/Language/locallang_csh_tx_videomodal_domain_model_video.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_videomodal_domain_model_video');

    }
);
