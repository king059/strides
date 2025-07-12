 <?php
include ('../layout/header.php'); 
?>

<main>
        <!-- Banner -->
        <div class="section position-relative"
            style="background-image: url(../assets/image/image-1920x1280-19.jpg); height: 70vh;">
            <div class="cta-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center mx-auto text-center text-white gap-3"
                    style="max-width: 895px;">
                    <h1 class="font-1 m-0">Contact Us</h1>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="section bg-accent-color">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center pe-xl-5">
                            <div class="d-flex flex-column gap-3">
                                <h6>Contact Us</h6>
                                <h3 class="font-1">Have Anything To Ask ? Let's Talk.</h3>
                                <p>
                                    We'll explore the importance of staying connected and provide guidance on how to get
                                    in touch with expert financial advisors.
                                </p>
                            </div>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot accent-color-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Location</h5>
                                            <span style="font-size: 12px;">
                                               Lagos, Nigeria (Remote-first)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope accent-color-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Email</h5>
                                            <span style="font-size: 12px;">
                                                support@letstrystride.com
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone accent-color-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Phone</h5>
                                            <span style="font-size: 12px;">
                                                0761-COMING-SOON
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-globe accent-color-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Website</h5>
                                            <span style="font-size: 12px;">
                                                www.letstrystride.com
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column p-5 rounded-4 w-100">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form
                                class="d-flex flex-column h-100 justify-content-center px-4 w-100 needs-validation form"
                                novalidate>
                                <div class="row row-cols-xl-2 row-cols-1">
                                    <div class="col mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control py-3 px-4" name="name" id="name"
                                            placeholder="Name" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                                            placeholder="Phone" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-xl-2 row-cols-1">
                                    <div class="col mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control py-3 px-4" name="email" id="email"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control py-3 px-4" name="subject" id="subject"
                                            placeholder="Subject" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control py-3 px-4" id="message" name="message" rows="5"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="btn btn-accent submit_form py-3 w-100 d-flex justify-content-center rounded-pill">
                                        Submit Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section p-0">
            <div class="r-container">
                <iframe loading="lazy" class="maps overflow-hidden"
                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
            </div>
        </div>

    </main>

<?php
include ('../layout/footer.php'); 
?>