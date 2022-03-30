<?php 

 		include '../../connection/connect.php';

 		switch ($_POST['form']) {
 			case 'loadsubject':
 					$sql = "SELECT * FROM subject WHERE SUBJ_ID = '".$_POST['id']."'";
 					$res = mysqli_query($connect, $sql);
 					$row = mysqli_fetch_array($res);
 	
 					echo $row['SUBJ_CODE']."|".$row['SUBJ_DESCRIPTION']."|".$row['AY'];;
 			break;

 			case 'loadstudent':
					$post_id = $_POST['id2'];
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$post_id = $_POST['id3'];
					}
 					$sql2 = "SELECT * FROM `tbl_highestpossible_score` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$post_id."'";
 					$res2 = mysqli_query($connect,$sql2);
 					$row_possible_score = mysqli_fetch_array($res2);

 					$totalpossiblescore =  $row_possible_score['written_works_1'] + $row_possible_score['written_works_2'] + $row_possible_score['written_works_3']+ $row_possible_score['written_works_4'] + $row_possible_score['written_works_5'] + $row_possible_score['written_works_6']+ $row_possible_score['written_works_7']+ $row_possible_score['written_works_8']+ $row_possible_score['written_works_9']+ $row_possible_score['written_works_10'];

					?>
                 <table id="tbl_studload_qt1" class="display nowrap table table-striped table-bordered tblfgrade" cellspacing="0" width="100%">
                    <thead class="text-white">
<!--                     	    <tr class="bg-success">
                    	    	<th style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="2">FIRST QUARTER</th>
                    	    	<th style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="11">GRADE & SECTION: </th>
                    	    	<th style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="12">TEACHER: </th>
                    	    	<th style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="8">SUBJECT: </th>
                    	    </tr> -->
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="2">FIRST QUARTER</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">WRITTEN WORKS (30%)</th>
                                <th class="bg-warning"style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">PERFORMANCE TASK (50%)</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="3">QUARTERLY ASSESSMENT (20%)</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">INITIAL</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">QUARTERLY</th>
                             <!--    <th></th> -->
                            </tr>
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2"></th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;  width: 10%;" >GRADE</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;" >GRADE</th>
                              <!--   <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th> -->
                            </tr>
	 						<tr>
	 							<!-- WRITTEN WORKS (30%)	 -->
	 							<th  class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2">Highest Possible Score
	 								<input type="hidden" class="form-control table-input" value="<?php echo $row_possible_score['id']; ?>" id="idpossiblescore" style="width: 70px;" >
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_1']; ?>" id="written_works_1" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_2']; ?>" id="written_works_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_3']; ?>" id="written_works_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_4']; ?>" id="written_works_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_5']; ?>" id="written_works_5"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_6']; ?>" id="written_works_6" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_7']; ?>" id="written_works_7"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_8']; ?>" id="written_works_8"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_9']; ?>" id="written_works_9"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_10']; ?>" id="written_works_10"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')"> 
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $totalpossiblescore; ?>" id="written_works_total"  style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">30%</th>
								<!-- PERFORMANCE TASK (50%) -->	
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_1']; ?>" id="performance_task_1"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_2']; ?>" id="performance_task_2"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_3']; ?>" id="performance_task_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_4']; ?>" id="performance_task_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_5']; ?>" id="performance_task_5" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_6']; ?>" id="performance_task_6" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_7']; ?>" id="performance_task_7" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_8']; ?>" id="performance_task_8" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_9']; ?>" id="performance_task_9" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_10']; ?>" id="performance_task_10" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $row_possible_score['performance_task_total']; ?>" id="performance_task_total" style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">50%</th>
								<!-- QUARTERLY ASSESSMENT (20% -->
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;"><input type="text" class="form-control table-input" value="<?php echo $row_possible_score['quarterly_task_1']; ?>" id="quarterly_task_1" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','','tbl_possible')"></th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">20%</th>
	 							<th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						    <th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						   <!--  <th><button class="btn btn-info" onclick="updateGrade('loadfgrade');"><i class="fas fa-edit"></i> Update</button></th> -->
	 						</tr>
                        </thead>                                                                       
                        <tbody>
 						<?php
					$resubmit_status = '';
					$field_id = 'INSTRUCTOR_ID';
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$resubmit_status = ' AND status = 0';
						$field_id = 'USERID';
					}
 					$sql = "SELECT * FROM tbl_studload_qt1 WHERE SUBJ_ID = '".$_POST['id']."' AND $field_id = '".$_POST['id2']."' $resubmit_status";
 					$res = mysqli_query($connect,$sql);
					while ($row = mysqli_fetch_array($res)) {

						$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						?>
						<tr>
							<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
								<input type="hidden" value="tbl_studload_qt1" id="tbl_grades" readonly>
								<input type="hidden" value="tbl_highestpossible_score" id="tbl_possible" readonly>
							</td>
							<td >
								<?php 
									echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
								?>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input1_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input2_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input3_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input4_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input5_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input6_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input7_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input8_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input9_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input10_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control written_input_total<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control  written_input_final_avg_<?php echo $row['ST_SUBJID']?>" value="<?php echo $row['written_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- PERFORMANCE TASK -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input1_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input2_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input3_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input4_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input5_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input6_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input7_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input8_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input9_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input10_<?php echo $row['ST_SUBJID'];?>" value="<?php echo $row['performance_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_input_total<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['performance_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_final_avg_<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['performance_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- QUARTERLY ASSESSMENT (20%)	 -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input quarterly_input_<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['quarterly_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','','tbl_grades')">
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quarterly_final_avg_<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['quarterly_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>

							<td style="width: 10%;">
								<input type="text" max="3" class="form-control initial_grade_<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['initial_grade']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quaterly_grade_<?php echo $row['ST_SUBJID']; ?>" value="<?php echo $row['quaterly_final']; ?>"  style="width: 70px;" readonly>
							</td>
				<!-- 			<td>
								<button class="btn btn-success" onclick="saveGrade('<?php echo $row['ST_SUBJID']; ?>');"><i class="fas fa-check"></i> Save</button>
							</td> -->
						</tr>
						<?php
							}
						?>
						</tbody>
                     </table>
						<?php

 				break;

 			case 'saveGrade':

 				$tablename = $_POST['tablename'];
				$written_grade_1 = $_POST['written_grade_1'];
				$written_grade_2 = $_POST['written_grade_2'];
				$written_grade_3 = $_POST['written_grade_3'];  
				$written_grade_4 = $_POST['written_grade_4'];  
				$written_grade_5 = $_POST['written_grade_5']; 
				$written_grade_6 = $_POST['written_grade_6']; 
				$written_grade_7 = $_POST['written_grade_7'];  
				$written_grade_8 = $_POST['written_grade_8'];    
				$written_grade_9 = $_POST['written_grade_9']; 
				$written_grade_10 = $_POST['written_grade_10']; 
				$written_grade_total = $_POST['written_grade_total']; 
				$written_grade_ws = $_POST['written_grade_ws'];  
				$performance_grade_1 = $_POST['performance_task_1']; 
				$performance_grade_2 = $_POST['performance_task_2']; 
				$performance_grade_3 = $_POST['performance_task_3'];  
				$performance_grade_4 = $_POST['performance_task_4']; 
				$performance_grade_5 = $_POST['performance_task_5'];
				$performance_grade_6 = $_POST['performance_task_6']; 
				$performance_grade_7 = $_POST['performance_task_7']; 
				$performance_grade_8 = $_POST['performance_task_8']; 
				$performance_grade_9 = $_POST['performance_task_9']; 
				$performance_grade_10 = $_POST['performance_task_10']; 
				$performance_grade_total = $_POST['performance_grade_total']; 
				$performance_grade_ws = $_POST['performance_grade_ws'];  
				$quarterly_grade_1 = $_POST['quarterly_grade_1']; 
				$quarterly_grade_ws = $_POST['quarterly_grade_ws'];  
				$initial_grade = $_POST['initial_grade']; 
				$quaterly_final = $_POST['quaterly_final'];

				$sql = "UPDATE ".$tablename." SET written_grade_1 = '".$written_grade_1."',written_grade_2 = '".$written_grade_2."',written_grade_3 = '".$written_grade_3."',written_grade_4 = '".$written_grade_4."',written_grade_5 = '".$written_grade_5."',written_grade_6 = '".$written_grade_6."',written_grade_7 = '".$written_grade_7."',written_grade_8 = '".$written_grade_8."',written_grade_9 = '".$written_grade_9."',written_grade_10 = '".$written_grade_10."',written_grade_total = '".$written_grade_total."',written_grade_ws = '".$written_grade_ws."',performance_grade_1 = '".$performance_grade_1."',performance_grade_2 = '".$performance_grade_2."',performance_grade_3 = '".$performance_grade_3."',performance_grade_4 = '".$performance_grade_4."',performance_grade_5 = '".$performance_grade_5."',performance_grade_6 = '".$performance_grade_6."',performance_grade_7 = '".$performance_grade_7."',performance_grade_8 = '".$performance_grade_8."',performance_grade_9 = '".$performance_grade_9."',performance_grade_10 = '".$performance_grade_10."',performance_grade_total = '".$performance_grade_total."',performance_grade_ws = '".$performance_grade_ws."',quarterly_grade_1 = '".$quarterly_grade_1."',quarterly_grade_ws = '".$quarterly_grade_ws."',initial_grade = '".$initial_grade."',quaterly_final = '".$quaterly_final."'  WHERE ST_SUBJID = '".$_POST['id']."'";
				$res = mysqli_query($connect,$sql);

				echo $res;
 					
 			break;	

 			case 'updatehighestpossible_score':
/*					$avg = $_POST['quiz'] + $_POST['performance'] + $_POST['homework'] + $_POST['exam'];
					$total = $avg / 4;*/
					$tablename = $_POST['tablename'];
			      	$written_works_1 = $_POST['written_works_1'];   
			      	$written_works_2 = $_POST['written_works_2'];   
			      	$written_works_3 = $_POST['written_works_3'];   
			      	$written_works_4 = $_POST['written_works_4'];   
			      	$written_works_5 = $_POST['written_works_5'];   
			      	$written_works_6 = $_POST['written_works_6'];
			      	$written_works_7 = $_POST['written_works_7'];   
			      	$written_works_8 = $_POST['written_works_8'];   
			      	$written_works_9 = $_POST['written_works_9'];
			      	$written_works_10 = $_POST['written_works_10'];
			      	$written_works_total = $_POST['written_works_total'];

			      	$performance_task_1 = $_POST['performance_task_1'];   
			      	$performance_task_2 = $_POST['performance_task_2'];   
			      	$performance_task_3 = $_POST['performance_task_3'];   
			      	$performance_task_4 = $_POST['performance_task_4'];   
			      	$performance_task_5 = $_POST['performance_task_5'];   
			      	$performance_task_6 = $_POST['performance_task_6'];
			      	$performance_task_7 = $_POST['performance_task_7'];   
			      	$performance_task_8 = $_POST['performance_task_8'];   
			      	$performance_task_9 = $_POST['performance_task_9'];
			      	$performance_task_10 = $_POST['performance_task_10'];
			      	$performance_task_total = $_POST['performance_task_total'];
			      	$quarterly_task_1 = $_POST['quarterly_task_1'];


 					$sql = "UPDATE ".$tablename." SET written_works_1 = '".$written_works_1."', written_works_2 = '".$written_works_2."', written_works_3 = '".$written_works_3."',written_works_4 = '".$written_works_4."', written_works_5 = '".$written_works_5."', written_works_6 = '".$written_works_6."', written_works_7 = '".$written_works_7."', written_works_8 = '".$written_works_8."', written_works_9 = '".$written_works_9."', written_works_10 = '".$written_works_10."', written_works_total = '".$written_works_total."',performance_task_1 = '".$performance_task_1."', performance_task_2 = '".$performance_task_2."', performance_task_3 = '".$performance_task_3."',performance_task_4 = '".$performance_task_4."', performance_task_5 = '".$performance_task_5."', performance_task_6 = '".$performance_task_6."', performance_task_7 = '".$performance_task_7."', performance_task_8 = '".$performance_task_8."', performance_task_9 = '".$performance_task_9."', performance_task_10 = '".$performance_task_10."', performance_task_total = '".$performance_task_total."', quarterly_task_1 = '".$quarterly_task_1."' WHERE id = '".$_POST['id']."'";
 					$res = mysqli_query($connect, $sql);
 					echo $res;
 			break;

 			case 'loadstudent2':
				
				$post_id = $_POST['id2'];
				if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
					$post_id = $_POST['id3'];
				}
				 $sql2 = "SELECT * FROM `tbl_highestpossible_score_2` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$post_id."'";
 					$res2 = mysqli_query($connect,$sql2);
 					$row_possible_score = mysqli_fetch_array($res2);

 					$totalpossiblescore =  $row_possible_score['written_works_1'] + $row_possible_score['written_works_2'] + $row_possible_score['written_works_3']+ $row_possible_score['written_works_4'] + $row_possible_score['written_works_5'] + $row_possible_score['written_works_6']+ $row_possible_score['written_works_7']+ $row_possible_score['written_works_8']+ $row_possible_score['written_works_9']+ $row_possible_score['written_works_10'];

					?>
                 <table id="tbl_studload_qt2" class="display nowrap table table-striped table-bordered tblfgrade" cellspacing="0" width="100%">
                    <thead class="text-white">
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="2">SECOND QUARTER</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">WRITTEN WORKS (30%)</th>
                                <th class="bg-warning"style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">PERFORMANCE TASK (50%)</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="3">QUARTERLY ASSESSMENT (20%)</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">INITIAL</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">QUARTERLY</th>
                             <!--    <th></th> -->
                            </tr>
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2"></th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;  width: 10%;" >GRADE</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;" >GRADE</th>
                              <!--   <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th> -->
                            </tr>
	 						<tr>
	 							<!-- WRITTEN WORKS (30%)	 -->
	 							<th  class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2">Highest Possible Score
	 								<input type="hidden" class="form-control table-input" value="<?php echo $row_possible_score['id']; ?>" id="idpossiblescore_2" style="width: 70px;" >
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_1']; ?>" id="written_works_1_2" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_2']; ?>" id="written_works_2_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_3']; ?>" id="written_works_3_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_4']; ?>" id="written_works_4_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_5']; ?>" id="written_works_5_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_6']; ?>" id="written_works_6_2" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_7']; ?>" id="written_works_7_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_8']; ?>" id="written_works_8_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_9']; ?>" id="written_works_9_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_10']; ?>" id="written_works_10_2"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')"> 
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $totalpossiblescore; ?>" id="written_works_total_2"  style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">30%</th>
								<!-- PERFORMANCE TASK (50%) -->	
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_1']; ?>" id="performance_task_1_2"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_2']; ?>" id="performance_task_2_2"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_3']; ?>" id="performance_task_3_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_4']; ?>" id="performance_task_4_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_5']; ?>" id="performance_task_5_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_6']; ?>" id="performance_task_6_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_7']; ?>" id="performance_task_7_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_8']; ?>" id="performance_task_8_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_9']; ?>" id="performance_task_9_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_10']; ?>" id="performance_task_10_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $row_possible_score['performance_task_total']; ?>" id="performance_task_total_2" style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">50%</th>
								<!-- QUARTERLY ASSESSMENT (20% -->
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;"><input type="text" class="form-control table-input" value="<?php echo $row_possible_score['quarterly_task_1']; ?>" id="quarterly_task_1_2" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_2','tbl_possible2')"></th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">20%</th>
	 							<th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						    <th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						   <!--  <th><button class="btn btn-info" onclick="updateGrade('loadfgrade');"><i class="fas fa-edit"></i> Update</button></th> -->
	 						</tr>
                        </thead>                                                                       
                        <tbody>
 						<?php


					$resubmit_status = '';
					$field_id = 'INSTRUCTOR_ID';
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$resubmit_status = ' AND status = 0';
						$field_id = 'USERID';
					}
					$sql = "SELECT * FROM tbl_studload_qt2 WHERE SUBJ_ID = '".$_POST['id']."' AND $field_id = '".$_POST['id2']."' $resubmit_status";
 					$res = mysqli_query($connect,$sql);
					while ($row = mysqli_fetch_array($res)) {

						$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						?>
						<tr>
							<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
								<input type="hidden" value="tbl_highestpossible_score_2" id="tbl_possible2" readonly>
								<input type="hidden" value="tbl_studload_qt2" id="tbl_grades2" readonly>
							</td>
							<td >
								<?php 
									echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
								?>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input1_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input2_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input3_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input4_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input5_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input6_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input7_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input8_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input9_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input10_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control written_input_total<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control  written_input_final_avg_<?php echo $row['ST_SUBJID']?>_2" value="<?php echo $row['written_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- PERFORMANCE TASK -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input1_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input2_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input3_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input4_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input5_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input6_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input7_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input8_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input9_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input10_<?php echo $row['ST_SUBJID'];?>_2" value="<?php echo $row['performance_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_input_total<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['performance_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_final_avg_<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['performance_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- QUARTERLY ASSESSMENT (20%)	 -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input quarterly_input_<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['quarterly_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_2','tbl_grades2')">
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quarterly_final_avg_<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['quarterly_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>

							<td style="width: 10%;">
								<input type="text" max="3" class="form-control initial_grade_<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['initial_grade']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quaterly_grade_<?php echo $row['ST_SUBJID']; ?>_2" value="<?php echo $row['quaterly_final']; ?>"  style="width: 70px;" readonly>
							</td>
				<!-- 			<td>
								<button class="btn btn-success" onclick="saveGrade('<?php echo $row['ST_SUBJID']; ?>');"><i class="fas fa-check"></i> Save</button>
							</td> -->
						</tr>
						<?php
							}
						?>
						</tbody>
                     </table>
						<?php

 				break;

	 			case 'loadsecondgrade':
						$avg = $_POST['quiz'] + $_POST['performance'] + $_POST['homework'] + $_POST['exam'];
						$total = $avg / 4;

	 					$sql = "UPDATE tbl_studload SET squiz = '".$_POST['quiz']."', sperformance = '".$_POST['performance']."', shomework = '".$_POST['homework']."',sexam = '".$_POST['exam']."', 2G = '".$total."' WHERE ST_SUBJID = '".$_POST['id']."'";
	 					$res = mysqli_query($connect, $sql);
	 					echo $res;
	 			break;

 			case 'loadstudent3':
				$post_id = $_POST['id2'];
				if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
					$post_id = $_POST['id3'];
				}
				 $sql2 = "SELECT * FROM `tbl_highestpossible_score_3` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$post_id."'";
 					$res2 = mysqli_query($connect,$sql2);
 					$row_possible_score = mysqli_fetch_array($res2);

 					$totalpossiblescore =  $row_possible_score['written_works_1'] + $row_possible_score['written_works_2'] + $row_possible_score['written_works_3']+ $row_possible_score['written_works_4'] + $row_possible_score['written_works_5'] + $row_possible_score['written_works_6']+ $row_possible_score['written_works_7']+ $row_possible_score['written_works_8']+ $row_possible_score['written_works_9']+ $row_possible_score['written_works_10'];

					?>
                 <table id="tbl_studload_qt3" class="display nowrap table table-striped table-bordered tblfgrade" cellspacing="0" width="100%">
                    <thead class="text-white">
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="2">THIRD QUARTER</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">WRITTEN WORKS (30%)</th>
                                <th class="bg-warning"style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">PERFORMANCE TASK (50%)</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="3">QUARTERLY ASSESSMENT (20%)</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">INITIAL</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">QUARTERLY</th>
                             <!--    <th></th> -->
                            </tr>
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2"></th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;  width: 10%;" >GRADE</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;" >GRADE</th>
                              <!--   <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th> -->
                            </tr>
	 						<tr>
	 							<!-- WRITTEN WORKS (30%)	 -->
	 							<th  class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2">Highest Possible Score
	 								<input type="hidden" class="form-control table-input" value="<?php echo $row_possible_score['id']; ?>" id="idpossiblescore_3" style="width: 70px;" >
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_1']; ?>" id="written_works_1_3" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_2']; ?>" id="written_works_2_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_3']; ?>" id="written_works_3_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_4']; ?>" id="written_works_4_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_5']; ?>" id="written_works_5_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_6']; ?>" id="written_works_6_3" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_7']; ?>" id="written_works_7_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_8']; ?>" id="written_works_8_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_9']; ?>" id="written_works_9_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_10']; ?>" id="written_works_10_3"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')"> 
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $totalpossiblescore; ?>" id="written_works_total_3"  style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">30%</th>
								<!-- PERFORMANCE TASK (50%) -->	
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_1']; ?>" id="performance_task_1_3"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_2']; ?>" id="performance_task_2_3"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_3']; ?>" id="performance_task_3_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_4']; ?>" id="performance_task_4_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_5']; ?>" id="performance_task_5_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_6']; ?>" id="performance_task_6_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_7']; ?>" id="performance_task_7_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_8']; ?>" id="performance_task_8_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_9']; ?>" id="performance_task_9_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_10']; ?>" id="performance_task_10_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $row_possible_score['performance_task_total']; ?>" id="performance_task_total_3" style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">50%</th>
								<!-- QUARTERLY ASSESSMENT (20% -->
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;"><input type="text" class="form-control table-input" value="<?php echo $row_possible_score['quarterly_task_1']; ?>" id="quarterly_task_1_3" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_3','tbl_possible3')"></th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">20%</th>
	 							<th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						    <th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						   <!--  <th><button class="btn btn-info" onclick="updateGrade('loadfgrade');"><i class="fas fa-edit"></i> Update</button></th> -->
	 						</tr>
                        </thead>                                                                       
                        <tbody>
 						<?php

					$resubmit_status = '';
					$field_id = 'INSTRUCTOR_ID';
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$resubmit_status = ' AND status = 0';
						$field_id = 'USERID';
					}
					$sql = "SELECT * FROM tbl_studload_qt3 WHERE SUBJ_ID = '".$_POST['id']."' AND $field_id = '".$_POST['id2']."' $resubmit_status";
 					$res = mysqli_query($connect,$sql);
					while ($row = mysqli_fetch_array($res)) {

						$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						?>
						<tr>
							<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
								<input type="hidden" value="tbl_highestpossible_score_3" id="tbl_possible3" readonly>
								<input type="hidden" value="tbl_studload_qt3" id="tbl_grades3" readonly>
							</td>
							<td >
								<?php 
									echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
								?>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input1_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input2_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input3_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input4_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input5_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input6_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input7_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input8_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input9_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input10_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control written_input_total<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control  written_input_final_avg_<?php echo $row['ST_SUBJID']?>_3" value="<?php echo $row['written_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- PERFORMANCE TASK -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input1_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input2_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input3_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input4_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input5_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input6_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input7_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input8_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input9_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input10_<?php echo $row['ST_SUBJID'];?>_3" value="<?php echo $row['performance_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_input_total<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['performance_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_final_avg_<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['performance_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- QUARTERLY ASSESSMENT (20%)	 -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input quarterly_input_<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['quarterly_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_3','tbl_grades3')">
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quarterly_final_avg_<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['quarterly_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>

							<td style="width: 10%;">
								<input type="text" max="3" class="form-control initial_grade_<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['initial_grade']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quaterly_grade_<?php echo $row['ST_SUBJID']; ?>_3" value="<?php echo $row['quaterly_final']; ?>"  style="width: 70px;" readonly>
							</td>
				<!-- 			<td>
								<button class="btn btn-success" onclick="saveGrade('<?php echo $row['ST_SUBJID']; ?>');"><i class="fas fa-check"></i> Save</button>
							</td> -->
						</tr>
						<?php
							}
						?>
						</tbody>
                     </table>
						<?php

 				break;


 			case 'loadstudent4':
				$post_id = $_POST['id2'];
				if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
					$post_id = $_POST['id3'];
				}
				 $sql2 = "SELECT * FROM `tbl_highestpossible_score_4` WHERE SUBJ_ID = '".$_POST['id']."' AND INSTRUCTOR_ID = '".$post_id."'";
 					$res2 = mysqli_query($connect,$sql2);
 					$row_possible_score = mysqli_fetch_array($res2);

 					$totalpossiblescore =  $row_possible_score['written_works_1'] + $row_possible_score['written_works_2'] + $row_possible_score['written_works_3']+ $row_possible_score['written_works_4'] + $row_possible_score['written_works_5'] + $row_possible_score['written_works_6']+ $row_possible_score['written_works_7']+ $row_possible_score['written_works_8']+ $row_possible_score['written_works_9']+ $row_possible_score['written_works_10'];

					?>
                 <table id="tbl_studload_qt4" class="display nowrap table table-striped table-bordered tblfgrade" cellspacing="0" width="100%">
                    <thead class="text-white">
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 50%;" colspan="2">FOURTH QUARTER</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">WRITTEN WORKS (30%)</th>
                                <th class="bg-warning"style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="13">PERFORMANCE TASK (50%)</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;" colspan="3">QUARTERLY ASSESSMENT (20%)</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">INITIAL</th>
                                <th class="bg-success" style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;">QUARTERLY</th>
                             <!--    <th></th> -->
                            </tr>
                            <tr >
                                <th class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2"></th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">2</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">3</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">4</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">5</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">6</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">7</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">8</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">9</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">10</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">TOTAL</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>

                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">1</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">PS</th>
                                <th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">WS</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1;  width: 10%;" >GRADE</th>
                                <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;" >GRADE</th>
                              <!--   <th class="bg-success"style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th> -->
                            </tr>
	 						<tr>
	 							<!-- WRITTEN WORKS (30%)	 -->
	 							<th  class="bg-success" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 100%;" colspan="2">Highest Possible Score
	 								<input type="hidden" class="form-control table-input" value="<?php echo $row_possible_score['id']; ?>" id="idpossiblescore_4" style="width: 70px;" >
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_1']; ?>" id="written_works_1_4" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_2']; ?>" id="written_works_2_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_3']; ?>" id="written_works_3_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_4']; ?>" id="written_works_4_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_5']; ?>" id="written_works_5_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_6']; ?>" id="written_works_6_4" style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_7']; ?>" id="written_works_7_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_8']; ?>" id="written_works_8_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_9']; ?>" id="written_works_9_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['written_works_10']; ?>" id="written_works_10_4"  style="width: 70px;" onchange="wrritenvalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')"> 
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $totalpossiblescore; ?>" id="written_works_total_4"  style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-info" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">30%</th>
								<!-- PERFORMANCE TASK (50%) -->	
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_1']; ?>" id="performance_task_1_4"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_2']; ?>" id="performance_task_2_4"  style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_3']; ?>" id="performance_task_3_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_4']; ?>" id="performance_task_4_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_5']; ?>" id="performance_task_5_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_6']; ?>" id="performance_task_6_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_7']; ?>" id="performance_task_7_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_8']; ?>" id="performance_task_8_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_9']; ?>" id="performance_task_9_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control table-input" value="<?php echo $row_possible_score['performance_task_10']; ?>" id="performance_task_10_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')">
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">
	 								<input type="text" class="form-control" value="<?php echo $row_possible_score['performance_task_total']; ?>" id="performance_task_total_4" style="width: 70px;" readonly>
	 							</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-warning" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">50%</th>
								<!-- QUARTERLY ASSESSMENT (20% -->
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;"><input type="text" class="form-control table-input" value="<?php echo $row_possible_score['quarterly_task_1']; ?>" id="quarterly_task_1_4" style="width: 70px;" onchange="performancevalue('<?php echo $row_possible_score['id']; ?>','_4','tbl_possible4')"></th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">100.00</th>
	 							<th class="bg-secondary" style="text-align: center; border: solid 1px #dddddd;z-index: 1; width: 10%;">20%</th>
	 							<th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						    <th class="bg-success"  style="text-align: center; border-right: solid 1px #dddddd;z-index: 1; width: 10%;"></th>
	 						   <!--  <th><button class="btn btn-info" onclick="updateGrade('loadfgrade');"><i class="fas fa-edit"></i> Update</button></th> -->
	 						</tr>
                        </thead>                                                                       
                        <tbody>
 						<?php


					$resubmit_status = '';
					$field_id = 'INSTRUCTOR_ID';
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$resubmit_status = ' AND status = 0';
						$field_id = 'USERID';
					}
					$sql = "SELECT * FROM tbl_studload_qt3 WHERE SUBJ_ID = '".$_POST['id']."' AND $field_id = '".$_POST['id2']."' $resubmit_status";
 					$res = mysqli_query($connect,$sql);
					while ($row = mysqli_fetch_array($res)) {

						$names = "SELECT * FROM tbl_users WHERE userID = '".$row['USERID']."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						?>
						<tr>
							<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
								<input type="hidden" value="tbl_highestpossible_score_4" id="tbl_possible4" readonly>
								<input type="hidden" value="tbl_studload_qt4" id="tbl_grades4" readonly>
							</td>
							<td >
								<?php 
									echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
								?>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input1_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input2_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input3_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input4_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input5_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input6_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input7_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input8_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input9_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input written_input10_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control written_input_total<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control  written_input_final_avg_<?php echo $row['ST_SUBJID']?>_4" value="<?php echo $row['written_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- PERFORMANCE TASK -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input1_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input2_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_2']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input3_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_3']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input4_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_4']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input5_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_5']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input6_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_6']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input7_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_7']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input8_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_8']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input9_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_9']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input performance_input10_<?php echo $row['ST_SUBJID'];?>_4" value="<?php echo $row['performance_grade_10']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_input_total<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['performance_grade_total']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control performance_final_avg_<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['performance_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>
							<!-- QUARTERLY ASSESSMENT (20%)	 -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control table-input quarterly_input_<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['quarterly_grade_1']; ?>"  style="width: 70px;" onchange="updateaverage('<?php echo $row['ST_SUBJID']; ?>','_4','tbl_grades4')">
							</td>
							<td style="width: 10%;"></td> <!-- PS -->
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quarterly_final_avg_<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['quarterly_grade_ws']; ?>"  style="width: 70px;" readonly>
							</td>

							<td style="width: 10%;">
								<input type="text" max="3" class="form-control initial_grade_<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['initial_grade']; ?>"  style="width: 70px;" readonly>
							</td>
							<td style="width: 10%;">
								<input type="text" max="3" class="form-control quaterly_grade_<?php echo $row['ST_SUBJID']; ?>_4" value="<?php echo $row['quaterly_final']; ?>"  style="width: 70px;" readonly>
							</td>
				<!-- 			<td>
								<button class="btn btn-success" onclick="saveGrade('<?php echo $row['ST_SUBJID']; ?>');"><i class="fas fa-check"></i> Save</button>
							</td> -->
						</tr>
						<?php
							}
						?>
						</tbody>
                     </table>
						<?php
 				break;


			case 'loadfinalGrade':
					$resubmit_status = '';
					$field_id = 'INSTRUCTOR_ID';
					if (isset($_POST['resubmit']) && $_POST['resubmit'] == 1) {
						$resubmit_status = ' AND status = 0';
						$field_id = 'USERID';
					}
					$sql = "SELECT A.SUBJ_ID,A.USERID ,A.quaterly_final, B.quaterly_final, C.quaterly_final, D.quaterly_final FROM `tbl_studload_qt1` AS A LEFT JOIN `tbl_studload_qt2` AS B ON A.SUBJ_ID = B.SUBJ_ID LEFT JOIN `tbl_studload_qt3` AS C ON B.SUBJ_ID = C.SUBJ_ID LEFT JOIN `tbl_studload_qt4` AS D ON C.SUBJ_ID = D.SUBJ_ID WHERE A.SUBJ_ID = '".$_POST['id']."' AND A.$field_id = '".$_POST['id2']."' GROUP BY A.USERID";
					$res = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_array($res)) {

						$names = "SELECT * FROM tbl_users WHERE userID = '".$row[1]."'";
						$resnames = mysqli_query($connect, $names);
						$rownames = mysqli_fetch_array($resnames);

						?>
						<tr style="text-align: center;" >
							<td style="text-align: center;"><img style="width: 50px; height: 50px; border-radius: 50%;" src="assets/images/users/<?php echo $rownames['user_avatar']; ?>">
								<input type="hidden" class="form-control table-input" value="<?php echo $row['ST_SUBJID']; ?>" readonly>
							</td>
							<td >
								<?php 
									echo ucwords($rownames['lname'].", ".$rownames['fname']." ".$rownames['mname']).".";
								?>
							</td>
							<td><?php
								  $grade1 = "SELECT quaterly_final FROM `tbl_studload_qt1` WHERE USERID = '".$row[1]."' AND $field_id = '".$_POST['id2']."' AND SUBJ_ID = '".$row[0]."'";
								  $res1g = mysqli_query($connect,$grade1);
								  $row1g = mysqli_fetch_array($res1g);
							 	echo $row1g[0]; 
							 	?>
							</td>
							<td><?php
								  $grade2 = "SELECT quaterly_final FROM `tbl_studload_qt2` WHERE USERID = '".$row[1]."' AND $field_id = '".$_POST['id2']."' AND SUBJ_ID = '".$row[0]."'";
								  $res2g = mysqli_query($connect,$grade2);
								  $row2g = mysqli_fetch_array($res2g);
							 	echo $row2g[0]; ?>
							</td>
							<td><?php
								  $grade3 = "SELECT quaterly_final FROM `tbl_studload_qt3` WHERE USERID = '".$row[1]."' AND $field_id = '".$_POST['id2']."' AND SUBJ_ID = '".$row[0]."'";
								  $res3g = mysqli_query($connect,$grade3);
								  $row3g = mysqli_fetch_array($res3g);
							 	echo $row3g[0]; ?>
							</td>
							<td><?php
								  $grade4 = "SELECT quaterly_final FROM `tbl_studload_qt4` WHERE USERID = '".$row[1]."' AND $field_id = '".$_POST['id2']."' AND SUBJ_ID = '".$row[0]."'";
								  $res4g = mysqli_query($connect,$grade4);
								  $row4g = mysqli_fetch_array($res4g);
							 	echo $row4g[0]; ?>
							</td>
							<td>
								<?php 
									$avg = $row1g[0] + $row2g[0] + $row3g[0] + $row4g[0];

									$total = $avg / 4;

								echo $total; ?>
							</td>
							<td style="text-align: center;"> 
								<?php
								if ($total == "") {
									echo '';
								} else if($total < 75) {
									echo '<span class="badge badge-danger">FAILED</span>';
								} else if($total > 74){
									echo '<span class="badge badge-success">PASSED</span>';
								}

							?></td>
						</tr>
						<?php
					}
			break;
			case 'resubmit':
				for ($i = 1; $i <= 4; $i++) {
					$sql = "UPDATE tbl_studload_qt$i SET status = 1 WHERE USERID = '".$_POST['id']."'";	
					$res = mysqli_query($connect, $sql);
				}
					echo $res;
			break;
 		}

?>