<?php
include 'calculator.php';
?>

<html>

<head>
    <title>Calculator Electricity Bill</title>
</head>

<body>
    <h2>Calculator Electricity Bill</h2>

    <?php
    if ($error != "") {
        echo "<p style='color:red;'>" . $error . "</p>";
    }
    ?>

    <div style="margin-bottom: 50px;">
        <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>For the next 100 kWh (201 – 300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301 – 600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601 – 900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="3">The minimum monthly charge is RM3.00</td>
            </tr>
        </table>
    </div>

    <form method="POST">

        Enter your first 200kWh (1 - 200) per month:
        <input type="text" name="block1" value="<?php echo $block1 ?>"> <br>

        Enter next 100 kWh (201 - 300 kWh) per month :
        <input type="text" name="block2" value="<?php echo $block2 ?>"> <br>


        Enter next 300 kWh (301 - 600 kWh) per month :
        <input type="text" name="block3" value="<?php echo $block3 ?>"> <br>

        Enter next 300 kWh (601 - 900 kWh) per month :
        <input type="text" name="block4" value="<?php echo $block4 ?>"> <br>

        Enter next kWh (901 kWh onwards) per month :
        <input type="text" name="block5" value="<?php echo $block5 ?>"> <br>

        <input type="submit" name="calculate" value="Calculate Bill">
        <input type="submit" name="reset" value="reset">

    </form>

    <?php

    if ($showBill) {
        echo "<hr>";
        echo "<h3>Electricity Bill</h3>";

        echo "1-200 kWh: " . $block1 . " kWh x RM0.218 = RM" . number_format($charge1, 2) . "<br>";
        echo "201-300 kWh: " . $block2 . " kWh x RM0.344 = RM" . number_format($charge2, 2) . "<br>";
        echo "301-600 kWh: " . $block3 . " kWh x RM0.516 = RM" . number_format($charge3, 2) . "<br>";
        echo "601-900 kWh: " . $block4 . " kWh x RM0.546 = RM" . number_format($charge4, 2) . "<br>";
        echo "901 kWh onwards: " . $block5 . " kWh x RM0.576 = RM" . number_format($charge5, 2) . "<br>";
        echo "<br>";

        echo "Total electricity consumption : " . $totalKwh . " kWh<br>";
        echo "Total consumption : RM" . number_format($totalCharge, 2) . "<br>";
        echo "SST 6% : RM" . number_format($sst, 2) . "<br>";
        echo "Total Current Bill : RM" . number_format($totalBill, 2) . "</b><br>";
    }

    ?>
</body>

</html>