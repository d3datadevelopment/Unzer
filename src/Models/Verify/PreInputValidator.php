<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
