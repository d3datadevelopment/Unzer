<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
