<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
