<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B315E09EE6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/YJUj1Tz2X4WN5io4K08TmgperI55w6TX8ASjZNfvJbaeQlm9/xrR9pzLZZe3TxMiJYHYo6x7KTYEzwYt/X1Do1+2EJBTXeuOxj5ofK3jeJWgblnGL8rKtDGv6bRuERnz2p58GHCAaPpy/0aomBW1l+QNNeGwhWXxtgCePX822GNVtoOWtOj5vJ02Mqn/OEKqXE+czdrpHSFmnIhn8HWckFH+oFR5M/XcCAAAAPgFAACm5jQfnJpiHRY45oEogKW6hAQqRdpOx/M+sbIi5V2Pcy3G6G9/SIW23c2f99o5HrhrqSSdQQHQYS6ZBu5NYJ6ADuruguo29bFF2mHQ1f9qg/kR2N0LZPq96ImoantCVpmcycAOGkzKF+7UipfRjt07vJuL27R9UrAwZSagtCToRrOfUbvyqjUoRGcMeM2/o33vv+W4vRPb97kqNekT3Z95ZgOTnqzQDRwZDcFdlMJnWxUmvKaqJyiYcWU2TBqTXqcI78EGrFF+mwssGSdd+LV+IfzilqII68JEJCRKrXIUhCGLMwBBdIVg5pZqqgIKWwNHPjGKolpF8t6Xg8jWqYDAg26FLxsmD4a9rujdhoXNUYB2WLnPQit51iISlEJtEvlUi/xlXmuO2qEOHIXWrg86yDV382InHMikMKl6nVlGofDdfGyJSVp+6OJmq6w0LHvX8tTo2ewQO1EytIvKD+pPF8L+hOWGAylEWlqw6ewkxoRayj3cyYnN037D5UXr4hCRZ1tM5tT0u+pHqvCJKCaMZCe9w2JVFAOOnmJIIkJMvfQFe2hbLhHqItF2CDTG06P5JrpZhw68ICqusgDDG8HzRc/uyBAaUASN1yRZlSZOUrkz8Uq8NpLAHfIY05mLhJPFgPhq94Byj4BbTDpztC2XwxBv1o69IUn4bFJ4RNSzKRZaYX6s+Nv9Ra14n0hafPsQigoWv2P+afsnCvgOjeSUqAJiZSteJhTRfa5oQ+BwoGGMWcJTmtsyfJlAP3Km5ww7AaA17rmPhDceW6vSGYtUJfGZC8iPf7Dp9IhyexWrITwi/9bdOhqUbdxtMubpK0/okbf6Xzi/Z0+abDHu0MVtFQSVcpZWcs7an1CKFj0Y0SVMSHk9NQKvMah7hANRCVi/sW13o0g6T8D69Fne/oxQtOm97ceA8QO2VimDhBzjaJpfPbO1LN/7azEnFFhdEGuJMsdLxaynfvSSK/DXKKWUQInb0Ibx2p34OOJePDPlpPU/3Q0FIhq20ZSlLhAZf/zmfZu8RRpldXHIljPt23WgBv7ldcuFMXljK9x2AdxcsipTG1V+T2exM7Gq+0Z7BHPJMUGYdy59rXMIVGbUtk3TlNdNoRK5tfDKlu0dUWqB3G3OfsKsVPt0F/RgkTry9zqq2LOquFD7083clZcyqs4f+ygdKzj+qu0MBfoFmOiDwoCUpo2hWYht5SY5dn9E1kSxnWT88EtVtG4TlOzDsU0J+vk9mqPhkQJ0Evy5g77SR27yMzA69sDLeqTK3vvqovZO0LHLtnpCW0i9l9aU8XUaeuWZIE/5isAcaidHw2EZ3pd+Rpy2GKH5Pf2VE2jiREehFxErmD/JkvM2FFW/v2H4jon8AstBN+psMndF3CBwYIyWMt4OW0B6zbN3yvj+/LZLT2SXPddLuz1SadNXBtCfozbN7K3rL1+lgADumBlw3t1bBdPMY/W3+SmjWYmzv44yxkCI9GVdJ8k7EAYRC2wZWlBNejogF9hICUPumJu3yfil+ZOELK09IL1IUZtT+HwdgNyTYwhy1zNnunUWEJX1gLSI38JGQuii1skCIdb8i9ZbQA1+38i2aLVDClR+vWUKz8DqvS+5H42fzEbwH//dz5SsJwr6H8ad6KSCTl2zKZJCSTa1GhenOxWZ+AojmVw3jvVzvbNyvu1uz0/ZnuKP6xIx+yODc1RwUXHU6YcU9DCEWSqOt1SqXRlSxw7rAOybUfGL08FlGZhtpgpzaf8CRNkUycRaSGmOd24gmNLXAXIj9yVfPyT8N44Oxp+kCMN+DNel6jNQ0mZ7oobljCnRl6YVS/qNxrHiEGW2zf2Z8sUt2ARBzFW/Qrsv9mA7/gvlyVTRY95VXi3xZ3fe/G32cCER486tC0bYZgtxzQMfiKqVut8HPBNdTFYM2Dl4ZnuxETZJzGjpdXbn7lzlBmbFfPn+F/eUds4J3tkNHWK0/WyaWg7yrI4TZoCfEiZvaWkRRMm4sVHCvgU0ezPBTYz7Y64DO13SON5xuPrYKTh6z4M+dG2d04ISUQAAAOgFAAAputQ5XYC7wrdLqbaXib1DNWL0f0gTPD/D4XS41rvOtqhQ7vHwkxURoGKi6ueRn8jeJw6cMqkU3wFFwQd6pHpy84h+2gTcodD0En6XpLbKWyex7ecrO4wsqsdM9kyE5B1K0p+JDRLlUvZPzRF0KyYg7TUC8jL9e/ldLReXsfRyboptWcMkfdU2RomfGz+EuEH3DjaQIyobszN5CNYf/xQ35l09JOuAsyde/kJY4Z9L8UK/qlj6RSWzkE7v9DCD4w83scUe8tO76+vO2WXjnn0FgCrRUX0my5THhSgz7S2JELLz4MkY34/iNhmegTIWIqEftSc0JxmF34ODsztAwaxvFOY2lVHbCj5pfoGyT4GdjicpY4mK9nQgyw/Jhir+Or0v46ADXleqgXxMdbU6zMqugNqAlaHiOcRGN/gpra4W/f8yH0xQI98swwHtZqv3u4VVWoURXoea6y+Gv/uv95mCxq9mkEJPl3beBu467ca9ChncoH6h8LGYORQdnUZopqldMPceUf2X/B8p3UXDOGO7GkLu4JOaaI46yB8/msuNgfU4cxAb4+iveDQYM2dtr+R+gNiKXIbS6Sn0OHA2eYS6tNHabiUDn4m71lvfd98Z5+qviOLmeHiEI1l5OyGrBzgluEFrlhK6TycqAZcl4Iw6rdBR0yVYVuqeBdGbnJP8B5wqmiMYIlpUZfvWr8ys/h1+x51l5s0g6gZ5daRvuihVkFA+dqq+Rr0tsvcxCnLEamYMRTf+uYL5LCL6+y4QRUlv1MO3ApbEdj1h3MHR+utVf43rnDkD4z6WYAwxxY52nXfJoo+4Oo70IfSi4LSRvdKhRWAVc8IjtTP25vqb3Cv7kTdN6vu/Q0jVWFcaMbbDG7n9cpgcGo2M9WerAJ2DNG9qo+ztaoJR/jxKmXAldvfDP7GVdYQQRX9wXraBc85lf/jd56i/aS5FjkHJzzjwjgOT+qXUwt7US5ionPCPukvk75IXFBTSFY1mPuj2RqoCIVmWlsG4nbSQKrU75lhkf0T79yzcQNrdw+p3lDBWweiKRGX6uhSZRCzyEEbUVkk7jQieEWbet3yD16uYwwqdsompFhKCOE+t6/ZFu5VApYJotfeQOWuJxf34GDPJKuqvG8/84da5Kfunkuo0G4HeZNEV0U3+tKlb+J6VOvoSWPD/NNLaFWnk9RbKLMFHOERDhd0zEMOQamjC46T4iD+vko9wlginwHjVnkh+6A0hME8uWCXDDTeOVkVqWvjfBnbGQJeJG9NWZTFkAMjwAd6TUM/beUGwFvkAoKYVa98row+9rn3VgeW7CKoLddnjidlPlbwljrThNr5u8rLEMKz1YKxpElkEDvKfpzKvQ3HGGxclWKfIQbhSuvhyERbVlMQ75m0hNpIiE0OA7YkpMukKOyfzOMdo7OUfbXeRmsnDjNLpRElXaxg5tE/0Nec8x1a3k3V/GWapoHAn3+3lu4uyeh7bRjUvx4aNjvmGQ6hzNdXo0mL0bkxC/84J/Ez4ZUAoIo+QmztTASlpyRva3Z9M1cHkcHcveBXu14Y67perM6gDrwD3X4DZlfdQCFOK4LUuR6ZQOAmmkHssQ7VftUYyjHP30wJrRnQONUr6Fb7oqn6c+G5EAZsyH1DSQy1wkJ6yUJHP/xBkfBb1n7CTnOTtWUzYRcap20XAq0nk6mUjWv9OrTVCEAC1v8QnCm2AYwaldfXF03xEXcfxMqrcsWEBIStzSozEvUZRIysjNaNcfdN94rTO0e4zhLW0So3ZenPGmWhIZMEE27kRtfm7gcFqe5TojhPn6CDgwOV+DAaKOxYV4EpnaC0WizR5fJJGD/rbD2wGnkr04eN0HXaGMnASo9JjRX5kZC2vNumB/l707RDkwVBivd9b61gBDbdbd+FOd/Vpj+B24Yz7BADoz72ascVrv9CNNfjD/AOTMAUgq/UPwCN2OE+Q4YnEHuYhA6EHfni9N7mz/Me5FDG8rU3IdP0WYtvTcSHh9GyVmUam6ctgDGOwGu3Gw9FSAAAA6AUAABsnNgHydypkMLfI6lRDYtZACHvIzDjlpF531xhNfSUWyYGlkUuKnz7zv96NCRg4H7oR6Ca8DxAAROJI3oyfl2iuOhFIWKV6MqQEmZxNYYwusOnbbIQTq/PpbFXFc1UGm6+A2Wt9yPMkD3RCU2HkBpZqP20Tl99HLQ4iYYNZeJE/AkB6wyC3iQ/qbNk9AwKSuVNkL0JIqpN5qG60txuOQvIz+MEJn0sPps8EWwyFvnXa/yLbbqy/ACvYNIKSaxvm9lMxRIO6PtOg3qGjRLOJ7bClkph2jfRu6IlipMssm3m5GowQ3YvmNOaEi5wsUTDLexGvPSyJIxnC8NfC4SLpMOkj016H5frvLc4waWuZ6gN0xrE1m4rtOIUknAuRwgorwX7oZUd0+LQ68PtJBp3rx8C/GNSvfltw/ZQIB+QznvxTWVVeVkBHYhbOBLtaBdczb+PRAa5e/OaeG7ug0O8HkTuIxIPpuwvD3zyjtFDSY8KQSbLMQgbKVbKKxO+KKnPtyOFSbb79rTW/2zMtxE6Qdz0VBqkdxirj8YhYbhHSxB9K4F2cp4B9mYiFXgSEIiOLdgpzSWdS4i4YCCNb3+AShaqAU8n5S/4O3oFBRYAVl4hk5wtZzTXg+82u7hT6FPaGvwBIynnUIFi4VquYPzpO42aiaN+t7NulJhTqhbuGhjuHogm7kqwCldzYuynogWbnR6HJnpsuD9JnwxCtyPQ9EToV1M2Jp2dMAg4MkSdzWMCWpA2rLEy0O/gIC7U6YHaAY3ENPs6PJc7Pa9bdBfniSW4yknhjKUbOhuHJRyPyxs+0LGYF7sj26ojfLAqktMAyEM46xCuBvfEDR2x5f5WuedB3ut/BM7eNHj7M1D8zScWkAyMOZFWgYIvObUPYTQ3ISmnboIRRqV6YYRn+IJf87jaj0UTeKFnyYneGCM1hagErIskuAI8GzGx20XxUqD3640mcBr9I28d0rQEyWo4GPxgl5AX2/lMechz6XPCLGB5xMrQmf+M+zr+6rbt4U9z6JfY6ySUJT7fDcZ7s43SruTF/UBUCd+ZK1ZNeJm7SeVUfhpptyyLV1ezB/U8SMrHDV+LCmAWOC4PWs77iR7wIf6fjbsAGe9T2NMFjwdlYf5/95PPWlyj/Je7xnoMtWFBZOLgSVtqP+mViau7vemV35QzrcQilvVxboRDk6cHtF0YHV2axcIdY+9sANgzM/SJABg6xlkMbRWp2yjourxXuLXBDXCPDguXjbHv5wMPS6fdGM8UiK579KPMrUabMTWjD+3IHEcFD4XeTxrhtNa9TGu/QzneKfok/Ua3KOrOw3ccWJ1Bdes83lyq8OSWccsDyycGpBsrRfrMcd38RFVzuGT+0s+N9cjMox+i1npJER4MVfqc1+JQD903tLp1JIZNrQXxhSMaRhm+cck2WAogAxYfMtmmXr8gP61TSpmJ7k6saPABP6n+mK3y2kltmwC0hogx+smNeH3rLyLxaL4XKB+MCmHg0tDBGEa1yVGrXDaIAjjMFEf46Iox1mikwchhVLxBmcXGLYO8D4QzXLJ0A16PjqRl1zEDx5CSP4pa8AnOk/GSwLZ23LnY2kj2yOYyH1lV+xI8lOxzYjzV9LPyf2SN5StxS3TCwvxefeVk4RxjXgy+phmx4gg1vlsFdZaKO6gGN4pzJNUsnNXCjxc9sbXdmu/Rdr1PKiMRYhbiWYtAMKotufAHgg1KoR1ayb6pLjW7ObttLELktx5jQRWPKqdmmMUOXcSqowRSiX25RUMR+byBh+6ObkkHoJK9hlnGA1K6mj48qM01OCLHLHIMCspS+boEjah+rbPQeFhkF6M5WypvOvXb9gR8A/on2hCecentZxLodtaemUqVhxHCQfc9670YkW9C71gIFswhNH9ywDyzL5MxiU4rGEdiTx8neOC1ekS0H4V5VuFSGW/trA2fGvXOO2dohI0UxLjiy9mOlSBvnX0+nAx7XEVQugtCM92W3CByz2oIVkRuNQj1l+DEhwdZES8ZG3gAAAAA=');
