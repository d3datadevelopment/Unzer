<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
