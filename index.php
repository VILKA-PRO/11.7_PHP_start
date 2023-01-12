<?php
$a1 = $b1 = $a2 = $b3 = 0;
$a3 = $b2 = $a4 = $b4 = 1;
$x1 = $y1 = true;
$x2 = $y2 = false;
$x3 = $y3 = 1;
$x4 = $y4 = 0;
$x5 = $y5 = -1;
$x6 = $y6 = "1";
$x7 = $y7 = null;
$x8 = $y8 = "php";
?>

<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>11.7. Практика</title>
</head>

<body>


    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-sm text-center">
                <h1>Модуль 11. Старт в PHP</h1>
                <br><br>
                <h2>Задание 1</h2>
                <h4>Таблица истинности PHP</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">

                <table class="table table-hover text-center" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" width="5%">A</th>
                            <th scope="col" width="5%">B</th>
                            <th scope="col" width="22,5%">!A</th>
                            <th scope="col" width="22,5%">A || B</th>
                            <th scope="col" width="22,5%">A && B</th>
                            <th scope="col" width="22,5%">A xor B</th>


                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <th scope="row">0</th>
                            <th scope="row">0</th>
                            <td> <?= (!$a1) ? '1' : '0'; ?> </td>
                            <td> <?= ($a1 || $b1) ? '1' : '0'; ?> </td>
                            <td> <?= ($a1 && $b1) ? '1' : '0'; ?> </td>
                            <td> <?= ($a1 xor $b1) ? '1' : '0'; ?> </td>
                        </tr>
                        <tr>
                            <th scope="row">0</th>
                            <th scope="row">1</th>
                            <td> <?= (!$a2) ? '1' : '0'; ?> </td>
                            <td> <?= ($a2 || $b2) ? '1' : '0'; ?> </td>
                            <td> <?= ($a2 && $b2) ? '1' : '0'; ?> </td>
                            <td> <?= ($a2 xor $b2) ? '1' : '0'; ?> </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <th scope="row">0</th>
                            <td> <?= (!$a3) ? '1' : '0'; ?> </td>
                            <td> <?= ($a3 || $b3) ? '1' : '0'; ?> </td>
                            <td> <?= ($a3 && $b3) ? '1' : '0'; ?> </td>
                            <td> <?= ($a3 xor $b3) ? '1' : '0'; ?> </td>
                        </tr>
                        <tr style="border-bottom-style: solid; border-bottom-width: 0.25px; border-bottom-color: #bcbcbc;">
                            <th scope="row">1</th>
                            <th scope="row">1</th>
                            <td> <?= (!$a4) ? '1' : '0'; ?> </td>
                            <td> <?= ($a4 || $b4) ? '1' : '0'; ?> </td>
                            <td> <?= ($a4 && $b4) ? '1' : '0'; ?> </td>
                            <td> <?= ($a4 xor $b4) ? '1' : '0'; ?> </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="col-sm text-center">
                <h2>Задание 2</h2>
                <h4>Гибкое сравнение в PHP</h4>
                <p>При гибком сравнении мы видим, что идет преобразование данных <br> и сравниваются их логические результаты после преобразования.</p>

            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <table class="table table-hover text-center" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" width="12%"></th>
                            <th scope="col" width="11%">true</th>
                            <th scope="col" width="11%">false</th>
                            <th scope="col" width="11%">1</th>
                            <th scope="col" width="11%">0</th>
                            <th scope="col" width="11%">-1</th>
                            <th scope="col" width="11%">"1"</th>
                            <th scope="col" width="11%">null</th>
                            <th scope="col" width="11%">"php"</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>true</strong></th>
                            <td><?= ($y1 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <td scope="row" style="background-color: #f5f5f5;"><strong>false</strong></td>
                            <td><?= ($y2 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>1</strong></th>
                            <td><?= ($y3 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>0</strong></th>
                            <td><?= ($y4 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>-1</strong></th>
                            <td><?= ($y5 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>"1"</strong></th>
                            <td><?= ($y6 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>null</strong></th>
                            <td><?= ($y7 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr style="border-bottom-style: solid; border-bottom-width: 0.25px; border-bottom-color: #bcbcbc;">
                            <th scope="row" style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></th>
                            <td><?= ($y8 == $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 == $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="col-sm text-center">
                <h4>Жёсткое сравнение в PHP</h4>
                <p>При жестком сравнении отчетливо видно, что TRUE достигается только, <br> если сравниваются два одинаковых элемента и по типу и по содержанию.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm">
                <table class="table table-hover text-center" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" width="12%"></th>
                            <th scope="col" width="11%">true</th>
                            <th scope="col" width="11%">false</th>
                            <th scope="col" width="11%">1</th>
                            <th scope="col" width="11%">0</th>
                            <th scope="col" width="11%">-1</th>
                            <th scope="col" width="11%">"1"</th>
                            <th scope="col" width="11%">null</th>
                            <th scope="col" width="11%">"php"</th>
                        </tr>
                    </thead>

                    <tbody id="table3">
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>true</strong></th>
                            <td><?= ($y1 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y1 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>false</strong></th>
                            <td><?= ($y2 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y2 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>1</strong></th>
                            <td><?= ($y3 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y3 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>0</strong></th>
                            <td><?= ($y4 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y4 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>-1</strong></th>
                            <td><?= ($y5 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y5 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>"1"</strong></th>
                            <td><?= ($y6 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y6 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" style="background-color: #f5f5f5;"><strong>null</strong></th>
                            <td><?= ($y7 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y7 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                        <tr style="border-bottom-style: solid; border-bottom-width: 0.25px; border-bottom-color: #bcbcbc;">
                            <th scope="row" style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></th>
                            <td><?= ($y8 === $x1) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x2) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x3) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x4) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x5) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x6) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x7) ? 'true' : 'false'; ?></td>
                            <td><?= ($y8 === $x8) ? 'true' : 'false'; ?></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="col-sm text-center">
                <p class="text-muted lead"><small> Designed by Ivan Us in SkillFactory</small></p>
            </div>
        </div>

    </div>




    <script>
        var cells = document.getElementsByTagName("td");

        for (var i = 0; i < cells.length; i++) {
            if (cells[i].textContent === "true") {
                cells[i].setAttribute ("style", "background-color: #E8F8F5;");
            }
        }
    </script>

</body>

</html>