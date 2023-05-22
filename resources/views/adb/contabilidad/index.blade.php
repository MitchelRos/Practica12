<!DOCTYPE html>
<html>

<head>
    <title>Contabilidad</title>
    <style>
        body{
            margin: 0 auto;
        }
        #bg {
            background-image: url('https://media.boingboing.net/wp-content/uploads/2015/09/vQ6J7q1.gif');
            background-size: cover;
            filter: blur(5px);
            object-fit: contain;
            transform: scale(1.1);
            /* Set rules to fill background */
            min-height: 100%;
            min-width: 1080px;

            /* Set up proportionate scaling */
            width: 100%;
            height: auto;

            /* Set up positioning */
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }
        
        nav>ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-evenly;
        }
        
        nav>ul>li {
            display: inline-block;
            margin-right: 10px;
        }
        
        nav>ul>li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        nav>ul>li a:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div id="bg"></div>
    <nav>
        <ul>
            <li><a href="{{ route('adb.clientes') }}">Clientes</a></li>
            <li><a href="{{ route('adb.facturacion') }}">Facturación</a></li>
            <li><a href="{{ route('adb.contabilidad') }}">Contabilidad</a></li>
        </ul>
    </nav>
    <h1>Contabilidad</h1>

</body>

</html>