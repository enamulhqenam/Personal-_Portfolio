
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewPortfoiloModal').modal('show');
      });
      $('#formREsetBtn').on('click',function(e){
            e.preventDefault();
            $('#PortfoiloForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Portfolio",
                  data: $('#PortfoiloForm').serialize(),success:function(data){
                        $('#PortfoiloForm')[0].reset();
                        $('#NewPortfoiloModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});