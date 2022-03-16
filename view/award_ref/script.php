<script type="text/javascript">
		$(function(){
			loaddays();
		})

		function loaddays(){
			$.ajax({
				type: 'POST',
				url: 'view/award_ref/class.php',
				data: 'form=loaddays',
				success:function(data){
					$('#loaddasys').html(data);
					$('#tbldays').dataTable();
				}
			})
		}

		function modaldays(type,type2){
			$('#'+type).modal(type2);
		}

		function savedays(){
			var days = $('#days').val();
			var description  = $('#description').val();

			$.ajax({
				type: 'POST',
				url: 'view/award_ref/class.php',
				data: 'form=savedays'+'&days='+days+'&description='+description,
				success:function(data){
					if (data == 1) {
						$('#adddays').modal('hide');
						addAlert(days);
						$('#days').val('');
						$('#description').val('');
						loaddays();
						$('#tbldays').dataTable();
					} else {
						alert(data);
					}
				}
			})
		}


		function viewinfo(id){
			$.ajax({
				type: 'POST',
				url: 'view/award_ref/class.php',
				data: 'form=viewinfo'+'&id='+id,
				success:function(data){
					var show = data.split('|');
						$('#id').val(show[0]);
						$('#days_edit').val(show[1]);
						$('#description_edit').val(show[2]);
						$('#editdays').modal('show');
				}
			})

		}


		function savedit(){
			var id = $('#id').val();
			var days = $('#days_edit').val();
			var description  = $('#description_edit').val();

			$.ajax({
				type: 'POST',
				url: 'view/award_ref/class.php',
				data: 'form=savedit'+'&days='+days+'&description='+description+'&id='+id,
				success:function(data){
					if (data == 1) {
						$('#editdays').modal('hide');
						updateAlert(days);
						loaddays();
						$('#tbldays').dataTable();
					} else {
						alert(data);
					}
				}
			})
		}



		  function deleteDays(id){
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
		          url: 'view/award_ref/class.php',
		          data: 'form=deleteDays'+'&id='+id,
		          success:function(data){
						loaddays();
						$('#tbldays').dataTable();
		              Swal.fire(
		                'Deleted!',
		                'Days has been deleted.',
		                'success'
		              )
		          }
		        })
		      }
		    })
		  }


</script>