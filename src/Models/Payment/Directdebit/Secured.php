<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
