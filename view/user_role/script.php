<script type="text/javascript">

 	$(function(){
 		loaduserRoleTbl();
 		$('#userRoleTbl').dataTable();
 	})


	function addNewRole() {
		$('#addNewRole').modal('show');
	}


	function savenewRole(){
		var rolename = $('#rolename').val();

		if ( rolename == '') {
	        $('#rolename_val').html('<small class="form-control-feedback"> <font color="red"><i class="fas fa-exclamation-circle"></i> Please Input Role Name</font> </small>');
	        $('#rolename').css('border','1px solid red');
		} else {
	        $('#rolename_val').html('');
	        $('#rolename').css('border','');
			$.ajax({
				type: 'POST',
				url: 'view/user_role/class.php',
				data: 'form=saveNewRole'+'&rolename=' +rolename,
				success:function(data){
                    if (data == 1) {
                        $('#addNewRole').modal('hide');
                        $('#rolename').val('');
                        addAlert(rolename);
                        loaduserRoleTbl()
                    } else {
                        alert(data);
                    }
				}
			})
		}
	}


	function loaduserRoleTbl(){
		$.ajax({
			type: 'POST',
			url: 'view/user_role/class.php',
			data: 'form=loaduserRole',
			async: false,
			success:function(data){
				$('#loaduserRole').html(data);
			}
		})
	}

	function updateRole(roleid){
		$.ajax({
			type: 'POST',
			url: 'view/user_role/class.php',
			data: 'form=loadroleInfo'+'&roleid='+roleid,
			success:function(data){
				var show = data.split('|');
				$('#roleid').val(show[1]);
				$('#rolename_update').val(show[2]);
				$('#updateRole').modal('show');

			}
		})
	}

    function saveUpdateRole(){
    	var roleid = $('#roleid').val();
    	var rolename  = $('#rolename_update').val();
		$.ajax({
			type: 'POST',
			url: 'view/user_role/class.php',
			data: 'form=saveUpdateRole'+'&roleid='+roleid+'&rolename='+rolename,
			success:function(data){
				$('#updateRole').modal('hide');
				loaduserRoleTbl();
 				updateAlert(rolename);
			}
		})
    }	


function loadAccessPermission(accessgroupid){
    $.ajax({
        type:'POST',
        url:'view/user_role/userpermission.php',
        data:'form=loadAccessPermission&accessgroupid='+accessgroupid,
        success:function(data){
            $('#viewuseraccessibilityhtml').html(data)
            $('#userAccess').modal('show');
            $('#displaygroupid').html(accessgroupid);
            $('#getgroupid').val(accessgroupid);  
        }
    })
}


function saveUserAccessPermission() {
    var getgroupid = $('#getgroupid').val();
    var viewdashboard = "";
    var dashboard_announcement = "";
    var dashboard_add_announcement = "";
    var dashboard_update_announcement ="";


    if ( $('#viewdashboard').is(":checked") ==  true ) {
        viewdashboard = "1";
    } else {
        viewdashboard = "0";
    }
    if ( $('#dashboard_add_announcement').is(':checked') == true ) {
        dashboard_add_announcement = "1";
    } else {
        dashboard_add_announcement = "0";
    }
    if ( $('#dashboard_update_announcement').is(':checked') == true ) {
        dashboard_update_announcement = "1";
    } else {
        dashboard_update_announcement = "0";
    }
  

    $.ajax({
        type: 'POST',
        url: 'view/user_role/class.php', 
        data: 'form=saveUserAccessPermission&getgroupid=' + getgroupid + '&viewdashboard=' + viewdashboard +  '&dashboard_announcement=' + dashboard_announcement +  '&dashboard_add_announcement=' + dashboard_add_announcement + '&dashboard_update_announcement=' + dashboard_update_announcement,
        success:function(data){ 
/*        alert(data);*/
		$('#userAccess').modal('hide');
		updateAlert(getgroupid);
        }
    });

} 


</script>