<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
