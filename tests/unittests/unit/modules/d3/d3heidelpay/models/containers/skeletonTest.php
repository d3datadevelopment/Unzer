<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B355E09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/CEt8fI3bhkf6j8lJBRthnPXOvzD8f4g/dk4wr2T6l1ZtZV3stTZ1ciJIVBfLpEDRq6JT8khrNffOSGyUNx9rZm48GgtnIl1IcWlkpCCZapbeVT7QfIznt5R2YOYmVi/HetRgRS9odMGYqIkrlsd/aggAAACACAAAvnqdmGyp/4qTsLlUYomI9Q+9M6z9NQRSKszb0Z0+GT/lANTgaGbULXauzMUV+MXu9CMKqfSOlkkISykr+7mDMoQuHq1Mvu6yPlEr0ZRQLQm0c9Xw289bO29KjoRI5rfXg/UtSZuy1J13d/v0POtJF+bNLGzfH7O8mBzmlPR9ZsQtDZSip4wplLZGHrhKRqhJphOmJ8RcQ2yNI+Y6bD+W4p9Vj541eQeT2st5Xb/6xKWJT7HyR//xebwiXfHZZW3CG+ao4z2wHEwssBaes5SNzyVnQu7fpbECiVuZYfRvRqfZxASqMIArxoIE76atOCFYRRRNuO1VKquynSLQFKqVBsJgbkGNl0OSlAiViWNYnyP5mamAFTFnJa1Bcy6nWsBLjmLyQiM4txH7vZ2UYOdxu+pO8u55krnk2tfej3ydmap2gwlfxzWTaArkj5lilrmj/WnHSTtMcVIckEXR86U7xofk5NlXpmXzq6ZFoHuuZYzKJFYKw/GrLR/r8BxgxiXFeetxLZEWvo0hqR13eHApDlT8i+k+IcxmsNXQbZSLVkkm5wEwjRVqQi+4ILZ3Bk5Vv6gvCmfy/iVIwXf3CfSc9h1IUcELx8HRnAZlvMYURUeEzsZrdqdvs2jM1JQALb0LJrjVcxDh+ZakEVaL0ejYcHG3iSeBEzCsRxvS0H2gLSdSvSM8o4lZYfnJGRKk1x5K+PZxTkJ+hX/5HEEH3rbaEBLA4vtkdqHHw/P3floNLL3AiIp2iodhQ0rPdYkHqtk1IDgRMdwin6ZuEXIaqSWOpO0iZr/mJpBkN67M8KpXwQuspukQjdeovmQy+Sg0Joi2nOiYTvWJbrOFjC3YiDGgDtYGwHZzPBS7FQp6njZq6Pe20X4ABIrFY5KRDd+JNcmPvA7KB9xuysFn/dVNlSwdnWlqaqodzNeFQCU4f8X1/Be2uudmjLIVhQTrVptD+39li1Fes9+EE3PMsG3UXR3PwxEUClDs2LazmOlgmb1L7t67nZJk9uKo5XAlbnyV78AvORWfjwgt+j1tfmDYLe2gDYP7exN7d2dNVWOj/2k/lvGljDgClweunzSFhc9zpG07Lm9N5R0QYBs+tsuo2EMGSt00FErTM/hQ1Cwhb9V/lD4RfaZsaEsRPv7sxiYyaKD1tyQqanB80MF6hGHqoLxhuPvOPFaRqlATm+He18K25/zDxk0R8jhGdQsqYAtpzsLGfqFFtfv2+8FLLxTHiecyf2jX6L9N69XnMHd9OD6LKMqqdY8OMQIQheE63zbsMS6Z0GcVhmokzuRhHKoQybek/r/BCocXb9RNaQyuJy3yrsQxYrYQfhIe3ldY+P5pcwr5b9ol9Wp4MWHxUrwrxb7dyT+Ve7gZURHZH+ymWqbPkkUFgv1tUctpUT4BJO2XcgRTNMaDG0hVD/qKCPACpk0HgWtzJS2XttF3qz40UNi2jFLzxtFHDKvsAik30O0eq/Gw4wLvdPzyaCMRnXCz75Adzx0LDCGDpR/M89KnNtQ3rOYve6tp9bYU3nuh88XceWQuGnOsgSsRw0B3UioweGVYRNEyGiBZNqye8a2R0R5oTup/K4dnUr9D/93Uoy4iGLlJcfs1xjIZS+TC7to4WpGDZDAtkJNspz5PrDTgjySij3wUOSnGg+jf1aVFOI8S48vlR9RwA/Gqnvardu7OgBdGNP0AKxJRUGKyuI9h7I5P+0Zmfz40KSXxoEKzGfMOGoXy/328iF3PFIE0pyQ96bid2PFDIxoTKqIIa/YHTUl4xmM6DygHlTVNnlIbc6skfSNgMz7VgYW4xSIW1rdH6sjGG/GmVxTSUJfVYnaAm+Uroi29Q3pMle8jDQxMKuZZmq/OVBVlfLsMa4JpPy3rPuNleu9DfHYxOUJbsP9AFkzgK8av+jVWIj9SvqhzgGVbXq2epmDlnG5p0E/wSzzY+sHCkGVcQGhC9qCW8HseWKM5LIka2GywT27tNsxgr2QvWO0c3LJbS2QclZQSwhnhUHYDobM8nc6hpp6GlokomqRtLA79ApVtYclGsFycfTBeT6euy4OyxYaQKuvjEaH3LC4yk1KOLUXNTogz7gkScDcRWxkCVmxiCS78a04WpjNavbXFN7nCSS6CW/NmpP9DKyXQCn2jIo/q9Snb7Qk6yUeZC5a5oztDUsyqZ0eU3EnO7ZAg67I0flXmvDUqNtb2SpwQt8yIusflqX6cWpVCUBhTWcdR5is2TTg84VZC9CyhjJPM0zUIsw9M0FAYcUfv1pFEm4osS5o4PSqVKLLCqreLOGxwZSdcCnmlb5dsJUfEqtIjO94iVfmsNH5zAB/XVvQeWHRvfV11Zfj0RwdVMWDul/o+R5QI/thDARSSsHXGz/Khhf/6cpnFcm1kkfgRA4kLqcwFeJO7ZYJaIRV6tDyCZctyS+beUGzWjx7sBkDTh8FmjIgn7hqP1e2Bar8l89lMsGjRNP3+uN7vFfBIaYoOmC0HbIMWUqXfXgpMWu/0hQxY+d20Hm1C5mMdJc27jVrUrWpvu36vswlgRX168y1GhSVGdqqcb6Uz8WO3rB16NnlfRX15Czzk5LnxjLbDt1mbZhPFxNlJ1fsfjujLmStLulue/mjPdhThnXY6N4vHTv/1S5DmoFbSMA6tOT3rZP3Oie2z+mQBBPdmdtSrag9dKvEvvRulSf6dJtRCWEvS0MUf5R1SuNE3KgLpyOJI5Dz4BZLdaipbeSsbuFG3KM4LPRoRV1GbHtFetceXqoXlgpfwLhrKVoX6FiuLAdTFqWsPTqIViLNltO5qabn01A7m5HZBTF8msxLwELmJOgtSwNDYkuPE2eZWFFRmz9eg8aIkFm+ycaN0wSY2+wQeOmJT7fReyPdu0zwVin3FqCpyI1aZs5RoYK6nsDwQ6wBIE+nS4lEAAABoCAAAJLqSjgaV8Z04mahi4/irPSWsaJj1jK4eJzxvfcuratcWa0SosIw1RoNC4Sc/3HOmsSvWqQ23Xvz69UDeJyZghao2WmQxrJYPECC0aGN7wMnugSZpwaIQ1CR1uRFLkwr+pHW1cz5Zb+UtoC5gO2Svi/yz6NtqhbPL+UVQiTagsrT1aUZqQHvtTptF2d3J//4SZWxdAlWfeiHQO3vwpABWKimxFWM9/FxcU/DnCcMTOsgM5od9urvWCDuUS7PU8OrYeoToXcfW+BDbPslZKG2K/z45znsMmgWqT4xgfqhCTYEhDMuuNUdFCWTL7sA3oGKZpjhM6i0d6uG3ZMzbJhHwcaZc+bam9cYz6BJ/CiSZBldBTsuk1q0oXNjcHjwfqBJ3uZSHdJvWMc8E3uOh51SL/bk2956vDwp18z/qgBB/lSHU9HtE47Co/07VzSOEin3ZBEWXYYeZ48BKM/IjKNZlu3siP8pWaRcR5UMO+cIrwI8EKYYh2ac8pYIEny20fc4thO/fFriSRqD7wkstTTjNKLXlC1WcrsBADbPp6rt+Nyq+cS8MVlcBfvtSk5x1k3GP3RZA1BGDgjSUEEZUPdmGXHLx7rtRMawwTSprdjwO1oIAmJOp+4Cpy0tLRWR/WrGnOptOuQ3ojfnK01K3qatu1lUkBnV7Dab+zkv4Cu1cG2sPmsJSzzqQ8u9inFU5WW8dbyL1HrnEuFo2V2Y0yWIsYQK35XJyXUwPPSMWhfUP5glrmlI7b4+Qs66WnVAAHc9kluqbAjBlSaGjW1NREMVojdnmnWgrWOT9332bbKbVrP/K+dIaZMV49LtgvS0myKEFQ+cXUkkhHgLLbcDALXAl26WvTjVh+4VbdFzf9s3BkNp/Q07CzB22LNT7iSffcIDjp0yDg6AuenAb1mu1GVxg6Gk1mTPiVfc+Srneo1wu6aurRX6DfCy7IqBVJVzr7O9z/AiZgls4iG7crRUvmlQVVNE92anMhxzsxxhO4o3UloVpXWmrJfGVpFZrNyjCvZnZRDSgP3GsFbS3cFCOGIJwv9KQHfreo4KVVBPchw5+3BvC2TNtvGv0/IzLHy5FCmc8XgO+9FJlrJOB9P+hEA0CeQcjnjDUIw05GKA5YLe6P1/HhHy23mSkXfOBRNlX//2Oe+D3YVv6VTzu5jQ8HaSRu37nkEv4G9ZG8EnsTUTzPLzEg31EoYdbFB/pbr76P/6X05V9FJGCGP7xNhKVdkG5uzTGQzleVUVKGhuhiBJcUU2WmwU9j75XAEcimIcM8qDd8JfXCeg7gWeBT+6ttYG3OEuBWSuAZZziDNA7NoXNhzIDYNjpZLNK/4dq2jNSg9paLvbIkPEzvH326ZwYSx2HANmzdiBXEWJj3a0fEvePLTcNy6IxvjYE4KJ5xKh/k4/dIJH/U3BLajjR/CDFF5z+fu6y2DGpUrteLD1bOWp2ywElEVAlVJwinEn7kfZhMeq8R97PwHM4RXjNMahoKgdPyp+ldmtPtDe1fPUKLdqZue9K53pQMpcEzm1pAuB3VYX7Kx0sioD1HcRjrjm0GonEL1wBioniL5mDBKra5Wph4K8a9bUAO+8TkqIdAxJnZn/5qNadsGZ0PtOuwePnOuamAcnrq3LKyzvrzaIntZap0eUhup64DMI2T/GX/pY+W+u65Cdgkc+qH0Bvyp4M1S7/YCIBVGePWk33BSjR5iAB7GleiN5AtMTub2wIlmAmQ4fK3HOTrip0e48574FvzaVKR4jKexuRduSNGVzNthjR5l51vDqt8Xw3249MXUD5X1TgxG1/IUZdETx37K0zdVAMThAqB6XJaZpc3KVaV8giuz/+GpoLTDM7R1//Hjg6E3cGW9IBOxvibzbfbUhKuHeon6yKQf5yOdqx1PcWsnodS9eLAC4cvjjHgs/v+q9yNP5rEV1FAA71Dg+gzW8NMkYj/rx/h4a+QT4v8OPAsX99MKvd+dVJ6PPAPxoeP8ka+vO4g/Ydk5089d/unFlyf663ID9WpNOD6o2ajcuMMLYFxY8pr2wnaCTD68JhAAf3s1TupuCOOeH+MKsBqFMY910EjoExigbBJlUGsdVGeyjs6uaf7LrRtgvlD3sYjsHonMHRVFUA2vwJ47wPQX0bRrm8tjFjP/ceq6lSo3zWRtPT9GCLLK8k8IKQ6DCpndWYwiskvWWOo9xB4zLNvUfUItFB2e/nYBQGtk0NmX0bOg1hAbDnZO+cCWgQiiXW/CvRT1OQKnFaxNHJzjid2e64oNNeOBIF1LYjA7wWglrzn4XfiPrbGOJqgraSiaqn7NtzcQQ1XrBDY2KNLrjv2PKJd6OuRlc1UfPgJYFXA50ny7eh25VOZuhDU1NU2podIsNUaBHPG7D9ZxIClAnpwAEi5YIfy/pUCz/RxlHSImlMP6QQsZVVZ8rdA0DjPPXBVmCx8JCRQIsjv7tV0IiTTmzC082eojW08GXh4sWFjGq+mG9+zeuVJzKb7NZmnvw/kClwyUn+KzA32lpfemsLdSnGlFxAqIjLmLTnk1/Zx/o77bywOUBHiQCLnEZQsc33lz4HxmQ7lo0cTW24ZS+LEdua76uOmdl2LD3rpcfTjwxv/4Fu1/mr1ttkedi1/PYzNtyNtL4nI1cAVhmAZYZ8/0zy8P90A0kBB0qXl1d0UIBDVPUaZHpjCttce2uvkGzGHYsgalw6wVCfOvnHu5Uast3BMAMsPyAAMDtIrB0lR88kg5gD2svnlmoeVX3CgECRxmDc6mtJolqjpNZWY1WbPguAn5mhWnQC88osOZ43P8PXT9l57mStl1YsP+AJEUalmkCwCC0BMIrs1sKAbFS3qfoHyWy+kl3v7abNGucQABuSU9W5tlB9O/DKSjPfggAAAAA=');
