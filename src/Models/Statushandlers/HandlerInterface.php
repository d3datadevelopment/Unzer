<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.0 SourceGuardian (28.10.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B36DE09FFDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/3Tz/0jjkIPsukRP3/GMcUNTgJmmRhJyZErNf0fQ8bfJ4U3Ptsulg4ON5KKO2XDrv4/GSUL7P5H5iV1CsQdmjBwYueUyhHycrwNFbn2MsOmv/LPZVh1WbiUGWQ0PRUb/84E7W19CNbh7eva3reS6xkggAAAD4AQAAh9Ua0jWJrfsHGer8aKnSKM2zM6SoMVUwUAvTLzzaEeCL14hXhtlbotbQke6pP4/i4+Jp6ahU4uZDzvK6uRcjV/y1yGxopiVlxJzMCUUn2NjmGtXS0CmzGilK0HuDDsc6tKCS8UAzFsTOSc1LtLzh82EtN/wm6OgRskXgrWjdQ5oxsl+t5bgCNn9q+fs6qe9HKM7A1J6Slf/Ur5YrASOZJDUOvTFQAkrIQAZFFvmvt2Bn+wXRjZ+Mdf3M6K3fGJeV6tOmHpE5ZKmzF1Xh8mWbzUWWtwQuEdN5frUI9E45qMpwIpG6/lPw0pU1fFdQjYJoot8ozioyPpP1rzpIDeJuRkUmmPRE57k/9C24cVeB2mq59UQB95WMUqYtKOQvoUMW+UKyvCUZvcfBx2ttvwaYAwX6Yy0oYlg+9Cu9hHuC7mdP3xVyy1hsnPe8gCL5Wgq9yHw7w2kpvpys0LVY1Z7OZNqiRYVSWuNzWXCGF3M6XbGWFLQmfouT987P0Oo77x76L6Z2bf++mZPZWexjM/mF0aFVI6zNjPlmIDP3/CyFL3EolGwaOODA6T3eaNfQtTpw3waDntrZDA5FzpZt2TRs7V1fofRaw0PV8qKRdOLoeGvz13hdv4K1kw3cQ2KXnFH09Gu9kIfCYzgSZzRTSBOBvLylC6qsRbOFUQAAAPgBAAD6Nq5yjBRwYHL46zGx+wJWjGnOfpvaYMmxOQ3vHlJPOgHFgdSPCb387ihNfaIjnjXKuG7q/j+FDWmMw0vKVt5rM8WbHuHlo+k7qGAy0WjCEFEhSMEnFWDtaBlw+q5Epc45DVQsnOIMwLk4HqDesliCKxLVLZ/UJUIkjlZV6MphRJhTNXB9qT8TljtCVDVdX/HN9SXLPD+pkb6XmmYu37I9LNCeHvD6OusovMj5FUoF2/QEQrM45Fw/0FRt1D2fe217anTvI8FodCjbMTWlkDj7qNpYjWoLZTWWiNbrl7XahJoAtp9uuTrgY6Nk0furX81rBdXBuFCosfN1vWqnYESCM6bHDVAqawq7lj4ZLOlRoVBBOg0hyxDVg5f0oo03DB5+YaSPD24LyypcHkDTcgwV3V72fIdyiw1BLwwikaDaw7WTsZTINghwiMQxPg5cM2yhn5+N75CrQYgTlVLw6ZNdg59GFx8re6b5VS6ljr05hrUM5uTlqhnxn9S9pj24FJzcKGhqQj8PjceP+iQ5W5/w4frXpQUxxJbTDOLst4q6IvPcg6qMpRs1lsYmsTPmM6sDBPH/B8xer7HY0ku70egw0KhyV7M49Mhv1CoSgP0Icy7SL/EaR8oYq1jSZEDFEnaPa8MnYq5hKrRJD4ibZkFJG7GZCtDtmYEAAAAA');
