<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
