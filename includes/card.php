<?php
$list = array(

  1 => array(
    'name' => 'Yoda Sixth Scale Figure',
    'brand' => 'Sideshow Collectibles',
    'user' => 'mr.wolf',
    'user_photo' => 'bruno-lobato.jpg',
    'item_count' => 1002,
    'img' => 'yoda_01.jpg',
    'date' => '22 mai',
    'fav' => 1,
    'like' => 0,
    'link' => ''
  ),
  2 => array(
    'name' => '1/6 Harley Quinn',
    'brand' => 'Hot Toys Batman',
    'user' => 'jaredguetto',
    'user_photo' => 'jared-leto.jpg',
    'item_count' => 6709,
    'img' => 'harley-quinn-01.jpg',
    'date' => '22 mai',
    'fav' => 0,
    'like' => 1,
    'link' => ''
  ),
  3 => array(
    'name' => 'Freddy Vs Jason',
    'brand' => 'Bishoujo',
    'user' => 'Ian McKellen',
    'user_photo' => 'ian-mckellen.jpg',
    'item_count' => 130,
    'img' => 'bishoujo-01.jpg',
    'date' => '23 mai',
    'fav' => 0,
    'like' => 0,
    'link' => ''
  ),
  4 => array(
    'name' => 'Alien Takayuki Takeya',
    'brand' => 'Figma SP-108',
    'user' => 'Sigourney Weaver',
    'user_photo' => 'mark-hamill.jpg',
    'item_count' => 12,
    'img' => 'alien-01.jpg',
    'date' => '23 mai',
    'fav' => 0,
    'like' => 1,
    'link' => ''
  )
);

// CARD
foreach ($list as $item) : ?>
  <div class="card">
    <div class="card-header">
      <div>
        <span class="data name"><?= $item['name']; ?></span>
        <span class="data brand"><?= $item['brand']; ?></span>
      </div>
      <div>
        <div>
          <span class="data user"><?= $item['user']; ?></span>
          <span class="data item-count"><?= $item['item_count']; ?></span>
        </div>
        <button class="btn-profile">
          <figure>
            <img src="media/users/<?= $item['user_photo']; ?>" alt="user">
          </figure>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="carousel">
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