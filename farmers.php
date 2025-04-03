<?php
$title = "framers";
include('components/head.php');
include('components/header.php');
?>

<main>
    <div class="farmer-profiles">
        <h2>Farmer Profiles</h2>

        <!-- Farmer 2 -->
        <div class=" farmer-profile">
            <h3>jovia, Jovic Farm</h3>
            <img src="images/jackline-05.jpg" alt=" jackline-05">
            <p>
                <strong>Farm History:</strong> Jovic Farm was established in 2010, with a focus on
                sustainable farming
                practices.
                <strong>Products:</strong> Berries, apples, pears, eggs, honey
            </p>
        </div>
    </div>
    </div>
    <div class="farmer-stories">
        <h2>Farmer Stories</h2>
        <div class="farmer-stories-container">
            <!-- Story 1 -->
            <div class="story">
                <h3>From City to Farm: My Journey to Becoming a Farmer</h3>
                <img src="images/esther-03.jpg" alt="esther-03" class="img-about w-60">
                <p>
                    "I never thought I'd leave my corporate job to become a farmer, but after a chance visit to a farm,
                    I was
                    hooked. I've been farming for 5 years now, and it's been the most rewarding experience of my life."
                </p>
                <p>
                    "One of the biggest challenges I faced was learning how to navigate the unpredictable weather
                    conditions. But
                    with the help of my fellow farmers and a lot of trial and error, I've learned to adapt and thrive."
                </p>
                <a href="read-more.html">Read More</a>
            </div>

            <!-- Story 2 -->
            <div class="story">
                <h3>Overcoming Adversity: How I Saved My Farm from Drought</h3>
                <img src="images/friend-01.png" alt="friend-01" class="img-about w-60">
                <p>
                    "When a severe drought hit our region, I thought for sure I'd lose my farm. But I refused to give
                    up. I worked
                    tirelessly to implement new irrigation systems and conservation methods, and it paid off."
                </p>
                <p>
                    "It was a tough road, but I learned so much about resilience and determination. And now, my farm is
                    thriving,
                    and I'm proud to be a part of this community."
                </p>
                <a href="read-more.html">Read More</a>
            </div>

            <!-- Story 3 -->
            <div class="story">
                <h3>Passing on the Tradition: How I'm Teaching My Children to Farm</h3>
                <img src="images/image2.JPG" alt="image2" class="img-about w-60">
                <p>
                    "Farming is in my blood, and I'm proud to be passing on the tradition to my children. They're
                    learning the ins
                    and outs of farming, from planting to harvesting, and it's amazing to see them grow and develop
                    their skills."
                </p>
                <p>
                    "It's not always easy, of course. There are long hours and hard work involved. But it's worth it to
                    see my
                    children develop a love for the land and a passion for farming."
                </p>
                <a href="read-more.html">Read More</a>
            </div>
        </div>
    </div>
    <div class="farmers-markets">
        <h2>Farmers' Markets</h2>
        <div class="farmers-markets-container">
            <!-- Market 1 -->
            <div class="market">
                <h3>Downtown Farmers' Market</h3>
                <p>
                    <strong>Location:</strong> 123 Main St, Anytown, USA
                    <strong>Days:</strong> Saturdays, 8am-1pm
                    <strong>Season:</strong> April-October
                </p>
                <ul>
                    <li>John Smith, Green Acres Farm</li>
                    <li>Jane Doe, Sunny Meadows Farm</li>
                </ul>
            </div>

            <!-- Market 2 -->
            <div class="market">
                <h3>Uptown Farmers' Market</h3>
                <p>
                    <strong>Location:</strong> 456 Elm St, Anytown, USA
                    <strong>Days:</strong> Wednesdays, 3pm-6pm
                    <strong>Season:</strong> May-November
                </p>
                <ul>
                    <li>Bob Johnson, Oakdale Farm</li>
                    <li>Mary Smith, Maple Hill Farm</li>
                </ul>
            </div>

            <!-- Market 3 -->
            <div class="market">
                <h3>Fresh Farmers' Market</h3>
                <p>
                    <strong>Location:</strong> plot 789, kampala, Uganda
                    <strong>Days:</strong> Sundays, 9am-2pm
                    <strong>Season:</strong> June-September
                </p>
                <ul>
                    <li>Teddy, Green Acres Farm</li>
                    <li>Jackykarah, Sunny Meadows Farm</li>
                    <li>Esther, Oakdale Farm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="certifications">
        <h2>Certifications</h2>
        <div class="certifications-container">
            <!-- Farmer 1 -->
            <div class="farmer-certifications">
                <h3>Teddy, Green Acres Farm</h3>
                <ul>
                    <li><img src="usda-organic-logo.png" alt="USDA Organic"> USDA Organic</li>
                    <li><img src="images/friend-01.png" alt="Non-GMO Project"> Non-GMO Project Verified</li>
                </ul>
            </div>

            <!-- Farmer 2 -->
            <div class="farmer-certifications">
                <h3>Jackykarah, Sunny Meadows Farm</h3>
                <ul>
                    <li><img src="certified-humane-logo.png" alt="Certified Humane"> Certified Humane</li>
                    <li><img src="images/image1.JPG" alt="Animal Welfare Approved"> Animal Welfare Approved</li>
                </ul>
            </div>
            <!-- Farmer 3 -->
            <div class="farmer-certifications">
                <h3>Esther, Oakdale Farm</h3>
                <ul>
                    <li><img src="usda-process-verified-logo.png" alt="USDA Process Verified"> USDA Process Verified
                    </li>
                    <li><img src="images/esther-03.jpg" alt="American Grassfed Association"> American Grassfed
                        Association
                        Certified</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php
include('components/footer.php');
?>