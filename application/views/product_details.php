<link rel="stylesheet" href="/content/css/product_detail/product-detail-style.css">

<section id="section-product-detail">

<?php if ($p["search_status"]) : ?>

<h1 class="page-product-title">
    <?=$p['product_name'];?>
</h1>

<div class="card">
    <div class="row no-gutters">
        <div class="card-img col-md-4">
            <img src="<?=$p['product_image_path'];?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <span class="h5 card-title">
                    <?=$p['product_name'];?>
                </span>
                <p class="text-secondary">Cod.: <?=$p['product_id'];?></p>
                <p class="card-text">
                    <?=$p['product_description'];?>
                </p>
                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item">
                        <i class="fas fa-truck text-primary"></i>
                        Frete a combinar
                    </li>
                    <li class="list-group-item">
                        <?=$p['product_delivery_type'];?>
                    </li>
                    <li class="list-group-item">
                        <span aria-value="<?=$p['product_situation'];?>">
                            <?=$p['situation_desc'];?>
                        </span>
                    </li>
                    <!-- <li class="list-group-item list-group-item-primary">Cor azul</li> -->
                </ul>
                <div class="div-product-value">
                    <div class="alert alert-success alert-product-value" role="alert">
                        <p>
                            <?=$p['product_primary_pay_condition'];?>
                            <span class="h3">R$ <?=$p['product_primary_value'];?></span>
                            <small class="text-muted pgto-obs">
                                <?=$p['product_primary_pay_method'];?>
                            </small>
                        </p>
                    </div>
                </div>
                <p class="card-text">
                    <small class="text-muted">
                        Postado em <?=$p['date']['day'];?>/<?=$p['date']['month'];?>/<?=$p['date']['year'];?>, às <?=$p['date']['hour'];?>:<?=$p['date']['minute'];?>.
                        <!-- Postado em 16 de novembro de 2020. -->
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>

<?php else : ?>

<div class="alert alert-danger">
    <strong>Não foi possível encontrar o produto solicitado.</strong>
</div>

<?php endif; ?>
</section>