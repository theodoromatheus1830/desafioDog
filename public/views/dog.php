<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata|Tangerine|Cardo|Raleway|Syne">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/dog.js"></script>
    <title >Desafio Dog API</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div style="position:relative; top: 200px" class="container">
        <div class="row">
            <div class="col-3">
            
            </div>
            <div  class="border rounded col-6">
    
                <div class="d-flex justify-content-center">
                    <h2 style="font-family: 'Syne', serif;"> Cadastre seu Cachorro </h2>
                </div>
    
                <form id="form" method="post">
                    <div class="mb-3">
                        <label for="dogName" class="form-label">Nome do Cachorro</label>
                        <input required type="text" class="form-control" id="dogName" placeholder="Tobby">
                    </div>

                    <div class="mb-3">
                        <select name="breed" id="breed" class="form-select" required>
                            <option disabled selected value="">Selecione a Raça</option>
                            <?php 
                            foreach($breeds as $key => $value){
                                echo "<option value=`".$key."`>".$key."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" id="font" required name="font">
                            <option disabled  value="" selected>Selecione a Fonte</option>
                            <option value="Inconsolata">Inconsolata</option>
                            <option value="Tangerine">Tangerine</option>
                            <option value="Cardo">Cardo</option>
                            <option value="Raleway">Raleway</option>
                            <option value="Syne">Syne</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" required id="color" name="color">
                            <option disabled selected value="" >Selecione a Cor</option>
                            <option value="red">Vermelho</option>
                            <option value="black">Preto</option>
                            <option value="blue">Azul</option>
                            <option value="green">Verde</option>
                            <option value="yellow">Amarelo</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-center col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                    </div>
                </form>
        </div>
    </div>
    <div id="dogInfoModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seu Cachorro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card" style="width: 100%;">
 
                <img style="display: none;" id="imgModal" src="" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center col-auto">
                    <h2 id="dogNameLabel">Nome do Cachorro</h2>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
  </body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
