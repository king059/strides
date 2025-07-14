 <footer class="dash-footer">
        <div class="footer-wrapper">
            <div class="py-1">

                <span class="text-muted">
                © 2025 AccountGo Saas
            </span>
            </div>
        </div>
    </footer>



    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/dash.js"></script>

    <script src="assets/js/plugins/datepicker-full.min.js"></script>
    <script src="assets/js/plugins/dropzone-amd-module.min.js"></script>

    <script src="assets/js/plugins/choices.min.js"></script>

    <script src="assets/js/plugins/sweetalert2.all.min.js"></script>
    <script src="assets/js/plugins/simple-datatables.js"></script>


    <!--Botstrap switch-->
    <script src="assets/js/plugins/bootstrap-switch-button.min.js"></script>


    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/plugins/main.min.js"></script>
    <script src="assets/js/plugins/flatpickr.min.js"></script>

<script>
document.getElementById('openVendorModal').addEventListener('click', function(e) {
  e.preventDefault();
  var modal = new bootstrap.Modal(document.getElementById('vendorModal'));
  modal.show();
});
</script>
<script>
document.getElementById('openReminderModal').addEventListener('click', function(e) {
  e.preventDefault();
  var modal = new bootstrap.Modal(document.getElementById('reminderModal'));
  modal.show();
});
</script>


    <script>
        var file_size = "2048000";
        var file_types = "png,jpeg,jpg,csv";
        var type_err = "Invalid file type. Please select a valid file " + "(png,jpeg,jpg,csv).";
        var size_err = "File size exceeds the maximum limit of " + " 2000 MB.";
    </script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="assets/js/plugins/simplebar.min.js"></script>

 <script>
  const exchangeRates = [
    { currency: 'USD', rate: '₦1520' },
    { currency: 'EUR', rate: '₦1650' },
    { currency: 'GBP', rate: '₦1930' },
  ];

  let currentRateIndex = 0;

  function showExchangeToast() {
    const { currency, rate } = exchangeRates[currentRateIndex];

    const toastEl = document.getElementById('exchangeToast');
    const toastBody = toastEl.querySelector('.toast-body');

    toastEl.style.backgroundColor = 'rgb(0, 142, 204)';

    toastBody.innerHTML = `<strong>${currency}</strong> rate is <strong>${rate}</strong>`;

    const toast = new bootstrap.Toast(toastEl, { delay: 6000 }); // auto-hide after 6 seconds
    toast.show();

    currentRateIndex = (currentRateIndex + 1) % exchangeRates.length;
  }

  // Show one exchange rate every 10 seconds
  setInterval(showExchangeToast, 15000);
</script>

    <script>
  // Show Bootstrap Modal with dynamic content
  function showModal(title, content) {
    const modalTitle = document.querySelector('#commonModal .modal-title');
    const modalBody = document.querySelector('#commonModal .body');
    
    modalTitle.innerHTML = title;
    modalBody.innerHTML = content;

    const myModal = new bootstrap.Modal(document.getElementById('commonModal'));
    myModal.show();
  }

  function showModalOver(title, content) {
    const modalTitle = document.querySelector('#commonModalOver .modal-title');
    const modalBody = document.querySelector('#commonModalOver .modal-body');
    
    modalTitle.innerHTML = title;
    modalBody.innerHTML = content;

    const myModal = new bootstrap.Modal(document.getElementById('commonModalOver'));
    myModal.show();
  }

  // Show toast message
  function showToast(message, bgColor = 'bg-success') {
    const toastEl = document.getElementById('liveToast');
    const toastBody = toastEl.querySelector('.toast-body');
    toastEl.classList.add(bgColor); // e.g., bg-success or bg-danger
    toastBody.textContent = message;

    const toast = new bootstrap.Toast(toastEl);
    toast.show();
  }
</script>


    <script>
        $(document).on('click', '#billing_data', function() {
            $("[name='shipping_name']").val($("[name='billing_name']").val());
            $("[name='shipping_country']").val($("[name='billing_country']").val());
            $("[name='shipping_state']").val($("[name='billing_state']").val());
            $("[name='shipping_city']").val($("[name='billing_city']").val());
            $("[name='shipping_phone']").val($("[name='billing_phone']").val());
            $("[name='shipping_zip']").val($("[name='billing_zip']").val());
            $("[name='shipping_address']").val($("[name='billing_address']").val());
        })
    </script>

    <?php include_once ('layout/charts.php'); ?>

    <script>
  window.onload = () => {
    TablerIcons.replace();
  };
</script>

<script>
  function translateLanguage(lang) {
    const tryTranslate = () => {
      const select = document.querySelector("select.goog-te-combo");
      if (!select) {
        // Retry every 300ms until Google loads
        setTimeout(tryTranslate, 300);
        return;
      }

      // Normalize lang code (e.g., pt-br)
      lang = lang.toLowerCase();

      // Try to match the lang
      const options = Array.from(select.options);
      const match = options.find(opt => opt.value.toLowerCase() === lang);

      if (match) {
        select.value = match.value;
        select.dispatchEvent(new Event('change'));
      } else {
        console.warn("Language not supported:", lang);
      }
    };

    tryTranslate();
  }

  // ✅ Optional: Auto-detect browser language
  window.addEventListener("load", function () {
    const userLang = (navigator.language || navigator.userLanguage).toLowerCase();
    const supported = ['ar','zh-cn','da','de','es','fr','he','it','ja','nl','pl','pt','pt-br','ru','tr'];
    const matched = supported.find(code => userLang.startsWith(code));
    if (matched && matched !== 'en') {
      setTimeout(() => translateLanguage(matched), 1000); // Give Google Translate a second to load
    }
  });
</script>




    <script>
        feather.replace();

        function removeClassByPrefix(node, prefix) {
            for (let i = 0; i < node.classList.length; i++) {
                let value = node.classList[i];
                if (value.startsWith(prefix)) {
                    node.classList.remove(value);
                }
            }
        }
    </script>
    <script>
  const userName = <?php echo json_encode($name); ?>;
  
  const greetingBox = document.getElementById('greetingBox');

    const now = new Date();
  const hour = now.getHours();

  let greet = "Welcome";
  if (hour < 12) greet = "Good morning";
  else if (hour < 18) greet = "Good afternoon";
  else greet = "Good evening";


  greetingBox.innerHTML = `${greet} <strong>${userName}</strong>! Welcome back. Let’s take control of your business finances today..`;

  // Show the greeting box
  greetingCard.style.display = 'block';

 
  setTimeout(() => {
    greetingCard.style.display = 'none';
  }, 15000);
</script>
<script>
    const date = document.getElementById('date');
      const nows = new Date();
  const hours = now.getHours();

     const dateString = nows.toLocaleString(undefined, {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
  });

   date.textContent = `${dateString}.`;
</script>
<script>
    const datex = document.getElementById('datex');
      const nowx = new Date();
  const hourx = now.getHours();

     const datexString = nowx.toLocaleString(undefined, {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  });

   datex.textContent = `${datexString}.`;
</script>
</body>


</html>