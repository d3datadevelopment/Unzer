<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
