<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
