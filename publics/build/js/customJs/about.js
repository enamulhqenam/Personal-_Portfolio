$(document).ready(function(){
      $.noConflict();

      // var AboutList =$('#AboutList').DataTable({
      //       ajax:{
      //             type : 'GET',
      //             url  : '/about',
      //       },
      //       columns :[
      //             {data : "Name"},
      //             {date : "AbountMe"},
      //             {date : "Title"},
      //             {date : "Description"},
      //             {date : "Photo"},
      //             {date : "Email"},
      //             {date : "CIty"},
      //             {date : "Website"},
      //             {date : "Freelance"},
      //             {date : "action" , name : 'action'},
      //       ],
      // });

      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewAboutModal').modal('show');
      });
      
})