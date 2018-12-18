
/* For pop-ups on buttons */
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip({
    //trigger : 'hover'
  })
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
         $('#table-wrapper').html(data);
         $('#myModalDeleting').modal('show');
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
         $('#edit_form').html(data);
         $('#myModalEditing').modal('show');
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
         }
       });
     }
   });
 });
