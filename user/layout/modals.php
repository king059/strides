<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

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

<!--Reminder Modal START-->
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="date" class="form-label">Time</label><span class="text-danger">*</span>
                        <div class="form-icon-user">
                          <input id="expense-time" name="expense_time" class="form-control" type="time" required>
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
<!--Reminder Modal END-->

<!--alert Modal START-->

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
    <!--alert Modal END-->

    <!--Toast Modal START-->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: -9">
        <div id="liveToast" class="toast text-white  fade" role="alert" aria-live="assertive" aria-atomic="fales">
            <div class="d-flex">
                <div class="toast-body"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <!--Toast Modal END-->


<!--Exchage Modal START-->
 <div class="position-fixed top-0 end-0 p-3 modal-fullscreen-sm-down " style="z-index: -9">
  <div id="exchangeToast" class="toast text-white fade" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
<!--Exchage Modal END-->