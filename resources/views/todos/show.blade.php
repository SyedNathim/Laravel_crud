<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; /* Background color */
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input, .form-group textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-group input[type="checkbox"] {
            width: auto;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Show Todo</h1>

    <form>
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <label for="title">{{ $todo->title }}</label>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <label for="title">{{ $todo->description }}</label>
        </div>
        <div class="form-group">
            <label for="completed">Completed:</label>
            <label for="title">{{ $todo->completed ? 'Yes' : 'No' }}</label>
        </div>
        <button type="button" onclick="history.back()" class="btn">Back</button>
    </form>
</div>

</body>
</html>
