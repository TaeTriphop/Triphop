<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latte</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="icon" href="img/icon.svg" type="image/x-icon"> 
</head>
<body>
    
    <div class="theme-switch-container">
        <span id="toggle-icon">
            <!-- <span class="togle-text">โหมด</span> -->
            <i class="fas fa-sun"></i>
         </span>

        <label class="theme-switch">
            <input type="checkbox">
            <div class="slider round"></div>
            
        </label>
    </div>

    <nav id="nav">
        <a href="#home">Home</a>
        <a href="#project">Project</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="home">
        <div class="title-group">
            <H1>TRIPHOP PROMSORN</H1>
            <H2>TAE | Plutoz</H2>
        </div>
    </section>

    <section id="project">
        <h1>PROJECT</h1>
        <div class="project-container">
            <div class="image-container">
                <h2>WEB</h2>
                <img src="img/web1_light.svg" alt="" id="image1">
            </div>
            <div class="image-container">
                <h2>WEB2</h2>
                <img src="img/web2_light.svg" alt="" id="image2">
            </div>
            <div class="image-container">
                <h2>WEB3</h2>
                <img src="img/web3_light.svg" alt="" id="image3">
            </div>
            <!-- <div class="image-container">
                <h2>WEB3</h2>
                <img src="img/web3_light.svg" alt="" id="image3">
            </div>
            <div class="image-container">
                <h2>WEB3</h2>
                <img src="img/web3_light.svg" alt="" id="image3">
            </div>
            <div class="image-container">
                <h2>WEB3</h2>
                <img src="img/web3_light.svg" alt="" id="image3">
            </div> -->
        </div>
    </section>

    <section id="contact">
       
        <div class="social-icon">

        
        <div class="contact-text">
            <i class="fas fa-phone-alt"></i>
            <span class="text-phone">095-621-1524</span>
        </div>
        
        <div class="contact-text">
        <i class="fas fa-envelope"></i>
            <span class="text-gmail">triphop.pro@gmail.com</span>
        </div>

        <div class="contact-text">
         <i class="fab fa-line"></i>
            <span class="text-qrcode"><img src="img/qrcodeline.jpg" alt="" id="image2" class="qrcode"></span>
        </div>

        <div class="contact-text">
        <span class="text-facebook">Click !!</span>
         <a href="https://www.facebook.com/TaeTriphop/" target="blank"><i class="fab fa-facebook-square"></i></a> 
        </div>

        
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>