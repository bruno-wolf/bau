  <?php
  require('includes/header.php');
  ?>
  <main class="wide">
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
        <h1>Welcome Friend to the Endless <span>World of Collectors</span></h1>
        <p>We are in beta version, and, for now, to became a BAÚ collector you need a join code. If you have a friend
          that is a member, ask him for a code. We are giving our collectors some new codes in regular basis.</p>
        <form action="#" method="POST" class="">
          <label for="join-code">
            join code
            <input type="text" name="join-code" id="join-code" placeholder="your code">
          </label>
          <button class="btn dark" aria-label="validate join code">next</button>
          <br>
        </form>
      </div>
    </section>
  </main>
  <?php require('includes/footer.php'); ?>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/intro.js"></script>
  </body>

  </html>