<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');