<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
