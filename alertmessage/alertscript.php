<script type="text/javascript">
	function addAlert(name){	
		Swal.fire(
	  'Success!',
	  'You have successfully Added <font color="green"><b>'+name+'</b></font>!',
	  'success'
	)
	}

	function updateAlert(name){	
		Swal.fire(
		  'Success!',
		  'You have successfully Update <font color="green"><b>'+name+'</b></font>!',
		  'success'
		)
	}

	function trappAlert(){
		Swal.fire(
	  'Warning!',
	  '<font color="red"><b>Please complete required fields</b></font>',
	  'warning'
	)
	}

	function alreadyAlert(name){
		Swal.fire(
	  'Error!',
	  '<font color="red"><b>'+name+'</b></font> Already Exist!',
	  'error'
	)
	}

	function cssAlert(){
	 $(".swal2-modal").css('background-color', 'rgba(0,0,123,0.2)');//Optional changes the color of the sweetalert 
 $(".swal2-modal").css('border', '3px solid white');//Optional changes the color of the sweetalert 
 $(".swal2-container.in").css('background-color', 'rgba(1, 1, 1, 0.5)');//changes the color of 
	}

</script>