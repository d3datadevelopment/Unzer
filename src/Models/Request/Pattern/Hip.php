<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
