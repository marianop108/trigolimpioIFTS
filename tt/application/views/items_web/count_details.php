<?php
echo form_open('items_web/save_inventory/'.$item_info->item_id,array('id'=>'item_form'));
?>
<fieldset id="inv_item_basic_info">
<legend><?php echo $this->lang->line("items_basic_information"); ?></legend>

<div class="field_row clearfix">
  <div class='form_field'></div>
</div>

<div class="field_row clearfix">
  <div class='form_field'></div>
</div>
</fieldset>
<?php 
echo form_close();
?>