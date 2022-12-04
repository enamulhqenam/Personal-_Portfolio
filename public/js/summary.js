
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewSummaryModal').modal('show');
      });
      $('#formREsetBtn').on('click',function(e){
            e.preventDefault();
            $('#SummaryForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Resume/summary",
                  data: $('#SummaryForm').serialize(),success:function(data){
                        $('#SummaryForm')[0].reset();
                        $('#NewSummaryModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});