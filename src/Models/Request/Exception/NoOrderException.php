<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
