<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Login</h3>
                <hr>
            </div>

            <form name="login" action="/" method="post">
                <div class="form-group">
                    <label for="nombre">Usuario</label>
                    <select class="form-control form-control-lg" name="nombre" id="nombre">
                    <option value="">Seleccione</option>
                    <?php foreach ($usuarios as $data) {?>
                        <option <?php set_select('nombre', $data)?> value="<?= $data['id']?>"><?php $data=['nombre'] ?>"></option>
                <?php } ?>    
                        
                </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="col-12 col-sm-8 text-right">
                        <a href="/register">crear una cuenta nueva?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function validacombo(){
        var validaformulario = document.getElementById('nombre'),
        if(validaformulario.val()==0 || validaformulario.val()=="")
        {
            alert("selecciona una opcion")
        }  

         }
</script>
