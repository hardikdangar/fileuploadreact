<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">


    </head>
    <body>

        <div class="container-fluid fixed-top bg-primary py-3">
            <div class="row collapse show no-gutters d-flex h-100 position-relative">
                <div class="col-3 px-0 w-sidebar navbar-collapse collapse d-none d-md-flex">
                    <!-- spacer col -->
                </div>
                <div class="col px-3 px-md-0">
                    <h6 class="title">Document #1</h6>
                    <!-- toggler -->
                    <a data-toggle="collapse" href="#" data-target=".collapse" role="button" class="text-white p-1">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row collapse show no-gutters d-flex h-100 position-relative">
                <div class="col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar">
                    <!-- fixed sidebar -->
                    <div class="left navbar-dark bg-dark text-white position-fixed h-100 align-self-start w-sidebar">
                        <h6 class="px-3 pt-3 bold">Files
                            <div id="fileupload">
                                <Fileupload></Fileupload>
                            </div>
                        </h6>
                        <ul class="nav flex-column flex-nowrap text-truncate" id="filetree">

                        </ul>
                    </div>
                </div>
                <div class="col p-3" id="filereader">

                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
