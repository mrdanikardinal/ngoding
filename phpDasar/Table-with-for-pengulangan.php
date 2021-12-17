<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
    <Style>
    .warna-baris{
        background-color:lightblue;
    }
    
    </Style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing ="0">
    <!-- <?php
        // 1.teknik standard
        // for($i=1; $i<=3;$i++){
        //     echo"<tr>";
        //     for($j=1;$j<=5;$j++){
        //         echo"<td>$i,$j</td>";
        //     }
        //     echo"</tr>";
        // }
        // 2.teknik templating
    ?> -->
    <!-- 3.templating cara pertama -->
    <!--  
    <?php for ($i=1; $i<=3;$i++){?>
        <tr>
            <?php for ($j=1; $j<=5; $j++){?>
            <td><?php echo"$i, $j"?></td>
            <?php }?>
        </tr>
    <?php }?>
    -->

    <!-- 3.templating cara efektik -->

        <?php for ($i=1; $i<=25;$i++):?>
            <?php if ($i%2!=0):?>     
            <tr class="warna-baris">
            <?php else:?>
            <tr>
            <?php endif; ?>
                <?php for ($j=1; $j<=20; $j++):?>
                <td><?="$i, $j"?></td>
                <?php endfor;?>
            </tr>
                <?php endfor;?>

</table>




    
</body>
</html>