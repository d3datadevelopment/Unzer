<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
