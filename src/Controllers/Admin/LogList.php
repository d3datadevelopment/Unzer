<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
