  <?php
  require('includes/header.php');
  ?>
  <main>
    <section id="check-new" class="hide">
      <h1>Your New Collectible is Ready!</h1>
      <p>Take a quick look to the info you added and check if it’s all OK or need some changses</p>
      <div>
        <button class="btn">Add to my collection</button>
        <button class="btn dark">Edit</button>
      </div>
    </section>
    <section id="item">
      <div class="carousel">
        <div class="carousel-cell">
          <img src="media/figures/yoda_01.jpg" alt="" class="no-d">
        </div>
        <div class="carousel-cell">
          <img src="media/figures/yoda_02.jpg" alt="" class="no-d">
        </div>
      </div>
      <div class="info hide">
        <div class="title">
          <h1>Yoda Sixth Scale Figure</h1>
          <p>Sideshow Collectibles | Star Wars</p>
        </div>
        <div class="desc">
          <div>
            <div class="btn-profile" aria-label="toggle navigation">
              <figure>
                <img src="media/users/bruno-lobato.jpg" alt="user">
              </figure>
            </div>
          </div>
          <div>
            <p><b>mr.wolf</b> Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod.</p>
            <span class="date">20:00 13 jun 20</span>
          </div>
        </div>
      </div>
      <nav>
        <div class="drawer">
          <button class="btn-icon close" aria-label="close drawer">
            <svg>
              <use href="#i-cross" />
            </svg>
          </button>
          <!-- info -->
          <div class="info handler hide" data-handler="info">
            <div class="title">
              <h1>Yoda Sixth Scale Figure</h1>
              <p>Sideshow Collectibles | Star Wars</p>
            </div>
            <div class="desc">
              <div>
                <div class="btn-profile" aria-label="toggle navigation">
                  <figure>
                    <img src="media/users/bruno-lobato.jpg" alt="user">
                  </figure>
                </div>
              </div>
              <div>
                <p><b>mr.wolf</b> Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod.</p>
                <span class="date">20:00 13 jun 20</span>
              </div>
            </div>
            <div class="center">
              <a href="#" class="btn sm soft-outline">profile</a>
              <a href="#" class="btn sm soft-outline">follow</a>
            </div>
          </div>
          <!-- fav -->
          <div class="fav handler hide" data-handler="fav">
            <svg>
              <use href="#i-bookmark" />
            </svg>
            <h1>Added To Favourites</h1>
            <a href="#" class="link">show favourites</a>
          </div>
          <!-- like -->
          <div class="like handler hide" data-handler="like">
            <svg>
              <use href="#i-like" />
            </svg>
            <h1>Perfect like</h1>
          </div>
          <!-- comments -->
          <div class="comment handler hide" data-handler="comment">
            <div class="comment-list">
              <div class="comment-item">
                <div>
                  <div class="btn-profile" aria-label="toggle navigation">
                    <figure>
                      <img src="media/users/bruno-lobato.jpg" alt="user">
                    </figure>
                  </div>
                </div>
                <div>
                  <p><b>mr.wolf</b> Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod.</p>
                  <span class="date">20:00 13 jun 20</span>
                </div>
              </div>
              <div class="comment-item">
                <div>
                  <div class="btn-profile" aria-label="toggle navigation">
                    <figure>
                      <img src="media/users/bruno-lobato.jpg" alt="user">
                    </figure>
                  </div>
                </div>
                <div>
                  <p><b>mr.wolf</b> Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod.</p>
                  <span class="date">20:00 13 jun 20</span>
                </div>
              </div>
            </div>
            <form action="#" method="POST">
              <input type="text" name="comment" id="comment" placeholder="add a comment" aria-label="add a comment">
              <button class="btn-icon" aria-label="send comment">
                <svg>
                  <use href="#i-arrow" />
                </svg>
              </button>
            </form>
          </div>
          <!-- share -->
          <div class="share handler hide" data-handler="share">
            <h2>Show This Precious To Your World</h2>
            <p>Just copy to your computer's clipboard</p>
            <input type="text" id="url" value="https://bau.com/od8sadmw" aria-label="collectible url">
            <button class="btn second" id="copy">copy link</button>
          </div>
        </div>
        <div class="btn-group">
          <!-- info -->
          <button class="btn-icon" data-trigger="info" aria-label="about this collectible">
            <svg>
              <use href="#i-info" />
            </svg>
          </button>
          <!-- comment -->
          <button class="btn-icon" data-trigger="comment" aria-label="check comments">
            <svg>
              <use href="#i-comments" />
            </svg>
          </button>
          <!-- share -->
          <button class="btn-icon" data-trigger="share" aria-label="share this collectible">
            <svg>
              <use href="#i-share" />
            </svg>
          </button>
          <!-- like -->
          <button class="btn-icon <?php if ($item['like'] == 1) {
                                    echo 'selected';
                                  } ?>" data-trigger="like" aria-label="like this collectible">
            <svg>
              <use href="#i-like" />
            </svg>
          </button>
          <!-- fav -->
          <button class="btn-icon <?php if ($item['fav'] == 1) {
                                    echo 'selected';
                                  } ?>" data-trigger="fav" aria-label="add to favourites">
            <svg>
              <use href="#i-bookmark" />
            </svg>
          </button>


        </div>
      </nav>
    </section>
    <?php include('includes/search.php'); ?>
  </main>

  <?php require('includes/footer.php'); ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/item.js"></script>
  </body>

  </html>