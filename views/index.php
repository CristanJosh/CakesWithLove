<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake's with Love</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VWQJ2RSSRJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VWQJ2RSSRJ');
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M9RHVMQN');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9RHVMQN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <header class="header">
        <a href="#" class="logo">Cake's with Love by Ces<i class="fas fa-birthday-cake"></i></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#menu">Menu</a>
            <a href="#book">Contact</a>
            <a href="#review">Reviews</a>
            <a href="#about">About</a>
        </nav>
        <a href="#book" class="btn-header">Order Now</a>
    </header>

    <!-- Home Section -->
    <section id="home" class="home">
        <div class="row">
        <div class="content">
            <form class="styled-form">
                <div class="unique-div">
                    <h3 class="title">Delight in Every Bite</h3>
                    <p>Experience the joy of freshly baked vegan cakes, crafted with love and care. Let us add sweetness to your moments.</p>
                </div>
                <a href="#menu" class="btn-header">Explore Menu</a>
            </form>
        </div>

            <div class="image">
                <img src="../assets/image/cake-display.png" alt="Delicious Cake">
            </div>
        </div>
    </section>



    <hr class="section-divider">

    <!-- Menu Section -->
    <section id="menu" class="menu">
        <h2 class="heading">Our <span>Menu</span></h2>
        <div class="box-container">
            <div class="box">
                <img src="../assets/image/fresh-fruit-cake.png" alt="fresh-fruit-cake">
                <div class="content">
                    <h3>Fresh Fruit Cake</h3>
                    <p>Rich, moist chocolate cake topped with smooth chocolate ganache.</p>
                    <span>₱450+</span>
                </div>
            </div>
            <div class="box">
                <img src="../assets/image/cupcake.png" alt="cupcake">
                <div class="content">
                    <h3>Custom Cupcake</h3>
                    <p>A delightful cupcake that can be personalized with your choice of flavors, frosting, and toppings. Perfect for any celebration!</p>
                    <span>₱250+</span>
                </div>
            </div>
            <div class="box">
                <img src="../assets/image/burnt-cc.png" alt="Basque Burnt Cheesecake">
                <div class="content">
                    <h3>Basque Burnt Cheesecake</h3>
                    <p>A rich, creamy cheesecake with a caramelized top, offering a perfect blend of sweet and savory flavors in every bite.</p>
                    <span>₱600+</span>
                </div>
            </div>
            <div class="box">
                <img src="../assets/image/custom-cake.png" alt="Custom Cake">
                <div class="content">
                    <h3>Custom Cake</h3>
                    <p>A personalized cake crafted to your preferences, perfect for any occasion, with unique designs and flavors tailored just for you.</p>
                    <span>₱500+</span>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

       <!-- BOOK -->
       <section class="book" id="book">
            <h1 class="heading">cake <span>Place your Order</span></h1>

            <form action="order.php" method="POST" id="cakeOrderForm">
                <input type="text" placeholder="Your Name" name="name" class="box" required>
                <input type="email" placeholder="Your Email" name="email" class="box" required>

                <select name="cake_type" id="cake_type" class="box" required>
                    <option value="" disabled selected>Flavors</option> <!-- Placeholder -->
                    <option value="Chocolate">Chocolate</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Strawberry">Strawberry</option>
                </select>

                <input type="number" placeholder="Quantity" name="quantity" class="box" required>
                <textarea name="message" placeholder="Special Message" class="box" rows="4"></textarea>

                <button type="submit" name="submit" class="btn-header">Place Order</button>
            </form>
        </section>


    <hr class="section-divider">

        <!-- Review Section -->
        <section id="review" class="review">
        <h2 class="heading">Customer <span>Reviews</span></h2>
        <div class="review-slider">
            <div class="box">
                <img src="../assets/image/pic-2.png" alt="Customer 1">
                <p>"The best cakes I have ever had! The flavors are so rich and the designs are stunning!"</p>
                <h3>Maria Smith</h3>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
            <div class="box">
                <img src="../assets/image/pic-1.png" alt="Customer 2">
                <p>"Cake Bliss made my birthday unforgettable with their beautiful and delicious cake!"</p>
                <h3>John Doe</h3>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    
     <!-- About Section -->
     <section id="about" class="about">
        <div class="row">
            <div class="image">
                <img src="../assets/image/about-us-bg.jpg" alt="About Cake's with Love">
            </div>
            <div class="content">
                <h3 class="title">About Us</h3>
                <p>At Cake's with Love, we believe that every celebration deserves a perfect cake. With over a decade of baking experience, we bring artistry and flavor to every creation.</p>
                <div class="icons-container">
                    <div class="icons">
                        <img src="../assets/image/quality.png" alt="Quality">
                        <h3>Quality Ingredients</h3>
                    </div>
                    <div class="icons">
                        <img src="../assets/image/customization.png" alt="Customization">
                        <h3>Custom Designs</h3>
                    </div>
                    <div class="icons">
                        <img src="../assets/image/delivery.png" alt="Delivery">
                        <h3>Timely Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#menu">Menu</a>
                <a href="#review">Reviews</a>
                <a href="#about">About</a>
                <a href="#book">Contact</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="tel:+639173838972" id="phoneNumber">Contact Number: +63 917 383 8972</a>
                <a href="mailto:ces24pangilinan@gmail.com" id="emailLink">Email: ces24pangilinan@gmail.com</a>
                <div class="social-links" id="socialLinks">
                    <a href="https://www.facebook.com/cakeswithlove24" target="_blank" id="facebookLink">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.tiktok.com/@cakes.with.love.b5" target="_blank" id="tiktokLink">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
        <p class="credit">© 2024 <span>Cake's with Love</span>. All rights reserved.</p>
    </footer>

</body>
</html>
<script>
    document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', function () {
            // Push the navbar event to the Data Layer
            window.dataLayer = window.dataLayer || [];
            dataLayer.push({
                event: 'navbar',
                link_text: this.textContent,
                link_url: this.getAttribute('href')
            });
    
        });
    });
    document.getElementById('cakeOrderForm').addEventListener('submit', function(event) {
        // Capture the selected cake flavor
        const selectedFlavor = document.getElementById('cake_type').value;

        // Push the event and selected flavor to the Data Layer
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            event: 'cake_order_submit',
            cake_type: selectedFlavor
        });

        console.log("Data Layer after submit:", dataLayer);
    });
</script>
