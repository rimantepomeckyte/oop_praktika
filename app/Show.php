<?php


namespace Vehicles;


class Show
{
    static public function ShowData($data)
    {
        foreach ($data as $item) {
            echo "<td>$item</td>";
        }
    }
}