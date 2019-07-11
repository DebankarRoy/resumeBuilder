function Submittraining(){
   var frm = $('#training_details');

   $('#training_details').validate({
      rules: {
        training_prog: 'required', 
        training_org: 'required',
        training_loc: 'required'
        }
    });
    
    if($('#training_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/training-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordtraining();
          document.getElementById('training_details').reset();
            }   
        });
    }  
}

function Submitproject(){
     var frm = $('#project_details');

     $('#project_details').validate({
      rules: {
        project_name: 'required'
        }
    });

      if($('#project_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/project-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordproject();
          document.getElementById('project_details').reset();
        }    
      });
    }
}

function Submitintern(){
     var frm = $('#intern_details');

     $('#intern_details').validate({
      rules: {
        intern_profile: 'required', 
        intern_org: 'required',
        intern_loc: 'required'
        }
    });

     if($('#intern_details').valid())
    {
      console.log('valid'+($('#intern_details').valid()));
     $.ajax({
        type: "POST",
        url: "submit/intern-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordintern();
          document.getElementById('intern_details').reset();
          }
      });
    }
}

function Submitjob(){
     var frm = $('#job_details');

     $('#job_details').validate({
      rules: {
        job_profile: 'required', 
        job_org: 'required',
        job_loc: 'required'
        }
    });

     if($('#job_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/job-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordjob();
          document.getElementById('job_details').reset();
          }    
      });
    }
}

function Submitachv(){
     var frm = $('#Achivements_details');
     $.ajax({
        type: "POST",
        url: "submit/other-achv-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordother();
          document.getElementById('Achivements_details').reset();
        }
        
    });
}
