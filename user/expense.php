<?php include ("layout/header.php"); ?>

  <!-- [ Main Content ] start -->
    <div class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h4 class="m-b-10"> Cash Flow
                                </h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                <li class="breadcrumb-item">Cash Flow</li>
                            </ul>
                        </div>                        
                        <div class="col-6 d-flex justify-content-end">
                            <div class="d-flex p-6 m-2">

                                <a href="#" class="btn btn-sm btn-primary" onclick="saveAsPDF()" data-bs-toggle="tooltip" title="Download" data-original-title="Download">
                                <span class="btn-inner--icon"><img src="../assets/icons/print.svg" alt="Icon" class="icons-color"/></span>
                                </a>

                            </div>
                            <div class="d-flex p-6 m-2">

                                <a href="add-expense.php" class="btn btn-sm btn-primary" title="Add Expense" data-original-title="Add Expense">
                                <span class="btn-inner"><img src="../assets/icons/pen-3.svg" alt="Icon" class="icons-color"/></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center"> 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="GET" accept-charset="UTF-8" id="monthly_cashflow">
                    <div class="col-xl-12">
                        <div class="row justify-content-between">
                            <div class="col-xl-3">
                                <ul class="nav nav-pills my-3" id="tab-selector" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#?Monthly" id="monthly-tab" onclick="showTab('monthly')" role="tab">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#?Quarterly" id="quarterly-tab" onclick="showTab('quarterly')" role="tab">Quarterly</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xl-9">
                                <div class="row justify-content-end align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="btn-box">
                                            <label for="year" class="form-label">Year</label>
                                            <select class="form-control select" id="year" name="year">
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-auto d-flex mt-4">
                                        <a href="#" class="btn btn-sm btn-primary me-2" onclick="document.getElementById('monthly_cashflow').submit(); return false;" data-bs-toggle="tooltip" title="Apply">
                                            <span class="btn-inner--icon"><img src="../assets/icons/magnifier.svg" alt="Icon" class="icons-color"/></span>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" onclick="resetTabs()" data-bs-toggle="tooltip" title="Reset">
                                            <span class="btn-inner--icon"><img src="../assets/icons/circle-info.svg" alt="Icon" class="icons-color"/></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

                <div id="content-to-download">
                                <!-- Monthly Cashflow -->
                                <div id="monthly-content" class="tab-content mt-4">

                    <div id="printableArea">
                        <div class="row mt-1">
                            <div class="col">
                                <input type="hidden" value="Monthly Cashflow Report of Jan-2025 to Dec-2025" id="filename">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">Report :</h7>
                                    <h6 class="report-text mb-0">Monthly Cashflow</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">Duration :</h7>
                                    <h6 class="report-text mb-0">Jan-2025 to Dec-2025</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-border-style">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="pb-3">Income</h5>
                                                <div class="table-responsive mt-3 mb-3">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th width="20%">Category</th>
                                                                <th>January</th>
                                                                <th>February</th>
                                                                <th>March</th>
                                                                <th>April</th>
                                                                <th>May</th>
                                                                <th>June</th>
                                                                <th>July</th>
                                                                <th>August</th>
                                                                <th>September</th>
                                                                <th>October</th>
                                                                <th>November</th>
                                                                <th>December</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="13" class="font-bold"><span>Revenue : </span></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="13" class="font-bold"><span>Invoice : </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Business profits</td>
                                                                <td>$211.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$922.90</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$103.95</td>
                                                                <td>$550.00</td>
                                                                <td>$550.00</td>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dividends</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$1,474.94</td>
                                                                <td>$0.00</td>
                                                                <td>$10,550.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                                <td>$0.00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="13" class="font-bold"><span>Total Income =  Revenue + Invoice </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" class="text-dark">Total Income</td>
                                                                <td>$911.00</td>
                                                                <td>$100.00</td>
                                                                <td>$100.00</td>
                                                                <td>$2,797.84</td>
                                                                <td>$600.00</td>
                                                                <td>$10,810.00</td>
                                                                <td>$800.00</td>
                                                                <td>$1,500.00</td>
                                                                <td>$103.95</td>
                                                                <td>$950.00</td>
                                                                <td>$650.00</td>
                                                                <td>$200.00</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-sm-12">
                                                    <h5>Expense</h5>
                                                    <div class="table-responsive mt-4">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th width="20%">Category</th>
                                                                    <th>January</th>
                                                                    <th>February</th>
                                                                    <th>March</th>
                                                                    <th>April</th>
                                                                    <th>May</th>
                                                                    <th>June</th>
                                                                    <th>July</th>
                                                                    <th>August</th>
                                                                    <th>September</th>
                                                                    <th>October</th>
                                                                    <th>November</th>
                                                                    <th>December</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="13" class="font-bold"><span>Payment : </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="13" class="font-bold"><span>Bill : </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Insurance</td>
                                                                    <td>$550.00</td>
                                                                    <td>$0.00</td>
                                                                    <td>$0.00</td>
                                                                    <td>$69.30</td>
                                                                    <td>$0.00</td>
                                                                    <td>$69.30</td>
                                                                    <td>$0.00</td>
                                                                    <td>$34.65</td>
                                                                    <td>$0.00</td>
                                                                    <td>$373.49</td>
                                                                    <td>$0.00</td>
                                                                    <td>$0.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Employee benefits</td>
                                                                    <td>$0.00</td>
                                                                    <td>$1,055.00</td>
                                                                    <td>$34.65</td>
                                                                    <td>$115.50</td>
                                                                    <td>$1,055.00</td>
                                                                    <td>$0.00</td>
                                                                    <td>$0.00</td>
                                                                    <td>$0.00</td>
                                                                    <td>$34.65</td>
                                                                    <td>$0.00</td>
                                                                    <td>$34.65</td>
                                                                    <td>$34.65</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="13" class="font-bold"><span>Total Expense =  Payment + Bill </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="20%" class="text-dark">Total Expenses</td>
                                                                    <td>$850.00</td>
                                                                    <td>$1,475.00</td>
                                                                    <td>$34.65</td>
                                                                    <td>$284.80</td>
                                                                    <td>$1,255.00</td>
                                                                    <td>$1,069.30</td>
                                                                    <td>$0.00</td>
                                                                    <td>$734.65</td>
                                                                    <td>$134.65</td>
                                                                    <td>$573.49</td>
                                                                    <td>$534.65</td>
                                                                    <td>$234.65</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="table-responsive mt-1">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="13" class="font-bold"><span>Net Profit = Total Income - Total Expense </span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td width="20%" class="text-dark">Net Profit</td>
                                                                    <td>$61.00</td>
                                                                    <td>$-1,375.00</td>
                                                                    <td>$65.35</td>
                                                                    <td>$2,513.04</td>
                                                                    <td>$-655.00</td>
                                                                    <td>$9,740.70</td>
                                                                    <td>$800.00</td>
                                                                    <td>$765.35</td>
                                                                    <td>$-30.70</td>
                                                                    <td>$376.51</td>
                                                                    <td>$115.35</td>
                                                                    <td>$-34.65</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                <!-- Quarterly Cashflow -->
                                <div id="quarterly-content" class="tab-content mt-4" style="display: none;">
                                    <div id="printableArea">
                                            <div class="row mt-1">
                                                <div class="col">
                                                    <input type="hidden" value="Quarterly Cashflow Report of Aug-2025 to Dec-2025" id="filename">
                                                    <div class="card p-4 mb-4">
                                                        <h7 class="report-text gray-text mb-0">Report :</h7>
                                                        <h6 class="report-text mb-0">Quarterly Cashflow</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card p-4 mb-4">
                                                        <h7 class="report-text gray-text mb-0">Duration :</h7>
                                                        <h6 class="report-text mb-0">Aug-2025 to Dec-2025</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body table-border-style">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h5 class="pb-3">Income</h5>
                                                                    <div class="table-responsive mt-3 mb-3">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th width="40%">Category</th>
                                                                                    <th>August</th>
                                                                                    <th>September</th>
                                                                                    <th>October</th>
                                                                                    <th>November</th>
                                                                                    <th>December</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="13" class="font-bold"><span>Revenue : </span></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td colspan="13" class="font-bold"><span>Invoice : </span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Business profits</td>
                                                                                    <td>$1,500.00</td>
                                                                                    <td>$103.95</td>
                                                                                    <td>$550.00</td>
                                                                                    <td>$550.00</td>
                                                                                    <td>$0.00</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Dividends</td>
                                                                                    <td>$0.00</td>
                                                                                    <td>$0.00</td>
                                                                                    <td>$300.00</td>
                                                                                    <td>$0.00</td>
                                                                                    <td>$0.00</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td colspan="13" class="font-bold"><span>Total Income =  Revenue + Invoice </span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td width="20%" class="text-dark">Total Income</td>
                                                                                    <td>$1,500.00</td>
                                                                                    <td>$103.95</td>
                                                                                    <td>$950.00</td>
                                                                                    <td>$650.00</td>
                                                                                    <td>$200.00</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <h5>Expense</h5>
                                                                        <div class="table-responsive mt-4">
                                                                            <table class="table mb-0">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th width="20%">Category</th>                                                            
                                                                                        <th>August</th>
                                                                                        <th>September</th>
                                                                                        <th>October</th>
                                                                                        <th>November</th>
                                                                                        <th>December</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td colspan="13" class="font-bold"><span>Payment : </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="13" class="font-bold"><span>Bill : </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Insurance</td>
                                                                                        <td>$34.65</td>
                                                                                        <td>$0.00</td>
                                                                                        <td>$373.49</td>
                                                                                        <td>$0.00</td>
                                                                                        <td>$0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Employee benefits</td>
                                                                                        <td>$34.65</td>
                                                                                        <td>$0.00</td>
                                                                                        <td>$34.65</td>
                                                                                        <td>$34.65</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="13" class="font-bold"><span>Total Expense =  Payment + Bill </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td width="20%" class="text-dark">Total Expenses</td>
                                                                                        <td>$734.65</td>
                                                                                        <td>$134.65</td>
                                                                                        <td>$573.49</td>
                                                                                        <td>$534.65</td>
                                                                                        <td>$234.65</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="table-responsive mt-1">
                                                                            <table class="table mb-0">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="13" class="font-bold"><span>Net Profit = Total Income - Total Expense </span></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="20%" class="text-dark">Net Profit</td>
                                                                                        <td>$765.35</td>
                                                                                        <td>$-30.70</td>
                                                                                        <td>$376.51</td>
                                                                                        <td>$115.35</td>
                                                                                        <td>$-34.65</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
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
                    <!-- [ Main Content ] end -->
                                            
                </div>
            </div>
    </div>

    <!-- JavaScript to Toggle Tabs -->
<script>
    function showTab(tab) {
        // Hide both contents
        document.getElementById('monthly-content').style.display = 'none';
        document.getElementById('quarterly-content').style.display = 'none';

        // Remove 'active' class from both tabs
        document.getElementById('monthly-tab').classList.remove('active');
        document.getElementById('quarterly-tab').classList.remove('active');

        // Show selected tab content
        if (tab === 'monthly') {
            document.getElementById('monthly-content').style.display = 'block';
            document.getElementById('monthly-tab').classList.add('active');
        } else {
            document.getElementById('quarterly-content').style.display = 'block';
            document.getElementById('quarterly-tab').classList.add('active');
        }
    }

    function resetTabs() {
        // Reset to Monthly tab by default
        showTab('monthly');
        document.getElementById('year').value = '2025'; // Reset dropdown if needed
    }
</script>
    <?php include ("layout/footer.php"); ?>