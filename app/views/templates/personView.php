<?php
foreach ($personData as $person) {
    ?>
    <p>
        <strong>
            <?= $person->getFirstname() . ' ' . $person->getLastname() ?>
        </strong>
    </p>

    <p>
        <?= $person->getPhone_number() ?>
    </p>

    <?php
}//endfor
?>