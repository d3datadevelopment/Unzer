<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
