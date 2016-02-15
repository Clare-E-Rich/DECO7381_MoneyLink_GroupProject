<!DOCTYPE html>
<header>
  <link rel="stylesheet" href="../foundation-5.4.0/css/foundation.css">
  <link rel="stylesheet" href="../foundation-5.4.0/css/css_self.css">

</header>
<body>


  <! navigation bar -->

  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <img id="logo" src="../foundation-5.4.0/img/logos.png">
        <img id="font" src="../foundation-5.4.0/img/font.png">
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <!-- <li class="toggle-topbar menu-icon"><a href="home"><span>Menu</span></a></li> -->
    </ul>
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="profile" id="welcome">Welcome {{{ $pdata['userfname'] or "" }}}</a></li> 
          <li><a href="logout"><img id="logout" src="../foundation-5.4.0/img/logout_w.png"></a></li>

        </ul>
      </section>
    </nav>

    <! tab title -->
    <div class="row">
      <div class="large-12 columns">
        <ul class="inline-list" id="tab-area">
          <li id="active_title"><a href="loanprogress">Loan Bids</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="tabs-content" id="main_tab">
            <p>These are offers for your loan applicant.</p>
          <table>
            <thead>
              <tr>
                <th>Applicant</th>
                <th>Loan Amount</th>
                <th>Email Address</th>
              </tr>
            </thead>
            <tbody>
             @if(isset($allLoan))
             @foreach($allLoan as $result)
             <tr>
              <td>{{ $result-> fname }} {{ $result-> lname }}</td>
              <td>{{ $result-> amount }}</td>
              <td></td>
              </tr>
              @endforeach
              @endif

              @if(isset($results))
              @foreach($results as $result)
              <tr>
                <td>{{ $result-> fname }} {{ $result-> lname }}</td>
                <td>{{ $result-> amount }}</td>
                <td></td> 
                </tr>
                @endforeach
                @endif

              </tbody>
            </table>

          </div>
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
                <li><a href="#" id="bottom_links">Contact Us</a></li>
                <li><a href="about" id="bottom_links">About MoneyLink</a></li>
                <li><a href="hworks" id="bottom_links">How MoneyLink works</a></li>
                <li><a href="#" id="bottom_links">Privacy Policy</a></li>
                <li><a href="#" id="bottom_links">Term of Use</a></li>
              </ul>
            </div>
          </div>
        </footer>

        <script src="../foundation-5.4.0/js/vendor/jquery.js"></script>
        <script src="../foundation-5.4.0/js/foundation/foundation.js"></script>
        <script src="../foundation-5.4.0/js/loanApp.js"></script>
        <script src="../foundation-5.4.0/js/foundation/foundation.topbar.js"></script>
        <script src="../foundation-5.4.0/js/foundation/foundation.tab.js"></script>
        <script src="../foundation-5.4.0/js/foundation/foundation.reveal.js"></script>
        <script>
        $(document).foundation();
        getStep();
        enableBtns();
        make_bid();
        </script>   
      </body>
      </html>
