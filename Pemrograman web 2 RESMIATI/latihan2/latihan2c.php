<!DOCTYPE html>
<html>
    <style>
        
        .kotak table, th{
            border:3px solid black; 
            text-align: center;
        }
        .clear{
            width:15%;
        }

        .ganjil{
            background-color: black;
            color: white;
        }
        .genap{
            background-color: antiquewhite;
        }
    </style>
    <body>
    <?php
        $a = "1";
        $b = "2";
        $c = "3";
        $d = "4";
        $e = "5";
    ?>

    <div class="kotak">
        <table class="clear">
                <tr class="ganjil">
                    <th><?php echo $a ?></th>
                </tr>
                <tr class="genap">
                    <th><?php echo $a ?></th>
                    <th><?php echo $b ?></th>
                </tr>
                <tr class="ganjil">
                    <th><?php echo $a ?></th>
                    <th><?php echo $b ?></th>
                    <th><?php echo $c ?></th>
                </tr>
                <tr class="genap">
                    <th><?php echo $a ?></th>
                    <th><?php echo $b ?></th>
                    <th><?php echo $c ?></th>
                    <th><?php echo $d ?></th>
                </tr>
                <tr class="ganjil">
                    <th><?php echo $a ?></th>
                    <th><?php echo $b ?></th>
                    <th><?php echo $c ?></th>
                    <th><?php echo $d ?></th>
                    <th><?php echo $e ?></th>
                </tr>
            
        </table>
    </div>
    </body>
</html>