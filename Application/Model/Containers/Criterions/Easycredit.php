<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
