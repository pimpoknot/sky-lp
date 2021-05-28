<?php
function detect_mobile()
{
    $_REQUEST['ALL_HTTP'] = isset($_REQUEST['ALL_HTTP']) ? $_REQUEST['ALL_HTTP'] : '';
 
    $mobile_browser = '0';
    if(isset($_REQUEST['HTTP_USER_AGENT']))
        $agent = strtolower($_REQUEST['HTTP_USER_AGENT']);
    else
        $agent = null;
 
    if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', $agent))
        $mobile_browser++;
 
    if((isset($_REQUEST['HTTP_ACCEPT'])) and (strpos(strtolower($_REQUEST['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false))
        $mobile_browser++;
 
    if(isset($_REQUEST['HTTP_X_WAP_PROFILE']))
        $mobile_browser++;
 
    if(isset($_REQUEST['HTTP_PROFILE']))
        $mobile_browser++;
 
    $mobile_ua = substr($agent,0,4);
    $mobile_agents = array(
                        'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
                        'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
                        'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
                        'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
                        'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
                        'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
                        'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
                        'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
                        'wapr','webc','winw','xda','xda-'
                        );
 
    if(in_array($mobile_ua, $mobile_agents))
        $mobile_browser++;
 
    if(strpos(strtolower($_REQUEST['ALL_HTTP']), 'operamini') !== false)
        $mobile_browser++;
 
    // Pre-final check to reset everything if the user is on Windows
    if(strpos($agent, 'windows') !== false)
        $mobile_browser=0;
 
    // But WP7 is also Windows, with a slightly different characteristic
    if(strpos($agent, 'windows phone') !== false)
        $mobile_browser++;
 
    if($mobile_browser>0)
        return "mobile";
    else
        return "desktop";
}
