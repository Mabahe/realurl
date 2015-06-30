<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects',
		'label'     => 'url',
		'label_alt' => 'url_regular_expression',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => 1,
		'rootLevel' => -1,
		'default_sortby' => 'ORDER BY url',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'iconfile'  => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('realurl') . 'Resources/Public/Icons/tx_realurl_redirects.gif',
	),
	'interface' => array (
		'showRecordFieldList' => 'domain,hidden,url,destination,destination_typolink,last_referer,last_time,counter,has_moved'
	),
	'columns' => array (
		'hidden' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'domain' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.domain',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'sys_domain',
				'foreign_table_where' => 'ORDER BY sys_domain.domainName',
				'size' => 10,
				'minitems' => 0,
				'maxitems' => 1000,
				'MM' => 'tx_realurl_redirects_sys_domain_mm',
			)
		),
		'url' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.url',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '500',
			)
		),
		'url_regular_expression' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.url_regular_expression',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '500',
				'checkbox' => '',
			)
		),
		'destination' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.destination',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '500',
			)
		),
		'destination_typolink' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.destination_typolink',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '500',
				'wizards' => array (
					'_PADDING' => 2,
					'link' => array (
						'type' => 'popup',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
						'icon' => 'link_popup.gif',
						'module' => array(
							'name' => 'wizard_element_browser',
							'urlParameters' => array(
								'mode' => 'wizard'
							)
						),
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					),
				),
				'softref' => 'typolink',
			)
		),
		'last_referer' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.last_referer',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '500',
				'readOnly' => 1,
			)
		),
		'last_time' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.last_time',
			'config' => array (
				'type' => 'input',
				'size' => '11',
				'max'  => '11',
				'eval' => 'datetime',
				'readOnly' => 1,
			)
		),
		'counter' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.counter',
			'config' => Array (
				'type'     => 'input',
				'size'     => '11',
				'max'      => '11',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => Array (
					'upper' => '99999999999',
					'lower' => '0'
				),
				'default' => 0,
				'readOnly' => 1,
			)
		),
		'has_moved' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.has_moved',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => '--div--;LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.tabGeneral, hidden, domain, has_moved, counter, last_referer, last_time, --div--;LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.tabSourceURL, url, url_regular_expression,  --div--;LLL:EXT:realurl/Resources/Private/Language/locallang_db.xml:tx_realurl_redirects.tabTargetURL, destination, destination_typolink')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
