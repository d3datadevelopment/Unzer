<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
