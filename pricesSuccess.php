<div class="garant">
    <table>
        <tr>
            <td valign="middle">
                <div id="text">
                    <?php $page = $sf_data->getRaw('page'); ?>
                    <?php echo ($page?$page->getContent():'') ?>
                    <div>
                        <ul style="list-style: disc; margin-left: 20px;">
                            <li><a href="javascript: void(0);" class="garant-kr-exam">Цены на помощь на Контрольных / Зачетах / Экзаменах</a></li>
                            <li><a href="javascript: void(0);" class="garant-dz">Цены на Домашние работы</a></li>
                            <li><a href="javascript: void(0);" class="garant-repetitor">Цены на Репетиторство</a></li>
                        </ul>
                    </div>

<?php include_partial('main/orderForm', array(
              'form_dz' => $form_dz,
			  'only_forms' => true,
              'form_exam' => $form_exam,
              'form_cons' => $form_cons
              ));
             ?>

<br />
<p>Оплачивайте  решения из вашего кошелька на сайте (страница «Мой кошелек»). О том, как пополнить кошелек, смотрите в таблице:</p>
<p>
<table class="pay_stats" border="1">
  <tr>
    <td style="width: 250px;">Способы пополнения кошелька</td>
    <td>Комментарии</td>
  </tr>
  <tr>
    <td><a href="http://w.qiwi.com"><img width="200" style="position: absolute; display: block; " src="/images/pay_sustems/qw_logotype_ru_hor.jpg" alt="qiwi" /></a></td>
    <td>
      Самый удобный и лучший способ пополнения.<br/><br/>
      Способ <b>QIWI-кошелек ОНлайн</b> используйте при переводах со своего qiwi-кошелька. Пополняется мгновенно!<br /><br/>
      Способ <b>QIWI-кошелек ОФФлайн</b> используйте при переводах в салонах связи и терминалах. Возможны задержки в пополнении.<br/><br/>
      Более подробно о пополнении прочтите в <a href="javascript:void(0);" class="to-enter" data-form-offset="300">личном кабинете</a>  на странице «Мой кошелек».
    </td>
  </tr>
  <tr>
    <td><a href="http://money.yandex.ru"><img style="position: absolute; display: block; " src="/images/pay_sustems/yandex-head-logo.ru.png" alt="money.yandex" /></a></td>
    <td>
      Способ <b>Яндекс.Деньги ОНлайн</b> используйте при переводах со своего кошелька Яндекс.Денег. Пополняется мгновенно!<br/><br/>
Способ <b>Яндекс.Деньги ОФФлайн</b> используйте при переводах в салонах связи и терминалах. Возможны задержки в пополнении.<br/><br/>
Более подробно о пополнении прочтите в <a href="javascript:void(0);" class="to-enter" data-form-offset="470">личном кабинете</a>  на странице «Мой кошелек».
    </td>
  </tr>
  <tr>
    <td>
      <img src="/images/pay_sustems/mts_logo.jpg" style="position: absolute; display: block; " width="70" alt="MTS" />
      <img src="/images/pay_sustems/mega_logo.png" style="position: absolute; display: block; margin-left: 80px;" alt="MEGAFON" />
    </td>
    <td>
      Пополняйте кошелек на сайте посредством баланса вашего телефона. Внимание! Взимается комиссия.<br/><br/>
      Более подробно о пополнении прочтите в <a href="javascript:void(0);" class="to-enter" data-form-offset="570">личном кабинете</a>  на странице «Мой кошелек».
    </td>
  </tr>
  <tr>
    <td>
      <a href="http://webmoney.ru" style="position: absolute;"><img src="/images/pay_sustems/wmlogo_vector_blue.png" alt="webmoney" width="200" /></a>
      <br />
      <br />
      <br />
      <br />
    </td>
    <td>
      <br />
      Более подробно о пополнении прочтите в <a href="javascript:void(0);" class="to-enter" data-form-offset="630">личном кабинете</a>  на странице «Мой кошелек».
    </td>
  </tr>
</table>
<br/>

</p>
                </div>
            </td>
<!--            <td style="vertical-align: top;">
                <div id="art">
                    <img src="/images/Art2.png" height="200" border="0"/>
                </div>
            </td>-->
        </tr>
    </table>
</div>

