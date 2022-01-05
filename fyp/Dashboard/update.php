<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/main.css" />
  <title>FYP</title>
</head>

<body>


<!--*************** fetching data from database *************** -->
<?php
  // include db connection
    include '../include/config.php';
$ID =$_GET['Id'];
$Record = mysqli_query($con , "SELECT * FROM bill_catagory WHERE Id =$ID");
$data = mysqli_fetch_array($Record);
?>
<!--****************************** -->


  <!--*************** Php // updating data into database *************** -->
  <?php
 // echo "before";
    if(isset($_POST['update-catagory'])){
  //  echo "Before 2";
     $PLOTSIZE = $_POST['plotsize'];
     $ANNSUB = $_POST['annsub'];
     $WBILL = $_POST['waterbill'];
     $GBILL = $_POST['garbagebill'];
     $MBILL = $_POST['musjidbill'];
     $ABILL = $_POST['aquiferbill'];
     $SWERBILL = $_POST['seweregeebill'];
     $total = $ANNSUB+$WBILL+$GBILL+$MBILL+$ABILL+$SWERBILL;
      // update data
      mysqli_query($con, "UPDATE  bill_catagory SET bill_cat_name = '$PLOTSIZE' , annual_sub = '$ANNSUB' , water_bill = '$WBILL' ,
      garbage_bill = '$GBILL' , musjid_bill = '$MBILL' , aquifer_bill = '$ABILL' , sewerage_bill = '$SWERBILL' , total = '$total' WHERE Id = $ID");

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
            <a href="index.html" class="nav-link px-3 active">
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
            <a href="bill-catagory.php" class="nav-link px-3">
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
  <!-- offcanvas -->

  <!-- Mian area -->
  <!--***************Model for update*************** -->

  <!-- <div class="modal fade" id="modalFormUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Bill Catagory</h5>
          <a href="bill-catagory.php" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
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
                          <form action="<?php echo $_SERVER['PHP_SELF']; ?>?Id=<?=$_GET['Id']?>" id="insert_user" method="post"
                            class="form-sample">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label"> Bill Catagory Name</label>
                                  <div class="col-sm-9">
                                    <select class="form-control" name="plotsize">
                                      <option value="3 Marla" <?php if($data['bill_cat_name']=="3 Marla") echo 'selected="selected"'; ?> >3 Marla</option>
                                      <option value="5 Marla" <?php if($data['bill_cat_name']=="5 Marla") echo 'selected="selected"'; ?> >5 Marla</option>
                                      <option value="7 Marla" <?php if($data['bill_cat_name']=="7 Marla") echo 'selected="selected"'; ?> >7 Marla</option>
                                      <option value="10 Marla" <?php if($data['bill_cat_name']=="10 Marla") echo 'selected="selected"'; ?> >10 Marla</option>
                                      <option value="12 Marla" <?php if($data['bill_cat_name']=="12 Marla") echo 'selected="selected"'; ?> >12 Marla</option>
                                      <option value="15 Marla" <?php if($data['bill_cat_name']=="15 Marla") echo 'selected="selected"'; ?> >15 Marla</option>
                                      <option value="1 kanal" <?php if($data['bill_cat_name']=="1 kanal") echo 'selected="selected"'; ?> >1 Kanal</option>
                                      <option value="2 kanal" <?php if($data['bill_cat_name']=="2 kanal") echo 'selected="selected"'; ?> >2 Kanal</option>
                                      <option value="3 kanal" <?php if($data['bill_cat_name']=="3 kanal") echo 'selected="selected"'; ?> >3 Kanal</option>
                                      <option value="4 kanal" <?php if($data['bill_cat_name']=="4 kanal") echo 'selected="selected"'; ?> >4 Kanal</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Ann/Sub</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="annsub" value="<?php echo $data['annual_sub'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Water Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="waterbill" value="<?php echo $data['water_bill'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Garbage Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="garbagebill" value="<?php echo $data['garbage_bill'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Musjid/Security/Electric</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="musjidbill" value="<?php echo $data['musjid_bill'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Aquifer Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="aquiferbill" value="<?php echo $data['aquifer_bill'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Sewerage Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="seweregeebill" value="<?php echo $data['sewerage_bill'] ?>"
                                      class="form-control" required />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <button class="btn btn-success submit-btn" type="submit" name="update-catagory"
                                  id="">Update Catagory</button>
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
  <!-- </div> -->

  <!--***************Model for update ends*************** -->

  <!-- /main area -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="./js/main.js"></script>
</body>

</html>