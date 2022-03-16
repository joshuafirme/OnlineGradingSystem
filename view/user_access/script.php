<script type="text/javascript">
 	$(function(){
 		loaduserRole();
 		$('#loadingbtn').hide();
 		loaduserTeacher();
 		$('#loadusersTbl').dataTable();
 		$('#yearlevel').hide();
 		loadgradelevel();
 	})

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

	function addNewUser() {
		$('#addnewUser').modal('show');
	}

	function acctype(){
		if ($('#account_type').val() == 'Student') {
			$('#yearlevel').show();
		} else {
			$('#yearlevel').hide();
		}
	}

	function updateUsers(userID){

		$.ajax({
			type: 'POST',
			url: 'view/user_access/class.php',
			data: 'form=userInfo'+ '&userID='+ userID,
			success:function(data){
				var show = data.split("|");
				$('#userID').val(userID);

				$('#fname_edit').val(show[0]);
				$('#mname_edit').val(show[1]);
				$('#lname_edit').val(show[2]);
				$('#birthdate_edit').val(show[3]);
				$('#contact_edit').val(show[4]);
				$('#address_edit').val(show[5]);
 	 			$('#loaduserRole_edit').val(show[6]);
	 			$('#email_edit').val(show[7]);

				$('#updateUser').modal('show');
			}
		})
	}

	function loaduserTeacher(){
		$.ajax({
			type: 'POST',
			url: 'view/user_access/class.php',
			data: 'form=loaduserTeacher',
			async: false,
			success:function(data){
				$('#loaduserTeacherTBL').html(data);
			}
		})
	}

    function emailValidate(id,validation,text,cont){
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if($('#'+id).val().match(mailformat)){
              $('#'+id).css('border','');
              $('#'+validation).html('');
             return cont;
          }else {
        $('#'+validation).html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-info-circle"></i> '+text+'.</font> </small>');
            $('#'+id).css('border','1px solid red');
            }
          cont = 0; 
        }
        
    function ValidateEmail(){
      var cont = 1;
      cont = emailValidate('email','val_email','Invalid Email Address',cont);
      return cont;
    }     

    function ValidateEmailupdate(){
      var cont = 1;
      cont = emailValidate('email_edit','val_email_edit','Invalid Email Address',cont);
      return cont;
    }         

   function MinLengthpassword(id,validation,text,cont){
        if( $('#'+id).val().length < '8' ){
          $('#'+validation).html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-info-circle"></i> '+text+'</font> </small>');
          $('#'+id).css('border','1px solid red');
          cont = 0;
        }else {
            $('#'+id).css('border','');
            $('#'+validation).html('');
          }
          return cont;
      }  


  function trappingLength(){
    var cont = 1;
      cont = MinLengthpassword('password','val_password','Password is Minimum of 8 characters',cont);  
      cont = MinLengthpassword('password_conf','val_password_conf','Password is Minimum of 8 characters',cont);  
    return cont;
  }

  function passValidate(id,validation,text,cont){
          if( $('#'+id).val() !== $("#password_conf").val() ){
            $('#'+validation).html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-info-circle"></i> '+text+'</font> </small>');
            $('#'+id).css('border','1px solid red');
            $('#password_conf').css('border','1px solid red');
            cont = 0;
          } else {
              $('#password_conf').css('border','');
              $('#'+id).css('border','');
              $('#'+validation).html('');
            }
            return cont;
        }
        
    function PassConfirm(){
      var cont = 1;
      cont = passValidate('password','passwordoesnotmatch','The Two Password Does not match',cont);
      return cont;
    }

	function savenewUser(){
		if (trapAll() == 1) {
			if (ValidateEmail() == 1) {

				var fname = $('#fname').val();
				var mname = $('#mname').val();
				var lname = $('#lname').val();
				var birthdate = $('#birthdate').val();
				var contact = $('#contact').val();
				var address = $('#address').val();
			 	 var email = $('#email').val();
			 	 var password = $('#password').val();
			 	 var user_role = $('#loaduserRole').val();

			 	 $.ajax({
			 	 	type:'POST',
					url: 'view/user_access/class.php',
			 	 	data:'form=savenewUser'+'&fname='+fname+'&lname='+lname+'&mname='+mname+'&birthdate='+birthdate+'&contact='+contact+'&address='+address+'&email='+email+'&password='+password+'&user_role='+user_role,
                      beforeSend:function(){
                          $('#defaultbtn').hide();
                          $('#loadingbtn').show();

                      },
			 	 	success:function(data){
                          $('#loadingbtn').hide();
                          $('#defaultbtn').show();
			 	 		if (data == 1) {
							$('#fname').val('');
							$('#mname').val('');
							$('#lname').val('');
							$('#birthdate').val('');
							$('#contact').val('');
							$('#address').val('');

			 	 			$('#email').val('');
			 	 			$('#password').val('');
			 	 			$('#loaduserRole').val('');
							$('#addnewUser').modal('hide');
					 		Swal.fire(
							  'Success!',
							  'Successfully Added New User',
							  'success'
							)
							loaduserTeacher();
			 	 		} else if(data == 0) {
								alreadyAlert(email);
			 	 		} else if(data == 2) {
			 	 				var fullname = [fname+' '+mname+' '+lname];

								alreadyAlert(fullname);
			 	 		}
			 	 	}
			 	 })
			}
		}
	}


  function deleteUsers(id){
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
          url:  'view/user_access/class.php',
          data: 'form=deleteUser'+'&id='+id,
          success:function(data){
          	 		loaduserTeacher();
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

  function restoreUser(id){
/*  	var userid = $('#userid_edit').val();*/
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Restore it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url:  'view/user_access/class.php',
          data: 'form=restoreUser'+'&id='+id,
          success:function(data){
              Swal.fire(
                'Restored!',
                'User has been restore.',
                'success'
              )

          }
        })
      }
    })
  }



	function SaveUpdateUser(){
		if (trapAllupdate() == 1) {
			if (ValidateEmailupdate() == 1) {

				var userID = $('#userID').val();
				var fname = $('#fname_edit').val();
				var mname = $('#mname_edit').val();
				var lname = $('#lname_edit').val();
				var birthdate = $('#birthdate_edit').val();
				var contact = $('#contact_edit').val();
				var address = $('#address_edit').val();
			 	 var email = $('#email_edit').val();
/*			 	 var password = $('#password_edit').val();*/
			 	 var user_role = $('#loaduserRole_edit').val();

			 	 $.ajax({
			 	 	type:'POST',
					url: 'view/user_access/class.php',
			 	 	data:'form=SaveUpdateUser'+'&fname='+fname+'&lname='+lname+'&mname='+mname+'&birthdate='+birthdate+'&contact='+contact+'&address='+address+'&email='+email+'&password='+password+'&userrole='+user_role + '&userID=' + userID,
                      beforeSend:function(){
                          $('#defaultbtn').hide();
                          $('#loadingbtn').show();

                      },
			 	 	success:function(data){
	/*		 	 		alert(data);*/
                          $('#loadingbtn').hide();
                          $('#defaultbtn').show();
			 	 		if (data == 1) {
							$('#fname_edit').val('');
							$('#mname_edit').val('');
							$('#lname_edit').val('');
							$('#birthdate_edit').val('');
							$('#contact_edit').val('');
							$('#address_edit').val('');
							$('#year_level_edit').val('');
							$('#accountno_edit').val('');
				 			$('#account_type_edit').val('');
			 	 			$('#email_edit').val('');
			 	 			$('#password_edit').val('');
			 	 			$('#loaduserRole_edit').val('');
							$('#updateUser').modal('hide');
							loaduserTeacher();
					 		Swal.fire(
							  'Success!',
							  'Successfully Update User',
							  'success'
							)
			 	 		}
			 	 	}
			 	 })
			}
		}
	}

	function loaduserRole(){
		$.ajax({
			type: 'POST',
			url: 'view/user_access/class.php',
			data: 'form=loaduserRole',
			success:function(data){
				$('.loaduserRole').html(data);
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
	    cont = trap('birthdate','val_birthdate','Input Birthday',cont);
	    cont = trap('contact','val_contact','Input Contact',cont);
	    cont = trap('address','val_address','Input Adress',cont);

	    cont = trap('email','val_email','Input Email Address',cont);
	    cont = trap('password','val_password','Input Password',cont);
	    cont = trap('loaduserRole','val_user_role','Input User Role',cont);

	    return cont;
	  } 

	  function trapAllupdate(){
	    var cont = 1;
	    cont = trap('fname_edit','val_fname_edit','Input First Name',cont);
	    cont = trap('mname_edit','val_mname_edit','Input Middle Name',cont);
	    cont = trap('lname_edit','val_lname_edit','Input Last Name',cont);
	    cont = trap('birthdate_edit','val_birthdate_edit','Input Birthday',cont);
	    cont = trap('contact_edit','val_contact_edit','Input Contact',cont);
	    cont = trap('address_edit','val_address_edit','Input Adress',cont);

	    cont = trap('email_edit','val_email_edit','Input Email Address',cont);

	    return cont;
	  } 

</script>