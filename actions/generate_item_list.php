<?php

# Usage: generate_item_rows($items) -> returns the needed string with the html divs

function generate_item_div($item)
{
    return
    '<div class="column" style="background-color:#aaa;">
        <a href="details.php?id='. $item->id .'"><img src="'. $item->image .'" alt="aeon"></a>
        <div class="name">'. $item->name .'</div>
        <div class="price">'. $item->price .'</div>
    </div>'."\n   ";
}

function generate_item_row($items)
{
    $result = '';
    foreach($items as $item) {
        $result = $result . generate_item_div($item);
    }

    return '<div class="row">'. "\n   " . $result . '</div>' ."\n";
}

function generate_item_rows($items)
{
    $result = '';
    foreach(array_chunk($items, 4) as $items_by_four) {
        $result = $result . generate_item_row($items_by_four);
    }
    return $result;
}
