function Submitskillbeginner(){
     var skill=$('#skill').val();
     var rating=$('#beginner').val();

     $.ajax({
        type: "POST",
        url: "submit/skills-submit.php",
       data: { skillinput:skill,rating:rating },
       success: function(data,status) {
       
          readRecordskills();
        }

        
    });
}

function Submitskillintermediate(){
     var skill=$('#skill').val();
     var rating=$('#intermediate').val();

     $.ajax({
        type: "POST",
        url: "submit/skills-submit.php",
       data: { skillinput:skill,rating:rating },
       success: function(data,status) {
       
          readRecordskills();
        }

        
    });
}

function Submitskilladvanced(){
     var skill=$('#skill').val();
     var rating=$('#advanced').val();

     $.ajax({
        type: "POST",
        url: "submit/skills-submit.php",
       data: { skillinput:skill,rating:rating },
       success: function(data,status) {
        
          readRecordskills();
        }

        
    });
}