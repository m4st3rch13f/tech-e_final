<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-E Terms and Conditions</title>
    <link rel="stylesheet" href="../tech-e/termsandconds.css">
    <link rel="stylesheet" href="../tech-e/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <section id="header">
        <a href="../tech-e/index.php"><img src="../tech-e/images/tech-e-high-resolution-logo-transparent.png" id="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="../tech-e/index.php">Home</a></li>
                <li><a href="../tech-e/store.php">Store</a></li>
                <li><a href="../tech-e/about.php">About</a></li>
                <li><a href="../tech-e/cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="../tech-e/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <div class="container">
        <h1>Terms and Conditions</h1>

        <h2>Welcome to Tech-E!</h2>
        <p>Please read these Terms and Conditions carefully before using the Tech-E website operated by Tech-E.</p>

        <h2>By accessing or using the Service, you agree to be bound by these Terms.</h2>
        <p>If you disagree with any part of the terms, then you may not access the Service.</p>

        <h2>Accounts</h2>
        <p>When you create an account with us, you must provide accurate, complete, and up-to-date information at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>

        <h2>Intellectual Property</h2>
        <p>The Service and its original content, features, and functionality are and will remain the exclusive property of Tech-E and its licensors. The Service is protected by copyright, trademark, and other laws of both the United States and foreign countries.</p>

        <h2>Links To Other Web Sites</h2>
        <p>Our Service may contain links to third-party websites or services that are not owned or controlled by Tech-E. Tech-E has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third-party websites or services.</p>

        <h2>Changes</h2>
        <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

        <h2>Contact Us</h2>
        <p>If you have any questions about these Terms, please contact us at:</p>
        <p>Email: afif.jawhary@ashesi.edu.gh</p>

    </div>
</body>
</html>
