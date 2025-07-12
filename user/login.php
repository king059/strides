<?php
include ('../layout/header.php'); 
?>

<style>
  @media (max-width: 768px) {
    .input-wrapper {
      width: 100% !important;
    }

    .login-container {
      padding: 1rem !important;
    }

    .form-heading {
      font-size: 2rem !important;
    }

    .password-toggle {
      right: 10px !important;
    }
    .r-container{
      margin-top: 2.5% !important;

    }
  }
</style>

<div class="login-section overflow-visible pb-0" style="margin-top: 2.5%; margin-bottom: 2.5%; z-index: 1;">
  <div class="container-wrapper">
    <div class="r-containers">
    <div class="position-relative overflow-hidden rounded-4 login-container" style="background-image: url('../assets/image/BG.jpg'); background-size: cover; background-position: center; padding: 2rem; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); min-height: 500px;">
      <div class="bg-overlay"></div>
      
      <!-- Login Form -->
       <div class=" logs p-5" >  
      
        <form style="display: flex; flex-direction: column; align-items: center; z-index: 1;">
          <h2 class="form-heading" style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Login</h2>
          
          <!-- Email Input -->
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem;">
            <input type="email" placeholder="Email" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem; z-index: 1;">
          </div>

          <a href="#" ><span style="padding-right:80%; font-size: 0.9rem; cursor: pointer; z-index: 1;">Forgot Password</span></a>

          <!-- Password Input -->
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; position: relative;">
            <input type="password" id="password" placeholder="Password" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem; z-index: 1;">
            <span id="togglePassword" onclick="togglePassword()"
              style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%);
              font-size: 0.9rem; color: white; cursor: pointer; z-index: 10;
              background: rgba(0,0,0,0.2); padding: 2px 8px; border-radius: 12px;">
              Show
            </span>
          </div>

          <!-- Remember Me -->
          <div style="display: flex; align-items: left; margin-bottom: 1rem;">
            <input type="checkbox" id="remember" style="margin-right: 10px; width: 18px; height: 18px; z-index: 1;" required>
            <label for="remember">Remember me</label>
          </div>

          <!-- Login Button -->
          <button type="button" RELOAD="dashboard.php" style="width: 60%; padding: 0.75rem 1.5rem; background-color: #4169E1; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 999px; cursor: pointer;">Login</button>
         <div style="display: flex; align-items: center; z-index: 1;">
                <label for="remember" style="cursor: pointer; user-select: none;">
                New Here? Create an account?
                <a href="../user/registration.php" onclick="event.stopPropagation()">Connect</a>
                </label>
            </div>
        
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

<script>
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleBtn = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleBtn.innerText = "Hide";
    } else {
      passwordInput.type = "password";
      toggleBtn.innerText = "Show";
    }
  }
</script>
<?php
include ('../layout/foot.php'); 
?>