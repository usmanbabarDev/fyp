<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/main.css" />
  <!-- jQuery Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <title>FYP</title>
</head>
<body>

<?php
  // include db connection
    include '../include/config.php';
  ?>

  <!--*************** Php // Inserting data into database *************** -->
  <?php
    if(isset($_POST['add-catagory'])){
      $PLOTSIZE = $_POST['plotsize'];
      $ANNSUB = $_POST['annsub'];
      $WBILL = $_POST['waterbill'];
      $GBILL = $_POST['garbagebill'];
      $MBILL = $_POST['musjidbill'];
      $ABILL = $_POST['aquiferbill'];
      $SWERBILL = $_POST['seweregeebill'];
      $total = $ANNSUB+$WBILL+$GBILL+$MBILL+$ABILL+$SWERBILL;

      // insert data
      $sql = "INSERT INTO bill_catagory (bill_cat_name, annual_sub, water_bill, garbage_bill, musjid_bill, aquifer_bill, sewerage_bill, total) 
      VALUES ('$PLOTSIZE', '$ANNSUB' , '$WBILL', '$GBILL', '$MBILL', '$ABILL', '$SWERBILL', '$total')";
      mysqli_query($con, $sql);
      //next page after data is entered
      header('Location:bill-catagory.php');
    
    }else{
    echo "Error";
    }
  ?>
  <!---------------------------------------------------------------------------------->

  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Smart Society System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
        aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <!-- <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form> -->
        <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav my-4">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              DASHBORD
            </div>
          </li>
          <li>
            <a href="dashboard.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Members
            </div>
          </li>
          <li>
            <a href="register-member.html" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>Add Member</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>View All Member</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Bilss
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Bill Catgory</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Genrate Bills</span>
            </a>
          </li>
          <!-- event -->
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Event
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Create Event</span>
            </a>
          </li>
          <!-- Annoucemnet -->
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Annoucemnet
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Make Annoucemnet</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas ends-->

  <!-- Mian area -->

   <!-- Click on Modal Button -->
   <button type="button" class="btn btn-primary d-block add-cat" data-bs-toggle="modal" data-bs-target="#modalForm">
    Add Catagory
</button>

<!-- jQuery Data Table -->
<table id="myTable" class="display" style="width:100%">
  <thead>
      <tr>
          <th>ID</th>
          <th>Bill Catagory</th>
          <th>Ann/Sub</th>
          <th>Water Bill</th>
          <th>Garbage Bill</th>
          <th>Musjid/Security/Electric</th>
          <th>Aquifer Bill</th>
          <th>Sewerage Bill</th>
          <th>Total</th>
          <th>Action</th>
      </tr>
  </thead>

  <tbody>
    <!--************ Fetching data form db ************ -->
<?php
    $var = mysqli_query($con, "SELECT * FROM bill_catagory" );
    while($row = mysqli_fetch_array($var)){
      echo " 
      <tr>
      <td>$row[id]</td>
      <td>$row[bill_cat_name]</td>
      <td>$row[annual_sub]</td>
      <td>$row[water_bill]</td>
      <td>$row[garbage_bill]</td>
      <td>$row[musjid_bill]</td>
      <td>$row[aquifer_bill]</td>
      <td>$row[sewerage_bill]</td>
      <td>$row[total]</td>
      <td>
        <a href='update.php?Id=$row[id]' class='btn btn-success'>edit</button>
        <a href='delete.php?Id=$row[id]' class='btn btn-danger'>Del</a>
      </td>
     </tr>
      ";
    }
  ?>
  </tbody>

</table>
<!-- jQuery Data Table ends -->

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bill Catagory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

  <main class="bill-cat">
    <div class="container-fluid">
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card bg-dark mb-4 mt-4 mx-4" id="register-mem-card">
                    <div class="card-body">
                      <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" id="insert_user" method="post" class="form-sample">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label"> Bill Catagory Name</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="plotsize">
                                  <option value="3 Marla">3 Marla</option>
                                  <option value="5 Marla">5 Marla</option>
                                  <option value="7 Marla">7 Marla</option>
                                  <option value="10 Marla">10 Marla</option>
                                  <option value="12 Marla">12 Marla</option>
                                  <option value="15 Marla">15 Marla</option>
                                  <option value="1 kanal">1 Kanal</option>
                                  <option value="2 kanal">2 Kanal</option>
                                  <option value="3 kanal">3 Kanal</option>
                                  <option value="4 kanal">4 Kanal</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Ann/Sub</label>
                              <div class="col-sm-9">
                                <input type="text" name="annsub" class="form-control" required />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Water Bill</label>
                              <div class="col-sm-9">
                                <input type="text" name="waterbill" class="form-control" required />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Garbage Bill</label>
                              <div class="col-sm-9">
                                <input type="text" name="garbagebill" class="form-control" required />
                              </div>
                            </div>
                          </div>
                        
                            <div class="col-md-4">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Musjid/Security/Electric</label>
                                <div class="col-sm-9">
                                  <input type="text" name="musjidbill" class="form-control" required />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Aquifer Bill</label>
                                <div class="col-sm-9">
                                  <input type="text" name="aquiferbill" class="form-control" required />
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Sewerage Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="seweregeebill" class="form-control" required />
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <button class="btn btn-success submit-btn" type="submit" name="add-catagory" id="">Add Catagory</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </main>
              </div>
        </div>
    </div>
</div>
<!-- model ends -->



  <!-- /main area -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jQuery Data table -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
      } );
</script>
<!-- jQuery Data table ends-->

  <!-- Main Js -->
  <script src="./js/main.js"></script>
</body>
</html>