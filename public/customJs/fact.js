$(document).ready(function(){
      $.noConflict();

      // var FactList = $('#FactList').DataTable({
      //       processing : true,
      //       serverSide : true,
      //       colReorder : true,
      //       stateSave  : true,
      //       ajax:{
      //             type  : "GET",
      //             url   : "/fact"
      //       },
      //       columns:[
      //             {data : "Icon"},
      //             {data : "HappyClients"},
      //             {data : "Project"},
      //             {data : "SupportHours"},
      //             {data : "HardWorkers"},
      //             {data : "Description"},
      //             {date : "action" , name : 'action'},
      //       ],
      // });

      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewFactModal').modal('show');
      });

      // $('#submitBtn').on('click',function(e){
      //       e.preventDefault();

      //       $.ajax({
      //             type  : "POST",
      //             url   : "/fact",
      //             data  : $('#FactForm').serialize(),success:function(data){
      //                   $('#FactForm')[0].reset();
      //                   $('#NewFactModal').modal('hide');
      //             },
      //             error:function(data){
      //                   console.log('Error while added new Fact Item'+data);
      //             },
      //       });
      // });
});