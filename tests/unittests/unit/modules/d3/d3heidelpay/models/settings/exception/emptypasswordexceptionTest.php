<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
