<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            width: 95%;
            max-width: 1400px;
            margin: auto;
        }
        .judul{    
            font-size: 20px;
            font-weight: bold;
        }
        
        header {
            background-color: #123c69;
            color: white;
            padding: 20px 8%;
        }
        

        header h1 {
            margin-bottom: 5px;
        }

        header p {
            color: #dbeafe;
        }

        main {
            padding: 30px 0;
        }

        .card {
            background: white;
            padding: 25px 40px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .card h2 {
            color: #075985;
            margin-bottom: 15px;
        }

        .tanpa-titik {
            list-style: none;
            padding-left: 0;
        }

        .identitas-card {
            display: flex;
            align-items: stretch;
            height: 400px;
            padding: 0;
            overflow: hidden;
        }

        .identitas-text {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .identitas-text h2 {
            font-size: 32px;
            margin-bottom: 25px;
        }

        .identitas-text p {
            margin-bottom: 12px;
            font-size: 17px;
        }

        .identitas-text p strong {
            display: inline-block;
            width: 150px;
        }

        .identitas-image {
            width: 50%;
        }

        .identitas-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .footer{
            background-color: #123c69;
            color: white;
            padding: 20px 8%;
            text-align: center;
        }


    </style>

</head>
<header>

        <div class="header">

            <div class="judul">
                POLINEMA PSDKU PAMEKASAN
            </div>

        </div>

    </header>
<body>


    <main>

        @yield('content')

    </main>

    <footer>
        <div class="footer">
            
        
        <p>
            © 2026 {{ $namaKampus ?? 'Kampus Saya' }}
        </p>
        </div>
    </footer>

</body>

</html>