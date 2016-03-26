<?php
    $assetPath = '/ayim/quickadmin';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ \Config::get('quickadmin.title') }}</title>
    @include('quickadmin::layout._meta')
    @include('quickadmin::layout._style')
    @include('quickadmin::layout._scriptsTop')
</head>
<body class="skin-{{ \Config::get('quickadmin.layout.skin') }} {{ \Config::get('quickadmin.layout.options') }}">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        @include('quickadmin::layout.partials.logo')
        @include('quickadmin::layout.partials.navbar.navbar')
    </header>

    @include('quickadmin::layout.partials.sidebar.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('quickadmin::layout.partials.page-header')
        <!-- Main content -->
        <section class="content">
            @include('quickadmin::layout.partials.flash')
            {!! $content or 'Please set content' !!}
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('quickadmin::layout.partials.footer')

</div><!-- ./wrapper -->

    @include('quickadmin::layout._scripts')
</body>
</html>