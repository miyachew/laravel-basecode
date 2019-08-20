@extends('layout.root' )

@section('metadata')
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('title')
    {{ config('site.name') }} | Admin | Dashboard
@stop

@section('header')
    Overview
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner text-center">
                    <h4><i class="fa fa-user"></i>
                        <span>{{ __('app.side_bar.overview-user-breakdown') }}</span></h4>
                </div>
                
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner text-center">
                    <h4><i class="fa fa-comment"></i>
                        <span>{{ __('app.side_bar.overview-posts-breakdown') }}</span></h4>
                </div>
              
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner text-center">
                    <h4><i class="fa fa-store"></i>
                        <span>{{ __('app.side_bar.overview-store-details') }}</span></h4>
                </div>
              
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner text-center">
                    <h4><i class="fa fa-star"></i>
                        <span>{{ __('app.side_bar.overview-points-and-slots') }}</span></h4>
                </div>
              
            </div>
        </div>
    </div>
@stop
