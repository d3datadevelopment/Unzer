<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/xgiSmJWjLZVKpgXBlrZ9rcZeiWmgh6ndOaQsETAGD6BJ75dKDlfD67ucJk+L2tdV7DISbM1fORSZWT1ODZnXh0D8bGUFOMMdxYHjXcCW0exOSasiNKpvBsluYtad9pvqGRjMYSvAVp0wJNmVnfkSrcbiXCymHvKPGkTSGwkCGigCvZZNFzrKMvi/NRWgnQ0o6ZO8oEBMOMQKdrqJ9++UJDcQIDUg5BBUCAAAAAACAADJeSeOMycGdJE0f8nLlzuhj4uzziVxy54562nE422Vs/ChhVQbrPiFFWhcFCUrA884jysvhJv1jBvvU/vnfqQ4nCpmHP3DajLLV9Y18gCKybTM7GasLclBctDLv7YXFj9MA+deFNCBgE81Cm5z9JCeV5oLh82I9QPBdO+xmk7pRF7BJKTOWw3A7IyqFBN+zDBSAIvRWhUYa3jo1bXxd7JxpBS4Dwk8c+v3vljo+WsmdlJe3Kt8+oOFrMW8zxfzO2s+87pgb2D4vYx2Tg3dte2kBvdOCZUDWyJ6/j+NcmawFxhuW0d8lmg1ZKH+hVTQga4S82MOOucB/C3aZlNbX5NfwWdPGrin8iZZdUMSoqFokZsDGbKGChj0TQ7H7VtlGggiqePm0aBBF0QvELeWf7t4hrmfOt5Jdz/POiNnnjkkW9FuVVJjfcCXTsPtUJ7lxyvpR/HzUNwLuYzlJEjnO7pUw0TjWHilKDzWxO/2xvTFHPTl72nTWW5HzcQ371KQhFULofo/wdTRIxPeyaxgfp4q0cXRhuMIDMTjSSCEUqRo4ZVCMukwJN1xwvtjtbNkgCcpDc5Xm3WCTidZylfQQs5xRcCQITSt5ofOBkReU0Lp5DM8JpcLT2Ud6fnfQGbBO+HduJa2+SFQQi3JZPxZL+IgW+KpuMRV7tfFfXOI5hgjsVEAAAD4AQAAcLfYyhrJI6rEkO2Q2M1CriZLxmIB3yfaWCIcZGTg/luLSt/0mtPmYdx1kukuzovmBWlzO+wdv3l56O7SHI12RdRSKyoEeQ9ajsocYvCH/65TcedVF2rRuON8lUu24RM/vT1BXFoYr6XknBLgp+jSwIWuVLCdbAGU00W/+yzrf2cvOU0udXCNpnwUbRG1GmOc7f/uU8j5XK/lWfxCcZORgNZKl12TP+BBAbQmXTdkYquyl5HXneBcULOWM59tJ9GZcI1ftm6INXWpV/oJc64jOZIRLuXKSgSeXUBuxNBt+cgJmSVnMd+JJLrSqBll6iPPbx86H2/jf6r0jwkLYIhae3oV/cSugI0QAXjFp/qQL/ns9H2lMH38oN44voTxdM9Qo4VEzPb6L1BWNcRChu/owgeNZF3qQtPrhUn8IfmCQmPvDbemT5k901cVYwUzTDza6QtC7+EdX0Hqgn0Pa3HcHvsj/GxK9U4ANABqcR4iqEiOoA/l35gz50Mpr/IxbQJmXPcVpHgsaG6YnNqfLTqTyQyEflk8BBYtT00Up5eStXpkCWDUb4gGr2DiO3a6DdvyPDTs7iZ1jUX/iSQPMsiRWOLBWn0IVOQFNzX/WQcHqPQzV6Bk+Adui/Isij9/iMDzQjC988YF8aszWT8/KgrHduQFq9zaXH4TUgAAAPgBAABiJ/dKSP5r4GzzsnMwRUzIw0pXj8kUNSyC58uqIG1PbFtyrYTcI4GTiz39qcbKQFJpzO/gmMUt3y7MaO2Cxop32HRhjUvIEAoyH/MKhLDgRPYCHrz1YRfIqvQh2263XXiYLeMPaJlaAsbDj9MocrHbYGar4vv5mEUkP4Pb4LYtKCr1q4sUHT0qwLdyo+mtUlbQmocuzC16SZ+QMvSimk/6ooRw74/ghwwXedOCnJNK/pNJd/5sRlwmuZVBB7JDsm9M9UmRxcWQqubchJXynJmqr/zQ5Yc+q2FSyVdXJhXB+ipnIJkFVIcgeE1OKcgKdPTgNC6q8vAv2FdTBaXwOJaQRCaq0D6OFQRgBIMMVNsEXNRRd/3SKS+BEoUX/V9w3Y0U1h93xhqfa+rXBkaQo70rekUBeEABQc23D76d8LWejERa/0FLSf/497DiUaNH2YV5CE7iZwsdtT2w17u+LV34Xdx17xdmIrgdVrlo4exKtuXDFfT65xwp4T/xLR79W5UWylBCNTzVcoO5ptbXpcnRC+dCLR5tmjXkCvNIc87Z7Tf6hkrIBSlXWfVnrPlLtQVj8XTjgZRU62SSOTEPkP5MbHbSKcdHa2w5Tyg2wyf2U81EyOKUuN0pL/h2yPeEcnQ9JtvBN1K/jh14QBjwh2Bmzl8OTlC83N4AAAAA');
