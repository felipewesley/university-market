<?php $cursos = [
    "Engenharia elétrica", 
    "Medicina",
    "Arquitetura",
    "Serviço social",
    "Análise e desenvolvimento de sistemas",
    "Odontologia",
    "Engenharia de software",
    "Administração",
    "Direito",
    "Farmácia",
    "Ciência da computação",
    "Recursos humanos",
    "Engenharia mecânica",
    "Filosofia"
]; ?>

<div class="card-columns">

    <?php for ($index = 0 ; $index < 6 ; $index++) : ?>

        <?php $col = $index%2 ? "" : "p-3"; ?>
        <div class="card card-curso-img <?=$col;?>">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?=$cursos[rand(0,count($cursos)-1)];?></h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
            </div>
        </div>
    <?php endfor; ?>

</div>

<!-- 
    <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
                <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Titleeee</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                This card has supporting text below as a natural lead-in to additional content.
            </p>
            <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
            </p>
        </div>
    </div>
    <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
            <footer class="blockquote-footer text-white">
                <small>
                Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Card tiwwtle</h5>
            <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
    </div>
    <div class="card p-3 text-right">
        <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
                <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>

 -->