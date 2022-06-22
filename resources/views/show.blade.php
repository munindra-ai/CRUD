<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>show</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

table, td, th {
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         <a href="create">ADD </a> <br/>  <br/>
         {{session('msg')}}
        <table >
            <tr>
                <td>id</td>
                <td>name</td>
                <td>created at</td>
                <td>Action</td>
            </tr>
            @foreach($data as $crud)
            <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->created_at}}</td>
                <td>{{$crud->Action}}
                    <a href="delete/{{$crud->id}}">DELETE</a>
                <a href="edit/{{$crud->id}}">EDIT</a></td>
            </tr>

            @endforeach

           </table>
        </div>
    </body>
</html>
