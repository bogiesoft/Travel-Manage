<?php use App\Components\Util; ?>
@extends('frontend.layouts.app')

@section('title') | Things to do @endsection

@section('css')
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
@endsection

@section('content')
  <div class="container_12">
    <div style="margin-top:10px;">
        @include('flash::message')
    </div>
    <div class="col col-lg-8">
      <h2 class="head2">THINGS TO DO IN HANOI - INSPIRE YOUR TRIP TO HANOI, VIETNAM</h2>
      <div class="clear"></div>
      @foreach($activities as $activity)
      <div class="news"> 
        <img style="width: 200px; height: 150px;" src="@foreach($data_images as $image) @if($activity->id===$image->activities_id) {!! url(config('path.upload_img').$image->name) !!} @endif @endforeach" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <h3 style="font-size: 22px;">{{ $activity->title }}</h3>
          <p>{{ Util::theExcerpt($activity->describe, 200) }}</p>
          <a href="{!! route('things-to-do.show', [$activity->id]) !!}" class="btn">More</a> </div>
      </div>
        <div class="clear"></div>
      @endforeach
    </div>
    <div class="col col-lg-3 col-lg-offset-1">
      <h2 class="head2">Things to do</h2>
      <ul class="list l1">
      @foreach($types as $type)
        <li><a href="{{route('activities.filter',$type->types_id)}}">{{ $type->types->name }}</a></li>
      @endforeach
      </ul>
    </div>
    <div class="clear"></div>
   </div>
@endsection

@section('scripts')

@endsection
