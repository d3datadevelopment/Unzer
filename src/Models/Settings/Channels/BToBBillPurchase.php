<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B371E09E85AAQAAAAXAAAABHAAAACABAAAAAAAAAD/Q4g0cyIi/sxLmxa6VgZwftI0QlqZoh3sLkQEVOE91lYK4pcg/LnWOD8NX5iQKgbCNlR5EiNPniQ9B2H4sI/DsJ2SAQqpeo82+cYU2/uZ4+Wxi8MnEX18bTyUgP0ELSlfHEqb9ahrh1PwrNNGAGrfzAgAAADgAQAAibJPFkGaNK7RRlEhNIYfMvL6I6kvFPmoHIKxdNi756R6djXel9ru40rRFyNGTgrJ4lwT5rpC7B/3FSVpembmRxBUQ/9HNSGu7b2hLmFUHice5xUrssGmPU3lZHzZiyvT9k3vTOymapAPtZoE5Z3MnqxL8U1mE/9yGMwoOxjog72uqAWXuxUDKUl2ixoV+JO9Fq7vHLiGX5mCf2YmLAe2jtnPQuRiYcsSXfD8yR5rx8NrjV3e0jw/r5Bqv3Zyf3kFcSOww4oaWh0AXTVN9ktFAM/6GLBULldyfqIPzv97H/31foYxKavuWqjA469XoMhoIFWCs/EAP23kVee3jmZ+sf/s+LEQIk6Nv7pEGMcJ9CMtxceiA+jSKpK1fCqegoO4SbuP4bSwdf8jqn2h712GKL/s3Cdf4Me6psgfGf+MtAi5c1iv6opf/GCWlfQdbb5sWD61z20rnTUSAmtAt/bal2/LSoqVTXrf9D47AFaW+p0Wi0bZnl+zou8bWAyls+GLFAC0IsnaztHD0pLByHARYFnE0PQDVPJpwQe8Mu91KkRs6dBgGdqgpO7JtZKZfdwcd6WnYr9QRCX6YGynE3O98ZanLtM2j7g8fiNuw7gUi4sedOK+y6TviJLDCnRFiBNxUQAAAOABAACFPWRxZFT2YLZso6NL2cK83WnTjU3qoA3EdvZ5i15yucqaI/2pkzgjwnNsucmhZR0+B2Qkq9CckDnalyjCawpSUvs0s8C/ZsVUE6dWf4smGtKFKRXFdCrz+sLH861GRI/TlCXAF4+Ebpf3gfiK1JBFevNip25GlRxDR2toEBS5+C9fy1r/gGnvv2/hiSPWqkhFAXbGZZvR7mocA0wNF4LQf1JqHkQ+d2bBULXD6fkIQX9ey5LrcnMucN/9C2Hj0Hg2Cd0jLNV9YD6M0g1dANXgbeePmUggaPDI7SIsPDKkoLXxeVGnJTgMsTn6p48YVFGhdI1/28REab43ca2+wXU1LQ1t015BdNPmaDEmbTPV2UkMml9JaY9mLTThgHDeY2oKE0Rs5Xs4mX8xp9B764xeSdvhKk66HZ9SlSCAskbzEzZZNA4wc1k66Xz86mU5PC9SLKhxyKhIESRhD28FxImDyLx6o+VAw1Y29WJqJS3utcblzNoy8H9iA1R1gyjPrvWnjdxHltP2GncfSAhZKg1xs3kjgfztuJIoPytRxAg6yZt+MLDA+0bTB8DfuIlCF7OiFAj2gGsf81bwxwtgy+HsA1PNnC/sYreaZLiwhCJgH9zeCooYJm1MltjU5bC8lTgAAAAA');
