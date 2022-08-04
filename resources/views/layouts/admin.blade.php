<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>{{ $title }}</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/css/simplebar.css">
    <link rel="stylesheet" href="/css/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/css/style2.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="/css/examples.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
    </style>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
    </script>
    <link href="css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
    @if ( $title === 'Login' )
    <div>
        @yield('log')
    </div>
    @elseif ( $title === 'SignUp')
    <div>
        @yield('log')
    </div>
    @else
    @include('partials.sidebar')
    @include('partials.nav2')
    @yield('admin-page')
    @endif
    <!-- CoreUI and necessary plugins-->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/coreui.bundle.min.js"></script>
    <script src="/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/js/chart.min.js"></script>
    <script src="/js/coreui-chartjs.js"></script>
    <script src="/js/coreui-utils.js"></script>
    <script src="/js/main.js"></script>
    <script>
    function showpassword() {
        var show = document.getElementById("show");
        var x = document.getElementById("password");
        if (x.type === "password") {
            show.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
            x.type = "text";
        } else {
            show.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
            x.type = "password";
        }
    }

    document.addEventListener("trix-file-accept", event => {
        event.preventDefault()
    })

    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/berita/checkslug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>

</body>

</html>