<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
