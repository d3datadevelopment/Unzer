<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
