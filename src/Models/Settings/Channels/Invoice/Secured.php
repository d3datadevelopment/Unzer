<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
