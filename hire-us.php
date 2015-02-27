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
      <div class="medium-4 large-4 columns">
           <img src="svg/phone.svg" alt="Get In Touch By Phone" />
             <h3 class="text-center">03333 208 088</h3>
          </div>
         <div class="medium-4 large-4 columns">
             <a href="#projectform"><img src="svg/email.svg" alt="Get In Touch By email" /></a>
            <h3 class="text-center">CONTACT FORM</h3>        
          </div>
         <div class="medium-4 large-4 columns">
             <a href="#cd-google-map"><img src="svg/office.svg" alt="Get In Touch By email" /></a>
                <h3 class="text-center">FIND US</h3>   
          </div>
      
      </div>
    </section>
      <div class="container">        
      <section class="slope">
     <div class="row content white-bg-form" id="projectform">
            <h2>Your Project Details</h2> 
                <form data-abide id="yourproject" method="post" action="#">
                    <div class="row">
                        <div class="large-6 columns">
      				      <label>Name</label> 
                            <input type="text" name="name" id="name" required pattern="[a-zA-Z0-9]+" placeholder="*"<?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your name</small> 		             	 
                        </div> 
                         <div class="large-6 columns">
            	           <label>Position</label> 
                            <input type="text" name="position" id="position" pattern="[a-zA-Z0-9]+" placeholder=""<?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($position, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your position</small> 		  
                        </div>
                        </div>     
                        <div class="row">
                          <div class="large-6 columns">
                              <label>E-mail</label> 
                                <input type="email" name="email" id="email" required placeholder="*"
                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your e-mail</small> 	
                            <div class="email-field"> 
     				 <?php if ($missingfields && in_array('email', $missingfields)) { ?><p><span class="formwarning">Please enter your e-mail</span></p><?php } ?>
                              </div>
                           </div>
                              <div class="large-6 columns">
                               <label>Telephone</label> 
                     <input type="text" name="phone" id="phone" required placeholder="*"
                     <?php if ($missingfields || $errorfields) { echo  'value="' . htmlentities($phone, ENT_COMPAT, 'UTF-8') . '"'; }?>> <small class="error">Please enter your phone number</small> 
                               <div class="email-field"> 
     				 <?php if ($missingfields && in_array('phone', $missingfields)) { ?><p><span class="formwarning">Please enter your phone number</span></p><?php } ?>
                 </div>
                              </div> 
                            </div>
                    <div class="row">
                       <div class="large-6 columns">
                               <label>Your Website</label> 
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
                        <label>What are you looking for?</label> 
                        <select id="worktype" name="worktype" required>
                          <option value="Branding">Branding</option>
                          <option value="Web Design">Web Design</option>
                          <option value="Marketing">Marketing</option>
                          <option value="Everything">I need everything!</option>
                        </select> 
                 </div>
                             <div class="large-6 columns">
                        <label>Whats Your budget?</label> 
                        <select id="budget" name="budget">
                          <option value="1000">1000+</option>
                          <option value="5000+">5000+</option>
                          <option value="10000+">10000+</option>
                          <option value="20000+">20000+</option>                       
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
                <img src="img/team/scott.png">
                 <h3>Mike</h3>
                 <p>Head <span class="orange-text">Designer</span></p>
                
                </li>
                <li>
                <img src="img/team/pippa.png">
                 <h3>Lucy</h3>
                 <p>Client <span class="orange-text">Services</span></p>
                
                </li>
             </ul>
        </div>
         </div>
      </section>
            <section class="slope clear">
            
               <section id="cd-google-map">
	<div id="google-container"></div>
	<div id="cd-zoom-in"></div>
	<div id="cd-zoom-out"></div>
	                
</section>   
                    
          </section>
          
          
     
          
          <?php include_once "includes/footer.php" ?> 
   </body>
</html>