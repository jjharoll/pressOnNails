
     
     

<footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase  pb-4"><font color="white">Ubicacion</font></h3>
            <p><font color="white">Tv. 38AA ### 59A - 231</font></p>
            <p><font color="white">Bello, Antioquia</font></p>
            
          </div>
          
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase  pb-4"><font color="white">Emprendimiento</font></h3>
            <p><font color="white">BY: Johana Paternina Mendez</font></p>
            <p><font color="white">Desarrollador Web Jharol Andres Perez Ozuna</font></p>
          </div>
          
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase  pb-4"><font color="white">Contacto</font></h3>
            <p><font color="white">+573014045680</font></p>
            <p><font color="white">paterninaj709@gmail.com</font></p>
            <nav class="sociales text-center text-lg-center">
              <ul>
                <li>
                  <a href="https://www.facebook.com/jyjpressonnails/?ref=py_c">
                    <span class="sr-only">
                      Facebook
                    </span>          
                  </a>
                </li>
                
                <li>
                  <a href="https://www.instagram.com/jyj_press_on_nails_colombia/?hl=es-la">
                    <span class="sr-only">
                      Instagram
                    </span>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCaH4eCnGpenvHJeeFCnpyTg">
                    <span class="sr-only">
                      Youtube
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <hr class="w-100">
            <p class="text-center copyright w-100"><font color="white">JYJPressOnNailsColombia 2022. Todos los derechos reservados</font></p>
        </div>
      </div>
    </footer>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3666941742439312"
     crossorigin="anonymous"></script> 
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php 
  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);
  ob_end_flush();
?>