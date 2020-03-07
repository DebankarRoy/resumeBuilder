function readRecordstudent(){
				var readRecordstudent = 'readRecordstudent';
				
				$.ajax({
					url: 'student-submit.php',
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

function fetchRecordstudent(){
				var fetchRecordstudent = 'fetchRecordstudent';
				//console.log('working'+fetchRecordstudent);
				$.ajax({
					url: 'submit/resumes-fetch.php',
					type: 'POST',
					data: { fetchRecordstudent:fetchRecordstudent},
					success:function(data,status){
							
				 			$('#student-profile-fetching').html(data);
				 			
						 }
				})
			}

$('document').ready(function(){
	fetchRecordstudent();
})


function getstudent(){
				var updatestudent = 'updatestudent';
				//console.log('working'+fetchRecordstudent);
				$.ajax({
					url: 'student-submit.php',
					type: 'POST',
					data: { updatestudent:updatestudent},
					success:function(data,status){
							//alert(data);
				 			var user = JSON.parse(data);
				 			//alert(user);
				 			$("#update_name").val(user.name);
				            $("#update_city").val(user.city);
				            $("#update_email").val(user.email_student);
				            $("#update_mobile").val(user.phone_number);
						 }
				})
			}


function UpdateStudent() {
    var frm = $('#update_profile');
    //alert(frm.serialize());
		$.ajax({
        type: "POST",
        url: "student-submit.php",
        data: frm.serialize(),
        //console.log(data);
        success: function(data,status) {
      		readRecordstudent();
            }
        });
}

function DeleteProfile(profiledeleteid) {
	//console.log(form_counter);
	var conf = confirm("Are you sure?");
		if(conf == true) {
		$.ajax({
			url:"student-submit.php",
			type:'POST',
			data: {  profiledeleteid: profiledeleteid },
			success:function(data, status){
				window.location = "home.php";	
			}
		});
	}	 	
}

/*hidden_user_id: hidden_user_id,
            firstname: firstname,
            lastname: lastname,
            email: email,
            mobile: mobile


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