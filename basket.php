<?php
if (isset($_COOKIE['bask'])) {
    foreach ($_COOKIE['bask'] as $name => $value) {
        echo "$name : $value <br />";
}
}