<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <h1>Form Data</h1>
        @if($formData->isEmpty())
            <p>No form data available.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Float</th>
                        {{-- <th>Float Number</th> --}}
                        {{-- <th>Image</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($formData as $item)
                        <tr>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->float }}</td>
                            {{-- <td>{{ $item->float_number }}</td> --}}
                            {{-- <td>
                                @if($item->image_path)
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Image">
                                @else
                                    No image available
                                @endif
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
    ></script> 
</body>
</html>