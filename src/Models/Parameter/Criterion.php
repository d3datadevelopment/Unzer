<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
