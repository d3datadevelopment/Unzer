<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
