<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
