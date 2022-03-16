 <!-- DATE 11-17-2021 Michael-->

 <script type="text/javascript">
 	$(function(){
 		loadinstructor();
 		loadfaculty();
 		$('#tableFaculty').dataTable();
 	})


	function addFaculty() {
		$('#addFaculty').modal('show');
	}


	function editInstructor(id){
		$('#updateid').val(id);

		$.ajax({
			type:'POST',
			url:'view/faculty/class.php',
			data:'form=loadinsInfo'+'&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#instructor_edit').val(show[0]);
				$('#specialization_edit').val(show[1]);
				$('#editInstructor').modal('show');
			}
		})
	}


	function trap(id,validation,text,cont){
	  if( $('#'+id).val() == '' ){
	    trappAlert()
	    $('#'+validation).html('<small class="form-control-feedback"> <font color="red">Please '+text+'</font> </small>');
	    $('#'+id).css('border','1px solid red');
	    cont = 0;
	  }else {
	    $('#'+id).css('border','');
	    $('#'+validation).html('');
	  }
	  return cont;
	}

	function trapAll(){
		var cont = 1;
		cont = trap('instructor','val_instructor','Select Instructor',cont);
		cont = trap('specialization','val_specialization','Input Specialization',cont);
		return cont;
	} 

	function trapAlledit(){
		var cont = 1;
		cont = trap('instructor_edit','val_instructor_edit','Select Instructor',cont);
		cont = trap('specialization_edit','val_specialization_edit','Input Specialization',cont);
		return cont;
	} 

	function loadinstructor(){
		$.ajax({
			type:'POST',
			url:'view/faculty/class.php',
			data:'form=loadinstructor',
			success:function(data){
				$('.loadinstructor').html(data);
			}
		})
	}

	function loadfaculty(){
		$.ajax({
			type: 'POST',
			url:'view/faculty/class.php',
			data:'form=loadfaculty',
			async:false,
			success:function(data){
				$('#loadfaculty').html(data);
			}
		})
	}


	function saveinstructor(){
		if (trapAll()==1) {
			var instructor = $('#instructor').val();
			var specialization = $('#specialization').val();
			$.ajax({
				type: 'POST',
				url:'view/faculty/class.php',
				data:'form=saveinstructor'+'&instructor='+instructor+'&specialization='+specialization,
				success:function(data){
					if (data == 1) {
						$('#addFaculty').modal('hide')
						loadfaculty();
						$('#instructor').val('');
						$('#specialization').val('');
						Swal.fire(
						  'Success!',
						  'You have successfully Added New Instructor!',
						  'success'
						)
					} else {
						Swal.fire(
						  'Error!',
						  'This Instructor Already Exist!',
						  'error'
						)
					}
				}
			})
		}
	}

	function saveUpdateinstructor(){
		var id = $('#updateid').val();

		if (trapAlledit()==1) {
			var instructor = $('#instructor_edit').val();
			var specialization = $('#specialization_edit').val();
			$.ajax({
				type: 'POST',
				url:'view/faculty/class.php',
				data:'form=saveUpdateinstructor'+'&instructor='+instructor+'&specialization='+specialization+'&id='+id,
				success:function(data){
					if (data == 1) {
						loadfaculty();
						$('#instructor_edit').val('');
						$('#specialization_edit').val('');
						Swal.fire(
						  'Success!',
						  'You have successfully Update Instructor!',
						  'success'
						)
					} else {
						Swal.fire(
						  'Error!',
						  'This Instructor Already Exist!',
						  'error'
						)
					}
				}
			})
		}
	}

  function deleteInstructor(id){
/*  	var userid = $('#userid_edit').val();*/
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
		  url:'view/faculty/class.php',
          data: 'form=deleteInstructor'+'&id='+id,
          success:function(data){
          	  loadfaculty();
              Swal.fire(
                'Deleted!',
                'User has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }

</script>