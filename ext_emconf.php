<?php

/*********************************************************************
* Extension configuration file for ext "div2007".
*
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Migration from TYPO3 4.5 to 8.x',
  'description' => 'This extension provides the migration classes needed for TYPO3 8.x like t3lib_div, t3lib_extMgm, tslib_pibase and all others. This provides backwards compatibility to TYPO3 4.5 - 6.1',
  'category' => 'misc',
  'version' => '0.1.5',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'author' => 'Franz Holzinger',
  'author_email' => 'franz@ttproducts.de',
  'author_company' => 'jambage.com',
  'constraints' =>
  array (
    'depends' =>
    array (
      'php' => '5.5.0-7.99.99',
      'typo3' => '8.7.0-8.99.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  )
);

