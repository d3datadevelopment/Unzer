<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
