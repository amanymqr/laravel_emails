

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> contact us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="container my-5">
        <h1>Contact us</h1>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('contact_us_data') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label >Name</label>
                <input class="form-control" type="text " placeholder="name" name="name">
            </div>

            <div class="mb-3">
                <label >Email</label>
                <input class="form-control" type="email " placeholder="email" name="email">
            </div>



            <div class="mb-3">
                <label >Phone</label>
                <input class="form-control" type="text " placeholder="phone" name="phone">
            </div>

            <div class="mb-3">
                <label>CV</label>
                <input name="cv" type="file" class="form-control" />
            </div>

            <div class="mb-3">
                <label >Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="message"></textarea>
            </div>


            <button class="btn btn-secondary w-100">Send</button>
        </form>



    </div>

</body>

</html>
