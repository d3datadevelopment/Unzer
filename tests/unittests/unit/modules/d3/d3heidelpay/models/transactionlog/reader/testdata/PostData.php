<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
