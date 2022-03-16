 <script type="text/javascript">
 	$(function(){
 		loadRoom();
 		$('#tableRoom').dataTable();
 	})


 	function editRoom(){
 		$.ajax({
 			type:'POST',
			url: 'view/rooms/class.php',
			data: 'form=editRoom'+'&Roomname='+$('#Roomname_edit').val()+'&Roomdesc='+$('#Roomdesc_edit').val()+'&Roomid='+$('#Roomid').val(),
 			success:function(data){
 				if (data == 1) {
 					updateAlert($('#Roomname_edit').val());
 					loadRoom();
 					$('#edit').modal('hide');
 				} else {
 					alert(data);
 				}
 			}
 		})
 	}

 	function loadRoom(){
 		$.ajax({
			type: 'POST',
			url: 'view/rooms/class.php',
 			data:'form=loadRoom',
 			async:false,
 			success:function(data){
 				$('#dataRoom').html(data);
 			}
 		})
 	}


  function delRoom(id){
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
          url:  'view/rooms/class.php',
          data: 'form=delRoom'+'&id='+id,
          success:function(data){
          	  loadRoom();
              Swal.fire(
                'Deleted!',
                'Room has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }

	function addroom() {
		$('#addRoom').modal('show');
	}

	function edit(id){
		$.ajax({
			type: 'POST',
			url:  'view/rooms/class.php',
			data: 'form=loadinfo'+'&id='+id,
			success:function(data){
				var show = data.split('|');
				$('#edit').modal('show');
				$('#Roomname_edit').val(show[0]);
				$('#Roomdesc_edit').val(show[1]);
				$('#Roomid').val(show[2]);
			}
		})
	}

	function saveRoom(){
		if (trapAll() == 1) {
			$.ajax({
				type: 'POST',
				url: 'view/rooms/class.php',
				data: 'form=saveRoom'+'&Roomname='+$('#Roomname').val()+'&Roomdesc='+$('#Roomdesc').val(),
				success:function(data){
					if (data == 1) {
						$('#addRoom').modal('hide');
						$('#Roomname').val('');
						$('#Roomdesc').val('');
 						loadRoom();
						addAlert($('#Roomname').val());
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
	cont = trap('Roomname','val_Roomname','Input Room name',cont);
	cont = trap('Roomdesc','val_Roomdesc','Input Room Description',cont);
	return cont;
	} 

</script>