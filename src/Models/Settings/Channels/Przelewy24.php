<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
