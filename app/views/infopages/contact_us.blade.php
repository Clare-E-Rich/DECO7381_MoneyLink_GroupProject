<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">
</header>
<body>

  <! navigation bar -->
  <?php include '/var/www/htdocs/MoneyLink/app/views/template/nav.php'; ?>
      <! contact us page -->


<div class="row">
  <div class="large-12 columns">

  <table border = 0 width = 800>
    <tr>
  <td align =left width = 450>
                  <div class="large-6 columns contact_form_bg">
                    <h3 class="contact_title">Contact Form</h3>
                    <div class="large-10 columns">
                    <label class="bold_label">First Name:
                      <input type="text" placeholder="Please fill in your first name">
                    </label>
                    <label class="bold_label">Last Name:
                      <input type="text" placeholder="Please fill in your last name">
                    </label>
                    <label class="bold_label">E-mail:
                      <input type="text" placeholder="Please fill in your Email address">
                    </label>
                    <label class="bold_label">Tel:
                      <input type="text" placeholder="Please fill in your telephone number">
                    </label>
                    <label class="bold_label">Leave us a message
                    <textarea placeholder="Live us your message"></textarea>
                    </label>
                    <div class="bold"> 
                <a href="#" id='saveProfileBtn' class="secondary small button">Send</a>
            </div>
                    </div>
                  </div>
      </td>
      <td align=right width = 500 >
                  <div class="large-6 columns contact_bg">
                  <div class="large-10 columns">
                    <h3 class="contact_title">Contact Us</h3>
                    <h5 class="bold">E-mail:</h5>
                    <p class="normal padding">moneylink@gmail.com</p>
                    <h5 class="bold">Tel:</h5>
                    <p class="normal padding">0414168187</p>
                    <h5 class="bold">Address:</h5>
                    <p class="normal padding">University of Queensland</p>
                  </div>
                  </div>
              </div>
            </div>
      </td>
    </tr>
  </table>
</div>
</div>

  <footer>
  <div class="row">
    <div class="large-3 columns">
      <p><img id="logo" src="../foundation-5.4.0/img/logos.png">
        <img id="font" src="../foundation-5.4.0/img/font.png"></p>
      </div>
      <div class="large-9 columns">
        <ul class="inline-list right">
          <li><a href="/contact" id="bottom_links">Contact Us</a></li>
          <li><a href="/about" id="bottom_links">About MoneyLink</a></li>
          <li><a href="/hworks" id="bottom_links">How MoneyLink works</a></li>
          <li><a href="/policy" id="bottom_links">Privacy Policy</a></li>
          <li><a href="/term" id="bottom_links">Term of Use</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="/foundation-5.4.0/js/vendor/jquery.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.js"></script>
  <script src="/foundation-5.4.0/js/loanApp.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
  <script src="/foundation-5.4.0/js/foundation/foundation.tab.js"></script>
  <script>
  $(document).foundation();
  getStep();
  enableBtns();
  </script>   
</body>
</html>
