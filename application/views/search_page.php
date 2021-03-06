<!-- Link to CSS of search page -->
<link rel="stylesheet" href="/content/css/search/search-style.css">

<div class="jumbotron bg-transparent">
    <h1 class="display-4" id="faca-sua-pesquisa">Faça sua pesquisa</h1> <hr>
    <p class="lead">
        Busque por diversos materiais disponíveis nesta plataforma, entre eles: <br>

        <p>
            <i class="fa fa-book-open"></i> Livros e apostilas<br>
            <i class="fa fa-sim-card"></i> Componentes de sistemas<br>
            <i class="fa fa-flask"></i> Materiais para estudo prático<br>
            <i class="fa fa-plus-circle"></i> E muitos outros...<br>
        </p>
    </p>
    <hr class="my-4" id="search-divisor">
    <div class="input-group-search">
        <div class="div-filters">
            <a class="filters-btn" data-toggle="collapse" href="#collapse-filters-search" role="button" aria-expanded="false" aria-controls="collapse-filters-search">
                <i class="fa fa-filter"></i> Filtros
            </a> |
            <div id="selected-filter">
                <span class="badge badge-primary">Todos os registros</span>
                <span class="badge badge-primary" aria-value="%" id="filter-input-filter-valor">Todos os valores</span>
            </div>
        
            <div class="collapse" id="collapse-filters-search">
                <div class="card card-body">
                    <form id="form-filters">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input-filter-cidade">Cidade</label>
                                <div class="input-group">
                                    <select id="input-filter-cidade" class="form-control">
                                        <option value="%" aria-label="Todas as cidades" selected>Todos</option>
                                        <option value="1" aria-label="Curitiba">Curitiba</option>
                                        <option value="2" aria-label="Araucária">Araucária</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" aria-value="filter-apply" data-target="input-filter-cidade" type="button">
                                            Aplicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input-filter-curso">Curso</label>
                                <div class="input-group">
                                    <select id="input-filter-curso" class="form-control">
                                        <option aria-label="Todas os cursos" value="%" selected>Todos</option>
                                        <option aria-label="Administração" value="1">Administração</option>
                                        <option aria-label="Análise e desenvolvimento de sistemas" value="2">Análise e desenvolvimento de sistemas</option>
                                        <option aria-label="Arquitetura" value="3">Arquitetura</option>
                                    </select>
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-primary" aria-value="filter-apply" data-target="input-filter-curso" type="button">
                                            Aplicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input-filter-valor">Valor máximo: </label>
                                <span class="badge badge-primary" id="filter-valor-label"></span>
                                <span class="badge badge-success" id="filter-valor-qualquer-valor">Qualquer valor</span>
                                <div class="input-group">
                                    <input type="range" class="form-control custom-range" id="input-filter-valor" value="%">
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-primary" aria-value="filter-apply" data-target="input-filter-valor" type="button">
                                            Aplicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <form action="/search/results#search-divisor" id="form-search" method="get">
            <div class="form-group mb-3" id="input-group-search-lg">
                <div class="input-group input-group-lg mb-3 input-txt-search">
                    <input type="text" class="form-control" name="q" placeholder="Pesquise aqui" aria-describedby="btn-search-lg" id="input-search-lg">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="flag" value="true" type="submit" id="btn-search-lg">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
                <small class="form-text text-muted search-small-obs">
                    Procure também por palavras-chave, <i>#hashtags</i> e outros termos mais específicos para filtrar melhor a sua pesquisa.
                </small>
            </div>
            <div class="form-group mb-3" id="input-group-search-sm">
                <input class="form-control form-control-lg input-txt-search" name="q" type="text" placeholder="Pesquise aqui" id="input-search-sm">
                <small class="form-text text-muted">
                    Procure também por palavras-chave, <i>#hashtags</i> e outros termos mais específicos para filtrar melhor a sua pesquisa.
                </small>
                <button type="submit" name="flag" value="true" class="btn btn-primary btn-lg btn-block" id="btn-search-sm">
                    <i class="fa fa-search"></i> Buscar
                </button>
            </div>
        </form>
    </div>

    
    <?php if (is_null($filters['search'])) : ?>
    
        <div class="alert alert-warning">
            <strong>Ops!</strong> Tivemos um problema com a sua pesquisa. 
            <strong>Mas você pode tentar novamente em instantes :)</strong>
            <a id="filter-problem-report">
                <span class="badge badge-primary">Reportar este problema</span>
            </a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-success">
            Exibindo resultados relevantes para você.
        </div>

    <?php elseif ($filters['search']) : ?>

        <p>
            Filtros aplicados:
            <?php foreach ($filters['filters'] as $key => $value) : ?>
                <span class="badge badge-primary" aria-value="<?=$value['value'];?>">
                    <?=$value['label'];?>
                </span>
            <?php endforeach; ?>
        </p>

        <div class="alert alert-success">
            Exibindo resultados para "<strong><?=$filters['content'];?></strong>".
            <small class="form-text text-muted">
                Aproximadamente <?=count($results);?> resultado(s) encontrado(s).
            </small>
        </div>

        <?php if (count($results) == 0) : ?>

            <div class="alert alert-warning">
                Infelizmente a sua pesquisa não retornou nenhum resultado <b>:(</b>
                Mas você pode tentar novamente agora mesmo!
                <small class="form-text text-muted">
                    Tente <b>palavras-chave</b>, <b><i>#hashtags</i></b> ou <b>novos filtros</b> de busca <b>:)</b>
                </small>
            </div>

        <?php else : ?>

            <div class="card-deck">

                <?php foreach($results as $result) : ?>

                    <div class="card" style="width: 18rem;">
                        <img src="/content/images/layout/products/<?=$result->product_image_path;?>.<?=$result->product_image_extension;?>" class="card-img-top img-prod-carousel" alt="image not found">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?=$result->product_name;?>
                            </h5>
                            <p class="card-text">
                                <?=substr($result->product_description, 0, 75)."...";?>
                            </p>
                            <?php foreach (explode(";",$result->product_hashtags) as $hashtag) : ?>
                                <?php $color = stripos($filters['content'], $hashtag) !== false ? "success" : "secondary";?>
                                <span class="badge badge-<?=$color;?>">
                                    #<?=$hashtag;?>
                                </span>
                            <?php endforeach; ?>
                            <div class="alert alert-success text-center">
                                <strong>
                                    R$ <?=number_format($result->product_value, 2, ",", ".");?>
                                </strong>
                            </div>
                            <a href="/product/getProduct/<?=$result->product_id;?>" class="btn btn-block btn-primary">Ver produto</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            
            </div>

        <?php endif; ?>


    <?php else : ?>

        <div class="alert alert-success">
            Exibindo os resultados mais relevantes pra você.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php endif; ?>

</div>
<hr class="my-4">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- JavaScript to search page -->
<script src="/content/js/search/search-script.js"></script>
<script src="/content/js/search/error-report.js"></script>