<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
