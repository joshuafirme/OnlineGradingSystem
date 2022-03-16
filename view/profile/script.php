<script type="text/javascript">
	
	$(function(){
    loaduserRole();
		loadprofile();
		    noSpace();
		$('.uploadpic').hide();
	})

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


  function numbersvalidation(evt){ // only accept numerical
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
      }

   function noSpace(){
    $(".nospace").on({
      keydown: function(e) {
        if (e.which === 32)
          return false;
      },
      change: function() {
        this.value = this.value.replace(/\s/g, "");
      }
    });
  } 

  function trap(id,validation,text,cont){
      if( $('#'+id).val() == '' ){
        $('#'+validation).html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-info-circle"></i> '+text+'</font> </small>');
        $('#'+id).css('border','1px solid red');
        cont = 0;
      }else {
        $('#'+id).css('border','');
        $('#'+validation).html('');
      }
      return cont;
    }


  //TRRAPINGS MINIMUM LENGTH
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

  function trappCredential(){
    var cont = 1;
/*    cont = trap('current_password_edit','val_current_password_edit','Current Password is required',cont);*/
    cont = trap('current_password','val_current_password','Current Password is required',cont);  
    cont = trap('password','val_password','New Password is required',cont);  
    cont = trap('password_conf','val_password_conf','Confirm Password is required',cont);
    return cont;
  }


  function trappingLength(){
    var cont = 1;
/*      cont = MinLengthpassword('current_password_edit','minLength_current_edit','Password is Minimum of 8 characters',cont); */ 
      cont = MinLengthpassword('password','val_minlength','Password is Minimum of 8 characters',cont);  
      cont = MinLengthpassword('password_conf','minLength_confirm','Password is Minimum of 8 characters',cont);  
    return cont;
  }

  function passValidate(id,validation,text,cont){
          if( $('#'+id).val() !== $("#password_conf").val() ){
            $('#'+validation).html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-info-circle"></i> '+text+'</font> </small>');
            $('#'+id).css('border','1px solid red');
            $('#password_conf').css('border','1px solid red');
            cont = 0;
          }else {
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



	function loadprofile() {
		$.ajax({
			type:'POST',
			url:'view/profile/class.php',
			data:'form=loadprofile',
			success:function(data){
				var show = data.split("|");

/*				$('#fname').val(show[0]);
				$('#mname').val(show[1]);
				$('#lname').val(show[2]);
				$('#email').val(show[3]);
				$('#address').val(show[4]);
				$('#tel_no').val(show[5]);
				$('#fax_no').val(show[6]);
				$('#names').html(show[7]);
				$('#accounttype').html(show[8]);
				$('.userid_input').val(show[9]);
				$('#useravatar').html(show[11]);
				$('#tin_no').val(show[12]);
*/

        $('#fname').val(show[0]);
        $('#mname').val(show[1]);
        $('#lname').val(show[2]);
        $('#birthdate').val(show[3]);
        $('#contact').val(show[4]);
        $('#address').val(show[5]);
        $('#account_type').val(show[6]);
        $('#year_level').val(show[7]);
        $('#loaduserRole').val(show[8]);
        $('#email').val(show[9]);
        $('#accountno').val(show[10]);
        $('.userid_input').val(show[11]);
        $('#useravatar').html(show[12]);
			}
		})
	}

	function updateprofilepicture(type1,type2){
		$('.'+ type1).hide();
		$('.'+ type2).show();
	}


  $("#updateform").on('submit',(function(e) {
    e.preventDefault();
            $.ajax({
                url: 'view/profile/upload.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function(){

                },
                success: function(data) {
                /*	alert(data);*/

                	$('#loadprofileupdate').html(data);
                	loadprofile();
                	$('.uploadpic').hide();
                	$('.profilepic').show();
                },
                error: function(){
                }           
           });
    }));

   function saveInfo(){

        var fname = $('#fname').val();
        var mname = $('#mname').val();
        var lname = $('#lname').val();
        var birthdate = $('#birthdate').val();
        var contact = $('#contact').val();
        var address = $('#address').val();

	 $.ajax({
	 	type:'POST',
		url:'view/profile/class.php',
		data:'form=saveInfo'+'&fname='+fname+'&lname='+lname+'&mname='+mname+'&birthdate='+birthdate+'&contact='+contact+'&address='+address,
	 	success:function(data){
	 		if (data == 1) {
                $.toast({
                    heading: 'Update Success',
                    text: 'Successfully update',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 6
                });
	 		} else {
	 			alert(data);
	 		}
	 	}
	 })
   }

   function savePassword(){
	    if (trappCredential() == 1) {
		     if (trappingLength()== 1) {
	      		if (PassConfirm()== 1) {
					var current_password = $('#current_password').val();
					var password = $('#password').val();
					var password_conf = $('#password_conf').val();

					 $.ajax({
					 	type:'POST',
						url:'view/profile/class.php',
						data:'form=savePassword'+'&current_password='+current_password+'&password='+password,
					 	success:function(data){
	                    if (data == 1) {
	/*                        $('#current_password_edit').val('');*/
	                        $('#current_password').val('');
	                        $('#password').val('');
	                        $('#password_conf').val('');
	                        $.toast({
	                            heading: 'Update Success',
	                            text: 'Successfully update',
	                            position: 'top-right',
	                            loaderBg: '#ff6849',
	                            icon: 'success',
	                            hideAfter: 3000,
	                            stack: 6
	                        });
	                    } else if (data == 0) {
	                        $.toast({
	                            heading: 'Update Failed',
	                            text: 'Incorrect Current Password',
	                            position: 'top-right',
	                            loaderBg: '#ff6849',
	                            icon: 'error',
	                            hideAfter: 3000,
	                            stack: 6
	                        });
	                      }
					 	}
					 })
				}	 
			}
		}
   }


</script> 