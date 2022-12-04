
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewInfoModal').modal('show');
      });
      $('#formResetBtn').on('click',function(e){
            e.preventDefault();
            $('#InfoForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Contact/information",
                  data: $('#InfoForm').serialize(),success:function(data){
                        $('#InfoForm')[0].reset();
                        $('#NewInfoModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});