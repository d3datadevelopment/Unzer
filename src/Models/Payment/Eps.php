<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
