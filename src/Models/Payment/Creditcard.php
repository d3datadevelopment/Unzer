<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
