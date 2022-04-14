<?php
  $titulo = 'Nosotros';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Nosotros
          </h2>
              <p class="text-justify">JYJPressOnNails Colombia es un emprendimiento novedoso que apenas llega a colombia que tiene como objetivo mejorar la calidad de vida de nuestros uñas naturales. </p>
              <p class="text-justify"> Precisamente el termino de Press hace referencia a la clave de su colocación que consiste en uno ligera Presión. </p>
              <p class="text-justify">Las uñas hacen parte de nuestra Presentación Personal y Por ello en JyJ Press on Nails colombia tenemos el mejor servicio Para mantener tus uños Sanas y luciendo espectaculares</p>
              <hr class="w-100">  
              <h2 class="text-center text-uppercase mt-5 encabezado">
                <span class="text-lowercase d-block">Conoce</span>Nuestras Redes
              </h2>
              <div class="imagenes pt-4 pb-5">
                <a href="#" data-target="#imagen_1" data-toggle="modal">
                  <img src="img/galeria_mini_01.jpg" class="img-fluid py-4">
                </a>
                <a href="#" data-target="#imagen_2" data-toggle="modal">
                  <img src="img/galeria_mini_02.jpg" class="img-fluid py-4">
                </a>
                <a href="#" data-target="#imagen_3" data-toggle="modal">
                  <img src="img/galeria_mini_03.jpg" class="img-fluid py-4">
                </a>

                <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_01.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_02.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_03.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        </main>
        
        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
            <div class="horario">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-4">
            <h3 class="text-center text-uppercase mt-5">Como Medir</h3>
            <p class="text-center mt-3 lead">Con medir tus uñas para tenerlas a tu medida perfectamente</p>
            <h3 class="text-center text-uppercase mt-5">Instrucciones</h3>
            <p class="text-center mt-3 lead">Con Estos simples pasos puedes pegar las uñas press</p>
                <table class="table table-hover text-center mt-5">
                  
                  <tbody>
                      <tr>
                        <td>Paso1:</td>
                        <td>Lavar tus manos con agua y Jabón:</td>
                      </tr>
                      <tr>
                          <td>Paso2:</td>
                          <td>luego empuja suavemente la cuticula con el rempujador que incluyedel kit</td>
                          
                      </tr>
                      <tr>
                          <td>Paso3:</td>
                          <td>cortar cuidadosamente la piel muerta de uña</td>
                          
                      </tr>
                      
                      <tr>
                          <td>Paso4:</td>
                          <td>Lima la superficie de tus uñas para mayor fijacion</td>
                          
                      </tr>
                      
                      <tr>
                          <td>Paso5:</td>
                          <td>Escoge el tipo de pega de tu gusto y procede a pegar tus uñas.</td>
                          
                      </tr>
                      
                  </tbody>
            </table>
          </div>
          <div class="col-md-6 bg-horario"></div>
        </div>
      </div>
    </div>
<?php
  include 'templates/footer.php';    
?>