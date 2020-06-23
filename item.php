  <?php
  require('includes/header.php');
  ?>
  <main>
    <section id="item">
      <div class="carousel">
        <div class="carousel-cell">
          <img src="media/figures/yoda_01.jpg" alt="" class="no-d">
        </div>
        <div class="carousel-cell">
          <img src="media/figures/yoda_02.jpg" alt="" class="no-d">
        </div>
      </div>
      <div class="info">
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
          <div class="comment-handler hide">
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
              <button class="btn-icon">
                <svg>
                  <use href="#i-arrow" />
                </svg>
              </button>
            </form>
          </div>
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
          <button class="btn-icon comment" aria-label="share">
            <svg>
              <use href="#i-comments" />
            </svg>
          </button>
          <button class="btn-icon share" aria-label="share">
            <svg>
              <use href="#i-share" />
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