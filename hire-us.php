<?php include "includes/form-send.php"; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hire Us | Push My Profile</title>
    <meta name="description" content="Hire Push My Profile to be your creative mind and bring your business to life! find out more">
    <?php include_once "includes/header-scripts.php" ?>
  </head>   
  <body id="hireus">
  <?php include_once "includes/header.php" ?>
  <section id="branding">        
    <div class="row">   
      <div class="large-12 columns">      
        <h1 class="text-center hero">Tell us about your project</h1>
          <p class="lead">Ready to get started? Get A Fast Quote On Your Project.</p>    
      </div>
    </div>
    <div class="row hire-us-nav">
      <div class="large-4 columns">
           <img src="svg/phone.svg" alt="Get In Touch By Phone" />
             <h3 class="text-center">03333 208 088</h3>
          </div>
         <div class="large-4 columns">
             <a href=".white-bg-form"><img src="svg/email.svg" alt="Get In Touch By email" /></a>
            <h3 class="text-center">CONTACT FORM</h3>        
          </div>
         <div class="large-4 columns">
             <a href="#cd-google-map"><img src="svg/office.svg" alt="Get In Touch By email" /></a>
                <h3 class="text-center">FIND US</h3>   
          </div>
      
      </div>
    </section>
      <div class="container">        
      <section class="slope">
     <div class="row content white-bg-form">
            <h2>Your Project Details</h2> 
                <form data-abide id="yourproject" method="post" action="#">
                    <div class="row">
                        <div class="large-6 columns">
      				      <label>Name</label> 
                            <input type="text" name="name" id="name" required pattern="[a-zA-Z0-9]+" placeholder="*"<?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your name</small> 		             	 
                        </div> 
                         <div class="large-6 columns">
            	           <label>Your Position</label> 
                            <input type="text" name="position" id="position" pattern="[a-zA-Z0-9]+" placeholder=""<?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($position, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your position</small> 		  
                        </div>
                        </div>     
                        <div class="row">
                          <div class="large-6 columns">
                              <label>E-mail address</label> 
                                <input type="email" name="email" id="email" required placeholder="*"
                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your e-mail</small> 	
                            <div class="email-field"> 
     				 <?php if ($missingfields && in_array('email', $missingfields)) { ?><p><span class="formwarning">Please enter your e-mail</span></p><?php } ?>
                              </div>
                           </div>
                              <div class="large-6 columns">
                               <label>Phone Number</label> 
                     <input type="text" name="phone" id="phone" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" placeholder="*"
                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($phone, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your phone number</small> 
                               <div class="email-field"> 
     				 <?php if ($missingfields && in_array('phone', $missingfields)) { ?><p><span class="formwarning">Please enter your phone number</span></p><?php } ?>
                 </div>
                              </div> 
                            </div>
                    <div class="row">
                       <div class="large-6 columns">
                               <label>Website URL</label> 
                     <input type="url" name="websiteurl" id="websiteurl" placeholder="*" value="http://"
                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($websiteurl, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter a valid website url e.g http://www.yourdomain.com</small> 
                               <div class="email-field"> 
     				 <?php if ($missingfields && in_array('websiteurl', $missingfields)) { ?><p><span class="formwarning">Please enter a valid url</span></p><?php } ?>
                 </div>
                              </div> 
                         <div class="large-6 columns">
                               
                              </div> 
                    </div>
                        <div class="row">
                       <div class="large-6 columns">
                        <label>When would you like work to start?</label> 
                        <select id="worktostart" name="worktostart">
                          <option value="ASAP">ASAP</option>
                          <option value="2 - 4 Weeks">2 - 4 Weeks</option>
                          <option value="4 - 6 Weeks">4 - 6 Weeks</option>
                          <option value="2 Months+">2 Months+</option>
                        </select> 
                 </div>
                             <div class="large-6 columns">
                        <label>Whats Your budget?</label> 
                        <select id="budget" name="budget">
                          <option value="1000">1000+</option>
                          <option value="2000+">2000+</option>
                          <option value="3000+">3000+</option>
                          <option value="4000+">4000+</option>
                        <option value="6000+">6000+</option>
                        <option value="6000+">8000+</option>
                        <option value="6000+">10000+</option>
                        </select> 
                 </div>
                              </div>      
                    <div class="row">
                    <div class="large-8 columns">
                        <button type="submit" id="hireus" class="button right" name="hireus">Request A Project Quote</button> 
                        </div>    
                     </div>  
        </form>	
          </div>
            </section>
             <section class="slope">
            <div class="row content">
      <div class="large-12 columns">
            <h2>Meet Our <span class="orange-text">Team.</span></h2>
        </div>
         <div class="large-12 columns">
            <ul class="our-team small-block-grid-2 large-block-grid-4">
             <li>
                <img src="img/team/james.png">
                 <h3>James</h3>
                 <p>Managing <span class="orange-text">Director</span></p>
                
                </li>
                <li>
                <img src="img/team/nick.png">
                 <h3>Nick</h3>
                 <p>Creative <span class="orange-text">Director</span></p>
                
                </li>
                <li>
                <img src="img/team/mike.png">
                 <h3>Mike</h3>
                 <p>Head <span class="orange-text">Designer</span></p>
                
                </li>
                <li>
                <img src="img/team/lucy.png">
                 <h3>Lucy</h3>
                 <p>Client <span class="orange-text">Services</span></p>
                
                </li>
             </ul>
        </div>
         </div>
      </section>
            <section class="slope">
            
               <section id="cd-google-map">
	<div id="google-container"></div>
	<div id="cd-zoom-in"></div>
	<div id="cd-zoom-out"></div>
	                
</section>   
                    
          </section>
          
          
     
          
          <?php include_once "includes/footer.php" ?> 
   </body>
</html>