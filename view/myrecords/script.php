<script type="text/javascript">
	
	$(function(){
		loaduserinfo();
		loadrecords();
		$('#tblrecords').dataTable();
		loadyearlevel();
		loaddepartment();
		/*loadclasslist();*/
/*		loadstudentSubject();*/

	})



	  function enrollsubj(subj,instructor,room,section,yearlevel,academicyear,days,time){
	    Swal.fire({
	      title: 'Are you sure?',
	      text: "Adding this subject will notify the Instructor that you enrolled this subject.",
	      icon: 'warning',
	      showCancelButton: true,
	      confirmButtonColor: '#008000',
	      cancelButtonColor: '#d33',
	      confirmButtonText: 'Yes, Enroll now!'
	    }).then((result) => {
	      if (result.value) {
			var userID = $('#userID').val();
			var eid = $('#enrollmentid').val();
			$.ajax({
				type:'POST',
				url:  'view/myrecords/class.php',
				data:'form=enrollsubj&userID='+userID+'&subj='+subj+'&instructor='+instructor+'&room='+room+'&section='+section+'&yearlevel='+yearlevel+'&academicyear='+academicyear+'&days='+days+'&time='+time+'&eid='+eid,
				success:function(data){
					if (data == 1) {
						loadclasslist();
						loadstudentSubject(eid);
						addAlert('Subject');
						loadrecords();
						$('#tblrecords').dataTable();
					} else {
						Swal.fire(
						  'Error!',
						  '<font color="red"><b>You already have this subject</b></font>',
						  'error'
						)
					}

				}
			})
	      }
	    })
	  }



	function loadclasslist() {
		var id = $('#userID').val();
        var academicyear = $('.academicyear').val();
		$.ajax({
			type: 'POST',
			url:  'view/myrecords/class.php',
			data:'form=loadclass'+'&id='+id+'&academicyear='+academicyear,
			async:false,
			success:function(data){
				$('#loadclasslist').html(data);
				$('#tableClassList').dataTable();
			}
		})
	}

	function enrollmodal(eid,semester,department,academicyear){
		$('#enrollmentid').val(eid);
		$('.semester').val(semester);
		$('.department').val(department);
		$('.academicyear').val(academicyear);
		$('#subjectlist').modal('show');
		loadstudentSubject(eid);
	}

	function loadstudentSubject(eid){
		var id = $('#userID').val();
		$.ajax({
			type: 'POST',
			url:  'view/myrecords/class.php',
			data:'form=studload'+'&id='+id+'&eid='+eid,
			async:false,
			success:function(data){
				/*alert(data);*/
				$('#listsubject').html(data);
				$('#tblsubjlist').dataTable();
			}
		})
	}


	function modals(type,act,type2,act2){
		$('#'+type2).modal(act2);
		$('#'+type).modal(act);
		loadclasslist();
	}


	function loaduserinfo(){
		var id = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=loaduserinfo&id='+id,
			success:function(data){
				var show = data.split('|');
				$('.accountno').val(show[0]);
				$('.fullname').val(show[1]);
			}
		})
	}

	function loadrecords(){
		var id = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=loadrecords&id='+id,
			async:false,
			success:function(data){
				$('#loadrecords').html(data);
			}
		})
	}

	function loadyearlevel(){
		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=loadyearlevel',
			success:function(data){
				$('#loadyearlevel').html(data);
				$('.loadyearlevel').html(data);
			}
		})
	}

	function loaddepartment(){
		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=department',
			success:function(data){
				$('#department').html(data);
				$('.department').html(data);
			}
		})
	}

	function enrollstudent(){
		var id = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=enrollstudent&id='+id,
			success:function(data){

				var show = data.split('|');
				$('#accountno').val(show[0]);
				$('.name').val(show[1]);
				$('#enrollstudent').modal('show');
			}
		})
	}

	function updateerecords(id){
		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=updateerecords&id='+id,
			success:function(data){

				var show = data.split('|');
				$('#yearlevel_edit').val(show[0]);
				$('#academicyear_edit').val(show[1]);
				$('#department_edit').val(show[2]);
				$('#semester_edit').val(show[3]);

				$('#updateenrollstudent').modal('show');
			}
		})
	}

	function saveenroll(){
		var id = $('#userID').val();
		var academicyear = $('#academicyear').val();
		var department = $('#department').val();
		var semester = $('#semester').val();
		var yearlevel = $('#loadyearlevel').val();
		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=saveenroll&id='+id+'&academicyear='+academicyear+'&department='+department+'&semester='+semester+'&yearlevel='+yearlevel,
			success:function(data){
				if (data == 1) {
					loadrecords();
					Swal.fire(
					  'Success!',
					  'You have successfully enroll <font color="green"><b>'+semester+' Semester</b></font>!',
					  'success'
					)
				} else {
					Swal.fire(
					  'Error!',
					  '<font color="red"><b>Already Enrolled this '+semester+'</b></font>',
					  'error'
					)
				}
			}
		})
	}
	function saveupdateenroll(){
		var id = $('#userID').val();
		var academicyear = $('#academicyear_edit').val();
		var department = $('#department_edit').val();
		var semester = $('#semester_edit').val();
		var yearlevel = $('#yearlevel_edit').val();
		$.ajax({
			type:'POST',
			url:'view/myrecords/class.php',
			data:'form=saveupdateenroll&id='+id+'&academicyear='+academicyear+'&department='+department+'&semester='+semester+'&yearlevel='+yearlevel,
			success:function(data){
				if (data == 1) {
					loadrecords();
					Swal.fire(
					  'Success!',
					  'You have successfully update enrollment record/b></font>!',
					  'success'
					)
				} else {
					Swal.fire(
					  'Error!',
					  '<font color="red"><b>There is already enrolled same semester and acadamic year</b></font>',
					  'error'
					)
				}
			}
		})
	}




  function deleterecords(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "Deleting this record will delete all the subjects with in this record and you won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url:  'view/myrecords/class.php',
          data: 'form=deleterecords'+'&id='+id,
          success:function(data){
			loadrecords();
			$('#tblrecords').dataTable();
              Swal.fire(
                'Deleted!',
                'Record has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }
</script>