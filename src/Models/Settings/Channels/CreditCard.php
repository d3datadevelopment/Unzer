<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.2 SourceGuardian (18.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
