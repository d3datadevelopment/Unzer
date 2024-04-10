<?php

namespace D3\Unzer\Setup;

use D3\ModCfg\Application\Model\Installwizzard\d3installdbcommon;
use D3\ModCfg\Application\Model\Installwizzard\d3installupdatefile;
use D3\Unzer\Application\Model\Configuration\ModProfile;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Transactionlog\Reader\Unzer as TransactionlogReader;
use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\d3database;
use D3\ModCfg\Application\Model\d3str;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Install\d3install_updatebase;
use D3\ModCfg\Application\Model\Installwizzard\d3installconfirmmessage;
use D3\ModCfg\Application\Model\Transactionlog\d3transactionlog;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Driver\Exception as DoctrineDriverException;
use Doctrine\DBAL\Exception as DoctrineException;
use Doctrine\DBAL\Query\QueryBuilder;
use Exception;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\ConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */
class InstallRoutine extends d3install_updatebase
{
    /**
     * @var string
     */
    public $sModKey = 'd3unzer';

    /**
     * @var string
     */
    public $sModName = 'Unzer';

    /**
     * @var string
     */
    public $sModVersion = '7.0.0.2';

    /**
     * @var string
     */
    public $sMinModCfgVersion = '7.0.0.0';

    /** @var string @deprecated since 2016-04-13 */
    public $sModRevision = '7002';

    /**
     * @var string
     */
    public $sBaseConf = '--------------------------------------------------------------------------------
9VYv2==YlpLM0RacmNBOWZjN25haVAxbk5iZ2pDZDdraCt5dldFL0tXVnE1bkFFT1E4VVJ3M0s4d3FJQ
itnQWJPdHBwOTRtSFhpMmY2NHN4SkZvZmlkQ0VtTmdueG5vRCtlSlA2OUZTNWZKYzlPMXpqU3BudjBFR
FJuTHdsbVVkK291SzJxeU9ZNjFya3Mzdy9IaGNtSDR2TXpKUEx6NW4rM3RPL0JzanJ3aTNjdklyeUhTM
210RCs0emJITSt2S24vbnZtU3kzZjNhMlVqUzNLTkZKdjNTYlJtOVBURXJQY3NpaDBFcGI5dHNaaHZxZ
3UwVE8xL21OUVNyRXk5QW91b1NLVWlyS2hDdFVzOWxkNW1ONXRmTXJ4RlZ1aFNublI0dGNmSTRqY2RYa
HZJK2JCZ3VrNTh3ZHZ4MlkrZWUyMDlEU2U=
--------------------------------------------------------------------------------';

    /**
     * @var string
     */
    public $sRequirements = '';

    /**
     * @var string
     */
    public $sBaseValue = 'TyUzQTglM0ElMjJzdGRDbGFzcyUyMiUzQTI3JTNBJTdCcyUzQTM0JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfYmxUZXN0bW9kZSUyMiUzQnMlM0ExJTNBJTIyMSUyMiUzQnMlM0EzOSUzQSUyMmQzX2NmZ19tb2RfX2QzaGVpZGVscGF5X3NTZWN1cml0eVNlbmRlciUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTMxJTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfc1VzZXJJRCUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTMzJTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfc1Bhc3N3b3JkJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBNDMlM0ElMjJkM19jZmdfbW9kX19kM2hlaWRlbHBheV9zU2VjdXJpdHlTZW5kZXJUZXN0JTIyJTNCcyUzQTMyJTNBJTIyMzFIQTA3QkM4MTQyQzVBMTcxNzQ1RDAwQUQ2M0QxODIlMjIlM0JzJTNBMzUlM0ElMjJkM19jZmdfbW9kX19kM2hlaWRlbHBheV9zVXNlcklEVGVzdCUyMiUzQnMlM0EzMiUzQSUyMjMxaGEwN2JjODE0MmM1YTE3MTc0NGU1YWVmMTFmZmQzJTIyJTNCcyUzQTM3JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfc1Bhc3N3b3JkVGVzdCUyMiUzQnMlM0E4JTNBJTIyOTMxNjdERTclMjIlM0JzJTNBMzQlM0ElMjJkM19jZmdfbW9kX19kM2hlaWRlbHBheV9zVHJhbnNUeXBlJTIyJTNCcyUzQTQlM0ElMjJhdXRoJTIyJTNCcyUzQTM2JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfYmxDYXJkc1VzZVJHJTIyJTNCcyUzQTElM0ElMjIwJTIyJTNCcyUzQTM2JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfc0REVHJhbnNUeXBlJTIyJTNCcyUzQTQlM0ElMjJhdXRoJTIyJTNCcyUzQTM2JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfc1ZBVHJhbnNUeXBlJTIyJTNCcyUzQTQlM0ElMjJhdXRoJTIyJTNCcyUzQTQyJTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfYmxTaG93U3RvcmVkSFBEYXRhJTIyJTNCcyUzQTElM0ElMjIwJTIyJTNCcyUzQTM0JTNBJTIyZDNfY2ZnX21vZF9fZWFzeUNyZWRpdExpbWl0TWluaW11bSUyMiUzQnMlM0EzJTNBJTIyMjAwJTIyJTNCcyUzQTM0JTNBJTIyZDNfY2ZnX21vZF9fZWFzeUNyZWRpdExpbWl0TWF4aW11bSUyMiUzQnMlM0E0JTNBJTIyNTAwMCUyMiUzQnMlM0EzOCUzQSUyMmQzX2NmZ19tb2RfX2ludm9pY2VTZWN1cmVkTGltaXRNaW5pbXVtJTIyJTNCcyUzQTIlM0ElMjIxMCUyMiUzQnMlM0EzOCUzQSUyMmQzX2NmZ19tb2RfX2ludm9pY2VTZWN1cmVkTGltaXRNYXhpbXVtJTIyJTNCcyUzQTQlM0ElMjIxMDAwJTIyJTNCcyUzQTQ2JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfb3JkZXJFeGVjdXRlUG9zdEZpZWxkcyUyMiUzQnMlM0ExMDIlM0ElMjJvcmRfYWdiJTIwJTNEJTNFJTIwMSUwRCUwQW9yZF9jdXN0aW5mbyUyMCUzRCUzRSUyMDElMEQlMEFveGRvd25sb2FkYWJsZXByb2R1Y3RzYWdyZWVtZW50JTIwJTNEJTNFJTIwMSUwRCUwQW94c2VydmljZXByb2R1Y3RzYWdyZWVtZW50JTIwJTNEJTNFJTIwMSUyMiUzQnMlM0E0NiUzQSUyMmQzX2NmZ19tb2RfX2QzaGVpZGVscGF5X2FkZGl0aW9uYWxVcmxQYXJhbWV0ZXIlMjIlM0JzJTNBMTklM0ElMjJ1dG1fbm9vdmVycmlkZSUyMCUzRCUzRSUyMDElMjIlM0JzJTNBMzYlM0ElMjJkM19jZmdfbW9kX19kM2hlaWRlbHBheV9pQ3VybFRpbWVPdXQlMjIlM0JzJTNBMiUzQSUyMjYwJTIyJTNCcyUzQTM5JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfYmxTZXJ2aWNlRXJyb3JzJTIyJTNCcyUzQTElM0ElMjIxJTIyJTNCcyUzQTQ2JTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfb3h0cmFuc3N0YXR1c2Vycm9ybWFpbCUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTQyJTNBJTIyZDNfY2ZnX21vZF9fZDNoZWlkZWxwYXlfb3h0cmFuc3N0YXR1c2Vycm9yJTIyJTNCcyUzQTUlM0ElMjJFUlJPUiUyMiUzQnMlM0EzOSUzQSUyMmQzX2NmZ19tb2RfX2QzaGVpZGVscGF5X2NhcmR0eXBldGltZW91dCUyMiUzQnMlM0EzJTNBJTIyNjAwJTIyJTNCcyUzQTM1JTNBJTIyZDNfY2ZnX21vZF9fc0QzSHBIRk9yZGVyUGVuZGluZ1RpbWUlMjIlM0JzJTNBMiUzQSUyMjI2JTIyJTNCcyUzQTI5JTNBJTIyZDNfY2ZnX21vZF9fc0QzSHBIRk9yZGVyTGltaXQlMjIlM0JzJTNBMyUzQSUyMjEwMCUyMiUzQnMlM0EzNCUzQSUyMmQzX2NmZ19tb2RfX3NEM0hwSEZPcmRlckNhbmNlbFR5cGUlMjIlM0JzJTNBMTMlM0ElMjJQTEVBU0VfQ0hPT1NFJTIyJTNCcyUzQTM4JTNBJTIyZDNfY2ZnX21vZF9fYmxEM0hwSEZTZXRaZXJvT3JkZXJOdW1iZXIlMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0IlN0Q=';

    /**
     * @var array
     */
    public $aFields = [
        'OXID_d3hpuid'                => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXUSERID_d3hpuid'            => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXUSERID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXPAYMENTID_d3hpuid'         => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXPAYMENTID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXUID_d3hpuid'               => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXUID',
            'sType'       => 'VARCHAR(50)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXTIME_d3hpuid'              => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXTIME',
            'sType'       => 'DATETIME',
            'blNull'      => false,
            'sDefault'    => '0000-00-00 00:00:00',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXPAYMENTDATA_d3hpuid'       => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXPAYMENTDATA',
            'sType'       => 'TEXT',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXSHOPID_d3hpuid'       => [
            'sTableName'  => 'd3hpuid',
            'sFieldName'  => 'OXSHOPID',
            'sType'       => 'INT(11)',
            'blNull'      => false,
            'sDefault'    => '1',
            'sComment'    => '',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXID_d3hperrortexts'         => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXCODE_d3hperrortexts'       => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXCODE',
            'sType'       => 'VARCHAR(20)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXTYPE_d3hperrortexts'       => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXTYPE',
            'sType'       => 'INT(1)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXTITLE_d3hperrortexts'      => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXTITLE',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXTITLE_1_d3hperrortexts'    => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXTITLE_1',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'OXREALTEXT_d3hperrortexts'   => [
            'sTableName'  => 'd3hperrortexts',
            'sFieldName'  => 'OXREALTEXT',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
        'D3UNZERVOUCHERS_oxorder' => [
            'sTableName'  => 'oxorder',
            'sFieldName'  => 'D3UNZERVOUCHERS',
            'sType'       => 'TEXT',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => 'D3 Unzer voucherinfos for temporary orders',
            'sExtra'      => '',
            'blMultilang' => false,
        ],
    ];

    // Standardwerte zum umbenennen Tables
    /**
     * @var array
     */
    public $aIndizes = [
        [
            'sTableName'  => 'd3hpuid',
            'sType'       => d3database::INDEX_TYPE_PRIMARY,
            'sName'       => d3database::INDEX_TYPE_PRIMARY,
            'aFields'     => [
                'OXID' => 'OXID',
            ],
            'blMultilang' => false,
        ],
        [
            'sTableName'  => 'd3hpuid',
            'sType'       => 'KEY',
            'sName'       => 'OXSHOPID',
            'aFields'     => [
                'OXSHOPID' => 'OXSHOPID',
            ],
            'blMultilang' => false,
        ],
        [
            'sTableName'  => 'd3hpuid',
            'sType'       => 'KEY',
            'sName'       => 'OXUSERID',
            'aFields'     => [
                'OXUSERID' => 'OXUSERID',
            ],
            'blMultilang' => false,
        ],
        [
            'sTableName'  => 'd3hperrortexts',
            'sType'       => 'PRIMARY',
            'sName'       => 'PRIMARY',
            'aFields'     => [
                'OXID' => 'OXID',
            ],
            'blMultilang' => false,
        ],
    ];

    // Standardwerte fuer checkFields(), _addTable() und fixFields()
    // Standardwerte fuer checkIndizes() und fixIndizes()
    /**
     * @var array
     */
    protected $_aRefreshMetaModuleIds = ['d3unzer'];

    /**
     * @var array
     */
    protected $_aUpdateMethods = [
        [
            'check' => 'hasToShowNoteForStoredData',
            'do'    => 'showNoteForStoredData'
        ],
        [
            'check' => 'checkModCfgItemOldId', // Prueft auf Datenbankeintrag
            'do'    => 'updateModCfgItemToCurrentId'
        ],
        [
            'check' => 'checkModCfgItemExist', // Prueft auf Datenbankeintrag
            'do'    => 'updateModCfgItemExist'
        ],
        [
            'check' => 'checkD3hpuidTableExist',
            'do'    => 'updateD3hpuidTableExist'
        ],
        [
            'check' => 'checkD3hperrortextsTableExist',
            'do'    => 'updateD3hperrortextsTableExist'
        ],
        [
            'check' => 'hasEmptyCMSShopId', //0004566: Korrektur der Autoinstallation bei einem Modulupdate
            'do'    => 'removeEmptyCMSShopId' // bug fix for version 5.0.0.2
        ],
        [
            'check' => 'checkHPerrortextcontent', // UPDATE `d3hperrortexts` SET `OXTYPE` = '2' WHERE `OXCODE` = '800.100.153';
            'do'    => 'updateHPerrortextcontent' // Update 4.0.1.0 XE4 => 4.0.2.0 XE4
        ],
        [
            'check' => 'hasOldTables',
            'do'    => 'deleteOldTables'
        ],
        [
            'check' => 'checkOxcontentEntrysExist', // Pruefte ob oxcontenteintraege schon vorhanden
            'do'    => 'showMessageForCustomerToUpdateManually'
        ],
        [
            'check' => 'checkOxcontentItemsExist', // sql befehle fuer Tabelle oxcontents
            'do'    => 'insertOxcontentItemsIfNotExist'
        ],
        [
            'check' => 'checkOxpaymentsItemsExist', // sql befehle fuer Tabelle oxpayments
            'do'    => 'insertOxpaymentsItemsIfNotExist'
        ],
        [
            'check' => 'checkD3hperrortextsItemsExist', // sql befehle fuer Tabelle d3hperrortexts
            'do'    => 'insertD3hperrortextsItemsIfNotExist'
        ],
        [
            'check' => 'checkForChangeHaendlerKontoMsg',
            'do'    => 'showForChangeHaendlerKontoMsg'
        ],
        [
            'check' => 'checkModCfgorderExecutePostFields',
            'do'    => 'updateModCfgorderExecutePostFields'
        ],
        [
            'check' => 'usingModCfgStoredDataWithoutRG',
            'do'    => 'updateModCfStoredDataWithRG'
        ],
        [
            'check' => 'hasModProfileEntries',
            'do'    => 'createModProfileEntries'
        ],
        [
            'check' => 'hasOldModuleItems', //nicht vorhandene Moduldatei-Eintraege entfernen
            'do'    => 'deleteOldModuleItems'
        ],
        [
            'check' => 'checkFields',
            'do'    => 'fixFields'
        ],
        [
            'check' => 'checkIndizes',
            'do'    => 'fixIndizes'
        ],
        [
            'check' => 'checkModCfgSameRevision', // Prueft auf nachgezogene Revisionsnummer
            'do'    => 'updateModCfgSameRevision'
        ],
        [ // this has to be the last step
               'check' => 'hasMultilangConfigButNoSetting',
               'do'    => 'showMultilangConfigButNoSettingMessage'
        ],
    ];

    /**
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function hasToShowNoteForStoredData(): bool
    {
        $hasAlreadyCorrectedData = Registry::getConfig()->getSystemConfigParameter('d3HeidelpayNoteShownForStoredData');

        if ($hasAlreadyCorrectedData) {
            return false;
        }

        if ($this->_checkTableNotExist('d3hpuid')) {
            return false;
        }

        if (DatabaseProvider::getDb()->getOne('SELECT COUNT(*) FROM d3hpuid')) {
            return true;
        }

        Registry::getConfig()->saveSystemConfigParameter('bool', 'd3HeidelpayNoteShownForStoredData', true);

        return false;
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function showNoteForStoredData()
    {
        $this->_confirmMessage('D3UNZERNOTESHOWNFORSTOREDDATA');

        $aDoList                  = [];
        $hasReferenceIndexCreated = false;
        $hasOxuidIndexCreated = false;
        //set indexes
        if (false == DatabaseProvider::getDb()->getOne("SHOW INDEX FROM d3transactionlog WHERE Column_name='D3REFERENCE';")) {
            $referenceQuery = 'ALTER TABLE `d3transactionlog` ADD INDEX `D3REFERENCE` (`D3REFERENCE`);';
            $aDoList[]      = $referenceQuery;
            DatabaseProvider::getDb()->execute($referenceQuery);
            $hasReferenceIndexCreated = true;
        }

        if (false == DatabaseProvider::getDb()->getOne("SHOW INDEX FROM d3hpuid WHERE Column_name='OXUID';")) {
            $d3huidQuery = 'ALTER TABLE `d3hpuid` ADD INDEX `OXUID` (`OXUID`);';
            $aDoList[]   = $d3huidQuery;
            DatabaseProvider::getDb()->execute($d3huidQuery);
            $hasOxuidIndexCreated = true;
        }

        //cleanup non linked entries
        $aDoList[] = 'DELETE FROM d3hpuid 
 WHERE NOT EXISTS(
    SELECT NULL
    FROM d3transactionlog f
    WHERE f.D3REFERENCE = OXUID);';

        //get all d3transaction entries from d3huid
        $db     = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
        $result = $db->getAll(
            'SELECT d3transactionlog.oxid AS oxid FROM d3hpuid
LEFT JOIN d3transactionlog ON d3hpuid.`OXUID` = d3transactionlog.D3REFERENCE
WHERE d3transactionlog.oxid IS NOT NULL;'
        );

        $deleteIds = [];
        /** @var TransactionlogReader $reader */
        $reader = oxNew(TransactionlogReader::class);
        foreach ($result as $logdata) {
            $transaction = oxNew(d3transactionlog::class, $reader);
            if (false == $transaction->load($logdata['oxid'])) {
                continue;
            }

            $reader      = $transaction->getTransactiondata();
            $paymentcode = strtolower($reader->getPaymentcode());
            if (false == in_array($paymentcode, ['cc.rg', 'dc.rg'])) {
                $deleteIds[] = $transaction->getFieldData('d3reference');
                continue;
            }
        }

        if (false == ($deleteIds === [])) {
            $ids = implode("','", $deleteIds);

            $aDoList[] = sprintf("DELETE FROM d3hpuid WHERE OXUID IN ('%s');", $ids);
        }

        if ($hasReferenceIndexCreated) {
            $referenceQuery = 'ALTER TABLE `d3transactionlog` DROP INDEX `D3REFERENCE`;';
            $aDoList[]      = $referenceQuery;
            DatabaseProvider::getDb()->execute($referenceQuery);
        }

        if ($hasOxuidIndexCreated) {
            $d3huidQuery = 'ALTER TABLE `d3hpuid` DROP INDEX `OXUID`;';
            $aDoList[]   = $d3huidQuery;
            DatabaseProvider::getDb()->execute($d3huidQuery);
        }

        Registry::getConfig()->saveSystemConfigParameter('bool', 'd3HeidelpayNoteShownForStoredData', true);
        $this->setInitialExecMethod(__METHOD__);
        $blUseCombinedLogItem = false == $this->hasExecute();

        return $this->_executeMultipleQueries($aDoList, $blUseCombinedLogItem);
    }

    public function checkModCfgItemOldId(): bool
    {
        $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
        $qb->select(1)
            ->from(oxNew(d3_cfg_mod::class)->getCoreTableName())
            ->where(
                $qb->expr()->eq('oxmodid', $qb->createNamedParameter('d3heidelpay'))
            )
            ->setMaxResults(1);

        return (bool) $qb->execute()->fetchOne();
    }

    public function updateModCfgItemToCurrentId(): bool
    {
        $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
        $qb->update(oxNew(d3_cfg_mod::class)->getCoreTableName())
            ->set('oxmodid', $qb->createNamedParameter($this->sModKey))
            ->where(
                $qb->expr()->eq('oxmodid', $qb->createNamedParameter('d3heidelpay'))
            );

        /** @var d3installdbcommon $dbCommon */
        $dbCommon = oxNew(d3installdbcommon::class, $this);
        return $dbCommon->executeMultipleQueries(
            [
                d3database::getInstance()->getPreparedStatementQuery(
                    $qb->getSQL(),
                    $qb->getParameters()
                )
            ]
        );
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     */
    public function checkD3hperrortextsItemsExist()
    {
        return $this->_checkUpdateFile('d3/unzer/Setup/d3hp_errortextsQuerys.php');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function insertD3hperrortextsItemsIfNotExist()
    {
        return $this->_doUpdateFile('d3/unzer/Setup/d3hp_errortextsQuerys.php');
    }

    /****************************************************
     * Tabellen anlegen                                 *
     ****************************************************/
    /**
     * @return bool TRUE, if table exsist
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function hasOldTables(): bool
    {
        if ($this->_checkTableExist('PrepaymentData')) {
            return true;
        }

        if ($this->_checkTableExist('oxhpprepaymentdata')) {
            return true;
        }

        if ($this->_checkTableExist('oxpaylogs')) {
            return true;
        }

        if ($this->_checkTableExist('oxhpuid')) {
            return true;
        }

        if ($this->_checkTableExist('oxhperrortexts')) {
            return true;
        }

        return $this->_checkTableExist('oxobject2heidelpay');
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function deleteOldTables()
    {
        $blRet = true;

        if ($this->_checkTableExist('PrepaymentData')) {
            $aRet  = $this->_dropTable('PrepaymentData');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        if ($this->_checkTableExist('oxhpprepaymentdata')) {
            $aRet  = $this->_dropTable('oxhpprepaymentdata');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        if ($this->_checkTableExist('oxobject2heidelpay')) {
            $aRet  = $this->_dropTable('oxobject2heidelpay');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        if ($this->_checkTableExist('oxhpuid')) {
            $aRet  = $this->_dropTable('oxhpuid');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        if ($this->_checkTableExist('oxhperrortexts')) {
            $aRet  = $this->_dropTable('oxhperrortexts');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        if ($this->_checkTableExist('oxpaylogs')) {
            $aRet  = $this->_dropTable('oxpaylogs');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateD3hpuidTableExist()
    {
        $blRet = true;

        if ($this->checkD3hpuidTableExist()) {
            $aRet  = $this->_addTable2('d3hpuid', $this->aFields, $this->aIndizes, 'D3 Unzer', 'MyISAM');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        return $blRet;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkD3hpuidTableExist()
    {
        return $this->_checkTableNotExist('d3hpuid');
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateD3hperrortextsTableExist()
    {
        $blRet = true;

        if ($this->checkD3hperrortextsTableExist()) {
            $aRet  = $this->_addTable2('d3hperrortexts', $this->aFields, $this->aIndizes, 'D3 Unzer', 'MyISAM');
            $blRet = $aRet['blRet'];
            $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
        }

        return $blRet;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkD3hperrortextsTableExist()
    {
        return $this->_checkTableNotExist('d3hperrortexts');
    }

    /****************************************************
     * Tabelle oxcontents & oxpayments                  *
     * if entrys not exist -> insert                    *
     ****************************************************/
    /**
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws SystemComponentException
     */
    public function checkOxcontentItemsExist(): bool
    {
        return $this->_hasExecuteFileQuery('d3/unzer/Setup/d3hp_oxcontentsQuerys.php');
    }

    /**
     * @param $sFileName
     *
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws SystemComponentException
     */
    protected function _hasExecuteFileQuery($sFileName): bool
    {
        startProfile(__METHOD__);
        $result = false;

        $sCurrentShopId = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $installUpdateFile = oxNew(d3installupdatefile::class, $this);
            $aList = $installUpdateFile->parseUpdateFile($sFileName);
            foreach ($aList['check'] as $sCheckQuery) {
                if (DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getOne($sCheckQuery)) {
                    $result = true;
                    break;
                }
            }
        }

        $this->_changeToShop($sCurrentShopId);
        stopProfile(__METHOD__);

        return $result;
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function insertOxcontentItemsIfNotExist()
    {
        Registry::getSession()->setVariable('d3hp_update_skip_oxcontents', 1);

        return $this->_executeFileQueries('d3/unzer/Setup/d3hp_oxcontentsQuerys.php');
    }

    /**
     * @param $sFileName
     *
     * @return bool
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    protected function _executeFileQueries($sFileName)
    {
        startProfile(__METHOD__);

        $blRet   = true;
        $aDoList = [];

        $sCurrentShopId = Registry::getConfig()->getShopId();

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $installUpdateFile = oxNew(d3installupdatefile::class, $this);
            $aList = $installUpdateFile->parseUpdateFile($sFileName);

            $oD3Str = oxNew(d3str::class);
            $oD3Str->convert2utf_8($aList, false);

            foreach ($aList['check'] as $sKey => $sCheckQuery) {
                if (DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getOne($sCheckQuery)) {
                    $aList['do'][$sKey] = utf8_encode($aList['do'][$sKey]);
                    $aDoList[]          = $aList['do'][$sKey];
                }
            }
        }

        $this->_changeToShop($sCurrentShopId);

        if ($aDoList && is_array($aDoList) && count($aDoList)) {
            $this->setInitialExecMethod(__METHOD__);
            $blUseCombinedLogItem = !$this->hasExecute();
            $blRet                = $this->_executeMultipleQueries($aDoList, $blUseCombinedLogItem);
        }

        stopProfile(__METHOD__);

        return $blRet;
    }

    /****************************************************
     * Tabelle oxcontents                               *
     * No Autoupdate if exist -> Message                *
     ****************************************************/

    /**
     * @return bool
     * @throws DatabaseConnectionException
     */
    public function checkOxpaymentsItemsExist()
    {
        return $this->_checkUpdateFile('d3/unzer/Setup/d3hp_oxpaymentsQuerys.php');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function insertOxpaymentsItemsIfNotExist()
    {
        return $this->_doUpdateFile('d3/unzer/Setup/d3hp_oxpaymentsQuerys.php');
    }

    /**
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DoctrineDriverException
     * @throws DoctrineException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function checkOxcontentEntrysExist(): bool
    {
        $blRet       = false;
        $bSkipUpdate = Registry::getSession()->getVariable('d3hp_update_skip_oxcontents');

        if ($bSkipUpdate) {
            return $blRet;
        }

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */

            /** @lang MySQL */
            /** @var QueryBuilder $qb */
            $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
            $qb->select('count(*)')
                ->from('oxcontents')
                ->where(
                    $qb->expr()->and(
                        $qb->expr()->in(
                            'oxloadid',
                            [
                                $qb->createNamedParameter('d3_hp_vorkassemail_cust_text'),
                                $qb->createNamedParameter('d3_hp_vorkassemail_cust_subject'),
                                $qb->createNamedParameter('d3_hp_vorkassemail_cust_plain'),
                                $qb->createNamedParameter('d3_hp_vorkassemail_owner_text'),
                                $qb->createNamedParameter('d3_hp_vorkassemail_owner_subject'),
                                $qb->createNamedParameter('d3_hp_vorkassemail_owner_plain'),
                                $qb->createNamedParameter('d3_hp_chargeback_owner_plain'),
                                $qb->createNamedParameter('d3_hp_partlypaid_owner_plain')
                            ]
                        ),
                        $qb->expr()->eq(
                            'oxshopid',
                            $qb->createNamedParameter($oShop->getId())
                        )
                    )
                );

            $blInstallationIsNotComplete = $this->checkModCfgSameRevision();
            if (!$qb->execute()->fetchOne()) {
                continue;
            }

            if (!$blInstallationIsNotComplete) {
                continue;
            }

            $blRet = true;
        }

        return $blRet;
    }

    /**
     * Message for manuelle Updates for CMS-Sites
     *
     * @return bool
     */
    public function showMessageForCustomerToUpdateManually()
    {
        $sMessage = 'D3_UNZER_UPDATE_OXCONTENTITEMS';
        $blRet    = $this->_confirmMessage($sMessage);

        Registry::getSession()->setVariable('d3hp_update_skip_oxcontents', 1);

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateHPerrortextcontent()
    {
        $blRet = false;

        if ($this->checkHPerrortextcontent()) {
            $aWhere = [
                'oxcode' => '800.100.153',
            ];

            if ($this->_checkTableItemNotExist('d3hperrortexts', $aWhere)) {
                $aInsertFields = [
                    'OXID'       => [
                        'content'      => "366",
                        'force_update' => true,
                        'use_quote'    => false,
                    ],
                    'OXCODE'     => [
                        'content'      => '800.100.153',
                        'force_update' => true,
                        'use_quote'    => true,
                    ],
                    'OXTYPE'     => [
                        'content'      => "2",
                        'force_update' => true,
                        'use_quote'    => true,
                    ],
                    'OXTITLE'    => [
                        'content'      => "Ung&uuml;ltige Pr&uuml;fziffer",
                        'force_update' => true,
                        'use_quote'    => true,
                    ],
                    'OXTITLE_1'  => [
                        'content'      => "transaction declined (invalid CVV)",
                        'force_update' => false,
                        'use_quote'    => false,
                    ],
                    'OXREALTEXT' => [
                        'content'      => "transaction declined (invalid CVV)",
                        'force_update' => true,
                        'use_quote'    => true,
                    ]
                ];
                $aRet          = $this->_updateTableItem2('d3hperrortexts', $aInsertFields, $aWhere);
                $blRet         = $aRet['blRet'];

                $this->setActionLog('SQL', $aRet['sql'], __METHOD__);
                $this->setUpdateBreak(false);
            }
        }

        // if actually updated don't update entry a second time
        Registry::getSession()->setVariable('d3hp_HPerrortext_skip_update', 1);

        return $blRet;
    }

    /**
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkHPerrortextcontent(): bool
    {
        $blRet                         = false;
        $bSkipUpdate                   = Registry::getSession()->getVariable('d3hp_HPerrortext_skip_update');
        $bSkipUpdateCauseTableNotExist = !$this->checkD3hperrortextsTableExist();

        if ($bSkipUpdate || $bSkipUpdateCauseTableNotExist) {
            return $blRet;
        }

        $aWhere = [
            'oxcode' => '800.100.153',
        ];
        $blRet1 = $this->_checkTableItemNotExist('d3hperrortexts', $aWhere);

        $blRetX = $this->checkModCfgSameRevision();

        if ($blRet1 && $blRetX) {
            return true;
        }

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkRenameD3Tables()
    {
        return $this->checkRenameTables();
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function renameD3Tables()
    {
        /** @param string $sMethodName */
        return $this->fixRenameTables(__METHOD__);
    }

    /**
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function showForChangeHaendlerKontoMsg(): bool
    {
        $oConfirmMessage = oxNew(d3installconfirmmessage::class, $this);
        if (false == $this->hasExecute()) {
            $oConfirmMessage->showConfigConfirmMessage('blD3checkForModHaendlerKontoMsg', 'D3_UNZER_UPDATE_CHANGE_HAENDLERKONTO');
        }

        if ($this->hasExecute() && $this->checkForChangeHaendlerKontoMsg()) {
            $sCurrentShopid = Registry::getConfig()->getShopId();

            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                /** @var $oShop BaseModel */
                $this->_changeToShop($oShop->getId());
                $oConfirmMessage->setConfirmMessageConfigRequest('blD3checkForModHaendlerKontoMsg', 1);
            }

            $this->_changeToShop($sCurrentShopid);
        }

        return true;
    }

    /**
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function checkForChangeHaendlerKontoMsg(): bool
    {
        $sCurrentShopid = Registry::getConfig()->getShopId();

        $result = false;
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $moduleConfiguration = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $moduleConfiguration) {
                continue;
            }

            $oldVersionNumber = (int)$moduleConfiguration->getFieldData('oxversionnum');
            //check if old module version is new installation or older than 4.0.5.0
            if ($oldVersionNumber <= 0) {
                continue;
            }

            if ($oldVersionNumber >= 67_110_144) {
                continue;
            }

            $oConfirmMessage = oxNew(d3installconfirmmessage::class, $this);
            if (false == $oConfirmMessage->hasConfirmMessageConfigRequest('blD3checkForModHaendlerKontoMsg')) {
                $result = true;
                break;
            }
        }

        $this->_changeToShop($sCurrentShopid);

        return $result;
    }

    /**
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function checkModCfgorderExecutePostFields(): bool
    {
        $blReturn       = false;
        $sCurrentShopid = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $moduleConfiguration = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $moduleConfiguration) {
                continue;
            }

            if (false == is_string(
                $moduleConfiguration->getValue('d3heidelpay_orderExecutePostFields')
            ) || strlen(
                $moduleConfiguration->getValue('d3heidelpay_orderExecutePostFields')
            ) == 0
            ) {
                $blReturn = true;
            }
        }

        $this->_changeToShop($sCurrentShopid);

        return $blReturn;
    }

    /**
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function updateModCfgorderExecutePostFields(): bool
    {
        $aDefaultConfig = unserialize(rawurldecode(base64_decode($this->sBaseValue)));

        $sCurrentShopid = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            /** @var $oShop BaseModel */
            /** @var d3_cfg_mod $moduleConfiguration */
            $moduleConfiguration = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $moduleConfiguration) {
                continue;
            }

            $moduleConfiguration->setValue(
                'd3heidelpay_orderExecutePostFields',
                $aDefaultConfig->d3_cfg_mod__d3heidelpay_orderExecutePostFields
            );

            if ($this->hasExecute()) {
                $moduleConfiguration->save();
            }

            $sQuery = 'UPDATE ' . $moduleConfiguration->getCoreTableName() //
                . ' SET oxvalue = ' //
                . DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->quote($moduleConfiguration->getFieldData('oxvalue')) //
                . " WHERE oxmodid = " . DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->quote($this->sModKey) //
                . " AND oxshopid = " . DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->quote($oShop->getId()) . ";";

            $this->setActionLog(
                'SQL',
                $sQuery,
                $this->getInitialExecMethod(__METHOD__)
            );
        }

        $this->_changeToShop($sCurrentShopid);

        return true;
    }

    /**
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function usingModCfgStoredDataWithoutRG(): bool
    {
        startProfile(__METHOD__);

        $return        = false;
        $currentShopId = Registry::getConfig()->getShopId();

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());

            $modConfig = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $modConfig) {
                continue;
            }

            $config = Registry::getConfig();

            if ($config->getShopConfVar('d3HeidelpayNoteStoredDataWithoutRG')) {
                continue;
            }

            if (!$modConfig->getValue('d3heidelpay_blShowStoredHPData')) {
                continue;
            }

            if (false != $modConfig->getValue('d3heidelpay_blCardsUseRG')) {
                continue;
            }

            $return = true;
        }

        $this->_changeToShop($currentShopId);

        stopProfile(__METHOD__);

        return $return;
    }

    /**
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function updateModCfStoredDataWithRG(): bool
    {
        startProfile(__METHOD__);

        $return        = false;
        $currentShopId = Registry::getConfig()->getShopId();

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $modConfig = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $modConfig) {
                continue;
            }

            $config = $oShop->getConfig();

            if ($config->getShopConfVar('d3HeidelpayNoteStoredDataWithoutRG')) {
                continue;
            }

            if ($modConfig->getValue('d3heidelpay_blShowStoredHPData') && false == $modConfig->getValue('d3heidelpay_blCardsUseRG')) {
                $oConfirmMessage = oxNew(d3installconfirmmessage::class, $this);
                $message         = Registry::getLang()->translateString('D3UNZERNOTESTOREDDATAWITHOUTRG');
                $message         .= Registry::getLang()->translateString('HELP_D3DYN_HEIDELPAY_PARAM_CARDS_USE_RG');

                $oConfirmMessage->confirmCustomMessage($message);

                if ($this->hasExecute()) {
                    $modConfig->setValue('d3heidelpay_blCardsUseRG', true);
                    $modConfig->save();
                    $config->saveShopConfVar('bool', 'd3HeidelpayNoteStoredDataWithoutRG', true);
                }
            }
        }

        $this->_changeToShop($currentShopId);

        stopProfile(__METHOD__);

        return $return;
    }

    /**
     * 0004566: Korrektur der Autoinstallation bei einem Modulupdate
     *
     * @throws DatabaseConnectionException
     */
    public function hasEmptyCMSShopId(): bool
    {
        $oDb                     = DatabaseProvider::getDb();
        $sHasEmptyCMSShopIdQuery = <<<MYSQL
SELECT count(1) FROM `oxcontents`
WHERE
    `OXLOADID` LIKE {$oDb->quote('d3%')}
    AND `OXSHOPID` IN ('0', '')
MYSQL;

        return (bool)$oDb->getOne($sHasEmptyCMSShopIdQuery);
    }

    /**
     * 0004566: Korrektur der Autoinstallation bei einem Modulupdate
     *
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function removeEmptyCMSShopId()
    {
        // ggf deleteTableitem benutzen?
        $oDb                     = DatabaseProvider::getDb();
        $sHasEmptyCMSShopIdQuery = <<<MYSQL
DELETE FROM `oxcontents`
WHERE
    `OXLOADID` LIKE {$oDb->quote('d3%')}
    AND `OXSHOPID` IN ('0', '')
MYSQL;
        $return                  = $this->sqlExecute($sHasEmptyCMSShopIdQuery);
        $this->setActionLog('SQL', $sHasEmptyCMSShopIdQuery, __METHOD__);

        return $return;
    }

    /**
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function hasMultilangConfigButNoSetting(): bool
    {
        startProfile(__METHOD__);

        $return        = false;
        $currentShopId = Registry::getConfig()->getShopId();

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            if ($currentShopId != $oShop->getId()) {
                continue;
            }

            $config = Registry::getConfig();

            if ($config->getShopConfVar('d3hp_allowMultipleLanguages', null, 'd3unzer')) {
                continue;
            }

            if (Registry::getSession()->getVariable('d3heidelpay_skip_multilangcheck' . $currentShopId)) {
                return false;
            }

            $actuallCalledMethod = Registry::getConfig()->getActiveView()->getFncName();

            if ('autoinstall' === strtolower($actuallCalledMethod)) {
                Registry::getSession()->setVariable('d3heidelpay_skip_multilangcheck' . $currentShopId, true);

                return false;
            }

            $modConfig = d3_cfg_mod::getNoCache($this->sModKey);
            if (false === $modConfig) {
                continue;
            }

            $moduleConfig = oxNew(d3_cfg_mod::class);
            $moduleConfig->setEnableMultilang(false);
            $moduleConfig->init();
            $moduleConfig->load($modConfig->getId());
            $languageCount = count((array)$config->getShopConfVar('aLanguages'));

            for ($i = 1; $languageCount > $i; ++$i) {
                $oxvalue = $moduleConfig->getFieldData('oxvalue_' . $i);
                if (empty($oxvalue)) {
                    continue;
                }

                $return = true;
                break 2;
            }
        }

        stopProfile(__METHOD__);

        return $return;
    }

    /**
     * @throws ConnectionException
     * @throws SystemComponentException
     */
    public function showMultilangConfigButNoSettingMessage(): bool
    {
        startProfile(__METHOD__);

        $currentShopId = Registry::getConfig()->getShopId();

        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            if ($currentShopId != $oShop->getId()) {
                continue;
            }

            $actuallCalledMethod = Registry::getConfig()->getActiveView()->getFncName();

            if ('autoinstall' === strtolower($actuallCalledMethod)) {
                return true;
            }

            /** @var $oShop BaseModel */
            $this->_confirmMessage('D3UNZER_MULTIPLE_LANGUAGECONFIGURATIONS_FOUND');
            if ($this->hasExecute()) {
                Registry::getSession()->setVariable('d3heidelpay_skip_multilangcheck' . $currentShopId, true);
            }

            return true;
        }

        stopProfile(__METHOD__);

        return false;
    }

    /**
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function hasModProfileEntries(): bool
    {
        $blReturn       = false;
        $sCurrentShopid = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            /** @var ModProfile $modProfile */
            $modProfile = oxNew(ModProfile::class);
            /** @var Factory $factory */
            $factory = oxNew(Factory::class)->setModuleConfiguration(d3_cfg_mod::getNoCache('d3unzer'));
            $oxid    = $factory->getModProfileId();
            if ($modProfile->exists($oxid)) {
                continue;
            }

            $blReturn = true;
            break;
        }

        $this->_changeToShop($sCurrentShopid);

        return $blReturn;
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function createModProfileEntries(): bool
    {
        $blReturn       = false;
        $sCurrentShopid = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            /** @var ModProfile $modProfile */
            $modProfile = oxNew(ModProfile::class);
            $d3CfgMod = d3_cfg_mod::getNoCache('d3unzer');
            $factory  = oxNew(Factory::class)->setModuleConfiguration($d3CfgMod);
            $oxid     = $factory->getModProfileId();
            if ($modProfile->exists($oxid)) {
                continue;
            }

            $oldPaymentlist = $d3CfgMod->getValue('d3heidelpay_aPaymentList');
            $oxValue = '';
            if (empty($oldPaymentlist)) {
                $oxValue = 'TyUzQTglM0ElMjJzdGRDbGFzcyUyMiUzQTglM0ElN0JzJTNBMzIlM0ElMjJjNjkzNWI3ZDcwNTFjY2Y3NjkxNzBhNjgxZTdkODc4MiUyMiUzQnMlM0E0NjIlM0ElMjIlN0IlMjJjYXJkVHlwZVRpbWVvdXQlMjIlM0EwJTJDJTIyaGVpZGVscGF5UGF5bWVudENsYXNzbmFtZSUyMiUzQSUyMkQzJTVDJTVDVW56ZXIlNUMlNUNBcHBsaWNhdGlvbiU1QyU1Q01vZGVsJTVDJTVDUGF5bWVudCU1QyU1Q0NhcmRzJTIyJTJDJTIyaXNVc2luZ1JlZ2lzdHJhdGlvbiUyMiUzQW51bGwlMkMlMjJpc1VzaW5nU3RvcmVkQ2FyZERhdGElMjIlM0FudWxsJTJDJTIyaWQlMjIlM0ElMjJjNjkzNWI3ZDcwNTFjY2Y3NjkxNzBhNjgxZTdkODc4MiUyMiUyQyUyMmlzQWN0aXZlJTIyJTNBJTIyMSUyMiUyQyUyMnRpdGxlJTIyJTNBJTIyS3JlZGl0a2FydGUlMjAlNUMlMkYlMjBEZWJpdGthcnRlJTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJjYXJkcyUyMiUyQyUyMmNoYW5uZWwlMjIlM0ElMjIlMjIlMkMlMjJ0cmFuc2FjdGlvblR5cGUlMjIlM0ElMjIlMjIlMkMlMjJpc1Rlc3RDb25maWclMjIlM0ElMjIxJTIyJTJDJTIyb3hpZHBheW1lbnRJZHMlMjIlM0ElNUIlNUQlMkMlMjJza2lwUHJvcGVydGllcyUyMiUzQSU1QiUyMm94aWRwYXltZW50SWRzJTIyJTJDJTIyc2tpcFByb3BlcnRpZXMlMjIlMkMlMjJoZWlkZWxwYXlQYXltZW50Q2xhc3NuYW1lJTIyJTVEJTJDJTIyb3hpZCUyMiUzQSUyMmM2OTM1YjdkNzA1MWNjZjc2OTE3MGE2ODFlN2Q4NzgyJTIyJTdEJTIyJTNCcyUzQTMyJTNBJTIyZGM1MjQ0OTNiMjFjMDBhMjE5YmRmODc3NTY1NjU0ODMlMjIlM0JzJTNBMzQ4JTNBJTIyJTdCJTIyaGVpZGVscGF5UGF5bWVudENsYXNzbmFtZSUyMiUzQSUyMmRpcmVjdGRlYml0JTIyJTJDJTIyaWQlMjIlM0ElMjJkYzUyNDQ5M2IyMWMwMGEyMTliZGY4Nzc1NjU2NTQ4MyUyMiUyQyUyMmlzQWN0aXZlJTIyJTNBJTIyMSUyMiUyQyUyMnRpdGxlJTIyJTNBJTIyU2VwYSUyMExhc3RzY2hyaWZ0JTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJkaXJlY3RkZWJpdHVuc2VjdXJlZCUyMiUyQyUyMmNoYW5uZWwlMjIlM0ElMjIzMUhBMDdCQzgxNDJDNUExNzE3NDlBNjBEOTc5QjZFNCUyMiUyQyUyMnRyYW5zYWN0aW9uVHlwZSUyMiUzQSUyMiUyMiUyQyUyMmlzVGVzdENvbmZpZyUyMiUzQSUyMjElMjIlMkMlMjJveGlkcGF5bWVudElkcyUyMiUzQSU1QiU1RCUyQyUyMnNraXBQcm9wZXJ0aWVzJTIyJTNBJTVCJTIyb3hpZHBheW1lbnRJZHMlMjIlMkMlMjJza2lwUHJvcGVydGllcyUyMiUyQyUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlNUQlN0QlMjIlM0JzJTNBMzIlM0ElMjIwYThkNDczZDZlYzA2MGU3OTBmZGUwMzBjYTdjYjBmNSUyMiUzQnMlM0EzNzElM0ElMjIlN0IlMjJoZWlkZWxwYXlQYXltZW50Q2xhc3NuYW1lJTIyJTNBJTIycHJlcGF5bWVudCUyMiUyQyUyMmlkJTIyJTNBJTIyMGE4ZDQ3M2Q2ZWMwNjBlNzkwZmRlMDMwY2E3Y2IwZjUlMjIlMkMlMjJpc0FjdGl2ZSUyMiUzQSUyMjElMjIlMkMlMjJ0aXRsZSUyMiUzQSUyMlZvcmthc3NlJTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJQcmVwYXltZW50JTIyJTJDJTIyY2hhbm5lbCUyMiUzQSUyMjMxSEEwN0JDODE0MkM1QTE3MTc0OUE2MEQ5NzlCNkU0JTIyJTJDJTIydHJhbnNhY3Rpb25UeXBlJTIyJTNBJTIyJTIyJTJDJTIyaXNUZXN0Q29uZmlnJTIyJTNBJTIyMSUyMiUyQyUyMm94aWRwYXltZW50SWRzJTIyJTNBJTVCJTVEJTJDJTIyc2tpcFByb3BlcnRpZXMlMjIlM0ElNUIlMjJveGlkcGF5bWVudElkcyUyMiUyQyUyMnNraXBQcm9wZXJ0aWVzJTIyJTJDJTIyaGVpZGVscGF5UGF5bWVudENsYXNzbmFtZSUyMiU1RCUyQyUyMm94aWQlMjIlM0ElMjIwYThkNDczZDZlYzA2MGU3OTBmZGUwMzBjYTdjYjBmNSUyMiU3RCUyMiUzQnMlM0EzMiUzQSUyMmJhZDYwNTJlZWZmMTczNDYzNjVjYjZhZWViZTVjNzhhJTIyJTNCcyUzQTM0MSUzQSUyMiU3QiUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlM0ElMjJpbnZvaWNlVW5zZWN1cmVkJTIyJTJDJTIyaWQlMjIlM0ElMjJiYWQ2MDUyZWVmZjE3MzQ2MzY1Y2I2YWVlYmU1Yzc4YSUyMiUyQyUyMmlzQWN0aXZlJTIyJTNBJTIyMSUyMiUyQyUyMnRpdGxlJTIyJTNBJTIyUmVjaG51bmclMjIlMkMlMjJwYXltZW50VHlwZSUyMiUzQSUyMmludm9pY2V1bnNlY3VyZWQlMjIlMkMlMjJjaGFubmVsJTIyJTNBJTIyMzFIQTA3QkM4MTQyQzVBMTcxNzQ5QTYwRDk3OUI2RTQlMjIlMkMlMjJ0cmFuc2FjdGlvblR5cGUlMjIlM0ElMjIlMjIlMkMlMjJpc1Rlc3RDb25maWclMjIlM0ElMjIxJTIyJTJDJTIyb3hpZHBheW1lbnRJZHMlMjIlM0ElNUIlNUQlMkMlMjJza2lwUHJvcGVydGllcyUyMiUzQSU1QiUyMm94aWRwYXltZW50SWRzJTIyJTJDJTIyc2tpcFByb3BlcnRpZXMlMjIlMkMlMjJoZWlkZWxwYXlQYXltZW50Q2xhc3NuYW1lJTIyJTVEJTdEJTIyJTNCcyUzQTMyJTNBJTIyYmE4YTNjYjQ1YjkzMDU0YWFhNGM0ZDgzMzJhMjg1MjMlMjIlM0JzJTNBMzM5JTNBJTIyJTdCJTIyc1ZBVHJhbnNUeXBlJTIyJTNBbnVsbCUyQyUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlM0ElMjJwYXlwYWwlMjIlMkMlMjJpZCUyMiUzQSUyMmJhOGEzY2I0NWI5MzA1NGFhYTRjNGQ4MzMyYTI4NTIzJTIyJTJDJTIyaXNBY3RpdmUlMjIlM0ElMjIxJTIyJTJDJTIydGl0bGUlMjIlM0ElMjJQYXlwYWwlMjIlMkMlMjJwYXltZW50VHlwZSUyMiUzQSUyMnBheXBhbCUyMiUyQyUyMmNoYW5uZWwlMjIlM0ElMjIzMUhBMDdCQzgxNDJDNUExNzE3NDlBNjBEOTc5QjZFNCUyMiUyQyUyMnRyYW5zYWN0aW9uVHlwZSUyMiUzQSUyMiUyMiUyQyUyMmlzVGVzdENvbmZpZyUyMiUzQSUyMjElMjIlMkMlMjJveGlkcGF5bWVudElkcyUyMiUzQSU1QiU1RCUyQyUyMnNraXBQcm9wZXJ0aWVzJTIyJTNBJTVCJTIyb3hpZHBheW1lbnRJZHMlMjIlMkMlMjJza2lwUHJvcGVydGllcyUyMiUyQyUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlNUQlN0QlMjIlM0JzJTNBMzIlM0ElMjIyNTA2ODkyODAyNzAzN2E0MzI2YWQxYTI0Zjg0MDcxOCUyMiUzQnMlM0EzMTklM0ElMjIlN0IlMjJoZWlkZWxwYXlQYXltZW50Q2xhc3NuYW1lJTIyJTNBJTIyc29mb3J0JTIyJTJDJTIyaWQlMjIlM0ElMjIyNTA2ODkyODAyNzAzN2E0MzI2YWQxYTI0Zjg0MDcxOCUyMiUyQyUyMmlzQWN0aXZlJTIyJTNBJTIyMSUyMiUyQyUyMnRpdGxlJTIyJTNBJTIyU29mb3J0JTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJzb2ZvcnQlMjIlMkMlMjJjaGFubmVsJTIyJTNBJTIyMzFIQTA3QkM4MTQyQzVBMTcxNzQ5Q0RBQTQzMzY1RDIlMjIlMkMlMjJ0cmFuc2FjdGlvblR5cGUlMjIlM0ElMjIlMjIlMkMlMjJpc1Rlc3RDb25maWclMjIlM0ElMjIxJTIyJTJDJTIyb3hpZHBheW1lbnRJZHMlMjIlM0ElNUIlNUQlMkMlMjJza2lwUHJvcGVydGllcyUyMiUzQSU1QiUyMm94aWRwYXltZW50SWRzJTIyJTJDJTIyc2tpcFByb3BlcnRpZXMlMjIlMkMlMjJoZWlkZWxwYXlQYXltZW50Q2xhc3NuYW1lJTIyJTVEJTdEJTIyJTNCcyUzQTMyJTNBJTIyYmRkYjU3YTQzNGY0ZTExNTZiODc4OGY5NWFlMWFiYTMlMjIlM0JzJTNBMzY0JTNBJTIyJTdCJTIyaGVpZGVscGF5UGF5bWVudENsYXNzbmFtZSUyMiUzQSUyMmdpcm9wYXklMjIlMkMlMjJpZCUyMiUzQSUyMmJkZGI1N2E0MzRmNGUxMTU2Yjg3ODhmOTVhZTFhYmEzJTIyJTJDJTIyaXNBY3RpdmUlMjIlM0ElMjIxJTIyJTJDJTIydGl0bGUlMjIlM0ElMjJHaXJvcGF5JTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJnaXJvcGF5JTIyJTJDJTIyY2hhbm5lbCUyMiUzQSUyMjMxSEEwN0JDODE0MkM1QTE3MTc0MDE2NkFGMjc3RTAzJTIyJTJDJTIydHJhbnNhY3Rpb25UeXBlJTIyJTNBJTIyJTIyJTJDJTIyaXNUZXN0Q29uZmlnJTIyJTNBJTIyMSUyMiUyQyUyMm94aWRwYXltZW50SWRzJTIyJTNBJTVCJTVEJTJDJTIyc2tpcFByb3BlcnRpZXMlMjIlM0ElNUIlMjJveGlkcGF5bWVudElkcyUyMiUyQyUyMnNraXBQcm9wZXJ0aWVzJTIyJTJDJTIyaGVpZGVscGF5UGF5bWVudENsYXNzbmFtZSUyMiU1RCUyQyUyMm94aWQlMjIlM0ElMjJiZGRiNTdhNDM0ZjRlMTE1NmI4Nzg4Zjk1YWUxYWJhMyUyMiU3RCUyMiUzQnMlM0EzMiUzQSUyMmE0N2E2ODAxOGFhYjYxOWU5OTVlNjc2NDk2YzRkZDJlJTIyJTNCcyUzQTQ3OSUzQSUyMiU3QiUyMnNEM0hwSEZPcmRlclBlbmRpbmdUaW1lJTIyJTNBbnVsbCUyQyUyMnNEM0hwSEZPcmRlckNhbmNlbFR5cGUlMjIlM0FudWxsJTJDJTIyc0QzSHBIRk9yZGVyTGltaXQlMjIlM0FudWxsJTJDJTIyYmxEM0hwSEZTZXRaZXJvT3JkZXJOdW1iZXIlMjIlM0FmYWxzZSUyQyUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlM0ElMjJpZGVhbCUyMiUyQyUyMmlkJTIyJTNBJTIyYTQ3YTY4MDE4YWFiNjE5ZTk5NWU2NzY0OTZjNGRkMmUlMjIlMkMlMjJpc0FjdGl2ZSUyMiUzQSUyMjElMjIlMkMlMjJ0aXRsZSUyMiUzQSUyMmlEZWFsJTIyJTJDJTIycGF5bWVudFR5cGUlMjIlM0ElMjJpZGVhbCUyMiUyQyUyMmNoYW5uZWwlMjIlM0ElMjIzMUhBMDdCQzgxNDJDNUExNzE3NDRCNTZFNjEyODFFNSUyMiUyQyUyMnRyYW5zYWN0aW9uVHlwZSUyMiUzQSUyMiUyMiUyQyUyMmlzVGVzdENvbmZpZyUyMiUzQSUyMjElMjIlMkMlMjJveGlkcGF5bWVudElkcyUyMiUzQSU1QiU1RCUyQyUyMnNraXBQcm9wZXJ0aWVzJTIyJTNBJTVCJTIyb3hpZHBheW1lbnRJZHMlMjIlMkMlMjJza2lwUHJvcGVydGllcyUyMiUyQyUyMmhlaWRlbHBheVBheW1lbnRDbGFzc25hbWUlMjIlNUQlMkMlMjJveGlkJTIyJTNBJTIyYTQ3YTY4MDE4YWFiNjE5ZTk5NWU2NzY0OTZjNGRkMmUlMjIlN0QlMjIlM0IlN0Q';
            }

            $modProfile->setId($oxid);
            $modProfile->assign([
                    'oxactive'   => '1',
                    'oxtitle'    => 'json configuration',
                    'oxmodid'    => $this->sModKey,
                    'oxvalue'    => $oxValue,
                ]);

            if ($modProfile->save()) {
                $blReturn = true;
            }
        }

        $this->_changeToShop($sCurrentShopid);

        return $blReturn;
    }
}
