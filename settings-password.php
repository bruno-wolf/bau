  <?php
  require('includes/header.php');

  $list = array(
    1 => array(
      'name' => 'Yoda Sixth Scale Figure',
      'categ' => 'figure',
      'brand' => 'Sideshow Collectibles',
      'img' => 'yoda_01.jpg',
      'link' => ''
    ),
    2 => array(
      'name' => '1/6 Harley Quinn',
      'categ' => 'figure',
      'brand' => 'Hot Toys Batman',
      'img' => 'harley-quinn-01.jpg',
      'link' => ''
    ),
    3 => array(
      'name' => 'Freddy Vs Jason',
      'categ' => 'Bishoujo',
      'brand' => 'figure',
      'img' => 'bishoujo-03.jpg',
      'link' => ''
    ),
  );
  $item_name = '75159 Death Star';
  ?>
  <main>
    <section id="settings">
      <div class="form">
        <form action="" method="POST">
          <label for="actual-password">current password</label>
          <div class="password-container">
            <button class="btn-icon" aria-label="show password">
              <svg>
                <use href="#i-eye" />
              </svg>
            </button>
            <input type="password" name="actual-password" id="actual-password" autocomplete="current-password">
          </div>
          <label for="new-password">new password</label>
          <div class="password-container">
            <button class="btn-icon" aria-label="show password">
              <svg>
                <use href="#i-eye" />
              </svg>
            </button>
            <input type="password" name="new-password" id="new-password" autocomplete="current-password">
          </div>
          <div class="right">
            <button class="btn dark">Save</button>
          </div>
        </form>
      </div>
      <div class="nav">
        <button class="btn-icon" aria-label="toggle settings menu">
          <svg>
            <use href="#i-cross" />
          </svg>
        </button>
        <nav>
          <a href="#" class="selected">Personal Info</a>
          <a href="#">Change Password</a>
          <a href="#">Your Connections</a>
          <a href="#">Legal</a>
        </nav>
      </div>
    </section>
  </main>

  <?php require('includes/footer.php'); ?>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/settings.js"></script>
  </body>

  </html>