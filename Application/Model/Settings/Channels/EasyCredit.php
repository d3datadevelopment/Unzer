<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F5E09F3DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/c0L72rAlK1n9MozQITIulLynRTp+nddrgppNnNB3KgiGP3eP8qfR2cgNu+tnh4azZ6SV9GfmgQdEqJFSjInV15iahcCVkOMoeCl8bwJGyZzZfWCw8+dYuw/Xbl6iZ5qCxLeK/wtC7ABo1+l1PsApqlMQwOsfrfER6HAnAyUxSQOx/41pPiOgcRLCOszPVSIx0VWumCE5oH2N7p0abAMd4mIs7qiJZ+cTCAAAAFgEAADnB8Ea7D77FRbV7QJ652sXHqCt5U8XeqYITIZdaBnjPXPzSyuraNzOnpSfTuGDbseicx9jnqTbU4x8DElbT8yN7imvuG4XmS4ctk6V8cS+0JjpQwy+v2mNniUodZGa4IJ/XrwPptx3tdpn4tozdx3TerAGYS2nW1kqJzHx6OG+hLWdghR3HiR1HDhRIgxNpeyLAK5zE3SK0Vd6pyyjCmmA+fsFvq+tWgWV5GJsqZdz6rg6gsprwf5DA9BsHe/1hLWJIOlcBG6+SYEPP6ZxzI02uaicenN8aZ9L5I9L/ZimqOIysXWuLogP5FcxnRO0UbSlfCbYqfYFWLpXqx7oYfIyG1nLqUMQ26RV3Wej9Y3Q0KXoTGBSES2v1btFKMmt8Ci/9OGM27kOlloHOl11FI0ftrqrdBYh6M/uAWUejh603/7/xtfFe8gfXtgVoL8WSunvsXrXDK1m+786WYxpraVuC5tH5FChPgeWEDAMTdChmo6V424AnrINPAQRRK5L+R7Sf79Zu7vS3Lag3VVeD66ptwtJOQbZ5CCi9kHPFssJjKOjHpNdfJeovtBRT2akiyxfSb9xWxmyW/9ac+TwNQWhljhY2A72GV0RPWh1/7PsVZ3MLkjkFpPkD6coUE6uGESxjZqglGY5ZQaAD7I8MKrgEn4UlawjB1pw9roR9piMEB0mr6jcxUUY9KRgg/yXoBgUVCQX0+Z4ETT/+TuVTuS5c1aOxthLajoWHB1+vP27942NE/27XSIn3JwHspTAkFIwk2LE4iN885kfOElQORMg2aX95ipRzVESVW0CygVHvzhjUaTp/j6qGQBaTJSxEtXLMOWw7D7kNL6d91oWQV0s7F2EglZdde3zFPhML4gIRS6S3BU1LC++Jxww8txta7+36hzeEIeItXmkW4EzweGDbBjoXCplKgDTP+/ERXAkDTzt4X0tcJKbtg4GkS3l1NwaS4t1QZr6WJpptJ9T72+IeJopJ9llMP2+ypRimzVXmX6sUk14wAOZKqHZYSYNIJxKphCZEIEijTG8rCyC04YoYbcq8oO96TNV8KqbkHrIK5n1YqWTv0uDljP3M2+uGw01mCsWH3hET+fidiBuI7pVKDfF4OKe4h6LmF5B7H2ScsNqB7Tzp/byRsaHZExMmRchlEDn1GbznRkv8Fg2crUpIzrf6WD0MsMWLkTTbl/1ywt4veatS3yKnWrZnrpdIMV8K/0y75HvgT8/aBkyOtEYBGX7+hvat/W+pw6LNGDpMY6036hPcchrAjAUg+MduksAuGxQcuxNBigBx99ryfsBP5ovGpOYV/Uhs71uNLqX8u/TU2hUnWtVQNjqeZD1CCUGr3PnBhW8yOKLzYlZd8IlfaRktsyYGCo3ZgZdXnh6bB8O2gbiv1RAMSE/6zRQpp3KunmdBpE5bQ/Bd+02UQy6CUgudVYc8X9zUAzNxVv369EalFTKBJKl+EMGgMm2/ZOFX8bn7hxsg1EAAABQBAAAzxbDNwR6F3+l7sPPyypFtyPGKunGBbp0Fpi03xc2vw9Bav/z3s68E1w2Or3yrz3at/nMmH1brK/RtBLROQA6AuW8RCzp+6uxs35zg4D89YVfMr8ZdLfREYcHT/ruxngS8Da79CWBIcgEhPPd4nUXjZTKyJ/RQcFsmSEBt+E5fWuwQfsWvrxFFyogQsCoGqVSscGJXnf5ajdYVbf4rB+EWEwDhec7gNvZx/WstOtnk84lFae3p87FWo88Vt4207Vp7YzcnmVlCACrXAUFl7fmnemfFsmCGg0/caIOjZtuTa75P5zLXjoAZbrbiLFxwh67VDR09yW6Tx8qVWZHeHgxmDklENovOpVFIzphsQxgO1TZmV8wkyHpFfqdYPyOijdvqbtOwmm13OrVpdAYCjNMc5OS7I2XXeLIHfMxEaOV6lFPzB9qRjcDkqrcAzW9d6pmn5D+YJVBw4dvCgQKdCKL4lHNVZ0pQPniGh1IMvc1AIE5j37yJmqfn+oiB+sG8Y1aj4HtdseBT496aSF1/L3uY5uWVW2JGkGHJI9s2VwH8wi0mT9TR+spngEm5pWpbsxC8y8iR/t0Oowm0Bq+ohG2KDGiDcUsDRHvL14+OoWDuy23VDtt8L5PqS2hG4Of37v27xXnfhQKEZHyfrcJ3//s1+3hQYe+GPO1iKx+tMBKT8Gl/KS0wSWLS11/ULpYBcGqEsoEVqXjL7z4scc421rmOat133yNWGY0f/ZfPwg+/PsLnlWthXMBGaN14AUCRdJ3S5LUK/8dSU8tNLqvi5xCeob2i8jRR3U8z8wVNtJIeDTP0uvTAS1ghMCNok+TsTUrelk35dvageG8lVJ9MbklvOm5K2L4nlzb7y75j6khm3bRzK+YdT2q9sDB5R06iKlRQ7klflAMZHfFxCN1V5mhpJ4s8LBEOBeArxESSBARzXOamIDLpInC5KUoNT3NbfBe1gTDAZ+SJFukBzj5YFADpOTW7EINcpmOHu+H1Ko95QgoCqSAOq4g5zEkcj+78IGvqZAyvUuIcxPRuddpr8E9lcrizX8qLKjFK8kPtdbTqcq4hpB82Rk39LLflo7e6R0EXA3bLgGPrU7miXk7jEs1pQft+WUHuBUEDeNUCXIZtxXIhaAhMgT8TfTg1lBJtF0x0CqaCtze78cRCRd44oP80l8GVTR9lFcKpJPq69HzZ40GR+10l5fHP3P7RnbDcy4Cait+Ry9yPkTT1gY156MjPcn9hXXk5uypbf2nEtYYpotPBLeFWq/2k+LV0XpfEIW7DwXuBegkS+OIOmgW+kn41gKtIFSeWl9jvehReIB2/JXX+etEk/bBu20pfF0XlS2oU2GCA5hyxmBsWP1wo8YrwFwxwIkxbHs7mYosf6Lkqgdp356P9X9xJYpwSkMB8iP4pWHkiwnjJq+45dsL5yY7ZcTmG6zHTjdAEd4KT1Rcr4ftUjnArfFkRJze88VJ16FHUgAAAFgEAADucYNOZapUfNBob4hv/x1tdAsHq+sSOYdCs8L5ZvoYeFhdfD1Mg2VlPDXeeX+nraHfnDdIWpIaZ4v1gNFBk0o8KqG6A+fXrc5XgWb4rGAD/l9iKx3teJCOUg6wco6rIKYS3xfa4Acov75o0r9rDqWOUpS2AEzOQ8pn+qnwcRbf/eO4pAQ+uv/Ubf9Twf5vbZz4xWLO+62pRbBDtvn8PwOJ1sZzma5qcdV27IpcQ7RxWFAbUvnYInxUYqibSNHJMi1fHbE+MwaW/pYftsgD/md22tmxdSgJSHMDGdOrQhgmoPc0FmAlfxIaO+9nMD+3ghp/lI4agdJIEi+fdqBv5hykVHLWSwm7+klOgvjX/Uzzq2vN2rqUVNlXq7bsBZToEEVO2mDT0v3qlY57shWVrlEBCplKl0S90PJczjFGbgIZw0XnaGt29wbfSAE9hAKs9khcSAgY8u7/7fSNlfmWtPkxMLQnxnR90fed46oB9/4ChN/R4JfRc4YnLoocbWWHIDa5KTKYTB9+uYXNIUqTizMs2wHyScwo3zjWOMXoQrUdc04Y5ifq1iYNOEwIKeQYbU3wryaj0WchYM+/my6HDEUWz5SVhlFmWkK+rRHJ8XQIpgUrtAmZ7O7Xh/eZ8lw8cHCeAzYpTM2eGcDc/Ja+scZyZNUyjWjaJMMu416OJUqPLj1duET+tqZ2FG9nF0OvOpf1yuljPMVckI8IiTC1ySjJAPssL33kWVvHmAoqanVRnp9LqCVdi4sC3VYJ4l1AVRrtAchwO/T/WQgsklUvel2/jDV4PM73lhgznSEZzW7HTMl2FwhWTTpSGZWjCGItBJ0t8O4v0H/fPpD91nAT/fulrOdMNGM0NlFkdyfn0hs02RRQmzPJ1iEzIIO8XEWYsJe9iBfLpZdZnR14Lj0EB8HE9vb9p9EVRDcKcFCID4wnWTqcNjt/49lGN9W7FolxWqhVx6L+mWQ/lrcLsTKUODoWXgZzJzL4EogjB9PKA1y9zFnlZLq5/EXMWUGbAKKqa36RCWONm18Mt5nzNh96zTBonJ2rRNu8jEO8r5mGOZrcnFQGpj2wa2P/3qmielA1juQuz3ajdzPLkWDAfhgaQ8SfCz2QhAXTecW3PeEp+tIxMUbFXj4UA9ygdVvFXr3XExB3UemMueOvjd0slV+pv1oq/tUMLHn2NqDtnE4WjNX38CQL1RRLcEpksyfC/Xz56qrLQGuIOXskNF9xSHxJ0eNHhQ1kcXUr+Duw+xMrD4cc+QiMnT/c5nbxuEbcXVTsHH9dfv+xyPGjp8TMT4C3j99/eubsEJk+6eoT8fdxxwsscTJI7TsXUzlaeC2GWjoLsy/e5tuduttrAky+lxRXBvm6ywe5jMENXOgf6Ut8EZnKf6A83m2+EX1k/0d0cwQZP/oJOhyYlYf3K2WAY07K1dxBx2EDdwA6hzS8Pt2t1oD2CyodDyXAcWUjwRg8uPzqrle6pUAQnRTTxAAAAAA=');
