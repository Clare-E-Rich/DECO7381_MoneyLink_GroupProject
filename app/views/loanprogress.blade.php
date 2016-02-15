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
        <li><a href="/profile" id="welcome">Welcome {{{ $pdata['userfname'] or "" }}}</a></li> 
        <li><a href="/logout"><img id="logout" src="/foundation-5.4.0/img/logout_w.png"></a></li>

      </ul>
      </section>
    </nav>

    <! tab title -->
    <div class="row">
      <div class="large-12 columns">
        <ul class="inline-list" id="tab-area">
          <li id="active_title"><a>Loan Progress</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="tabs-content" id="main_tab">
          <div class="inline list">
            <h4 id="loan_header">Progress: {{  round($loan[0]->progress / $loan[0]->amount * 100, 2)  }}%
              <div class=" large-8 columns right"> 
                <div class="progress secondary round"> 
                  <span class="meter" style="width: {{  $loan[0]->progress / $loan[0]->amount * 100  }}%"></span> 
                </div>
              </div>

            </h4>
          </div>
          <hr></hr>

          <table>
            <thead>
              <tr>
                <th>Lender</th>
                <th>Offer Amount</th>
              </tr>
            </thead>
            <tbody>
             @if(isset($bids))
             @foreach($bids as $bid)
             <tr>
              <td><a href= {{ '/otherUsers/'.$bid-> user_id }}>{{ $bid-> fname }} {{ $bid-> lname }}</a></td>
              <td>{{ $bid-> bid_amount }}</td>
              </tr>
              @endforeach
              @endif

              </tbody>
            </table>

          </div>
        </div>
      </div>
       <?php include '/var/www/htdocs/MoneyLink/app/views/template/footer.php'; ?>

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
