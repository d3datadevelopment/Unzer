<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
