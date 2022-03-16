<script type="text/javascript">
	$(function(){
		listsubject();
		loadsubject();
		loadinstructinfo();
		$('#tableFaculty').dataTable();
	});

	function editsubject(subjid,id){
		$('#loadsid').val(id);

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=loadsInfo'+'&id='+id+'&subjid='+subjid,
			success:function(data){
				var show = data.split('|');

				$('#editloads').modal('show');
				$('#loadsubject_edit').val(show[0]);
				$('#description_edit').val(show[1]);
				$('#unit_edit').val(show[2]);
				$('#yearlevel_edit').val(show[3]);
			}
		})
	}

  function deletesubject(id){
/*  	var userid = $('#userid_edit').val();*/
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Remove it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url:  'view/loads/class.php',
          data: 'form=deletesubject'+'&id='+id,
          success:function(data){
          	 listsubject();
              Swal.fire(
                'Deleted!',
                'Subject has been removed.',
                'success'
              )
          }
        })
      }
    })
  }


	function addloads(){
		$('#addloads').modal('show');
	}

	function saveloads(){
		var subjcode = $('#loadsubject').val();
		var userID = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=saveloads&subjcode='+subjcode+'&userID='+userID,
			success: function(data){
				if (data == 1) {
					listsubject();
					Swal.fire(
					  'Success!',
					  'You have successfully Added Subject!',
					  'success'
					)
				} else {
					Swal.fire(
					  'Error!',
					  'This Subject is already in your list!',
					  'error'
					)
				}
			}
		})
	}


	function saveUpdateloads(){
		var subjcode = $('#loadsubject_edit').val();
		var id = $('#loadsid').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=saveUpdateloads&subjcode='+subjcode+'&id='+id,
			success: function(data){
/*				alert(data);*/
				if (data == 1) {
					listsubject();
					$('#editloads').modal('hide');
					Swal.fire(
					  'Success!',
					  'You have successfully Update Subject!',
					  'success'
					)
				} else {
					Swal.fire(
					  'Error!',
					  'This Subject is already in your list!',
					  'error'
					)
				}
			}
		})
	}

	function loadinstructinfo(){
		var id = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=loadinstructinfo&id='+id,
			success: function(data){
				var show = data.split('|');
				$('#fullname').val(show[0]);
				$('#specialization').val(show[1]);
			}
		})
	}

	function loadsubject(){
		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=loadsubject',
			async:false,
			success:function(data){
				$('.loadsubject').html(data);
			}
		})
	}

	function getinfo(){
		var id = $('#loadsubject').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=getinfo&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#description').val(show[0]);
				$('#unit').val(show[1]);
				$('#yearlevel').val(show[2]);
			}
		})
	}


	function getinfo2(){
		var id = $('#loadsubject_edit').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=getinfo&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#description_edit').val(show[0]);
				$('#unit_edit').val(show[1]);
				$('#yearlevel_edit').val(show[2]);
			}
		})
	}

	function listsubject(){
		var userID = $('#userID').val();

		$.ajax({
			type:'POST',
			url:'view/loads/class.php',
			data:'form=listsubject&userID='+userID,
			async:false,
			success: function(data){
				$('#listsubject').html(data);
			}
		})
	}

</script>