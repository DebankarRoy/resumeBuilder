function Submitskill(){
     $.ajax({
        type: "POST",
        url: "/var/www/html/Resume/submit/skills-submit.php",      
    });
     console.log();
}