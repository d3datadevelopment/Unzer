<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
