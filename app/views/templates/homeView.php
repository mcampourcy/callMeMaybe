<ul>
    <?php
    foreach ($homeData as $person){
        $link = FO_URL.$person->getId();
        ?>
        <li>
            <a href="<?=$link?>">★&nbsp<?=$person->getFirstname().' '.$person->getLastname()?></a>
        </li>
        <?php
    }//endfor
    ?>
</ul>