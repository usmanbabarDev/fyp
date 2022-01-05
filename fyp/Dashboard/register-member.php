<?php
  // include db connection
    include '../include/config.php';
    include '../include/header.php';
  ?>

      <!--*************** Php // Inserting data into database *************** -->
  <?php
    if(isset($_POST['add-mem'])){
      //echo 'usman';
      
      $title = $_POST['title'];
      
      $fname  = $_POST['fname'];

      //echo $title;
      //echo $fname;
      $lname  = $_POST['lname'];
      $mob  = $_POST['mob'];
      $phon  = $_POST['phon'];
      $email  = $_POST['email'];
      $adrs  = $_POST['adrs'];
      $remark  = $_POST['remark'];
      
      //moving photo to folder//
      $img_loc = $_FILES['pho']['tmp_name'];
      $img_name =$_FILES['pho']['name'];
      $img_des ="uploads/".$img_name;
      move_uploaded_file($img_loc, 'uploads/' .$img_name); 
      //----------------------//

      $memid  = $_POST['memid'];
      $plotnumber  = $_POST['plotnumber'];
      $plotpart  = $_POST['plotpart'];
      $block  = $_POST['block'];
      $plottype  = $_POST['plottype'];
      $plotsize  = $_POST['plotsize'];
      $houseqty  = $_POST['houseqty'];
      $chargs  = $_POST['chargs'];
      $annsub  = $_POST['annsub'];
      $waterbill  = $_POST['waterbill'];
      $musjidbill  = $_POST['musjidbill'];
      $aquagebill  = $_POST['aquagebill'];
      $seweregeebill  = $_POST['seweregeebill'];
      $garbagebill  = $_POST['garbagebill'];
      $totalbill  = $_POST['totalbill'];
      $ownerrent  = $_POST['ownerrent'];
      $conndate  = $_POST['conndate'];
      $connfee  = $_POST['connfee'];
      $stat  = $_POST['stat'];
      $issuedate  = $_POST['issuedate'];
      $statact  = $_POST['statact'];
      
      // inserting data
      $sql = "INSERT INTO register_mem (title, fname,	lname,	mob,	phone,	email,	adres,	remark,	photo,	
      mem_id,	plotnum,	plot_part,	blck,	plot_type,	bill_cat_name,	house_shop_qty,	charges,	ann_sub,	
      w_bill,	m_bill,	a_bill,	s_bill,	b_bill,	monthly_b,	owner_rentee,	con_date,	con_fee,	con_fee_status,	bill_iss_date,	con_status) 
      VALUES ('$title', '$fname', '$lname', '$mob', '$phon', '$email', '$adrs', '$remark', '$img_des', '$memid', '$plotnumber', '$plotpart',
      '$block', '$plottype', '$plotsize', '$houseqty', '$chargs', '$annsub', '$waterbill', '$musjidbill', '$aquagebill', '$seweregeebill', 
      '$garbagebill', '$totalbill', '$ownerrent', '$conndate', '$connfee', '$stat', '$issuedate', '$statact')";
      
      mysqli_query($con, $sql);
      //next page after data is entered
      header('Location:index.php');
    
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
  <!-- /top navigation bar -->
  
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
            <a href="index.php" class="nav-link px-3 active">
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
            <a href="#add-member" class="nav-link px-3">
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
  <!-- offcanvas -->

  <!-- Mian area -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="insert_user" method="post" class="form-sample">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card bg-dark mb-4 mt-4 mx-4" id="register-mem-card">
                <div class="card-body">
                  <h3 class="page-title text-white mb-5"> Register New Member </h3>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="title"  >
                            <option value="">--Select Option--</option>
                              <option value="Mr">Mr</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Miss">Miss</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                            <input type="text" name="mob" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" name="phon" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" name="adrs" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Remarks</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="remark"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Photo</label>
                          <div class="input-group uploadgroups col-sm-9">
                            <input type="file" name="pho" class="file-upload-default overwrite-defult">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- panel 2 -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card bg-dark mb-4 mx-4" id="register-mem-card">
                <div class="card-body">
                  <h3 class="page-title text-white mb-5"> Plot info </h3>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Member Id</label>
                          <div class="col-sm-9">
                            <input type="text" name="memid" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Plot Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="plotnumber" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Plot Part</label>
                          <div class="col-sm-9">
                            <input type="text" name="plotpart" class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Block</label>
                          <div class="col-sm-9">
                            <input type="text" name="block" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Plot Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="plottype"  >
                            <option value="">--Select Option--</option>
                              <option value="Commercial">Commercial</option>
                              <option value="Residentail">Residentail</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- panel 3 -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card bg-dark mb-4 mx-4" id="register-mem-card">
                <div class="card-body">
                  <h3 class="page-title text-white mb-5"> Billing info </h3>
                  <!-- <div class="hidden" id="errorMassage"></div> -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bill Catagory</label>
                          <div class="col-sm-9">
                            <!-- <select class="form-control" name="plotsize"  >
                            <option value="">--Select Option--</option>
                              <option value="3 Marla">3 Marla</option>
                              <option value="5 Marla">5 Marla</option>
                              <option value="7 Marla">7 Marla</option>
                              <option value="10 Marla">10 Marla</option>
                              <option value="12 Marla">12 Marla</option>
                              <option value="15 Marla">15 Marla</option>
                              <option value="1 kanal">1 Kanal</option>
                              <option value="2 kanal">2 Kanal</option>
                              <option value="3 kanal">3 Kanal</option>
                              <option value="3 kanal">4 Kanal</option>
                            </select> -->

                            <select id="bill_cats" name="plotsize" class="form-control" >
			                      	<option value="" selected="selected">--Select Option--</option>
			                      	<?php
			                      	$sql = "SELECT id, bill_cat_name, annual_sub, water_bill, garbage_bill, musjid_bill, aquifer_bill, sewerage_bill  FROM bill_catagory";
			                      	$resultset = mysqli_query($con, $sql);
			                      	while( $rows = mysqli_fetch_assoc($resultset) ) { 
			                      	?>
			                      	<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["bill_cat_name"]; ?></option>
			                      	<?php }	?>
			                      </select>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">House/Shop Qty</label>
                          <div class="col-sm-9">
                            <input type="text"  name="houseqty" id="houseqty" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Charges</label>
                          <div class="col-sm-9">
                            <input type="text" id="houseqtychose"  name="chargs" class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="hidden" id="errorMassage"></div>
	                    <table class="table table-striped hidden" id="recordListing">
	                    	<thead>
	                    	  <tr>
	                    		<th>Id</th>
	                    		<th>Name</th>
	                    		<th>Age</th>
	                    		<th>Salary</th>
	                    	  </tr>
	                    	</thead>
	                    	<tbody>
	                    	  <tr>
	                    		<td id="annualSub"></td>
	                    		<td id="waterBill"></td>
	                    		<td id="Gbill"></td>
	                    		<td id="Mbill"></td>
	                    	  </tr>
	                    	</tbody>			
	                    </table>  -->

                      <!-- *******************To be done************************ -->
                    <!-- <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Shop Qty</label>
                          <div class="col-sm-9">
                            <input type="text" name="shopeqty" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Choose</label>
                          <div class="col-sm-9">
                            <input type="text"  name="" class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div> -->
                     <!-- *******************To be done************************ -->
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ann/Sub</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="annualSub" name="annsub"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Water Bill</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="waterBill" name="waterbill"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Garbage Bill</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="Gbill" name="garbagebill"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Musjid/Security/Electric</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="Mbill" name="musjidbill"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Aquifer Bill</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="gargBill" name="aquagebill"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Sewerage Bill</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="seweregeebill"   value="" id="swerBill" class="form-control"   />
                                  </div>
                                </div>
                              </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Monthly Bill</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id="totalbill" name="totalbill"   class="form-control"   />
                          </div>
                        </div>
                      </div>
                      </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- panel 4 -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card bg-dark mb-4 mx-4" id="register-mem-card">
                <div class="card-body">
                  <h3 class="page-title text-white mb-5"> Connection info </h3>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Owner/Rentee</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="ownerrent"  >
                            <option value="">--Select Option--</option>
                              <option value="Owner">Owner</option>
                              <option value="Rantee">Rantee</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Conn. Date</label>
                          <div class="col-sm-9">
                            <input type="text" name="conndate" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Conn. Fee</label>
                          <div class="col-sm-9">
                            <input type="text" name="connfee" class="form-control"   />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Conn Fee Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="stat"  >
                            <option value="">--Select Option--</option>
                              <option value="unpaid">Unpaid</option>
                              <option value="paid">paid</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bill Issue Date</label>
                          <div class="col-sm-9">
                            <input type="text" name="issuedate" class="form-control"   />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="statact"  >
                            <option value="">--Select Option--</option>
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="add-mem" class="btn btn-primary">Add Member</button>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                              </form>
    </div>
  </main>

  <?php
  // include footer connection
    include '../include/footer.php';
  ?>