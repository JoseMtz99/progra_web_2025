<br>
        <h2>Miembros del grupo</h2>
        <br>
        <div class="container text-center">
            <div class="row">
                <?php foreach ($investigadores as $investigador) :?>
                <div class="col">
                    <div class="card tarjeta_miembro">
                        <img src="images/investigadores/<?php echo $investigador['fotografia'];?>" class="card-img" alt="<?php echo $investigador['nombre'];?>">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php echo $investigador['nombre'].' '.$investigador['primer_apellido'];?></h5>
                            <h6> Astrobiología</h6>
                            <p class="card-text"><?php echo $investigador['semblanza'];?></p>
                            <br><br><br>
                            <div>
                                <div>
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main> 