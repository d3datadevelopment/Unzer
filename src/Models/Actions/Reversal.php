<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
