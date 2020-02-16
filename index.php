<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Arquivos csv</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
    <header class="menu" >
        <a href="inicio.php" >YouFilm</a>
        <nav>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
        </nav>
     </header>

 <!--Aqui são listados os amigos que o usuario cadastrou(apenas os deles)  !-->

 <section class="cadastrados">
      <h1 id="tituloCadastrados">Musicas Cadastradas</h1>


      <!--Aqui fazemos a leitura do arquivo e os dados são listados  !-->
     <?php
      $dados = file('csv/musicas.csv');
      for($i = 0; $i < sizeof($dados); $i++) {
      $dados[$i] = explode(",", TRIM($dados[$i]));
      }
     ?>


    <table>
 		<thead>
 			<tr>
 			 <th>Nome</th>
             <th>Banda</th>
             <th>Pais</th>
             <th>Ano</th>
             <th>Genêro</th>
            </tr>
 		</thead>
         
         
         <!--Esta parte do codigo é responsavel por listar apenas os dados do usuario. evitando assim que ele possa vizualisar os amigos de outro usuario  !-->
        <?php foreach ($dados as $i => $dadosUser): ?>
           <tr>
            <?php foreach ($dadosUser as  $dados): ?>
 
 
              <td><?= $dados ?></td>
 
            <?php endforeach ?> 
 
           </tr>
        <?php endforeach ?>
 	</table>




 </section>

</body>
</html>