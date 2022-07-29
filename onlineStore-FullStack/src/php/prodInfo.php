<!-- Create the Product Cards -->
<?php
function createProducts($item)
{
    foreach ($item as $index => $ItemsArray) {
        $index = $index + 1;
        
        echo "
            <div class='card'>
                <img src=\"" . $ItemsArray['image'] . "\" alt=\"" . $ItemsArray['name'] . "\" class='accommodation' title=\"" . $ItemsArray['name'] . "\">
                <div class='product-data'>
                    <p id='name'>" . $ItemsArray['name'] . "</p>
                    <p id='price'>R" . $ItemsArray['price'] . ".00 ZAR </p>
                    <p id='description'>". $ItemsArray['description']."</p>
                    </div>
                <form class='chosenProducts' name='chosenProducts'>
                    <input type='hidden' value=" . $ItemsArray['id'] . " name='product_id'>
                    <input type='hidden' value=" . $ItemsArray['range'] . " name='product_range'>
                <button class='booking-btn' title='add to cart'>+</button>
                </form>
            </div> 
            ";
    }
}




