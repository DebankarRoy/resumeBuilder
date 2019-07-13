function readRecordstudent(){
				var readRecordstudent = 'readRecordstudent';
				
				$.ajax({
					url: 'submit/student-submit.php',
					type: 'POST',
					data: { readRecordstudent:readRecordstudent},
					success:function(data,status){
				 			$('#student-fetching').html(data);
				 			
						 }
				})
			}

$('document').ready(function(){
	readRecordstudent();
})


			/*function DeleteRecordskill(deleteidskill){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/skills-submit.php",
					type:'POST',
					data: {  deleteidskill: deleteidskill },
					success:function(data, status){
						readRecordskill();	
					}
				});
				}
			}*/