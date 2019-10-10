<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <!--- Example CSS -->
    <style>
    
    </style>
</head>
<body>
    <div class="ui menu">
    <div class="header item">App name</div>
    <a class="active item">Blog</a>
    <a class="item">About</a>
    <div class="ui dropdown item">
        Features
        <i class="dropdown icon"></i>
        <div class="menu">
        <div class="item">Action</div>
        <div class="divider"></div>
        <div class="item">Separated Link</div>
        <div class="divider"></div>
        <div class="item">One more separated link</div>
        </div>
    </div>
    <div class="right menu">
        <div class="item">
        <div class="ui action left icon input">
            <i class="search icon"></i>
            <input type="text" placeholder="Search">
            <button class="ui button">Submit</button>
        </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script type="text/javascript">
        $(document)
            .ready(function() {
            $('.ui.menu .ui.dropdown').dropdown({
                on: 'hover'
            });
            $('.ui.menu a.item')
                .on('click', function() {
                $(this)
                    .addClass('active')
                    .siblings()
                    .removeClass('active')
                ;
                })
            ;
            })
        ;
  </script>
</body>
</html>