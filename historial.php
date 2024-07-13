<?php require ('./layout/plantilla.php')?>
<style>
    .historial{
        display:flex;
        width: 100%;
        justify-content: center;
        align-items: center;
    }
        table {
            border-collapse: collapse;
            width: 90%;
            font-family:'Jost';

        }
        

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: darkgray;
        }
        h2{
            margin-left:55px;
            font-size:40px;
            font-family:'Jost';
        }
    </style>

<h2>Historial</h2>
<div class="historial">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>TIENDA</th>
            <th>NOMBRE</th>
            <th>FECHA</th>
            <th>HORA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Liverpool</td>
            <td>INV-2023-046</td>
            <td>15-02-2023</td>
            <td>08:15:00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Costco</td>
            <td>INV-2023-047</td>
            <td>28-05-2023</td>
            <td>10:30:45</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Zara</td>
            <td>INV-2023-048</td>
            <td>10-09-2023</td>
            <td>13:20:15</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Nike</td>
            <td>INV-2023-049</td>
            <td>23-11-2023</td>
            <td>15:45:30</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Amazon</td>
            <td>INV-2023-050</td>
            <td>05-03-2023</td>
            <td>17:55:10</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Walmart</td>
            <td>INV-2023-051</td>
            <td>18-06-2023</td>
            <td>20:10:20</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Adidas</td>
            <td>INV-2023-052</td>
            <td>14-12-2023</td>
            <td>22:00:05</td>
        </tr>
    </tbody>
</table>
</div>



<?php require ('./layout/cierre_plantilla.php')?>