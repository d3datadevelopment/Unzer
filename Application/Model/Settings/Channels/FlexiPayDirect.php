<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FDE09FCDAAQAAAAhAAAABKgAAACABAAAAAAAAAD/8YoF8bI/hCM5uckCQG2MuGkEnc6BFOCeRdoIJHVx/3ETy86h4bYgUXc0oYiOnv62tWh3yXCHmKn+9raVLZRfqNK+cu41WOrJtPbwZhKeK3Yw1+l+OuoIYoUewRGRudqPmUcL3EzCgHIKz31olwaBe5Ur28iKKhZ8Sq2XUm/zuAn/Qri+anME9ihbjtdZK4wUI+LgpxUogMdnYXxlR7kGjQaBh8jFM6ArCAAAAAgCAABVDDqd6d1dWAx+IU+GjAXH+KfYWRagZ2OAEylsEfINo3xuL44CnE6Vwup/KeEJ0/c0wLqWr8zrg3TZMmS0sMdu0vyEx+8tPyFNfSsR4YZpqIbsIygdv6gY5UarQRAYOEVP5bTDlUAUxytnnn7yHBDGEj+la6/E0HErxegEUd5z6QN+gog3C2GWBeqHgQFvUqd6JWzkpxJMZwpmDzl0Qj4ZeTZvZCc33Ho7qa+8su14zlSe5tP3rnEikpua2NcADqPRYtRWhlQzPbA7MCwvddpwsvOvp+gS3uC1d7pHq5fz56jFbCabIqQrX4Sb3GVRTqsSiEKN8ovCt5CmjReWjRH6LYLr048XOMoJvGUBtmL7bbkHTzyeT7D+0czo9KdDy39yVf5aQ0ZFU/BRljLtq1lUeCQThWDsLxFTed3SxyFKw4Xg79gxtAeiQofCxqs3NszyML4w/8YIbXOyMw+hrz0fN7wMihgEIYsXqDAaHCaXMeOahSmkBntr2N5PZ2ggkVQPxnakT5cZkvR6H556f7d9ZS2NS58XAdG1tt+YM0e2J80bLx4aHthi+/CMB2Ty/ycgSpYz16rtfDhY1qJzWw6Se9MfBe0O6hYcibrqzpb8lIdcdptXawRH24iJkxU95dXLpCD0LkAJFQwlDs9BvrBi25DG+RDwhbTtmZwyb6xX+y/HDAvJ3RSRUQAAAPgBAAARtkNI7PVtXZNGaLzwjQVUOpnWsKAvwmR42NQihxCKjxjwiXbRYxvOYXj9mPqc7b6UlJABkiwHvY9zC7jMFIAmBthwNpqqaRUnrks8HwRUThMFYfa7aQxLvlvkFOpTfH19eMS9f2sm31RDZ29kdcwwaGcp/dRMdbanqysOzd9g0H662SCGA4u/iXcVGJeiayzktmoyD6P3Afp8k639XOs26zhUXmsQ4zLWg4ZwTznL92wJ/KLIYiwZiSo700sA3QXDFo4JWpHXkvsXLWMkOCUW7LVjhCgrhy3+PHlSRNXLWFpOGWu5SYmToaMduKvJeyonu+mKUbI8PoB1XYndWJnherXyDIwRLLSbyS5MYfV3F/hOulS1dLLQR+2Px8pJSrlf2HuQAjXilg8QUxQQY3/6NSGWJSEDTI5VXwHYZKLE551adZjwz+vSmMJDmhZHHrakxBAPl9k6s0uVf0mw8ZzujSpBzfk/PNRJ8cpp1tzwCOkTZLInuUMYxyKgl3FP95GWLBQIWGJorL8BajpNlMxEMz0Bd44bsIvg/rHwEyISsmZ+cgmxZdZWEz3+fMD07a3kPk4GhImfNXFuLM7YyIfJ0TH8PYEPSV/7urHmlSG/+Vm6TfhvpXici0D0tUx8gAA62yDILHYfPtB8fR8r3/+GMIonsUDizIVSAAAA+AEAAAIWTZBqytASEhZyQxBdl1bpkF0QcpeHqrIUBzpCVHHCrMLS8QUTqeTEsK6tmNheKBp6RZFJLQE0WIICtM6P6fwR+chyfsMpbGXSlMER9PZhot9kGV0G4n6kO+hb+pQ1fXzazziZwN9wC4HFyAhPwrkcLfFPeqsI9IWCILolUGVUVsP59m/IFRFCNzI8yU+vH6E6L5KZ+5ePzDlIcTQ7esjyhEwrbQwsaBZ7RzbwpJ2WC5UA7irRXha6Rxvcf1DePP143sVofQTOmxi4/2yAOF5LZV1K82jnqKzPJgnubEuBOKFL5BV6HxaF7IJrQRcIY9AUxWXORNndtgJ1Tb6VIsDWHF9JFj5OP5HzdSRI6pgSMmlHI3/kyw47/TQ1wu+wS2+JbtoaKUALF18GbhOVTA1f1naMBlB2o45uv6BPgNWOv+iZY6R3qJY4Xza9cE0Wsa3EWyFRfjRq0upotBtCSLL6vw5j/wME8zPYwBGywdRSyzcvq9pGvNAxKtiU/mJesveWMFCZDWwVJTlm9R5pCEmlxAm12Otk9E0zMMe4PBEkGpb4/gyyMFkC+aWjPjce4p2Gikl2tzV3YZM+nsLVsPJEHneVu+mTfa8WyaCeyo9TAfzNE5/n7S/B/YBTXpC5Shyclyje/Lwhu5aIjYNy0a7RoWbKh7+ScwAAAAA=');
