<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
