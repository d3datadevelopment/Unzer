<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAAAQAgAAx7ze7smVH1d4HHPY212C62Vsghr94i0KoJVmuKSfQWlKAcOmmcHCGFs4wDtXgPO/fI+1Ka2aYmjqSNYh+9MGQM3kRgMHYNGB8kxfYxx22fWLQE1diKk6COHCjyigRf3ILQbQS57HyW3keayiQ1lyEiyPOTYdizPxpH+C8ip7iJ6yrmAegyu88aq1/bvCNq8IhkqVysIm94mwJH4uUy4BqdXsf/8z13/BrB1IsyJ1V4AotR6H+uY8mTbMpha5iP2YtUlCst5hPSXHTWHVwPoxVOVvhNmIn2+8XN1kSYMRBKjyT2IShZgrjIw+NnSiw1DJv/sn7n/La5ZrlSRKS/PxA6ZOkBnhrKbrx+Iq7Bzo7DbLWk06x90VNKwBjWPIPtQ/Yqr4nU3RdBNb4lpamq+5ru9TSpEMZF//9eU+67+h2Kw/Met1jN1xlzgjhRmTz+rk1lQ8eQ5NqC4BwMHHgsXeV2FWGlQGZbIPEHoW3MfOn33TM3cRJzlvSzO4fqHK1Xn0StVXITueizl44gT/3sHoOEU9E66oIws7ZITXZIGG0IBYq4ySeGk+1ctpqsTbIfTurVItP7AvbLtTjeAzcMiF7ovYpmDhnUEt9edXkKI4tpr6clD5SSgzGNzxEnknBE9V5sN5ERbDoQhNauLbRAyyFCZG3/Dia5fEhJ+KMLsDq3886umbjJNDMhbWr7GExYg3UQAAAAACAAB/HCoHBMD6WhczUuvZd6FiYYMHhJUKox18TPsrs98wWs+xLh+yGR9v0kZWR36BSeHGXfLhty3EvgMUVh7ft99M/bBh06BJB8CwRj1F0mQpOakgmG3/HyJ1vH8G+6Tjr9RZ1TFPp8bqtdvBPNZYsjXMMMQHRTDNB3m3VlmUQnRS4/ES3QFk+2O6K3ZBz9cYbi3MFdh6nVSoL61SwG2X+Gd31wHsag5iF1Zle3j6pQWoNSG9vMfZ3KGEeaJUNyVgRyroRv4SuWgtG4YWlT/5CzA50ItxBrXDoM8kv2dHaQ5MTY48JY8kyTQBe4i1WQ9mj1N8e3b1jkIMC+SMwSIdFvVE/wI8VvGYAk9HROlXeWUn9E+i3bDJeSWed1PMT3xGKehBqOaDQs7YHnnK0AxMu2WWkvjUQnk986dz+oV8OmL495Qh2hmsyj+bsl503be4EmcHtA79Msh9SZE1hYmNuNbBBuA+R4Q/B+OPlfFPqEcoveHE66ddr22TOm9E02ZLZd4YBxiHwZARMXsCcawGgTDTyhVttXdTFqNrGzcPvQ+e+bASNRVFfX/lZBfbrsz+0ODWRA/1vDabgpvE34CTvNkZANvZlxA/cJxzS32A/dUxKnB7la4Rxocfyac0TmwA5FckAuTjbHOKlhdWNm9vbeHK2jdh6LObyKQZrKQr+k6hygAAAAA=');
