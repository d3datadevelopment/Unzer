<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
