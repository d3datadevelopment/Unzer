<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
