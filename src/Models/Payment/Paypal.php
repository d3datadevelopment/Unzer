<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
