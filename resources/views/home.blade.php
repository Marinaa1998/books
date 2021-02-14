<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" href="https://iconarchive.com/download/i58917/wwalczyszyn/android-style-honeycomb/Books.ico" />
    <title>Knjige</title>
</head>

<body>
    <style>
        body {
            background-image: url('https://static01.nyt.com/images/2019/12/17/books/review/17fatbooks/17fatbooks-superJumbo.jpg');
        }
    </style>
    <div class='container'>
        <div class='row mt-2'>
            <div class='col-12'>
                <h1 class='text-center text-white bg-success'>Spisak knjiga</h1>
            </div>
        </div>
        @foreach($chunks as $chunk)
        <div class="row mt-5 d-flex justify-content-center">
            @foreach($chunk as $book)
            <div class="col-3 bg-light mr-5 pt-5" align="center">
                <img src="{{$book['img']}} " width="200" height="250">
                <h4>{{$book['title']}}</h4>

                <a href="/book/{{$book->id}}">
                    <button class=" btn form-control btn-dark mb-2">Izmeni</button>
                </a>

            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</body>

</html>