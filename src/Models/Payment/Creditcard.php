<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
