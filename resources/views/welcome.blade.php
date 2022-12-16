<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            @section('content')
  <!-- CAROUSEL -->
  <div id="myCarousel" class="carousel slide carousel-fade mb-0" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-cover">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="vivify driveInLeft delay-500 display-4">{{ trans('slider.slider_1_title') }}</h1>
            <p class="vivify fadeInBottom delay-600">{{ trans('slider.slider_1_subtitle') }}</p>
            <p class="vivify fadeInRight"><a class="btn btn-lg btn-primary" href="{{ url('campaigns/latest') }}" role="button">{{ trans('misc.explore_campaigns') }}</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-cover">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="vivify fadeInTop delay-600 display-4">{{ trans('slider.slider_2_title') }}</h1>
            <p class="vivify fadeInBottom delay-600">{{ trans('slider.slider_2_subtitle') }}</p>
            <p class="vivify fadeInLeft"><a class="btn btn-lg btn-primary" href="{{ url('campaigns/latest') }}" role="button">{{ trans('misc.explore_campaigns') }}</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-cover">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="vivify fadeInBottom delay-600 display-4">{{ trans('slider.slider_3_title') }}</h1>
            <p class="vivify fadeInTop delay-600">{{ trans('slider.slider_3_subtitle') }}</p>
            <p class="vivify fadeInRight"><a class="btn btn-lg btn-primary" href="{{ url('campaigns/latest') }}" role="button">{{ trans('misc.explore_campaigns') }}</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- ./ CAROUSEL -->


  <div class="section py-5">
    <div class="btn-block text-center mb-5">
      <h1>{{trans('misc.browse_by_category')}}</h1>
      <p>
        {{trans('misc.categories_subtitle')}}
      </p>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-theme">
          
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Campaigns -->
  <div class="section py-5">
    <div class="btn-block text-center mb-5">
      <span class="display-4 text-warning"><i class="fa fa-award"></i></span>
      <h1>{{ trans('misc.featured_campaign') }}</h1>
      <p>
        {{ trans('misc.featured_campaigns_subtitle') }}
      </p>
    </div>
    <div class="container">
      <div class="row">
       
      </div>
    </div>

    <div class="btn-block text-center py-3">
      <a href="{{ url('campaigns/featured') }}" class="btn btn-primary btn-main p-2 px-5 btn-lg rounded">
              {{ trans('misc.view_all') }} <small class="pl-1"><i class="fa fa-long-arrow-alt-right"></i></small>
            </a>
    </div>
  </div>

    <!-- New Campaigns
    ========================= -->
    <div class="section py-5">
      <div class="btn-block text-center mb-5">
        <h1>{{trans('misc.explore_new_campaign')}}</h1>
        <p>
          {{trans('misc.recent_campaigns')}}
        </p>
      </div>
      <div class="container">
        <div class="row">
        </div>
      </div>

      
      <div class="btn-block text-center py-3">
      <a href="{{ url('campaigns/latest') }}" class="btn btn-primary btn-main p-2 px-5 btn-lg rounded">
              {{ trans('misc.view_all') }} <small class="pl-1"><i class="fa fa-long-arrow-alt-right"></i></small>
            </a>
      </div>
    </div>

    <!-- Counter -->
    <div class="py-5 bg-success text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
              <span class="mr-3 display-4"><i class="fa fa-users align-baseline"></i></span>
              <div>
                <h3 class="mb-0"></h3>
                <h5 class="font-weight-light text-uppercase">{{trans('misc.members')}}</h5>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
              <span class="mr-3 display-4"><i class="fa fa-bullhorn align-baseline"></i></span>
              <div>
                <h3 class="mb-0"></h3>
                <h5 class="font-weight-light text-uppercase">{{trans('misc.campaigns')}}</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
              <span class="mr-3 display-4"><i class="fa fa-hand-holding-usd align-baseline"></i></span>
              <div>
                <h3 class="mb-0"></h3>
                <h5 class="font-weight-light text-uppercase">{{trans('misc.funds_raised')}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="py-5 mb-5">
		<div class="text-center">
			<div class="btn-block">
	    			<i class="fa fa-bullhorn display-4"></i>
	    		</div>

	    		<h3 class="my-3">
	    	
	    	</h3>
        <a class="btn btn-primary p-2 px-5 btn-lg" href="{{url('create/campaign')}}" role="button">{{trans('misc.create_campaign')}}</a>
		</div>
	</div>

  <div class="jumbotron m-0 text-white text-center position-relative rounded-0">
    <div class="parallax-cover bg-cover"></div>
    <div class="container position-relative">
      <h1></h1>
      <p></p>
      <p><a class="btn btn-primary p-2 px-5 btn-lg" href="{{url('create/campaign')}}" role="button">{{trans('misc.create_campaign')}}</a></p>
    </div>
  </div>
        </div>
    </body>
</html>
