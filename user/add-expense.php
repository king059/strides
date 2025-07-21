<?php include ("layout/header.php"); ?>

  <!-- [ Main Content ] start -->
    <div class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h4 class="m-b-10"> New Expense
                                </h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                <li class="breadcrumb-item">New Expense</li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>

<div class="row justify-content-center"> 
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body m-4">
      <div class="card-header">
        <h5 class="card-title">Create New Expense</h5>
      </div>
      
    <form method="POST" enctype="multipart/form-data" accept-charset="UTF-8" class="needs-validation" novalidate>
            <div class="card-body">

                <h3 class="sub-title">General Info</h3><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title" class="form-label">Expense Title</label><span class="text-danger">*</span>
                            <div class="form-icon-user">
                                <input class="form-control" required="required" placeholder="Enter Expense Title" name="title" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <label for="contact" class="form-label">Date</label> <span class="text-danger">*</span>  
                    <input id="expense-time" name="expense_time" class="form-control" type="time" required>
                </div>
            </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="amount" class="form-label">Amount</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <input class="form-control" step="0.01" min="1" required="required" placeholder="1000.00" name="amount" type="number">
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-md-4 form-group mt-4">
                <label for="password_switch">Login is enable</label>
                <div class="form-check form-switch custom-switch-v1 float-end">
                    <input type="checkbox" name="password_switch" class="form-check-input input-primary pointer" value="on" id="password_switch">
                    <label class="form-check-label" for="password_switch"></label>
                </div>
            </div> -->
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="currency" class="form-label">Currency</label>
                <div class="form-icon-user">
                    <select class="dropdown form-control" id="currency">
                        <optgroup label="Currency">
                            <option value="USD">USD $</option>
                            <option value="EUR" selected>EURO €</option>
                             <option value="NGN">NGN ₦</option>
                            <option value="YUAN">YUAN ¥</option>
                        </optgroup>    
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="category" class="form-label">Category</label>
                <div class="form-icon-user">
                    <select class="dropdown form-control" id="category">
                        <optgroup label="Company">
                            <option value="Marketing">Marketing</option>
                            <option value="Supplies" selected>Supplies</option>
                            <option value="Utilities">Utilities</option>
                            <option value="Travel">Travel</option>
                        </optgroup>
                        <optgroup label="Staff">
                            <option value="Salary">Salary</option>
                            <option value="Meals" selected>Meals</option>
                             <option value="Leave">Leave</option>
                        </optgroup>        
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="payment" class="form-label">Payment Gateway</label>
                <div class="form-icon-user">
                    <select class="dropdown form-control" id="payment">
                            <option value="cash">Cash</option>
                            <option value="transfer">Bank Transfer</option>
                            <option value="card" selected>Company Card</option>
                            <option value="personal_funds">Personal Funds</option>   
                    </select>
                </div>
            </div>
        </div>
            </div>


            <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="Vendor" class="form-label">Vendor</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <input class="form-control" list="vendor-options" required="required" placeholder="Enter Vendor" name="Vendor" type="text">
                </div>
                <datalist id="vendor-options">
                    <option value="Amazon">
                    <option value="Apple">
                    <option value="Adobe">
                    <option value="Dell">
                    <option value="Facebook">
                    <option value="Figma">
                    <option value="Google">
                    <option value="Microsoft">
                    <option value="Uber">
                    <option value="Zoom">
                </datalist>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="team" class="form-label">Department/Team</label> <span class="text-danger">*</span>  
                <div class="form-icon-user">
                            <input class="form-control" list="team-options" required="required" placeholder="Enter Team Name" name="team" type="text">
                        </div>
                        <datalist id="team-options">
                            <option value="Finance">
                            <option value="Auditor">
                            <option value="Software Enginers">
                            <option value="Project Managment">
                            <option value="Marketers">
                            <option value="cloud Enginers">
                            <option value="Server Managment">
                            <option value="Employment">
                        </datalist>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="note" class="form-label">Note</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <textarea class="form-control" cols="3" rows="2" required="required" placeholder="e.g Team dinner with client" name="note"></textarea>
                </div>
            </div>
        </div>
            </div>
            <h3 class="sub-title">Optional Info</h3><br>
            <div class="row">
                        <div class="col-lg-4 col-md-4 form-group col-sm-6 m-4">
                        <label for="Reimburse">Reimbursable?</label>
                        <div class="form-check form-switch custom-switch-v1 float-end mr-4">
                            <input type="checkbox" name="Reimburse" class="form-check-input input-primary pointer" value="on" id="Reimburse">
                            <label class="form-check-label" for="Reimburse"></label>
                        </div>
                    </div>
                        <div class="col-lg-4 col-md-4 form-group col-sm-6 m-4">
                        <label for="Tax">Tax/VAT Included?</label>
                        <div class="form-check form-switch custom-switch-v1 float-end mr-4">
                            <input type="checkbox" name="Tax" class="form-check-input input-primary pointer" value="on" id="Tax">
                            <label class="form-check-label" for="Tax"></label>
                        </div>
                    </div>
                        <div class="col-lg-4 col-md-4 form-group col-sm-6 m-4">
                        <label for="Recurring">Recurring Expense?</label>
                        <div class="form-check form-switch custom-switch-v1 float-end mr-4">
                            <input type="checkbox" name="Recurring" class="form-check-input input-primary pointer" value="on" id="Recurring">
                            <label class="form-check-label" for="Recurring"></label>
                        </div>
                    </div>

                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_phone" class="form-label">Contact </label>        <input class="form-control" placeholder="Enter Contact " pattern="^\+\d{1,3}\d{9,13}$"  name="billing_phone" type="text">
                <div class=" text-xs text-danger">
                    Please use with country code. (ex. +91)
                </div>
            </div>
        </div> -->

            </div>
        <div class="row">

        <div id="drop-area" class="border-2 border-dashed border-gray-400 p-5 rounded-xl text-center transition hover:bg-gray-100 relative" ondragover="event.preventDefault();" ondrop="handleDrop(event)">

      <p class="text-lg font-semibold text-gray-700">Uploaded Receipt</p>
      <p class="text-sm text-danger mb-2">make sure the Receipt is valid</p>

      <input type="file" id="fileInput" name="file" accept=".pdf, .csv, .png, application/pdf, text/csv, image/png" class="form-control d-none" onchange="handleFile(this)">
             
      <button type="button" class="btn btn-outline-primary mt-2"
              onclick="document.getElementById('fileInput').click()">Select File</button>

      <!-- Preview area -->
      <div id="file-preview" class="mt-4">
        <!-- Image preview will be inserted here -->
      </div>
    </div>    
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" onclick="window.history.back();">
    <input type="submit" value="Create " class="btn btn-primary">
</div>
</form>
      </div>
    </div>
  </div>
</div>

<?php include ('layout/footer.php'); ?>