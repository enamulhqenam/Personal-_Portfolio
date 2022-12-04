
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewEducationModal').modal('show');
      });
      $('#formREsetBtn').on('click',function(e){
            e.preventDefault();
            $('#EducationForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Resume/education",
                  data: $('#EducationForm').serialize(),success:function(data){
                        $('#EducationForm')[0].reset();
                        $('#NewEducationModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});