<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="inicialLanchaInfo container">
    <div class="row">
        <div class="col-md-6">
            <img src="/res/img/lanchas/124698985_394652391686945_4802925598681706917_n.svg" alt="">
        </div>
        <div class="col-md-6">
            <h4><?php echo htmlspecialchars( $lancha["txtNome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
            <p><?php echo htmlspecialchars( $lancha["txtDescricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
            <ul>
                <li><i class="fas fa-user"></i> Até <?php echo htmlspecialchars( $lancha["intLotacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?> pessoas</li>
                <li><i class="far fa-clock"></i> Até <?php echo htmlspecialchars( $lancha["intDuracao"], ENT_COMPAT, 'UTF-8', FALSE ); ?> horas</li>
                <li><i class="far fa-life-ring"></i> Equipada com equipamentos de segurança</li>
            </ul>
            <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
        </div>
    </div>
</section>

<section class="roteiros container desktop">
    <div class="roteiro">
        <div class="cabecalho">
            <p>Roteiro 1</p>
        </div>
        <div class="corpo r1">
            <p>lorefg dh xv sgsghsdfh dfgsdf gsdfgddf hgdfdfhsdfh g hfgsf dfshdhdfs gdfgdfg ndf f dsgdf dfs d ndsjjsjsj
                bj j jbjksb sbh ddghdfh dfgh gh sdghghjdffg jff jfghgfjghjfjgj f
            </p>
            <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
        </div>
    </div>
    <div class="roteiro">
        <div class="cabecalho">
            <p>Roteiro 2</p>
        </div>
        <div class="corpo r2">
            <p>lorefg dh xv sgsghsdfh dfgsdf gsdfgddf hgdfdfhsdfh g hfgsf dfshdhdfs gdfgdfg ndf f dsgdf dfs d ndsjjsjsj
                bj j jbjksb sbh ddghdfh dfgh gh sdghghjdffg jff jfghgfjghjfjgj f
            </p>
            <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
        </div>
    </div>
    <div class="roteiro">
        <div class="cabecalho">
            <p>Roteiro 3</p>
        </div>
        <div class="corpo r3">
            <p>lorefg dh xv sgsghsdfh dfgsdf gsdfgddf hgdfdfhsdfh g hfgsf dfshdhdfs gdfgdfg ndf f dsgdf dfs d ndsjjsjsj
                bj j jbjksb sbh ddghdfh dfgh gh sdghghjdffg jff jfghgfjghjfjgj f
            </p>
            <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
        </div>
    </div>
</section>



<div class="mobile">
    <section class="mobile roteiros">
        <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="roteiro">
                            <div class="cabecalho">
                                <p>Roteiro 2</p>
                            </div>
                            <div class="corpo r1">
                                <p>lorefg dh xv sgsghsdfh dfgsdf gsdfgddf hgdfdfhsdfh g hfgsf dfshdhdfs gdfgdfg ndf f
                                    dsgdf dfs d ndsjjsjsj bj j jbjksb sbh ddghdfh dfgh gh sdghghjdffg jff jfghgfjghjfjgj
                                    f
                                </p>
                                <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="roteiro">
                            <div class="cabecalho">
                                <p>Roteiro 2</p>
                            </div>
                            <div class="corpo r1">
                                <p>lorefg dh xv sgsghsdfh dfgsdf gsdfgddf hgdfdfhsdfh g hfgsf dfshdhdfs gdfgdfg ndf f
                                    dsgdf dfs d ndsjjsjsj bj j jbjksb sbh ddghdfh dfgh gh sdghghjdffg jff jfghgfjghjfjgj
                                    f
                                </p>
                                <a href=""><button><i class="fab fa-whatsapp"></i> MAIS INFORMAÇÕES</button></a>
                            </div>
                        </div>
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


        </div>
    </section>
</div>