<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>FRANCE</h1>
        <img src="./images/france.png" alt="" id="img">
        <p>Many things entice travelers to visit France — food, wine, fashion, architecture, and natural beauty among them. There’s something wonderful to eat, drink, see, and do in every corner of this Western European nation. It’s hard not to fall in love with Paris. The glamorous beaches along the Côte d'Azur are legendary. Provence also packs a punch with fragrant lavender fields, the hilltop villages of the Luberon, and vineyards. Vines and grand chateaux mix in the Loire Valley. Truth be told, the number of dazzling places within the country is actually quite dizzying, but we’re more than happy to help point you in some of the most photogenic directions.</p>
        <section class="book" id="book">
        <div class="book-form">
            <h1>BOOK NOW!!!</h1>
            <form method="post" action="php.php" id="form">
                <p>NAME:</p><br>
                <input type="text" placeholder="name" name="name" id="name" required>
                <p>EMAIL:</p><br>
                <input type="email" placeholder="email" name="email" id="email"required>
                <p>PLACE:</p><br>
                <input type="text" placeholder="Where To" name="place" id="place" required>
                <p>TOTAL STAY DAYS:</p><br>
                <input type="text" placeholder="How Many" name="days" id="days" required>
                <p>ARRIVAL DATE:</p><br>
                <input type="date" placeholder="Arrivals" name="arrivaldate" id="arrivaldate"required>
                <p>LEAVING DATE:</p><br>
                <input type="date" placeholder="Leaving" name="leavingdate" id="leavingdate" required>
                <textarea name="" id="" cols="5" rows="5" placeholder="Enter Your Details"></textarea>
                <p style="display:inline-block">PAYMENT METHOD:</p>
                <select required>
                    <option>ONLINE</option>
                    <option>OFFLINE</option>
                </select>
                <input type="submit" value="Book Now" class="submit" >
            </form>
            <script src="book.js"></script>
        </div>
        </section>
        <a href="travelweb.php" style=" border:2px solid black;background-color: white;margin-left:50%;padding:5px;text-decoration:none;font-size:20px">GO TO HOME</a>
    </body>
</html>