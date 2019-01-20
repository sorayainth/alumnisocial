<?php 

class Alert_model extends CI_Model
{
	

	public function alert_success()
	{
      
      $this->session->set_flashdata('flashSuccess','
      	<div class="demo2"></div>
      	<script>
	        $(document).ready(function () {
	            $(".demo2").load("load", function() {
	                swal({
	                    title: "Success!",
	                    text: "You clicked the button!",
	                    type: "success"
	                });
	            });
	        });
    	</script>');
	}

	public function alert_error()
	{
      $this->session->set_flashdata('flashSuccess','
      	<div class="demo4"></div>
      	<script>
	        $(document).ready(function () {
	            $(".demo4").load("load", function() {
	                swal({
	                    title: "Oh Error!",
	                    text: "You clicked the button!",
	                    type: "error"
	                });
	            });
	        });
		</script>');


	}

// end
}