<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
