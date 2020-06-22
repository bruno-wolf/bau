 <?php
  require('includes/header.php');
  ?>
 <main>
   </header>
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
         <form action="#" method="POST" class="">
           <h1>Add a New Super Strong <span>Password</span></h1>
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
           <button class="btn dark" aria-label="add new password">add</button>
           <br>
         </form>
         <div class="message hide">
           <h2><span>Done!</span><br> Your Password is Saved</h2>
           <p>Welcome back fellow collector. It's time to discover new collectibles</p>
           <br>
           <a class="btn dark" href="#">feed</a>
         </div>
       </div>
     </section>
   </main>
   <?php require('includes/footer.php'); ?>
   <script src="assets/js/all.js"></script>
   <script src="assets/js/intro.js"></script>
   </body>

   </html>