<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
