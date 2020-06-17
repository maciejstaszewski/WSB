<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='.\style\style.css'> 
    <title>Tabele</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th scope="col">col1</th>
            <th scope="col">col2</th>
            <th scope="col">col3</th>        
        </tr>
        <tr>
            <th scope="row">row1</th>
            <td rowspan="3">1</td>
            <td colspan="2">2</td>
                
        </tr>
        
        <tr>
            <th scope="row">row2</th>
        
            <td>5</td>
            <td>6</td>        
        </tr>
        
        <tr>
            <th scope="row">row3</th>
        
            <td>8</td>
            <td>9</td>        
        </tr>
    </table>
    
</body>
</html>