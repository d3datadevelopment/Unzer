<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.2 SourceGuardian (18.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
