<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
