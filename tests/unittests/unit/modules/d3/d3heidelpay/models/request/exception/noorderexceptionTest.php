<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
