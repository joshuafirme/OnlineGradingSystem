<script type="text/javascript">
	$(function(){
		loadclasslist();
		loadroom();
		$('#tableClassList').dataTable();
	})



	function approvedGrade(id){
		    Swal.fire({
		      title: 'Are you sure?',
		      text: "Do you want to approved this?",
		      icon: 'warning',
		      showCancelButton: true,
		      confirmButtonColor: '#3085d6',
		      cancelButtonColor: '#d33',
		      confirmButtonText: 'Approved'
		    }).then((result) => {
		      if (result.value) {
			        $.ajax({
			          type: 'POST',
					  url:  'view/decline/class.php',
			          data: 'form=approvedGrade&id='+id, 
			          success: function(data){  
			          	if (data == 1) {
							loadclasslist();
							Swal.fire(
							  'Success!',
							  'You have successfully Approved Grades!',
							  'success'
							)
			          	} else {
			          		alert(data);
			          	}
			          }
			        })
		      }
		    })
		  }

     function declinedGrade(id){
     	$('#declinedid').val(id);
     	$('#declinedGrade').modal('show');
     }


	function savedeclined(){
		    Swal.fire({
		      title: 'Are you sure?',
		      text: "Do you want to Declined this?",
		      icon: 'warning',
		      showCancelButton: true,
		      confirmButtonColor: '#3085d6',
		      cancelButtonColor: '#d33',
		      confirmButtonText: 'Yes'
		    }).then((result) => {
		      if (result.value) {
		      		var id = $('#declinedid').val();
		      		var remarks = $('#remarks').val();

			        $.ajax({
			          type: 'POST',
					  url:  'view/decline/class.php',
			          data: 'form=decline&id='+id+'&remarks='+remarks, 
			          success: function(data){  
			          	if (data == 1) {
			          		$('#declinedGrade').modal('hide');
							loadclasslist();
							Swal.fire(
							  'Success!',
							  'You have Declined Grades!',
							  'success'
							)
			          	} else {
			          		alert(data);
			          	}
			          }
			        })
		      }
		    })
		  }

	function loadroom(){
		$.ajax({
			type: 'POST',
			url:  'view/decline/class.php',
			data: 'form=loadroom',
			success:function(data){
				$('#loadroom').html(data);
				$('.loadroom').html(data);
			}
		})
	}

	function viewclasslist(id,id2){
		$.ajax({
			type: 'POST',
			url:  'view/decline/class.php',
			data: 'form=viewclasslist'+'&id='+id+'&id2='+id2,
			success:function(data){
				$('#viewclasslist').modal('show');
				$('#loadstudents').html(data);
				$('#tableviewclasslist').dataTable();
			}
		})
	}
	
	function loadclasslist() {
		$.ajax({
			type: 'POST',
			url:  'view/decline/class.php',
			data: 'form=loadclass',
			async:false,
			success:function(data){

				$('#loadclasslist').html(data);
			}
		})
	}

	function viewManageGrade(id,id2,sect) {
		$.ajax({
			type: 'POST',
			url:  'view/decline/class.php',
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
			url:  'view/decline/class.php',
			data: 'form=managegrade'+'&id='+id+'&id2='+id2+'&sect='+sect,
			success:function(data){
				$('#loadmanagegrade').html(data);
				$('#tblmanageGrade').dataTable();

			}
		})
	}

	function addschedule(id){
		$.ajax({
			type: 'POST',
			url:  'view/decline/class.php',
			data: 'form=addschedule'+'&id='+id,
			success:function(data){
				var show = data.split('|');

				$('#classid').val(show[4]);
				$('#subject').val(show[0]);
				$('#subjectdesc').val(show[1]);
				$('#yearlevel').val(show[2]);
				$('#academicyear').val(show[3]);
				$('#loadroom').val(show[5]);
				$('#section').val(show[6]);
				$('#days').val(show[7]);
				$('#time').val(show[8]);

				$('#addschedule').modal('show');
			}
		})
	}


</script>