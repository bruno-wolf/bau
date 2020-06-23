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
  $item_name = '75159 death star';
  ?>
  <main>
    <section id="item-new" class="item-new hide">
      <h1>That Great Feeling Of Adding a <span>New Collectible</span></h1>
      <form action="" method=" POST">
        <label>
          <input type="text" name="item-name" placeholder="colectible name">
        </label>
        <button class="btn dark">next</button>
      </form>
    </section>

    <section id="item-check" class="item-new hide">
      <h1>Is This Your <span>New Collectible?</span></h1>
      <div class="results">
        <?php foreach ($list as $item) : ?>
          <div class="result-item">
            <a href="<?= $item['link']; ?>">
              <div>
                <img src="media/figures/<?= $item['img']; ?>" alt="bishoujo" class="no-d">
              </div>
              <div>
                <span class="name"><?= $item['name']; ?></span>
                <span class="cat"><?= $item['brand']; ?></span>
              </div>
              <div>
                <svg>
                  <use href="#i-arrow" />
                </svg>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="center">
        <button class="btn soft-outline">None of the above</button>
      </div>
      </div>
    </section>

    <section id="item-detail" class="item-new">
      <?php if (isset($item_name) && !empty($item_name)) : ?>
        <h1>Add The Remaining Details <?= 'of Your <span>' . $item_name; ?></span></h1>
      <?php else : ?>
        <h1>Add All The Details Of Your Collectible</h1>
      <?php endif; ?>
      <form action="" method="POST">
        <label for="item-name">name</label>
        <input type="text" name="item-name" id="item-name" value="<?= $item_name; ?>" require>
        <label for="item-brand">brand</label>
        <input type="text" name="item-brand" id="item-brand" require>
        <label for="item-cat">category</label>
        <select name="item-cat" id="item-cat" require>
          <option value="">select one</option>
          <option value="1">Lego</option>
          <option value="2">Figure</option>
          <option value="3">Funko Pop</option>
          <option value="4">Action Figure</option>
        </select>
        <label for="item-desc">description</label>
        <textarea name="item-desc" id="item-desc" require></textarea>
        <label for="item-quote">quote</label>
        <textarea name="item-quote" id="item-quote"></textarea>
        <label for="item-quantity">quantity</label>
        <input type="number" name="item-quantity" id="item-quantity" require>
        <label for="item-mint">inside the box?</label>
        <select name="item-mint" id="item-mint" require>
          <option value="">select one</option>
          <option value="1">yes</option>
          <option value="0">no</option>
        </select>
        <label for="item-price">price</label>
        <input type="number" name="item-price" id="item-price">
        <label for="item-for">available to</label>
        <select name="item-for" id="item-for" require>
          <option value="">select one</option>
          <option value="1">sell</option>
          <option value="2">trade</option>
          <option value="3">none</option>
        </select>
        <div class="right">
          <button class="btn dark">next</button>
        </div>
      </form>
    </section>
  </main>

  <?php require('includes/footer.php'); ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="assets/js/all.js"></script>
  </body>

  </html>