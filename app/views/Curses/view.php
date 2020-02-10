<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <!-- <li><a href="index.html">Home</a></li>
                 <li class="active">Single</li>-->
               <!-- <?/*=$breadcrumbs;*/?>-->
            </ol>
        </div>
    </div>
</div>
<?php if ($category): ?>
    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                <?php foreach ($category as $curse):?>
                     <?php if ($curse->parent_id == 20): ?>
                        <div class="col-md-4 about-left">
                            <figure class="effect-bubba">
                                <img class="img-responsive" src="public/images/<?=$curse->img;?>" alt=""/>
                                <figcaption>
                                    <h2><?=$curse->title;?></h2>
                                    <p><?=$curse->description;?> lol</p>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php endif; ?>