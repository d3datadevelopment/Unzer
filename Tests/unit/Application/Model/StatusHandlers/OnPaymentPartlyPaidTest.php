<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
