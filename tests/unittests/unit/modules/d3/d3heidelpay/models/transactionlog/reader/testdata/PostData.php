<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
