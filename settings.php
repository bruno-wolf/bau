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
          <label for="name">name</label>
          <input type="text" name="name" id="name" value="">
          <label for="email">email</label>
          <input type="email" name="email" id="name" value="">
          <label for="location">location</label>
          <input type="text" name="location" id="location" value="">
          <label for="nickname">nickname</label>
          <input type="text" name="nickname" id="nickname" value="">
          <div>
            <div class="btn-profile lg">
              <figure>
                <img src="media/users/ian-mcKellen.jpg" alt="user">
              </figure>
            </div>
            <label for="profile">profile picture</label>
            <input type="file" name="profile" id="profile">
          </div>
          <label for="quote">quote</label>
          <textarea name="quote" id="quote" value=""></textarea>
          <label for="author">author</label>
          <input type="text" name="author" id="author" value="">
        </form>
      </div>
      <div class="nav">
        <button class="btn-icon">
          <svg>
            <use href="#i-burguer" />
          </svg>
        </button>
        <nav>
          <a href="#">Personal info</a>
          <a href="#">Change password</a>
          <a href="#">Your connections</a>
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