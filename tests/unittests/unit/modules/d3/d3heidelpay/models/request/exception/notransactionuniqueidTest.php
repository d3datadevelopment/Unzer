<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35FE09FA5AAQAAAAXAAAABHAAAACABAAAAAAAAAD/RvilLstExDzttRCb4ojWacLGLuMpeJpPNUA8aWrqmDLKMkzBlhTv2Rv6+3ceI4b4PvRjIzARFynHLkrXQXOHVQeoKLjSSdUb0VTWxvcFGvEGaIrHcewAUTM01F7WFDtD7qXf87MGj3FvU5SOQskCZQgAAABgBQAAYdZhtMk3TkveZfQuoLKSx+vOR2T7WSornC9Pc86ssFbLLJ6zFdnyl5ZLxEPnMQL7C1Ww8x66RlyvH9OcvfgGqUEBsJhNmEO6TxgkBWkUK6+AnnCMln7A05dAZxNsPYwq4AC89M//v9/B0FP1zLh/sqo+ssRq6Sfj/Romf3QnI/oOc+wk0NQnxeSLdy0p33kXqSOo6miA/7UoOLrff4vCPA2EBzHP3e51/ZKrshGcs6WhP2SP8Mea6gXkSe4B6Vb6Oj+vA6pWTePg0csOMWtwtVBnyM1sDvS1BTEA1iN/NdzZChnm33/bHfOW8OqBMz6uBcLFeJzGrmNOE002S7ct8hsp6hlhzuBM/MvWYcH8lRYn29mh+vWXCHZ8OCNIg3o3g+8ADfYE+bOm9nd2rZnZI1kQkH22IF8/DfNTmwkX1wiPbHUGKd2aXijDsr2Qv06eu44JUc6GGQajB07bZMDfqkrPgdK96Qj4RUlAnG+YI3D+gdor+8nD+F+dmk9NmG06y0lm5l1PGpKx6w07+HPCb13R9DxASZqfp6p96qe0ctfB6TB/vIhxHTLFr7r6SKR3R5k9iFkkvY6JhdDusN/bqkga75qJqKufqxYcVIibwViiqAVGOpXyS4tpMM4WtFrSSZjl3mJbTKrSsXKbiLVXTa1arT1y11R32O3hALZLBOTvbUHMjSF1stRraJb2plBp2b69j+KESqQ1o8gCoVDo01iBXj/bxnJRUQKdIGGSECyMkZacbvQQd54pdx8obPUeDLiXh3VXxgHMDnbk1f1FQ88m6NZTGTwj1to8YG0NEXoxTHjQTgvml+R7jz+yh+k57HGf3aMk/Q5rLT+UNrQDA+g4Gc7GyZgH3hA08SDTg58/6mh/kCzgNjY7sdeDoYEKk8GyXajzR/U6QlxHDhODTEPz+OC7cIKxdIf2m6zVnRXie+q88XiPbQkZT54WdDMUWqICuS0GdjbD2ZBosYAaDoL6jE2T1em2gV0/mm3JwCftAzgWUrWuvC5NySycUCH5ZVlswl4me8yyxKqIRX/EoABwwOe5E7jbYXAIN9WywCUuIxoRiljBe4p5LawdgHb50KRDChbeDCr5IzlWf71k46EI6W9RLQiYZkUoULESVt6Sfzv+v1oTSadGT6rUEOJ+GzALfs2Xv9SAUugDBxJ2pLPqp7nAcSGt1PcYjpkgpbbjEcTALVLbiRPavPbcQvQIV02OLRc2+piZjLXgCEax8QqX2dxtBuDmcAJ9adNY6PuVrvUNpFlSajcgqSSjr4afbDqWuCqdKjBD8Vvylr5JLb8gYlB4HYaZCTDhvhh6RbwDkOTn8AUQl6rkHt043jQaF6gyIPqoRMVMnIKq1yrGchysZNQI5JcuZrdI4DeCXdDpWCGZiosIPgEow6UUniQfh258jBxF3MsUxguV5cyYtpIHmElWHUrFA9d+shoDEvvSzcj8e4ceJ6raEhwggkH4fAN3xq7TnA5HEAOdvGwnmxPrUskktH0PmQUfKKm8ugrBAll94FLFSkvjjGrPKtU2vggEfpDgx+1InRhmFA2NrZXoVvORNwys6nm/8Is2r7e6HY/9SC/z/EazG0GpiOj8PI9PYtBbPIsQKx63tPOi8AP4JLx9N0CntdarECDLis0flJic/22d01z0lLTdFdihYsY2gewt57xq1a0+98oOxbVjCCVawokHOXxZi8A0PQmYh68Yy2F0ACdI4n4iOovbHjjCtfmY6IFwclEg7RmFAplPDDMMfuJaL91akR4u+Ah3lW0KeaXQSh/ZmfgOfJrGdq/r2VuglT11PYG+73O4ADPRZQDlPQdXod/toeyYNEBRAAAAYAUAACWaUA6aFgt3o1Gsj++NFWtnSC8JPbpNW8Kdxek9RB8qcJ5iBMPo0HMOEGzCyzYhk3O0kJKHsMQ30V4cZkcJuByvGDix59x2Rq94EcslYU5Xogxv1WYdNUgkdkcyDUZ7nTPHzEluJx78gB8sEHA8DeIv7pXFY3fQ/BhsrPaGJ6ZSDeGCmR77kFvr0EKK86S7vvjAqqIA1H3Am6KvUGDeGPD7w7dgTrrhZGkIdDRlJ/G/dE9j/yprFdjc0NLjngkESevjjx2CpwGrmn0sQOXuoEBb7PWrptq41Abbc2p8U7v4wf8LxpV65v/aQQC4AqK3F2svcpXOnkfVykaxapaV3tquTimIKI7RdhxTt9t50J9Ul0N5yHnr/51m1ylzFAADmb+zGl9kk/8x6qjOMnVYPrYUJevcDQ7BQ+9SmY5mVMZUeOXKamJW6D4GDo1wo4/T3EPjkinAeoRgIf6Y0O312cj3VTTD8hTnFGSJ+tB2j38wW46kEuD4ZIJMHGsbeKwlxqBKweDRhiBReWwQ+3u0qkV8qSzdKvQC+ex4/lAN6kPeYQT6Ynwlg053cdEukCHM0zP35lNpthIw6DtdvX0k0fUH23IMRrZSo4cHojn7uxlmPoOJ0TvzKqKloONgItZR0ia1kk7PNJ0CM16sA+CrAZhy9hJyie6T37HLd2XX7QBIaJa58Jq9OqTgFGYyFU4GE6fUatVmOcrwCN1Sw89zPCbD17vt/qL92EjmHkIbAPoMlb5rjQgtDVuYYsF1cHaAZXKyGrwN9TwvPYevG3fYHHJm9tHO+f9w7Prcvcv9M17FVjdgIEFJa/2u4K3CF+rFFOcQlWFLk5+wbs6sSNdTl6mZJHR/x3BYAg5t5VrPIsZe+p96PNemzyfTlimRAnAD3VSeIKTJehZvoIOnqTWXGsNbHYXCWjJfJyNnRv0/ywu7FFcO+spi/vOemBmKwX//N5qdciYw/O5EW+P1ltVtzBYWItpTQDXb6E1zCerrnkDRZKQqG4qSelhrjQkMJLy7hYkGcqsM3zDjGQpiyKJaZ6ZCtTJIFNRPkwYovxvxHyjxqBWi+aj2NLK/FO02T39TBuRn3EMoKJysZ9Y3w8OzsnKiXFgywBKrUWELth1yFQ9RZXecETbd08VeZr5ompHfb48sZvHVbOFAcSyrZrjnDqTjxQ/qFSfefLq1cCupzmKQwfaCJF8V0yXGBHARLXYyxi2xBAHV7iQz6549U/orAwz75REwrfAUW1YaJ+izJgvqS8SBlrLtdt6rF4u+vwegaeuCJtULG+F+ULhGOnRCE0gPZUjfx3/iL5dToMRYQi5j2xCJXfRm96luEdCl1E25Yplxy6Ku/YaCA3Dc703LV21A/OQjTNBuXeQOUztarmdUYA2uXwM4Q9MZSV6kEyaAwdYAlShjwe++WO6rvPivaWNYbNdHgsQtE2bz5GCjEHoCRsXJ1sommtlD9ocJ7FW21JF7oe4HBT2px8CQDMhC3EqosK19CK4sTO0/gqaphrbY1TkUlZwjeFK024kGyT4IsVknrhlDATRV9pD683xbe/LZVBNw8u+R2d3fdst9GxFWBuls/tvzIjDimn+JhR3edJZ012dn2xabMM4rOoKakCiNL5EsgT5agfvuC6zpSY794is++cXnB09agtKrSJowcPPWjMoDKze+HVdk+4PGn8StmhpNLIcwMsHDg4vWT1SleNEil9ERrGkXL0l0dzAh16yBuqwXHcJ3VJbQ8S8ZilCkwo6B1cIPMAWFgBIyT0f3Zt4ZLVAnkLu1bwAqS+9ousnkWERo8VtMxs4Hx5rFlogPtWWscVwsO3yGWkaK5myMAAAAAA==');
