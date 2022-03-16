<script type="text/javascript">
	$(function(){
		loaduserTeacher();
		$('#loadusersTbl').dataTable();
	})

	function loaduserTeacher(){
		$.ajax({
			type: 'POST',
			url: 'view/archves/class.php',
			data: 'form=loaduserTeacher',
			async: false,
			success:function(data){
				$('#loaduserTeacherTBL').html(data);
			}
		})
	}

	function restoreUser(id){
	    Swal.fire({
	      title: 'Are you sure?',
	      text: "You are about to restore a deleted user!",
	      icon: 'warning',
	      showCancelButton: true,
	      confirmButtonColor: '#3085d6',
	      cancelButtonColor: '#d33',
	      confirmButtonText: 'Yes, restore it!'
	    }).then((result) => {
	      if (result.value) {
	        $.ajax({
	          type: 'POST',
	          url:  'view/archves/class.php',
	          data: 'form=restoreUser'+'&id='+id,
	          success:function(data){
	          	 		loaduserTeacher();
	              Swal.fire(
	                'Restored!',
	                'User has been successfully restored.',
	                'success'
	              )
	          }
	        })
	      }
	    })
	}
</script>