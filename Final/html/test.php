<!DOCTYPE html>
<html lang='en'>

<head>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
            integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <title>Editing</title>
        <link rel='stylesheet' href='css/default.css'>
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        <?php include_once('../.././database/data.php') ?>
    </head>
    <style>
        @import url('./font/font.css');

        @import url('./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');

        @import url('./css/media.css');



        @import url('./css/form.css');
        @import url('../css/pagehome.css');




        body {
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;

        }

        nav {
            background-color: #1E2B58;

        }

        ul li:last-child {
            border-radius: 25px;
        }

        * {
            border-radius: 0px;
            margin: 0px;
            padding: 0px;
        }

        div.card {
            height: 610px;
            overflow-y: hidden;
        }




        div.card-body-one {}

        .container-out {
            background: rgba(0, 0, 0, 0.57) url('https://images.unsplash.com/photo-1674421338672-3591ba6f176e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1015&q=80');
            background-position: center;
            background-repeat: no-repeat;

            background-blend-mode: darken;
            color: white;
            padding: 15px;
            height: 500px;
            display: flex;
            align-items: end;
            background-size: cover;

        }

        .blogger {
            background: rgba(0, 0, 0, 0.57) url('https://images.unsplash.com/photo-1520207588543-1e545b20c19e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
            background-position: center;
            background-repeat: no-repeat;

            background-blend-mode: darken;
            color: white;
            padding: 35px;
            height: 500px;
            width: 100%;
            display: flex;
            align-items: end;
            background-size: cover;
        }

        body {
            background-color: #e9ecef;
            padding: 0px;
            margin: 0px;
        }

        .jumbotron {
            background: rgba(0, 0, 0, 0.65) url('https://plus.unsplash.com/premium_photo-1669833448271-fd839dde57c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            background-position: center;
            background-attachment: scroll;
            background-size: cover;
            background-blend-mode: darken;
a
            color: white;
            height: 400px;
        }
    </style>

</head>

<body>
    <section class='header'>
        <div class='container-header container'>
                <div class='font-weight-bold' style='font-size: 20px;'>
                    
                    <span class='>Search result:</span>
                     <span class='font-weight-bold'></span>0</div>
        </div>
    </section>
 <div class='container d-flex flex-column align-items-center'>
    <div class='container d-flex justify-content-center'>
        <img src='../image/noresults.gif' class='img-fluid' \>
    
        
    
    
    </div>
    <p class='lead text-center'>
        
        <span class='font-weight-bold'>No results found</span>
        <br>
        We couldnt find any animations based on your search
        
        
        ...</p>

 </div>



</body>

</html>