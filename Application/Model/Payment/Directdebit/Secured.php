<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
