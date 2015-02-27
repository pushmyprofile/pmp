 <footer class="slope">
     <div class="row content padding-bottom-none">
         <div id="footer" class="medium-5 large-5 columns">
             <div class="row">
         <h2>Call Us</h2> 
          <h3>03333 208 088</h3>
             </div>
             <div class="row">
         <h2>Opening Hours</h2>
          <h4>Monday - Friday: <span class="orange-text">8:30am - 6:00pm</span></h4>
          <h4>Saturday: <span class="orange-text">9:00am - 12:30pm</span></h4>            
             <div class="social-icons">
             <h2>Social</h2>  
             <ul class="inline-list">
                 <li><a href="https://www.facebook.com/pushmyprofile" target="_blank"><i class="flaticon-facebook55"></i></a></li>
                 <li><a href="https://twitter.com/pushmyprofile" target="_blank"><i class="flaticon-twitter20"></i></a></li>
                 <li><a href="https://plus.google.com/109450061565906598916/" target="_blank"><i class="flaticon-google24"></i></a></li>                 
             </ul>           
             </div>
         </div>
         </div>
          
         <?php if ($currentpage == "http://pushmyprofile.devserver.xyz/hire-us.php") { ?>
          
       
         <div class="medium-7 large-7 columns clear">
           <h2>Our Address</h2>
           <address>
               <p>Push My Profile</p>
               <p>Denifield Smithy</p>
               <p>Chester Road</p>
               <p>WA16 6RP</p>
               </address>
         </div>
      

       <?php } else { ?>
     
         <div class="medium-7 large-7 columns">
         <h2>Send Us A Message</h2>
             <h2><?php echo $pageURL; ?></h2>
              
         <form data-abide id="message" method="post" action="#">

              <div class="row">

                 <div class="large-8 columns">

      				 <label>Name</label> 

                     <input type="text" name="name" id="name" required pattern="[a-zA-Z0-9]+" placeholder="*"

                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your name</small> 		             	 </div> 

            	 <div class="name-field"> 

     				 <?php if ($missingfields && in_array('name', $missingfields)) { ?><p><span class="formwarning">Please enter your name</span></p><?php } ?>

                 </div>
                 
               
                 
                

                

              </div>
              
                <div class="row">

                 <div class="large-8 columns">

      				 <label>E-mail address</label> 

                     <input type="email" name="email" id="email" required placeholder="*"

                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your e-mail</small> 		             	 </div> 

            	 <div class="email-field"> 

     				 <?php if ($missingfields && in_array('email', $missingfields)) { ?><p><span class="formwarning">Please enter your e-mail</span></p><?php } ?>

                 </div>

               

              </div>

               <div class="row">

                 <div class="large-8 columns">

      				 <label>Phone Number</label> 

                     <input type="text" name="phone" id="phone" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" placeholder="*"

                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($phone, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your phone number</small> 		             	 </div> 

            	 <div class="email-field"> 

     				 <?php if ($missingfields && in_array('phone', $missingfields)) { ?><p><span class="formwarning">Please enter your phone number</span></p><?php } ?>

                 </div> 
                   </div>
                    <div class="row">

               <div class="large-12 columns">

               <label>Your Message</label> 

    <textarea class="textbox" name="enquiry" id="enquiry" <?php if ($missingfields || $errorfields) {              echo  'value="' . htmlentities($notes, ENT_COMPAT, 'UTF-8') . '"'; }?>></textarea>    

               </div>

               </div>

         
         <div class="row">
                  <div class="large-8 columns">

                <button type="submit" id="sendusamessage" class="button" name="sendusamessage">Send Message</button> 

                 </div>    
                 </div>                

               


               

         </form>	
        </div>
              <?php } ?>
        </div>
  
      <div class="large-12 columns footer-bottom">
    
     <div class="content padding-bottom-none"> 
     <hr />  
     <div class="row">
     
      <div class="small-12 medium-3 large-3 columns">        
         <p><?php echo date("Y"); ?>&copy;  Push My Profile Ltd</p> 
        </div>
          <div class="small-12 medium-9 large-9 columns">
          <ul class="inline-list">
               <li><a href="website-redesign">Redesign</a></li>
               <li><a href="website-redesign">Pay Monthly</a></li>
              <li><a href="cookie-policy">Cookies</a></li>
              <li><a href="privacy=policy">Privacy Policy</a></li>
              <li><a href="terms-and-conditions">Boring Legal Stuff</a></li>
             
          </ul>
         </div>
        </div>
        </div>
     </div>
</footer>
    <?php include_once "includes/footer-scripts.php" ?>