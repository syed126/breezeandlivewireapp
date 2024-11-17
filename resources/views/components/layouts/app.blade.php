<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @livewireStyles
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .alert {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert.alert-danger {
            background-color: #f44336;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        form div {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"], textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            box-sizing: border-box;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #4CAF50;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        button {
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .actions button {
            margin-right: 10px;
            padding: 5px 10px;
            font-size: 12px;
            background-color: #f44336;
            border-radius: 3px;
            color: white;
            border: none;
            cursor: pointer;
        }

        .actions button:hover {
            background-color: #d32f2f;
        }

        .actions button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .no-items {
            text-align: center;
            color: #777;
        }

    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
