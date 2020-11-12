<html>

    <ul>
    <?php foreach($portatiles as $portatil){ ?>
        <li> <?php echo $portatil['id'] ?>
            <?php echo $portatil['nom'] ?>
        </li>
    <?php } ?>
</ul>
</html>