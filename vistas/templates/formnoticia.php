<div class="'col-md-8'" id="from">
    <div class="col-md-8">
        <h2 class="card-subtitle mb-2 text-muted">Para ingresar una nueva noticia en la seccion de noticias
            <?php echo $_GET['action']; ?>. Agregue el
            Titulo y el Parrafo de la noticia. Luego haga click en el botón para subirla
        </h2>
        <form action="index.php"  method="POST">
            <input type="hidden" name="Agregar_Noticia" >
            <div class="mb-3"><label class="form-label">Titulo:</label>
                <input class="form-control" type="text" id="Txt_Titulo" required="" control-id="ControlID-1"
                    name="titulo">
            </div>
            <div class="mb-3"><label class="form-label">Parrafo:</label>
                <textarea class="form-control" rows="5" id="Txt_Texto" required=""
                    control-id="ControlID-2" name="texto"></textarea>
            </div>
            <input type="hidden" name="categoria" value="<?php echo $_GET['action']; ?>">
            <button class="btn btn-primary" type="submit" control-id="ControlID-3">Agregar Noticia</button>
        </form>
    </div>
</div>