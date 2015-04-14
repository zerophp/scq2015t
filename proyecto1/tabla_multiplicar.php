<table border=1>
<tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
</tr>
<tr>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
</tr>
<tr>
    <td>9</td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
</tr>
</table>

<?php
$filas = 5;
$columnas = 5;

echo "<table border=1>";
for($i=0;$i<=$filas;$i++)
{
    echo "<tr>";
    for($f=0;$f<=$columnas;$f++)
    {
        if($i==0)
            echo "<td>".$f."</td>";
        else if ($f==0)
            echo "<td>".$i."</td>";
        else
            echo "<td>".$i*$f."</td>";
    }
    
    echo "</tr>";
}

        

echo "</table>";














