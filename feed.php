  <?php
  require('includes/header.php');

  $colectibles = array(

    1 => array(
      'name'        => 'Yoda Sixth Scale Figure',
      'brand'       => 'Sideshow Collectibles',
      'owner'       => 'mr.wolf',
      'item-count'  => 1002,
      'photo'       => 'bruno-lobato.jpg',
      'img'         => 'yoda_01.jpg',
      'date'        => '22 mai',
      'fav'         => 1,
      'like'        => 0,
      'link'        => ''
    ),
    2 => array(
      'name'        => '1/6 Harley Quinn',
      'brand'       => 'Hot Toys Batman',
      'owner'       => 'jaredguetto',
      'item-count'  => 6709,
      'photo'       => 'jared-leto.jpg',
      'img'         => 'harley-quinn-01.jpg',
      'date'        => '22 mai',
      'fav'         => 0,
      'like'        => 1,
      'link'        => ''
    ),
    3 => array(
      'name'        => 'Freddy Vs Jason',
      'brand'       => 'Bishoujo',
      'owner'       => 'Ian McKellen',
      'item-count'  => 130,
      'photo'       => 'ian-mckellen.jpg',
      'img'         => 'bishoujo-01.jpg',
      'date'        => '23 mai',
      'fav'         => 0,
      'like'        => 0,
      'link'        => ''
    ),
    4 => array(
      'name'        => 'Alien Takayuki Takeya',
      'brand'       => 'Figma SP-108',
      'owner'       => 'Sigourney Weaver',
      'item-count'  => 12,
      'photo'       => 'mark-hamill.jpg',
      'img'         => 'alien-01.jpg',
      'date'        => '23 mai',
      'fav'         => 0,
      'like'        => 1,
      'link'        => ''
    )
  )
  ?>
  <main>

    <?php include('includes/search.php'); ?>

    <section id="feed">
      <!--CARD -->
      <?php foreach ($colectibles as $item) : ?>
        <div class="card">
          <div class="card-header">
            <div>
              <span class="data name"><?= $item['name']; ?></span>
              <span class="data brand"><?= $item['brand']; ?></span>
            </div>
            <div>
              <div>
                <span class="data owner"><?= $item['owner']; ?></span>
                <span class="data item-count"><?= $item['item-count']; ?></span>
              </div>
              <button class="btn-profile">
                <figure>
                  <img src="media/users/<?= $item['photo']; ?>" alt="user">
                </figure>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="main-carousel">
              <div class="carousel-cell">
                <a href="#">
                  <img src="media/figures/<?= $item['img']; ?>" alt="<?= $item['name']; ?>" class="no-d">
                </a>
              </div>
              <div class="carousel-cell">
                <a href="#">
                  <img src="media/figures/<?= $item['img']; ?>" alt="<?= $item['name']; ?>" class="no-d">
                </a>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div>
              <span class="data date"><?= $item['date']; ?></span>
            </div>
            <div class="btn-group">

              <button class="btn-icon fav <?php if ($item['fav'] == 1) {
                                            echo 'selected';
                                          } ?>" aria-label="add to favourite">
                <svg>
                  <use href="#i-bookmark" />
                </svg>
              </button>
              <button class="btn-icon like <?php if ($item['like'] == 1) {
                                              echo 'selected';
                                            } ?>" aria-label="like">
                <svg>
                  <use href="#i-like" />
                </svg>
              </button>
              <button class="btn-icon share" aria-label="share">
                <svg>
                  <use href="#i-share" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </main>

  <?php require('includes/footer.php'); ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/feed.js"></script>
  </body>

  </html>