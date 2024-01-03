<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>SPAIN</h1>
        <img src="./images/spain.png" alt="" id="img">
        <p>With its sun-drenched Mediterranean beaches, World Heritage cities, incredible cuisine, and multi-faceted culture, few countries in the world can tick all the traveler boxes with such a diverse range of attractions as Spain. It is truly unique. 

Given the country's long and storied past of Catholic monarchies, Muslim caliphates and New World conquistadores, one region can have a completely distinct character from the next. Here’s a rundown of the best places to visit in this standout Iberian destination.</p>
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