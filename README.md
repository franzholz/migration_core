# TYPO3 extension migration_core

## What is does

This extension provides the migration classes t3lib_div, t3lib_extMgm, tslib_pibase, t3lib_Singleton and all others for TYPO3 6.x, 7.x and 8.x for backwards compatibility to TYPO3 versions from 4.5 to 6.1.

Error messages like this should not happen any more:

**PHP Fatal error: Interface 't3lib_Singleton' not found**

If you install this extension, then most of the extensions written for TYPO3 4.5 will still work under TYPO3 8.x. Only the TCA must still be adapted and restructured into the Configuration/TCA folder instead of using the files tca.php and ext_tables.php.

## Versions

- Version  0.0.0:  TYPO3 4.5 - 6.1:

It does nothing because all those classes are directly available inside these versions of TYPO3. Version 0.0.0 is only available for download from Github. Alternatively you can remove this requirement completely from the file ext_emconf.php of the extension which depends on  migration_core.

- Versions 0.0.x:  TYPO3 6.x and 7.x
- Versions 0.1.x:  TYPO3 8.x


## Composer command line example

`composer require typo3-ter/migration-core ^0.1`
    
... where 0.1 is the version number of the extension migration_core which you need.


