<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BAÚ for collectors</title>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <?php include('svg-sprite.php'); ?>
  <header>
    <div class="container">
      <a href="/." id="logo" aria-label="hoempage">
        <svg>
          <use href="#logo-bau" />
        </svg>
      </a>
      <span>
        <button class="btn-profile " id="menu" aria-label="toggle navigation">
          <figure>
            <img src="media/users/bruno-lobato.jpg" alt="user">
          </figure>
        </button>
      </span>
    </div>
    <div class="diagonal"></div>
    <nav>
      <a href="#" class="selected">Feed</a>
      <a href="#">You</a>
      <a href="#">Collections</a>
      <a href="#">New Collectible</a>
      <a href="#">Wishlist</a>
      <a href="#">Settings</a>
      <a href="#">Log out</a>
    </nav>
  </header>