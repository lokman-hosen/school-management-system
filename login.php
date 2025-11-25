<?php
error_reporting(0);
session_start();

if (isset($_SESSION['uid'])) {
  $uid = $_SESSION['uid'];
  include('assets/config.php');

  $query = "SELECT `role` FROM `users` WHERE `users`.`id`=?";
  $stmt = mysqli_prepare($conn, $query);

  mysqli_stmt_bind_param($stmt, "s", $uid);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_array($result);

  mysqli_stmt_close($stmt);

  if ($row && isset($row['role'])) {
    if ($row['role'] == "admin") {
      header('Location: admin_panel/dashboard.php');
      exit();
    } else if ($row['role'] == "owner") {
      header('Location: owner_panel/index.php');
      exit();
    } else if ($row['role'] == "teacher") {
      header('Location: teacher_panel/dashboard.php');
      exit();
    } else if ($row['role'] == "student") {
      header('Location: student_panel/index.php');
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>School Management System</title>
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="login-form-style.css">
  <link rel="icon" type="image/x-icon" href="images/1.png">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/loginimage.jpg" alt="">
        <div class="text">
          <span class="text-1">SCHOOL MANAGEMENT SYSTEM<br></span>
          <span class="text-2">Plan serve program</span>
        </div>
      </div>

    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">

          <div class="title" id='board-title'>Login</div>

          <div class="alert-box">
            <div class="alert alert-danger text-center mt-3" role="alert" id="error-msg">

            </div>
          </div>

          <form action="index.php" id="login-form" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" id='loginEmail' required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" id="password" required>
                <i class="bi bi-eye-fill" style="margin-left:auto;margin-right: 6px;" id="togglePassword"></i>
              </div>
              <div class="text"><a id="forgotpassword">Forgot password?</a></div> <br>
              <div class="text"><a href="index.php">Back to Home</a></div>
              <div class="button input-box">
                <button type="submit" class="btn">
                  Submit
                </button>
              </div>
            </div>
          </form>


          <!-- forgot password gui -->
          <form action="index.php" id="forgotPassword-form" method="post" style="display:none;">

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="forgotEmail" placeholder="Enter your email" required>
              </div>

              <div class="text" style="margin-bottom: 20px;display:flex">
                <a id="backToLogin">back to login?</a>
              </div>

              <div class="button input-box">
                <button type="submit" id='sendCodeBtn'>
                  Send Code
                </button>
              </div>

            </div>
          </form>

          <form id="otpVarification-form" method="post" style="display:none;">

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" value="some value" id="otpDisabledEmail">
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="otp" placeholder="Enter code" id="otpCode" required>
              </div>

              <div class="text" style="margin-bottom: 20px;display:flex">
                <a id="backToforgotPasswordForm">back</a>
                <a id="resendOTP" style='margin-left: auto;'>resend OTP?</a>
              </div>

              <div class="button input-box">
                <button type="submit" id='verifyCodeBtn'>
                  Verify Code
                </button>
              </div>

            </div>
          </form>


          <form id="createNewPassword-form" method="post" style="display:none;">

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="newpassword" id='newpassword' placeholder='Enter new password' required>
              </div>

              <div class="invalid-feedback" id='weakPasswordFeedback'></div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmpassword" id='confirmpassword' placeholder='Confirm password' required>
              </div>

              <div class="invalid-feedback" id='passwordNotSame'>
                New password and confirm password are not same!
              </div>

              <div class="form-check mt-3 ">
                <input class="form-check-input" type="checkbox" value="" id="showPasswords">
                <label class="form-check-label" for="showPasswords" id='showPasswordLabel'>
                  Show password
                </label>
              </div>

              <div class="button input-box">
                <button type="submit" id='changePasswordBtn'>
                  Change password
                </button>
              </div>

            </div>
          </form>

          <!-- end of forgot password gui --> <br>

<style>
  body {
    font-family: "Poppins", sans-serif;
    background: #f8fafc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  table {
    border-collapse: collapse;
    width: 360px;
    font-size: 13px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
  }
  th, td {
    padding: 6px 8px;
    text-align: left;
  }
  th {
    background: #007BFF;
    color: #fff;
    font-size: 13px;
  }
  tr:nth-child(even) {
    background: #f9f9f9;
  }
  button {
    background: #007BFF;
    color: white;
    border: none;
    padding: 3px 6px;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s;
  }
  button:hover {
    background: #0056b3;
  }
  .copied {
    background: #28a745 !important;
  }
  caption {
    font-weight: 600;
    margin-bottom: 6px;
    font-size: 14px;
  }
</style>
</head>
<body>

<table>
  <caption>🔑 Quick Login Access</caption>
  <thead>
    <tr>
      <th>Panel</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Admin</td>
      <td>
        admin@gmail.com 
        <button onclick="copyText('admin@gmail.com', this)">📋</button>
      </td>
      <td>
        123 
        <button onclick="copyText('123', this)">📋</button>
      </td>
    </tr>
    <tr>
      <td>Teacher</td>
      <td>
        teacher2@gmail.com 
        <button onclick="copyText('teacher2@gmail.com', this)">📋</button>
      </td>
      <td>
        123 
        <button onclick="copyText('123', this)">📋</button>
      </td>
    </tr>
    <tr>
      <td>Student</td>
      <td>
        student@gmail.com 
        <button onclick="copyText('student@gmail.com', this)">📋</button>
      </td>
      <td>
        123 
        <button onclick="copyText('123', this)">📋</button>
      </td>
    </tr>
    <tr>
      <td>Owner</td>
      <td>
        owner@gmail.com 
        <button onclick="copyText('owner@gmail.com', this)">📋</button>
      </td>
      <td>
        123 
        <button onclick="copyText('123', this)">📋</button>
      </td>
    </tr>
  </tbody>
</table>

<script>
  async function copyText(text, btn) {
    try {
      await navigator.clipboard.writeText(text);
      btn.textContent = "✅";
      btn.classList.add("copied");
      setTimeout(() => {
        btn.textContent = "📋";
        btn.classList.remove("copied");
      }, 1200);
    } catch (err) {
      alert("Copy failed, please copy manually.");
    }
  }
</script>

        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="index.js"></script>


</body>

</html>