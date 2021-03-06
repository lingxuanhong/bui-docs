<?php $title="多择Select"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-section">
  <div id="s1">
    <input type="hidden" id="hide" value="" name="hide">
  </div>
  <div class="detail-row" style="margin-top: 10px;">
    <button id="J_BtnShow" type="button" class="button">显示</button>
  </div>
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
  <?php if($useKissy) {?>
    KISSY.use('bui/select',function(S,Select){
  <?php }else if($useLoader) {?>
  BUI.use('bui/select',function(Select){
<?php }else{?> 
    var Select = BUI.Select
<?php }?>  
    var items = [
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'}
        ],
        select = new Select.Select({
          render:'#s1',
          valueField:'#hide',
          multipleSelect:true,
          items:items
        });
    select.render();
    $('#J_BtnShow').on('click', function(){
      alert('text：' + select.getSelectedText() + '\n' + 'value：' + select.getSelectedValue());
    });
<?php if($useLoader) {?>  
  });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>