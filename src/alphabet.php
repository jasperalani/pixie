<div style="font-size: 2rem;" id="dev">

    <?php

    global $YouTubeVideoURL;


    ## Options
    $items = 1;
    //$items = 10 * $difficulty_[$difficulty];
    $order = 1; // 0 = Descending , 1 = Ascending
    $blocks_per_line = 1;
    $random = false;
    $block_id = 0;
    $YouTubeVideoURL = [false, "yXAKijc1Vmc"];
    $autoplay = 0;


    if (isset($_GET['order'])) {
        switch ($_GET['order']) {
            case 'asc':
                $order = 1;
                break;
            case 'desc':
                $order = 0;
            default:
                $order = 0;
        }
    }



    $blocks = array();
    for ($i = 0; $i < $items; $i++) {
        $blocks[$i] = new block($i + 1);
    }


    /*
     * END PHP
     */

    ?>

</div>

<!--START HTML-->

<body onload="ranColours()">

<div id="page">

    <div id="center-wrapper">

        <?php get_header('Storm the Pixie'); echo getNav(); ?>

        <div class="container">

            <?php

            function devURL($url)
            {
                if ($url[0] === true) {
                    return $url[1];
                } else {
                    $yvid = explode("=", $_POST["yvu1"]);
                    return $yvid[1];
                }
            }

            $b = mt_rand(100000, 999999);


            ?>

            <div class="row white">
                <div class="col-sm block-element">
                    <p class="corner-id"><?= strval($b) ?></p>

                    <div class="top-wrapper">
                        <p>youtube video url</p>
                        <form action="" method="post">
                            <input type="text" name="yvu1">
                            <input type="submit" class="yvu-submit">
                        </form>
                    </div>

                    <?php

                    if (isset($_POST["yvu1"])) {

                        ?>

                        <iframe id="ytplayer" type="text/html" width="640" height="360"
                                src="https://www.youtube.com/embed/<?= devURL($YouTubeVideoURL) ?>?autoplay=<?= $autoplay ?>&amp;" <!-- origin=http://example.com -->
                                                                                                                                   frameborder="0"></iframe>

                        <?php
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