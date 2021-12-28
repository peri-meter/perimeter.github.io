

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selam Bank - Standing By You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicon@2.0.9/css/boxicons.min.css' rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="style.css">

</head>

<body>


   
    
    
    
    <nav>
        <div class="menu-icon">
           <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
          <a href="index.html#home"><img src="Selam.Logo.w.under.formation.png" alt="" width="230"></a>
        </div>
        <div class="nav-items">
           <li><a href="index.html#home">Home</a></li>
           <li><a href="index.html#about">About</a></li>
           <li><a href="index.html#shares">Shares</a></li>
           <li><a href="index.html#contact">Contact</a></li>
           <li><a href="index.html#investor">Organizers</a></li>
        </div>
        <div class="search-icon">
           <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
           <span class="fas fa-times"></span>
        </div>
        <form action="#">
           <input type="search" class="search-data" placeholder="Search">
           <button type="submit" class="fas fa-search"></button>
        </form>
     </nav>

     <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");

        window.onscroll = ()=>{
            items.classList.remove('active');
           searchBtn.classList.remove("hide");
           menuBtn.classList.remove("hide");
           cancelBtn.classList.remove('show');
           form.classList.remove("active");
        }

        menuBtn.onclick = ()=>{
          items.classList.add("active");
          menuBtn.classList.add("hide");
          searchBtn.classList.add("hide");
          cancelBtn.classList.add("show");
        }
        items.onclick = () =>{
           items.classList.remove('active');
           searchBtn.classList.remove("hide");
           menuBtn.classList.remove("hide");
           cancelBtn.classList.remove('show');
       }
        cancelBtn.onclick = ()=>{
          items.classList.remove("active");
          menuBtn.classList.remove("hide");
          searchBtn.classList.remove("hide");
          cancelBtn.classList.remove("show");
          form.classList.remove("active");
          cancelBtn.style.color = "#232b56";
        }
        searchBtn.onclick = ()=>{
          form.classList.add("active");
          searchBtn.classList.add("hide");
          cancelBtn.classList.add("show");
        }
     </script>
   
    
   <section class="home" id="home">
    <style>
 
     #slider {
         padding-top: 2rem;
         overflow: hidden;
     }
     #slider figure {
         position: relative;
         width: 500%;
         margin: 0;
         left: 0;
         animation: 40s slider infinite;
     }
     #slider figure img {
         width: 20%;
         float: left;
     }
     
     @keyframes slider {
         0% {
             left: 0;
         }
         20% {
             left: 0;
         }
         25% {
             left: -100%;
         }
         45% {
             left: -100%;
         }
         50% {
             left: -200%;
         }
         70% {
             left: -200%;
         }
         75% {
             left: -300%;
         }
         95% {
             left: -300%;
         }
         100% {
             left: -400%;
         }
     }
     
     </style>
      <div id="slider">
             <figure>
                 <img src="1.jpg">
                 <img src="2.jpg">
                 <img src="d2.jpg">
                 <img src="d1.jpg">
                 <img src="1.jpg">
             </figure>
         </div>
 </section>

     <div class="container">
         <div class="content">
        <h1> Big Decisions need unique solutions.</h1>
        <a href="#shares"><button class="card-btn"> Buy Shares Now</button></a>
    </div>
    </div>     

    <section class="about" id="about">
        <div class="head-about">
            <img src="SB Logo_Housing.pattern.png" alt="" width="50">
            <h1>About Us</h1>
        </div>

        <div class="holder">
            <div class="card">
                <div class="card-image card-1"></div>
                <img src="Icon for about us  copy.png" alt="" width="50">
                <p> We are the 1st truly Pan-Ethiopian bank, addressing the entirety of the country.
                     We designed Selam Bank intentionally to be the most inclusive and progressive bank in the country.
                    </p>
            </div>
            <div class="card">
                <div class="card-image card-2"></div>
                <img src="Icon for vision.png" alt="" width="50">
                <p>To create the largest generation of homeowners in Ethiopia’s history by offering the most dynamic and comprehensive mortgage products, which have been absent from the market.</p>
            </div>
            <div class="card">
                <div class="card-image card-3"></div>
                <img src="SB Objective ICON.png" alt="" width="50">
                <p>Mobilizing savings & creation of wealth through homeownership,
                    Reduce urban poverty through job creation by financing affordable housing projects, Providing homeownership access to female-led households.
                </p>
                   
            </div>
        </div>
    </section>
    <section class="shares" id="shares">
        <div class="head-about">
            <img src="SB Logo_Housing.pattern.png" alt="" width="50">
            <h1> YOUR DREAMS ARE OUR DREAMS! <br> BUY SHARES AND INVEST IN YOUR FUTURE
              </h1>
        </div>
        <div class="holder">
        <div class="card">
            
                <img src="SB.SingleS.png" alt="" width="300">
                
        </div>
        <div class="card">
           
            <img src="SB.MinS.png" alt="" width="300">
            
     </div>
     <div class="card">
        
        <img src="SB.MaxSP.png" alt="" width="300">
        
 </div>
 </div>

    <div class="head-share">
        <h1>Share Sales</h1>
        <p>The par value of one share is ETB 1,000 (One thousand Birr) and the total number of shares available shall be 5,000,000 (Five million) In accordance with Banking Business proclamation No. 592/2008, no person shall hold more than five(5) % of the bank’s total shares wither on his own jointly with his spouse or with a person who is below the age of 18 related to him by consanguinity to the first degree. The minimum number of shares that can be bought shall be 10 shares worth Birr 10,000(Ten thousand birr).</p>
        <button  class="share-btn" id="login-btn">Start Share Application Now</button>  

        <div class="login-form-container">

            <i class="fas fa-times" id="form-close"></i>
        
            <form action="">
                 
                
                    <h3>Choose Application Form</h3>
                    <button class="btn1" type="button" onclick="window.location.href='formen.html'"> Share Subscription in English </button>
                    <button class="btn1" type="button" onclick="window.location.href='formam.html'"> Share Subscription in Amharic  </button>
                    <button class="btn1" type="button" onclick="window.location.href='formde.html'"> Share Subscription for DIASPORA </button>
                
            </form>
        </div>              
    </div>
    <section class="brand-container" id="payment">
              
        <h5> You Can also buy shares at any of the following banks</h5>
        <div class="swiper-container review-slider">

         <div class="swiper-wrapper">
 
             <div class="swiper-slide">
                 <div class="box">
                     <img src="abay.png" alt="">
                     <h2>Abay Bank</h2>
                     <h3>Account number</h3>
                    <p>Share Subscription : 1022115562297024
                     Service Charge Account No : 1022115562297013</p>
                 
                 </div>
             </div>
             
             <div class="swiper-slide">
                 <div class="box">
                     <img src="Abyssinya.png" alt="">
                     <h2>Abyssinia Bank</h2>
                     <h3>Account number</h3>
                    <p>Share Subscription : 72388167 <br>
                     Service Charge Account No : 72389301</p>
                 </div>
             
             </div>
         
             <div class="swiper-slide">
                 <div class="box">
                     <img src="awash.png" alt="">
                     <h2>Awash Bank</h2>
                     <h3>Account number</h3>
                    <p>Share Subscription : 01304278594300 <br>
                     Service Charge Account No : 01304278594301</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="cbe.png" alt="">
                     <h2>CBE</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription : 1000314647711 <br>
                         Service Charge Account No : 1000314648165</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="Hibret.png" alt="">
                     <h2>Hibret Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 103161680324029 <br>
                         Service Charge Account No 1031616827743016</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="Anbessa.png" alt="">
                     <h2>Lion Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 00111695967-54 <br>
                         Service Charge Account No 00111695980-15</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="nib.png" alt="">
                      <h2>NIB International Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 7000015343128 <br>
                         Service Charge Account No 7000024376058</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="wegagen.png" alt="">
                     <h2>Wegagen Bank</h2>
                     <h3>Account number</h3>
                     <p>Blocked Account No 0894489011301 <br>
                         Service Charge Account No 894489011302</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="Co.oromia.png" alt="">
                     <h2>Cooperative Bank of Oromia</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription : 1000059583787 <br>
                         Service Charge Account No : 1016400032111</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="dashen.png" alt="">
                     <h2>Dashin Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 0444162341011 <br>
                         Service Charge Account No 0444162421011</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="zemen.png" alt="">
                     <h2>Zemen Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 01304278594300 <br>
                         Service Charge Account No 01304278594301</p>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="oromia.png" alt="">
                     <h2>Oromia Bank</h2>
                     <h3>Account number</h3>
                     <p>Share Subscription 342972 / 3003 <br>
                         Service Charge Account No 342972 / 3103</p>
                 </div>
             </div>

     </div>
 </div>

</section>
    </section>
    <section class="investor" id="investor">
        <div class="head-about">
            <img src="SB Logo_Housing.pattern.png" alt="" width="50">
            <h1> Organizing Members
              </h1>
         </div>
        
         <section class="hexagon-gallery">
            <div class="hex"><img src="f9.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Amman Fissehazion</h1>
                    <p> CEO - EBS network </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f10.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Arbise Gugsa</h1>
                    <p> Accounting and Finance Specialist </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f1.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1> Bethlehem Tilhahun<br>Alemu</h1>
                    <p> Founder & CEO of soleRebles </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f8.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Dagim Mulatu</h1>
                    <p> Managing Partner - Afro Caliber consultants </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f7.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Girma Gelaw</h1>
                    <p> Founder & CEO of Bamacon Plc </p>
                    </div>
                </div>    
            </div>
            <div class="hex"><img src="f11.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Girum Chala</h1>
                    <p> Journalist - CGTN </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f3.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1> Kibrom Teumelisan</h1>
                    <p> CEO - Kibco Plc </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f6.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Sara Abera</h1>
                    <p> Founder & CEO of Muya Plc </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f4.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Tewodros Yilma</h1>
                    <p> CEO - Lelena Global </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f5.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Yared Alemayehu</h1>
                    <p> CEO - Walia Plc </p>
                    </div>
                </div>
            </div>
            <div class="hex"><img src="f2.jpg" alt="" class="founder-image">
                <div class="names">
                    <div class="text">
                    <h1>Zemedeneh Negatu</h1>
                    <p> Global Chairman of Fairfax Africa Fund </p>
                    </div>
                </div>
            </div>

       
           
      
           
          
          
          </section>
          <div class="head-org">
            <p>The Organizing Members of the bank are qualified, kowledgeable, and possess the necessary qualities to successfully establish the bank, including raising the initial capital.</p>
          
          </div>

    </section>  
    
    <section class="contact" id="contact">
      

         <style>
            .container { 
              display: flex;
              flex-wrap: wrap;
              overflow: hidden;
              }
            .red {
              background: #fff;
              display: flex;
              flex-direction: column;
              flex-wrap: wrap;
            }
            .red h1{
                font-size: 1.5rem;
                font-weight: bold;
                padding-top: .5rem;
            }
            .info {
              background: #fff;
             justify-content: space-between;
             flex-wrap: wrap;
            }
            .info h2{
                font-size: 1.1rem;
                padding-top: .5rem;
            }
            .info p{
                font-size: 1rem;
                color: #979797;
                padding-top: .5rem;
            }
            .info i{
                color: #232b56;
                font-size: 1.5rem;
                padding-top: .5rem;
                cursor: pointer;
            }
            .info i:hover{
                color: #f0be38;
            }
            .blue {
                background: #fff;
                flex-wrap: wrap;
            }
            .formm {
                background: #fff;
                flex-wrap: wrap;
            }
            .formm h2{
                color: #232b56;
                font-size: 1.2rem;
                padding-top: 3rem;
            }
            .formm label{
                color: #232b56;
                font-weight: 600;
            }
            input[type=text], select {
  width: 100%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
}
input[type=tel], select {
  width: 100%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
  resize: none;
}
textarea {
  width: 100%;
  height: 250px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #979797;
  border-radius: 20px;
  background-color: #efefef;
  font-size: 16px;
  resize: none;
}

input[type=submit] {
  float:right;
  width: 30%;
  background-color: #f0be38;
  color: #fff;
    margin-top: 1rem;
    padding: .5rem 1rem ;
    font-size: 1.2rem;
    cursor: pointer;
  border: none;
  border-radius: 0px;   
}
input[type=submit]:hover{
    background-color: #232b56;
    color: #f0be38;
}

  
        .container div {
              
              padding: .2em;
              color: #232b56;
              flex: 1;
            }

@media(max-width:768px){
    input[type=text], select {
  width: 100%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
}
input[type=tel], select {
  width: 100%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
  resize: none;
}
}


  @media(max-width:480px){
    input[type=text], select {
        width: 95%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
}

input[type=tel], select {
    width: 95%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
}
.mess {
    float: left;
}
.sub  input[type=text], select {
  width: 95%;
  padding: 12px 35px;
  margin: 8px 0;
  display: block;
  border: 1px solid #979797;
  border-radius: 20px;
  box-sizing: border-box;
  background: #efefef;
}
.blue .gmap_canvas {
    overflow-x:hidden;
    background:none!important;
    height:383px;
    width:500px;
}
  }

           
            </style>
            <div class="container">
                
                <div class="red">
                    <h1>Contact </h1>
                <div class="info">
                       <h2>Visit us</h2>
                       <p>Kazanchis, Next to oilibya, Genet Bldg, 2nd Floor,<br> Office No. 201, Addis Ababa, Ethiopia</p>
                        <h2>Call us</h2>
                        <p>+251 96 691 9695</p>
                        <h2>Get in touch</h2>
                        <p>Investor.relations@selambanket.com</p>
                        <a href="https://www.facebook.com/selambankofficial" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/selambank.s.c/" target="_blank"><i class="fab fa-instagram"></i></a>

                </div>
                <div class="blue">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="383" id="gmap_canvas" src="https://maps.google.com/maps?q=selam%20bank&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:383px;width:600px;}</style><a href="https://www.embedgooglemap.net">maps embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:383px;width:600px;}</style></div></div> 
                </div>
                </div>
              <div class="formm">
                  <h2>How can we help?</h2>
                  <form action= "send_mail.php" method="post" autocomplete="on"><div style="margin:0;padding:0">


                     <div class="fname" style="float:left;">
                        <label for="fname">First Name</label>
                        <input id="user_first_name" name="user[first_name]" size="25" type="text" required />
                      </div>
                      
                      <div class="lname" style="float:left; ">
                        <label for="lname">Last Name</label>
                        <input id="user_last_name" name="user[last_name]" size="25" type="text" required />
                      </div>
                      <div class="phone" style="float:left;">
                        <label for="phone">Phone Number</label>
                        <input id="user_phone" name="user_phone_number" size="25" type="tel" required />
                      </div>
                      
                      <div class="mail" style="float: left;">
                        <label for="email">Email</label>
                        <input id="user_email" name="email_address" size="25" type="text" required />
                      </div>
                   
                      <div class="mess" style="float: left;" >
                        <label for="message">Message</label>
                       <textarea name="comments" id="message" cols="70" rows="10" required> </textarea>
                      </div>
                      
                         <input type="submit" value="Submit">
                         
                      
                    

                  <!--  <div>
                        <label for="pass1">Password</label>
                        <input id="user_password" name="user[password]" size="30" type="password" />
                    </div>
                    <div>
                        <label for="pass2">Confirm Password</label>
        
                        <input id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password" />
        
                    </div>-->
              </div>
            
            </div>
    </section>
<section class="foot">
<footer>
    <div class="footer-img">
        <img src="SB Logo yellow horizontal .png" alt="" width="150">
    </div>
    <div class="containers">
        <div class="content-box">
            <img src="Selam.Phone.png" alt="" width="30">
            <div class="para">
                <p> +251966919695</p>
            </div>
        </div>
        <div class="content-box">
                      
            <img src="Selam.email.png" alt="" width="30">
            <div class="para">
                <p> investor.relations@selambanket.com</p>
            </div>
        </div>
        <div class="content-box">
            <img src="Selam.Location.png" alt="" width="30">
            <div>
                <p>Kazanchis, Next to oilibya, Genet Bldg,<br> 2nd Floor, Office No. 201, Addis Ababa, Ethiopia</p>
            </div>
        </div>

    </div>
    <div class="social">
        
        <a href="https://www.facebook.com/selambankofficial" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://instagram.com/selambank.s.c/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.google.com/maps/place/Selam+Bank+SC/@9.0170322,38.7642523,17z/data=!3m1!4b1!4m5!3m4!1s0x164b8563d6ab5b9d:0x398be72d53970541!8m2!3d9.016934!4d38.7664205" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
        
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; 2021 Selambank&reg;</p>
    </div>
</footer>
</section>


   
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>