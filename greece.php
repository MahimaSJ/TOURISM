<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>GREECE</h1>
        <img src="./images/Greece.png" alt="" id="img">
        <p>There are many popular tourist attractions in Greece. The combination of UNESCO World Heritage sites, beautiful islands, quaint towns and villages, and spectacular beaches, attracts several millions of visitors every year.
However, Greece can be a very confusing country for people who haven’t visited before! Which is why I’ve put this list together – I’m Greek, and have traveled extensively around my country, including over 60 of the Greek islands. Most people have heard of the capital and biggest city in Greece, Athens, the volcanic island of Santorini and the cosmopolitan Mykonos town. However, there are dozens more places you should visit in Greece, such as Cape Sounion, Ancient Delphi, Meteora, Ancient Mycenae, Ancient Epidaurus, Milos island and Thessaloniki.
All of these places (and hundreds more!) are often just as interesting, if not more so, than the “big name” destinations. So, here are a few popular places and some lesser known attractions in Athens and Greece.
</p>
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
                <input type="date" placeholder="Arrivals" name="arrivaldate" id="arrivaldate"required>
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