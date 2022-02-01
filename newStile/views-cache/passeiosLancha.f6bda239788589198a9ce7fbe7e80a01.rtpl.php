<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="lanchaInfo container">
    <h3>Passeio de Lancha</h3>
    <div class="row">
        <div class="foto col-md-6">
            <img src="res/img/topo-lancha.svg" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h4>UMA EXPERIÊNCIA INCRÍVEL, COM CONFORTO E SEGURANÇA!</h4>
            <p>Capitólio está entre os destinos mais procurados do cenário nacional. Suas belezas naturais, a
                hospitalidade de seu povo justificam tal fato.</p>
            <p>No passeio de lancha você conhece os principais atrativos do Mar de Minas com pessoas que conhecem a
                região e farão de sua experiência inesquecível!</p>
        </div>
    </div>
</section>


<section class="cards-resumo container">
    <div class="infoCard">
        <img src="res/img/icons/iate.svg" alt="">
        <div class="texto">
            <h6>Tipo de Passeio</h6>
            <p>Trabalhamos com passeios
                exclusivos e compartilhados.</p>
        </div>
    </div>

    <div class="infoCard centro">
        <img src="res/img/icons/wall-clock.svg" alt="">
        <div class="texto">
            <h6>Duração</h6>
            <p>Trabalhamos com passeios de até 7 horas.</p>
        </div>
    </div>

    <div class="infoCard">
        <img src="res/img/icons/boia-salva-vidas.svg" alt="">
        <div class="texto">
            <h6>Segurança</h6>
            <p>Todos nossos pilotos são
                habilitados e nossas embarcações
                revisadas e com EPIs.</p>
        </div>
    </div>
</section>


<section class="embarcacoesDisponiveis">
    <div class="container">
        <h3>EMBARCAÇÕES DISPONÍVEIS</h3>
        <div class="row">
            <?php $counter1=-1;  if( isset($lanchas) && ( is_array($lanchas) || $lanchas instanceof Traversable ) && sizeof($lanchas) ) foreach( $lanchas as $key1 => $value1 ){ $counter1++; ?>
            <div class="col-md-3">
                <div class="cartao">
                    <img src="res/img/lanchas/124698985_394652391686945_4802925598681706917_n.svg" alt="">
                    <div class="corpo">
                        <h5><?php echo htmlspecialchars( $value1["txtNome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                        <p><?php echo htmlspecialchars( $value1["txtDescricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        <div class="botao">
                            <a href="/passeiosLancha/<?php echo htmlspecialchars( $value1["idPasseioLancha"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button>+</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<section class="atrativos desktop">
    <div class="container">
        <h3>Nossos principais atrativos</h3>
        <div class="row">
            <div class="col-md-3 fotoAtrativo">
                <img src="res/img/atrativos/canyons.svg" class="img-fluid" alt="">
                <div class="rodape">
                    <p>Canyons</p>
                </div>
            </div>
            <div class="col-md-3 fotoAtrativo par">
                <img src="res/img/atrativos/canyons.svg" class="img-fluid" alt="">
                <div class="rodape">
                    <p>Canyons</p>
                </div>
            </div>
            <div class="col-md-3 fotoAtrativo">
                <img src="res/img/atrativos/canyons.svg" class="img-fluid" alt="">
                <div class="rodape">
                    <p>Canyons</p>
                </div>
            </div>
            <div class="col-md-3 fotoAtrativo par">
                <img src="res/img/atrativos/canyons.svg" class="img-fluid" alt="">
                <div class="rodape">
                    <p>Canyons</p>
                </div>
            </div>
            <div class="botao d-flex justify-content-center">
                <a href="" class=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
            </div>

        </div>
    </div>
</section>


<section class="atrativos mobile">
    <div class="container">
        <h3>Nossos principais atrativos</h3>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="fotoAtrativo">
                        <img src="res/img/atrativos/canyons.svg" class="img-fluid" alt="">
                        <div class="rodape">
                            <p>Canyons</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row">


            <div class="botao d-flex justify-content-center">
                <a href="" class=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
            </div>

        </div>
    </div>
</section>

<section class="fotos">
    <img src="res/img/galeria/121263432_416493243085679_3391124796635175965_n.svg" alt="">
    <img src="res/img/galeria/120601557_344691179920816_3124316108238947686_n.svg" alt="">
    <img src="res/img/galeria/121263432_416493243085679_3391124796635175965_n.svg" alt="">
    <img src="res/img/galeria/120601557_344691179920816_3124316108238947686_n.svg" alt="">
    <img src="res/img/galeria/120601557_344691179920816_3124316108238947686_n.svg" alt="">
    <img src="res/img/galeria/121263432_416493243085679_3391124796635175965_n.svg" alt="">
    <img src="res/img/galeria/120601557_344691179920816_3124316108238947686_n.svg" alt="">
    <img src="res/img/galeria/121263432_416493243085679_3391124796635175965_n.svg" alt="">
</section>