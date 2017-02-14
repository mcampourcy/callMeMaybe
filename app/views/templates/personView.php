<?php
foreach ($personData as $person) {
    ?>
    <h2><?= $person->getFirstname() . ' ' . $person->getLastname() ?></h2>
    <h3><?= $person->getPhone_number() ?></h3>
    <?php
}//endfor
?>