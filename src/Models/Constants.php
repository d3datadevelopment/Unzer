<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B315E09EE6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/d+iu+s/kRzOEGSalJ7DJDDRqz4Rkh+591SaEuufkDoHtR66Tga2d9DQOKdnCSOS1j7qKKOn93cHTA0nMmGiK+s3MHgHSMPFKdBpphRxAjy6pOTuwKBOzbLw+MHC7VgZJAbOSjZt6bzLydaWW9Kn6qxRRm3fkPrIGN9dOxQUyUDkGJReoJr6xhUT7etZSfC46cq8ff+NsQ+Mu/6UqSzVXRblgHnOxfQ2fCAAAAKABAACiOBcWFLefPHPdgCyIkmyNmQ5ru4SrwsE1YXVPtzwPYTVhN3dr3vQ9yRV3wnny7QqQkwWgtqDxSvosDtskfYvOC5TJttZ6mdEXA7i1bRx1CyR/MNPmPDKEjGBf7iz/UMpl7T3ZE59DkLQicY+Lja1ck/oKERz5fQoQeF1YFe4mUn4kh+kzd/rEITJFvnmJswi59kRnyhpSQeypYGdv7mRVhkRY4/yHy5gB33tz0NYulCAR02L8SkpCUaCAD9Dzo47TeyeOCgx6JLkB3EbZIeJQAvLmNW0ftW8w2Y5tTXdDt+wzZQw4S1W58yKJizoAKiEC8bYX0wXxZ+QC1DlFJt3yYQPpWxWuKZx0gaw5qkoLVEO8ejyZoX348Ov50RrvoeMg7h0Pa17Lcyzi89WLk8wHeDqNu84ySMjJUUQkBCK94+lmzQqpGMBt8gy+9HAjKNQhZ3KLilIKcUsm+FFa7di9FwHa2wAJ3apGqG+TpRDnG2rUV1YQo77yDQwsH7TglEKakk9wU2/bh5rNYFRYc+QX6iq5hzW0KWpHoum5/9wxFFEAAACYAQAAj7kY9CNl8a8pZpbLIy/xK7w5D6qp8hi4O4OZMs3y1ml7BHpTK8peDiCiCKeiA20MECuzqD1gYH8OoK0LNaeEUBsB2zoeIRsE6OCWME3W6lSzGygIAFCOT7HvKiKORaPaCXH4xqot4GJcLGFEcYVlzuZMXO81wfYt1l3N89OzdvLwHfIK235xvrn+TxyOdjKmn5CY3YEt0sZGx16IcQkpazVX19iKREsIcrOMG+gf62vvoG3qaiS8VaySxsZITitghhRujvecsmzxMdaZ66vJfJFVwMgeHeaIivKR0faxCsoc38cg2e97bLBkOAsaOeM+dm8VOkDj2QGL1R3BJxcuLnyAlHShvGgJe/w6mcdRGPPEZ2Tf63NcMMhMmMZi81ammkk4+9zpSEtfxDYb8nCdEHxE4vRZPpQV+veHVwDBAeJbtu6GgcQggoGBC/nD9ruWbxDPze1E9eeijOY9Lb0Avd0kjD1J6AYt8NHZDvk3pC0rFlmzfjReaILYbUwB6Hu6TqxCy7Os11itzzbacwq/4tVfg9KY4vLYUgAAAJgBAACUf+zed3Qcqsn1QojSfb3lQr1ZSfnoshfn4lEkygE0LUEIK7USr5s34wb7mAJQVkLfxeUT8JoP03AZIbb4TTbjSPHbVQcDFhf9Itxq745u+8O631J5fGzrr7WvH927dUM0aJrc9w5N8yQpw5Lcj0mQtpsRMSk/X8SuXg8C/a48Ij+naxqkxim2LdgbwIOuRzmB+W6HdyKiLOliq2Wrv6f1UApmzCisl/Uq7hRjNHYWlTXsKje4iDlJ5PiH56mDcKKqoD+g9HSdFt9E3G3hX9OvzJSXoWjRsG3HsJvTdNtk5h5LS76sFR5cdaJ6NmF+7ccB06yRqaA3BePr3Y4dHgNcojRkGWQ1JCvSUqkn/m8e2ILkvGj8BcW8Y34u6yas25kgfRGM4/nuWdL9SvBhoDqFDeryy4W7tQ+SXukt63ZioPwo4HCRn35kJ1ZngbAIFHzrh8eF2tXkx0PGcquLf20lM1+kIi/aTteGphojRUxrzhu+pVKTAC7ToiT5VB9BO+Td7o+spL79oGTdRXqBJV7TjpcKWIrN87gAAAAA');
