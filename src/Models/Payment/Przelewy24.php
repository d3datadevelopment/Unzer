<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
