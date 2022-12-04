
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            console.log('dadded');
            $('#NewContactModal').modal('show');
      });
      $('#formResetBtn').on('click',function(e){
            e.preventDefault();
            $('#ContactForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Contact/form",
                  data: $('#ContactForm').serialize(),success:function(data){
                        $('#ContactForm')[0].reset();
                        $('#NewContactModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});