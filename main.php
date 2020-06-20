<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="main"> 
    <header>
        <nav class="menu wrapper">
            <div class="menu__logo">
                <img src="image/logok.png" alt="logo">
            </div>

            <ul class="menu__links">
                
                <li class="link__personal-area">
                    <?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?>
                        <ul class="area__dropdown-menu">
                            <li><?php echo $_SESSION['login'] ?></li>
                            <span class="horizontal_rule"></span>
                            <li><a href="main.php">Главная</a></li>
                            <li><a href="#">Кабинет</a></li>
                            <li>
                                <form action="exit.php" method="POST" class="menu__exit">
                                    <input type="submit" value="Выход" name="buttonSubmitExit">
                                </form>
                            </li>
                        </ul>
                </li>
            </ul>
        </nav>
    </header>
    <section class="content wrapper">
        <p><?php echo $_SESSION['id']; ?></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi atque architecto perferendis commodi temporibus dolor, explicabo sit enim eos! Inventore maiores molestias doloribus earum sequi harum quidem consequatur nihil itaque! Fugiat sit asperiores, nam pariatur repudiandae porro? Eaque libero at fugiat ex ipsum ad ipsam placeat excepturi dicta doloremque! Doloribus consequatur perferendis soluta totam voluptates impedit assumenda nam, nihil, nisi numquam quod deserunt iusto! Qui non facilis quis perferendis blanditiis modi. Sapiente accusantium eum id aperiam nobis quisquam quaerat possimus iusto, ab delectus velit officia doloribus veritatis quasi vel impedit! Consequuntur dicta neque doloribus necessitatibus aspernatur nulla asperiores repellat laudantium, harum ratione eius. Harum commodi ex animi debitis asperiores, veritatis, nesciunt atque cupiditate vero doloribus unde ad nostrum iste quo ipsam cumque minus! Eos dolor cupiditate necessitatibus culpa animi consequuntur molestias, alias a repudiandae accusantium velit dolorum totam, similique molestiae voluptates illum nesciunt soluta incidunt! Recusandae aut temporibus in vitae neque error voluptate delectus molestias reprehenderit id, fugit, odio repellat dicta? Rem deleniti numquam neque! Itaque in adipisci at nisi nostrum similique reprehenderit eum aliquid expedita voluptatum nam error explicabo libero quam vitae, ad minima possimus eligendi asperiores dolores veritatis deleniti eveniet? Ducimus exercitationem omnis sequi, repudiandae dignissimos est harum saepe delectus impedit sunt veritatis, iusto corrupti, perspiciatis perferendis nostrum. Ratione modi mollitia totam. Incidunt impedit nihil ipsa suscipit, beatae natus architecto cum magni distinctio dolorum repellendus sunt! Odit natus ducimus dolore esse magnam laudantium asperiores ab beatae rem dolorum blanditiis deleniti dignissimos quod similique omnis earum consectetur doloremque eos eveniet nesciunt dolorem voluptas itaque, praesentium provident! Asperiores, autem deserunt dolores expedita obcaecati, a sit eos excepturi nihil doloribus cumque ab molestias optio quo repellat aliquam nam non veniam unde natus. Voluptas culpa quo quos iure autem id dignissimos. Dolorem consequatur explicabo quam ducimus obcaecati quod quis minus. Magni quia cumque odio soluta repellendus saepe ut exercitationem molestias minus aliquid consectetur, excepturi deserunt sunt vero ullam eaque eos, hic recusandae laboriosam. Nihil error ab pariatur quia ad fugit culpa dolor, mollitia cumque praesentium ut itaque, quasi officiis dolore quaerat deserunt expedita rerum repudiandae facere eligendi velit? Temporibus quo distinctio omnis! Rerum alias illum sequi aperiam qui quaerat, id fuga, rem praesentium voluptates veritatis corporis reprehenderit quisquam deserunt? Tempora, error, minima delectus non culpa magni dicta deserunt blanditiis mollitia, atque suscipit ea hic nihil assumenda? Beatae tenetur voluptatum sint unde corporis, culpa vel minima saepe. Cupiditate ea voluptate perferendis, adipisci unde numquam rem neque corporis explicabo eos cum voluptatum quam officia, culpa, laborum vel. Saepe dolores, porro non earum tempore expedita aspernatur atque at labore harum iusto a est aut. Officiis, harum deleniti, culpa eum doloribus placeat deserunt quo expedita veniam, laudantium sit cum fuga dolores est quod fugit nostrum maiores. Sapiente a numquam, consequuntur voluptate odit vero iste explicabo dolorum veniam debitis odio laboriosam quo voluptates soluta tempore totam id voluptatum nihil magnam ipsam animi ut maxime voluptas sit! Possimus molestias, sint minus, veritatis ipsa adipisci consectetur consequuntur voluptates nesciunt libero corrupti eos nemo a sapiente dolore exercitationem vero?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nemo non id animi ex placeat ducimus debitis exercitationem, consectetur aspernatur error fugiat. Eos porro facere odit soluta tempora laboriosam? Cupiditate itaque nam fuga dolore neque repellendus ut, exercitationem sed quidem! Nobis sint laudantium saepe fugiat cumque optio natus atque, consequatur unde exercitationem voluptate id praesentium voluptas corporis, quidem vitae similique accusamus maxime. Nostrum voluptatibus cum dolores veniam iusto accusamus consequatur eaque? Velit quia nostrum, accusantium laudantium ex tempore vel at quae nam aspernatur possimus blanditiis quasi pariatur labore aliquid eveniet libero hic sunt? Nobis nesciunt laboriosam, reiciendis sapiente quibusdam voluptates laudantium sequi sunt odit vel ad porro magnam veniam incidunt officiis, hic voluptas quo, ut neque atque. Non quis tenetur, ratione maxime distinctio eaque in mollitia consectetur ea ipsam libero. Suscipit nobis laborum eum, placeat praesentium quas itaque, reprehenderit distinctio esse tenetur harum. Possimus quidem odio, magnam maiores impedit natus aliquam quod quia odit laudantium eum incidunt eius et repellendus a nobis corporis nesciunt architecto officiis. Deserunt odit maxime totam beatae itaque quam. Molestiae enim perferendis, maxime distinctio praesentium animi exercitationem veritatis! Sapiente quos velit explicabo, distinctio dolorem amet nemo mollitia reiciendis, ratione in esse porro ipsa? Ducimus repellendus quia deserunt ab commodi aliquam eligendi placeat saepe, assumenda quam dolore porro tempore error, voluptatibus eveniet eius vitae doloribus optio nesciunt corrupti amet aliquid inventore laboriosam iste. Labore expedita modi tempore delectus, eligendi provident quisquam cumque, cupiditate exercitationem hic, vel nihil maiores possimus neque alias pariatur itaque recusandae dicta molestias sunt fugit consectetur quibusdam at in! Neque, molestias quam impedit voluptatem harum dignissimos quisquam? Odio laborum doloremque excepturi nam ea distinctio error, aut illum ex, autem possimus numquam quis iste tenetur alias quos vero non pariatur? Nemo, eum vel! Molestiae iure sint dicta harum quibusdam, consequatur tempora corporis obcaecati ab sapiente voluptatem cumque, maiores qui ad, aliquam ut tenetur dignissimos magnam facere odit enim nam labore. Ex in voluptas natus nobis sint numquam, dolore earum, iure fugit consectetur, atque architecto id doloremque! Praesentium sunt consequatur itaque eum ut iusto autem odio repellat temporibus quae saepe amet necessitatibus dolor tenetur, tempore doloribus labore blanditiis reiciendis aliquid dolores animi natus laboriosam dolorem fugit. Amet aliquid blanditiis quia nesciunt laboriosam officia enim accusamus asperiores sed doloribus velit atque dolorem voluptate itaque nemo possimus esse, cumque porro sit quibusdam magnam aliquam. Voluptatibus aliquid optio soluta harum delectus maiores doloremque error, eveniet totam rem modi magnam doloribus assumenda sequi atque necessitatibus, quod, odio fugit sit? Quisquam fugiat repudiandae adipisci porro alias, excepturi quidem eos error rem. Reprehenderit maxime aliquid tenetur sapiente nam sit non assumenda, vel omnis repellendus minus, praesentium quasi rem a exercitationem. Accusamus quod inventore nihil! Vitae dolorum eius ut molestias delectus harum facere nihil. Corporis repellat eos praesentium reprehenderit! Libero voluptas consequuntur vero, deleniti, magnam ab est enim esse perferendis, facere quod. Doloremque ipsam exercitationem autem repudiandae magni quam nemo accusamus placeat ipsum soluta, sed magnam nisi, odio, repellat quos laboriosam! Consequuntur ab, tenetur voluptatibus ullam alias praesentium. Nesciunt tenetur ratione perferendis quaerat.</p>
    </section>

    <script src="script/dropdown_menu.js"></script>
</body>
</html>