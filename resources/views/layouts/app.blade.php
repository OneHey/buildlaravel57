<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        .flag-country{
            height: 15px;
        }
        .flag-country img{
            height: 100%;
        }
    </style>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="row" style="padding-bottom: 8px;">
    <div class="col-md-11">

    </div>
    <div class="col-md-1" style="float: right;">
        <div class="flag-country">
            <a href="{{ route('locale',['locale' => 'vi']) }}"><img src="{{asset('assets/images/vietnam.jpg')}}" alt=""></a>
            <a href="{{ route('locale',['locale' => 'en']) }}"><img src="{{asset('assets/images/english.jpg')}}" alt=""></a>
        </div>
    </div>

</div>

<div id="wrapper">

@include('partials.topbar')
@include('partials.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @if(isset($siteTitle))
                <h3 class="page-title">
                    {{ $siteTitle }}
                </h3>
            @endif

            <div class="row">
                <div class="col-md-12">

                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')

                </div>
            </div>
        </section>
    </div>
</div>

{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}

@include('partials.javascripts')
</body>
</html>