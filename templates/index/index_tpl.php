<?php if(!empty($about)){?>
<div class="about">
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left">

                <div class="scale-img about__left-img hover_xam">
                    <?=$func->getImage(['class' => 'w-100', 'sizes' => '580x440x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about['photo'], 'alt' => $about['name'.$lang]])?>
                </div>
            </div>
            <div class="about__right">
                <div class="about__title">
                    <span>
                        Welcome To!
                    </span>
                </div>
                <div class="about__name">
                    <span>
                        <?=$about['name'.$lang]?>
                    </span>
                </div>
                <div class="about__desc">
                    <?=htmlspecialchars_decode($about['desc'.$lang])?>
                </div>
                <div class="about__btn">
                    <a href="gioi-thieu">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- -->
<div class="producnb pd mr-top">
    <div class="wrapper">
        <div class="productnbb">
            <div class="heading__top">
                <span class="heading__title">Product</span>
                <span class="heading__name">sản phẩm</span>
            </div>

            <div class="productnb__list">

            </div>
        </div>
    </div>
</div>


<div class="video-fb">
    <div class="wrapper">
        <div class="video-fbb">
            <div class="videod">
                <div class="videod-list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:30" data-sm-items="1:30"
                        data-md-items="1:30" data-lg-items="1:30" data-xlg-items="1:30" data-rewind="1"
                        data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php if(!empty($video)) { foreach($video as $k => $v) { ?>
                        <div class="video-frame">
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?= $func->getImage(['class' => 'w-100', 'sizes' => '540x550x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                    <div class="img-item09">
                        <img src="assets/images/img-item09.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                </div>
                <div class="videod-text">
                    <span>
                        <?=$setting['name'.$lang]?> quán cà phê sân vườn Bình Chánh
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- blog -->
<div class="blogg bg">
    <div class="wrapper">
        <div class="blog__heading">
            <span>Tin tức & Sự kiện</span>
        </div>

        <?php if (!empty($blognb)) { ?>
        <div class="blog__listt">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
                data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="0" data-loop="1"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-brand">
                <div class="slideimg">
                    <?php foreach ($blognb as $v) { ?>
                    <a href="<?=$v[$sluglang]?>" class="list-item hover_xam">
                        <?=$func->getImage(['class' => '', 'sizes' => '580x480x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        <div class="blog__name">
                            <span>
                                <?=$v['name'.$lang]?>
                            </span>
                        </div>
                        <div class="content">
                            <p>
                                <?=$v['desc'.$lang]?>
                            </p>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<!-- blog  -->