<script type="text/javascript">
	$(function(){
		listofstudent();
		$('#tableStudent').dataTable();
	})

	function listofstudent(){
		$.ajax({
			type:'POST',
			url:'view/enroll/class.php',
			data:'form=listofstudent',
			async:false,
			success:function(data){
				$('#listofstudent').html(data);
			}
		})
	}

</script>