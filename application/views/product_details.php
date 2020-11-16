<link rel="stylesheet" href="/content/css/product_detail/product-detail-style.css">

<section id="section-product-detail">

<h1 class="page-product-title">
    Título do produto anunciado
</h1>

<div class="card">
    <div class="row no-gutters">
        <div class="card-img col-md-4">
            <img src="<?=$product_img_path;?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Título do produto anunciado</h5>
                <p class="card-text">
                    Aqui deverá aparecer a descrição completa do produto cadastrado pelo usuário, inclusive com todas as opções adicionais como cores, tamanhos, tempo de uso ou eventuais defeitos que o produto apresente.
                </p>
                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item">
                        <i class="fas fa-truck text-primary"></i>
                        Frete incluso
                    </li>
                    <li class="list-group-item">Entrega imediata</li>
                    <li class="list-group-item">Semi-novo</li>
                    <li class="list-group-item list-group-item-primary">Cor azul</li>
                </ul>
                <div class="div-product-value">
                    <div class="alert alert-success alert-product-value" role="alert">
                        <p>
                            <span class="h3">R$ <?=rand(10,100);?>,<?=rand(0,9);?>0</span>
                            <small class="text-muted pgto-obs">à vista.</small>
                        </p>
                    </div>
                    ou
                    <div class="alert alert-success alert-product-value" role="alert">
                        <p>
                            3x de 
                            <span class="h3">R$ <?=rand(5,20);?>,<?=rand(0,9);?>0</span>
                            <small class="text-muted pgto-obs">no cartão de crédito.</small>
                        </p>
                    </div>
                </div>
                <p class="card-text">
                    <small class="text-muted">Postado em 16 de novembro de 2020.</small>
                </p>
            </div>
        </div>
    </div>
</div>
</section>