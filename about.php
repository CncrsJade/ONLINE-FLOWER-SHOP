<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
<video src="images/Farm1.mp4"width="100%" loop autoplay muted></video>     
        </div>

        <div class="content">
            <h3>Why choose us?</h3><center>
            <p>➤ મારા નજીકના અને પ્રિય લોકો માટે પોકેટ-ફ્રેન્ડલી વિવિધ વિકલ્પો ,
તાજા ફૂલો અને છોડ સહિત &nbspપસંદગી કરવાની વિશાળ શ્રેણી , ગંતવ્યના સરનામે જ ફૂલોની એક્સપ્રેસ ડિલિવરી,તાત્કાલિક પ્રતિસાદ અને સમાધાન સાથે સમસ્યાના કિસ્સામાં સુધારેલી ગ્રાહક સેવામાં સુધારો.<br>
&nbsp&nbsp&nbsp➤ પ્રથમ,કંપની ઉત્પાદકો અને સપ્લાયર્સ પાસેથી સીધા જ ઉત્પાદનો ખરીદે છે જે તમારા માટે , ગ્રાહક માટે વધુ તાજી પ્રોડક્ટ પૂરી પાડે છે. આ અભિગમ જથ્થાબંધ વેપારીઓ (વચેટિયાઓ)ને સમીકરણમાંથી પણ દૂર કરે છે જે ખર્ચમાં મોટો ઘટાડો કરે છે. તે બચતની ગણતરી કરવામાં આવે છે 
અને તુલનાત્મક બજાર ભાવોના રૂપમાં દરેક ઉત્પાદન પૃષ્ઠ પર પ્રદર્શિત કરવામાં આવે છે.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="content">
            <h3>what we provide?</h3>
            <p></p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <video src="images/Farm2.mp4"width="100%" loop autoplay muted></video>     
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="image">
<video src="images/Farm3.mp4"width="100%" loop autoplay muted></video>        
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p></p>         
   <a href="#reviews" class="btn">clients reviews</a>
        </div>
    </div><br>
</section>

<section class="reviews" id="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/Narendra modi.jpeg" alt="">
            <p> </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3></h3>
        </div>
																																																																
        <div class="box">
            <img src="images/Manmohan singh.jpeg" alt="">
            <p></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manmohan Singh</h3>
        </div>

        <div class="box">
            <img src="images/Atal Bihari Vajpai.jpeg" alt="">
            <p></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3></h3>
        </div>

        <div class="box">
            <img src="images/Morarji Desai.jpe
g" alt="">
            <p></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3></h3>
        </div>

        <div class="box">
            <img src="images/Rajiv Gandhi.jpeg" alt="">
            <p></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3></h3>
        </div>

        <div class="box">
            <img src="images/Lal Bahadur Shastri.jpeg" alt="">
            <p></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3></h3>
        </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>