 <?php
  require('includes/header.php');
  ?>
 <main class="wide">
   <section id="intro" class="second">
     <div id="animation">
       <div class="diagonal"></div>
       <svg>
         <use href="#f-batman" />
       </svg>
       <svg class="selected">
         <use href="#f-pop" />
       </svg>
       <svg>
         <use href="#f-gundam" />
       </svg>
       <svg>
         <use href="#f-lego" />
       </svg>
     </div>
     <div id="action">
       <form action="#" method="POST" class="">
         <h1><span>Recover Your Password</span> as Fast as a Speeding Bullet</h1>
         <label for="login-email">
           email
           <input type="email" name="email" id="login-email" autocomplete="username">
         </label>
         <button class="btn dark" aria-label="recover password">recover</button>
         <br>
       </form>
       <div class="message hide">
         <svg class="icon">
           <use href="#i-mail" />
         </svg>
         <h2>Check Your Email</h2>
         <p>We have sent you an email with the link for you to add a new password to your account</p>
       </div>
     </div>
   </section>
 </main>
 <?php require('includes/footer.php'); ?>
 <script src="assets/js/all.js"></script>
 <script src="assets/js/intro.js"></script>
 </body>

 </html>