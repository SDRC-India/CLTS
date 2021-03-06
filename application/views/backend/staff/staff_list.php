<!-------------------start of staff list page--------------------------->
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;">
      </th>
			<th><div><?php echo get_phrase('name');?></div></th>
			<th><div><?php echo get_phrase('role');?></div></th>
			<th><div><?php echo get_phrase('contact');?></div></th>
			<th><div><?php echo get_phrase('options');?></div></th>
		</tr>
	</thead>
	<tbody>
		<?php 
    $counter  = 1;
		$this->db->order_by('staff_id' , 'desc');
		$staffs	=	$this->db->get('staff' )->result_array();
		foreach($staffs as $row):
		?>
		<tr>
			<td style="width:30px;">
        <?php echo $counter++;?>
      </td>
			<td><?php echo $row['name'];?></td>
			<td>
				<div class="badge badge-default">
					<?php echo $this->db->get_where('account_role' , array('account_role_id'=>$row['account_role_id']))->row()->name;?>
           	</div>
           </td>
			<td>
           	<?php if ($row['skype_id'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('call_skype');?>"	
                  href="skype:<?php echo $row['skype_id'];?>?chat" style="color:#bbb;">
                          <i class="entypo-skype"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['email'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('send_email');?>"	
                  href="mailto:<?php echo $row['email'];?>" style="color:#bbb;">
                          <i class="entypo-mail"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['phone'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('call_phone');?>"	
                  href="tel:<?php echo $row['phone'];?>" style="color:#bbb;">
                          <i class="entypo-phone"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['facebook_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('facebook_profile');?>"	
                  href="<?php echo $row['facebook_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-facebook"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['twitter_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('twitter_profile');?>"	
                  href="<?php echo $row['twitter_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-twitter"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['linkedin_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('linkedin_profile');?>"	
                  href="<?php echo $row['linkedin_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-linkedin"></i>
                </a>
             <?php endif;?>
           </td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                      
                      <!-- PROFILE LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/staff_profile/<?php echo $row['staff_id'];?>');">
                              <i class="entypo-user"></i>
                                  <?php echo get_phrase('profile');?>
                              </a>
                                      </li>
                      
                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/staff_edit/<?php echo $row['staff_id'];?>');">
                              <i class="entypo-pencil"></i>
                                  <?php echo get_phrase('edit');?>
                              </a>
                                      </li>
                      <li class="divider"></li>
                      
                      <!-- DELETION LINK -->
                      <li>
                          <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?staff/staffs/delete/<?php echo $row['staff_id'];?>' , '<?php echo base_url();?>index.php?staff/reload_staff_list');" >
                              <i class="entypo-trash"></i>
                                  <?php echo get_phrase('delete');?>
                              </a>
                                      </li>
                  </ul>
              </div>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<!------------------------end of staff list------------------------------->



<script src="assets/js/neon-custom-ajax.js"></script>               
<script type="text/javascript">


	
	jQuery(document).ready(function($)
	{
		//convert all checkboxes before converting datatable
		replaceCheckboxes();
		
		// Highlighted rows
		$("#table_export tbody input[type=checkbox]").each(function(i, el)
		{
			var $this = $(el),
				$p = $this.closest('tr');
			
			$(el).on('change', function()
			{
				var is_checked = $this.is(':checked');
				
				$p[is_checked ? 'addClass' : 'removeClass']('highlight');
			});
		});
		
		// convert datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"aoColumns": [
				{ "bSortable": false}, 	//0,checkbox
				{ "bVisible": true},		//1,name
				{ "bVisible": true},		//2,role
				{ "bVisible": true},		//3,contact
				{ "bVisible": true}		//4,option
			],
			
		});
		
		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});

	});
		
</script>
