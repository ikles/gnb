<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/form.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
</head>
<body style="margin:0px" bgcolor="#FFFFFF">
<jdoc:include type="modules" name="knop" style="mystyle" />
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height:100%">
  <tr>
    <td height="153" valign="top"><div style="position: relative; width: 100%; height:153px;"><table   class="header_tb" width="100%" border="0" cellpadding="0" cellspacing="0" background="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pic_bg.jpg" style="background-repeat:repeat-x" bgcolor="#EDEDF0">   
  <tr>
        <td><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pic1.jpg" width="290" height="120"></td>
        <td width="100%"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pic2.jpg" width="200" height="120"></td>
        <td><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pic3.jpg" width="227" height="120"></td>
        <td><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pic4.jpg" width="220" height="120"></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="240" height="33" valign="top"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/up_m1.jpg" width="240" height="33"></td>
          <td width="210" height="33" valign="top"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/up_m2.jpg" width="210" height="33"></td>
          <td height="33" align="right" style="padding-right:70px">
          <jdoc:include type="modules" name="top_menu" style="mystyle" />
          </td>
        </tr>
      </table>
</td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="height:100%">
      <tr>
        <td width="240" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="41" align="center" background="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/search.jpg">
            <jdoc:include type="modules" name="search" style="mystyle" />
            </td>
          </tr>
          <tr>
            <td height="72" valign="top" background="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/left_mup.jpg" style="background-repeat:no-repeat; background-position:top; padding:15px 11px 40px 30px">
            <jdoc:include type="modules" name="left_menu" style="mystyle" />
          </td>
<jdoc:include type="modules" name="tel_top" style="mystyle" />
<jdoc:include type="modules" name="form_top" style="mystyle" />
</div>
          </tr>
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <!--<tr>
                <td height="40" class="name">НАШИ НОВОСТИ</td>
              </tr>
              <tr>
                <td valign="top" class="body2"></td>
              </tr>-->
            </table></td>
          </tr>
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  class="name" align="center"></td>
              </tr>
              <tr>
                <td valign="top" class="tel" style="padding-left: 24px">
                <jdoc:include type="modules" name="left_contacts" style="mystyle" />
</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td valign="top" background="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/body_up.jpg" style="background-repeat:no-repeat; background-position:top left">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="height:100%">
          <tr>
            <td height="39" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="24"></td>
              </tr>
              <tr>
                <td height="15">
            
              <jdoc:include type="modules" name="bread" style="mystyle" />

            </td>
              </tr>
            </table></td>
          </tr>
          <tr>
<td valign="top" class="body">
<div id="wrapper">
<jdoc:include type="component" style="xhtml" />
<jdoc:include type="modules" name="phone_mail_price" style="mystyle" />
<jdoc:include type="modules" name="form_static" style="mystyle" />
<jdoc:include type="modules" name="form_dinamic" style="mystyle" />
<script type="text/javascript" src="//yandex.st/share/share.js"
    charset="utf-8"></script>
    <div style="clear:both; height: 1px;">&nbsp;</div>
    <div style="text-align: right;" class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj,gplus" ></div>
  </div>
  </td><!--class body-->
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="106" valign="top" bgcolor="#EFEFEF" style="border-top:5px so #A7A7A7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="400" height="91" align="center" class="small"><!--noindex--><!-- begin of Top100 code --> 
<a rel="nofollow" href="http://top100.rambler.ru/top100/"><img src="http://counter.rambler.ru/top100.cnt?1395177" alt="Rambler's Top100" width="1" height="1" border="0" /></a>
<!-- end of Top100 code --> 
<!-- begin of Top100 logo --> 
<a rel="nofollow" href="http://top100.rambler.ru/top100/"><img src="http://top100-images.rambler.ru/top100/banner-88x31-rambler-gray2.gif" alt="Rambler's Top100" width="88" height="31" border="0" /></a> 
<!-- end of Top100 logo -->
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='http://counter.yadro.ru/hit?t14.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border=0 width=88 height=31><\/a>")//--></script><!--/LiveInternet-->
<!--Rating@Mail.ru COUNTEr--><a rel="nofollow" target="_top" 
href="http://top.mail.ru/jump?from=1424219"><img
src="http://db.cb.b5.a1.top.list.ru/counter?id=1424219;t=196"
border="0" height="31" width="38"
alt="Рейтинг@Mail.ru"/></a><!--/COUNTER-->
<a rel="nofollow" href=http://www.aport.ru/ target=_blank><img src=http://www.aport.ru//assets/a9ce2c4f/images/design/promo-new.jpg border=0 width=40 height=31></a>
<br />
<a rel="nofollow" href="http://www.yandex.ru/cy?base=0&amp;host=www.gnb-technology.ru"><img src="http://www.yandex.ru/cycounter?www.gnb-technology.ru" width="88" height="31" alt="Яндекс цитирования" border="0" /></a>
<!--Hitmir counter--><script type="text/javascript"><!--
js=1;
document.write('<a href="http://hitmir.ru/click/317"'+
'target=_blank><img src="http://counter.hitmir.ru/hit/317;r='+
escape(document.referrer)+';s='+((typeof(screen)=='undefined')?'':
+screen.width+'*'+screen.height+'*'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+';u='+escape(document.URL)+';j='+navigator.javaEnabled()+
';rand='+Math.random()+';cookie='+navigator.cookieEnabled+'" alt="" title="Hitmir: показано общее количество визитов, количество визитов за сегодня(хиты), количество уникальных посетителей за сегодня(хосты)" '+
'border=0 width=88 height=31></a>')
if(js=1)document.write('<'+'!-- ')//--></script><noscript><a href="http://hitmir.ru/click;317"
 target=_blank><img src="http://counter.hitmir.ru/hit/317;js=na" alt="" title="Hitmir: показано общее количество визитов, количество визитов за сегодня(хиты), количество уникальных посетителей за сегодня(хосты)"
 border=0 width=88 height=31></a></noscript><script type="text/javascript"><!--
if(js=1)document.write('--'+'>')//--></script>
<!--/Hitmir--> 
<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter12155809 = new Ya.Metrika({id:12155809, enableAll: true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/12155809" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --><!--/noindex-->
</td>
        <td height="91" align="right"><table width="0%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right"><span class="copyright">&copy; 2007 ООО Связьстрой-ГНБ<br>
                <span style='font-size:10px;' class='copyright'><a target="_blank" href="http://megagroup.ru/base_shop" title="создать интернет магазин" class="copyright">создать интернет магазин</a>, megagroup.ru</span></span></td>
            <td width="80">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="10" align="center"></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>