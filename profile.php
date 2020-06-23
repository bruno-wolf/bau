  <?php
  require('includes/header.php');
  ?>
  <main>
    <section id="bio">
      <div id="highlights">
        <div class="carousel-cell">
          <a href="#">
            <img src="media/figures/yoda_03.jpg" alt="" class="no-d">
          </a>
        </div>
        <div class="carousel-cell">
          <a href="#">
            <img src="media/figures/harley-quinn-01.jpg" alt="" class="no-d">
          </a>
        </div>
      </div>
      <div id="about">
        <div>
          <div class="btn-profile" aria-label="toggle navigation">
            <figure>
              <img src="media/users/bruno-lobato.jpg" alt="user">
            </figure>
          </div>
          <span class="user">mr. wolf</span>
        </div>
        <div>
          <div class="stats">
            <div>
              <a href="#">
                <span class="count">166</span>
                <span class="item">colectibles</span>
              </a>
            </div>
            <!-- <div>
              <a href="#">
                <span class="count">20</span>
                <span class="item">wishlist</span>
              </a>
            </div> -->
            <div>
              <a href="#">
                <span class="count">12</span>
                <span class="item">followers</span>
              </a>
            </div>
            <div>
              <a href="#">
                <span class="count">13</span>
                <span class="item">following</span>
              </a>
            </div>
          </div>
          <div class="desc">A padawan in a imperial world for web development. I sense my midichlorians became stronger every time my collections increases.</div>
        </div>
      </div>
    </section>
    <section id="feed">
      <?php require('includes/card.php'); ?>
    </section>
    <?php include('includes/search.php'); ?>
  </main>

  <?php require('includes/footer.php'); ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="assets/js/all.js"></script>
  <script src="assets/js/profile.js"></script>
  </body>

  </html>