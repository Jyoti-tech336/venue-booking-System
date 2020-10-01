
  $(document).ready(function(){
            $("#register").validate({
                rules:{
                    username:"required",
                    email:{
                        required:true,
                        email:true},
                    password:{
                        required:true,
                        minlength:6,
                        maxlength:10
                    },
                   address:"required",
                    phone:{
                    required:true,
                    maxlength:10
                    }
                    
                },
                messages:{
                    username:"***please enter your name",
                    email:{
                    required:"***please enter email",
                    email:"***please enter valid email"
                    },
                   password:{
                       required:"***please enter password",
                       minlength:"***please enter minimum 6 char/digits"
                            },
                    address:"***please enter your address",
                    phone:{
                        required:"please enter password",
                        maxlength:"please enter maximum 10 digits"
                        
                    }
                    

                }
});
});    

 $(document).ready(function(){
     $("#login").validate({
    rules:{
        username1:"required",
        password1:"required"
    
    },
         message:{
             username1:"***please enter your username",
             password1:"***please enter your password"
         }
     
     });
 });
      



//$('.mdb-select').materialSelect({
//});








