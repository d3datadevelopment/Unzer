<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
