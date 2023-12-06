<?php
$title = "All-in-one solution for internet, TV, and phone across the USA";
$description = "Imperial Internet is facilitating the US' with affordable data plans. A one-inclusive solution to all quality digital requirements.";
include("include/dashboard-nav.php") ?>


<div class="container-fluid">
    <div class="row">
    <?php include("include/side-bar.php")?>
        <div class="col-12 col-md-9 col-sm-12 p-5">
            <form class="row g-3">
                <div class="col-12 col-md-5 col-sm-12">
                    <label for="newpassword" class="form-label fw-bold">Enter New Password:</label>
                    <input type="password" class="form-control bg-light" id="newpassword">
                </div>
                <div class="col-12 col-md-5 col-sm-12">
                    <label for="confirmpassword" class="form-label fw-bold">Confirm New Password:</label>
                    <input type="password" class="form-control bg-light" id="confirmpassword">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn bttn" style="padding: 7px 40px;">Submit</button>
                </div>
            </form>

            <div class="d-flex justify-content-end">
                <img src="assets/images/models.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>


</div>

<?php include("include/footer.php") ?>