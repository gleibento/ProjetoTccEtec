<div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#usuario" aria-controls="usuario" role="tab" data-toggle="tab">Usuario</a></li>
        <li role="presentation"><a href="#profissional" aria-controls="profissional" role="tab" data-toggle="tab">Profissional</a></li>
        <li role="presentation"><a href="#prontuario" aria-controls="prontuario" role="tab" data-toggle="tab">prontuario</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="usuario">
            <div class="row" style="margin-top: 15px;">
                <div class="form-group col-md-11">
                    <input type="text" class="form-control" id="usu_sus" placeholder="Digite o nome do usuario">
                </div>
                <div class="form-group col-md-1">
                    <button type="button" id="search" class="form-control btn btn-info"><i class="fa fa-search"></i></button>
                </div>
            </div>
             <div id="resp"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profissional">
            <div class="row" style="margin-top: 15px;">
                <div class="form-group col-md-11">
                    <input type="text" class="form-control" id="palavra" placeholder="Digite o nome ou CPF">
                </div>
                <div class="form-group col-md-1">
                    <button class="form-control btn btn-primary" id="buscar" type="button"><i class="fa fa-search"></i></button>
                </div> 
            </div>
            <div id="dados"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="prontuario">
            <div class="row" style="margin-top: 15px;">
                <div class="form-group col-md-11">
                    <input type="text" class="form-control" id="sus" placeholder="Digite o numero do sus">
                </div>
                <div class="form-group col-md-1">
                    <button class="btn btn-success" id="protuario" type="button"><i class="fa fa-search"></i></button>
                </div> 
            </div>
            <div id="msg"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">

        </div>
    </div>

</div>
<script type="text/javascript" src="../js/lib/jquery.js"></script>
<script type="text/javascript" src="../js/usuarioBuscaAjax.js"></script>
<script type="text/javascript" src="../js/profissionaBuscaAjax.js"></script>
<script type="text/javascript" src="../js/prontuarioAjax.js"></script>