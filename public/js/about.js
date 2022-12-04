
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewAboutModal').modal('show');
      });
      $('#formResetBtn').on('click',function(e){
            e.preventDefault();
            $('#AboutForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/About",
                  data: $('#AboutForm').serialize(),success:function(data){
                        $('#AboutForm')[0].reset();
                        $('#NewAboutModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});