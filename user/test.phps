<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Expense Modal Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- ✅ Code 1: Trigger Link -->
  <a class="dropdown-item btn btn-primary m-4" href="#" data-size="lg" id="openexpense" data-url="user/expense" data-title="Create New Expense">
    <i class="ti ti-user"></i> Create New Expense
  </a>

  <!-- ✅ Code 3: Modal Structure -->
  <div class="modal fade" id="expense" tabindex="-1" aria-labelledby="vendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="vendorModalLabel">Create New Expense</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- You can add a form or content here -->
          <p>This is the expense modal content.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Expense</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ✅ Bootstrap JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ✅ Code 2: JS to trigger the modal -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('openexpense').addEventListener('click', function(e) {
        e.preventDefault();
        var modal = new bootstrap.Modal(document.getElementById('expense'));
        modal.show();
      });
    });
  </script>
</body>
</html>
