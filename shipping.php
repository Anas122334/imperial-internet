<?php
$title = "Imperial Internet Services-Imperial Fiber, Wireless, and Broadband";
$description = "Get reliable, fast, and safe Internet service from Imperial Internet, Wireless Internet Service Provider-Imperial Fiber, Imperial Wireless, and Imperial Broadband.";
include("include/header.php") ?>

<div class="container mt-5 mb-5">
    <h3 class="icon-style font">Shipping</h3>

    <div class="row mt-3 g-5">
        <!-- product card  -->
        <div class="col-12 col-md-7 col-sm-12">
            <form class="row g-3 font">
                <h4 class="font">Your Details</h4>
                <hr class="m-0 mb-3">
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="firstname" class="form-label ">Full Name <span class="icon-style">*</span></label>
                    <input type="text" class="form-control shadow-sm" id="firstname" name="firstname" placeholder="First Name">
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="email" class="form-label">Email <span class="icon-style">*</span></label>
                    <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="Last Name">
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="mobilenumber" class="form-label">Mobile Number <span class="icon-style">*</span></label>
                    <input type="tel" class="form-control shadow-sm" id="mobilenumber" placeholder="Mobile Number">
                </div>
                <h4 class="font pt-3">Shipping Details</h4>
                <hr class="m-0 mb-3">
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="housenumber" class="form-label">Street/House Number <span class="icon-style">*</span></label>
                    <input type="text" class="form-control shadow-sm" id="housenumber" name="housenumber" placeholder="Street/House Number">
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="Country" class="form-label">Country <span class="icon-style">*</span></label>
                    <select id="Country" class="form-select shadow-sm">
                        <option selected>USA</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="State" class="form-label">State/Province <span class="icon-style">*</span></label>
                    <input type="text" class="form-control shadow-sm" id="State" placeholder="State" name="State">
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="City" class="form-label">City <span class="icon-style">*</span></label>
                    <input type="text" class="form-control shadow-sm" id="City" placeholder="City">
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="postalcode" class="form-label">Postal Code <span class="icon-style">*</span></label>
                    <input type="number" class="form-control input1 shadow-sm" id="postalcode" name="postalcode" placeholder="Postal Code">
                </div>

            </form>
        </div>
        <div class="col-12 col-md-5 col-sm-12 border-start font">
            <h4 class="font">Summary</h4>
            <hr class="m-0 mb-3 mt-3">
            <ul class="p-0 mt-4 lh-lg size">
                <li class="d-flex justify-content-between">
                    <span class="text-black-50 ">Subtotal (Excl. Tax)</span>
                    <span class="text-black-50">$587.49</span>
                </li>
                <li class="d-flex justify-content-between">
                    <span class="text-black-50">FBR Service Charges</span>
                    <span class="text-black-50">$4</span>
                </li>
                <li class="d-flex justify-content-between">
                    <span class="text-black-50 ">Shipping (Fixed - Shipping)</span>
                    <span class="text-black-50">$0</span>
                </li>
                <hr>
                <li class="d-flex justify-content-between">
                    <span class="fs-5 fw-bold ">Order Total</span>
                    <span class="fs-5  ">$587.49</span>
                </li>
            </ul>
            <label for="firstname" class="form-label size text-black-50">APPLY DISCOUNT CODE </label>

            <div class="input-group mb-3">

                <input type="text" class="form-control form-control-lg" placeholder="ENTER DISCOUNT CODE" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-dark rounded" type="button" id="button-addon2">APPLY DISCOUNT</button>
            </div>
            <div class="col-12 d-flex flex-column pt-3">
                <a href="payment.php" type="submit" class="btn btn-outline-danger text-dark fs-5">Check Out</a>
            </div>
        </div>

    </div>
</div>

<?php include("include/footer.php") ?>