<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>JORDAN</h1>
        <img src="./images/jordan.png" alt="" id="img">
        <p>There are many reasons to put Jordan on your travel wish list. 
Beyond the well-known (and justly famous) cliff-carved city of Petra, visitors here can the explore friendly villages and forested trails of Jordan’s north, the ancient ruins in Amman and the mind-bending Mars-like desertscapes of Wadi Rum. Jordan is a fabulous destination for travelers with an adventurous spirit and an interest in Arab history and culture. 
The intensity here – of the weather, traffic and terrain – can be overwhelming for first-time visitors, yet if you let go of your expectations and embrace all that Jordan offers, you’ll likely find warm hospitality and unique experiences you’ll remember forever. 
Each of Jordan’s different regions offer destinations with much to see and do (and eat!). Here are nine of the best places to visit in Jordan. </p>
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