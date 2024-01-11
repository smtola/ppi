$("#validators").validate({
    rules:{
       name:{
           minlength: 2
       }
    },
    messages: {
       required: "Required input",
       minlength: jQuery.validator.format("Please, at least {0} characters are necessary")
     },
   
     submitHandler: function(form) {
       form.submit();
     }
   });
   // d