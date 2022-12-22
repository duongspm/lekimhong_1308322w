<?php if(!empty($about)){?>
<div class="about">
    <div class="img-item04">
        <img src="assets/images/img-item04.png" alt="">
    </div>
    <div class="img-item05">
        <img src="assets/images/img-item05.png" alt="">
    </div>
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left">
                <div class="about__title">
                    <span>
                        Giới thiệu về
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
            </div>
            <div class="about__right">
                <div class="about__right-img">
                    <div class="about__right-img-list">
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0"
                            data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1"
                            data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                            data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                            data-navcontainer=".control-about">
                            <?php foreach ($imgabout as $v) { ?>
                            <div>
                                <div class="about__left-img hover_xam">
                                    <?=$func->getImage(['class' => 'w-100', 'sizes' => '536x572x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="social-about">
                    <?php if(!empty($socialabout)){
                        foreach ($socialabout as $key => $v) {
                    ?>
                    <div class="social__about-item">
                        <a href="<?=$v['link']?>" title="<?=$setting['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'w-100', 'sizes' => '30x30x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- -->
<div class="producnb">
    <div class="wrapper">
        <div class="productnbb">
            <div class="productnb__top">
                <div class="img-line">
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <div class="productnb-logo">
                    <?=$func->getImage(['class' => '', 'sizes' => '128x128x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </div>
                <div class="img-line">
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="productnb__middle">
                <div class="productnb__middle-left">
                    <span>Vườn Lan Garden</span>
                    <span>Không gian thoáng mát</span>
                </div>
                <div class="productnb__middle-right">
                    <div class="slick-tieuchi">
                        <?php if(!empty($tieuchi)) {foreach($tieuchi as $v) {?>
                        <div>
                            <div class="tieuchi-item">
                                <span class="tieuchi-name cut_string1">
                                    <?=$v['name'.$lang]?>
                                </span>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>
            <div class="productnb__buttom">
                <div class="productnb__list">
                    <div class="slick-sanpham">
                        <?php 
                            if(count($productnb) > 0)
                            {
                                foreach($productnb as $v)
                                {
                        ?>
                        <div>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"
                                class="productnb-item text-decoration-none">
                                <div class="productnb-img hover_xam scale-img">
                                    <?=$func->getImage(['class' => '','sizes' => '310x340x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </div>
                                <div class="productnb-content">
                                    <span class="productnb-name">
                                        <?=$v['name'.$lang]?>
                                    </span>

                                    <span class="productnb-price">
                                        <?=$func->formatMoney($v['regular_price'])?>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php   }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="menud">
    <div class="menu-xemthem">
        <a href="san-pham">Xem đầy đủ thực đơn</a>
    </div>
    <div class="wrapper">
        <div class="menudd">
            <div class="img-item07">
                <img src="assets/images/img-item07.png" alt="<?=$setting['name'.$lang]?>">
            </div>
            <div class="background-menu">
                <div class="bg-menu">
                    <?=$func->getImage(['class' => '', 'sizes' => '650x650x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bgmenu['photo'], 'alt' => $setting['name'.$lang]])?>
                </div>
            </div>
            <div class="menud__heading">
                <span>Thực đơn
                    <?=$setting['name'.$lang]?>
                </span>
                <div class="menud__line"></div>
            </div>
            <div class="menu__buttom">
                <div class="img-item06">
                    <img src="assets/images/img-item06.png" alt="">
                </div>
                <div class="menu-list">
                    <div class="menu-list-left">
                        <div class="productnb-list">
                            <?php if (!empty($splistnb[0])) {
                        $sanpham = $d->rawQuery("select name$lang, slugvi, slugen,photo,regular_price, id from #_product where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc",array($splistnb[0]['id'])); 
                        ?>
                            <div class="product__listnb-item">
                                <div class="prolist-right">
                                    <div class="prolist-img">
                                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '60x60x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $splistnb[0]['photo'], 'alt' => $splistnb[0]['name' . $lang] ])?>
                                    </div>
                                    <!--Bắt đầu danh sách sản phẩm c1 nb -->
                                    <div class="prolist__heading font-size-heading">
                                        <span><?=$splistnb[0]['name'.$lang]?></span>
                                    </div>
                                    <!--Kết thúc danh sách sản phẩm c1 nb -->

                                    <div class="danhsachspcap1">
                                        <div class="danhsachcap1-list">
                                            <?php foreach($sanpham as $i) { ?>
                                            <div class="spcap1-item">
                                                <a class="text-decoration-none" href="<?= $i[$sluglang] ?>"
                                                    title="<?= $i['name' . $lang] ?>">
                                                    <span
                                                        class="spcap1-name cut_string1"><?= $i['name' . $lang] ?></span>
                                                    <div class="doc-sp"></div>
                                                    <span class="spcap1-price">
                                                        <?=$func->formatMoney($i['regular_price'])?>
                                                    </span>
                                                </a>
                                            </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hết cấp 1 -->
                            <?php } ?>
                        </div>
                    </div>
                    <div class="menu-list-right">
                        <div class="productnb-list pronb-list01">
                            <?php if (!empty($splistnb[1])) {
                        $sanpham = $d->rawQuery("select name$lang, slugvi, slugen,photo,regular_price, id from #_product where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc",array($splistnb[1]['id'])); 
                        ?>
                            <div class="product__listnb-item">
                                <div class="prolist-right">
                                    <div class="prolist-img">
                                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '60x60x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $splistnb[1]['photo'], 'alt' => $splistnb[1]['name' . $lang] ])?>
                                    </div>
                                    <!--Bắt đầu danh sách sản phẩm c1 nb -->
                                    <div class="prolist__heading font-size-heading">
                                        <span><?=$splistnb[1]['name'.$lang]?></span>
                                    </div>
                                    <!--Kết thúc danh sách sản phẩm c1 nb -->
                                    <div class="danhsachspcap1">
                                        <div class="danhsachcap1-list">
                                            <?php foreach($sanpham as $i) { ?>
                                            <div class="spcap1-item">
                                                <a class="text-decoration-none" href="<?= $i[$sluglang] ?>"
                                                    title="<?= $i['name' . $lang] ?>">
                                                    <h3 class="spcap1-name cut_string1"><?= $i['name' . $lang] ?></h3>
                                                    <span class="spcap1-price">
                                                        <?=$func->formatMoney($i['regular_price'])?>
                                                    </span>
                                                </a>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hết cấp 1 -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="albumd">
    <div class="img-item11">
        <img src="assets/images/img-item08.png" alt="">
    </div>
    <div class="wrapper">
        <div class="albumdd">
            <div class="albumd__heading">
                <span>Thư viện ảnh <?=$setting['name'.$lang]?></span>
            </div>
            <div class="albumd__list">
                <div class="albumd-item-left">
                    <?php if(!empty($thuvienanh[0])){?>
                    <div class="albumd-item">
                        <a class="scale-img effect10" href="<?=$thuvienanh[0][$sluglang]?>"
                            title="<?=$thuvienanh[0]['name'.$lang]?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '310x355x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <div class="albumd-item-left-text">
                        <span>Hương vị của đam mê</span>
                    </div>
                    <?php if(!empty($thuvienanh[3])){?>
                    <div class="albumd-item-child">
                        <a class="scale-img effect10" href="<?=$thuvienanh[3][$sluglang]?>"
                            title="<?=$thuvienanh[3]['name'.$lang]?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '250x260x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <?php if(!empty($thuvienanh[1])){?>
                <div class="albumd-item albumd-item2">
                    <a class="scale-img effect10" href="<?=$thuvienanh[1][$sluglang]?>"
                        title="<?=$thuvienanh[1]['name'.$lang]?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '380x500x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
                <div class="albumd-item-right">
                    <?php if(!empty($thuvienanh[2])){?>
                    <div class="albumd-item albumd-item3">
                        <a class="scale-img effect10" href="<?=$thuvienanh[2][$sluglang]?>"
                            title="<?=$thuvienanh[2]['name'.$lang]?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '310x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[4])){?>
                    <div class="albumd-item-child2">
                        <a class="scale-img effect10" href="<?=$thuvienanh[4][$sluglang]?>"
                            title="<?=$thuvienanh[4]['name'.$lang]?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '250x260x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-fb">
    <div class="avatar2">
        <div class="main_ava"><img src="assets/images/item-fb02.png" alt="coffee"></div>
    </div>
    <div class="img-item10">
        <img src="assets/images/img-item10.png">
    </div>
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
            <div class="feedbackd">
                <div class="feedback__heading">
                    <span>Cảm nhận của khách hàng</span>
                </div>
                <?php if(!empty($feedback)) {?>
                <div class="feedback__list">
                    <div class="slider-nav">
                        <?php foreach($feedback as $v){?>
                        <div class="feedback__item">
                            <div class="feedback__card">
                                <div class="feedback__avt effect10">
                                    <?= $func->getImage(['class' => 'w-100', 'sizes' => '250x250x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                                </div>
                                <div class="feedback__name">
                                    <span>
                                        <?=$v['name'.$lang]?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="slider-for">
                        <?php foreach($feedback as $v){?>
                        <div>
                            <div class="feedback__desc">
                                <span>
                                    "<?=$v['desc'.$lang]?>"
                                </span>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
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