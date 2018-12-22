$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

/* Auto showing data from search box */
$(document).ready(function(){

  load_data();

  function load_data(query){
    $.ajax({
      url:"server_product_search.php",
      method:"POST",
      data:{search_text:query},
      success:function(data){
        $('#table-wrapper').html(data);
        $('[data-toggle="tooltip"]').tooltip();
      }
    });
  }
  $('#search_text').keyup(function(){
    var search_value = $(this).val();
    if(search_value != ''){
      load_data(search_value);
    }
    else{
      load_data();
    }
  });
});

/* Code for sorting the table by name */
$(document).ready(function(){
  $(document).on('click','#title_sort',function(){
    var search_text = $("#search_text").val();
    var sort_info = $(this).attr("class");
    $.ajax({
      url:"server_product_sort.php",
      method:"POST",
      data:{sort_info:sort_info,search_text:search_text},
      success:function(data){
        $('#table-wrapper').html(data);
        $('[data-toggle="tooltip"]').tooltip();
      }
    });
  });
});


/* ajax code for modal when inserting data */
$(document).ready(function(){
  $('#product_form').on("submit",function(event){
    event.preventDefault();
    if($("#form_title").val() == ""){
      alert("Title is required");
    }else if($("#form_author").val() == ""){
      alert("Author is required");
    }else if($("#form_genre").val() == ""){
      alert("Genre is required");
    }else if($("#form_date").val() == ""){
      alert("Date is required");
    }else if($("#form_ISBN").val() == ""){
      alert("ISBN is required");
    }else{
      $.ajax({//ajax function for calling the file for adding product
          url:"server_product_add.php",
          method:"POST",
          data:$('#product_form').serialize(),
          beforeSend:function(){
            $('#form_add').val("Saving data");
          },
          success:function(data){
            $('#product_form')[0].reset();
            $('#myModalAdd').modal('hide');
            $('#form_add').val("Save");
            $('#table-wrapper').html(data);
            console.log(data);
            $('[data-toggle="tooltip"]').tooltip();
          }
      });
    }
  })
});

/* ajax code for modal showing customer data */
$(document).ready(function(){
  $(document).on('click','#view',function(){
    var product_view = $(this).attr("class");
    $.ajax({
      url:"server_product_view_delete_edit.php",
      method:"POST",
      data:{product_view:product_view},
      success:function(data){
        $('#product_detail').html(data);
        $('#myModalView').modal('show');
      }
    });
  });
});


/* ajax code for deleting a query(customer) */
$(document).ready(function(){
   $(document).on('click','#delete',function(){
     var product_delete = $(this).attr("class");
     var search_text = $("#search_text").val();
     $.ajax({
       url:"server_product_view_delete_edit.php",
       method:"POST",
       data:{product_delete:product_delete,search_text:search_text}, // Object
       success:function(data){
         $('#myModalDeleting').modal('show');
         $('#table-wrapper').html(data);
         $('[data-toggle="tooltip"]').tooltip();
       }
     });
   });
});




/* ajax code for editing a book information */
$(document).ready(function(){
  $(document).on('click', '#edit', function(){
    var product_edit = $(this).attr("class");
    $.ajax({
      url:"server_product_view_delete_edit.php",
      method:"POST",
      data:{product_edit:product_edit},
      success:function(data){
        $('#myModalEditing').modal('show');
        $('#edit_form').html(data);
        $('[data-toggle="tooltip"]').tooltip();
      }
    });
  });
});

/* Adding to database when done editing */
$(document).ready(function(){
  $('#edit_form').on("submit",function(event){
    event.preventDefault();
    if($("#title").val() == ""){
      alert("Title is required");
    }else if($("#author").val() == ""){
      alert("Author is required");
    }else if($("#genre").val() == ""){
      alert("Genre is required");
    }else if($("#date").val() == ""){
      alert("Date is required");
    }else if($("#ISBN").val() == ""){
      alert("ISBN is required");
    }else{
      var search_text = $("#search_text").val();
      var dataString = $('#edit_form').serializeArray(); // Array of objects from the form
      $.ajax({//ajax function for calling the file for adding product
          url:"server_product_add.php",
          method:"POST",
          data:{title:dataString[0]['value'],// Sending each input form the form separately and after that sending the search_text
              author:dataString[1]['value'],
              genre:dataString[2]['value'],
              date:dataString[3]['value'],
              ISBN:dataString[4]['value'],
              short_descr:dataString[5]['value'],
              search_text:search_text },
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
