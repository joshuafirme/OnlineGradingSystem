<script type="text/javascript">
	$(function () {
		loadyearlevel();
		loaddepartment();
		loadstudents();
	})

	function loadyearlevel(){
		$.ajax({
			type: 'POST',
			url: 'view/rankings/class.php',
			data: 'form=loadgradelevel',
			success:function(data){
				$('.yearlevel').html(data);
			}
		})
	}

	function loaddepartment(){
		$.ajax({
			type: 'POST',
			url: 'view/rankings/class.php',
			data: 'form=loaddepartment',
			success:function(data){
				$('.loaddepartment').html(data);
			}
		})
	}

	function loadstudents(){
		var AC_YR = $('#academicyear').val();
		var yearlevel = $('#yearlevel').val();
		var course = $('#course').val();

		$.ajax({
			type: 'POST',
			url: 'view/rankings/class.php',
			data: 'form=loadstudents'+'&AC_YR='+AC_YR+'&yearlevel='+yearlevel+'&course='+course,
			success:function(data){

				$('#loadstudents').html(data);
				$('#tblstudent').dataTable();
			}
		})
	}
</script>