<!-- Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->
<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- link boot  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container mt-5 text-center">
        <h1 class="text-white mb-5 fw-semibolder">I Migliori Hotel</h1>
        <table class="table border border-2 border-success p-2 fw-medium fs-5 ">
            <thead>
                <tr>
                    <th class="border border-1 border-success" scope="row">Nome Hotel</th>
                    <?php foreach ($hotels as $key => $element) { ?>
                        <td class="border border-1 border-success"><?php echo $element['name'] ?></td>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="border border-1 border-success" scope="row">Descrizione Hotel</th>
                    <?php foreach ($hotels as $key => $element) { ?>
                        <td class="border border-1 border-success"><?php echo $element['description'] ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th class="border border-1 border-success" scope="row">Parcheggio</th>
                    <?php foreach ($hotels as $key => $element) { ?>
                        <td class="border border-1 border-success"> <?php echo $element['parking'] === true ? 'Accesso al Parcheggio' : 'Parcheggio Assente' ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th class="border border-1 border-success" scope="row">Voto</th>
                    <?php foreach ($hotels as $key => $element) { ?>
                        <td class="border border-1 border-success"><?php echo  $element['vote'] ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th class="border border-1 border-success" scope="row">Distanza Dal centro</th>
                    <?php foreach ($hotels as $key => $element) { ?>
                        <td class="border border-1 border-success" ><?php echo  $element['distance_to_center'] ?></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
        </table>
    </div>
</body>

</html>