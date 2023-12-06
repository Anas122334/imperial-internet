<?php
$title = "You can pay your Imperial bills online, in person, by phone, or by mail.";
$description = "Pay your Imperial bills online without logging in! Simply enter your Imperial phone number or account number to quickly and simply pay your bill online.";
include("include/header.php") ?>

<div class="container mt-5 mb-5 overflow-hidden">
    <h3 class="icon-style font">Payment</h3>

    <div class="row mt-3 g-5 overflow-hidden">
        <!-- product card  -->
        <div class="col-12 col-md-7 col-sm-12 overflow-hidden">
            <form class="row g-3 font">
                <h4 class="font">Details</h4>
                <hr class="m-0 mb-2 mt-2">
                <ul class="p-0 mt-3 lh-lg size">
                    <li class="d-flex justify-content-between">
                        <span class="text-black-50 ">First Name</span>
                        <span class="text-black-50">Anas</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span class="text-black-50">Email</span>
                        <span class="text-black-50">anarasheed161@gmal.com</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span class="text-black-50 ">Phone Number</span>
                        <span class="text-black-50">+12635246898</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span class="text-black-50 ">Products</span>
                        <span class="text-black-50">2x Galaxy S10</span>
                    </li>
                    <hr>
                    <li class="d-flex justify-content-between">
                        <span class="text-black-50">Ship to</span>
                        <span class="text-black-50 ">Random Address Random City 45682</span>
                    </li>
                </ul>

                <h4 class="font pt-3">Shipping Details</h4>
                <p class="text-black-50">Select Address That Matches Your Card Or Payment Method</p>
                <hr class="m-0 mb-3">
                <div class="form-check d-flex align-items-center text-black-50">
                    <input class="form-check-input me-2" name="RadioAlfalah" value="igottwo" type="radio" id="RadioAlfalah">
                    <label class="form-check-label" for="RadioAlfalah">
                        Same as Billing Address
                    </label>

                </div>
                <hr class="">
                <div class="form-check d-flex align-items-center m-0 text-black-50">
                    <input class="form-check-input me-2" name="RadioAlfalah" value="igottwo" onclick="show2();" type="radio" id="RadioAlfalah">
                    <label class="form-check-label " for="RadioAlfalah">
                        Use a Different Address
                    </label>

                </div>
                <div class="col-12 col-md-12 col-sm-12 overflow-hidden">

                    <div class=" hide  mt-3 p-2" id="div1">
                        <div class="container row g-3">
                            <hr class="m-0 mb-3">
                            <div class="col-12 col-md-6 col-sm-12">
                                <label for="firstname" class="form-label ">First Name <span class="icon-style">*</span></label>
                                <input type="text" class="form-control shadow-sm" id="firstname" name="firstname" placeholder="First Name">
                            </div>
                            <div class="col-12 col-md-6 col-sm-12">
                                <label for="lastname" class="form-label">Last Name <span class="icon-style">*</span></label>
                                <input type="text" class="form-control shadow-sm" id="lastname" name="lastname" placeholder="Last Name">
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
                            <div class="col-12 col-md-12 col-sm-12">
                                <a type="submit" class="btn btn-outline-danger text-dark fs-5">Continue</a>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-12 col-md-5 col-sm-12 border-start font overflow-hidden">
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
                <!-- <a type="submit" class="btn btn-outline-danger text-dark fs-5">Check Out</a> -->

                <button class="order btn" type="submit"><span class="default">Complete Order</span><span class="success">Order Placed<svg viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg></span>
                    <div class="box"></div>
                    <div class="truck">
                        <div class="back"></div>
                        <div class="front">
                            <div class="window"></div>
                        </div>
                        <div class="light top"></div>
                        <div class="light bottom"></div>
                    </div>
                    <div class="lines"></div>
                </button>
            </div>
        </div>

    </div>
</div>

<?php include("include/footer.php") ?>