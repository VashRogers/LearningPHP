<div class="titulo">Inserir #02</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<?php 

    if(count($_POST) > 0){
        $dados = $_POST;
        $erros = [];

        
        if(!filter_input(INPUT_POST, 'nome')){
            $erros['nome'] = "Nome é obrigatório";
        }

        if(filter_input(INPUT_POST, "nascimento")){
            $data = DateTime::createFromFormat("d/m/Y", $_POST['nascimento']);
            if(!$data){
                $erros['nascimento'] = 'Data deve estar no formato d/m/y';
            }
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] = 'Email Inválido!';
        }

        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $erros['site'] = 'Site Inválido';
        }

        $filhosConfig = [
            "options" => ["min_range" => 0, "max_range" => 20]
        ];
        
        if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0){
            $erros['filhos'] = "Quantidade de filhos inválida";
        }

        $salarioConfig = [
            'options' => ['decimal' => ',']
        ];

        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
            $erros['salario'] = "Salário inválido";
        }

        
    }

?>
<!-- 
<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
        <?= $erro ?>
    </div>
<?php endforeach ?> -->

<form action="#" method="POST">
    <div class="form-row">
        
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input 
                type="text" name="nome" class="form-control" 
                placeholder="nome" id="nome" value="<?php $_POST['nome'] ?>"
            >
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input

                type="date" name="nascimento" class="form-control <?= $erros['nome'] ? 'is-invalid' : 'form-control'?>" 
                placeholder="nascimento" id="nome" value="<?php $_POST['nascimento'] ?>"
            >
            <div class="invalid-feedback">
                <?= $erros['nome']; ?>
            </div>
        </div>


    </div>
    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input 
                type="email" name="email" 
                class="form-control" placeholder="email" id="email" value="<?php $_POST['email'] ?>"
            >
        </div>

        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input 
                type="text" name="site" 
                class="form-control" placeholder="site" id="site"
                value="<?php $_POST['site'] ?>"
            >
        </div>


    </div>

    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="filhos">Qtd. de Filhos</label>
            <input 
                type="number" name="filhos" 
                class="form-control" placeholder="filhos" id="filhos"
                value="<?php $_POST['filhos'] ?>"
            >
        </div>

        <div class="form-group col-md-6">
            <label for="salario">Salario</label>
            <input 
                type="text" name="salario" 
                class="form-control" placeholder="salario" id="salario"
                value="<?php $_POST['salario'] ?>"
            >
        </div>

    </div>
    <button class="btn btn-primary lg">Enviar</button>
</form>



