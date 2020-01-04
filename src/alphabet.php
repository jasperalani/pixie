<?php

## Options
$autoplay = 0;
$b = mt_rand(100000, 999999);

?>

    <body onload="ranColours()">

<div id="page">

    <div id="center-wrapper">

        <?php
        getHeader();
        getNav();
        ?>

        <div class="container">

            <div class="row white">
                <div class="col-sm block-element">
                    <p class="corner-id"><?= strval($b) ?></p>

                    <div class="container-title">
                        <p>youtube video url</p>
                        <form action="" method="post">
                            <input type="text" name="yvu1">
                            <input type="submit" class="yvu-submit">
                        </form>
                    </div>

                    <?php

                    if (isset($_POST["yvu1"])) {

                        if ($_POST["yvu1"] != '') {
                            ?>

                            <iframe id="ytplayer" type="text/html" width="640" height="360"
                                    src="https://www.youtube.com/embed/<?= $_POST["yvu1"] ?>?autoplay=<?= $autoplay ?>&amp;" <!-- origin=http://example.com -->
                                                                                                                             frameborder="0"></iframe>

                            <?php
                        }

                    } else {

                        ?>


                        <div class="empty-container"></div>

                        <?php
                    }
                    ?>

                </div>

            </div>

            <?php

            footer();
            ?>

        </div>

    </div>
</div>

<?php
endHTML();