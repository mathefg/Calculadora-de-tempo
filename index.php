<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
    $temp = $_REQUEST['temp'] ?? 0;
    
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="request">
        <label for="temp">Insira seu tempo em segundos</label>
        <input type="number" name="temp" id="temp" required value="<?=$temp?>">
        <input type="submit" value="Converter">
        </form>
    </main>
    <?php 
    $sobra = $temp;
    $mes = (int)($sobra / 2419200);
    $sobra = $sobra % 2419200;
    $sem = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;
    $dias = (int)($sobra / 84_400);
    $sobra = $sobra % 84_400;
    $hr = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    $min = (int)($sobra / 60);
    $sobra = $sobra % 60;
    $seg=$sobra

    ?>
    <section>
        Seu tempo inserido de <strong><?=number_format($temp,0,',','.')?> segundos</strong> seria igual a:
        <ul>
            <strong>
            <li><?=$mes?> Meses</li>
            <li><?=$sem?> Semanas</li>
            <li><?=$dias?> Dias</li>
            <li><?=$hr?> Horas</li>
            <li><?=$min?> Minutos</li>
            <li><?=$seg?> Segundos</li>
            </strong>
        </ul>
    </section>
</body>
</html>