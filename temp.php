<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="Author" content="Enin Fujimi">
    <title>Test TXT To Array</title>
</head>
<body>
<h1>
    <a href="/">
        Test TXT To Array
    </a>
</h1>
<?php for ($i = 0; $i < $count; $i++) : ?>
    <?php echo "ID: " . $i . ", Title: " . $nove_list[$i][0] . ", Path: " . $nove_list[$i][1] . "<br>"; ?>
<?php endfor; ?>

<?php foreach ($data as $item) : ?>
    <?php foreach ($item as $item2) : ?>
        <p><?php echo "Episode: " . $item2["ep_id"] . ", Sub Title: " . $item2["chapter"]; ?></p>
    <?php endforeach; ?>
<?php endforeach; ?>

<?php foreach ($data as $item) : ?>
    <?php foreach ($item as $item2) : ?>
        <p><?php echo "Sub Title: " . $item2["chapter"]; ?></p>
    <?php endforeach; ?>
<?php endforeach; ?>



<?php foreach ($test_chapters as $item) : ?>
    <?php echo $item . "<br>" ?>
<?php endforeach; ?>

</body>
</html>
