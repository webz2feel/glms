<script type="text/javascript">


function get_district_circle(){
	  var form_data = {
        division_id : $('#division').val(),
		type : 'division'
	   }
		$.ajax({
			type : 'POST',
			url : '<?php echo site_url("patwarcircle/patwar_ajax_elements"); ?>',
			data: form_data,
			success : function(msg){
				 $("#district").html(msg)
				}
		});
	}
function get_tehsil_circle(){
	  var form_data = {
        district_id : $('#district').val(),
		type : 'subdiv'
	   }
		$.ajax({
			type : 'POST',
			url : '<?php echo site_url("patwarcircle/patwar_ajax_elements"); ?>',
			data: form_data,
			success : function(msg){
				 $("#subdivision").html(msg)
				}
		});

	}
function get_qgoicircle_circle(){
	  var form_data = {
        tehsil_id : $('#subdivision').val(),
		type : 'qgcircle'
	   }
		$.ajax({
			type : 'POST',
			url : '<?php echo site_url("patwarcircle/patwar_ajax_elements"); ?>',
			data: form_data,
			success : function(msg){
				 $("#qcircle").html(msg)
				}
		});

	}
        </script>
