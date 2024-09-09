<?php
    include('widgets/header.php');
?>

<main>
    <section class="get-in-touch">
        <div class="get-in-touch-background-overlay"></div>
        <div class="container get-in-touch-main-content">
            <h1>Get In Touch</h1>
            <p>
                Fill the form to request more information about website or for any general inquiries.
            </p>
        </div>
    </section>
    <section class="contact-form">
        <div class="contact-form-main">
            <div class="container contact-form-main-content">
                <div class="row">
                    <div class="col-sm-8">
                        <form id="contact_page_form" action="form-handle.php" method="post">
                            <!--  onsubmit="return false" -->
                            <div class="form-main-content-heading">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="row form-main-content-inner-row" id="name-row">
                                <div><label class="inputfield-label">Name<span> *</span></label></div>
                                <div class="col-sm-6">
                                    <input type="text" class="input-field-small" name="firstname"
                                        placeholder="First Name" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="input-field-small" name="lastname"
                                        placeholder="Last Name" />
                                </div>
                                <div class="col-sm-12 form-main-content-error">
                                    <div class="collapse" id="fullName">
                                        <p class="form-main-content-error-text">Both (First and Last) are required.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-main-content-inner-row">
                                <div class="col-sm-6" id="email-inner-row">
                                    <div>
                                        <div>
                                            <label class="inputfield-label">Email<span> *</span></label>
                                        </div>
                                        <input type="text" class="input-field-small" name="emailaddress"
                                            placeholder="Email" />
                                        <div class="col-sm-12 form-main-content-error">
                                            <div class="collapse" id="emailAddress">
                                                <p class="form-main-content-error-text">Email is required.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="phone-inner-row">
                                    <div>
                                        <div>
                                            <label class="inputfield-label">Phone<span> *</span></label>
                                        </div>
                                        <input type="text" class="input-field-small" name="phonenumber"
                                            placeholder="Phone" />
                                        <div class="col-sm-12 form-main-content-error">
                                            <div class="collapse" id="phoneNumber">
                                                <p class="form-main-content-error-text">Phone Number is required.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-main-content-inner-row">
                                <div class="col-sm-12">
                                    <div>
                                        <label class="inputfield-label">Any Note</label>
                                    </div>
                                    <textarea name="any_note" placeholder="Your Note" class="input-field-small" rows="20"
                                        cols="100"></textarea>
                                </div>
                            </div>
                            <div class="row form-main-content-inner-row">
                                <div class="col-sm-12">
                                    <p class="i-agree-text">
                                        I agree to be contacted by WebSteers Web Development Team via call,
                                        email and text. To opt out, you can reply "stop" at any time or click the
                                        unsubscribe link in the emails. Message and data rates may apply.
                                    </p>
                                </div>
                            </div>
                            <div class="row form-main-content-inner-row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-main-content-heading pb-4">
                            <h4>Our Address</h4>
                        </div>
                        <div class="form-main-content-address">
                            <p class="address-text"><strong>Ph: </strong>+1 437-973-7783 (Dir)</p>
                            <p class="address-text"><strong>Off: </strong>+91 8968-444-720</p>
                            <p class="address-text"><strong>Mail: </strong>danishbansal60@gmail.com</p>
                        </div>
                        <div class="form-main-content-heading pb-4 pt-5">
                            <h4>Bathinda Location</h4>
                        </div>
                        <div class="form-main-content-address">
                            <p class="address-text">5 Nathaniel Crescent, Brampton, L6Y 5M2</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.2778976678123!2d-79.75514942430097!3d43.64238625313093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b154e37c6c071%3A0x44263d990a879224!2s5%20Nathaniel%20Crescent%2C%20Brampton%2C%20ON%20L6Y%205M2%2C%20Canada!5e0!3m2!1sen!2sin!4v1725685163136!5m2!1sen!2sin"
                                width="100%" height="150px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include('widgets/footer.php');
?>