<script type="text/javascript">
	$((function(){
		noSpace();
		enterkeylogin();
	}))

	function enterkeylogin(){
		var accountno = document.getElementById('accountno');
		var password = document.getElementById('password');
		
		accountno.addEventListener('keyup', function(event) {
			  if (event.keyCode === 13) {
			    event.preventDefault();
			    document.getElementById('loginEnter').click();
			  }
		})

		password.addEventListener('keyup', function(event) {
			 if (event.keyCode === 13) {
			    event.preventDefault();
			    document.getElementById('loginEnter').click();
			  }
		})
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



	function passValidate(id,validation,text,cont){
	        if( $('.'+id).val() !== $(".passwordConf").val() ){
	      	  $('.'+validation).html('<small>'+ text +'</font>');
	          $('.'+id).css('border','1px solid red');
	          $('.passwordConf').css('border','1px solid red');
	          cont = 0;
	        }else {
		          $('.'+id).css('border','');
	              $('.passwordConf').css('border','');
		          $('#'+validation).html('');
		        }
		        return cont;
		    }
		    
	  function PassConfirm(){
	    var cont = 1;
	    cont = passValidate('password','PasswordConfirm','The two password is not match',cont);
	    return cont;
	  }	    


   function MinLength(id,validation,text,cont){
        if( $('.'+id).val().length < '8' ){
          $('.'+validation).html('<small>Please Input '+ text +'</font>');
          $('.'+id).css('border','1px solid red');
          cont = 0;
        }else {
	          $('#'+id).css('border','');
	          $('#'+validation).html('');
	        }
	        return cont;
	    }
		    
  function textLength(){
    var cont = 1;
	cont = MinLength('accountno','MinLengthaccountno','Minimum of 8 characters',cont);
	cont = MinLength('password','MinLengthpassword','Minimum of 8 characters',cont); 
	cont = MinLength('passwordConf','MinLengthpasswordConf','Minimum of 8 characters',cont);  	   
    return cont;
  }

function trap(id,val,text,cont){
	if ( $('.'+id).val() == "") {
		$('.'+id).css('border','1px solid red');
		$('.'+val).html('<small>Please Input '+ text +'</font>');
		cont = 0;
	} else {
		$('.'+id).css('border','');
		$('.'+val).html('');
	}
  return cont;
}
	
function trapall(){
	var cont = 1;
	cont = trap('accountno','val_accountno','accountno',cont);
	cont = trap('password','val_password','Password',cont);
	cont = trap('passwordConf','val_passwordConf','Confrim Password', cont);
	return cont;
}


function LogLength(id,validation,text,cont){
    if( $('#'+id).val().length < '8' ){
      $('#'+validation).html('<small>'+text+'</small>');
      $('#'+id).css('border','1px solid red');
      cont = 0;
    }else {
          $('#'+id).css('border','');
          $('#'+validation).html('');
        }
        return cont;
    }  
function LoginLength(){
var cont = 1;
cont = LogLength('accountno','MinLengthaccountno','Minimum of 8 characters',cont);
cont = LogLength('password','MinLengthpassword','Minimum of 8 characters',cont);	   
return cont;
}

function Logintrap(id,val,text,cont){
	if ( $('#'+id).val() == "") {
		$('#'+id).css('border','1px solid red');
		$('.'+val).html('<small>Please Input '+ text +'</font>');
		cont = 0;
	} else {
		$('#'+id).css('border','');
		$('.'+val).html('');
	}
  return cont;
}

function LoginTrapping(){
	var cont = 1;
	cont = Logintrap('accountno','login_accountno','email',cont);
	cont = Logintrap('password','login_password','Password',cont);
	return cont;
}

function LogInChck(){
	if (LoginTrapping() == 1) {
		if (LoginLength() == 1) {
			
			var accountno = $('#accountno').val();
			var password = $('#password').val();

			$.ajax({
				type: 'POST',
				url: 'view/login/class.php',
				data: 'form=LogInChck&accountno='+accountno+'&password='+password,
				success:function(data){
					/*alert(data);*/
					if (data == 1) {
						$('#loginResult').html(data);
					} else {
						$('#loginResult').html(data);
					}

				}
			})
		}
	}
}
</script>