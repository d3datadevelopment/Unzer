<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
