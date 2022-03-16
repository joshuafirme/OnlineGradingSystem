<script type="text/javascript">

	$(function(){
	/*	searchlog();*/
	loadusername();
	loaddefaultlog();
	$('#logTable').dataTable();
	});
	


	function loadusername(){
		$.ajax({
			type: 'POST',
			url: 'view/auditrail/class.php',
			data: 'form=loadusername',
			success:function(data){

				$('.loadusername').html(data);
			}
		})
	}

	function loaddefaultlog(){
		$.ajax({
			type: 'POST',
			url: 'view/auditrail/class.php',
			data: 'form=loaddefaultlog',
			async:false,
			success:function(data){

				$('.loaddefaultlog').html(data);
			}
		})
	}

</script> 