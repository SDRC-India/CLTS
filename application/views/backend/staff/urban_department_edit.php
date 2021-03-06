
<?php
$parent=$ref;
include "modal_msg_labouract.php";?>

<div class="row">
  <?php
if($parent=='entitle'){
	include "entitled_child_detail.php";}
else{

include "rehilibitionTab.php";   
}
foreach ($urban_development_department_data as $row): ?>
  <!----------------------------------start of urban dept------------------------------>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?urban_development_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Urban Development Department - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('urban_development_department/urbandepartment_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Is Rescued Child Family benefited under SJSRY ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="is_sjsry" class="form-control" data-validate="required" id="is_sjsry">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['is_sjsry']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['is_sjsry']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['is_sjsry']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="is_sjsry_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. Proof<span class="color-red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				 <?php if (file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/urban/q1/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/urban/q1/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/urban/q1/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/urban/q1/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/urban/q1/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}
						else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                   <input type="file" name="image1" id="image1" accept="image/*" onchange="return ajaxFileUpload2(this)" >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img2"></div>
				<div id="attach-img1"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">2. Is Rescued Child's Family benefited under  JNURM(Urban area only) ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="is_jnrum" class="form-control" data-validate="required" id="is_jnrum">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['is_jnrum']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['is_jnrum']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['is_jnrum']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="is_jnrum_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">2 i. Proof<span class="color-red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				<?php if (file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/urban/q2/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/urban/q2/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/urban/q2/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/urban/q2/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/urban/q2/'.$row['child_id'].'.png" width="150" height="100" /</a>';
						}
						else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1">
				  </div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image2" id="image2" accept="image/*" onchange="return ajaxFileUpload3(this)" >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img3"></div>
				<div id="attach-img2"></div>
              </div>
            </div>
          </div>
        </div>
        <h3 style="font-size:14px">SJSRY :- Swarn Jayanti Shahri Rojgar Yojana</br>
          JNNURM :- Jawaharlal Nehru National Urban Renewal Mission</h3>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!----------------------------------------end of urban------------------------------------>
<?php endforeach;?>
<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });

		if($('#is_sjsry').val() == 'Yes') {
            $('#is_sjsry_yes').show();
       		 } else {
            $('#is_sjsry_yes').hide();
       		 }

		if($('#is_jnrum').val() == 'Yes') {
            $('#is_jnrum_yes').show();
       		 } else {
            $('#is_jnrum_yes').hide();
       		 }

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

    function validate_project_add(formData, jqForm, options) {

		if (!jqForm[0].is_sjsry.value)
        {
            return false;
        }
		var sjry = (jqForm[0].is_sjsry.value);

				if (sjry == 'Yes'){
					<?php if ((file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.jpg')) ||
					(file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.png')) ||
					(file_exists('uploads/entitlement_proof/urban/q1/' .$row['child_id'] . '.pdf'))) {  ?>
						//return true;
					<?php
				 } else {?>
						if(document.getElementById("image1").files.length == 0 ){
						 $("#attach-img1").html("Attachment not available");
							return false;
						}else{
							 $("#attach-img1").html("");
						}
			<?php } ?>
			}

		//for image check
		 var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename1 = jqForm[0].image1.value;
            if (filename1.search(re_text) == -1 && filename1 !='')
            {
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img2").html("");
			}
			var filename2 = jqForm[0].image2.value;
            if (filename2.search(re_text) == -1 && filename2 !='')
            {
				$("#error-img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img3").html("");
			}

		//end

		if (!jqForm[0].is_jnrum.value)
        {
            return false;
        }
		var jnrum = (jqForm[0].is_jnrum.value);
		if (jnrum == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.png')) ||
		(file_exists('uploads/entitlement_proof/urban/q2/' .$row['child_id'] . '.pdf'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image2").files.length == 0 ){
   			 $("#attach-img2").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img2").html("");
				}
			<?php } ?>
		}


        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);
		
		$('#preloader-form').html('');
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
	$(function() {
//$('#is_sjsry_yes').hide();
   		 $('#is_sjsry').change(function(){
        	if($('#is_sjsry').val() == 'Yes') {
            $('#is_sjsry_yes').show();
       		 } else {
            $('#is_sjsry_yes').hide();
       		 }
    	});
		});
$(function() {
//$('#is_jnrum_yes').hide();
   		 $('#is_jnrum').change(function(){
        	if($('#is_jnrum').val() == 'Yes') {
            $('#is_jnrum_yes').show();
       		 } else {
            $('#is_jnrum_yes').hide();
       		 }
    	});
		});

			function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
               // upload_field.form.reset();
                return false;
            }else{
				$("#error-img2").html("");
			}
			}
			function ajaxFileUpload3(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#error-img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                //upload_field.form.reset();
                return false;
            }else{
				$("#error-img3").html("");
			}
			}
</script>
