<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
