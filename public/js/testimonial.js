
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewTestimonialModal').modal('show');
      });
      $('#formREsetBtn').on('click',function(e){
            e.preventDefault();
            $('#TestimonialForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Testimonial",
                  data: $('#TestimonialForm').serialize(),success:function(data){
                        $('#TestimonialForm')[0].reset();
                        $('#NewTestimonialModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});