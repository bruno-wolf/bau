  <?php
  require('includes/header.php');
  ?>
  <main>
    <section id="intro" class="second">
      <div id="animation">
        <div class="diagonal"></div>
        <svg>
          <use href="#f-batman" />
        </svg>
        <svg class="selected">
          <use href="#f-pop" />
        </svg>
        <svg>
          <use href="#f-gundam" />
        </svg>
        <svg>
          <use href="#f-lego" />
        </svg>
      </div>
      <div id="action">
        <form action="#" method="POST" class="hide">
          <h1>Welcome Friend to the Endless <span>World of Collectors</span></h1>
          <label for="name">
            name
            <input type="text" name="name" id="name">
          </label>
          <label for="email">
            email
            <input type="email" name="email" id="email">
          </label>
          <label for="login-password">
            password
            <div class="password-container">
              <button type="button" class="btn-icon" aria-label="show password">
                <svg>
                  <use href="#i-eye" />
                </svg>
              </button>
              <input type="password" name="password" id="login-password" autocomplete="current-password">
            </div>
          </label>
          <button class="btn dark" aria-label="validate join code">next</button>
          <br>
        </form>
        <div class="message ">
          <svg class="icon">
            <use href="#i-mail" />
          </svg>
          <h2>Check Your Email</h2>
          <p>We have sent you an email with the link for activate your account</p>
        </div>
      </div>
    </section>
  </main>
  <?php require('includes/footer.php'); ?>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/intro.js"></script>
  </body>

  </html>