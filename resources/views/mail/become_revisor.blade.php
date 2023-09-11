<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta di diventare revisore</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            font-size: 24px;
            text-align: center;
        }
        p {
            margin-bottom: 15px;
        }
        a.button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a.button:hover {
            background-color: #0056b3;
        }

        /* Stili responsivi */
        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 20px;
            }
            a.button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Richiesta per diventare revisore</h1>
        <p>Nome: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>

        <p>Se vuoi renderlo revisore</p>
        <a class="button" href="{{route('revisors.make.revisor', compact('user'))}}">Rendi {{$user->name}} Revisore</a>
    </div>
</body>
</html>
