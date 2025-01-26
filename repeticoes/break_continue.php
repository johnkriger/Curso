<div class="titulo">Break e Continue</div>

<?php
for ($i = 0;;$i++) {
    echo "$i <br>";
    if ($i == 10) {
        break;
    }
}
echo '<hr>';
for ($i = 0; $i < 15; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    echo "$i <br>";
}
?>