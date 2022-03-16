 <?php
		include '../../connection/connect.php';

	    $photo = explode('.', $_FILES['photo']['name']);
	    $photo = $photo[count($photo) - 1];
	    $filname = uniqid(rand());
	    $url = '../../assets/images/users/' .$filname. '.' . $photo;
	    $actualfilenamePhoto = $filname.'.'.$photo;
		$userID = $_POST['userid_input'];

		/* echo $photo;*/

		if ($photo == "") {
		 	?>
		<script type="text/javascript">
                      $.toast({
                          heading: 'Update Profile Failed',
                          text: 'Please Input image file',
                          position: 'top-right',
                          loaderBg: '#ff6849',
                          icon: 'warning',
                          hideAfter: 3000,
                          stack: 6
                      });
		</script>
		 	<?php
		 } else {
		    if(in_array($photo, array('gif', 'jpg', 'jpeg', 'png','GIF','JPG','JPEG','PNG'))) {
		        if(is_uploaded_file($_FILES['photo']['tmp_name'])) {
		            if(move_uploaded_file($_FILES['photo']['tmp_name'], $url)) {
						$sql = "UPDATE tbl_users SET user_avatar = '".$actualfilenamePhoto."' WHERE userID = '".$userID."'";
						$res = mysqli_query($connect, $sql) or die (mysqli_error($connect)); 
						$_SESSION['user_avatar'] = $actualfilenamePhoto;
				/*		echo $sql;*/
						?>
						<script type="text/javascript">
		                      $.toast({
		                          heading: 'Update Profile Success',
		                          text: 'Successfully update',
		                          position: 'top-right',
		                          loaderBg: '#ff6849',
		                          icon: 'success',
		                          hideAfter: 3000,
		                          stack: 6
		                      });
						</script>
						<?php
		            }
		        }
		    } else {
		    	?>
		    	<script type="text/javascript">
                      $.toast({
                          heading: 'Update Profile Failed',
                          text: 'Please Input image file JPG,gif,png,jpeg',
                          position: 'top-right',
                          loaderBg: '#ff6849',
                          icon: 'error',
                          hideAfter: 3000,
                          stack: 6
                      });
		    	</script>
		    	<?php
		    }
	 	} 


?>