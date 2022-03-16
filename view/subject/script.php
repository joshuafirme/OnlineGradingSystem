<script type="text/javascript">
	$(function(){
		loadgradelevel();
		loadsubject();
		$('#tablesubject').dataTable();
	})

	function loadsubject(){
		$.ajax({
			type:'POST',
			url:'view/subject/class.php',
			data:'form=loadsubject',
			async:false,
			success:function(data){
				$('#loadsubject').html(data);
			}
		})
	}

  function delsubject(id){
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
          url:  'view/subject/class.php',
          data: 'form=delsubject'+'&id='+id,
          success:function(data){
			  loadsubject();
              Swal.fire(
                'Deleted!',
                'Subject has been deleted.',
                'success'
              )
          }
        })
      }
    })
  }

	function updatesubject(id){
		$.ajax({
			type:'POST',
			url:'view/subject/class.php',
			data: 'form=loadinfo'+'&id='+id,
			success:function(data){
/*				alert(data);*/
				var show = data.split('|');
				$('#subjid').val(show[0]);
				$('#subjectcode_edit').val(show[1]);
				$('#subjectdesc_edit').val(show[2]);
				$('#noofunits_edit').val(show[3]);
				$('#yearlevel_edit').val(show[4]);
				$('#academicyear_edit').val(show[5]);

				$('#editsubj').modal('show');
			}
		})
	}

	function saveupdate(){
		    var subjid = $('#subjid').val();
			var subjectcode = $('#subjectcode_edit').val();
			var subjectdesc = $('#subjectdesc_edit').val();
			var noofunits = $('#noofunits_edit').val();
			var yearlevel = $('#yearlevel_edit').val();
			var academicyear = $('#academicyear_edit').val();

			$.ajax({
				type:'POST',
				url:'view/subject/class.php',
				data: 'form=saveupdatesubject'+'&subjectcode='+subjectcode+'&subjectdesc='+subjectdesc+'&noofunits='+noofunits+'&yearlevel='+yearlevel+'&academicyear='+academicyear+'&subjid='+subjid,
			success:function(data){
				if (data == 1) {
					$('#editsubj').modal('hide');
					loadsubject();
					updateAlert(subjectcode)
				} else {
					alert(data);
				}
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
	cont = trap('subjectcode','val_subjectcode','Input Subject Code',cont);
	cont = trap('subjectdesc','val_gsubjectdesc','Input Subject Description',cont);
	cont = trap('noofunits','val_noofunits','Input No. of units',cont);
	cont = trap('yearlevel','val_yearlevel','Input Year level',cont);
	cont = trap('academicyear','val_academicyear','Input Academic year',cont);
	return cont;
	} 

	function savesubject(){
		if (trapAll() == 1) {
			var subjectcode = $('#subjectcode').val();
			var subjectdesc = $('#subjectdesc').val();
			var noofunits = $('#noofunits').val();
			var yearlevel = $('#yearlevel').val();
			var academicyear = $('#academicyear').val();

			$.ajax({
				type:'POST',
				url:'view/subject/class.php',
				data: 'form=savesubject'+'&subjectcode='+subjectcode+'&subjectdesc='+subjectdesc+'&noofunits='+noofunits+'&yearlevel='+yearlevel+'&academicyear='+academicyear,
				success:function(data){
	/*				alert(data);*/
					if (data == 1) {
						$('#addsubj').modal('hide');
						loadsubject();
						addAlert(subjectcode);
					} else {
						alert(data);
					}
				}
			})
		}
	}

	function loadgradelevel(){
		$.ajax({
			type:'POST',
			url:'view/subject/class.php',
			data:'form=loadgradelevel',
			success:function(data){
				$('.loadgradelevel').html(data);
			}
		})
	}

	function addsubj() {
		$('#addsubj').modal('show');
	}

</script>