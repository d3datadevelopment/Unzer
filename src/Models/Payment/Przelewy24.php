<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
