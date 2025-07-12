
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>KYC Verification</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/logo.png">
    <title>Partnership - Homepage</title>
</head>
<style>
  .ky-0 {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5vh 2rem;
  }

  @media (max-width: 430px) {
    .ky-0 {
    padding: 50px 0px 50px 0px;
  }
  .logs{
    justify-content: left;
    align-items: left;
    width: 110%;
    
  }
  }

  .kyc {
    width: 100%;
    max-width: 700px;
  }

  .kyc-container {
    background: #ffffff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
  }

  .kyc-container h2 {
    margin-bottom: 1rem;
    color: #333;
    text-align: center;
  }

  .form-group {
    margin-bottom: 1rem;
  }

  label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
  }

  input, select {
    width: 100%;
    padding: 0.7rem;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1rem;
  }

  .buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 1.5rem;
  }

  button {
    flex: 1;
    padding: 0.8rem;
    font-size: 1rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .next-btn {
    background-color: #007bff;
    color: white;
  }

  .next-btn:hover {
    background-color: #0056b3;
  }

  .skip-btn {
    background-color: #6c757d;
    color: white;
  }

  .skip-btn:hover {
    background-color: #5a6268;
  }

  @media (max-width: 768px) {
    .kyc {
      width: 90%;
    }

    .buttons {
      flex-direction: column;
    }
  }

  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
  }

  .modal-content h3 {
    margin-bottom: 1rem;
    color: #28a745;
  }

  .modal-content button {
    margin-top: 1rem;
    padding: 0.6rem 1.2rem;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
  }

  .modal-content button:hover {
    background: #218838;
  }
</style>

</head>
<body>
 <main >
<div class="ky-0">
    <div class="kyc login-section overflow-visible pb-0" >
    <div class="container-wrapper">
      <div class="position-relative overflow-hidden rounded-4 login-container" style="background-image: url('../assets/image/BG.jpg'); background-size: cover; background-position: center; padding: 2rem; box-shadow: 0 4px 20px rgba(51, 49, 49, 0.3); min-height: 500px;">
        
        <!-- Login Form -->
        <div class=" logs p-5" >  
    <h2>Verify</h2>
    <small>Verify Your Email Address</small><br><br>

    <div class="form-group">
      <label for="Code">Code</label>
      <input type="text" id="Code" placeholder="eg: 56G7D9G" />
      
    </div>
    <div class="form-group">
      <a href="#" ><label>Resend Code</label></a>
    </div>
    
    <div class="buttons">
      <button class="next-btn" onclick="submitKYC()">Verify</button>
      
    </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  
  <!-- Modal -->
  <!-- <div class="modal" id="successModal">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h3 class="slideh1" id="thankYouModalLabel">KYC Submitted!</h3>
        <p class="slideh1">Your KYC details is being reviewed.</p>
        <button onclick="closeModal()" class="btn btn-primary rounded-pill px-4 py-2 mt-3" data-bs-dismiss="modal">Redirecting....</button>
      </div>
    </div>
  </div> -->
</div>
</main>
<script>
  function submitKYC() {
    // Get field values (optional: add validation here)
    const Code = document.getElementById('Code').value.trim();

    // Simple validation example (optional)
    if (!Code) {
      alert("Please fill all fields before submitting.");
      return;
    }

    // Redirect after delay
    setTimeout(() => {
      window.location.href = '../home/index.php';
    }, 3000);
  }

  function closeModal() {
    document.getElementById('successModal').style.display = 'none';
  }
</script>

   
    <script src="../assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/swiper-script.js"></script>
    <script src="../assets/js/submit-form.js"></script>
    <script src="../assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="../assets/js/video_embedded.js"></script>
    <script src="../assets/js/vendor/fslightbox.js"></script>
</body>
</html>