<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
