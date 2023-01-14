@extends('layouts.main')

@section('title', 'Recent Project')

@section('content')

    <div class="container" style="margin-top: 100px;margin-bottom: 100px;">

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/img/basement-1.jpg" style="width: 200px; margin: 8px;border-radius: 10px;">
                <img src="/img/basement-2.jpg" style="width: 200px; margin: 8px;border-radius: 10px;">
                <img src="/img/basement-3.jpg" style="width: 200px; margin: 8px;border-radius: 10px;">
                <img src="/img/basement-4.jpg" style="width: 200px; margin: 8px;border-radius: 10px;">
                <img src="/img/basement-5.jpg" style="width: 200px; margin: 8px;border-radius: 10px;">
            </div>

            <div class="col-md-6 text-center">
                <video controls muted style="height: 800px">
                    <source src="/img/video.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </div>

@endsection
