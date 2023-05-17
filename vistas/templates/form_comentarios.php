</br></br></br>
<div class="col-md-8">
    <h3>Comentarios</h3>
    <form action="index.php" method="POST">
        <input type="hidden" name="Agregar_Comentario">

        <input type="hidden" name="usuario" value="0">
        <input type="hidden" name="noticia" value="<?php echo $_GET['id']; ?>">
        <div class="mb-3">
            <label for="message" class="form-label">Ingresa un Comentario</label>
            <textarea class="form-control" id="message" name="message" rows="5" required=""
                control-id="ControlID-4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" control-id="ControlID-5">Enviar</button>
    </form>
</div>