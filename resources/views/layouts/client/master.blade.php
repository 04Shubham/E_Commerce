<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title WhaFood')
    </title>

    @include('layouts.client.styles')
    

</head>

<body id="page-top">
    @include('layouts.client.nav')

    
    @yield('content')

    @include('layouts.client.footer')

    {{-- SCRIPTS --}}
   @include('layouts.client.scripts')
</body>

</html>
