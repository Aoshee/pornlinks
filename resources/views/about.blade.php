@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>Build Information</p>
        <dt>Version: {{env('PORN_VERSION')}}</dt>
        <dt>Release date: {{env('PORN_RELDATE')}}</dt>
        <dt>App Install: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('PORN_GENERATED_AT')}}<dt>
    </dl>
    @endif

    <p>{{env('APP_NAME')}} is minimalist link shortening platform.
        <br />PORN is licensed under the BreakTeam - Leader by Aishee Nguyen.
    </p>
</div>
@endsection

@section('js')
<script src='/js/about.js'></script>
@endsection
