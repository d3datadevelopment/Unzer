<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
