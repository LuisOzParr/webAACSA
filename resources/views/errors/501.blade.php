<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!! Html::style('plugins/templete_admin/css/bootstrap.min.css') !!}
        {!! Html::script('plugins/templete_admin/js/bootstrap.min.js') !!}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">¡Upss! Al parecer ha ocurrido un error, intentelo otra vez</div>
            </div>
            <a href="{{URL::previous()}}" class="btn btn-warning btn-lg">Regresar</a>
        </div>
    </body>
</html>