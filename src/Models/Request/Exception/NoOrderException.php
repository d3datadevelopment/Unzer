<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
