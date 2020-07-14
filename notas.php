<div class="notas">
        <?php 
        $sql="select sum(case when id.codResd='01' and n.notaF>50 then 1 else 0 end) as 'La Paz',
                    sum(case when id.codResd='02' and n.notaF>50 then 1 else 0 end)  as Cochabamba,
                    sum(case when id.codResd='03' and n.notaF>50 then 1 else 0 end)  as Oruro,
                    sum(case when id.codResd='04' and n.notaF>50 then 1 else 0 end)  as Chuquisaca,
                    sum(case when id.codResd='05' and n.notaF>50 then 1 else 0 end)  as Potosi,
                    sum(case when id.codResd='06' and n.notaF>50 then 1 else 0 end)  as 'Santa Cruz',
                    sum(case when id.codResd='07' and n.notaF>50 then 1 else 0 end)  as Beni,
                    sum(case when id.codResd='08' and n.notaF>50 then 1 else 0 end)  as Pando,
                    sum(case when id.codResd='09' and n.notaF>50 then 1 else 0 end)  as Tarija
        from IDENTIFICADOR id,(select ((n.nota1+n.nota2+n.nota3)/3) as notaF, n.ci
        from notas n) as n
        where n.ci like id.ci";
        $result1 =mysqli_query($conn,$sql);
        $extraccion=mysqli_fetch_array($result1);
        echo "<table>";
        $aux=0;
        echo "<tr class='table_title'>";
        foreach ($extraccion as $key => $valor) {
            $aux++;
            if($aux%2==0){
                echo "<th>".$key."</th>";
            }
        }
        echo "</tr><tr>";
        $aux=0;
        foreach ($extraccion as $key => $valor) {
            $aux++;
            if($aux%2==0){
                echo "<td>".$valor."</td>";
            }
        }
        echo "</tr>";
        echo "</table>";
        ?>
    </div>