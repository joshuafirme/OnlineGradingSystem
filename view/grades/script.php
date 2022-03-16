<script type="text/javascript">
	$(function(){
		loadclasslist();
		loadroom();
		loaddays();
		$('#tableClassList').dataTable();
	})


  function submitGrade(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you want to submit this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Submit!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
		  url:  'view/grades/class.php',
          data: 'form=submitGrade&id='+id, 
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


  function loaddays(){
  	$.ajax({
          type: 'POST',
		  url:  'view/grades/class.php',
  		  data: 'form=loaddays',
  		success:function(data){
  			$('.loaddays').html(data);
  		}
  	})
  }


  function updateGrades(){
      $('#loadmanagegrade').find('tr').each(function(){
        var id = $(this).find('td').eq(0).find('input').val();   
        var fG = $(this).find('td').eq(1).find('input').val();  
        var SndG = $(this).find('td').eq(2).find('input').val();  
        var thrdG = $(this).find('td').eq(3).find('input').val();  
        var fthG = $(this).find('td').eq(4).find('input').val();  

               
        $.ajax({
          type: 'POST',
		  url:  'view/grades/class.php',
          data: 'form=savegrade&fG='+fG+'&SndG='+SndG+'&thrdG='+thrdG+'&fthG='+fthG+'&id='+id, 
          success: function(data){  
          	$('#viewManageGrade').modal('hide');
			Swal.fire(
			  'Success!',
			  'You have successfully update grades!',
			  'success'
			)
          }
        });
      });
  }

	function loadroom(){
		$.ajax({
			type: 'POST',
			url:  'view/grades/class.php',
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
			url:  'view/grades/class.php',
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
			url:  'view/grades/class.php',
			data: 'form=loadclass',
			async:false,
			success:function(data){
				$('#loadclasslist').html(data);
			}
		})
	}

	function viewManageGrade(id,id2) {
		$.ajax({
			type: 'POST',
			url:  'view/grades/class.php',
			data: 'form=managegrade'+'&id='+id+'&id2='+id2,
			success:function(data){
				$('#viewManageGrade').modal('show');
				$('#loadmanagegrade').html(data);
				$('#tblmanageGrade').dataTable();

			    $('.table-input').click(function(){
			  	$('.table-input').attr('readonly','readonly');
			  	$(this).removeAttr('readonly');
			  });
			}
		})
	}

	function addschedule(id){
		$.ajax({
			type: 'POST',
			url:  'view/grades/class.php',
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

	function saveschedule(){
		var id = $('#classid').val();
		var room = $('#loadroom').val();
		var section = $('#section').val();
		var days = $('#days').val();
		var time = $('#time').val();
		var yearlevel = $('#yearlevel').val();
		var academicyear = $('#academicyear').val();
		$.ajax({
			type:'POST',
			url:'view/grades/class.php',
			data:'form=saveschedule&id='+id+'&room='+room+'&section='+section+'&days='+days+'&time='+time+'&yearlevel='+yearlevel+'&academicyear='+academicyear,
			success:function(data){
					if (data == 1) {
						$('#addschedule').modal('hide');
						loadclasslist();
						$('#loadroom').val('');
						$('#section').val('');
						$('#days').val('');
						$('#time').val('');						
						Swal.fire(
						  'Success!',
						  'You have successfully Added Schedule!',
						  'success'
						)
					} else {
						Swal.fire(
						  'Error!',
						  'please contact admin!',
						  'error'
						)
					}
			}
		})
	}
</script>