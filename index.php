<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>WEBSITE</title>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#">
                <img src="images/logo1.png" alt="logo">
            </a>
            <ul class="menu">
                <li> <a class="active" href="#">Home</a> </li>
                <li> <a href="#">Features</a> </li>
                <li> <a href="#">About</a> </li>
                <li> <a href="#">Contact</a> </li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>create Presectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quis ex ut minus doloremque laudantium a sit assumenda non, quasi aut eos nisi animi aliquam doloribus rerum? Architecto, magnam perferendis!</p>
            <a class="main-btn" href="#">Contact</a> 
        </div>
    </section>

    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png " alt="">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png " alt="">
                </div>
                <div class="f-text">
                    <h4>Computer Science</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png " alt="">
                </div>
                <div class="f-text">
                    <h4>Mobile Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png" alt="about-img">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Development</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex voluptatum facere ratione sapiente laudantium illo iusto nesciunt fuga ab quo! Impedit quisquam quae ipsum nobis provident, ad aspernatur dolor recusandae?</p>
             <button href="#" class="main.btn">Read More</button>
        </div>
    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi similique magnam ad doloribus.</p>
        </div>
        <form action="userinformation.php" method="POST">
            <input type="text" value="" name="username" placeholder="Your Full Name">
            <input type="email" value="" name="email" placeholder="Your E-Mail">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Write Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Cointinue</button>
        </form>
    </section>
</body>
</html>