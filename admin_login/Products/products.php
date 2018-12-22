<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="products.css">
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
                <a class="nav-link active" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Customers/customers.php">
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
            <h1 class="h2"> Products </h1>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingUnfiled">
              <div class="float-left">
                <span data-toggle="modal" data-target="#myModalAdd" data-backdrop="static" data-keyboard="false">
                  <button class="btn btn-light btn-md m-0 mr-3 p-2" title="Add new book" data-toggle="tooltip" type="button"> <i class="material-icons" style="font-size:25px;">add</i>
                  </button>
                </span>
              </div>
              <div class="float-right">
                <div class="search-box">
                  <i class="material-icons">search</i>
                  <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search&hellip;" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="table-wrapper">
              <!--  <table class="table table-striped table-hover table-boarded">
                  <thead>
                    <tr>
                      <th>Title <i class="fa fa-sort"></i> </th>
                      <th>Author</th>
                      <th>Release date</th>
                      <th>Genre</th>
                      <th>ISBN</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Anna Karenina</td>
                      <td>Leo Tolstoy</td>
                      <td>1878</td>
                      <td>Realistic novel</td>
                      <td>34256</td>
                      <td>
                        <a class="view" title="View" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip" href="#"> <i class="fa fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Steppenwolf</td>
                      <td>Hermann Hesse</td>
                      <td>1927</td>
                      <td>Autobiographical</td>
                      <td>78691</td>
                      <td>
                        <a class="view" title="View" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip" href="#"> <i class="fa fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>The Fortress</td>
                      <td>Mesa Selimovic</td>
                      <td>1970</td>
                      <td>Drama</td>
                      <td>16465</td>
                      <td>
                        <a class="view" title="View" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip" href="#"> <i class="fa fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>The Alchemist</td>
                      <td>Paulo Coelho</td>
                      <td>1988</td>
                      <td>Novel</td>
                      <td>57892</td>
                      <td>
                        <a class="view" title="View" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip" href="#"> <i class="fa fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>

                </table> -->
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
    <script type="text/javascript" src="products.js">
    </script>
  </body>
</html>



<!-- Modal for adding new books to the library database -->
<div id="myModalAdd" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="ModalLabel">Add Book</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
         <!--<div class="controls"> -->
       <div class="modal-body">
         <form id="product_form" method="post" role="form">

           <div class="container">
             <div class="row">
               <div class="col-xl-12">
                 <h4 class="h4 mb-4">Fill the informations about specific book</h4>
                 <div class="controls px-3">

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_title">Title *</label>
                         <input id="form_title" type="text" name="title" class="form-control" placeholder="Please enter the title *">

                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_author">Author *</label>
                         <input id="form_author" type="text" name="author" class="form-control" placeholder="Please enter the author *">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_genre">Genre *</label>
                         <input id="form_genre" type="text" name="genre" class="form-control" placeholder="Please enter the genre *">

                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label for="form_date">Date *</label>
                         <input id="form_date" type="date" name="date" class="form-control" placeholder="Please enter the date *">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-ISBN">
                         <label for="form_ISBN">ISBN *</label>
                         <input id="form_ISBN" type="text" name="ISBN" class="form-control" placeholder="Please enter the ISBN *">

                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-12 mt-3">
                       <div class="form-group">
                         <label for="form_descr">Message</label>
                         <textarea id="form_descr" class="form-control" name="short_descr" placeholder="Description about the book" rows="4"></textarea>
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


<!-- Modal for View detailed book description -->
<div id="myModalView" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Book Details</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="product_detail">

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


<!-- Modal for Deleting books -->
<div id="myModalDeleting" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Report</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="delete_info">
      <p>Book successfully deleted</p>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>





<!-- Modal for Editing book informations -->
<div id="myModalEditing" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Edit book</h4>
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
