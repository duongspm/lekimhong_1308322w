<div class="menu">
    <div class="wrap-content frame-menu">
        <ul class="d-flex align-items-center justify-content-between">
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition logo-menu" href=""
                    title="<?=trangchu?>">
                    <?=$func->getImage(['class' => '', 'sizes' => '170x170x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </li>

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-item" href=""
                    title="<?=trangchu?>">Trang chủ</a></li>

            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-item" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li>
                <a class="<?php if($com=='san-pham') echo 'active'; ?> transition menu-item" href="san-pham"
                    title="<?=sanpham?>">Menu</a>
                <?php if(count($splist)) { ?>
                <ul>
                    <?php foreach($splist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(!empty($spcat)) { ?>
                        <ul>
                            <?php foreach($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                    href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                <?php if(!empty($spitem)) { ?>
                                <ul>
                                    <?php foreach($spitem as $kitem => $vitem) {
                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc",array($vitem['id'])); ?>
                                    <li>
                                        <a class="has-child transition" title="<?=$vitem['name'.$lang]?>"
                                            href="<?=$vitem[$sluglang]?>"><?=$vitem['name'.$lang]?></a>
                                        <?php if(!empty($spsub)) { ?>
                                        <ul>
                                            <?php foreach($spsub as $ksub => $vsub) { ?>
                                            <li>
                                                <a class="transition" title="<?=$vsub['name'.$lang]?>"
                                                    href="<?=$vsub[$sluglang]?>"><?=$vsub['name'.$lang]?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <a class="has-child <?php if($com=='thu-vien-anh') echo 'active'; ?> transition menu-item"
                    href="thu-vien-anh" title="Hình ảnh">Hình ảnh</a>
            </li>
            <li>
                <a class="has-child <?php if($com=='tin-tuc') echo 'active'; ?> transition menu-item" href="tin-tuc"
                    title="<?=tintuc?>"><?=tintuc?></a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-item" href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>
            <li>
                <div class="icon-menu">
                    <img src="assets/images/icon-menu.png" alt="">
                </div>
            </li>
        </ul>
    </div>
</div>