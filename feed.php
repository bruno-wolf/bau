  <?php
  require('includes/header.php');

  $colectibles = [];
  ?>
  <main>
    <section id="search">
      <form action="">
        <input type="text" name="" id="search-input">
        <svg>
          <use href="#i-search" />
        </svg>
      </form>
    </section>
    <section id="feed">

      <!--CARD -->
      <div class="card">
        <div class="card-header">
          <div>
            <span class="data name">Yoda Sixth Scale Figure</span>
            <span class="data brand">Sideshow Collectibles</span>
          </div>
          <div>
            <div>
              <span class="data owner">mr. wolf</span>
              <span class="data item-count">122</span>
            </div>
            <button class="btn-profile">
              <figure>
                <img src="media/users/mark-hamill.jpg" alt="user">
              </figure>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="#">
            <img src="media/figures/yoda_01.jpg" alt="" class="no-d">
          </a>
        </div>
        <div class="card-footer">
          <div>
            <span class="data date">22 Ago</span>
          </div>
          <div>
            <button class="btn-icon">
              <svg>
                <use href="#i-bookmark" />
              </svg>
            </button>
            <button class="btn-icon">
              <svg>
                <use href="#i-like" />
              </svg>
            </button>
            <button class="btn-icon">
              <svg>
                <use href="#i-share" />
              </svg>
            </button>
          </div>
        </div>
      </div>

    </section>
  </main>
  <?php require('includes/footer.php'); ?>
  <script src="assets/js/all.js"></script>
  </body>

  </html>