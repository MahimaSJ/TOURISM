<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>United states</h1>
        <img src="./images/united state.png" alt="" id="img">
        <p>The United States of America (U.S.A. or USA), commonly known as the United States (U.S. or US) or America, is a country primarily located in North America consisting of 50 states, a federal district, five major unincorporated territories, nine Minor Outlying Islands,[i] and 326 Indian reservations. It is the world's third-largest country by both land and total area.[c] It shares land borders with Canada to its north and with Mexico to its south and has maritime borders with the Bahamas, Cuba, Russia, and other nations.[j] With a population of over 333 million,[k] it is the most populous country in the Americas and the third-most populous in the world. The national capital of the United States is Washington, D.C., and its most populous city and principal financial center is New York City.</p>
        <p>The United States is a diverse tourist place with a wealth of attractions to explore. Comprising 50 states, this country is a melting pot of natural landscapes and cultures. From the skyscrapers of New York to the islands of Hawaii and the landscape of the Grand Canyon, there are lots of places to visit in the USA. Famous places include Los Angeles, San Francisco and Vegas in the West and New York City and Chicago in the East. With some of the most iconic landmarks, the United States is one of the most travelled countries globally. To help you plan your trip, we list the top 10 tourist places to visit in the USA.</p>
        <section class="book" id="book">
        <div class="book-form">
            <h1>BOOK NOW!!!</h1>
            <form method="post" action="php.php" id="form">
                <p>NAME:</p><br>
                <input type="text" placeholder="name" name="name" id="name" required>
                <p>EMAIL:</p><br>
                <input type="email" placeholder="email" name="email" id="email" required>
                <p>PLACE:</p><br>
                <input type="text" placeholder="Where To" name="place" id="place" required>
                <p>TOTAL STAY DAYS:</p><br>
                <input type="text" placeholder="How Many" name="days" id="days" required>
                <p>ARRIVAL DATE:</p><br>
                <input type="date" placeholder="Arrivals" name="arrivaldate" id="arrivaldate" required>
                <p>LEAVING DATE:</p><br>
                <input type="date" placeholder="Leaving" name="leavingdate" id="leavingdate" required>
                <textarea name="" id="" cols="5" rows="5" placeholder="Enter Your Details"></textarea>
                <p style="display:inline-block">PAYMENT METHOD:</p>
                <select required>
                    <option>ONLINE</option>
                    <option>OFFLINE</option>
                </select><br><br>
                <input type="submit" value="Book Now" class="submit" >
            </form>
            
        </div>
        </section>
        <a href="travelweb.php" style=" border:2px solid black;background-color: white;margin-left:50%;padding:5px;text-decoration:none;font-size:20px">GO TO HOME</a>
    </body>
</html>