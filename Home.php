<?php
include('lista_produtos.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Home.css">
</head>

<body>
    <div class="d-flex gap-3 flex-wrap" style="position: flex; align-items: center; justify-content: space-evenly; margin-top: 20px;">
        <?php foreach ($produtos as $p) { ?>

            <form action="./produto.php" method="get" target="_parent">
                <div class="card" style="width: 18rem; ">

                    <img src="<?= $p['imagem'] ?>" class="card-img-top" alt="">
                    <div class="card-body">

                        <h5 class="card-title"><?= $p['nome'] ?></h5>
                        <p class="card-text"><?= $p['descricao'] ?></p>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Estoque: <?= $p['quantidade'] ?></span>
                            <span class="fw-bold">R$ <?= $p['preco'] ?></span>
                        </div>

                        <input type="hidden" name="id" value="<?= $p['id'] ?>">
                        <button class="btn btn-outline-primary" type="submit">Ver Detalhes</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>