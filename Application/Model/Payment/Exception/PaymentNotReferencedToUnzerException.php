<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
