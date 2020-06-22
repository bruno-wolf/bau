 <?php
  require('includes/header.php');
  ?>
 <main>
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
       <h1>Welcome
         Back Fellow
         <span>Collector</span></h1>
       <form action="#" method="POST">
         <label for="login-email">
           email
           <input type="email" name="email" id="login-email" autocomplete="username">
         </label>
         <label for="login-password">
           password
           <div class="password-container">
             <button type="button" class="btn-icon" aria-label="show password">
               <svg>
                 <use href="#i-eye" />
               </svg>
             </button>
             <input type="password" name="password" id="login-password" autocomplete="current-password">
           </div>
         </label>
         <button class="btn dark" aria-label="login">enter</button>
         <br>
         <a href="#" class="link">lost password?</a>
       </form>
     </div>
     <div class="alert danger reveal">
       Opps. Wrong password or email.
     </div>
   </section>
 </main>
 <?php require('includes/footer.php'); ?>
 <script src="assets/js/all.js"></script>
 <script src="assets/js/intro.js"></script>
 </body>

 </html>