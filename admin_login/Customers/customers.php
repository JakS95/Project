<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="customers.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!--<script src="js/jquery.min.js"></script> -->
    <!--<script src="js/bootstrap.min.js"></script> -->
  </head>
  <body>

    <nav class="navbar navbar-light fixed-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Library</a>
      <input class="form-control form-control-light w-100" type="text" placeholder="Search">
      <ul class="navbar-nav px-md-auto px-lg-3">
        <li class="nav-item text-nowrap col-md-2">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="../dashboard.html">
                  <span data-feather="home"></span>
                  Dashboard <!--<span class="sr-only">(current)</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Products/products.php">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Customers </h1>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingUnfiled">
              <div class="float-left">
                <span data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                  <button class="btn btn-light btn-md m-0 mr-3 p-2" title="Add new customer" data-toggle="tooltip"  type="button"> <i class="material-icons" style="font-size:25px;">add</i>
                  </button>
                </span>
              </div>


              <div class="float-right">
                <div class="search-box">
                  <i class="material-icons">search</i>
                  <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search&hellip;">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="table-wrapper">
                <!-- Here comes the table that will be loaded after in jQuery function -->
              </div>
            </div>

          </div>

        </main>
      </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script type="text/javascript" src="customers.js">
    </script>
  </body>
</html>











<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="ModalLabel">Add Customer</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
         <!--<div class="controls"> -->
       <div class="modal-body">
         <form id="customer_form" method="post" role="form">

           <div class="container">
             <div class="row">
               <div class="col-xl-12">
                 <h4 class="h4 mb-4">Fill the informations about specific customer</h4>
                 <div class="controls px-3">

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_name">Name *</label>
                         <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter the name *">

                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_email">Email *</label>
                         <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter the email *">

                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_usrname">Username *</label>
                         <input id="form_usrname" type="text" name="usrname" class="form-control" placeholder="Please enter the username *">

                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_paswrd">Password *</label>
                         <input id="form_paswrd" type="password" name="paswrd" class="form-control" placeholder="Please enter the password *">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="form_message">Message</label>
                         <textarea id="form_message" class="form-control" placeholder="Message about the customer" rows="4"></textarea>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-4">
                       <input type="submit" class="btn btn-success" value="Save" name="add_customer" id="form_add">
                     </div>
                   </div>

                     <!--</div>-->

                 </div>
               </div>
             </div>
           </div>


         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
       </div>

     </div>
   </div>
</div>



<div id="myModal1" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Customer Details</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="customer_detail">

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


<div id="myModalDeleting" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Report</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="delete_info">
      <p>Customer successfully deleted</p>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>



<div id="myModalEditing" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Edit customer</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="edit_info">
     <form id="edit_form" method="post">
     </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-primary" id="button_edit" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>






<!--
 <div id="myModalEditing" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <h4 class="modal-title">Edit customer</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    //<div class="modal-body" id="edit_info">
    <form id="edit_form" method="post">
    </form>
    //</div>
    <div class="modal-footer">
     <button type="button" class="btn btn-primary" id="button_edit" data-dismiss="modal">Save</button>
    </div>
   </div>
 </div>
</div>-->
