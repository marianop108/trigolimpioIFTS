<ul id="error_message_box"></ul>
<?php
echo form_open('items/save/'.$item_info->item_id,array('id'=>'item_form'));
?>
<fieldset id="item_basic_info">
<legend><?php echo $this->lang->line("items_basic_information"); ?></legend>

<div class="field_row clearfix">
<?php echo form_label($this->lang->line('items_item_number').':', 'name',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo $item_info->item_number;?>
	</div>
</div>

<div class="field_row clearfix">
<?php echo form_label($this->lang->line('items_name').':', 'name',array('class'=>'required wide')); ?>
	
    <div class='form_field'>
	<?php echo $item_info->name;?>
	</div>
</div>


<div class="field_row clearfix">
<?php echo form_label($this->lang->line('items_category').':', 'category',array('class'=>'required wide')); ?>
	<div class='form_field'>
	<?php echo 
        $item_info->category;?>
	</div>
</div>


<div class="field_row clearfix">
<?php echo form_label($this->lang->line('items_quantity').':', 'quantity',array('class'=>'required wide')); ?>
	<div class='form_field'>
	<?php echo $item_info->quantity;?>
	</div>
</div>


<div class="field_row clearfix">
<?php echo form_label($this->lang->line('items_description').':', 'description',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo $item_info->description;?>
	</div>
</div>

</fieldset>
<?php
echo form_close();
?>