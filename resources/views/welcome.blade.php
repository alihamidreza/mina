<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>میناهاب | موتور جستوجو برنامه نویسی</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
</head>
<body>
<div id="app">
    {{--<div class="backimage">--}}
    {{--</div>--}}
    <div class="mt-5 col-md-12">
        <div class="text-right float-right col-md-4 col-sm-4 col-xs-3 pl-4">
            <md-button class="md-icon-button">
                <md-icon class="material-icons pointer gray-color">more_vert</md-icon>
            </md-button>

        </div>
        <div class="text-center float-right col-md-4 col-sm-4 col-xs-3">
            <a href="/" class="font-weight-bold logo effect-shine">
                <span style="color: #e67e22 !important;">Mina</span>hub
            </a>
        </div>
        <div class="text-left float-right col-md-4 col-sm-4 col-xs-3 pr-4">

            <md-menu md-size="medium mr-4 box-shadow" md-align-trigger>
                <md-button class="md-icon-button" md-menu-trigger>
                    <md-icon class="material-icons pointer gray-color">apps</md-icon>
                </md-button>
                <md-menu-content class="dropdown addFont">
                    <div class="col-md-12 com-xs-12 col-sm-12">
                        <div class="col-md-6 col-xs-12 col-sm-6 float-right dropdown-item1">
                            <a href="#">
                             <div class="textAligneCenter">
                                <md-icon class="color-orange icon-font">note</md-icon>
                                <md-menu-item class="addFont font-weight-bold s-color">مقالات</md-menu-item>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6 float-right dropdown-item1">
                            <a href="#">
                             <div class="textAligneCenter">
                                <md-icon class="color-orange icon-font">school</md-icon>
                                <md-menu-item class="addFont font-weight-bold s-color">دوره ها</md-menu-item>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6 float-right dropdown-item1">
                            <a href="#">
                             <div class="textAligneCenter">
                                <md-icon class="color-orange icon-font">movie</md-icon>
                                <md-menu-item class="addFont font-weight-bold s-color">فیلم ها</md-menu-item>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6 float-right dropdown-item1">
                            <a href="#">
                             <div class="textAligneCenter">
                                <md-icon class="color-orange icon-font">mic</md-icon>
                                <md-menu-item class="addFont font-weight-bold s-color">پادکست ها</md-menu-item>
                            </div>
                            </a>
                        </div>
                    </div>
                </md-menu-content>
            </md-menu>
        </div>
    </div>
    <div class="fixed">
        <div class="center-align">

            <div class="mb-4 col-md-12">
                <div class="btn-group">
                    <div class="btn-orange btn english-check">
                        <md-checkbox class="float-right pull-right"></md-checkbox>
                        <span>انگلیسی</span>
                    </div>
                    <div class="btn-orange btn farsi-check">
                        <md-checkbox class="float-left pull-left"></md-checkbox>
                        <span>فارسی</span>
                    </div>
                </div>
            </div>
            <div class="search-engine box-shadow">
                <input type="text" class="input-search font-weight-bold d-inline" placeholder="فکر نکن جستوجو کن . . ." style="padding: 5px !important;">
                <div class="search-btn d-inline">
                    <md-icon>search</md-icon>
                </div>
            </div>

        </div>
    </div>
    <div class="footer2">
        <div class="search-footer">
        <span>
 © تمام حقوق میناهاب محفوظ است
        </span>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
