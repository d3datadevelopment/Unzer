<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3BBE09F35AAQAAAAXAAAABHAAAACABAAAAAAAAAD/cX+h+Dc7RTlUw1h33CxvDlqBPmjRYgFk0+TxhhoIuLdlSZD06OUyfWIN9uFqipnQBGUxo0UWfkurBy/HrzhUvCZZPgJsLTYrhDLldDYgvLR/p9Z1SuKXsvUPaBMkz968/e9j24MZtmhowfdO45gXZAgAAACgAQAAv3TuxazHAq6GF1XaFupG3e/hm81kxvZdDJApS4XIiFq0YPttT3A4BHudK+oug320PQ/Rig78XdV+G3pDWbUvYO0SB0b4DOc71unrVG5o60dIyZNcaoW5kOjDHDEfQ4R9vsCh2ba9i3cN/KiIIOlpBpaPSH7xILzN3uU47+JDB/oTULR4W7+Huv52BtJcaYLtKLfSR2l+4tiyQKIqPgLC+tS6OHYi6z7pI6uowpVlDFfSuc5G/XrUuPmHr5FsgUDGL5BqkBaoJpQbLi1n3KMOo2yL1jfdDGMU3S+hg8idNHs+aj0OiWOvB4uW5JiQqOL04YAITFFjWB7gj4Mq72bk/usFna4MgUhA4kZO+Q5Ctzjerc4XVEDlO1wzdQASBSwj+Q6+pPylM+/b85bTORVt8fHGkxXG6WangsxPC+S4PCdnpNjPKEHTKVUb7W92kwJHtZiQC2R1XKWXW2/gwGXAWqkOMB0bW9V68E0kpZGax6jzudn/uvkfJtjRt5ghVN4YvwjN+Uz/b4lMMDxJSL9JYbA7VdmroFLLj2NOLhuG3SZRAAAAmAEAALR6Ur7uyFuyKFBGa63GzsHHIbEhf66VsR6lly8RdTNDjdBAe2cr4YrhdD+IMHit3BhVr8XiKHaTtJk/PSj/5yizhnt6yp9NVvRMe1EVtFtUcwiGLtReg1JGkAYTZkRI6yVk3pJxluHFu6yMgeOQLDKmA9PIXFE6MReCIL0XCqARnMDCsLO2/x2hPy1s/ANuo4vPkbB2HeJYq8j3rwADSiXguTyEhwp1NpdxlsSrCrtKNAsROI0O5Dkef8Fg8XJwXqnyoECrhS5fAjbX/Izh22neo8nAPMg/j+Y9Kz/UKzLnwQ/0QB48cxAxJeNVrlkkApTRwEcF2INLqqQLZQ8UcNl6w2PeRd3opQf9TBdKQ5u6qfT4bEisKwaZx8Ha7+kor7T4GIlFYE5rCK9RixkHZ58GpZzbFL49Cio7VigiOsWcrN9UUZW8/r+LpiMWXhxyEVMmjEBLWb5SOqPNNfkL6h/EDBpKI7eVkBPhEjgZwfyQC8w8gHA1rWAT1Fsk4att2T9wdrO2yVanjvrEqp8dWXTNkCAqBv7gKAAAAAA=');
