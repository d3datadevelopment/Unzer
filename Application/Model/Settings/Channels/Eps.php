<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
