<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
