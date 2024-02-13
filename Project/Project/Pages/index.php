<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitnessPal</title>
</head>
<body>

    <body>
        <nav class="navbar" id="navbar">
            <div class="navbar-container container">
                <input type="checkbox">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                     <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="#navbar">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#food-menu">Menu</a></li>
                    <li><a href="#testimonials">Testimonial</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <h1 class="logo">Myfitness<b>Pal</b> </h1>

                <div class="menu-buttons">
                    <a href="loginout.php" class="btn signIn">Loginout</a>
                    <a href="SingUp.php" class="btn btn-primary">SingUp</a>
                 </div>
            </div>

        </nav>

        <section class="about" id="about">
            <div class="about-container container">
              <div class="about-text">
              <h2>Fitness Starts with What You eat</h2>
              <p>Take your control of your Goals. break down ingredients and log activities with my fitnessPal!</p>
              
              </div>
              <div class="about-img">
              <img src="../image/about.png" alt="About Us">
              </div>
            </div>  
          </section>

          <section class="food-menu" id="food-menu">
            <h2 class="food-menu-heading">
              Our Popular Items
            </h2>
            <div class="food-menu-container container">
                <div class="food-menu-item">
                    <div class="food-image">
                        <img src="../image/menu1.jpg" alt="">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title">Food Menu Item 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!</p>
                         <p class="food-price">Price:  &#x24;  20</p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-image">
                        <img src="../image/menu2.jpg" alt="">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title">Food Menu Item 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!</p>
                         <p class="food-price">Price:  &#x24; 30</p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-image">
                        <img src="../image/menu3.jpg" alt="">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title">Food Menu Item 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!</p>
                         <p class="food-price">Price:  &#x24; 40</p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-image">
                        <img src="../image/photo.jpg" alt="">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title">Food Menu Item 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!</p>
                         <p class="food-price">Price:  &#x24; 50</p>
                    </div>
                </div>
            
                </div>
                <div class="food-menu-item">
                    <div class="food-image">
                        <img src="../image/photo.jpg" alt="">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title">Food Menu Item 5</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!</p>
                         <p class="food-price">Price:  &#x24; 70</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials" id="testimonials">
            <h2 class="testimonial-title">What Our Customers Says</h2>
            <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="star-rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">The [Fruit Shake] arrived in excellent condition, exactly as described on their website. I'm thrilled with the quality and will definitely shop at [MyFitnessPal] again in the future. Highly recommended!!</p>
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="../image/images1.jpg" alt="">
                    </div>
                    <p class="customer-name">Khan BABA</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">The BBQ meat  arrived in excellent condition, exactly as described on their website. I'm thrilled with the quality and will definitely shop at [Store Name] again in the future. Highly recommended!</p>
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="../image/images2.jpg" alt="">
                    </div>
                    <p class="customer-name">awais</p>
                  
                </div>
            </div>
            <div class="testimonial-box">
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">The [fried chicken] arrived in excellent condition, exactly as described on their website. I'm thrilled with the quality and will definitely shop at [MyfitnessPal] again in the future. Highly recommended!!</p>
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="../image/images3.jpg" alt="">
                    </div>
                    <p class="customer-name">Yonis </p>
                </div>
            </div>
        </div>
        </section>
    
        <section class="contact" id="contact">
            <div class="contact-container container">
                <div class="contact-image">
                    <img src="../image/images6.jpg" alt="">
                </div>
                <div class="form-container">
                    <h2>Contact Us</h2>
                    <input type="text" name="" id="" placeholder="Name">
                    <input type="email" name="" id="" placeholder="E-Mail">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Type Your Message Here"></textarea>
                    <a href="#" class="btn-primary btn">Submit</a>
                </div>
            </div>
        </section>
    
       <footer class="footer" id="footer">
        <h2>Resturant Website &copy; all rights reserved.</h2>
       </footer>
    

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {
  
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
    
            window.location.hash = hash;
          });
        }

      });
    });
    </script>
    
    </body>
    </html>
    
