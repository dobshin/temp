            <div class="about_blocks">
			<?php if(!isset($only_forms) || !$only_forms): ?>
              <?php if(isset($form_dz) && $form_dz): ?>
              <div class="about_block">
                <div class="about_block_text"><?php echo __("Решение задач") ?></div>
                <div class="about_block_order"><input type="button"  class="garant-dz" value="<?php echo __("Заказать") ?>" /></div>
              </div>
              <?php endif; ?>
              <?php if(isset($form_exam) && $form_exam): ?>
              <div class="about_block">
                <div class="about_block_text"><?php echo __("Помощь на экзамене") ?></div>
                <div class="about_block_order"><input type="button" class="garant-kr-exam" value="<?php echo __("Заказать") ?>" /></div>
              </div>
              <?php endif; ?>
              <?php if(isset($form_cons) && $form_cons): ?>
              <div class="about_block">
                <div class="about_block_text"><?php echo __("Онлайн репетитор") ?></div>
                <div class="about_block_order"><input type="button" class="garant-repetitor" value="<?php echo __("Заказать") ?>" /></div>
              </div>
              <?php endif; ?>
			<?php endif; ?>
              
              <div class="about_prices_block">
                <?php if(isset($form_exam) && $form_exam): ?>
                <div class="example-form-exam help-forms" style="display: none;" title="Помощь на Контрольных / Зачетах / Экзаменах" <?php echo isset($form_exam->windowMsg)? 'data-opened="true"' : '' ?>>
                  <form method="POST" action="" id="exam-order-form" enctype="multipart/form-data">

                    <?php echo $form_exam->renderHiddenFields() ?>
                    <?php //echo $form_exam->renderGlobalErrors() ?>

                    <table class="settings_filter_table" cellpadding="0" cellspacing="0">
                      <tr>
                        <th><?php echo __('Ваш e-mail') ?></th>
                        <td>
                          <input type="text" name="order_email" id="examOrder" class="examOrderField" value="<?php echo $sf_request->getParameter('order_email', '') ?>">
                          <span><img id="examOrderHelp" style="display: none;" src="/images/help.png"><div id="examOrderPopup" class="error_popup" style="display: none;">Введен некорректный адрес!</div></span>                          
                          <span class="order-email-help"><?php echo isset($form_exam->windowMsg)? $form_exam->windowMsg : '' ?></span>
                        </td>
                      </tr>                      
                      <tr>
                        <th style="width: 250px;">
                          <?php echo $form_exam['spec_list']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_exam['spec_list'] ?><br style="clear: both;" />
                          <?php echo $form_exam['spec_list']->renderError() ?>
                        </td>
                      </tr>

                      <tr>
                        <th>
                          <?php echo $form_exam['duration']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_exam['duration'] ?>мин.
                          <br style="clear: both;" />
                          <?php echo $form_exam['duration']->renderError() ?>
                        </td>

                      </tr> 
                      <tr>
                        <th>
                          <?php echo $form_exam['cnt_task']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_exam['cnt_task'] ?><br style="clear: both;" />
                          <?php echo $form_exam['cnt_task']->renderError() ?>
                        </td>

                      </tr>        


                      <tr style="display: none;">
                        <th>
                          <?php echo $form_exam['min_cost']->renderLabel() ?> 
                        </th>
                        <td>
                          <div><?php echo $form_exam['min_cost'] ?></div>
                          <?php echo $form_exam['min_cost']->renderError() ?><span id="s_min_cost"> </span>
                        </td>

                      </tr>   

                      <tr style="display: none;">
                        <th>
                          <?php echo $form_exam['dop_cost']->renderLabel() ?> 
                        </th>
                        <td>
                          <div> <?php echo $form_exam['dop_cost'] ?></div>
                          <?php echo $form_exam['dop_cost']->renderError() ?><span id="s_dop_cost"> </span>
                        </td>
                      </tr>   
                      <tr style="display: none;"><th></th>
                        <td>
                          <?php echo $form_exam['isp_dop_cost'] ?>
                          <?php echo $form_exam['isp_min_cost'] ?>
                          <?php echo $form_exam['isp_itogo'] ?>
                        </td>
                      </tr>   

                      <tr>
                        <th>
                          <?php echo $form_exam['itogo']->renderLabel() ?> 
                        </th>
                        <td>
                          <div style="display: none"><?php echo $form_exam['itogo'] ?></div>
                          <?php echo $form_exam['itogo']->renderError() ?><span id="s_itogo_cost"> </span>
                        </td>

                      </tr>                                             
                     <tr>
                      <th>
                        <?php echo $form_exam['file']->renderLabel() ?> 
                      </th>
                      <td>
                         <?php //echo $form_exam['file'] ?>



<?php 
$widget = new dianWidgetFormRemoteUpload(array(
  'filename_input_id' => 'exam_file',
  'upload_dir' => 'files/exam',
  'form_id' => 'exam-order-form',
  'captcha_input_id' => 'exam_captcha_code',
  'captcha_param' => 'exam_captcha'
));
echo $widget->render('exam_upload', 'http://hm2012.jino.ru/php/index.php');
?>

                        <?php echo $form_exam['file']->renderError() ?>
                      </td>
                    </tr>

      <tr>
        <th>
          <?php echo $form_exam['date_exam']->renderLabel() ?> 
        </th>
        <td>
          <?php echo $form_exam['date_exam'] ?>   <br style="clear: both;" />
          <?php echo $form_exam['date_exam']->renderError() ?>
        </td>
      </tr>                                             


      <tr>
        <th>
          <?php echo $form_exam['need_auto_pay']->renderLabel() ?> 
        </th>
        <td>
          <?php echo $form_exam['need_auto_pay'] ?>   
          <span><img id="auto_popup_img" src="/images/help.png" /><div id="auto_popup" style="display: none;background-attachment: scroll;
background-clip: border-box;
background-color: rgb(255, 255, 204);
background-image: none;
background-origin: padding-box;
background-position: 0% 0%;
background-repeat: repeat;
background-size: auto;
border-bottom-color: rgb(153, 0, 0);
border-bottom-style: solid;
border-bottom-width: 1px;
border-left-color: rgb(153, 0, 0);
border-left-style: solid;
border-left-width: 1px;
border-right-color: rgb(153, 0, 0);
border-right-style: solid;
border-right-width: 1px;
border-top-color: rgb(153, 0, 0);
border-top-style: solid;
border-top-width: 1px;
display: none;
margin-left: 8px;
padding-bottom: 3px;
padding-left: 3px;
padding-right: 3px;
padding-top: 3px;
position: absolute;
width: 150px;"><?php echo __('Автоматически оплатить заказ после его рассмотрения при наличии средств в кошельке') ?></div></span>
          <script>
            jQuery(document).ready(function () {
              $("#auto_popup_img").mouseover(function (){
                $("#auto_popup").css('display', 'inline-block');
              });
              $("#auto_popup_img").mouseout(function (){
                $("#auto_popup").hide();
              });
            });
          </script>
          <br style="clear: both;" />
          <?php echo $form_exam['need_auto_pay']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th>
        </th>
        <td>
          <?php echo $form_exam['captcha_img'] ?> 
        </td>
      </tr>
      <tr>
        <th>
          <?php echo $form_exam['captcha_code']->renderLabel() ?>
        </th>
        <td>
          <?php echo $form_exam['captcha_code']->render() ?>
          <?php echo $form_exam['captcha_code']->renderError() ?>
        </td>
      </tr>



                      <tr>
                        <td colspan="3"> <input id="exam_submit" value="<?= __('Заказать') ?>" class="to-enter" type="submit"> </td>
                      </tr>

                    </table>

                    <div style="display: none;" class="clear"></div>
                  </form>
                </div>
                <?php endif; ?>
                <?php if(isset($form_dz) && $form_dz): ?>
                <div class="example-form-dz help-forms" style="display: none;" title="Домашние работы" <?php echo isset($form_dz->windowMsg)? 'data-opened="true"' : '' ?>> 
                  <form method="POST" action="" id="dz-order-form" enctype="multipart/form-data">
                    <?php echo $form_dz->renderHiddenFields() ?>
                    <?php echo $form_dz->renderGlobalErrors() ?>

                    <table class="settings_filter_table" cellpadding="0" cellspacing="0">
                      <tr>
                        <th><?php echo __('Ваш e-mail') ?></th>
                        <td>
                          <input type="text" name="order_email" id="dzOrder" class="dzOrderField" value="<?php echo $sf_request->getParameter('order_email', '') ?>">
                          <span><img id="dzOrderHelp" style="display: none;" src="/images/help.png"><div id="dzOrderPopup" class="error_popup" style="display: none;">Введен некорректный адрес!</div></span>                          
                          <span class="order-email-help"><?php echo isset($form_dz->windowMsg)? $form_dz->windowMsg : '' ?></span>
                        </td>
                      </tr>
                      <tr>
                        <th style="width: 300px;">
                          <?php echo $form_dz['spec_list']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_dz['spec_list'] ?><br style="clear: both;" />
                          <?php echo $form_dz['spec_list']->renderError() ?>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <?php echo $form_dz['cnt_task']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_dz['cnt_task'] ?><br style="clear: both;" />
                          <?php echo $form_dz['cnt_task']->renderError() ?>
                        </td>
                      </tr>  
                      <tr>
                        <th>
                          <?php echo $form_dz['file']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php //echo $form_dz['file'] ?>


<?php 
$widget = new dianWidgetFormRemoteUpload(array(
  'filename_input_id' => 'dz_file',
  'upload_dir' => 'files/exam',
  'form_id' => 'dz-order-form',
  'captcha_input_id' => 'dz_captcha_code',
  'captcha_param' => 'dz_captcha'
));
echo $widget->render('dz_upload', 'http://hm2012.jino.ru/php/index.php');
?>
                          
                          <?php echo $form_dz['file']->renderError() ?>
                        </td>

                      </tr>                              
                      <tr>
                        <th>
                          <?php echo $form_dz['date_exam']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_dz['date_exam'] ?> <br style="clear: both;" />
                          <?php echo $form_dz['date_exam']->renderError() ?>
                        </td>
                      </tr>
                      <tr style="display: none;"><th></th>
                        <td>
                          <?php echo $form_dz['dz_pred_itogo'] ?>
                          <?php echo $form_dz['dz_isp_pred_itogo'] ?>
                        </td>
                      </tr>                       
                      <tr>
                        <th>
                          <?php echo $form_dz['itogo']->renderLabel() ?> 
                        </th>
                        <td>
                          <div><?php echo $form_dz['itogo'] ?></div>
                          <?php echo $form_dz['itogo']->renderError() ?><span id="dz_pred_itogo_cost"> </span>
                        </td>
                      </tr> 
      <tr>
        <th>
        </th>
        <td>
          <?php echo $form_dz['captcha_img'] ?> 
        </td>
      </tr>
      <tr>
        <th>
          <?php echo $form_dz['captcha_code']->renderLabel() ?>
        </th>
        <td>
          <?php echo $form_dz['captcha_code']->render() ?>
          <?php echo $form_dz['captcha_code']->renderError() ?>
        </td>
      </tr>                      
                      <tr>
                        <td colspan="3"> <input value="<?= __('Заказать') ?>" class="to-enter" type="submit"> </td>
                      </tr>

                    </table>
                  </form>

                </div>
                <?php endif; ?>
                <?php if(isset($form_cons) && $form_cons): ?>
                <div class="example-form-cons help-forms" style="display: none;" title="Репетиторство" <?php echo isset($form_cons->windowMsg)? 'data-opened="true"' : '' ?>>
                  <form method="POST" action="" id="cons-order-form">
                    <?php echo $form_cons->renderHiddenFields() ?>
                    <?php echo $form_cons->renderGlobalErrors() ?>

                    <table  class="settings_filter_table" cellpadding="0" cellspacing="0">
                      <tr>
                        <th><?php echo __('Ваш e-mail') ?></th>
                        <td>
                          <input type="text" name="order_email" id="consOrder" class="consOrderField" value="<?php echo $sf_request->getParameter('order_email', '') ?>">
                          <span><img id="consOrderHelp" style="display: none;" src="/images/help.png"><div id="consOrderPopup" class="error_popup" style="display: none;">Введен некорректный адрес!</div></span>

                          <span class="order-email-help"><?php echo isset($form_cons->windowMsg)? $form_cons->windowMsg : '' ?></span>
                        </td>
                      </tr>
                      <tr>
                        <th style="width: 250px;">
                          <?php echo $form_cons['spec_list']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_cons['spec_list'] ?><br style="clear: both;" />
                          <?php echo $form_cons['spec_list']->renderError() ?>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <?php echo $form_cons['duration']->renderLabel() ?>
                        </th>
                        <td>
                          <?php echo $form_cons['duration'] ?> мин.<br style="clear: both;" />
                          <?php echo $form_cons['duration']->renderError() ?>
                        </td>
                      </tr>

                      <tr style="display: none;">
                        <th>
                          <?php echo $form_cons['min_cost']->renderLabel() ?> 
                        </th>
                        <td>
                          <div style="display: none"><?php echo $form_cons['min_cost'] ?></div>
                          <?php echo $form_cons['min_cost']->renderError() ?><span id="c_s_min_cost"> </span>
                        </td>

                      </tr>   

                      <tr style="display: none;">
                        <th>
                          <?php echo $form_cons['dop_cost']->renderLabel() ?> 
                        </th>
                        <td>
                          <div style="display: none"> <?php echo $form_cons['dop_cost'] ?></div>
                          <?php echo $form_cons['dop_cost']->renderError() ?><span id="c_s_dop_cost"> </span>
                        </td>
                      </tr>   
                      <tr style="display: none;"><th></th>
                        <td>
                          <?php echo $form_cons['isp_dop_cost'] ?>
                          <?php echo $form_cons['isp_min_cost'] ?>
                          <?php echo $form_cons['isp_itogo'] ?>
                        </td>
                      </tr>  
                      <tr>
                        <th>
                          <?php echo $form_cons['itogo']->renderLabel() ?> 
                        </th>
                        <td>
                          <div style="display: none"><?php echo $form_cons['itogo'] ?></div>
                          <?php echo $form_cons['itogo']->renderError() ?><span id="c_s_itogo_cost"> </span>
                        </td>

                      </tr>                                             
                      <tr>
                        <th>
                          <?php echo __('Видео-чат работает?') ?> 
                        </th>
                        <td>
                          <a href="<?php echo url_for('video_chat/index?room=1'); ?>" style="float: none;" class="" target="_blank"><img src="/images/television.png" /></a> 
                          <input type="radio" name="vchat" id="vchat_yes" value="yes" <?php echo $sf_request->getParameter('vchat') == 'yes' ? 'checked="checked" ' : '' ?>/><label for="vchat_yes"><?php echo __('Да'); ?></label>
                          <input type="radio" name="vchat" id="vchat_no" value="no" <?php echo $sf_request->getParameter('vchat') != 'yes' ? 'checked="checked" ' : '' ?>/><label for="vchat_no"><?php echo __('Нет'); ?></label>
                          <?php if($sf_request->getParameter('vchat_error')): ?>
                          <ul class="error_list">
                            <li><?php echo $sf_request->getParameter('vchat_error'); ?></li>
                          </ul>
                          <?php endif; ?>
                        </td>
                      </tr>     

                      <tr>
                        <th>
                          <?php echo $form_cons['date_exam']->renderLabel() ?> 
                        </th>
                        <td>
                          <?php echo $form_cons['date_exam'] ?>   <br style="clear: both;" />
                          <?php echo $form_cons['date_exam']->renderError() ?>
                          <ul class="error_list" style="display: none;">
                            <li id="date_error"><?php echo $sf_request->getParameter('vchat_error'); ?></li>
                          </ul>
                        </td>
                      </tr> 
      <tr>
        <th>
        </th>
        <td>
          <?php echo $form_cons['captcha_img'] ?> 
        </td>
      </tr>
      <tr>
        <th>
          <?php echo $form_cons['captcha_code']->renderLabel() ?>
        </th>
        <td>
          <?php echo $form_cons['captcha_code']->render() ?>
          <?php echo $form_cons['captcha_code']->renderError() ?>
        </td>
      </tr> 
                      <tr>
                        <td colspan="3"> <input value="<?= __('Заказать') ?>" class="to-enter" type="submit"> </td>
                      </tr>

                    </table>

                  </form>

                </div>
                <?php endif; ?>
              </div>
              
            </div>

<script>
  //  Base start
  var block = 0;
  $(document).ready(function () {
    $('.garant-kr-exam').click(function () {
      <?php if(!$sf_user->isAuthenticated()): ?>
      $('.example-form-exam').dialog({
        dialogClass: 'order_dialog',
        width: 800,
        // height: 600,
        resizable: false,
        modal: true
      });
      <?php else: ?>
      location.href = "<?php echo url_for('exam/index') ?>";
      <?php endif ?>      
    });
    $('.garant-dz').click(function () {
      <?php if(!$sf_user->isAuthenticated()): ?>
      $('.example-form-dz').dialog({
        dialogClass: 'order_dialog',
        width: 700,
        // height: 400,
        resizable: false,
        modal: true
      });
      <?php else: ?>
      location.href = "<?php echo url_for('zakaz/index') ?>";
      <?php endif ?>
    });
    $('.garant-repetitor').click(function () {
      <?php if(!$sf_user->isAuthenticated()): ?>
      $('.example-form-cons').dialog({
        dialogClass: 'order_dialog',
        width: 700,
        // height: 400,
        resizable: false,
        modal: true
      });
      <?php else: ?>
      location.href = "<?php echo url_for('cons/index') ?>";
      <?php endif ?>
    });
    if($('.example-form-dz').attr('data-opened')) {
      $('.garant-dz').trigger('click');
    }
    if($('.example-form-exam').attr('data-opened')) {
      $('.garant-kr-exam').trigger('click');
    }
    if($('.example-form-cons').attr('data-opened')) {
      $('.garant-repetitor').trigger('click');
    }

  });
    //  Exams form
  $(document).ready(function () {
    
    var ms =  $("#exam_spec_list").multiselect({
      header: false,
      minWidth: "400",
      selectedText: "<?php echo __('# из # выбрано') ?>",
      noneSelectedText: "<?= __('выберите предмет') ?>",
      selectedList: 3
    });
    ms.multiselect("close");
    
    $("#exam_spec_list").bind("multiselectclick", function(event, ui){
      var selectednumbers = [];
                                             
      //  var vali = $("#exam_cnt_task option:selected").val();
      // $("#exam_cnt_task").change();
      // alert(vali);$("#exam_min_cost").val(obj.min_cena);
      $("#exam_isp_min_cost").val('');
      $("#s_min_cost").html('');
      $("#exam_dop_cost").val('');
      $("#exam_isp_dop_cost").val('');
      $("#s_dop_cost").html('');
      $("#exam_itogo").val('');
      $("#exam_isp_itogo").val('');
      $("#s_itogo_cost").html('');
                                             
      $("select#exam_cnt_task option[value='0']").attr("selected", "selected");
      // $("select#exam_cnt_task option[value='"+vali+"']").attr("selected", "selected");
                                            
    });
    
    $('#exam_cnt_task').change(function(){  
                                             
      var selectednumbers = [];
      $('#exam_spec_list :selected').each(function(i, selected) {
        selectednumbers[i] = $(selected).val();
      });
                                            
                                             
      $.ajax({
        type: "GET",
        url: "/exam/makesum",
        data: "spec="+selectednumbers+"&id="+escape($(this).val()),
        success: function(data){
                                                        
          var obj = jQuery.parseJSON(data);
                                                            
          if(obj.status==1)
          {
            alert(obj.message);
          }
          else
          {
                                                        
            $("#exam_min_cost").val(obj.min_cena);
            $("#s_min_cost").html(obj.min_cena);
            $("#exam_dop_cost").val(obj.dop_cena);
            $("#s_dop_cost").html(obj.dop_cena);
            $("#exam_itogo").val(obj.itogo);
            $("#s_itogo_cost").html(obj.itogo);

            $("#exam_isp_min_cost").val(obj.min_cena_isp);
            $("#exam_isp_dop_cost").val(obj.dop_cena_isp);
            $("#exam_isp_itogo").val(obj.itogo_isp);
          }
                                                              
        }
      });
    });    
    
  });
    //  Dz form
  $(document).ready(function () {
    
    var ms =  $("#dz_spec_list").multiselect({
      header: false,
      minWidth: "350",
      selectedText: "<?php echo __('# из # выбрано') ?>",
      noneSelectedText: "<?= __('выберите предмет') ?>",
      selectedList: 3
    });
    ms.multiselect("close");
    
    $("#dz_spec_list").bind("multiselectclick", function(event, ui){
      var selectednumbers = [];
                                             
      $("#dz_isp_min_cost").val('');
      $("#s_min_cost").html('');
      $("#dz_dop_cost").val('');
      $("#dz_isp_dop_cost").val('');
      $("#s_dop_cost").html('');
      $("#dz_itogo").val('');
      $("#dz_isp_itogo").val('');
      $("#s_itogo_cost").html('');
                                             
      $("select#dz_cnt_task option[value='0']").attr("selected", "selected");
                                            
    });
    
    $('#dz_cnt_task').change(function(){  
      var selectednumbers = [];
      $('#dz_spec_list :selected').each(function(i, selected) {
        selectednumbers[i] = $(selected).val();
      });
                                            
                                             
      $.ajax({
        type: "GET",
        url: "/zakaz/makesum",
        data: "spec="+selectednumbers+"&id="+escape($(this).val()),
        success: function(data){
          var obj = jQuery.parseJSON(data);
                                                            
          if(obj.status==1)
          {
            alert(obj.message);
          }
          else
          {
            $("#exam_dz_pred_itogo").val(obj.dz_pred_itogo);
            $("#exam_dz_isp_pred_itogo").val(obj.dz_isp_pred_itogo);
            $("input#dz_itogo").val(obj.dz_pred_itogo);
            $("#dz_pred_itogo_cost").html(obj.dz_pred_itogo);
            $("#dz_dz_pred_itogo").val(obj.dz_pred_itogo);
            $("#dz_dz_isp_pred_itogo").val(obj.dz_isp_pred_itogo);
            // console.log(obj) ;
          }
                                                              
        }
      });
    });    
    
  });
    //  Cons form
  $(document).ready(function () {
    
    var ms =  $("#cons_spec_list").multiselect({
      header: false,
      minWidth: "400",
      selectedText: "<?php echo __('# из # выбрано') ?>",
      noneSelectedText: "<?= __('выберите предмет') ?>",
      selectedList: 3
    });
    ms.multiselect("close");
    
    $("#cons_spec_list").bind("multiselectclick", function(event, ui){
      var selectednumbers = [];
                                             
      //  var vali = $("#exam_cnt_task option:selected").val();
      // $("#exam_cnt_task").change();
      // alert(vali);$("#exam_min_cost").val(obj.min_cena);
      $("#exam_isp_min_cost").val('');
      $("#s_min_cost").html('');
      $("#exam_dop_cost").val('');
      $("#exam_isp_dop_cost").val('');
      $("#s_dop_cost").html('');
      $("#exam_itogo").val('');
      $("#exam_isp_itogo").val('');
      $("#s_itogo_cost").html('');
                                             
      $("select#exam_cnt_task option[value='0']").attr("selected", "selected");
      // $("select#exam_cnt_task option[value='"+vali+"']").attr("selected", "selected");
                                            
    });
    
    $('#cons_duration').keyup(function(){  
                                             
      var selectednumbers = [];
      if(!$('#cons_spec_list :selected').length)
        {
          alert('<?php echo __('Вы не выбрали предметы') ?>');
          return false;
        }
      $('#cons_spec_list :selected').each(function(i, selected) {
        selectednumbers[i] = $(selected).val();
      });
                                             
      $.ajax({
        type: "GET",
        url: "/cons/makesum",
        data: "spec="+selectednumbers+"&duration="+escape($(this).val()),
        success: function(data){
                                                        
          var obj = jQuery.parseJSON(data);
                                                            
          if(obj.status==1)
          {
            alert(obj.message);
          }
          else
          {
            // console.log(obj);
            // console.log($('#cons_itogo').length);
            // $('#cons_itogo').val(234);
            $('#cons_min_cost').val(obj.min_cena);
            $("#c_s_min_cost").html(obj.min_cena);
            $('#cons_dop_cost').val(obj.dop_cena);
            $("#c_s_dop_cost").html(obj.dop_cena);
            $('#cons_itogo').val(obj.itogo);
            // var i = $('#cons_itogo').val();
            $("#c_s_itogo_cost").html(obj.itogo);

            $("#cons_isp_min_cost").val(obj.min_cena_isp);
            $("#cons_isp_dop_cost").val(obj.dop_cena_isp);
            $("#cons_isp_itogo").val(obj.itogo_isp);
          }
                                                              
        }
      });
    });    
    
  });
</script>


