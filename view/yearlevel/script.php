 <script type="text/javascript">
 	$(function(){
 		loadgradelevel();
 		$('#tablegradelevel').dataTable();
 	})


 	function editgradelevel(){
 		$.ajax({
 			type:'POST',
			url: 'view/yearlevel/class.php',
			data: 'form=editgradelevel'+'&gradecode='+$('#gradecode_edit').val()+'&gradedesc='+$('#gradedesc_edit').val()+'&gradeid='+$('#gradeid').val(),
 			success:function(data){
 				if (data == 1) {
 					updateAlert($('#gradecode_edit').val());
 					loadgradelevel();
 					$('#edit').modal('hide');
 				} else {
 					alert(data);
 				}
 			}
 		})
 	}

 	function loadgradelevel(){
 		$.ajax({
			type: 'POST',
			url: 'view/yearlevel/class.php',
 			data:'form=loadgradelevel',
 			async:false,
 			success:function(data){
 				$('#datagradelevel').html(data);
 			}
 		})
 	}


  function delgrade(id){
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
          url:  'view/yearlevel/class.php',
          data: 'form=delgrade'+'&id='+id,
          success:function(data){
          	  loadgradelevel();
              Swal.fire(
                'Deleted!',
                'Grade Level has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }

	function addgrade() {
		$('#addgrade').modal('show');
	}

	function edit(id){
		$.ajax({
			type: 'POST',
			url:  'view/yearlevel/class.php',
			data: 'form=loadinfo'+'&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#edit').modal('show');
				$('#gradecode_edit').val(show[0]);
				$('#gradedesc_edit').val(show[1]);
				$('#gradeid').val(show[2]);
			}
		})
	}

	function savegradelevel(){
		if (trapAll() == 1) {
			$.ajax({
				type: 'POST',
				url: 'view/yearlevel/class.php',
				data: 'form=savegrade'+'&gradecode='+$('#gradecode').val()+'&gradedesc='+$('#gradedesc').val(),
				success:function(data){
					if (data == 1) {
						$('#addgrade').modal('hide');
						addAlert($('#gradecode').val());
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
	cont = trap('gradecode','val_gradecode','Input Grade Code',cont);
	cont = trap('gradedesc','val_gradedesc','Input Grade Description',cont);
	return cont;
	} 

</script>