<?php include ('layout/header.php'); ?>

    <!-- [ Main Content ] start -->
    

    <div class="dash-container">                             
        <div class="dash-content">
            <div class="card">
                                        <div class="card-body">
                                            <div class="card-header">

                                    <h5 class="mt-1 mb-0">AI Search</h5>
                                </div>
                                    
                                    <div class="row mt-4" style="box-shadow: 10%;">                                      
                                <input  style="border-radius: 20%; border:0;" type="search" placeholder="Ask anything in finance or audit..." />                            
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="notificationCard">
                            <div class="card bg-danger text-white position-relative">
                            <div class="card-body">  
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mt-1 mb-0 text-white">Notification</h5>
                                    <button type="button" class="btn-close  btn-close-dark" aria-label="Close" onclick="document.getElementById('notificationCard').remove();"></button>
                                </div>
                                
                                <div class="row mt-4" style="box-shadow: 10%;">                                      
                                    <input style="border:0;" class="bg-transparent text-white" type="text" value="Your current purchase is going above your yearly budget" disabled/>                            
                                </div>
                            </div>                        
                            </div>
                            <hr>
                            </div>
                            <div id="remindersCard">
                            <div class="card position-relative">
                            <div class="card-body"> 
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mt-1 mb-0 text-dark">Today’s Reminders</h5>
                                    <button type="button" class="btn-close  btn-close-dark" aria-label="Close" onclick="document.getElementById('remindersCard').remove();"></button>
                                </div> 
                                <div class="row mt-4 bg-danger h-60 position-relative" id="reminder1Card"> 
                                    <button type="button" class="position-relative btn-close btn-close-white position-absolute left-0 end-0 m-auto" aria-label="Close" onclick="document.getElementById('reminder1Card').remove();"></button>                                        
                                    <input style="border:0;" class="bg-transparent my-3 m-auto text-white" type="text" value="Create Budget Listing for James" disabled/>
                                                             
                                </div>
                                <div class="row mt-4 bg-warning h-60 position-relative " id="reminder2Card">                                      
                                    <input style="border:0;" class="bg-transparent my-3 m-auto text-white" type="text" value="Your current purchase is going above your yearly budget" disabled/>
                                    <button type="button" class=" btn-close btn-close-white position-absolute top-0 end-0  m-auto" aria-label="Close" onclick="document.getElementById('reminder2Card').remove();"></button>                              
                                </div>
                                <div class="row mt-4 bg-success h-60 position-relative " id="reminder3Card">                                  
                                    <input style="border:0;" class="bg-transparent my-3 m-auto text-white " type="text" value="Review stride's Yearly Budget and analyis their expensis" disabled/>                                    
                                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0  m-auto" aria-label="Close" onclick="document.getElementById('reminder3Card').remove();"></button>  
                                                              
                                </div>
                            </div>                        
                            </div>
                            <hr>
                            </div>
                            <div id='greetingCard' class=" card border-primary border-2 border-bottom-0 border-start-0 border-end-0">
                                        <div class="card-body">
                                            <div class="form-check" id="greetingBox">
                                                Welcome User
                                            </div>
                                        </div>
                                    </div>
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h4 class="m-b-10"> Dashboard
                                </h4>
                            </div>
                            <ul class="breadcrumb">

                            </ul>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="theme-avtar bg-primary">
                                                <i class="ti ti-users"></i>
                                            </div>
                                            <p class="text-muted text-sm mt-4 mb-2 ">Total</p>
                                            <h6 class="mb-3 "><a href="https://demo.workdo.io/accountgo-saas/customer" class="text-primary">Expense</a></h6>
                                            <h3 class="mb-0 text-primary">$11,000

                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="theme-avtar bg-info">
                                                <i class="ti ti-note"></i>
                                            </div>
                                            <p class="text-muted text-sm mt-4 mb-2 text-info">Total</p>
                                            <h6 class="mb-3 "><a href="https://demo.workdo.io/accountgo-saas/vender" class="text-info">Payroll(yr)</a></h6>
                                            <h3 class="mb-0 text-info">$10,000
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6" >
                                    <div class="card" style="background-color: rgb(32, 28, 53);">
                                        <div class="card-body">
                                            <div class="theme-avtar bg-warning">
                                                <i class="ti ti-report-money"></i>
                                                <!-- <i class="ti ti-file-invoice"></i> -->
                                            </div>
                                            <p class="text-muted text-sm mt-4 mb-2">Total</p>
                                            <h6 class="mb-3 "><a href="https://demo.workdo.io/accountgo-saas/invoice/index"  class="text-warning">Invoices</a></h6>
                                            <h3 class="mb-0 text-warning">18 </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="theme-avtar bg-danger">
                                                <i class="ti ti-report-money"></i>
                                            </div>
                                            <p class="text-muted text-sm mt-4 mb-2">Total</p>
                                            <h6 class="mb-3 "><a href="https://demo.workdo.io/accountgo-saas/bill/index" class="text-danger">Bills</a></h6>
                                            <h3 class="mb-0 text-danger">14 </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Account Balance</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Bank</th>
                                                    <th>Holder Name</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="font-style">
                                                    <td>-</td>
                                                    <td>Cash</td>
                                                    <td>$465.35</td>
                                                </tr>
                                                <tr class="font-style">
                                                    <td>ROUNDBANK</td>
                                                    <td>Benjamin Adams</td>
                                                    <td>$5,220.00</td>
                                                </tr>
                                                <tr class="font-style">
                                                    <td>COBIZ BANK</td>
                                                    <td>Chisom Latifat</td>
                                                    <td>$6,990.00</td>
                                                </tr>
                                                <tr class="font-style">
                                                    <td>US BANK, NA</td>
                                                    <td>Earl Hane MD</td>
                                                    <td>$5,180.00</td>
                                                </tr>
                                                <tr class="font-style">
                                                    <td>Charity BANK</td>
                                                    <td>Deborah Hawkins</td>
                                                    <td>$800.00</td>
                                                </tr>
                                                <tr class="font-style">
                                                    <td>Caldwell BANK</td>
                                                    <td>Pearl Reed</td>
                                                    <td>$-125.50</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <!-- Income and expense -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-1 mb-0">Income Vs Expense</h5>
                                    <div class="row mt-4">
                                        <div class="col-md-6 col-6">
                                            <div class="d-flex align-items-start">
                                                <div class="theme-avtar bg-primary">
                                                    <i class="ti ti-report-money"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <p class="text-muted text-sm mb-1">Income Today</p>
                                                    <h4 class="mb-2 text-success">$110.50</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="d-flex align-items-start">
                                                <div class="theme-avtar bg-info">
                                                    <i class="ti ti-file-invoice"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <p class="text-muted text-sm mb-1">Expense Today</p>
                                                    <h4 class="mb-2 text-info">$74.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="d-flex align-items-start">
                                                <div class="theme-avtar bg-warning">
                                                    <i class="ti ti-report-money"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <p class="text-muted text-sm mb-1">Income This Month</p>
                                                    <h4 class="mb-1 text-warning">$7455.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="d-flex align-items-start">
                                                <div class="theme-avtar bg-danger">
                                                    <i class="ti ti-file-invoice"></i>
                                                </div>
                                                <div class="ms-2 mb-2">
                                                    <p class="text-muted text-sm mb-1">Expense This Month</p>
                                                    <h4 class="mb-1 text-danger">$4900.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- cashflow -->
                            <div class=" card" style="height: 415px">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Cashflow</h5>
                                </div>
                                <div class="card-body mb-2">
                                    <div id="cash-flow"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Income &amp; Expense
                                        <span class="float-end text-muted">Current Year - 2025</span>
                                    </h5>

                                </div>
                                <div class="card-body">
                                    <div id="incExpBarChart"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-5">
                            <div class="card" style="height: 315px">
                                <div class="card-header">
                                    <h5>Income By Category
                                        <span class="float-end text-muted">Year - 2025</span>
                                    </h5>

                                </div>
                                <div class="card-body">
                                    <div id="incomeByCategory"></div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xxl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Latest Income</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Customer</th>
                                                    <th>Amount Due</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mar 12, 2017</td>
                                                    <td>Customer</td>
                                                    <td>$1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 18, 2025</td>
                                                    <td>Ida F. Mullen</td>
                                                    <td>$100.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jul 24, 2025</td>
                                                    <td>Protiong</td>
                                                    <td>$800.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 16, 2025</td>
                                                    <td>Remedios Hewitt</td>
                                                    <td>$400.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 8, 2025</td>
                                                    <td>Isaac Vang</td>
                                                    <td>$200.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-5">
                            <div class="card" style="height: 370px">
                                <div class="card-header">
                                    <h5>Expense By Category
                                        <span class="float-end text-muted">Year - 2025</span>
                                    </h5>

                                </div>
                                <div class="card-body mt-4">
                                    <div id="expenseByCategory"></div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-xxl-7  ">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Latest Expense</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Latest Expense</th>
                                                    <th>Amount Due</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dec 14, 2025</td>
                                                    <td>Adrienne J Reed</td>
                                                    <td>$200.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 18, 2025</td>
                                                    <td>Eugene A Hughes</td>
                                                    <td>$500.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 30, 2025</td>
                                                    <td>Basia Mcclain</td>
                                                    <td>$200.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 27, 2025</td>
                                                    <td>Anthony B Renfroe</td>
                                                    <td>$420.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 7, 2025</td>
                                                    <td>Kim J Gibson</td>
                                                    <td>$300.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card" style="height: 370px">
                                <div class="card-header">
                                    <h5>Storage Status <small>(499.59MB /
                                            500MB)</small></h5>
                                </div>
                                <div class="card-body mt-4">
                                    <div id="device-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Recent Invoices</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Customer</th>
                                                    <th>Issue Date</th>
                                                    <th>Due Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#INVO00027</td>
                                                    <td>Keire </td>
                                                    <td>Jul 3, 2025</td>
                                                    <td>Jul 3, 2025</td>
                                                    <td>$173.25</td>
                                                    <td>
                                                        <span class="p-2 px-3 fix_badges badge bg-secondary fix_badge">Draft</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#INVO00026</td>
                                                    <td>Teresa R McRae </td>
                                                    <td>May 21, 2025</td>
                                                    <td>Jul 9, 2025</td>
                                                    <td>$10,550.00</td>
                                                    <td>
                                                        <span class="p-2 px-3 fix_badges badge bg-info fix_badge">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#INVO00025</td>
                                                    <td>Barclay Dean </td>
                                                    <td>Apr 9, 2025</td>
                                                    <td>May 10, 2025</td>
                                                    <td>$211.00</td>
                                                    <td>
                                                        <span class="p-2 px-3 fix_badges badge bg-info fix_badge">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#INVO00024</td>
                                                    <td>Jasper Gardner </td>
                                                    <td>Nov 4, 2025</td>
                                                    <td>Dec 2, 2025</td>
                                                    <td>$550.00</td>
                                                    <td>
                                                        <span class="p-2 px-3 fix_badges badge bg-info fix_badge">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#INVO00023</td>
                                                    <td>Ida F. Mullen </td>
                                                    <td>Sep 17, 2025</td>
                                                    <td>Sep 30, 2025</td>
                                                    <td>$103.95</td>
                                                    <td>
                                                        <span class="p-2 px-3 fix_badges badge bg-info fix_badge">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card" style="height: 405px">
                                <div class="card-body">

                                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-Dashboard-tab" data-bs-toggle="pill" href="#invoice_weekly_statistics" role="tab" aria-controls="pills-home" aria-selected="true">Invoices Weekly Statistics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#invoice_monthly_statistics" role="tab" aria-controls="pills-profile" aria-selected="false">Invoices Monthly Statistics</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="invoice_weekly_statistics" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0 ">
                                                    <tbody class="list">
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Invoice Generated
                                                                </p>

                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $170.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Paid</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $135.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Due</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $35.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="invoice_monthly_statistics" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0 ">
                                                    <tbody class="list">
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Invoice Generated
                                                                </p>

                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $820.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Paid</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $570.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Due</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $250.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mt-1 mb-0">Recent Bills</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Vendor</th>
                                                    <th>Bill Date</th>
                                                    <th>Due Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#BILL00043</td>
                                                    <td>Adrienne J Reed </td>
                                                    <td>Jun 2, 2025</td>
                                                    <td>Aug 1, 2025</td>
                                                    <td>$373.49</td>
                                                    <td>
                                                        <span class="p-2 px-3 badge bg-warning fix_badges">Sent</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BILL00042</td>
                                                    <td>Pearl W Poole </td>
                                                    <td>Apr 23, 2025</td>
                                                    <td>May 9, 2025</td>
                                                    <td>$34.65</td>
                                                    <td>
                                                        <span class="p-2 px-3 badge bg-info fix_badges">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BILL00041</td>
                                                    <td>Kim J Gibson </td>
                                                    <td>Apr 29, 2025</td>
                                                    <td>Aug 26, 2025</td>
                                                    <td>$69.30</td>
                                                    <td>
                                                        <span class="p-2 px-3 badge bg-info fix_badges">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BILL00040</td>
                                                    <td>Pearl W Poole </td>
                                                    <td>Apr 7, 2025</td>
                                                    <td>May 10, 2025</td>
                                                    <td>$550.00</td>
                                                    <td>
                                                        <span class="p-2 px-3 badge bg-info fix_badges">Partialy Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BILL00039</td>
                                                    <td>Pearl W Poole </td>
                                                    <td>Jun 1, 2025</td>
                                                    <td>Jul 20, 2025</td>
                                                    <td>$1,055.00</td>
                                                    <td>
                                                        <span class="p-2 px-3 badge bg-secondary fix_badges">Draft</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card" style="height: 405px">
                                <div class="card-body">

                                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#bills_weekly_statistics" role="tab" aria-controls="pills-home" aria-selected="true">Bills Weekly Statistics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#bills_monthly_statistics" role="tab" aria-controls="pills-profile" aria-selected="false">Bills Monthly Statistics</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="bills_weekly_statistics" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0 ">
                                                    <tbody class="list">
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Bill Generated</p>

                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $230.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Paid</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $190.40</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Due</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $39.60</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="bills_monthly_statistics" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0 ">
                                                    <tbody class="list">
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Bill Generated</p>

                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $739.60
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Paid</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $600.00
                                                                </h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mb-0">Total</h5>
                                                                <p class="text-muted text-sm mb-0">Due</p>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-muted">
                                                                    $139.60</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5>Goal</h5>
                                </div>
                                <div class="card-body">
                                    <div class="card border-primary border-2 border-bottom-0 border-start-0 border-end-0">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label d-block" for="customCheckdef1">
                                                <span>
                                                    <span class="row align-items-center mt-3">
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Name</span>
                                                            <h6 class="text-nowrap mb-3 mb-sm-0">Invoice Goal</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Type</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                Invoice </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Duration</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                2025-01-01 To 2025-12-31
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Target</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                $16,875.78 of $50,000.00
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Progress</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                33.75%
                                                            </h6>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: 33.75%">
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-primary border-2 border-bottom-0 border-start-0 border-end-0">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label d-block" for="customCheckdef1">
                                                <span>
                                                    <span class="row align-items-center mt-3">
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Name</span>
                                                            <h6 class="text-nowrap mb-3 mb-sm-0">Bill Goal</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Type</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                Bill</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Duration</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                2025-01-01 To 2025-11-30
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Target</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                $4,871.34 of $30,000.00
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Progress</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                16.24%
                                                            </h6>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: 16.24%">
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-primary border-2 border-bottom-0 border-start-0 border-end-0">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label d-block" for="customCheckdef1">
                                                <span>
                                                    <span class="row align-items-center mt-3">
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Name</span>
                                                            <h6 class="text-nowrap mb-3 mb-sm-0">Revenu Goal</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Type</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                Revenue</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Duration</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                2024-11-20 To 2025-10-31
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Target</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                $4,860.00 of $60,000.00
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Progress</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                8.10%
                                                            </h6>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: 8.10%">
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-primary border-2 border-bottom-0 border-start-0 border-end-0">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label d-block" for="customCheckdef1">
                                                <span>
                                                    <span class="row align-items-center mt-3">
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Name</span>
                                                            <h6 class="text-nowrap mb-3 mb-sm-0">Payment Goal</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Type</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                Payment</h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Duration</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                2024-11-01 To 2025-11-28
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Target</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                $3,520.00 of $70,000.00
                                                            </h6>
                                                        </span>
                                                        <span class="col">
                                                            <span class="text-muted text-sm">Progress</span>
                                                            <h6 class="mb-3 mb-sm-0">
                                                                5.03%
                                                            </h6>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: 5.03%">
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <link rel='stylesheet' href='css/cookieconsent.css' media="screen" />
            <script src="js/cookieconsent.js"></script>

           <?php include ('layout/cookies.php')?>
            <script>
                function setCookie(cname, cvalue, exdays) {
                    const d = new Date();
                    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                    let expires = "expires=" + d.toUTCString();
                    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                }

                function getCookie(cname) {
                    let name = cname + "=";
                    let decodedCookie = decodeURIComponent(document.cookie);
                    let ca = decodedCookie.split(';');
                    for (let i = 0; i < ca.length; i++) {
                        let c = ca[i];
                        while (c.charAt(0) == ' ') {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }


                // obtain plugin
                var cc = initCookieConsent();
                // run plugin with your configuration
                cc.run({
                    current_lang: 'en',
                    autoclear_cookies: true, // default: false
                    page_scripts: true,
                    // ...
                    gui_options: {
                        consent_modal: {
                            layout: 'cloud', // box/cloud/bar
                            position: 'bottom center', // bottom/middle/top + left/right/center
                            transition: 'slide', // zoom/slide
                            swap_buttons: false // enable to invert buttons
                        },
                        settings_modal: {
                            layout: 'box', // box/bar
                            // position: 'left',           // left/right
                            transition: 'slide' // zoom/slide
                        }
                    },

                    onChange: function(cookie, changed_preferences) {},
                    onAccept: function(cookie) {
                        if (!getCookie('cookie_consent_logged')) {
                            var cookie = cookie.level;
                            $.ajax({
                                url: '#',
                                datType: 'json',
                                data: {
                                    cookie: cookie,
                                },
                            })
                            setCookie('cookie_consent_logged', '1', 182, '/');
                        }
                    },

                    languages: {
                        'en': {
                            consent_modal: {
                                title: parsed.cookie_title,
                                description: parsed.cookie_description + ' <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
                                primary_btn: {
                                    text: 'Accept all',
                                    role: 'accept_all' // 'accept_selected' or 'accept_all'
                                },
                                secondary_btn: {
                                    text: 'Reject all',
                                    role: 'accept_necessary' // 'settings' or 'accept_necessary'
                                },
                            },
                            settings_modal: {
                                title: 'Cookie preferences',
                                save_settings_btn: 'Save settings',
                                accept_all_btn: 'Accept all',
                                reject_all_btn: 'Reject all',
                                close_btn_label: 'Close',
                                cookie_table_headers: [{
                                        col1: 'Name'
                                    },
                                    {
                                        col2: 'Domain'
                                    },
                                    {
                                        col3: 'Expiration'
                                    },
                                    {
                                        col4: 'Description'
                                    }
                                ],
                                blocks: [{
                                    title: parsed.cookie_title + ' 📢',
                                    description: parsed.cookie_description + '.'
                                }, {
                                    title: parsed.strictly_cookie_title,
                                    description: parsed.strictly_cookie_description,
                                    toggle: {
                                        value: 'necessary',
                                        enabled: true,
                                        readonly: true // cookie categories with readonly=true are all treated as "necessary cookies"
                                    }
                                }, {
                                    title: 'More information',
                                    description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#">contact us</a>.',
                                }]
                            }
                        }
                    }

                });
            </script>
            <!-- [ Main Content ] end -->
        </div>
    </div>

<div class="modal fade" id="vendorModal" tabindex="-1" aria-labelledby="vendorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="vendorModalLabel">Create New Vendor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="https://demo.workdo.io/accountgo-saas/vender" accept-charset="UTF-8" class="needs-validation" novalidate><input name="_token" type="hidden" value="pJxp7LJo8IHBbFb8GH5uCUBHcczZvKwjmmE2ESEv">
<div class="modal-body">

    <h5 class="sub-title">Basic Info</h5>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="name" class="form-label">Name</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <input class="form-control" required="required" placeholder="Enter Name" name="name" type="text" id="name">
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
    <div class="form-group">
        <label for="contact" class="form-label">Contact </label> <span class="text-danger">*</span>
         <input class="form-control" placeholder="Enter Contact " pattern="^\+\d{1,3}\d{9,13}$" required name="contact" type="text">
        <div class=" text-xs text-danger">
            Please use with country code. (ex. +91)
        </div>
    </div>
</div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="email" class="form-label">Email</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <input class="form-control" required="required" placeholder="Enter Email" name="email" type="text" id="email">
                </div>
            </div>
        </div>
        <input name="role" type="hidden" value="company">
        <div class="col-lg-4 col-md-4 form-group mt-4">
                <label for="password_switch">Login is enable</label>
                <div class="form-check form-switch custom-switch-v1 float-end">
                    <input type="checkbox" name="password_switch" class="form-check-input input-primary pointer" value="on" id="password_switch">
                    <label class="form-check-label" for="password_switch"></label>
                </div>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-6 ps_div d-none">
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="form-icon-user">
                    <input class="form-control" minlength="6" placeholder="Enter Password" name="password" type="password" value="" id="password">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="tax_number" class="form-label">Tax Number </label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter Tax Number" name="tax_number" type="text" id="tax_number">
                </div>
            </div>
        </div>
            </div>
    <h5 class="sub-title">BIlling Address</h5>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_name" class="form-label">Name</label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter Name" name="billing_name" type="text" id="billing_name">
                </div>
            </div>
        </div>

        <div class="col-md-6">
    <div class="form-group">
        <label for="billing_phone" class="form-label">Contact </label>        <input class="form-control" placeholder="Enter Contact " pattern="^\+\d{1,3}\d{9,13}$"  name="billing_phone" type="text">
        <div class=" text-xs text-danger">
            Please use with country code. (ex. +91)
        </div>
    </div>
</div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="billing_address" class="form-label">Address</label>
                <div class="input-group">
                    <textarea class="form-control" rows="3" placeholder="Enter Address" name="billing_address" cols="50" id="billing_address"></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_city" class="form-label">City</label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter City" name="billing_city" type="text" id="billing_city">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_state" class="form-label">State</label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter State" name="billing_state" type="text" id="billing_state">
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_country" class="form-label">Country</label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter Country" name="billing_country" type="text" id="billing_country">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="billing_zip" class="form-label">Zip Code</label>
                <div class="form-icon-user">
                    <input class="form-control" placeholder="Enter Zip Code" name="billing_zip" type="text" id="billing_zip">
                </div>
            </div>
        </div>

    </div>

            <div class="col-md-12 text-end">
            <input type="button" id="billing_data" value="Shipping Same As Billing" class="btn btn-primary">
        </div>
        <h5 class="sub-title">Shipping Address</h5>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="shipping_name" class="form-label">Name</label>
                    <div class="form-icon-user">
                        <input class="form-control" placeholder="Enter Name" name="shipping_name" type="text" id="shipping_name">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
    <div class="form-group">
        <label for="shipping_phone" class="form-label">Contact </label>        <input class="form-control" placeholder="Enter Contact " pattern="^\+\d{1,3}\d{9,13}$"  name="shipping_phone" type="text">
        <div class=" text-xs text-danger">
            Please use with country code. (ex. +91)
        </div>
    </div>
</div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="shipping_address" class="form-label">Address</label>
                    <div class="input-group">
                        <textarea class="form-control" rows="3" placeholder="Enter Address" name="shipping_address" cols="50" id="shipping_address"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="shipping_city" class="form-label">City</label>
                    <div class="form-icon-user">
                        <input class="form-control" placeholder="Enter City" name="shipping_city" type="text" id="shipping_city">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="shipping_state" class="form-label">State</label>
                    <div class="form-icon-user">
                        <input class="form-control" placeholder="Enter State" name="shipping_state" type="text" id="shipping_state">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="shipping_country" class="form-label">Country</label>
                    <div class="form-icon-user">
                        <input class="form-control" placeholder="Enter Country" name="shipping_country" type="text" id="shipping_country">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="shipping_zip" class="form-label">Zip Code</label>
                    <div class="form-icon-user">
                        <input class="form-control" placeholder="Enter Zip Code" name="shipping_zip" type="text" id="shipping_zip">
                    </div>
                </div>
            </div>

        </div>
    
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="Create " class="btn btn-primary">
</div>
</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reminderModal" tabindex="-1" aria-labelledby="vendorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="vendorModalLabel">Create New Reminder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="#" accept-charset="UTF-8" class="needs-validation" novalidate>
            <!-- <input name="_token" type="hidden" value="Hidden Token"> -->
<div class="modal-body">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <label for="date" class="form-label">Date Of Remiders</label><span class="text-danger">*</span>
                <div class="form-icon-user">
                    <input class="form-control" required="required" placeholder="Enter Name"  type="date" id="date">
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
    <div class="form-group">
        <label for="reminder" class="form-label">Reminder</label> <span class="text-danger">*</span>
         <input class="form-control" placeholder="What should I Remind you About?? " required name="contact" type="text" id="remider">
        <div class=" text-xs text-danger">
           Note: Indulge in effortless planning — add as many personalized reminders as you desire.
        </div>
    </div>
</div>
        <!-- <input name="role" type="hidden" value="company"> -->
        <div class="col-lg-4 col-md-4 form-group mt-4">
                <label for="activate">Activate Now</label>
                <div class="form-check form-switch custom-switch-v1 float-end">
                    <input type="checkbox" name="activate" class="form-check-input input-primary pointer" value="on" id="activate">
                    <label class="form-check-label" for="activate"></label>
                </div>
            </div>
    
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="Add Reminder " class="btn btn-primary">
</div>
</form>
      </div>
    </div>
  </div>
</div>

    <div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="body">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="commonModalOver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>


    <div class="position-fixed top-0 end-0 p-3" style="z-index: -9">
        <div id="liveToast" class="toast text-white  fade" role="alert" aria-live="assertive" aria-atomic="fales">
            <div class="d-flex">
                <div class="toast-body"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>



 <div class="position-fixed top-0 end-0 p-3 modal-fullscreen-sm-down " style="z-index: -9">
  <div id="exchangeToast" class="toast text-white fade" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
    <!-- [ Main Content ] end -->
   <?php include ('layout/footer.php'); ?>