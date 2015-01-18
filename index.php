<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>paginator</title>
        <style type="text/css">
            .copywrite {
                width: 300px;
                margin: 80px auto 0;
                border-top: 1px solid #cccccc;
                text-align: center;
                font-weight: 10px;
                color: #cccccc;
            }
            
            .paging-nav {
                text-align: right;
                padding-top: 2px;
            }
            .paging-nav a{
                margin: auto 1px;
                text-decoration: none;
                display: inline-block;
                padding: 1px 7px;
                background: #91b9e6;
                color: white;
                border-radius: 3px;
            }
            .paging-nav .selected-page{
                background: #187ed5;
                font-weight: bold;
            }
            .paging-nav, #tableData {
                width: 400px;
                margin: 0 auto;
                font-family: Arial, sans-serif;
            }
            
            #tableData {
                margin-top: 100px;
                border-spacing: 0;
                border: 1px dotted #ccc;
            }
            #tableData th {
                background: #e5f0fb;
                text-align: left;
                border-bottom: 2px solid #91b9e6;
            }
            #tableData td {
                padding: 3px 10px;
                border-bottom: 1px dotted #ccd;
            }
        </style>
    </head>
    <body>
        <h1>Table paging example</h1>
        <table id="tableData">
            <thead>
                <tr>
                    <th>id</th>
                    <th>first name</th>
                    <th>surname</th>
                    <th>number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Frank</td>
                    <td>Shoulder</td>
                    <td>1246</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John</td>
                    <td>Jameson</td>
                    <td>4564</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Philip</td>
                    <td>Jenkins</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Maria</td>
                    <td>Carlston</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Julia</td>
                    <td>Tampelton</td>
                    <td>1246</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Jane</td>
                    <td>Conor</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Susan</td>
                    <td>Crane</td>
                    <td>1246</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Lucas</td>
                    <td>Fenric</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mark</td>
                    <td>Fenric</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Hilde</td>
                    <td>Mayer</td>
                    <td>4456</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>John</td>
                    <td>Tron</td>
                    <td>1246</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Hans</td>
                    <td>Stark</td>
                    <td>4564</td>
                </tr>
            </tbody>
        </table>
        <div class="copywrite">&COPY; Zoltán Magyar - mzolee 2014</div>


        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script type="text/javascript" src="paging.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>
    </body>
</html>