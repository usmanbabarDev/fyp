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
  <style>
    #myTable_wrapper{
        max-width: 100% !important;
    }
</style>
</head>



<body>
<!-- Including header -->
<?php 
include_once('../include/header.php');
// include db connection
include '../include/config.php';
?>
<!-- Including header -->

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
            <a href="register-member.php" class="nav-link px-3">
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

  <main class="mt-5 pt-3">
 <div class="container-fluid">
     <!-- jQuery Data Table -->
<table id="myTable" class="display" style="width:100%">
  <thead>
      <tr>
        <th>title</th>
        <th>fname</th>
        <th>lname</th>
        <th>mob</th>
        <th>phone</th>
        <th>email</th>
        <th>adres</th>
        <th>remark</th>
        <th>photo</th>
        <th>mem_id</th>
        <th>plotnum</th>
        <th>plot_part</th>
        <th>blck</th>
        <th>plot_type</th>
        <th>bill_cat_name</th>
        <th>house_shop_qty</th>
        <th>charges</th>
        <th>ann_sub</th>
        <th>w_bill</th>
        <th>m_bill</th>
        <th>a_bill</th>
        <th>s_bill</th>
        <th>b_bill</th>
        <th>monthly_b</th>
        <th>owner_rentee</th>
        <th>con_date</th>
        <th>con_fee</th>
        <th>con_fee_status</th>
        <th>bill_iss_date</th>
        <th>con_status</th>
      </tr>
  </thead>

  <tbody>
    <!--************ Fetching data form db ************ -->
<?php
    $var = mysqli_query($con, "SELECT * FROM register_mem" );
    while($row = mysqli_fetch_array($var)){
      echo " 
      <tr>
            <td>$row[title]</td>
            <td>$row[fname]</td>
            <td>$row[lname]</td>
            <td>$row[mob]</td>
            <td>$row[phone]</td>
            <td>$row[email]</td>
            <td>$row[adres]</td>
            <td>$row[remark]</td>
            <td><img src='$row[photo]' width='100px' height ='100px' class='card-img-top' alt='image'></td>
            <td>$row[mem_id]</td>
            <td>$row[plotnum]</td>
            <td>$row[plot_part]</td>
            <td>$row[blck]</td>
            <td>$row[plot_type]</td>
            <td>$row[bill_cat_name]</td>
            <td>$row[house_shop_qty]</td>
            <td>$row[charges]</td>
            <td>$row[ann_sub]</td>
            <td>$row[w_bill]</td>
            <td>$row[m_bill]</td>
            <td>$row[a_bill]</td>
            <td>$row[s_bill]</td>
            <td>$row[b_bill]</td>
            <td>$row[monthly_b]</td>
            <td>$row[owner_rentee]</td>
            <td>$row[con_date]</td>
            <td>$row[con_fee]</td>
            <td>$row[con_fee_status]</td>
            <td>$row[bill_iss_date]</td>
            <td>$row[con_status]</td>
     </tr>
      ";
    }
  ?>
  </tbody>

</table>
<!-- jQuery Data Table ends -->
 </div>
  </main>

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