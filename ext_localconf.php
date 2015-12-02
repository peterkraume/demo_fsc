<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fluid_styled_content')) {

	// Add our new content element to the "New Content Element Wizard" using Page TSconfig
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page/demo_fsc.txt">');

	// Register for hook to show preview of tt_content element of CType="demo_fsc" in page module
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['demo_fsc'] = \KWS\DemoFsc\Hooks\PageLayoutView\DemoFscPreviewRenderer::class;

}
