<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
