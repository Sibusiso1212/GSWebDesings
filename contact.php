<?php
      
       
     
    if(array_key_exists("submit", $POST)){
     
        $error ="";
         if(!$POST{'name'}){
          
             $error .= "Please enter your name and surname.";
         }
     
     if(!$POST{'email'}){
          
             $error .= "Please enter your email address.";
         }
     
     if(!$POST{'subject'}){
          
             $error .= "Please enter the subject of your email.";
         }
     
      if(!$POST{'subject'}){
          
             $error .= "Please type a mwssage before you send the emil.";
         }
     
     
      if($error !=""){
          
             $error .= "There may be some missing information on your form, please check the following bafore you send.".$error;
         }else{
       
          $mailTo = 'sibusiso.mhlanga@mweb.co.za';
          
          $subject = $POST{'subject'};
       
          $message = $POST{'message'};
        
         $headers = "from:".$POST{'email'};
       
         if(mail($mailTo, $subject, $message, $headers)){
          
             echo "Email was sent";
          
         }
       
       
      }
     
     
     
    }


?>

<!DOCTYPE html>
<html lang="eng">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
          <!--Website title and icon-->
     
        <title>GS WebDesigns - Contact</title>
        <link rel="icon" href="images/gswebdesignsImages/title_icon.PNG" type="image/PNG" />
        
     
        
        
        <!--Fontawesome l}ink-->
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
          
            <!--css for fullscreen view-->
        <link rel="stylesheet" href="css/gswebdesignsCSSFiles/gsstyle.css">
        
        <link rel="stylesheet" href="css/gswebdesignsCSSFiles/gsSubPagesStyle.css">
        
        <!--css mobileview-->
            
            
            <link rel="stylesheet" href="css/gswebdesignsCSSFiles/gsSubPagesStyle_mobileView.css">
            
        
         <!--Google fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
      
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        
         <!--Google fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
       
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            

    </head>
    <body>
     
        <div class="wrapper">
     
          <!--Navigation Bar-->

          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navBar">
           
            
           
           <div class="logo">
            <a class="navbar-brand" href="index.html"><h1><span class="trade_mark">GS</span><span id="webdesign">WebDesigns</span></h1></a>
          </div>
          
          <button class="navbar-toggler" id="toggle-button" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                
               <li class="nav-item">
                  <a class="nav-link" href="portfolio.html" tabindex="-1" aria-disabled="true">Portfolio</a>
                </li>
               
               <li class="nav-item">
                  <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
              </ul>
             
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
      
          
     
 <div id="form_container">
    
      <h1 id="contact_header">Get in touch</h1>
    
    
     <div id="errorMessages"><?php echo $error; ?></div>
    
   <form method="POST" id="contact_form">
       
    <div class="form-group">
        
            <label for="name">Name and Surname</label>
            <input type="text" class="form-control" id="name"  name="name">
    </div>
 
    <div class="form-group">
              
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email"  name="email" placeholder="your email address">
    </div>

    <div class="form-group">
        
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject"  name="subject">

    </div>

    <div class="form-group">
        
      <label for="message">Message</label>
      <textarea class="form-control" id="message" name="message" rows="3"></textarea>
      
    </div>
    
    <div class="form-group">
      <input type="submit" name="submit" type="button" class="btn btn-primary" value="Send E-mail">
    </div>

  </form> 
 </div>
         
         <aside id="whatsapp_icon">
             
              <a href="https://api.whatsapp.com/send?phone=270676151864" target="_blank"></i><img src="images/gswebdesignsImages/whatsapp_contact_image.png" alt="Whatsapp Icon"></a>
            
         <aside>
     
  <div>
        
        <footer id="footer">
                
            <p><i class="far fa-copyright"></i> 2019 GSWebDesings - All Rights Reserved<br/> A division of Okuhle Trading<br/>
             
             
              
             <div id = "social_links">
             
              <a href="https://www.facebook.com/gsWebDesings/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a>
             
              <a href="https://api.whatsapp.com/send?phone=270676151864" target="_blank"><i class="fab fa-whatsapp"></i></a>
                
         </div>
         
            
              
            </footer>
            
        </div>    
     
     </div>

        
        <!--External script-->
        <script type="text/javascript" src="JavaScripts/gswebdesingsJSFiles/gsscripts.js"></script>
     
            <!--External JavaScript-->
        <script type="text/javascript" src="JavaScripts/gsJQueryLib.js"></script>
        <script type="text/javascript" src="JavaScripts/gsJQuery.js"></script>
     
        <!--Boostrap JS -->  
          
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
  
    </body>
</html>