<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NCR Financial Services - Admin Portal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/dist_admin/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
 
</head>
<body class="hold-transition login-page">

    <div class="login-box">

        <div class="login-logo">
            <a href=""><img src="{{url('public/images/ncrlogo.png')}}"></a>
        </div>

        <div class="card">
            <div id="show_loader" class="loader" style='display:none;'>
                <div class="centered-loader">
                    <div><img src="{{url('public/images/loader.svg')}}" width="50" height="50"></div>
                </div>
            </div>