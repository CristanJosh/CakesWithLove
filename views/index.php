<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes with Love by Ces</title>
    <link rel="icon" type="image/x-icon" href="../assets/image/about-us-bg.png">
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
        <a href="#" class="logo">Cakes with Love by Ces</i></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#menu">Menu</a>
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
                    <p>Experience the joy of handcrafted, personalized cakes, cupcakes, and brownies, made with love and care. Whether you choose traditional flavors or plant-based creations, each bite reflects our passion for baking and commitment to quality. Let us sweeten your moments, big or small.</p>
                </div>
                <a href="#menu" class="btn-header">Explore the Menu</a>
            </form>
        </div>

            <div class="image">
                <img src="../assets/image/burnt-cc.png" alt="Delicious Cake">
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu">
        <h2 class="heading">Menu</h2>
        <div class="box-container">
            
            <div class="box">
                <img src="../assets/image/burnt-cc.png" alt="Basque Burnt Cheesecake">
                <div class="content">
                    <h3>Basque Burnt Cheesecake</h3>
                    <p>Delight in our Basque Burnt Cheesecake – a creamy, caramelized masterpiece with a perfectly charred top and a luscious, melt-in-your-mouth center!</p>
                    <span>₱650.00</span>
                </div>
            </div>

            <div class="box">
                <img src="../assets/image/minecraft_carrot_cake.png" alt="Minecraft Carrot Cake">
                <div class="content">
                    <h3>Minecraft Carrot Cake</h3>
                    <p>Dig into our Minecraft Carrot Cake – a moist, spiced carrot cake topped with cream cheese frosting, inspired by your favorite blocky adventure!</p>
                    <span>₱1,250.00</span>
                </div>
            </div>

            <div class="box">
                <img src="../assets/image/fresh-fruit-cake.png" alt="Mixed Berries Bento Cake">
                <div class="content">
                    <h3>Mixed Berries Bento Cake</h3>
                    <p>Enjoy our Mixed Berries Bento Cake – a delightful blend of soft, fluffy cake topped with fresh, juicy berries for the perfect sweet and tangy treat!</p>
                    <span>₱450.00</span>
                </div>
            </div>

            <div class="box">
                <img src="../assets/image/orange_cupcake.png" alt="Orange Cupcake">
                <div class="content">
                    <h3>Orange Cupcake</h3>
                    <p>Brighten your day with our Orange Cupcake – a zesty, fluffy treat topped with a citrusy glaze for a burst of refreshing flavor!</p>
                    <span>₱600.00</span>
                </div>
            </div>

            <div class="box">
                <img src="../assets/image/pineapple_kiwi_fruit_cake.png" alt="Pineapple Kiwi Fruit Cake">
                <div class="content">
                    <h3>Pineapple Kiwi Fruit Cake</h3>
                    <p>Savor our Pineapple Kiwi Fruit Cake – a tropical delight with layers of moist cake, fresh pineapple, and kiwi slices for a fruity indulgence!</p>
                    <span>₱1,300.00</span>
                </div>
            </div>

            <div class="box">
                <img src="../assets/image/vegan_oreo_bento_cake.png" alt="Vegan Oreo Bento Cake">
                <div class="content">
                    <h3>Vegan Oreo Bento Cake</h3>
                    <p>Indulge in our Vegan Oreo Bento Cake – a rich, plant-based treat layered with creamy goodness and Oreo crunch, perfect for any occasion!</p>
                    <span>₱450.00</span>
                </div>
            </div>

        </div>
    </section>

 <!-- BOOK -->
<section class="book" id="book">
    <h1 class="heading">Place Order</h1>

    <form action="order.php" method="POST" id="cakeOrderForm">
        <input type="text" placeholder="Name" name="name" class="box" required>
        <input type="email" placeholder="Email" name="email" class="box" required>
        <textarea name="customer_address" placeholder="Address (required for delivery)" class="box" rows="3" id="addressField" required></textarea>

        <select name="cake_type" id="cake_type" class="box" required>
            <option value="" disabled selected>Choose Your Cake...</option> <!-- Placeholder -->
            <option value="Basque Burnt Cheesecake">Basque Burnt Cheesecake</option>
            <option value="Minecraft Carrot Cake">Minecraft Carrot Cake</option>
            <option value="Mixed Berries Bento Cake">Mixed Berries Bento Cake</option>
            <option value="Orange Cupcake">Orange Cupcake</option>
            <option value="Pineapple Kiwi Fruit Cake">Pineapple Kiwi Fruit Cake</option>
            <option value="Vegan Oreo Bento Cake">Vegan Oreo Bento Cake</option>
        </select>

        <input type="number" placeholder="Quantity" name="quantity" class="box" required>
        <textarea name="message" placeholder=" Cake message..." class="box" rows="4"></textarea>

        <!-- New Field: Order Type -->
        <select name="order_type" id="order_type" class="box" required>
            <option value="" disabled selected>Pick Order Type...</option> <!-- Placeholder -->
            <option value="Pick-Up">Pick-Up</option>
            <option value="Delivery">Delivery</option>
        </select>

        <button type="submit" name="submit" class="btn-header">Submit</button>
    </form>
</section>

        <!-- Review Section -->
        <section id="review" class="review">
        <h2 class="heading">Customer Reviews</h2>
        <div class="review-slider">
            <div class="box">
                <img src="../assets/image/catherine.jpg" alt="Customer 1">
                <p>"Yummy! Highly recommended! Tasty Cupcakes!"</p>
                <h3>Mejoranda Catherine</h3>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
            <div class="box">
                <img src="../assets/image/carlow.jpg" alt="Customer 2">
                <p>"Eat all that cake thing without the guilt!"</p>
                <h3>Carlow Roque</h3>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
            <div class="box">
                <img src="../assets/image/cristan.jpg" alt="Customer 1">
                <p>"So good! The cupcakes are very tasty and perfectly moist, with just the right balance of sweetness. Each bite is a delightful treat!"</p>
                <h3>Cristan Josh Nuguid</h3>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
        </div>
    </section>
    
     <!-- About Section -->
     <section id="about" class="about">
        <div class="row">
            <div class="image">
                <img src="../assets/image/about-us-bg.png" alt="About Cake's with Love">
            </div>
            <div class="content">
                <h2 class="heading">About Us</h2>
                <p>Cakes with Love by Ces began in Telabastagan as a creative pursuit, spreading joy through baking. Founded in 2019, we specialize in custom-made cakes, cupcakes, and brownies for any occasion. Our creations are crafted with artistry, attention to detail, and a dedication to inclusivity, offering both traditional and vegan options. We aim to make every celebration memorable with treats made from the heart, honoring your style and story.</p>
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
                <a href="#book">Place Order</a>
            </div>
            <div class="box">
                <h3>Contact Information</h3>
                <a href="tel:+639173838972" id="phoneNumber"><b>Contact No.:</b> +63 917 383 8972</a>
                <a href="mailto:ces24pangilinan@gmail.com" id="emailLink"><b>Email:</b> ces24pangilinan@gmail.com</a>
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
        <p class="credit">© 2024 <b>Cakes with Love by Ces</b>. All rights reserved.</p>
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
