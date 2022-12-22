<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="content-main w-clear">
    <div class="row danhmucsanpham">
        <div class="col-md-3">
            <!-- danh mục sản phẩm -->
            <div class="danhmucd">
                <div class="danhmucsp">
                    <div class="danhmuc__heading">
                        <span>Menu</span>
                    </div>
                </div>
                <ul class="danhmucd__list">
                    <?php if (!empty($productlist)) { ?>
                    <?php foreach ($productlist as $key => $vl) {
                        $productcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vl['id'])); ?>
                    <li class="title-product-list danhmuc__item">
                        <a class="text-decoration-none a-title-product" data-list="<?= $vl['id'] ?>">
                            <span class="cut_string1 danhmuclist-name"><?= $vl['name' . $lang] ?></span>
                            <span class="danhmuc__line"></span>
                        </a>
                        <?php if (!empty($productcat)) { ?>
                        <ul class="item-child">
                            <?php foreach ($productcat as $kcat => $vcat) {
                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                            <li>
                                <a class="has-child transition " title="<?= $vcat['name' . $lang] ?>"
                                    href="<?= $vcat[$sluglang] ?>">
                                    <span class="cut_string1 danhmuclist-name-child"><?= $vcat['name' . $lang] ?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="col-md-8 listproduct">

            <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
            <div class="item_pro">
                <div class="flip_font">
                    <div class="img_pro">
                        <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '220x320x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </a>
                    </div>
                    <h3 class="pro-name">
                        <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    </h3>
                </div>
                <div class="flip_pro">
                    <div class="info_flip">
                        <h3 class="pro-name">
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                        </h3>
                        <p class="price-product">
                            <?php if($v['discount']) { ?> <span class="price-new">
                                <?=$func->formatMoney($v['sale_price'])?></span>
                            <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                            <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                            <?php } else { ?>
                            <span
                                class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>