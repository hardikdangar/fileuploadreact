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
                            <div class="image-upload float-right">
                                <label for="file-input">
                                    Upload <img src="/Icon.png"/>
                                </label>
                                <input id="file-input" type="file"/>
                            </div>
                        </h6>
                        <ul class="nav flex-column flex-nowrap text-truncate">
                            <li class="nav-item active">
                                <a class="nav-link bold" href="#" >Document #1</a>
                                <a class="nav-link" href="#">Me, Dustin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold" href="#" >Document #2</a>
                                <a class="nav-link" href="#">Me, Dustin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold" href="#" >Document #3</a>
                                <a class="nav-link" href="#">Me, Dustin</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3">
                    <h3>Content..</h3>
                    <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape
        swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade
        ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh
        synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>

        <p>Ethical Kickstarter PBR
        asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan
        Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
        readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy
        leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
        forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
