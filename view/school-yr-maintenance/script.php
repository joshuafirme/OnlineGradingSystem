<!-- MODIFIED BY JOSH -->
<script type="text/javascript">
	$(function(){
		loadSchoolYear();
		loadInstructorlist();
		$('#table-instructor-List').dataTable();
		$('#tableClassList').dataTable();
		$("#select_all").click(function(){
			$('input:checkbox').not(this).prop('checked', this.checked);
		});
	})

	function loadInstructorlist() {
		var url_string = window.location.href; 
		var url = new URL(url_string);
		var sy = url.searchParams.get("sy");
		var term = url.searchParams.get("term");
		term = term == '1st' ? 1 : 2;
		console.log(sy+' '+term)
		$.ajax({
			type: 'POST',
			url:  'view/school-yr-maintenance/class.php',
			data: 'form=loadInstructors'+'&sy='+sy+'&term='+term,
			async:false,
			success:function(data){
				console.log(data)
				$('#load-instructor-list').html(data);
			}
		})
	}
	
	function loadSchoolYear() {
		$.ajax({
			type: 'POST',
			url:  'view/school-yr-maintenance/class.php',
			data: 'form=school_yr_maintenance',
			async:false,
			success:function(data){
				$('#loadclasslist').html(data);
			}
		})
	}

	function viewManageGrade(id,id2,sect) {
		$.ajax({
			type: 'POST',
			url:  'view/school-yr-maintenance/class.php',
			data: 'form=viewinfo'+'&id='+id+'&id2='+id2+'&sect='+sect,
			success:function(data){
				var show = data.split('|');
				$('#instructor').val(show[0]);
				$('#subject').val(show[1]);
				$('#section').val(show[2]);
				$('#viewManageGrade').modal('show');
			}
		})
		$.ajax({
			type: 'POST',
			url:  'view/school-yr-maintenance/class.php',
			data: 'form=managegrade'+'&id='+id+'&id2='+id2+'&sect='+sect,
			success:function(data){
				$('#loadmanagegrade').html(data);
				$('#tblmanageGrade').dataTable();

			}
		})
	}

</script>