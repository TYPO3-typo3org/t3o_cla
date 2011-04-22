<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$tempColumns = Array (
	"tx_t3ocla_hassignedcla" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:t3o_cla/locallang_db.xml:fe_users.tx_t3ocla_hassignedcla",		
		"config" => Array (
			"type" => "check",
		)
	),
);


t3lib_div::loadTCA("fe_users");
t3lib_extMgm::addTCAcolumns("fe_users",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("fe_users","tx_t3ocla_hassignedcla;;;;1-1-1");
?>