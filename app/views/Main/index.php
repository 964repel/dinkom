<!--banner-starts-->
<div class="row">

<?php if ($news): ?>

<div class="bnr" id="home" style="background-color: #e8edf2; border: 1px solid #91b1d6; border-radius: 5px; margin: 20px">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
             <?php foreach ($news as $new):?>
            <li>

                <img src="public/images/photo/<?=$new->img1;?>" alt="" style="max-width: 500px; margin: 30px; border:2px solid #D2D6D9;box-shadow:3px 2px 5px rgba(219,87,74,0.83),-6px 7px 7px rgba(199,219,134,0.89)"/>

    <div class="col-md-6">
                 <h3><?=$new->title;?></h3>
        <p style="font-size: 20px"><?=$new->text;?></p>
    </div>
            </li>
             <?php endforeach; ?>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>

<?php endif; ?>
</div>
<!--banner-ends-->

<!--about-starts-->
<?php /*if ($category): */?><!--
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <?php /*foreach ($category as $curse):*/?>
            <?php /*if ($curse->parent_id == 20): */?>
                <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="public/images/<?/*=$curse->img;*/?>" alt=""/>
                    <figcaption>
                        <h2><?/*=$curse->title;*/?></h2>
                        <p><?/*=$curse->description;*/?> lol</p>
                    </figcaption>
                </figure>
            </div>
                <?php /*endif; */?>
            <?php /*endforeach; */?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
--><?php /*endif; */?>
<!--about-end-->
<!--product-starts-->
<?php if ($hitEvents): ?>
<?php $studlvl = \dinkom\App::$app->getProperty('studyLevel');?>
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
                <?php foreach ($hitEvents as $hitEvent):?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="events/<?=$hitEvent->alias;?>" class="mask"><img class="img-responsive zoom-img" src="public/images/<?=$hitEvent->img;?>" alt="" /></a>
                        <div class="product-bottom">
                            <h5><?=$hitEvent->title;?></h5>
                            <p>Подробнее</p>
                            <h5><a class="add-to-cart-link" href="cart/add?id=<?=$hitEvent->id;?>"><i></i></a> <span class=" item_price"><?=$hitEvent->date;?></span></h5>
                        </div>
                        <div class="srch">
                            <span><?php if($hitEvent->price == 0):?>
                            Бесплатно
                                <?php else: ?>
                                <?=$hitEvent->price?>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>
<?php endif; ?>
<!--product-end-->
