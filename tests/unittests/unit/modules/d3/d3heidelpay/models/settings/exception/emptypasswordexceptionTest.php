<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
