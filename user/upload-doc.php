<?php include ('layout/header.php'); ?>

    <div class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h4 class="m-b-10"> Upload Financial Document
                                </h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                <li class="breadcrumb-item">Upload Document</li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>

                        <div class="row justify-content-center"> 
    <div class="col-md-12">
        <div class="card">
                <div class="card-body m-4">
      <div class="card-header">
        <h5 class="card-title">Upload Document</h5>
      </div>
<form id="uploadForm" class="bg-white p-6 rounded-xl shadow-md space-y-4">
    <div class="card-body">
        <h3 class="sub-title">General Info</h3><br>
    <div class="row">
  <div>
    <label class="block font-medium">Document Title <span class="text-red-500">*</span></label>
    <input type="text" class="form-control" required placeholder="e.g., March Bank Statement">
  </div>

  <!-- Document Type -->
  <div>
    <label class="block font-medium">Document Type <span class="text-red-500">*</span></label>
    <select class="form-select" required>
      <option value="">Select Type</option>
      <option>Invoice</option>
      <option>Receipt</option>
      <option>Bank Statement</option>
      <option>Tax Report</option>
      <option>Contract</option>
    </select>
  </div>

  <!-- Document Date -->
  <div>
    <label class="block font-medium">Document Date <span class="text-red-500">*</span></label>
    <input type="date" class="form-control" required>
  </div>

  <!-- Department -->
  <div>
    <label class="block font-medium">Related Department</label>
    <input type="text" class="form-control" placeholder="e.g., Accounting">
  </div>

  <!-- Reference Code -->
  <div>
    <label class="block font-medium">Reference Code</label>
    <input type="text" class="form-control" placeholder="e.g., REF12345">
  </div>

  <!-- Tags -->
  <div>
    <label class="block font-medium">Tags (comma separated)</label>
    <input type="text" class="form-control" placeholder="e.g., Q1, payroll, taxes">
  </div>

  <!-- Notes -->
  <div>
    <label class="block font-medium">Description / Notes</label>
    <textarea class="form-control" rows="3" placeholder="Add additional notes..."></textarea>
  </div>

  <!-- File Upload -->
  <div>
    <label class="block font-medium">Upload File <span class="text-red-500">*</span></label>
    <input type="file" id="fileInput" class="form-control" required accept=".pdf,.csv,.xls,.xlsx,.png,.jpg,.jpeg">
    <small class="text-muted">Accepted: PDF, Excel, CSV, PNG, JPG. Max size: 20MB</small>
  </div>

  <!-- Progress Bar (Hidden by default) -->
  <div id="progressWrapper" class="hidden mt-4">
    <label class="block font-medium mb-1">Uploading...</label>
    <div class="w-full bg-gray-200 rounded-full h-4">
      <div id="progressBar" class="bg-blue-600 h-4 text-xs text-white text-center rounded-full transition-all duration-500 ease-in-out" style="width: 0%;">
        0%
      </div>
    </div>
  </div>

  <!-- Buttons -->
  <div class="flex justify-between mt-6">
    <button type="button" class="btn btn-light" onclick="history.back()">Cancel</button>
    <button type="submit" class="btn btn-primary">Upload Document</button>
  </div>

  <!-- Message -->
  <div id="statusMessage" class="mt-4 text-sm hidden"></div>
</form>









<script>
  const uploadForm = document.getElementById('uploadForm');
  const progressWrapper = document.getElementById('progressWrapper');
  const progressBar = document.getElementById('progressBar');
  const statusMessage = document.getElementById('statusMessage');

  uploadForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Reset
    progressBar.style.width = '0%';
    progressBar.textContent = '0%';
    progressWrapper.classList.remove('hidden');
    statusMessage.classList.add('hidden');

    let progress = 0;
    const fakeUpload = setInterval(() => {
      progress += Math.floor(Math.random() * 10) + 5; // simulate upload jump
      if (progress >= 100) {
        progress = 100;
        clearInterval(fakeUpload);

        // Display success message
        statusMessage.textContent = "Upload complete!";
        statusMessage.className = "mt-4 text-green-600";
        statusMessage.classList.remove('hidden');

        // Reset form
        uploadForm.reset();
      }

      // Update bar
      progressBar.style.width = progress + '%';
      progressBar.textContent = progress + '%';
    }, 300);
  });
</script>

<?php include ('layout/footer.php'); ?>