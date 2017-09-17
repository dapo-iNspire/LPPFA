<?php /* Template Name: Benefits */ ?>

<?php

/**
 * @param $aKey
 * @param $bKey
 * @return string
 */
function getId($aKey, $bKey)
{
    $id = "$aKey-$bKey";
    if ($aKey == 0) {
        switch ($bKey) {
            case 0:
                $id = "gen-app";
                break;
            case 1:
                $id = "prog-wd";
                break;
            case 2:
                $id = "annt";
                break;
        }
    } elseif ($aKey == 1) {
        switch ($bKey) {
            case 0:
                $id = "man-ret";
                break;
            case 1:
                $id = "temp-ret";
                break;
            case 2:
                $id = "med-grnd";
                break;
            case 3:
                $id = "dth-ben";
                break;
            case 4:
                $id = "frgn";
                break;
        }
    } elseif ($aKey == 2) {
        switch ($bKey) {
            case 0:
                $id = "l-sum";
                break;
            case 1:
                $id = "enbloc";
                break;
            case 2:
                $id = "med-grnd2";
                break;
            case 3:
                $id = "dth-ben2";
                break;
            case 4:
                $id = "frgn2";
                break;
            case 5:
                $id = "nst2";
                break;
            case 6:
                $id = "leg-app";
                break;
            case 7:
                $id = "avc-app";
                break;
        }
    }
    return $id;
}

$banner_image = get_field("banner_image");
$banner_title = get_field("banner_title");
$banner_content = get_field("banner_content");
$benefits = get_field("benefits");

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 benefits-bg" style="background-image: url(<?= $banner_image['url'] ?>)">
            <div class="bg-txt">
                <h1 class="hidden-md-down"><?= $banner_title ?></h1>
                <h2 class="hidden-lg-up"><?= $banner_title ?></h2>
                <?= $banner_content ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 benefits-tab">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="benefitsTab" role="tablist">
                <?php foreach($benefits as $aKey => $benefit): ?>
                <li class="nav-item">
                    <a class="nav-link <?= $aKey == 0 ? "active": "" ?>" data-toggle="tab" href="#<?= $benefit['title_image']['title'] ?>" role="tab">
                        <img src="<?= $benefit['title_image']['url'] ?>"/>
                        <?= $benefit['title'] ?>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
            <form class="hidden-md-up mx-auto">
                <div class="form-group text-center">
                    <select class="form-control" id="m-benefitsTab" data-aos="fade">
                        <?php foreach ($benefits as $benefit): ?>
                            <optgroup label="<?= $benefit['title'] ?>">
                                <?php foreach ($benefit['sub_benefits'] as $bKey => $sub_benefit) { ?>
                                    <option value="<?= $bKey ?>">
                                        <?= $sub_benefit['title'] ?>
                                    </option>
                                <?php } ?>
                            </optgroup>
                        <?php endforeach ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tab-content">
        <?php
        foreach ($benefits as $aKey => $benefit): ?>
            <div class="tab-pane fade show <?= $aKey == 0 ? "active": "" ?> col-12" role="tabpanel" id="<?= $benefit['title_image']['title'] ?>">
                <div class="row hidden-sm-down">
                    <div class="col-12 text-center">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <?php
                            foreach ($benefit['sub_benefits'] as $bKey => $sub_benefit) {
                                $id = getId($aKey, $bKey);
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= $bKey == 0 ? "active": "" ?>" data-toggle="tab" href="#<?= $id ?>" role="tab">
                                        <?= $sub_benefit['title'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-content row">
                    <div class="col-md-3 text-center">
                        <img class="v-align" src="<?= $benefit['content_image']['url'] ?>" alt="retirement tips">
                    </div>
                    <?php
                    foreach ($benefit['sub_benefits'] as $bKey => $sub_benefit) {
                        $id = getId($aKey, $bKey);
                        ?>
                        <div class="tab-pane fade <?= $bKey == 0 ? "show active": "" ?> col-md-9" id="<?= $id ?>" role="tabpanel">
                            <?= $sub_benefit['content'] ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php get_footer(); ?>

<script>
    $(document).ready(function() {
        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#benefitsTab a[href="' + window.location.hash + '"]').tab('show'); // Select tab by name if provided in location hash

        $('#benefitsTab a[data-toggle="tab"]').on('shown.bs.tab', function () {
            $('body,html').animate({
                scrollTop: 480
            }, 800);
        });

        $(".dropdown-menu.bnf a:first-child").click(function(){
            $('a[href="#ab-ret"]').tab('show');
        });

        $(".dropdown-menu.bnf a:nth-child(2)").click(function(){
            $('a[href="#pay-grnd"]').tab('show');
        });

        $(".dropdown-menu.bnf a:nth-child(3)").click(function(){
            $('a[href="#pay-type"]').tab('show');
        });

        $("#m-benefitsTab").change(function () {
            var i = $(this).val();

            if (i == 0) {
                $('a[href="#ab-ret"]').tab('show');
                $('a[href="#gen-app"]').tab('show');
            } else if (i == 1) {
                $('a[href="#ab-ret"]').tab('show');
                $('a[href="#prog-wd"]').tab('show');
            } else if (i == 2) {
                $('a[href="#ab-ret"]').tab('show');
                $('a[href="#annt"]').tab('show');
            } else if (i == 3) {
                $('a[href="#pay-grnd"]').tab('show');
                $('a[href="#man-ret"]').tab('show');
            } else if (i == 4) {
                $('a[href="#pay-grnd"]').tab('show');
                $('a[href="#temp-ret"]').tab('show');
            } else if (i == 5) {
                $('a[href="#pay-grnd"]').tab('show');
                $('a[href="#med-grnd"]').tab('show');
            } else if (i == 6) {
                $('a[href="#pay-grnd"]').tab('show');
                $('a[href="#dth-ben"]').tab('show');
            } else if (i == 7) {
                $('a[href="#pay-grnd"]').tab('show');
                $('a[href="#frgn"]').tab('show');
            } else if (i == 8) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#l-sum"]').tab('show');
            }else if (i == 9) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#enbloc"]').tab('show');
            } else if (i == 10) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#med-grnd2"]').tab('show');
            } else if (i == 11) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#dth-ben2"]').tab('show');
            } else if (i == 12) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#frgn2"]').tab('show');
            } else if (i == 13) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#nst2"]').tab('show');
            } else if (i == 14) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#leg-app"]').tab('show');
            } else if (i == 15) {
                $('a[href="#pay-type"]').tab('show');
                $('a[href="#avc-app"]').tab('show');
            }
        });
    });
</script>

</body>
</html>