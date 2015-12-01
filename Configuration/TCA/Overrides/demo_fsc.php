<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$_EXTKEY = $GLOBALS['_EXTKEY'] = 'demo_fsc';

// Adds the content element to the "Type" dropdown
ExtensionManagementUtility::addPlugin(
		array(
				'LLL:EXT:demo_fsc/Resources/Private/Language/Tca.xlf:demo_fsc',
				$_EXTKEY,
				ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/ContentElements/demo_fsc.svg'
		),
		'CType',
		$_EXTKEY
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['demo_fsc'] = array(
		'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
			--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
			--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
			--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
');

// Add an entry in the static template list found in sys_templates for static TS
ExtensionManagementUtility::addStaticFile(
		$_EXTKEY,
		'Configuration/TypoScript',
		'FSC Demo Content Element'
);
