<?php
$title = "All-in-one solution for internet, TV, and phone across the USA";
$description = "Imperial Internet is facilitating the US' with affordable data plans. A one-inclusive solution to all quality digital requirements.";
include("include/dashboard-nav.php") ?>


<div class="container-fluid">
    <div class="row ">
    <?php include("include/side-bar.php")?>
        <div class="col-12 col-md-9 col-sm-12 p-5">
            <h5 class="fw-bold">Forget Password?</h5>
            <form class="row g-3 mt-3">
                <div class="row">
                    <div class=" col-12 col-md-5 col-sm-12">
                        <label for="email&number" class="form-label fw-bold">Enter Phone Number or Email:</label>
                        <input type="email" class="form-control bg-light" id="email&number">
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-5 col-sm-12">
                    <label for="email&number" class="form-label fw-bold">Enter Code:</label>
                    <div class="row1">
                        <input class="inp1 form-control" id="otp-first" type="number" min="0" max="9" step="1" aria-label="first digit" />
                        <input class="inp1 form-control" id="otp-second" type="number" min="0" max="9" step="1" aria-label="second digit" />
                        <input class="inp1 form-control" id="otp-third" type="number" min="0" max="9" step="1" aria-label="third digit" />
                        <input class="inp1 form-control" id="otp-fourth" type="number" min="0" max="9" step="1" aria-label="fourth digit" />
                    </div>
                    <a href="new-password.php" type="submit" class="btn bttn mt-3" style="padding: 6px 40px;">Confirm</a>
                </div>
            </form>

            <div class="d-flex justify-content-end mt-3">
                <img src="assets/images/models.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>


</div>

<?php include("include/footer.php") ?>