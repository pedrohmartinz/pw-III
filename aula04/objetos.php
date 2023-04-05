<!DOCTYPE HTML>
<HTML LANG="pt-br">
<HEAD>
    <style>
        body{
            text-align:center;
            font-family:'Arial';
            background-attachment: fixed;
background-size: cover;
background-image: url(https://img.freepik.com/free-vector/geometric-frame-background-green-modern-design-vector_53876-157567.jpg?w=2000);
        }
        input{
            margin:10px;
        }
        label{
            color:green;
            font-size:20px;
            margin-left:20px;
            text-align:left;

        }

    </style>
<META CHARSET="UTF-8">
<TITLE>Fresh Start</TITLE></HEAD>
<BODY>
    <h1>Seja bem-vindo!</h1>
<form name="form" method="post" >
<p><BR>Formulário<BR></p>
<input type= "text" name="numero" placeholder="número"><BR>
<input type= "submit" name="enviar" id="enviar" value ="Enviar"><BR><BR>


<?php
class Start
{public $nomeUsuario, $nome2Usuario, $escolhaUsuario, $buscarUsuario, $nomeColaborador, $nome2Colaborador, $escolhaColaborador, $buscarColaborador; 

public function __construct()
{    
	 echo ""; 
}



public function CadastrarUsuario()
{   echo "Cadastro de usuários:<BR>";
        echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
        echo '<input type= "email" name="Email" placeholder="Digite o email"><BR>';
        echo '<input type= "text" name="Cpf" placeholder="Digite o cpf"><BR>';
    
	$this->nomeUsuario = $_POST["Nome"];
	echo "<BR>Nome:".$this->nomeUsuario;

}

public function ConsultarUsuario()
{	

	echo "Consulta de usuários:<BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarUsuario = $_POST["Nome"];
			if ($this->nomeUsuario == $this->buscarUsuario)
				{echo "Usuário ".$this->buscarUsuario." encontrado <BR>";}
			else
			{
				echo "Usuário ".$this->buscarUsuario." não encontrado <BR>";
			}
	
}

public function EditarUsuario()
{	$i=0;
	
	echo "Edição de usuários:<BR>";
	echo "Digite um nome para encontrar: <BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarUsuario = $_POST["Nome"];
			if ($this->nomeUsuario == $this->buscarUsuario)
			{echo "Nome ".$this->buscarUsuario." encontrado<BR>";	}
			else
				{$i++;
					if($i==3)
					{echo "Usuário ".$this->buscarUsuario." não encontrado <BR>";}
				}
	echo("Digite o nome pra Editar:<BR>"); 
	echo '<input type= "text" name="Nome2" placeholder="Digite o nome"><BR>';
	$this->nomeUsuario = $_POST["Nome2"];
	echo "Novo nome: " .$this->nome2Usuario."<BR>";
	
}  
		
public function ExcluirUsuario()
{	$i=0;
	
	echo "Exclusão de colaboradores:<BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarUsuario = $_POST["Nome"];
		    if ($this->nomeUsuario == $this->buscarUsuario)
			{$this->nomeUsuario = "";
			echo "Usuário ".$this->buscarUsuario." excluído <BR>";}
			else
				{$i++;
					if($i==3)
					{echo "Usuário ".$this->buscarUsuario." não encontrado <BR>";}
				}
	
}
public function CadastrarColaborador()
{   echo "Cadastro de colaboradores:<BR>";
    echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    echo '<input type= "email" name="Email" placeholder="Digite o email"><BR>';
    echo '<input type= "text" name="Cpf" placeholder="Digite o cpf"><BR>';

	$this->nomeColaborador = $_POST["Nome"];
	echo "<BR>Nome:".$this->nomeColaborador;

}

public function ConsultarColaborador()
{	
	echo "Consulta de colaboradores:<BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarColaborador = $_POST["Nome"];
			if ($this->nome == $this->buscarColaborador)
				{echo "Usuário ".$this->buscarColaborador." encontrado <BR>";}
			else
			{
				echo "Usuário ".$this->buscarColaborador." não encontrado <BR>";
			}
	
}

public function EditarColaborador()
{	$i=0;
	echo "Edição de colaboradores:<BR>";
	echo "Digite um nome para encontrar: <BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarColaborador = $_POST["Nome"];
			if ($this->nomeColaborador == $this->buscarColaborador)
			{echo "Nome ".$this->buscarColaborador." encontrado<BR>";	}
			else
				{$i++;
					if($i==3)
					{echo "Usuário ".$this->buscarColaborador." não encontrado <BR>";}
				}
	echo("Digite o nome pra Editar:<BR>"); 
	echo '<input type= "text" name="Nome2" placeholder="Digite o nome"><BR>';
	$this->nomeColaborador = $_POST["Nome2"];
	echo "Novo nome: " .$this->nome2Colaborador."<BR>";
	
}  
		
public function ExcluirColaborador()
{	$i=0;
	echo "Exclusão de usuários:<BR>";
	echo '<input type= "text" name="Nome" placeholder="Digite o nome"><BR>';
    $this->nomeUsuario = $_POST["Nome"]; //a
	$this->buscarColaborador = $_POST["Nome"];
		    if ($this->nomeColaborador == $this->buscarColaborador)
			{$this->nomeColaborador = "";
			echo "Usuário ".$this->buscarColaborador." excluído <BR>";}
			else
				{$i++;
					if($i==3)
					{echo "Usuário ".$this->buscarColaborador." não encontrado <BR>";}
				}
	
}


}
$objeto = new Start();
		//$escolha;
		echo("Digite a opção desejada:<BR><BR>");
		echo('<label> 1-Cadastrar Usuário </label>       <label>5-Cadastrar Colaborador </label> <BR>');
		echo('<label>2-Consultar Usuário </label>      <label>6-Consultar Colaborador </label> <BR>');
		echo('<label>3-Editar Usuário </label>         <label> 7-Editar Colaborador </label> <BR>');
		echo('<label>4-Excluir Usuário  </label>       <label>8-Excluir Colaborador </label> <BR>');

		echo("<BR>");
		echo(" <BR>");
		echo(" <BR>");
		echo("<BR><BR>");
		
		echo("Digite a opção desejada<BR><BR>");
		$objeto->escolha = $_POST["numero"];
		
		if($objeto->escolha == 1)
		{$objeto->CadastrarUsuario();
		echo "<BR>Usuário Cadastrado";}
		else
		{	if($objeto->escolha == 2)
			{$objeto->ConsultarUsuario();
			echo "<BR>Usuário Consultado";}
			else
				{if($objeto->escolha == 3)
				{$objeto->EditarUsuario();
				echo "<BR>Usuário Editado";}
				else
					{if($objeto->escolha == 4)
					{$objeto->ExcluirUsuario();
						echo "<BR>Usuário Excluído";}
                        else
                        {if($objeto->escolha == 5)
                            {$objeto->CadastrarColaborador();
                            echo "<BR>Colaborador Cadastrado";}
                            else
                            {	if($objeto->escolha == 6)
                                {$objeto->ConsultarColaborador();
                                echo "<BR>Colaborador Consultado";}
                                else
                                    {if($objeto->escolha == 7)
                                    {$objeto->EditarColaborador();
                                    echo "<BR>Colaborador Editado";}
                                    else
                                        {if($objeto->escolha == 8)
                                        {$objeto->ExcluirColaborador();
                                            echo "<BR>Colaborador Excluído";}
                                            else
                                                {if($objeto->escolha >= 9 || $objeto->escolha <= 0)
                                                    {echo "<BR>Erro, tente novamente";}
                                        }    
                                    }
                                }
                            }
                        }
					}
				}
		}
?>
</form> </body> </html>