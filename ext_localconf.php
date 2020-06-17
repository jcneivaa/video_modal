<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.VideoModal',
            'Videomodal',
            [
                'Video' => 'list'
            ],
            // non-cacheable actions
            [
                'Video' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    videomodal {
                        iconIdentifier = video_modal-plugin-videomodal
                        title = LLL:EXT:video_modal/Resources/Private/Language/locallang_db.xlf:tx_video_modal_videomodal.name
                        description = LLL:EXT:video_modal/Resources/Private/Language/locallang_db.xlf:tx_video_modal_videomodal.description
                        tt_content_defValues {
                            CType = list
                            list_type = videomodal_videomodal
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'video_modal-plugin-videomodal',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:video_modal/Resources/Public/Icons/user_plugin_videomodal.svg']
			);
		
    }
);
