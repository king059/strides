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

<div class="login-section overflow-visible pb-0" style="margin-top: 2.5%; margin-bottom: 2.5%;">
  <div class="container-wrapper">
    <div class="r-container">
    <div class="position-relative overflow-hidden rounded-4 login-container" style="background-image: url('../assets/image/BG.jpg'); background-size: cover; background-position: center; padding: 2rem; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); min-height: 500px;">
      <div class="bg-overlay"></div>
      
       <div class=" logs p-5" style="position: center; align-items: center; z-index: 10;" >  
      
        <form style="display: flex; flex-direction: column; align-items: center;">
          <h2 class="form-heading" style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Register</h2>
    
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <input type="text" placeholder="Full Name" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;">
          </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <input type="text" placeholder="Username" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;">
          </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <input type="text" placeholder="Company Name" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;">
          </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <input type="email" placeholder="Email Address" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;">
          </div>
            <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
                <!-- <label for="account" style="display: block; margin-bottom: 0.5rem; color: white;">Account type</label> -->
                <select id="account"  style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: 1px solid #ccc; font-size: 1rem; background-color: white; color: black;">
                <option value="" disabled selected>Select Account Type</option>
                <option value="Auditor">Auditor</option>
                <option value="Employee">Employee</option>
                <option value="Finance Team">Finance Team</option>
                </select>
            </div>


          <!-- Password Input -->
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; position: relative; z-index: 1;">
            <input type="password" id="password" placeholder="Enter password" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;" />
            <span id="togglePassword" onclick="togglePassword()" style="position: absolute; right: 20px; top: 36%; transform: translateY(-50%); font-size: 0.9rem; color: white; cursor: pointer; z-index: 10;">
                <img id="eyeIcon" src="../assets/icons/eye-closed.svg" alt="Icon" class="icons-img accent-color-2 mt-3" />
            </span>
          </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; position: relative; z-index: 1;">
            <input type="password" id="cpassword" placeholder="Confirm password" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;" />
            <span id="togglecPassword" onclick="togglecPassword()" style="position: absolute; right: 20px; top: 36%; transform: translateY(-50%); font-size: 0.9rem; color: white; cursor: pointer; z-index: 10;">
                <img id="eyeIcon2" src="../assets/icons/eye-closed.svg" alt="Icon" class="icons-img accent-color-2 mt-3" />
            </span>
          </div>

           <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1; display: flex; gap: 0.5rem; align-items: center; background: white; padding: 1rem; border-radius: 999px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <select id="countryCode" style="padding: 0.75rem 1rem; border-radius: 999px; border: none; font-size: 1rem; background-color: #f0f0f0; outline: none;"></select>
            <input type="number" max="12" placeholder="Tel Number" style="flex: 1; padding: 0.75rem 1rem; border-radius: 999px; border: none; font-size: 1rem; background-color: #f0f0f0; outline: none;" />
          </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
                <!-- <label for="account" style="display: block; margin-bottom: 0.5rem; color: white;">Account type</label> -->
                <select id="account"  style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: 1px solid #ccc; font-size: 1rem; background-color: white; color: black;">
                <option value="" disabled selected>How did you hear about us</option>
                <option value="Facebook">Facebook Ads</option>
                <option value="Instagram">Instagram Ads</option>
                <option value="Youtube">Youtube Ads</option>
                <option value="Tiktok">Tiktok Ads</option>
                <option value="Linkden">Linkden Ads</option>
                <option value="Upwork">Upwork Ads</option>
                <option value="Fivver">Fivver Ads</option>
                <option value="Youtube">Whats Ads</option>
                <option value="Tiktok">Tiktok Ads</option>
                <option value="Linkden">Linkden Ads</option>
                <option value="Upwork">Upwork Ads</option>
                <option value="Fivver">Fivver Ads</option>
                </select>
            </div>
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <input type="text" placeholder="Company Adress" style="width: 100%; padding: 0.75rem 1.5rem; border-radius: 999px; border: none; font-size: 1rem;">
          </div>

          <!-- terms -->
          <div class="input-wrapper" style="width: 60%; margin-bottom: 1rem; z-index: 1;">
            <div style="display: flex; align-items: center;">
                <input type="checkbox" id="remember" style="margin-right: 10px; width: 18px; height: 18px;" required>
                <label for="remember" style="cursor: pointer; user-select: none;">
                I Accept the 
                <a href="#" onclick="event.stopPropagation()">terms/conditions</a> offered by 
                <a href="../home/" onclick="event.stopPropagation()">Stride</a>
                </label>
            </div>
            </div>

            

          <!-- Login Button -->
          <button id="joinBtn" type="button" onclick="handleJoin()" 
                style="width: 60%; padding: 0.75rem 1.5rem; z-index: 1; background-color: #4169E1; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 999px; cursor: pointer;">
                Join Us
            </button><br>
            
            <div style="display: flex; align-items: center; z-index: 1;">
                <label for="remember" style="cursor: pointer; user-select: none;">
                Already have an account?
                <a href="../user/login.php" onclick="event.stopPropagation()">Connect</a>
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
    const eyeIcon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.src = "../assets/icons/eye-open.svg";
    } else {
      passwordInput.type = "password";
      eyeIcon.src = "../assets/icons/eye-closed.svg";
    }
  }

  function togglecPassword() {
    const passwordInput = document.getElementById("cpassword");
    const eyeIcon = document.getElementById("eyeIcon2");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.src = "../assets/icons/eye-open.svg";
    } else {
      passwordInput.type = "password";
      eyeIcon.src = "../assets/icons/eye-closed.svg";
    }
  }

</script>
<script>
    const countryCodes = [
      { code: '+234', name: 'Nigeria' },
      { code: '+1', name: 'USA' },
      { code: '+44', name: 'UK' },
      { code: '+91', name: 'India' },
      { code: '+81', name: 'Japan' },
      { code: '+49', name: 'Germany' },
      { code: '+61', name: 'Australia' },
      { code: '+33', name: 'France' },
      { code: '+39', name: 'Italy' },
      { code: '+86', name: 'China' }
    ];

    const select = document.getElementById('countryCode');

    countryCodes.forEach(country => {
      const option = document.createElement('option');
      option.value = country.code;
      option.textContent = `${country.code} (${country.name})`;
      if (country.code === '+234') option.selected = true;
      select.appendChild(option);
    });
  </script>
  <script>
    function handleJoin() {
      const btn = document.getElementById('joinBtn');
      btn.innerText = 'Joining...';
      btn.disabled = true;
      btn.style.opacity = '0.6';
      btn.style.cursor = 'not-allowed';

      // Simulate file processing or async operation
setTimeout(() => {
  btn.innerText = 'Joined ✔'; // Update button text
  btn.style.backgroundColor = '#28a745'; // Green

  // Redirect after short delay (e.g. 1 second)
  setTimeout(() => {
    window.location.href = '../Auth/kyc.php'; // Update to your actual target
  }, 1000); // Wait 1 second after showing success
}, 3000); // Initial delay for "processing"
    }
  </script>
<?php
include ('../layout/foot.php'); 
?>