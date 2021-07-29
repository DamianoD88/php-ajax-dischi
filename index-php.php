
<?php


require __DIR__ . '/db/arrayAlbum.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css\style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
</head>
<body>
<div id="app">
    <img class="logo" src="img\3313002426527403.jpg" alt="">
    <div class="dischi p-3 mb-2 bg-secondary text-white ">
    <?php foreach($albums as $album ) {?>
        <div class="disco ">
            <!-- nel caso scrivessi su di una sola riga posso mettere = al posto di php senza stampare attraverso l'echo -->
            <img src="<?= $album['poster']; ?>" alt="<?= $album ['title']; ?>">
            <h2><?= $album['title'];?></h2>
            <div class="dati">
                <div><?= $album['author'];?></div>
                <div><?= $album['genre'];?></div>
                <div><?= $album['year'];?></div>
            </div>
        </div>
    <?php } ?>

    </div>

</div>



</div>

</div>
</body>
</html>