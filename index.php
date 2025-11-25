<?php include('shared/_header.php');?>

  <main>
    <div class="big-wrapper light">
      <img src="./images/shape.png" alt="" class="shape" />

     <?php include('shared/_navbar.php'); ?>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-6 d-flex justify-content-center get-started" style="height: 550px;">
            <div class=" d-flex justify-content-center align-items-center">
              <div>
                <div class="big-title">
                  <h1>Future is here,</h1>
                  <h1>Start Exploring now.</h1>
                </div>
                <p class="text">
                  streamline processes, manage resources, track student data, facilitate
                  communication, and enhance administrative tasks effectively.
                </p>
                <div class="cta">
                  <a href="login.php" class="btn">Get started</a>
                </div>
 

              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 image-box">

            <img src="./images/children.png" alt="Person Image" class="person" />
          </div>
        </div>
      </div>


  <?php include('shared/feature-cards.php'); ?>
      

      <div class="container mt-3">
        <hr>
      </div>

      <div class="container mt-3 carousel-box">

        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </div>


  </main>


<title>Scroll to Top Button</title>
<style>
  body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
  }

  /* Just for demo content */
  .content {
    height: 2000px;
    background: linear-gradient(180deg, #f5f7fa 0%, #e2ebf0 100%);
    padding: 20px;
  }

  /* Scroll to Top Button */
  #scrollToTopBtn {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background-color: #007BFF;
    color: white;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 14px;
    border-radius: 50%;
    font-size: 18px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    display: none; /* hidden by default */
  }

  #scrollToTopBtn:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
  }
</style>
</head>
<body>



<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" title="Go to top">↑</button>

<script>
  const scrollBtn = document.getElementById("scrollToTopBtn");

  // Show the button when the user scrolls down
  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  });

  // Scroll smoothly to top
  scrollBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
</script>


  <?php include('shared/_footer.php'); ?>
