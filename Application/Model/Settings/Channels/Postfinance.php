<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
