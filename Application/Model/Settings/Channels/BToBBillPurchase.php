<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
