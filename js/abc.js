function submitgrad(){
    $('#registration_form').validate({
            
            rules: {
             name: 'required', 
             phone_no: 'required',
             email: {
                 email: true,
                 required: true
                },
             current_city:'required'
            },
            submitHandler: function () {
                //var data = $('#registration_form').serialize();
               // var url = "graduation-submit.php";
                $.ajax({
                    type: "POST",
                    url: "graduation-submit.php"
                   // data: data,        
            });
            
        }
    });
}
