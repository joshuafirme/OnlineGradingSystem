<script type="text/javascript">
		
		$(function(){
 			personalInfo();
 			loadcountsDash();
			loadannouncement();
		})

		function loadcountsDash(){
			$.ajax({
				type: "POST",
				url: "view/dashboard/class.php",
				data: "form=loadcountsDash",
				success:function(data){
					var show = data.split("|");

					$('#countstaff').html(show[0]);
					$('#countcustomer').html(show[1]);
					$('#count_ar').html(show[2]);
					$('#countreview').html(show[3]);
					$('#countapproval').html(show[4]);
					$('#countcomplied').html(show[5]);
					$('#countdeclined').html(show[6]);
					$('#countTotalMyApp').html(show[7]);
				}
			})
		}

		function loadannouncement(){
			$.ajax({
				type: "POST",
				url: "view/dashboard/class.php",
				data: "form=loadannouncement",
				success:function(data){
					var show = data.split("|");
					$('.date').html(show[0]);
					$('.message').html(show[1]);
					$('.postedby').html(show[2]);
					$('.title').html(show[3]);
					$('#title').val(show[3]);
					$('#message').html(show[1]);
				}
			})

		}

		function updateannouncement(){
 			loadannouncement();
			$('#announcemodal').modal('show');
		}

		function closemodal(){
			$('#announcemodal').modal('hide');
		}

		function saveAnnouncement(){
			var title = $('#title').val();
			var message = $('#message').val();

			$.ajax({
				type: "POST",
				url: "view/dashboard/class.php",
				data: "form=saveAnnouncement"+'&title='+ title+'&message='+ message,
				success:function(data){
					loadannouncement();
					$('#announcemodal').modal('hide');
			 		Swal.fire(
					  'Success!',
					  'You have successfully Update <font color="green"><b> Announcement Board</b></font>!',
					  'success'
					)
			
				}
			})
		}

		function personalInfo(){
			$.ajax({
				type: "POST",
				url: "view/dashboard/class.php",
				data: "form=personalInfo",
				success:function(data){
					if (data == 1) {
					    $.toast({
					        heading: 'Welcome to Shs Grading system',
					        text: 'Dashboard here you can see latest news and updates',
					        position: 'top-right',
					        loaderBg: '#ff6849',
					        icon: 'info',
					        hideAfter: 3000,
					        stack: 6
					    });
					} else {
						$('#usercheckInfo').modal('show');
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
	    cont = trap('fname','val_fname','Input First Name',cont);
	    cont = trap('mname','val_mname','Input Middle Name',cont);
	    cont = trap('lname','val_lname','Input Last Name',cont);
	    return cont;
	  } 


		function updateuserInfo(){
			var fname = $('#fname').val();
			var mname = $('#mname').val();
			var lname = $('#lname').val();
			if (trapAll() == 1) {
				$.ajax({
					type: "POST",
					url: "view/dashboard/class.php",
					data: "form=updateuserInfo"+'&fname=' +fname+'&mname=' +mname+'&lname=' +lname,
					success:function(data){
						$('#usercheckInfo').modal('hide');
						window.location.href = "index.php";
					}
				})
			}
		}

</script>