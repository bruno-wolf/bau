  <?php
  require('includes/header.php');
  ?>
  <main>
    <section id="intro">
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
        <h1>For <span>Collectors</span></h1>
        <p>Form your shelves to the community</p>
        <a class="btn dark lg">start collecting</a>
        <div class="row">
          <a href="#" class="link">login</a>
          <a href="#" class="link">about</a>
        </div>
      </div>
    </section>
  </main>
  <?php require('includes/footer.php'); ?>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/intro.js"></script>
  </body>

  </html>