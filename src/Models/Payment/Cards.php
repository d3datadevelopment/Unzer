<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
