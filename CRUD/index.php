<?php 
    //session_start(); 
    include("conexao.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quisoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    .body{
        background-color:green;
    }
</style>

    </head>

<body>
    <div></div>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> FORMULÁRIO DE INSCRIÇÃO</h4> </a>
</nav>
</div>
    
    <div class="containder">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>

                <div class="card-mt-5">
                    <div class="card-header">
                      

                    </div>
                    <div class="card-body">

     <section>  
   <div class="text-bg-secondary p-3">
         
                        <form action="inserirCheck.php" method="post">                                                  

                            <div class="form-group">
                                <label for=""> Nome </label>
                                <input type="text" name="name" class="form-control" placeholder="Insira seu nome">
                                <label for=""> Email </label>
                                <input type="text" name="email" class="form-control" placeholder="Insira seu email">
                                <label for=""> CPF </label>
                                <input type="text" name="cpf" class="form-control" placeholder="Insira seu CPF">
                                <label for=""> RG </label>
                                <input type="text" name="rg" class="form-control" placeholder="Insira seu RG">
                                <label for=""> Telefone </label>
                                <input type="text" name="telefone" class="form-control" placeholder="Insira seu número de telefone">
                                <label for=""> Estado </label>
                                <input type="text" name="estado" class="form-control" placeholder="Insira o estado em que reside">
                                <label for=""> Cidade </label>
                                <input type="text" name="cidade" class="form-control" placeholder="Insira a cidade que vive">
                                <label for=""> Nome da Mãe </label>
                                <input type="text" name="nomemae" class="form-control" placeholder="Insira o nome da sua mãe">
                                <label for=""> Estado Civil </label>
                                <input type="text" name="estadocivil" class="form-control" placeholder="Qual seu estado civil?">
                                <label for=""> Ocupação</label>
                                <input type="text" name="ocupacao" class="form-control" placeholder="Qual sua ocupação atual?">
                                



                            </div>

                            </br>
                            
                            
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>


        </form>
</div>

    </section>

       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>