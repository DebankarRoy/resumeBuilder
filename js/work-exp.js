function Submittraining(){
     var frm = $('#training_details');
     console.log(frm.serialize());
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

function Submitproject(){
     var frm = $('#project_details');
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

function Submitintern(){
     var frm = $('#intern_details');
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

function Submitjob(){
     var frm = $('#job_details');
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
