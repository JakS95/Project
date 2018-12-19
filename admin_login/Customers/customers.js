/* For pop-ups on buttons */
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip({
    //trigger : 'hover'
  })
});



/* Auto showing results from search box */
$(document).ready(function(){
  load_data();

  function load_data(query){
    $.ajax({
      url:"server_customer_search.php",
      method:"POST",
      data:{search_result:query},
      success:function(data)
      {
        $('#table-wrapper').html(data);
        $('[data-toggle="tooltip"]').tooltip();
      /*  $('[data-toggle="tooltip"]').on('click', function () {
          $(this).tooltip('hide')
        });*/
      }
    });
  }
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != ''){
      load_data(search);
    }
    else{
      load_data();
    }
  });
});

/* Code for sorting the table by name */
$(document).ready(function(){
  $(document).on('click','#name_sort',function(){
    var sort_info = $(this).attr("class");
    $.ajax({
      url:"server_customer_sort.php",
      method:"POST",
      data:{sort_info:sort_info},
      success:function(data){
        $('#table-wrapper').html(data);
      }
    });
  });
  /*$('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != ''){
      load_data(search);
    }
    else{
      load_data();
    }
  });*/
});

/*$(document).ready(function() {
  $("#myModal").on("hidden.bs.modal", function() {
    $('#customer-form')[0].reset();
    //$(".modal-body textarea").val("");
  });
});*/

/* ajax code for modal when inserting data */
$(document).ready(function(){
   $('#customer_form').on("submit", function(event){
     event.preventDefault();
     if($('#form_name').val() == ""){
       alert("Name is required");
     }else if($('#form_email').val() == ""){
       alert("Email is required");
     }
     else if($('#form_usrname').val() == ""){
       alert("Username is required");
     }
     else if($('#form_paswrd').val() == ""){
       alert("Password is required");
     }
     else {
       $.ajax({  //ajax function
         url:"server_customer_add.php",
         method:"POST",
         data:$('#customer_form').serialize(),
         beforeSend:function(){
           $('#form_add').val("Saving data");
         },
         success:function(data){
           $('#customer_form')[0].reset();
           $('#myModal').modal('hide');
           $('#form_add').val("Save");
           $('#table-wrapper').html(data);
           $('[data-toggle="tooltip"]').tooltip();
         }
       });
     }
   });
});


/* ajax code for modal showing customer data */
$(document).ready(function(){
   $(document).on('click','#view',function(){
     var customer_view = $(this).attr("class");
     $.ajax({
       url:"server_customer.php",
       method:"POST",
       data:{customer_view:customer_view}, // Object
       success:function(data){
         $('#customer_detail').html(data);
         $('#myModal1').modal('show');
       }
     });
   });
});

/* ajax code for deleting a query(customer) */
$(document).ready(function(){
   $(document).on('click','#delete',function(){
     var customer_delete = $(this).attr("class");
     $.ajax({
       url:"server_customer.php",
       method:"POST",
       data:{customer_delete:customer_delete}, // Object
       success:function(data){
         $('#myModalDeleting').modal('show');
         $('#table-wrapper').html(data);
         $('[data-toggle="tooltip"]').tooltip();
       }
     });
   });
});

/* ajax code for editing a query(customer) */
$(document).ready(function(){
   $(document).on('click','#edit',function(){
     var customer_edit = $(this).attr("class");
     $.ajax({
       url:"server_customer.php",
       method:"POST",
       data:{customer_edit:customer_edit}, // Object
       success:function(data){
         $('#myModalEditing').modal('show');
         $('#edit_form').html(data);
         $('[data-toggle="tooltip"]').tooltip();
         //console.log(data);
         //$(data[1]).appendTo('#delete_info');
       }
     });
   });
});


/* Adding to database when done editing */
$(document).ready(function(){
   $('#edit_form').on("submit", function(event){
     console.log("Ne okida");
     event.preventDefault();
     if($('#name').val() == ""){
       alert("Name is required");
     }else if($('#email').val() == ""){
       alert("Email is required");
     }
     else if($('#usrname').val() == ""){
       alert("Username is required");
     }
     else if($('#paswrd').val() == ""){
       alert("Password is required");
     }
     else {
       $.ajax({  //ajax function
         url:"server_customer_add.php",
         method:"POST",
         data:$('#edit_form').serialize(),
         beforeSend:function(){
           $('#button_edit').val("Saving data");
         },
         success:function(data){
           $('#edit_form')[0].reset();
           $('#myModalEditing').modal('hide');
           $('#table-wrapper').html(data);
           $('[data-toggle="tooltip"]').tooltip();
         }
       });
     }
   });
 });
