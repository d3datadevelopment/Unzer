<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B307E09F4EAAQAAAAhAAAABKgAAACABAAAAAAAAAD/C9t0qyjpE37pX4striuXxgbCjvHaiOiBE53tyO1PnK4iuYso2cspMnAtnbyOi+Yh8tdWajWyfkKr/x2T++MMWGrIvHKfs2TVCv3D6/ZLXZ+phgtzdijvoALY5xbNbRaYNANUhr5SK7igNSpuv7V+/wfa8Nz025ngGOhy860mibFS6kTdNwLTSvcBJ55utEUE+KI10m1KC2NCzsgb1ZINEV3JAYVOpB9yCAAAAAgDAABJxKrZeMA/A7h6p4h9Tyiw+UTXa1JPJaj0s1EPQ+Dupf1cApijwIIuxvpDYU2CqB5Y4OqSZLi4zBv2iYWLA9tH4YSI3RdUtxO+mChpvn79T4XIThGN2EvVFer3Mu8ZBVHP51v56x2sJdJ5gIENebyTBB2ddqIDHd+kKxJ3N2okOFdFSKe9x0NNWz1CffRaFnxwhOS80jRpro9ByHzC9Z+5a93lTdapWlkQFtBElm/LE7HHZWCq+4ek1/9S7f2K5iOmKZYMhyNY+9l/Z+/3/JnicZ8BKUVuA4NFSKsAnYqaCK/SfCYHW/PLYYl7J12F5P5b8ufmfDo2oeRo7sF7XFPAG2H6AIXCGngYJtyJrDFuMUqi8UwwwHLnchpZegj6KByAfPtVYXgAM0BCcNkBu7txbF1qujzTtAm4iacaukrgK28m732ZROGuUzuWdE1uOFvjDyCVNHUUtbaJVMIl2X5RxTDTAnpR8vteIbr7eCuj3heE9w4KPnGHPhKZ0shSbtU2Q50xfdpU6H1a3fy5VjpmPSxuTFHESMsrEzarYuO13FykFsfEvd0Lo540J0BEZnOf9N3XfmVAQpps7ZiUeoTHIK6zX1Fdnt3IQ/5P4SsHyJWWmegU7QkoZ17IYSrswETB5UbjR2NDyuo2i0yKKvg0+/bMK5jRKB/vmwruG7vDlGNN4u3PTvsRqnitrWg55N3FyiMgkook+vo4b4RNTeCGPQfthVrCVXw4p7ryyM7yl1JVSSOIeRMDx1jZUA5twtiDgjNo6SwgCqMs+jF/QfFGGwv0cVQi28nxPhAUUKtVjzWGGwNSb2Or1Rm5bjCNmtxkRkZKgF+vrCgwxVAj4Qe1neZl9wq8YX2pXRyU8Xu6yyTGkv6AVbTH/p4Q9J+c6WpuzF/d1dG2kwFKgzu7sWIEZFgPzAnFUkbgWB9rkyOEBl/7uZVk8z2ZMGZbwGzXL4FqZVExwNHdn6DzN8XRMWF0VG/Tij+6LxY6nfKlXUzFLGxne3koJJSVUwM4lmKwhZHsEZzt1pYoaFEAAAAAAwAAVYmrLs9Frb4xW52mjxr9QTwJXCc734C7mnVWb8U2bUwKTVm0/mxq8nu4m9cE1Yg+dRw7J0X66JwQNWvgxNTNFvqf1RQoPawvgr02WKHFmAkKD1piJ+rXGjNdAT3n2TIPkgvnH2QftVo7Y8B+/svBx+YFaCD3gOEiQ3z0aNDZxFMJWicDIPh1fafmX2X/ewNbWGF1K7eiUM7CUKvqGA5KblVjwJKChnAyR8svF9iWlXzuOjdRQcII9YYz1r+m453/wkHPysLMndRD88M/mCckvpj6s4m5UsHMUqUPDUZY7nrVyHMmovv4I/t6QTEZJVg0xEwSSeeaLKR/LtqaXMzsU8N+SEArZN7AA8w7CTi/aalhHj5/048I4HgzIeiI3g+GXYcYunbqT0xNwWIAN6Qlsll6f6oh2vWg7fljSHcBqrcPgffzQzF0C4Igu1qkjhpqHH2Qxc5P/4rhzZcdTNRJu2wzG3c9xei06sHWDesvOu1oeaBCc45PtAKA/pgUG/EUTI3J/mbC6j5bbLDU8u78VxGHehXiqDFwvmxXrxFiUjtJ2NHrxmwu7f3r2lDpMokR8gAieD52P6I5k+8fn2jjAmZ545w7vSySE7u4LxbX1z9hfB27BkJit5FComBBofu50q8aQwu/6hs47rLk//xMN3lqaG5nkDcKIl1SP5I6c9bcbGF5j24w4XmHnSFQNzZrgzlhDCbVoBhy1th0L/8tbGUsnI8gqIquFMRH0c60sxfgfHAGRrUTxw+y6CJ8UL4a/nbrCd/5al6+iFGtoB3mPMYqoGlOOdS01TEiQsRBXbb2GL6LLEXK4kc6+EJ9yeDfCMJyesycdu5j5SWmBg/uej1WeSl3waj1r+NACJcc6jt7Pwi80QdVvVFmCjg7xVtdouGy4q4KrUcVcX6Q/MwOjdHBzo6J8yaj6lphCbU+KSXC080HLneQcCqeX3T0761XG9T0VnB9cYIPBXRky6x4bkdqlUa9yK/pLwqHtHyrkYFSKRyNB7WEsZwuPuBhjlWGUgAAAAADAABikfOjFo8cXUIJtShkhZihByFQx/Sf4tClyR+h9+b5I49mSNFGbL6b8oUXUYCHfMW0AnbR0Eig+A0+2bjzcaWT5fFzCosmgUItXyUYF8FyIea5opQzv2FUEKY3oqFOPH5EvRQGYLh6K1quHh051OORK7kdjRX0oFdOe75Ifi36W4o2M5cbPjVsGj2iq9Zq6euZz6ZvYA5v9waT9GhEzN7Hctt5flvydYd3y29mhmpMwWE5XGiDKQ9ePtVNrRraen5qsHpaVfKyHe/o6Ybo+nni4MDIq6YVkPCf+g/6HsHb6wtKaVdVKjnFgnQ1aVGymSFdBdPUOLKL4+8CvzUqqgn3Sd2LVPbZLWcNmsafxuIjU8VevL1u6UtNZkMStql87hcheZK4W1dbny8SHP3tE1nhgBvgOLFVQxzUCWQJXsa1DVo0JcWVREz7VP3fYglTl32nWtRcTw0Jr7eh/CUvUmrO55Kb2ySzeTNkt7K1Eon1h8Ol/L1rM+RRfrqHrcJ8Ko3jbEw6OMexopQ8CJ1/pxygy3I0fxMi14iaw0/kvsnB2gygU39zeEWU20qssqRpG23lvbnQNu+yyotlqNMy//+r07UifWrIUmpI5linBV/eG6zjPn77ZPhq9femBUQDKKSfDwus8SHwk2OJmNBdIAl2UVw30FmyR+uZd2oN5KgNelDYaqjcGlNHiACkczUTueFF27/th545/ddpqtqYPnsWYoGfQzVArQ0L9/51PL2XqSR8jQXu+4GBXFoTs0JAweeuqgFEMZjFetL+OsXa3hAcpJOhc/+9qwrph6CkZcBHDuuFgo5PekFLO0gOyO5Rj5Q0IWSW9nMFmbzrpJqXPSJ0mszHe34VMjXiX7BdEYGvbWn4b5WT2DF15PtpCEFAzMacpyDJprlh+ArWjO8Je4ubsANOKnrhzG6IlTy0XLko4rr8Z1mbQqQrgMyZrn3awN+KdSJ0VMM/Fo+TyVh+PVHTdm5npiVS4dhxDjq9Q5g16Rs+lyNm9a0nwtCqGy9V88EAAAAA');
