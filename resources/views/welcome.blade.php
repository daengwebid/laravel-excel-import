<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bulk Import Laravel Excel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="padding-top: 30px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-success">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="">File (.xls, .xlsx)</label>
                                <input type="file" class="form-control" name="file">
                                <p class="text-danger">{{ $errors->first('file') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</body>
</html>