<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="booking.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">
    </head>
    <body>
        <h1>CHINA</h1>
        <img src="./images/china.png" alt="" id="img">
        <p>China is a country with a rich cultural heritage, stunning natural scenery, and modern, bustling cities. It’s a popular destination for tourists from all over the world, offering a range of experiences and attractions for visitors of all interests.
One of the must-visit destinations in China is Beijing, the country’s capital and one of the oldest cities in the world. Visitors can explore the city’s rich cultural heritage by visiting landmarks such as the Forbidden City, a former imperial palace, and the Temple of Heaven, a historic imperial temple. The Great Wall of China, one of the Seven Wonders of the World, is also located in the outskirts of Beijing and is a must-visit destination for visitors.</p>
        <p>China is also known for its stunning natural scenery, with destinations like Guilin, located in southern China, being a popular spot for visitors. Guilin is known for its dramatic karst landscapes and scenic river cruises, making it a must-visit destination for nature lovers.</p>
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