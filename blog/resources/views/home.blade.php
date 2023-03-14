<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Routing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    {{-- <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            @foreach ($pages as $page)
              <li class="nav-item"><a href="/{{$page}}" class="nav-link" aria-current="page">{{$page}}</a></li>
            @endforeach
          </ul>
        </header>
      </div> --}}
      @include('navigation');

    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="data:image/png;base64,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" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
      </div>
    </div>
</body>
</html>