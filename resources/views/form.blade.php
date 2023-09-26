<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
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
    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form method="POST" action="/form" enctype="multipart/form-data">
                                @csrf
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="example@example.com" name="email">
                                            @error('email')
                                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <hr class="mx-n3">
        
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Password</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password">
                                            @error('password')
                                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter name" name="name">
                                            @error('name')
                                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Float</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" class="form-control form-control-lg" id="float" placeholder="50.00" name="float">
                                            @error('float')
                                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">
                                          <h6 class="mb-0">Upload Image</h6>
                                        </div>
                                            <div class="col-md-9 pe-5">
                                            <input type="file" class="form-control form-control-lg" id="image" name="image" accept="image/*">
                                            @error('image')
                                            <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                                            @enderror
                                            <div class="small text-muted mt-2">Upload your image in .png, .jpg, or .jpeg (Max Size: 2MB)</div>
                                        </div>
                                    </div>
        
                                    <hr class="mx-n3">
        
                                    <div class="px-5 py-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
    ></script>
</body>
</html>
