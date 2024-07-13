<?php require ('./layout/plantilla.php')?>
       
            <div class="fausto">
                <form action="">
                    <div class="aña_catego_1">
                        <div class="nombre">
                            <h2>Nombre de la categoria</h2>
                            <input type="text">
                        </div>
                        
                        <div class="descripcion">
                            <h2>Descripción</h2>
                            <input type="text">
                        </div>
                    </div>

                    <div class="aña_catego_2">
    
                        <div class="descripcion">
                            <h2>Icono de la categoria</h2>
                            <input type="text" placeholder="Elegir archivo" readonly>
                            <input type="file" name="" class="file">
                        </div>
                    </div>

                  
                    
                </form>
            </div>

                        
            <?php require ('./layout/cierre_plantilla.php')?>

