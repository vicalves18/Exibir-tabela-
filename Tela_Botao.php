<html>
	<head>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>  
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <style>
		.botao{
			widht:700px;
			margin-left:auto;
			margin-right:auto;
		}
		h1{
			text-align:center;
		}
	  </style>
		<form method="post">
			<div class="container">
				<h1>Gerenciamento de Sistemas</h1>
				<hr size="5"></hr>
				<div class="botao">
				<?php 
				$dt =date('Y-m-d');
				?>
					<a href=""><button class="mx-4 col-2 btn btn-primary" type="submit">FRJ-RJ</button></a>
					<a href=""><button class="mx-4 col-2 btn btn-primary" type="submit">FFA-SP</button></a>
					<input class="mx-4 col-2 btn btn-primary" name="data" type="date" value="<?php echo $dt;?>"></input>
					<input class="mx-4 col-2 btn btn-primary" type="submit" name="Entrar" value="Entrar"></input>
				</div>
				<div class="botao">
					<label><?php
						require('conexao.php');

						if(isset($_POST['Entrar'])){echo "Data: ".$_POST['data']."</br>";}
						
					
						?>
							
					</label>
				</div>
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Empresa</th>
					  <th scope="col">CNPJ</th>
					  <th scope="col">Matricula</th>
					  <th scope="col">Nome</th>
					  <th scope="col">CPF</th>
					  <th scope="col">Status</th>
					  <th scope="col">Número do Cartão</th>
					  <th scope="col">Status BU</th>
					  <th scope="col">Cartão de Passagem Inter Rodoviário</th>
					</tr>
				  </thead>
				   <tbody>
						<?php
						$sql="SELECT * FROM dadosfunc;";
						//$result2 = $link->query($sql); --mesmo da linha62
						$result2 = mysqli_query($link,$sql);
						while($linha2 = mysqli_fetch_assoc($result2)){

						$id =  $linha2['ID'];
						$empresa = $linha2['EMPRESA'];
						$cnpj = $linha2['CNPJ'];
						$matricula = $linha2['MATRICULA'];
						$nome = $linha2['NOME'];
						$cpf = $linha2['CPF'];
						$status = $linha2['STATUS'];
						$nrcartao = $linha2['NRCARTAO'];
						$statusBu = $linha2['STATUS_BU'];
						$cpir = $linha2['CPIR'];
						?>
			
				  
					<tr>
					  <th scope="row"><?php echo '<br>'.$id.'<br>';?></th>
					  <td><?php echo '<br>'.$empresa.'<br>';?></td>
					  <td><?php echo '<br>'.$cnpj.'<br>';?></td>
					  <td><?php echo '<br>'.$matricula.'<br>';?></td>
					  <td><?php echo '<br>'.$nome.'<br>';?></td>
					  <td><?php echo '<br>'.$cpf.'<br>';?></td>
					  <td><?php echo '<br>'.$status.'<br>';?></td>
					  <td><?php echo '<br>'.$nrcartao.'<br>';?></td>
					  <td><?php echo '<br>'.$statusBu.'<br>';?></td>
					  <td><?php echo '<br>'.$cpir.'<br>';?></td>
					</tr>
				  </tbody>
					<?php }?>
				</table>
						
				
			</div>
		</form>
	</body>
</html>
