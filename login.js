$("#signup").click(function() {
    $("#first").fadeOut("fast", function() {
    $("#second").fadeIn("fast");
    });
    });
    
    $("#signin").click(function() {
    $("#second").fadeOut("fast", function() {
    $("#first").fadeIn("fast");
    });
    });
    
    
      
             $(function() {
               $("form[name='login']").validate({
                 rules: {
                   
                   email: {
                     required: true,
                     email: true
                   },
                   password: {
                     required: true,
                     
                   }
                 },
                  messages: {
                   email: "S'il vous plait, entrez une adresse email valide",
                  
                   password: {
                     required: "S'il vous plait entrez votre mot de passe",
                    
                   }
                   
                 },
                 submitHandler: function(form) {
                   form.submit();
                 }
               });
             });
             
    
    
    $(function() {
      
      $("form[name='registration']").validate({
        rules: {
          firstname: "required",
          lastname: "required",
          email: {
            required: true,
            email: true
          },
          password: {
            required: true,
            minlength: 5
          }
        },
        
        messages: {
          firstname: "S'il vous plait rentrez votre prénom",
          lastname: "S'il vous plait rentrez votre nom",
          password: {
            required: "S'il vous plait fournissez un mot de passe",
            minlength: "Votre mot de passe doit contenir au moins 5 caractères"
          },
          email: "S'il vous plait, entrez une adresse email valide"
        },
      
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
    