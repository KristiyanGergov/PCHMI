
<?php
    function get_delete_button($deletable) {
        if ($deletable) {
            return '<button style="margin-top: 20px" class="button" type="submit">Delete Item</button>';
        } else {
            return '';
        }
    }

    function generate_product_html($item, $deletable) {
        return '
        <div class="row" style="background-color:#aaa;">
            <div class="column">
                <img style="display:block;margin:auto; border: 3px solid #ddd;" id="selectedImage" src="' . $item->img .'" alt="plus">
            </div>

            <form action="actions/add_item.php" method="POST" enctype="multipart/form-data">
                <div>
                    <div class="column">
                        <label for="productName"><b>Name of product:</b></label>
                        <h3>' . $item->name . '</h3>

                        <label for="description"><b>Description:</b></label>
                        <h3>' . $item->description . '</h3>

                        <label for="price"><b>Price for renting:</b></label>
                        <h3>' . $item->price . '</h3>

                        <label for="available"><b>Available for rent:</b></label>
                        <h3>' . $item->available . '</h3>

                        <label style="margin-top: 10px;">Type:</label>
                        <h3>' . $item->type . '</h3>

                    </div>
                </div>
                ' . get_delete_button($deletable) . '
            </form>
        </div>

        ';
    }
?>
