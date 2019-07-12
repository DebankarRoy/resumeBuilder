function readRecordskill(){
				var readRecordskill = 'readRecordskill';
				$.ajax({
					url: 'submit/skills-submit.php',
					type: 'POST',
					data: { readRecordskill:readRecordskill},
					success:function(data,status){
				 			$('#skills-fetching').html(data);
				 			
						 }
				})
			}


			function DeleteRecordskill(deleteidskill){
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
			}

$('document').ready(function(){
				readRecordskill();
			  $('.skills-in').on('keyup',function(){
				var val =$('.skills-in').val();
				if(val!=''){
                        $('.add-skills-rating-container').show();
                    }else{
                        $('.add-skills-rating-container').hide();
                    }
			 });
			});