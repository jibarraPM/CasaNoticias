@extends('../layout/' . $layout)

@section('head')
    <title>Error Page - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('content')
    <div class="container">
        <!-- BEGIN: Error Page -->
        <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            <div class="-intro-x lg:mr-20">
                <img alt="Rubick Tailwind HTML Admin Template" class="h-48 lg:h-auto" src="{{ asset('dist/images/error-illustration.svg') }}">
            </div>
            <div class="text-white mt-10 lg:mt-0">
                <div class="intro-x text-8xl font-medium">Proyecto Mapache</div>
                <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Página en construcción</div>
                <div class="intro-x text-lg mt-3">Temporalmente es el Inicio</div>
                <a class="intro-x btn py-3 px-4 text-white border-white dark:border-dark-5 dark:text-gray-300 mt-10" href="{{ route('login') }}">Ingresar</a>
            </div>
        </div>
        <!-- END: Error Page -->
    </div>
@endsection