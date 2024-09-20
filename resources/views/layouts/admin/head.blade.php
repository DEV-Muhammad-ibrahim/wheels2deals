<!DOCTYPE html>
<html lang="en" data-bs-theme="light">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Qoduby - Admin & Dashboard template by tempload." />
    <meta name="keywords"
        content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates" />
    <meta name="author" content="tempload" />
    <title>{{ ucfirst(str_replace('_', ' ', Route::currentRouteName())) }} | Wheels2Deal</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Global CSS -->
    <link href="{{ asset('adminAssets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Light-Dark Mode & Theme Direction Selector -->
    <script src="{{ asset('adminAssets/js/theme.js') }} crossorigin=" anonymous"></script>
</head>
