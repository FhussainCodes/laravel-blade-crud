!<!DOCTYPE html>
<html>

<head>

    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    @include('partials.header')

    @include('partials.navbar')

    <div class="container mt-5">

        @yield('content')

    </div>

    @include('partials.footer')

</body>

</html>