<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
