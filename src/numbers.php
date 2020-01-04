<div style="font-size: 2rem;" id="dev">

    <?php


    /*
     * GLOBALS
     */

    global $difficulty;
    global $YouTubeVideoURL;

    /*
     *  GET
     */

    $difficulty = $_GET['diff'] ? $_GET['diff'] : 'easy';

    $difficulty_ = [
        'easy' => 2,
        'medium' => 5,
        'hard' => 10
    ];


    ## Options
    $items = 10;
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

    ?>

</div>

<!--START HTML-->

<body onload="ranColours()">

<div id="page">

    <a id="restart" href="?diffsel">restart</a>

    <div id="sidebar" style="">
        <p class="hcp" onclick="asc()">asc</p>
        <p class="hcp" onclick="desc()">desc</p>
    </div>

    <div id="center-wrapper">

        <?php get_header('Storm the Pixie'); echo getNav(); ?>

        <div class="container">



                <?php

                $rowCount = 0;

                for ($i = 0; $i < sizeof($blocks); $i++) {
                    $NewBlocks[$i] = $blocks[sizeof($blocks) - $i - 1];
                }

                function devURL($url)
                {
                    if ($url[0] === true) {
                        return $url[1];
                    } else {
                        $yvid = explode("=", $_POST["yvu1"]);
                        return $yvid[1];
                    }
                }

                foreach ($blocks as $key => $block) {
                    if ($order == 0) {
                        $y = $random ? rand($NewBlocks[$key]->content, $NewBlocks[$key]->content * -$key) : $NewBlocks[$key]->content;
                    } else {
                        $y = $random ? rand($block->content, $block->content * $key) : $block->content;
                    }

                    $b = mt_rand(100000, 999999);


                    ?>

            <div class="row white">
                    <div class="col-sm block-element">
                        <p class="corner-id"><?= strval($b) ?></p>

                        <div class="top-wrapper">
                            <p>youtube video url</p>
                            <form action="" method="post">
                                <input type="text" name="yvu<?= $key + 1 ?>">
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

                    <?php

                    $rowCount++;
                    if ($rowCount % $blocks_per_line == 0) {
                        echo '</div><div class="row">';
                    }

                }
                ?>

            </div>

            <?php

            footer();
            ?>

        </div>

    </div>
</div>
<?php
endHTML();