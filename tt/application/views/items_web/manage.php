<?php $this->load->view("partial/header"); ?>
<script type="text/javascript">
$(document).ready(function()
{
    init_table_sorting();
      enable_search('<?php echo site_url("$controller_name/suggest")?>','<?php echo $this->lang->line("common_confirm_search")?>');
   

   

    $("#low_inventory").click(function()
    {
    	$('#items_filter_form').submit();
    });
});

function init_table_sorting()
{
	//Only init if there is more than one row
	if($('.tablesorter tbody tr').length >1)
	{
		$("#sortable_table").tablesorter(
		{
			sortList: [[1,0]],
			headers:
			{
				0: { sorter: false},
				8: { sorter: false},
				9: { sorter: false}
			}

		});
	}
}

function show_hide_search_filter(search_filter_section, switchImgTag) {
        var ele = document.getElementById(search_filter_section);
        var imageEle = document.getElementById(switchImgTag);
        var elesearchstate = document.getElementById('search_section_state');
        if(ele.style.display == "block")
        {
                ele.style.display = "none";
				imageEle.innerHTML = '<img src=" <?php echo base_url()?>images/plus.png" style="border:0;outline:none;padding:0px;margin:0px;position:relative;top:-5px;" >';
                elesearchstate.value="none";
        }
        else
        {
                ele.style.display = "block";
                imageEle.innerHTML = '<img src=" <?php echo base_url()?>images/minus.png" style="border:0;outline:none;padding:0px;margin:0px;position:relative;top:-5px;" >';
                elesearchstate.value="block";
        }
}

</script>


<?php echo $this->pagination->create_links();?>
<div id="table_action_header">
	<ul>
		
		<li class="float_right">
		
		<?php echo form_open("$controller_name/search",array('id'=>'search_form')); ?>
		<input type="text" name ='search' id='search'/>
		</form>
		</li> 
	</ul>
</div>

<div id="table_holder">
<?php echo $manage_table; ?>
</div>
<div id="feedback_bar"></div>

<?php $this->load->view("partial/footer"); ?>