<script type="text/javascript">
	$(function(){
		loadsubject();
		loadstudent();
		loadstudent2();
		loadstudent3();
		loadstudent4();
		loadfinalGrade();
	})

	function loadsubject(){
		var id = $('#subjectid').val();
		$.ajax({
			type:'POST',
			url:'view/managegrades/class.php',
			data:'form=loadsubject&id='+id,
			success:function(data){
			
				var show = data.split('|');
				$('#subject').val(show[0]);
				$('#description').val(show[1]);
				$('#academicyear').val(show[2]);
			}
		})
	}


	function loadstudent(){

		var id = $('#subjectid').val();
		var id2 = $('#instructorid').val();
		$.ajax({
			type:'POST',
			url:'view/managegrades/class.php',
			data:'form=loadstudent&id='+id+'&id2='+id2,
			async:false,
			success:function(data){
				$('#loadfirstgrade').html(data);
				$('#tbl_studload_qt1').dataTable();
/*			    $('.table-input').click(function(){
			  	$('.table-input').attr('readonly','readonly');
			  	$(this).removeAttr('readonly');
			  });*/
			}
		})
	}

	function loadstudent2(){
		var id = $('#subjectid').val();
		var id2 = $('#instructorid').val();
		$.ajax({
			type:'POST',
			url:'view/managegrades/class.php',
			data:'form=loadstudent2&id='+id+'&id2='+id2,
			success:function(data){
				$('#loadsecondgrade').html(data);
				$('#tbl_studload_qt2').dataTable();
/*			    $('.table-input').click(function(){
			  	$('.table-input').attr('readonly','readonly');
			  	$(this).removeAttr('readonly');
			  });*/
			}
		})
	}
	function loadstudent3(){
		var id = $('#subjectid').val();
		var id2 = $('#instructorid').val();
		$.ajax({
			type:'POST',
			url:'view/managegrades/class.php',
			data:'form=loadstudent3&id='+id+'&id2='+id2,
			success:function(data){
				$('#loadthirdgrade').html(data);
				$('#tbl_studload_qt3').dataTable();
/*			    $('.table-input').click(function(){
			  	$('.table-input').attr('readonly','readonly');
			  	$(this).removeAttr('readonly');
			  });*/
			}
		})
	}
	function loadstudent4(){
		var id = $('#subjectid').val();
		var id2 = $('#instructorid').val();
		$.ajax({
			type:'POST',
			url:'view/managegrades/class.php',
			data:'form=loadstudent4&id='+id+'&id2='+id2,
			success:function(data){
				$('#loadf4thgrade').html(data);
				$('#tbl_studload_qt4').dataTable();
/*			    $('.table-input').click(function(){
			  	$('.table-input').attr('readonly','readonly');
			  	$(this).removeAttr('readonly');
			  });*/
			}
		})
	}
	function loadfinalGrade() {
		var id = $('#subjectid').val();
		var id2 = $('#instructorid').val();
		$.ajax({
			type: 'POST',
			url:  'view/managegrades/class.php',
			data: 'form=loadfinalGrade'+'&id='+id+'&id2='+id2,
			success:function(data){
				$('#loadfinalGrade').html(data);
				$('#tbfinalgrade').dataTable();

			}
		})
	}


	 function wrritenvalue(id,inputs,tablename){
      	var written_works_1 =  $('#written_works_1'+inputs).val();   
      	var written_works_2 =  $('#written_works_2'+inputs).val();   
      	var written_works_3 =  $('#written_works_3'+inputs).val();   
      	var written_works_4 =  $('#written_works_4'+inputs).val();   
      	var written_works_5 =  $('#written_works_5'+inputs).val();   
      	var written_works_6 =  $('#written_works_6'+inputs).val();
      	var written_works_7 =  $('#written_works_7'+inputs).val();   
      	var written_works_8 =  $('#written_works_8'+inputs).val();   
      	var written_works_9 =  $('#written_works_9'+inputs).val();
      	var written_works_10 =  $('#written_works_10'+inputs).val();

      	var result = (+written_works_1) + (+written_works_2) + (+written_works_3) + (+written_works_4) + (+written_works_5) + (+written_works_6) + (+written_works_7) + (+written_works_8) + (+written_works_9) + (+written_works_10);
	 	$('#written_works_total'+inputs).val(result);

	 	updatehighestpossible_score(id,inputs,tablename);
	 }



	 function performancevalue(id,inputs,tablename){
      	var performance_task_1 =  $('#performance_task_1'+inputs).val();   
      	var performance_task_2 =  $('#performance_task_2'+inputs).val();   
      	var performance_task_3 =  $('#performance_task_3'+inputs).val();   
      	var performance_task_4 =  $('#performance_task_4'+inputs).val();   
      	var performance_task_5 =  $('#performance_task_5'+inputs).val();   
      	var performance_task_6 =  $('#performance_task_6'+inputs).val();
      	var performance_task_7 =  $('#performance_task_7'+inputs).val();   
      	var performance_task_8 =  $('#performance_task_8'+inputs).val();   
      	var performance_task_9 =  $('#performance_task_9'+inputs).val();
      	var performance_task_10 =  $('#performance_task_10'+inputs).val();

      	var result = (+performance_task_1) + (+performance_task_2) + (+performance_task_3) + (+performance_task_4) + (+performance_task_5) + (+performance_task_6) + (+performance_task_7) + (+performance_task_8) + (+performance_task_9) + (+performance_task_10);

	 	$('#performance_task_total'+inputs).val(result);

	 	updatehighestpossible_score(id,inputs,tablename);
	 }


	 function updateaverage(id,inputs,tablename){
/*	 function writtenAverage(id,inputs,tablename){*/
      	var written_works_1 =  $('.written_input1_'+id+inputs).val();   
      	var written_works_2 =  $('.written_input2_'+id+inputs).val();   
      	var written_works_3 =  $('.written_input3_'+id+inputs).val();   
      	var written_works_4 =  $('.written_input4_'+id+inputs).val();   
      	var written_works_5 =  $('.written_input5_'+id+inputs).val();   
      	var written_works_6 =  $('.written_input6_'+id+inputs).val();
      	var written_works_7 =  $('.written_input7_'+id+inputs).val();   
      	var written_works_8 =  $('.written_input8_'+id+inputs).val();   
      	var written_works_9 =  $('.written_input9_'+id+inputs).val();
      	var written_works_10 =  $('.written_input10_'+id+inputs).val();

      	var totalwritten = (+written_works_1) + (+written_works_2) + (+written_works_3) + (+written_works_4) + (+written_works_5) + (+written_works_6) + (+written_works_7) + (+written_works_8) + (+written_works_9) + (+written_works_10);
	 	$('.written_input_total'+id+inputs).val(totalwritten);

        var total_possible_written = $('#written_works_total'+inputs).val();

	 	var divide_written = (+totalwritten) / (+total_possible_written);

	 	var multiply_written = ((+divide_written) * 30);

	 	var finalaverage_written = (multiply_written).toFixed(2);

	 	$('.written_input_final_avg_'+id+inputs).val(finalaverage_written);
	 	/*saveGrade(id,inputs,tablename);*/
/*	 }

	 function performanceaverage(id,inputs,tablename){*/
      	var performance_task_1 =  $('.performance_input1_'+id+inputs).val();   
      	var performance_task_2 =  $('.performance_input2_'+id+inputs).val();   
      	var performance_task_3 =  $('.performance_input3_'+id+inputs).val();   
      	var performance_task_4 =  $('.performance_input4_'+id+inputs).val();   
      	var performance_task_5 =  $('.performance_input5_'+id+inputs).val();   
      	var performance_task_6 =  $('.performance_input6_'+id+inputs).val();
      	var performance_task_7 =  $('.performance_input7_'+id+inputs).val();   
      	var performance_task_8 =  $('.performance_input8_'+id+inputs).val();   
      	var performance_task_9 =  $('.performance_input9_'+id+inputs).val();
      	var performance_task_10 =  $('.performance_input10_'+id+inputs).val();

      	var totalperformance = (+performance_task_1) + (+performance_task_2) + (+performance_task_3) + (+performance_task_4) + (+performance_task_5) + (+performance_task_6) + (+performance_task_7) + (+performance_task_8) + (+performance_task_9) + (+performance_task_10);
	 	$('.performance_input_total'+id+inputs).val(totalperformance);

        var total_possible_performance = $('#performance_task_total'+inputs).val();

	 	var divide_performance = (+totalperformance) / (+total_possible_performance);

	 	var multiply_performance = ((+divide_performance) * 50);

	 	var finalaverage_performance = (multiply_performance).toFixed(2);

	 	$('.performance_final_avg_'+id+inputs).val(finalaverage_performance);
	 	/*saveGrade(id,inputs,tablename);*/
/*	 }

	 function quarterlyassessment(id,inputs,tablename){*/
	 	var total_possible_quarterly = $('#quarterly_task_1'+inputs).val();
	 	var quarterly_input =  $('.quarterly_input_'+id+inputs).val();   

	 	var divide_quarterly = (+quarterly_input) / (+ total_possible_quarterly);
/*	 	var multiply = (+devide) * 20;*/
	 	var multiply_quarterly = ((+divide_quarterly) * 20).toFixed(2);
		$('.quarterly_final_avg_'+id+inputs).val(multiply_quarterly);

		var written_average = $('.written_input_final_avg_'+id+inputs).val();
		var perfomance_average = $('.performance_final_avg_'+id+inputs).val();
		var quaterly_average = $('.quarterly_final_avg_'+id+inputs).val();

		var initialgrade = (+written_average) + (+perfomance_average) + (+quaterly_average);

		var finalquarterly = (initialgrade).toFixed(2);

		$('.initial_grade_'+id+inputs).val(finalquarterly);

		if (initialgrade == 100) {
			$('.quaterly_grade_'+id+inputs).val(100);
		} else if ((+initialgrade) >= 98.40 && (+initialgrade) <= 99.99) {
			$('.quaterly_grade_'+id+inputs).val(99);
		} else if ((+initialgrade) >= 96.80 && (+initialgrade) <= 98.39) {
			$('.quaterly_grade_'+id+inputs).val(98);
		} else if ((+initialgrade) >= 95.20 && (+initialgrade) <= 96.79) {
			$('.quaterly_grade_'+id+inputs).val(97);
		} else if ((+initialgrade) >= 93.60 && (+initialgrade) <= 95.19) {
			$('.quaterly_grade_'+id+inputs).val(96);
		} else if ((+initialgrade) >= 92.00 && (+initialgrade) <= 93.59) {
			$('.quaterly_grade_'+id+inputs).val(95);
		} else if ((+initialgrade) >= 90.40 && (+initialgrade) <= 91.99) {
			$('.quaterly_grade_'+id+inputs).val(94);
		} else if ((+initialgrade) >= 88.80 && (+initialgrade) <= 90.39) {
			$('.quaterly_grade_'+id+inputs).val(93);
		} else if ((+initialgrade) >= 87.20 && (+initialgrade) <= 88.79) {
			$('.quaterly_grade_'+id+inputs).val(92);
		} else if ((+initialgrade) >= 85.60 && (+initialgrade) <= 87.19) {
			$('.quaterly_grade_'+id+inputs).val(91);
		} else if ((+initialgrade) >= 84.00 && (+initialgrade) <= 85.59) {
			$('.quaterly_grade_'+id+inputs).val(90);
		} else if ((+initialgrade) >= 82.40 && (+initialgrade) <= 83.99) {
			$('.quaterly_grade_'+id+inputs).val(89);
		} else if ((+initialgrade) >= 80.80 && (+initialgrade) <= 82.39) {
			$('.quaterly_grade_'+id+inputs).val(88);
		} else if ((+initialgrade) >= 79.20 && (+initialgrade) <= 80.79) {
			$('.quaterly_grade_'+id+inputs).val(87);
		} else if ((+initialgrade) >= 77.60 && (+initialgrade) <= 79.19) {
			$('.quaterly_grade_'+id+inputs).val(86);
		} else if ((+initialgrade) >= 76.00 && (+initialgrade) <= 77.59) {
			$('.quaterly_grade_'+id+inputs).val(85);
		} else if ((+initialgrade) >= 74.40 && (+initialgrade) <= 75.99) {
			$('.quaterly_grade_'+id+inputs).val(84);
		} else if ((+initialgrade) >= 72.80 && (+initialgrade) <= 74.39) {
			$('.quaterly_grade_'+id+inputs).val(83);
		} else if ((+initialgrade) >= 71.20 && (+initialgrade) <= 72.79) {
			$('.quaterly_grade_'+id+inputs).val(82);
		} else if ((+initialgrade) >= 69.60 && (+initialgrade) <= 71.19) {
			$('.quaterly_grade_'+id+inputs).val(81);
		} else if ((+initialgrade) >= 68.00 && (+initialgrade) <= 69.59) {
			$('.quaterly_grade_'+id+inputs).val(80);
		} else if ((+initialgrade) >= 66.40 && (+initialgrade) <= 67.99) {
			$('.quaterly_grade_'+id+inputs).val(79);
		} else if ((+initialgrade) >= 64.80 && (+initialgrade) <= 66.39) {
			$('.quaterly_grade_'+id+inputs).val(78);
		} else if ((+initialgrade) >= 63.20 && (+initialgrade) <= 64.79) {
			$('.quaterly_grade_'+id+inputs).val(77);
		} else if ((+initialgrade) >= 61.60 && (+initialgrade) <= 63.19) {
			$('.quaterly_grade_'+id+inputs).val(76);
		} else if ((+initialgrade) >= 60.00 && (+initialgrade) <= 61.59) {
			$('.quaterly_grade_'+id+inputs).val(75);
		} else if ((+initialgrade) >= 56.00 && (+initialgrade) <= 59.99) {
			$('.quaterly_grade_'+id+inputs).val(74);
		} else if ((+initialgrade) >= 52.00 && (+initialgrade) <= 55.99) {
			$('.quaterly_grade_'+id+inputs).val(73);
		} else if ((+initialgrade) >= 48.00 && (+initialgrade) <= 51.99) {
			$('.quaterly_grade_'+id+inputs).val(72);
		} else if ((+initialgrade) >= 44.00 && (+initialgrade) <= 47.99) {
			$('.quaterly_grade_'+id+inputs).val(71);
		} else if ((+initialgrade) >= 40.00 && (+initialgrade) <= 43.99) {
			$('.quaterly_grade_'+id+inputs).val(70);
		} else if ((+initialgrade) >= 36.00 && (+initialgrade) <= 39.99) {
			$('.quaterly_grade_'+id+inputs).val(69);
		} else if ((+initialgrade) >= 32.00 && (+initialgrade) <= 35.99) {
			$('.quaterly_grade_'+id+inputs).val(68);
		} else if ((+initialgrade) >= 28.00 && (+initialgrade) <= 31.99) {
			$('.quaterly_grade_'+id+inputs).val(67);
		} else if ((+initialgrade) >= 24.00 && (+initialgrade) <= 27.99) {
			$('.quaterly_grade_'+id+inputs).val(66);
		} else if ((+initialgrade) >= 20.00 && (+initialgrade) <= 23.99) {
			$('.quaterly_grade_'+id+inputs).val(65);
		} else if ((+initialgrade) >= 16.00 && (+initialgrade) <= 19.99) {
			$('.quaterly_grade_'+id+inputs).val(64);
		} else if ((+initialgrade) >= 12.00 && (+initialgrade) <= 15.99) {
			$('.quaterly_grade_'+id+inputs).val(63);
		} else if ((+initialgrade) >= 8.00 && (+initialgrade) <= 11.99) {
			$('.quaterly_grade_'+id+inputs).val(62);
		} else if ((+initialgrade) >= 4.00 && (+initialgrade) <= 7.99) {
			$('.quaterly_grade_'+id+inputs).val(61);
		} else if ((+initialgrade) >= 0 && (+initialgrade) <= 3.99) {
			$('.quaterly_grade_'+id+inputs).val(60);
		}
		saveGrade(id,inputs,tablename);
		loadfinalGrade();
	 }





  function updatehighestpossible_score(id,inputs,tablename){

  		var tabledb = $('#'+tablename).val();
      	var written_works_1 =  $('#written_works_1'+inputs).val();   
      	var written_works_2 =  $('#written_works_2'+inputs).val();   
      	var written_works_3 =  $('#written_works_3'+inputs).val();   
      	var written_works_4 =  $('#written_works_4'+inputs).val();   
      	var written_works_5 =  $('#written_works_5'+inputs).val();   
      	var written_works_6 =  $('#written_works_6'+inputs).val();
      	var written_works_7 =  $('#written_works_7'+inputs).val();   
      	var written_works_8 =  $('#written_works_8'+inputs).val();   
      	var written_works_9 =  $('#written_works_9'+inputs).val();
      	var written_works_10 =  $('#written_works_10'+inputs).val();
      	var written_works_total =  $('#written_works_total'+inputs).val();

      	var performance_task_1 =  $('#performance_task_1'+inputs).val();   
      	var performance_task_2 =  $('#performance_task_2'+inputs).val();   
      	var performance_task_3 =  $('#performance_task_3'+inputs).val();   
      	var performance_task_4 =  $('#performance_task_4'+inputs).val();   
      	var performance_task_5 =  $('#performance_task_5'+inputs).val();   
      	var performance_task_6 =  $('#performance_task_6'+inputs).val();
      	var performance_task_7 =  $('#performance_task_7'+inputs).val();   
      	var performance_task_8 =  $('#performance_task_8'+inputs).val();   
      	var performance_task_9 =  $('#performance_task_9'+inputs).val();
      	var performance_task_10 =  $('#performance_task_10'+inputs).val();
      	var performance_task_total =  $('#performance_task_total'+inputs).val();
      	var quarterly_task_1 = $('#quarterly_task_1'+inputs).val();


        $.ajax({
          type: 'POST',
		  url:  'view/managegrades/class.php',
          data:'form=updatehighestpossible_score&id='+id+'&written_works_1='+written_works_1+'&written_works_2='+written_works_2+'&written_works_3='+written_works_3+'&written_works_4='+written_works_4+'&written_works_5='+written_works_5+'&written_works_6='+written_works_6+'&written_works_7='+written_works_7+'&written_works_8='+written_works_8+'&written_works_9='+written_works_9+'&written_works_10='+written_works_10+'&written_works_total='+written_works_total+'&performance_task_1='+performance_task_1+'&performance_task_2='+performance_task_2+'&performance_task_3='+performance_task_3+'&performance_task_4='+performance_task_4+'&performance_task_5='+performance_task_5+'&performance_task_6='+performance_task_6+'&performance_task_7='+performance_task_7+'&performance_task_8='+performance_task_8+'&performance_task_9='+performance_task_9+'&performance_task_10='+performance_task_10+'&performance_task_total='+performance_task_total+'&quarterly_task_1='+quarterly_task_1+'&tablename='+tabledb,
          success: function(data){  
          	/*alert(data)*/
     		if (data == 1) {
/*				Swal.fire(
				  'Success!',
				  'You have successfully Update <font color="green"><b>Highest Possible Score</b></font>!',
				  'success'
				)*/
			    $.toast({
			        heading: 'You have successfully Update',
			        text: 'successfully Update Possible Highest Score',
			        position: 'top-right',
			        loaderBg: '#39ED39',
			        icon: 'success',
			        hideAfter: 3000,
			        stack: 6
			    });
     		} else {
     			alert(data);
     		}
          }
        });
  }

  function saveGrade(id,inputs,tablename){
  		var tabledb = $('#'+tablename).val();
      	var written_grade_1 =  $('.written_input1_'+id+inputs).val();   
      	var written_grade_2 =  $('.written_input2_'+id+inputs).val();   
      	var written_grade_3 =  $('.written_input3_'+id+inputs).val();   
      	var written_grade_4 =  $('.written_input4_'+id+inputs).val();   
      	var written_grade_5 =  $('.written_input5_'+id+inputs).val();   
      	var written_grade_6 =  $('.written_input6_'+id+inputs).val();
      	var written_grade_7 =  $('.written_input7_'+id+inputs).val();   
      	var written_grade_8 =  $('.written_input8_'+id+inputs).val();   
      	var written_grade_9 =  $('.written_input9_'+id+inputs).val();
      	var written_grade_10 =  $('.written_input10_'+id+inputs).val();
      	var written_grade_total =  $('.written_input_total'+id+inputs).val();
      	var written_grade_ws = $('.written_input_final_avg_'+id+inputs).val();

      	var performance_task_1 =  $('.performance_input1_'+id+inputs).val();   
      	var performance_task_2 =  $('.performance_input2_'+id+inputs).val();   
      	var performance_task_3 =  $('.performance_input3_'+id+inputs).val();   
      	var performance_task_4 =  $('.performance_input4_'+id+inputs).val();   
      	var performance_task_5 =  $('.performance_input5_'+id+inputs).val();   
      	var performance_task_6 =  $('.performance_input6_'+id+inputs).val();
      	var performance_task_7 =  $('.performance_input7_'+id+inputs).val();   
      	var performance_task_8 =  $('.performance_input8_'+id+inputs).val();   
      	var performance_task_9 =  $('.performance_input9_'+id+inputs).val();
      	var performance_task_10 =  $('.performance_input10_'+id+inputs).val();
      	var performance_grade_total =  $('.performance_input_total'+id+inputs).val();
      	var performance_grade_ws = $('.performance_final_avg_'+id+inputs).val();

	 	var quarterly_grade_1 =  $('.quarterly_input_'+id+inputs).val();   
		var quarterly_grade_ws = $('.quarterly_final_avg_'+id+inputs).val();

		var initial_grade = $('.initial_grade_'+id+inputs).val();
		var quaterly_final = $('.quaterly_grade_'+id+inputs).val();

	 	

  /*    	alert(performance_grade_total);*/
      	$.ajax({
				type: 'POST',
		  		url:  'view/managegrades/class.php',
		  		data:'form=saveGrade&id='+id +'&written_grade_1='+ written_grade_1+'&written_grade_2=' + written_grade_2 + '&written_grade_3=' + written_grade_3 + '&written_grade_4=' + written_grade_4 + '&written_grade_5=' + written_grade_5 + '&written_grade_6=' + written_grade_6 +'&written_grade_7=' + written_grade_7 + '&written_grade_8=' + written_grade_8 +   '&written_grade_9=' + written_grade_9 +'&written_grade_10=' + written_grade_10 +'&written_grade_total=' + written_grade_total +'&written_grade_ws=' + written_grade_ws + '&performance_task_1=' + performance_task_1 +   '&performance_task_2=' + performance_task_2 +   '&performance_task_3=' + performance_task_3 + '&performance_task_4=' + performance_task_4 +   '&performance_task_5=' + performance_task_5 +   '&performance_task_6=' + performance_task_6 +'&performance_task_7=' + performance_task_7 +   '&performance_task_8=' + performance_task_8 +   '&performance_task_9=' + performance_task_9 +'&performance_task_10=' + performance_task_10 +'&performance_grade_total=' + performance_grade_total +'&performance_grade_ws=' + performance_grade_ws + '&quarterly_grade_1=' + quarterly_grade_1 +   '&quarterly_grade_ws=' + quarterly_grade_ws + '&initial_grade=' + initial_grade +'&quaterly_final=' + quaterly_final +'&tablename=' + tabledb,
      			success:function(data){

      				if (data == 1) {
		  			    $.toast({
					        heading: 'You have successfully Update',
					        text: 'successfully Update Quarterly Grades',
					        position: 'top-right',
					        loaderBg: '#39ED39',
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


function updateFG(act){
      $('#'+act).find('tr').each(function(){
        var id = $(this).find('td').eq(0).find('input').val();   
          
		  	$.ajax({
				type: 'POST',
		  		url:  'view/managegrades/class.php',
		  		data:'form=updateFG&id='+id,
		  		success:function(data){
				loadfinalGrade();
		  		}
		  	});
      });

}

</script>