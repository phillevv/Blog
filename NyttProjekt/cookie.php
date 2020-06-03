
<?php

if(isset($_COOKIE[$cookie_name])) {  
      ?>  
   <style type="text/css">#cookie{
display:none;
}</style> <?php 
}

else {
    
          ?>  
   <style type="text/css">#cookie{
display:block;
}</style> <?php 
    
}
?>  
<!--Cookie med viss bootstrap  --> 
    <div id="cookie" class="fixed-bottom">
  <header class="masthead mb-auto">
    <div class="inner">
            
                  <nav class="nav nav-masthead float-right">
       
         <a class="nav-link text-light" href="cookies.php">Ok</a>
          
        <a class="nav-link text-light" href="https://gdpr.eu/">Läs mer</a>
                    
      </nav>
    
            
                  <nav class="nav nav-masthead float-right">
 <a class="nav-link text-light" href="index.php">Vi använder cookies på sajten för att ge dig en så bra upplevelse som möjligt av vår webbplats. Genom att surfa vidare på vår webbplats måste du acceptera att cookies används. </a>  
                            
      </nav>
         
            </div>

  </header>
        </div>




         