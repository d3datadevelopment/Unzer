<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/DuqaIZ76H9JB6zX5bD6sP4ArZmcKsUN/j3amEmxt5AncRStfTu4Ex38vL7g64So2MrCia5+EnG5Lmjs6RsTFcQ3gbRjcP1PIN7kgtiyIax1O/a28seTfoQLL3zBA4jQAi9BeF6tTTx6SuntIgwDzo0JNoiGZg/VoDcAHYhynhUAWKbZk2KxplfwXZsLPeTlhdu2PKGVRu7rPK07wxXPQchECX/O0JX1qCAAAAFAHAACmBl0J/rutzGXKBuF3RWqL3q7tQ043sQoyDcGtscI5c+GOJ3GWaiJ1Rynqupqvgbp4usMR6aGhd+lgpFA19XL4MqtBrxrKzVyCegVZ35zx8ouj/qkiy65+a51VpHK3dlaUm6wWvRWcjeg/7Ynh8nvOoS1t7eJArmrrd+NVsgE7soCyLEm4Sw5WGzDTgr2inZqs29VVIx6c7/vvih2JjbJqp1VNPldiAHuVe11eejKuPvX9qz/DobnAJrkHCWZQBZB8yMdpTJW9LEZTdugLyyQ6/Se0sM6CdChyrjReZITV54fl9TVf8sSl0m7UmYrptjAZsBHAg7UVs7Xt+kKMOvy4j1cpG8tIYzUwNf6caZnuLJfsx9oGPTtL7ABT9mW3CWSXFDZlkfLdbfHF8LLxgEesHP9X9ETQ8CFIuYcAl80mzXpK9pZM/gzn304WHlXJ8/q4gG8V+xs4CVqeDXQ9i3+7gPWTpYttvhc+1iG/mRLBZaQWOz83SKSae8TPPeFcH8teYAXR4zCfsH35tPyYX853E7v2j96F0DMpD6R26v2/rPB0O2Wpy/mGHkL3JWLiWGcTV9OtNOU4qa78shbqd08ptBJIkZ5u07JslJNdgMi6m5QhgLUAsVt5HW5v9vEk16++6eW4a3ccXvbDM4G/kX9KkPMge6ZHQ/U/2UN3DG0LCEk/rcLH+QJNrfiAAQZh1Q3JDDDXTtkoa1s/8aRDJwfEWsSruGV09G4Ka9gO+97w0iHBKuaZ/+xHK9HWNQ6wwtfW7YH6pr/V4Lj/HJc/ibUQuPxjl3x0qNqr/w4CCvYlDh8mn9TjbjWkFzWw4+C/abYNJqXucbvfyzoxSJSupwsuWYOOC09PVJTawm9lUMA+uik5Rm32u0EV4iKV39TGkm10cIC22Ym4QjKbwlBt7F4XJCNhvZc3/BPQoD0z8Otw9Mq4CmtVc0FCJ5+6XeHx69HFMggB17YuOQf/GUMPvmMsdHVmiij6Mf2pe/BH7M6YLz9GLOQoSRcxu51ck0IDqiKpf413SfF63r4m/KjGwFTGAO9YDCys7eQZ5Epe6dl6C3DelazV7u68YP7vHB6d2MRjTYcP4XnAw+27WMlFFei0kXcBbbXfOjFO/7DZvWoA3HmPvLcq6khemFM9nm1mvf4UIg+bjqVySj/SDzlVAMbt9dhVtmH2eQugfFO27u0BVbE8FiMHWJ89fPZPRInQU+18XOVJDSlaFwW1OYU0+2g/+wtzxgQ9UOTBX3s+mkCFG07QLwxU7MUfxxun8bWStwuOBzX8YjjXSTYwPmYzcOMkgR+KcBewAzGftGoqq0tLE8WNhz2+2fpWkd9Ev+LxxnpEY5zFUHmy0+NyNqRdgVddYinNafRpbrCmYCLJu5y0blDeD7p/BSGDQ2V3lcKnZvBDtTO7Jkc7WE1IGNonNu4nIGKONzhEf11fd3EyAHUwgPnDqyXtSmFdQk4JrNSK2khT+ZryFHJR9PTBA5dWiAG7gvipXG0ygHHDOdpUO5hVenTAdtSw2HRbHjaQQtkFRlA9Ne2a3vQxI3tTtXtvVQni4veJFMZGl+okGTuNNgQMGzedZbwcCOiQZHIie01GsWNyTaY5/YoJYXWLB5CABr0J8xoIM51kaysSdCxcy20rAHXQGHFgYxHhcsfhD49jDmnaU8Ic0R53qnuok/pzztPCnwSn/9T9b341PxZCrh3izedWtMbWSFh7hLL1lNobFEyNg8J7Yv1FTzniU8zib/i8QL46rIjBRLIkC7F7ghz9fEIX5wOgsAllOxvKza5USvdOicCUap70ymTFlw6K9ZeKtLKGp+Rqrk0/KEf5Bm48kXjsIoHNgFmFsX1sB28798QZi8weMqCRag0WuwEkeyy5/RvB/OnoRlbi6+0rI7xYciwn+DqCIZhxNELsnRanmn3+kg0aJbSTVguT+6t6mPzuZR1RPu5D7LMQOh6iYYDeH10+lo9kYgMDsNDVhc3pJVLmKWb+cAX8ouNtbol+Qsr68GmXHxCFakuWnPuDmb68Vm/CmhVDDd4jEdZCYs6O661/PTbCqlOZ9/Q//0enzNHxpbwguu43mG9XUhCENwbC6qMzRl2TXITEbozjF/cZJ1ctCPTDCjKE7Q8991E5vaE5VldYXlk7eGEeA4YysVtkZ2Avt+LenmK2fCRmFSIuw3fBGo1Ac5b2vJgmJ1DBUjmTR5YuTSW6ffr9IHFGtS7OmZWkMuVZS/U+ydXWCabpfikijL1han861NmMaGzdudBrl07R1Qt0Ga6NHAVKLTQwVzNk38EoSqOn17Q65WxW9mGRQ/fRx4lJsuQWE30h12dSwbamnWUMygQZcZsgRUC7MT6htwGHd85IxVgaUlkok7RNIjIVHaWSywY/nWd+6sSGFlOcTAV8zDQUCRPUyr9r9XxNG/H9SQz8hGh3cxAUueby18yGaap+phPMewHZXaGe3+NdwbkJoleo4fMg29vM131rUw3lAp/C8vAlbH0bU/ZRAAAAQAcAALBSMCduB6lJWmEeMTsNVzSYKYChfDcvqHdbTUlVrk9n6oBf1VGd1ONT6noYd4S7vnN3d2kCD0/D6g7wP2vFsTfT3XHV94wcuQ5yNM+qi1tJlr8HhUgpBO3MtwTZAaL9i69N83ROyWUnFDMeWjIVFrZMj/EibW9OIvDLvdpp/tov8CuehPrRp7+bedBIZPMBwiMos6QFPE9EHRxxJpO19MlBdtFy8RUgddXa6+Sx8sE6yJ9sfFY4xcp1Zzr6kX+6m8kCk7D6nYtd3D5spCcFTfmsU2KxCHiA+5oD1I9hg8lL+xt5l542t8DB7hCmb1j/f/YBbgPnKL/dVoCfJ+vnjIyEQnOA2HmtwsirnTZ4Xm62NxNtidk1TGuXvWzGyfR0mkEmm6bmDFE1Yzq5/aK1bxEcL3i7LxvQAsPM40ktQQpwwet6ORxzK+0HGv1QcfYGS7PyzMlrHUHQ5sZgoI+hSOYB4IUdv3m5eDaZrQXf2EuAH6UiYEwJ4dlwyoh/EqSyAeibsbV/0jrtXh/k3S0qQba4LC5a5Fl28oquRDiiu9nA8UzTlV4prAj0wgEcWdmfHAo6nSZbus01j5OZCh8Zb6QbuF+P9I6OLTDnH8AFrRxpGow6L/ncm6ecCoGrL2q9midrQ33H5Jjzd1Rc0AVrQEnRl79s74OpzeKxIT3YJSdl1uJ2SItew8jB5F5TByPuMyziOFTi58pfVEcZr31WbKShGNaiInO8LBf2QTZWm7yCz0tMVzt9DRXBE5S/ol3vNvvfIF3S9Umc2D7zmLeGfAAoVEaLwHTKxZxw02oWMdGfOWjkH+rpUwTbUDnXu9Qg+X49FmTTBxDD0HYmgbL04zoJWXniqqnYlGIeiViNGYQKXVq/JzFnYoIL5PL05VHdQBNaC4P8LhpGQOjOr/39FM3cYDiX2F1IH8FS6eklnHKeY7nxJSNdcEQ1Cs+zsY2xGvz9C/BUXj4rfQRByXXnEnTajbHHBcbIG2US6i5bWcuUghBlQXLRQJhnrXDP/ZRYcBLhhIILqNMVWOuagrkWmjAe7K2z3EsE72E/cOjdAXSDAmtO5r7rp/L+XV6Bl4z759uvHlY1iJulgMsbSAgz/PxEA2zkd0U6kbwf3LflRLslvMfVks/UXCKxr8RvhrtZ/6LaBBKMQvQn2hyvUbb0K//WddsaKaqdZCsJGKHHLJ38xO7vvLrFr8r478/7F0gR9yLn9/7SsTzfOupeM9BvNcPKjB7CRc/rGvQ8QApjg4ghNvutwPznyTlzqXQ+YVPyGWaQpsoRTA1AA3S6PcVaFrnjgTPMOrZ/bjtt7rFIn4IunLOqq3sIBTQoWVCHG3Xrme3p6N2XhaIP12EiM3X27hm1xkXtdSwTPx1J5S+JRruoMvx9FAK4b6NAw4sgfXE0VbkcZZDWs1WGqWAlFkED0bvOm+10N2pEftpAuPIEHKgCgqWZHdu3T45QTzAd5xy4C998Yziqr6p4xbZfIcvrFYN0L3QlogbIa1WrEm6BjIADoCP9cor9UNgIk0BsFmM4AthdinfnTnws9r8do9Qgw6GrJKdcEZVT1XrI6fnwOfZrlSQwYm2eJ1WnmDL9zpkQD02Jeb3DFBrAZa+/S73opEeL+Op5rE04F9ulML+uoMGzM/lS7+MSOHe+/ZFNHM7WCFb0zS6qMo8jPndsnLiiKr8RY8WZ7k6MZ0yLsLmCi/p4+xI9qJzmahO8Z1++IF7WW/1W4pToZhplUFncmsC0uCCzUaFkakeCb+XTXRZe2t1xaXIWifi4b/mUGADm4/RiEWvr8Ze4wmhdWO6bwPy5UrINrAIRHpDuz+WTKrXSo/GEleaWrani/e8ED5sKFfzdbCydofFLV+a02dC9CthrR/dHJgOnCKRa4QYSSDbcrsiz1W3TWFBVaXMSWdv8mQnK11+BT6jXvmc8KGbVE+esBOKtF57n1l0IVVPdmGFqXrMFqZxcFTdwzG49jh7+Y4U4uEgRSGRWA9/RfjHSmJlWwmERE+FlT8tlqtap3KAQSZrKvA+Kv2+9sNoRHaSUAgo8w7tXvklzKUk5+XCzy4Qlacgqd3BgbLmONy8nRhtd0NN/54K3hl5BMGlOrKtSo6dMwZBgxEDjHxChzMbe+XPjNmw8YohDjbnVXtPOzu5ROzRm7RyTx6WrKaDviqDD3mMcvI9fCf9ZM9LhLslZ7dwvjhcYxDBCj+HDwFSrl0rpzpC47sNkd/r2kp1DjQRCSY2LulzhY4njoJv4bHxZ/RSpl294j9WS894I+lcWVHP7hoUJ0umVCBDOQNEexdG1JIquqeJVTXCKMtR5ecDCwPFhIppDysdXibjhzPPUrOB1FdspBT0pVj9IkIUAnwv5ZeKW1I+ACg0S6AQ8ftfexnZEk6CqiBkN4yTWHSekA2zCDxwVySxWN3ItdbZ5/aggpboIRsghPOmT5qTOZRoOnEoF98YnuM8hHiEi7NWKP+OW9I/CUgAAADgHAACg7Q3bFkVKndv7OcroTwQr3dixqcSbCl4SkDMBJkGOgPAyRtnB/EjTRNWhVjluoEfgn3q22+1ADaoKHqyF2Ft2e/CN8OTp65NN4ps8DX76uKT26XLABWN7vxV1TIITiUc3UOfR9A3/QuQE16WPrDRgqqXe/OsAdvV+RnkUwfIloz9l/NfMuciGv/fVsTHELTFqs+JqqQTDd448fElAm6nKwx2VgNNsG0TzWiLGkBmveoR7lEh2gsz6L0yWdqfgea61K3sD+ClA1A03e6BjWoDoiN2iHR3/6p7tGrjTn7NZnQVabRCj7nh8M4SkU/zMs0Qc5XOc8lgg8WhI2dOGUd9FeFdqufQouqK2DZU0PA1fsXmOcOqinKTdsoOIvc8Bud/nDeenKTtDD9ptVcd26A0kMgXwIo6RYdxM7U8YPcz5CdGlcgwIH609cZFLOBIcFsSbDNlnGCh1CaH+lkwH2rt91f8ZS8GkMONHWMMpK7riUq6WC76aotTJwvr6TUT8kFdADKxyB1RohrWMLaPUFNpiDr3CgBb9lIr9xy4RVElM0PyrF6a1FtH1P+N/CNjp5aNXbiJHwAkWfT1Ego+3Thai04u+/dfN4iYkCUyMa5rct8363x6eLBYXtMrpJ45fJKxG1OI+1Co2+fhKSwP6bFfVt4T/kueSEXf6UgD6UAxSApCSy1JxU8tzWgjgE8raoEiWr8WaS859AsR+zJMpMgdR8AkcrhUtTgsFsfz1wCMspaTs/vqLZKuZ4+3bF1eYMZN/adWDjQoNac2OUyYXSzne9S2uHOvgAQ+Jd3Q5/DrDOhs4ACf/6Y+7p797AAtF/aihK9VeDYq/E7ju19hhhJe/96mVKOfCoEt7NXgy8q2V60V6wmvq+HfpzQOn5ocCZOrUGmuXb4diJrzbyoz+YFGwHBeY8DBvcJ1LcaXPALF9LhAAABviU6owh/Sv4c4EQYIxMpr/YaOSCf9O1aUyQzqZs4PC5ky+tGBa7HRbffoyAAg8xp/n7Qq5jV/L84uKizx7k7bJhnr41WHVOidYagIBZsHwBLRP7zpKrJTCnEk0Ef0sfP6Du6bBkTnQVmQUZwzqC4AdGlmVGH9yoNhNhCu8DEtrlqfhFylRFPYQdYEc21UU7jsbR15QgY4XQDZuJe+ZA0pn7GZ3JV1/cwrdG7fzARcddL72EQRUWcPFQAXb1x32hlF1Dz61KEmNOafFljN+LEk4cV4Otqi5F0iCH7K9dtXdJqcHMZtshPUaoWD/FaRj/zO2UvlkMSwnk6F4K5o9M2bCXTixV/t+KDBm6r+3KbxNqUWeCAUB5fZGNyZuDQ1UDq80+tFv7BI2tZvxzz/y4L+xUgkSvozRRg+RR7DKpvfvryI+MSCbHZTWnDigp33V42XJUPduMM7q9Ks57Kc8Wf/N3vQRhpVzAWDgxZfG2GTcO8usjHrymwsmEKbLHpCoLiWw0G5jPyF3am1ESGTs0Bp/wvpHqs8nb28DH2gX547ShVDR7NS7LOeyyCS81DV8n8GISZIRHd6kf6dce4yLPDG4h6Fx+WAe5igR2X8zpgjV4qDJDmHJVjPqRYV5xI3W5khz/LAsdrw7rnRQYUMLTvUtF9EdLHtOG5kM5Lca/PFlHFKdC9nvhv2XIYeNvt+M0LwJd4W4ubmgyIWoAbkI7IfMSCX0w2kRk+pDWrdAcaT1GHv0b6xg/YuNlyt7DtjIl6XTIDSjmDOzl/SXECxrYfSug7DFfuSXkdlqYHO/QJEKKtTfDWFxchZVcbtCcvUwTW2HhHIyHAEjkj3Qqil166V1lQ7ON0ZFMtFG6duBFRBASplki823TjpkWY8RJDxaOjKn5eNz/9qgYMHgMgyokioZLMvogVGfLfUQa5TADIViR9ls5ZCJnb66vp9KfANz503QCHyRnpIIW+JjnH+VVwwJvIZXk05GTeU5yfMQUVTrAv5kOGOxg7ZxscGNEktAiw1zf/oEIfUdsppmhybX0GLPxY+iDHzHgyqK/p3G0HeeouGDyTqEsxVeWSAguUzS7Gb2pJl0rHwigCDRozDjnJDPFBywnfL87pptLqeGnmjdE+0gjEnrRhv2UYT9d97NSwEQDGdsLNKFI3U6yy1tZwpbrMY/fM6JwZb9WMnFNQEYsTvskC2/9oJzmoDDVB3OwklKh+FMc5ox/B9kfNoWLCWZjR1DKT73WlIMoWBiqbuB+bDf2oQjrr0rzylg1Z91pyi5o3SXunv3+bBmb9cpLhGp3/DT72hlGD+wHcY7eNNOOc1LS57MrH09AxpXFmPbPXN4+JWZfqn74NBKFThuSP3bGHal/h9fezyOs5NtMugvLPGEt0AQ4Ryierep8k3CltvmpMVqGtOEAx7U7w17sCFbgZv51KyqswTxwSgFAy+DD7VWBJRtDIgeoxd+qxvngn1leJSpD54SAFsSL3At0GAStYMTpwEr7b/QH0zKK/htBPtSBTkAAAAA');
