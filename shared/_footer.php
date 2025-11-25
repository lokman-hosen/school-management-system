<style>
  body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    background: #f8fafc;
    color: #333;
    scroll-behavior: smooth;
  }

  /* ===== Hero Section ===== */
  .hero {
    text-align: center;
    padding: 60px 20px 40px;
    background: linear-gradient(135deg, #007bff, #00aaff);
    color: white;
  }
  .hero h1 {
    font-size: 36px;
    margin-bottom: 10px;
  }
  .hero p {
    font-size: 16px;
    opacity: 0.9;
  }

  /* ===== Staff Cards Section ===== */
  .staff-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    padding: 60px 20px;
  }

  .staff-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    width: 260px;
    text-align: center;
    padding: 25px 20px;
    transition: all 0.3s ease;
  }

  .staff-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }

  .staff-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
  }

  .staff-card h3 {
    color: #007bff;
    font-size: 18px;
    margin: 8px 0 4px;
  }

  .staff-card p {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
  }

  .staff-card span {
    display: inline-block;
    background: #007bff;
    color: white;
    font-size: 13px;
    padding: 5px 12px;
    border-radius: 20px;
    margin-top: 6px;
  }

  /* ===== Scroll to Top Button ===== */
  #scrollToTopBtn {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background-color: #007bff;
    color: white;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 14px;
    border-radius: 50%;
    font-size: 18px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    display: none;
    z-index: 99;
  }
  #scrollToTopBtn:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
  }

  /* ===== Footer ===== */
  footer {
    background: #0d1b2a;
    color: #e0e6ed;
    padding: 50px 20px 25px;
  }

  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
    max-width: 1100px;
    margin: 0 auto;
  }

  .footer-column {
    flex: 1 1 220px;
    min-width: 200px;
  }

  .footer-column h3 {
    color: #00aaff;
    margin-bottom: 15px;
    font-size: 18px;
    border-left: 4px solid #00aaff;
    padding-left: 8px;
  }

  .footer-column p {
    font-size: 14px;
    color: #cdd6e0;
    line-height: 1.6;
  }

  .footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-column ul li {
    margin: 6px 0;
  }

  .footer-column ul li a {
    color: #e0e6ed;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s;
  }

  .footer-column ul li a:hover {
    color: #00aaff;
  }

  .footer-bottom {
    margin-top: 40px;
    font-size: 13px;
    color: #bbb;
    text-align: center;
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 15px;
  }

  @media (max-width: 700px) {
    .footer-container {
      flex-direction: column;
      text-align: center;
    }
    .footer-column h3 {
      border: none;
      padding-left: 0;
    }
  }
</style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
  <h1>Bright Future School</h1>
  <p>Empowering Students for Tomorrow through Education, Innovation, and Integrity</p>
</section>

<!-- Staff Cards -->
<section class="staff-container">
  <div class="staff-card">
    <img src="https://i.imgur.com/l7r7t9P.png" alt="Director">
    <h3>Mr. John firoba</h3>
    <p>School Director</p>
    <span>Administrator</span>
  </div>

  <div class="staff-card">
    <img src="https://i.imgur.com/l7r7t9P.png" alt="Teacher">
    <h3>Ms. lias john</h3>
    <p>Mathematics Teacher</p>
    <span>Teacher</span>
  </div>

  <div class="staff-card">
    <img src="https://i.imgur.com/Yh0tVh7.png" alt="Admin">
    <h3>Mr. Tomas Joe</h3>
    <p>System Administrator</p>
    <span>Admin</span>
  </div>
</section>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" title="Go to top">↑</button>

<!-- Footer -->
<footer>
  <div class="footer-container">
    <div class="footer-column">
      <h3>About School</h3>
      <p>Bright Future School provides holistic education that develops academic excellence, creativity, and leadership for future success.</p>
    </div>

    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="http://localhost/school-management-system/login.php">Admin</a></li>
        <li><a href="http://localhost/school-management-system/login.php">Students</a></li>
        <li><a href="http://localhost/school-management-system/login.php">Teachers</a></li>
        <li><a href="http://localhost/school-management-system/login.php">Parent Portal</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Academics</h3>
      <ul>
        <li><a href="#">Subjects</a></li>
        <li><a href="#">Timetable</a></li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Events</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Contact Us</h3>
      <ul>
        <li>📍 123 Education St, LZ</li>
        <li>📞  +1 900 123 456</li>
        <li>✉️ info@brightfuture.edu</li>
        <li><a href="#">Facebook</a> | <a href="#">Instagram</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 Bright Future School Management System — All Rights Reserved.
  </div>
</footer>

<script>
  const scrollBtn = document.getElementById("scrollToTopBtn");
  window.addEventListener("scroll", () => {
    scrollBtn.style.display = window.scrollY > 200 ? "block" : "none";
  });
  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
