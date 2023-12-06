<footer class="bg-dark ">
  <div class="container-fluid pt-5 pb-5" style="width: 90%;">
    <div class="row g-3">
      <div class="col-12 col-md-5 col-sm-12 text-white">
        <img src="assets/images/imperial-footer-logo.webp" alt="" class="img-fluid w-50">
        <p class="fs-5 footer-color">Imperial Wireless offers you suitable connections and data plans based on your demands and more potent connectivity. We are the leading provider of home wireless internet technology. We proactively monitor connections to guarantee high availability, speed, and privacy for our end users</p>
        <p>
          <span class="footer-color me-4 fw-bold">Follow us:</span>
          <a href="https://www.facebook.com/irgdigital/" class="footer-li"><i class="bi bi-facebook me-3"></i></a> <a href="https://www.instagram.com/imperialresourcesgroup/" class="footer-li"><i class="bi bi-instagram me-3"></i></a> <a href="https://www.linkedin.com/company/imperial-resource-group-llc-/" class="footer-li me-3"><i class="bi bi-linkedin "></i></a> <a href="https://twitter.com/ImperialRgroup" class="footer-li"><i class="bi bi-twitter "></i></a>
        </p>
      </div>
      <div class="col-12 col-md-3 col-sm-12">
        <ul class="lh-lg text-white" style="list-style: none;">
          <li>
            <h4 class="card-title m-0  p-0  text-white ">About<span class="text-white"> Imperial : </span></h4>
          </li>
          <li class="mt-3"><a href="about-us.php" class="text-decoration-none footer-li"> About Us</a> </li>
          <li><a href="privacy-policy.php" class="text-decoration-none footer-li"> Privacy Policy</a></li>
          <li> <a href="refund-policy.php" class="text-decoration-none footer-li"> Refund Policy</a></li>
          <li><a href="terms-and-conditions.php" class="text-decoration-none footer-li"> Term and Conditions</a></li>
          <li><a href="shipping-policy.php" class="text-decoration-none footer-li"> Shipping Policy</a> </li>
          <!-- <li><a href="" class="text-decoration-none footer-li"> Our Services</a> </li> -->
        </ul>
      </div>
      <div class="col-12 col-md-4 col-sm-12">
        <ul class=" text-white" style="list-style: none;">
          <li>
            <h4 class="card-title m-0  p-0  text-white">Contact<span class="text-white"> Information :</span></h4>
          </li>
          <li class="mt-3"><a href="" class="text-decoration-none footer-li"><span class="text-white">Trade Name:</span> Imperial Wireless</a> </li>
          <li><a href="mailto:info@ImperialInternet.com " class="text-decoration-none footer-li"><span class="text-white">Email:</span> info@ImperialInternet.com</a> </li>
          <li><a href="" class="text-decoration-none footer-li"><span class="text-white">Address:</span> <br /><small class="p-0 m-0">Imperial Technologies Inc, 869 Walnut Street, Macon GA 31201, United States</small></a></li>
        </ul>
        <ul class=" lh-base text-white" style="list-style: none;">
          <li>
            <h4 class="card-title m-0  p-0  text-white">Departments :</h4>
          </li>
          <li class="footer-li pt-2"><span class="footer-color"> Sales :</span> <a href="tel:(800) 660-2639" class="text-decoration-none footer-li">(800) 660-2639</a></li>
          <li class="footer-li"><span class="footer-color"> Billing :</span> <a href="tel:(888) 581-0740" class="text-decoration-none footer-li">(888) 581-0740</a></li>
          <li class="footer-li"><span class="footer-color">Technical Support :</span> <a href="tel:(888) 483-4115" class="text-decoration-none footer-li">(888) 483-4115</a></li>
          <li class="footer-li"><span class="footer-color">Customer Service :</span> <a href="tel:(888) 431-1090" class="text-decoration-none footer-li">(888) 431-1090</a></li>
        </ul>
        <ul class=" lh-base text-white" style="list-style: none;">
          <li>
            <h4 class="card-title m-0  p-0  text-white">Departments :</h4>
          </li>
          <li class=" pt-2"> <span class=" footer-color">8 am to 9 pm - EST</span></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</body>
<script>
  function show2() {
    document.getElementById('div1').style.display = 'block';
  }
</script>
<script>
  var orderButton = document.querySelector('.order');

  orderButton.addEventListener('click', function() {
    if (!orderButton.classList.contains('animate')) {
      orderButton.classList.add('animate');
      setTimeout(function() {
        orderButton.classList.remove('animate');
      }, 10000);
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 5,

    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
</script>
<script>
  // Get all the navbar links
  var navLinks = document.querySelectorAll('.nav-link');

  // Attach click event listeners to the navbar links
  navLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      // Remove the "active" class from all the navbar links
      navLinks.forEach(function(navLink) {
        navLink.classList.remove('active');
      });

      // Add the "active" class to the clicked navbar link
      this.classList.add('active');
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  const tabs = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const tabId = tab.getAttribute('data-tab');

      tabs.forEach(tab => {
        tab.classList.remove('active');
      });

      tab.classList.add('active');

      tabContents.forEach(content => {
        content.classList.remove('active');
        if (content.getAttribute('data-tab') === tabId) {
          content.classList.add('active');
        }
      });
    });
  });
</script>
<script>
  // JavaScript code to toggle heart icon state on click
  const heartIcons = document.querySelectorAll('.heart-icon');

  heartIcons.forEach((heartIcon) => {
    heartIcon.addEventListener('click', function() {
      this.classList.toggle('active');
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function() {
    const minus = $('.quantity__minus');
    const plus = $('.quantity__plus');
    const input = $('.quantity__input');
    minus.click(function(e) {
      e.preventDefault();
      var value = input.val();
      if (value > 1) {
        value--;
      }
      input.val(value);
    });

    plus.click(function(e) {
      e.preventDefault();
      var value = input.val();
      value++;
      input.val(value);
    })
  });
</script>
<!-- <script>
  console.clear();
  let inputs = document.querySelectorAll("input");
  let values = Array(4);
  let clipData;
  inputs[0].focus();

  inputs.forEach((tag, index) => {
    tag.addEventListener('keyup', (event) => {
      if (event.code === "Backspace" && hasNoValue(index)) {
        if (index > 0) inputs[index - 1].focus();
      }

      //else if any input move focus to next or out
      else if (tag.value !== "") {
        (index < inputs.length - 1) ? inputs[index + 1].focus(): tag.blur();
      }

      //add val to array to track prev vals
      values[index] = event.target.value;
    });

    tag.addEventListener('input', () => {
      //replace digit if already exists
      if (tag.value > 10) {
        tag.value = tag.value % 10;
      }
    });

    tag.addEventListener('paste', (event) => {
      event.preventDefault();
      clipData = event.clipboardData.getData("text/plain").split('');
      filldata(index);
    })
  })

  function filldata(index) {
    for (let i = index; i < inputs.length; i++) {
      inputs[i].value = clipData.shift();
    }
  }

  function hasNoValue(index) {
    if (values[index] || values[index] === 0)
      return false;

    return true;
  }
</script> -->

</html>