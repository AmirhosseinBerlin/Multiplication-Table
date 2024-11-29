<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            font-weight: bold;
            font-family: arial;
            font-size: 1.25em;
            margin: 20px;
            background-color: white;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            background: white;
            box-shadow: 0px 3px 5px #18181a;
        }
        th, td {
            border: 2px solid;
            /* font-weight: bold; */
            text-align: center;
            /* width: 50px;
            height: 50px; */
            padding: 15px;
        }
        .th1{
            background-color: hsl(55, 96%, 78%);
        }
        .th2{
            background-color: hsl(49, 89%, 50%);
        }
        .th3{
            background-color: hsl(33, 100%, 50%);
        }
        .th4{
            background-color: hsl(332, 97%, 50%);
        }
        .th5{
            background-color: hsl(0, 77%, 34%);
        }
        .th6{
            background-color: hsl(130, 79%, 45%);
        }
        .th7{
            background-color: hsl(118, 78%, 31%);
        }
        .th8{
            background-color: hsl(224, 75%, 64%);
        }
        .th9{
            background-color: rgb(46, 39, 239);
        }
        .th10{
            background-color: rgb(227, 249, 31);
        }
  
        #h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 id = "h1">Multiplication Table (0 to 10)</h1>
    <table>
        <?php
            echo "<thead><tr><th>*</th>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<th class ='th$i'>$i</th>";
            }
            echo "</tr></thead><tbody>";
            
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><th class ='th$i'>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    $multiple = $i * $j;
                    echo "<td>$multiple</td>";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>