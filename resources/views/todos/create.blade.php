<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Todo</title>
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
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .back_btn{
            display: ruby-text;
    float: right;
    padding: 10px;
    background: #ffffff00;
    border: 1px solid;
    border-radius: 10px;
    font-size: medium;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Create New Todo <a class="back_btn" href="{{ route('todos.home') }}">Back</a></h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <label for="completed">Completed:</label>
        <input type="checkbox" style="    width: fit-content;" id="completed" name="completed">
        <button type="submit">Create Todo</button>
    </form>
</div>

</body>
</html>
