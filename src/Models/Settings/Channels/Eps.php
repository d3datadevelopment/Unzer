<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
