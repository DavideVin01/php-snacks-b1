<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sed recusandae, dolor magnam sint ut porro ipsam nemo assumenda dolores beatae nulla molestiae vero adipisci cumque! Tempora recusandae laborum aliquid.
Magnam doloribus deleniti officiis nam vero unde aliquid voluptatibus beatae quasi optio. Unde mollitia deserunt atque sed facere culpa non? Id exercitationem dolorum, minima sequi provident ad atque commodi blanditiis!
Debitis fuga incidunt ex placeat, eaque quos. Rem itaque veniam eius dolore sint, ullam, voluptates nesciunt qui quo ducimus quaerat odit soluta quae? Nesciunt, numquam dignissimos consequuntur doloribus in dolore?
Quia dolor quaerat eligendi possimus vitae autem cumque odio est saepe omnis consectetur dignissimos iusto, accusantium unde eveniet labore necessitatibus laudantium corporis placeat veniam fugit? Cumque recusandae ducimus maxime blanditiis?
Possimus, odit? Velit tempore, libero illum impedit necessitatibus optio cupiditate possimus omnis consequuntur fugiat excepturi nobis vitae fuga animi voluptas amet, porro sint! Itaque, amet natus. Adipisci et deleniti eaque?
Blanditiis ipsum ratione excepturi placeat ab. Placeat culpa maiores perspiciatis ex doloribus, explicabo corporis odio eaque officia quidem repellat enim similique esse distinctio numquam cumque! Aut fuga minus iusto et.
Quo voluptas magni rerum expedita fugit deserunt unde dolor assumenda optio soluta, impedit ipsa culpa minima nesciunt cupiditate est nisi neque aliquid modi consequuntur. Quos soluta illo ipsum cum quasi?
Quibusdam vitae autem aperiam soluta dolores vero, facilis odit dignissimos maxime excepturi provident sed error aliquam maiores placeat libero eum enim commodi ullam nisi. Impedit, suscipit repellendus. Veniam, delectus sit.
Hic, laudantium. Incidunt ratione consequuntur cum nam ullam blanditiis a ex voluptas aliquid sequi eum sed ad officia fugit magni, earum veniam enim rem architecto itaque possimus? Nemo, accusamus similique.
Eum labore sunt iure hic accusamus, eligendi vero saepe quas neque fugiat. Repudiandae voluptates, totam unde, temporibus fugit corrupti cum animi incidunt iure perferendis dicta enim iste laudantium optio quia?";

$paragraphs = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Paragrafi</h1>
    <article>
        <?php foreach ($paragraphs as $paragraph) { ?>
            <p><?php echo $paragraph . '.' ?></p>
        <?php } ?>
    </article>



</body>

</html>