<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
