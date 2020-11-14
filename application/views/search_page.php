<!-- Link to CSS of search page -->
<link rel="stylesheet" href="/content/css/search/search-style.css">

<div class="jumbotron">
    <h1 class="display-4">Faça sua pesquisa</h1>
    <p class="lead">
        Busque por diversos materiais disponíveis nesta plataforma, entre eles: <br>

        <p>
            <i class="fa fa-book-open"></i> Livros e apostilas<br>
            <i class="fa fa-sim-card"></i> Componentes de sistemas<br>
            <i class="fa fa-flask"></i> Materiais para estudo prático<br>
            <i class="fa fa-plus-circle"></i> E muitos outros...<br>
        </p>
    </p>
    <hr class="my-4">
    <!-- <p>It uses utility classes for typography.</p> -->
    <div class="input-group-search">
        <div class="div-filters">
            <a class="filters-btn" data-toggle="collapse" href="#collapse-filters-search" role="button" aria-expanded="false" aria-controls="collapse-filters-search">
                <i class="fa fa-filter"></i> Filtros
            </a> |
            <div id="selected-filter">
                <span class="h5 badge badge-primary">Todos os registros</span>
                <span class="badge badge-primary">Curitiba</span>
                <span class="badge badge-primary">Até R$ 150,00</span>
                <span class="badge badge-primary">Medicina</span>
            </div>
        
            <div class="collapse" id="collapse-filters-search">
                <div class="card card-body">
                    <form action="#" id="form-filters">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input-filter-cidade">Cidade</label>
                                <div class="input-group">
                                    <select id="input-filter-cidade" class="form-control">
                                        <option value="%" selected>Todos</option>
                                        <option value="1">Curitiba</option>
                                        <option value="2">Araucária</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">
                                            Aplicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input-filter-curso">Curso</label>
                                <div class="input-group">
                                    <select id="input-filter-curso" class="form-control">
                                        <option value="%" selected>Todos</option>
                                        <option value="1">Administração</option>
                                        <option value="2">Análise e desenvolvimento de sistemas</option>
                                        <option value="3">Arquitetura</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">
                                            Aplicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input-filter-valor">Valor máximo: </label>
                                <span class="badge badge-primary" id="filter-valor-label"></span>
                                <div class="input-group">
                                    <input type="range" class="form-control custom-range" id="input-filter-valor" value="%">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">
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
        <div class="input-group input-group-lg mb-3 input-txt-search" id="input-group-search-lg">
            <input type="text" class="form-control" placeholder="Pesquise aqui" aria-describedby="btn-search-lg" id="input-search-lg">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="btn-search-lg">
                    <i class="fa fa-search"></i> Buscar
                </button>
            </div>
        </div>
        <div class="form-group mb-3" id="input-group-search-sm">
            <input class="form-control form-control-lg input-txt-search" type="text" placeholder="Pesquise aqui" id="input-search-sm">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-search-sm">
                <i class="fa fa-search"></i> Buscar
            </button>
        </div>
    </div>

</div>
<hr class="my-4">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- JavaScript to search page -->
<script src="/content/js/search/search-script.js"></script>
