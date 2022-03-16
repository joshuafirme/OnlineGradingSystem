 <script type="text/javascript">
 	$(function(){
 		loaddepartment();
 		$('#tabledepartment').dataTable();
 	})


 	function deditepartment(){
 		$.ajax({
 			type:'POST',
			url: 'view/department/class.php',
			data: 'form=editdepartment'+'&departmentname='+$('#departmentname_edit').val()+'&departmentdesc='+$('#departmentdesc_edit').val()+'&departmentid='+$('#departmentid').val(),
 			success:function(data){
 				if (data == 1) {
 					updateAlert($('#departmentname_edit').val());
 					loaddepartment();
 					$('#edit').modal('hide');
 				} else {
 					alert(data);
 				}
 			}
 		})
 	}

 	function loaddepartment(){
 		$.ajax({
			type: 'POST',
			url: 'view/department/class.php',
 			data:'form=loaddepartment',
 			async:false,
 			success:function(data){
 				$('#datadepartment').html(data);
 			}
 		})
 	}


  function deldepartment(id){
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
          url:  'view/department/class.php',
          data: 'form=deldepartment'+'&id='+id,
          success:function(data){
          	  loaddepartment();
              Swal.fire(
                'Deleted!',
                'Department has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }

	function adddept() {
		$('#adddepartment').modal('show');
	}

	function edit(id){
		$.ajax({
			type: 'POST',
			url:  'view/department/class.php',
			data: 'form=loadinfo'+'&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#edit').modal('show');
				$('#departmentname_edit').val(show[0]);
				$('#departmentdesc_edit').val(show[1]);
				$('#departmentid').val(show[2]);
			}
		})
	}

	function savedepartment(){
		if (trapAll() == 1) {
			$.ajax({
				type: 'POST',
				url: 'view/department/class.php',
				data: 'form=savedepartment'+'&departmentname='+$('#departmentname').val()+'&departmentdesc='+$('#departmentdesc').val(),
				success:function(data){
					if (data == 1) {
						$('#adddepartment').modal('hide');
 						loaddepartment();
						addAlert($('#departmentname').val());
					} else {
						alert(data);
					}
				}
			})
		}
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
	cont = trap('departmentname','val_departmentname','Input Department name',cont);
	cont = trap('departmentdesc','val_departmentdesc','Input Department Description',cont);
	return cont;
	} 

</script>