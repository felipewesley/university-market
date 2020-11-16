<link rel="stylesheet" href="/content/css/new_post/new-post-style.css">

<section id="section-new-post-form">
<h1 class="h3">
    Nova postagem
</h1>
<small class="form-text text-muted">
    <span class="text-danger">*</span>
    Campos obrigatórios
</small>

<hr>

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="form-group">
                <label for="input-product-name">Nome do produto</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="input-product-name" placeholder="Nome do seu produto">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input-product-type">Tipo do produto</label>
                    <span class="text-danger">*</span>
                    <select id="input-product-type" class="form-control">
                        <option value="0" selected>Selecione o tipo do produto</option>
                        <option value="1">Livro</option>
                        <option value="2">Apostila</option>
                        <option value="3">Componente eletrônico</option>
                        <option value="4">Ferramenta</option>
                        <option value="5">Material para estudo prático</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="input-product-curso">De qual curso?</label>
                    <span class="text-danger">*</span>
                    <select id="input-product-curso" class="form-control">
                        <option value="0" selected>Meu curso</option>
                        <option value="1">Administração</option>
                        <option value="2">Análise e desenvolvimento de sistemas</option>
                        <option value="3">Arquitetura</option>
                        <option value="4">Biologia</option>
                        <option value="5">Ciência da computação</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="input-product-description">Descrição do produto</label>
            <span class="text-danger">*</span>
            <textarea class="form-control" id="input-product-description" placeholder="Informe aqui a descrição do produto, contendo o máximo de detalhes que conseguir, tudo o que julgar ser relevante" required></textarea>
            <small class="form-text text-muted">
                Coloque também <i>palavras-chave</i> e <i>#hashtags</i> para que seu produto seja facilmente encontrado nas pesquisas de outras pessoas.
            </small>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="input-product-delivery">Disponibilidade para entrega</label>
            <span class="text-danger">*</span>
            <select id="input-product-delivery" class="form-control">
                <option value="0" selected>Imediatamente</option>
                <option value="1">De 1 à 2 dias</option>
                <option value="2">Em uma semana</option>
                <option value="3">À combinar</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="input-product-estado">Estado do produto</label>
            <span class="text-danger">*</span>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="input-product-estado">
                        Este produto é
                    </label>
                </div>
                <select class="custom-select" id="input-product-estado">
                    <option value="0" selected>Selecione o estado do produto</option>
                    <option value="1">novo</option>
                    <option value="2">semi-novo</option>
                    <option value="3">usado</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="form-row" id="div-product-payment-conditions">
        <div class="form-group col-md-3">
            <label for="input-product-value-principal">Valor do produto</label>
            <span class="text-danger">*</span>
            <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">R$</span>
                </div>
                <input type="text" class="form-control" id="input-product-value-principal" placeholder="0.00" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="input-product-payment-type">Tipo de pagamento</label>
            <span class="text-danger">*</span>
            <select id="input-product-payment-type" class="form-control">
                <option value="0" selected>À vista</option>
                <option value="1">Parcelado</option>
                <option value="2">Pix</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="input-product-payment-condition">Condição</label>
            <span class="text-danger">*</span>
            <input type="text" class="form-control" id="input-product-payment-condition" placeholder="Até 3x" readonly>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="input-more-payment-method">
            <label class="form-check-label" for="input-more-payment-method">
                Adicionar segunda opção de pagamento
            </label>
        </div>
    </div>
    
    <div class="form-group">
        <label>Foto do produto</label>
        <span class="text-danger">*</span>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Selecione uma imagem...</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Receber notificações quando houver interesses neste produto
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-lg btn-primary">Concluir</button>
</form>