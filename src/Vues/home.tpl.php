<main>
  





<section id="pageAccueil ">
    <div class="container py-4 mt-4">
        <div class="row  mt-4 d-flex align-items-center justify-content-center ">
            <h2 class="text-center pt-4 m-4">Trouvez votre véhicule idéal des aujourd'hui !</h2>
                <div class="col-12 col-md-9 ">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-inner">
                            <?php foreach($data["diapositives"] as $key => $value) : ?>
                                <div class="carousel-item <?= $key === 0 ? "active" : "" ?>">
                                    <img src="<?= $value["image"] ?>" class="d-block w-100" alt="...">
                                    <div class="carousel-caption text-light d-none d-md-block">
                                        <h5><?= $value["title"] ?></h5>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide="prev">
                            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                            <span class="visually-hidden  ">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-3 text-center">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><?= $data["h5"] ?></h5>
                      <?php foreach($data["ul"] as $key => $value) : ?>
                      <ul>
                        <li><?= $value ?></li>
                       
                      </ul>
                      <?php endforeach ?>
                      <a class="btn btn-outline-success me-2" href="<?= $router->generate("login")  ?>" role="button" >Inscrivez vous maintenant</a>
                     
                    </div>
                  </div>
                
                </div>
            </div>
        </div>
    </section>         
  








        </div>
    </section>         
  
  <section id="pageAccueil1" class="my-3 pt-3">
    <div class="container ">
      <h2 class="mb-0 text-center"><?= $data["titre"] ?></h2>
        <div class="row mt-4">
            <?php foreach ( $data["vehicules"] as $key => $value ) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card text-center">
                        <img src="<?= $value->getUrlImg() ?>" class="card-img-top" higth="50 px" alt="curry">
                    <div class="card-body">
                        <h5 class="card-title text-center "><?= $value->getNom() ?></h5>
                        <p class="card-text text-center"><strong>Description : </strong><br><strong><?= $value->lireLaSuite() ?> </p>
                        <p class="card-text text-center">Modele :<br><?= $value->getModele() ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <span class="me-5"><?= $value->getEnVente() ?></span>
                        <span class="text-end"><?= $value->getDateCreation() ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
   
  </section>     
  </main>