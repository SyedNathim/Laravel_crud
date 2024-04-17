<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

      

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

      

        button[type="submit"] {
            background-color: #cc2323;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0c1026;
        }
      
        section{
            display: flex;
        }
       
       
     
.container {
    max-width: 500px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

input[type="checkbox"] {
    margin-right: 5px;
}

button[type="submit"] {
    background-color: #cc2323;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0c1026;
}

.box {
    width: 33.3%;
    background:#2c2d2e61;
}

section {
    display: flex;
    flex-wrap: wrap; /* Allow flex items to wrap to the next line */
    justify-content: space-between; /* Distribute flex items evenly */
}

.container1 a {
    display: inline-block;
    width: 100%;
    max-width: 44%; /* Maximum width for each item */
    margin-bottom: 10px; /* Add some space between items */
    text-align: center;
    text-decoration: none;
    padding: 10px 10px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.back_btn {
    display: ruby-text;
    float: right;
    padding: 2px;
    width: 100px;
    background: #ffffff00;
    border: 1px solid;
    border-radius: 10px;
    font-size: medium;
}

    </style>
</head>
<body>
<h1>Todo List <a class="back_btn" href="{{ route('todos.create') }}">Create</a></h1>
<section>
@foreach ($todos as $todo)
    <div class="box">
        <h3>Title:   {{ $todo->title }}</h3>
        <p>Description:  {{ $todo->description }}</p>
        <p>Status: {{ $todo->completed ? 'Completed' : 'Incomplete' }}</p>
        <div class="container1">
        <a href="{{ route('todos.show', $todo->id) }}">View</a>
        <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
    </div>
    <br>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
</section>
</body>
</html>