@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <div><img src="jpg/user_photo.png" style="height:125px;" class="rounded-circle"></div>
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href='#'>Add New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>0</strong> Posts</div>
                <div class="pr-5"><strong> 0</strong> Followers</div>
                <div class="pr-5"><strong> 0</strong> Following</div>
                <div class="pr-5"><strong> 0</strong> Donations</div>
            </div>
            <div class="pt-3"><strong>{{$user->profile->title}}</strong> </div>
            <div class="pt-1">{{$user->profile->description}}</div>
            <div class="pt-1">{{$user->profile->url }}</div>

        </div>
        <div class="row pt-5 d-flex">
            <div class="col-4 pr-5">
                <img src="jpg/poza1.jpg" style="height:200px;">
            </div>
            <div class="col-4 pr-5">
                <img src="jpg/poza2.png" style="height:200px;">
            </div>
            <div class="col-4 pr-5">
                <img src="jpg/poza3.jpg" style="height:200px;">
            </div>

            +
        </div>
        @endsection