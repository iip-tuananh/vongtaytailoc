@extends('layouts.main.master')
@section('title')
{{$helpCus->title}}
@endsection
@section('description')
@endsection
@section('css')
<link href="{{asset('frontend/css/bean-pages.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 a-left">
            <ul class="breadcrumb" itemtype="https://schema.org/BreadcrumbList">
                <li class="home">
                <a itemprop="item" href="{{route('home')}}" title="Trang chủ">
                    <span itemprop="name">Trang chủ</span>
                    <meta itemprop="position" content="1" />
                </a>
                <span class="mr_lr">&nbsp;&raquo;&nbsp;</span>
                </li>
                <li itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                <strong>
                    <span itemprop="name">{{$helpCus->title}}</span>
                    <meta itemprop="position" content="2" />
                </strong>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>
<section class="page">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="page-title category-title">
                <h1 class="title-head text-center">{{$helpCus->title}}</h1>
            </div>
            <div class="content-page rte">
                {!!$helpCus->content!!}
            </div>
        </div>
    </div>
    </div>
</section>
@endsection