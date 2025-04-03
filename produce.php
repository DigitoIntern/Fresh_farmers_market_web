<?php
$title = "Produce";
include('components/head.php');
include('components/header.php');
?>
<main class="container">
    <div class="seasonal-produce">
        <h2>Seasonal Produce</h2>
        <div class="row">
            <div class="col-md-3">
                <!-- Spring Produce -->
                <h3 class="text-center">Spring (March to May)</h3>
                <div class="text-center">
                    <ul>
                        <li>Asparagus</li>
                        <li>Strawberries</li>
                        <li>Rhubarb</li>
                        <li>Spinach</li>
                        <li>Green beans</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Summer Produce -->
                <h3 class="text-center">Summer (June to August)</h3>
                <ul>
                    <li>Tomatoes</li>
                    <li>Corn</li>
                    <li>Zucchini</li>
                    <li>Yellow squash</li>
                    <li>Blueberries</li>
                </ul>
            </div>
            <div class="col-md-3">
                <!-- Fall Produce -->
                <h3 class="text-center">Fall (September to November)</h3>
                <ul>
                    <li>Apples</li>
                    <li>Pumpkins</li>
                    <li>Squash</li>
                    <li>Carrots</li>
                    <li>Brussels sprouts</li>
                </ul>
            </div>
            <div class="col-md-3">
                <!-- Winter Produce -->
                <h3 class="text-center">Winter (December to February)</h3>
                <ul>
                    <li>Citrus fruits</li>
                    <li>Kale</li>
                    <li>Spinach</li>
                    <li>Root vegetables</li>
                    <li>Winter squash</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="produce-guide">
        <h2>Produce Guide</h2>
        <div class="produce-guide-container">
            <!-- Fruits -->
            <h3>Fruits</h3>
            <div class="produce-guide-item">
                <h4>Apples</h4>
                <p>
                    <strong>Selecting:</strong> Choose apples that are firm and have no signs of bruising or rot.
                    <strong>Storing:</strong> Store apples in a cool, dry place.
                    <strong>Preparing:</strong> Wash apples before eating, and remove any stems or leaves.
                </p>
            </div>
            <div class="produce-guide-item">
                <h4>Bananas</h4>
                <p>
                    <strong>Selecting:</strong> Choose bananas that are yellow and have no signs of bruising or rot.
                    <strong>Storing:</strong> Store bananas at room temperature.
                    <strong>Preparing:</strong> Wash bananas before eating, and remove any stems or leaves.
                </p>
            </div>
            <!-- Vegetables -->
            <h3>Vegetables</h3>
            <div class="produce-guide-item">
                <h4>Broccoli</h4>
                <p>
                    <strong>Selecting:</strong> Choose broccoli that is firm and has no signs of bruising or rot.
                    <strong>Storing:</strong> Store broccoli in a cool, dry place.
                    <strong>Preparing:</strong> Wash broccoli before eating, and remove any stems or leaves.
                </p>
            </div>
            <div class="produce-guide-item">
                <h4>Carrots</h4>
                <p>
                    <strong>Selecting:</strong> Choose carrots that are firm and have no signs of bruising or rot.
                    <strong>Storing:</strong> Store carrots in a cool, dry place.
                    <strong>Preparing:</strong> Wash carrots before eating, and remove any stems or leaves.
                </p>
            </div>
        </div>
    </div>
    <div class="produce-guide-item">
        <!-- Recipe 1 -->
        <h2>Recipes</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="images/berries.jpg" alt="berries" class="card-img-top recipe-img">
                    <div class="card-body">

                        <h3>Summer Salad with Fresh Berries</h3>
                        <p>
                            <strong>Ingredients:</strong>
                        </p>
                        <ul>
                            <li>2 cups mixed greens</li>
                            <li>1 cup fresh berries (strawberries, blueberries, raspberries)</li>
                            <li>1/2 cup crumbled feta cheese</li>
                            <li>1/4 cup chopped pecans</li>
                            <li>2 tbsp olive oil</li>
                            <li>1 tbsp balsamic vinegar</li>
                        </ul>
                        <strong>Instructions:</strong>
                        <ol>
                            <li>In a large bowl, combine mixed greens, fresh berries, feta cheese, and pecans.</li>
                            <li>In a small bowl, whisk together olive oil and balsamic vinegar.</li>
                            <li>Pour dressing over salad and toss to combine.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Recipe 2 -->
                <div class="card">
                    <img src="images/soup.jpg" alt="soup" class="card-img-top recipe-img">
                    <div class="card-body">
                        <h3>Roasted Vegetable Soup</h3>
                        <p>
                            <strong>Ingredients:</strong>
                        </p>
                        <ul>
                            <li>2 tbsp olive oil</li>
                            <li>1 onion, chopped</li>
                            <li>3 cloves garlic, minced</li>
                            <li>2 carrots, chopped</li>
                            <li>2 celery stalks, chopped</li>
                            <li>4 cups vegetable broth</li>
                            <li>1 can diced tomatoes</li>
                        </ul>
                        <strong>Instructions:</strong>
                        <ol>
                            <li>Preheat oven to 425°F (220°C).</li>
                            <li>In a large bowl, toss together olive oil, onion, garlic, carrots, and celery.</li>
                            <li>Spread vegetables on a baking sheet and roast for 30 minutes.</li>
                            <li>In a large pot, combine roasted vegetables, vegetable broth, and diced tomatoes.</li>
                            <li>Bring soup to a boil, then reduce heat and simmer for 20 minutes.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2>Farmers' Tips</h2>
        <div class="row">
            <div class="col-md-4">
                <!-- Tip 1 -->
                <div class="card">
                    <img src="images/tomatoes.jpg" alt="tomatoes" class="card-img-top tip-img">
                    <div class="card-body">
                        <h3>Choosing the Best Tomatoes</h3>
                        <p>
                            "When choosing tomatoes, look for ones that are heavy for their size and have a sweet,
                            earthy
                            aroma.
                            Avoid tomatoes with soft spots or wrinkles." - John, Tomato Farmer
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Tip 2 -->
                <div class="card">
                    <img src="images/greens2.jpg" alt="greens2" class="card-img-top tip-img">
                    <div class="card-body">
                        <h3>Selecting Fresh Herbs</h3>
                        <p>
                            "When selecting fresh herbs, look for ones with bright, vibrant colors and a fresh,
                            citrusy scent. Avoid herbs with wilted or brown leaves." - Emily, Herb Farmer
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Tip 3 -->
                <div class="card">
                    <img src="images/apples.jpg" alt="apples" class="card-img-top tip-img">
                    <div class="card-body">
                        <h3>Choosing the Best Apples</h3>
                        <p>
                            "When choosing apples, look for ones that are firm and have a sweet,
                            slightly tart aroma. Avoid apples with soft spots or bruises." - Michael, Apple Farmer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('components/footer.php');

?>