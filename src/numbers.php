<div style="font-size: 2rem;" id="dev">

    <?php


    global $difficulty;

    $difficulty = $_GET['diff'] ? $_GET['diff'] : 'easy';

    $difficulty_ = [
        'easy' => 5,
        'medium' => 10,
        'hard' => 20
    ];


    ## Options
    //$items = 3;
    $items = $difficulty_[$difficulty];
    $order = 1; // 0 = Descending , 1 = Ascending
    $blocks_per_line = 5;
    $random = false;
    $block_id = 0;

    if(isset($_GET['plus'])){
        if($_GET['plus'] !== ''){
            $items = $items + intval($_GET['plus']);
        }
    }

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

<div id="page">

    <a id="restart" href="?diffsel">restart</a>

    <div id="sidebar" style="">
        <p class="hcp" onclick="asc()">asc</p>
        <p class="hcp" onclick="desc()">desc</p>
    </div>

    <div id="center-wrapper">

        <?php
        getHeader();
        getNav();
        $win = rand(1, sizeof($blocks));
        ?>

        <div class="container">
            <div class="row">

                <?php

                $rowCount = 0;

                for ($i = 0; $i < sizeof($blocks); $i++) {
                    $NewBlocks[$i] = $blocks[sizeof($blocks) - $i - 1];
                }

                foreach ($blocks

                         as $key => $block) {
                    if ($order == 0) {
                        $y = $random ? rand($NewBlocks[$key]->content, $NewBlocks[$key]->content * -$key) : $NewBlocks[$key]->content;
                    } else {
                        $y = $random ? rand($block->content, $block->content * $key) : $block->content;
                    }

                    ?>

                    <div class="col-sm block-element">
                        <?php
                        if($win == $key+1){
                            $string = '';
                            $c = 0;
                            foreach($_GET as $gkey => $get){
                                $c++;
                                if($c > 1){
                                    $string .= "&";
                                }
                                $string .= $gkey;

                                if($gkey == 'plus'){
                                    if($get !== 'undefined'){
                                        $old = intval($get);
                                        $new = $old+5;
                                        $get = strval($new);
                                    }else{
                                        $get = '5';
                                    }
                                }

                                if($get != ''){
                                    $string .= "=" . $get;
                                }

                            }
                            echo '<a href="?' . $string . '" id="win">';
                        }
                        ?>

                        <!-- <p class="corner-id">--><?//= strval(mt_rand(100000, 999999)) ?><!-- </p> -->
                        <p class="corner-id"><?= $y ?></p>

                        <?php
                        if($win == $key+1){
                            echo '</a>';
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