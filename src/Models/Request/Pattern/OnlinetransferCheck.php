<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
