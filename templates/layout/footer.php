<div class="footer">
    <div class="footer-article">
        <div class="img-item-ft">
            <img src="assets/images/img-item-ftt.png" alt="">
        </div>
        <div class="wrapper">
            <div class="footerr">
                <div class="footer__left">
                    <div class="footer__heading">
                        <span class="footer__title">Thông tin liên hệ</span>
                        <span class="footer__name">
                            <?=$setting['name'.$lang]?>
                        </span>
                    </div>
                    <div class="footer__address">
                        <?= htmlspecialchars_decode($footer['content' . $lang]) ?>
                    </div>
                    <div class="social-footer">
                        <?php if(!empty($social)){
                            foreach($social as $v){?>
                        <div class="social-item">
                            <a href="<?=$v['link']?>">
                                <?=$func->getImage(['class' => '', 'sizes' => '60x60x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                            </a>
                        </div>
                        <?php }}?>
                    </div>
                    <div class="footer-copyright">
                        <span>
                            Copyright © 2022 <?= $setting['name' . $lang] ?>. All Rights Reserved.
                            Designed by Nina.vn

                        </span>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer-fb">
                        <div class="fb-bg hover_xam">
                            <?=$func->getImage(['class' => '', 'sizes' => '245x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $ftfb[0]['photo'], 'alt' => $ftfb[0]['name'.$lang]])?>
                        </div>
                        <div class="fb-link">
                            <a href="<?=$ftfb[0]['link']?>" target="_blank"><?=$ftfb[0]['name'.$lang]?></a>
                        </div>
                    </div>
                    <div class="footer__map">
                        <div class="map-footer">
                            <?= htmlspecialchars_decode($optsetting['coords_iframe']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png.webp', 'alt' => 'Hotline']) ?></i>
</a>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png.webp', 'alt' => 'Zalo']) ?></i>
</a>