@extends('layouts.dashboard.app')

@section('content')







<section class="dashboard-section body-collapse">
    <div class="overlay mt-80">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row align-items-center row">
                    <div class="col-6">
                        <h3>@lang('site.cities')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome') }}">
                                    <!--@lang('site.dashboard')-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a hhref="{{ route('dashboard.cities.index') }}">
                                    @lang('site.cities') </a>
                            </li>
                            <li class="breadcrumb-item active"><a> @lang('site.edit') </a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <form action="{{ route('dashboard.cities.update', $city->id) }}" method="post"
                            enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="card-header d-flex justify-content-between">
                                <h5>@lang('site.edit') </h5>
                                <div class="text-end  group-btn-top">
                                    <div class="form-group d-flex form-group justify-content-between">
                                        <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                            onclick="history.back();">
                                            <!--<i class="fa fa-backward"></i> -->
                                            @lang('site.back')
                                        </button>
                                        <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                                class="fa fa-plus"></i>
                                            @lang('site.edit')</button>
                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                <!--<h4 class="card-title">@lang('site.cities')</h4>-->
                                @include('partials._errors')

                                <!--<form action="{{ route('dashboard.cities.update', $city->id) }}"-->
                                <!--      method="post" enctype="multipart/form-data">-->

                                <!--    {{ csrf_field() }}-->
                                <!--    {{ method_field('put') }}-->

                                <div class="row">
                                    <div class="col-md-6">


                                        <label>@lang('site.ar.name')</label>
                                        <input type="text" name="name_ar" class="form-control"
                                            value="{{ $city->name_ar ?? '' }}">
                                    </div>
                                    <div class="col-md-6">

                                        <label>@lang('site.en.name')</label>
                                        <input type="text" name="name_en" class="form-control"
                                            value="{{ $city->name_en ?? '' }}">
                                    </div>


                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <label>@lang('site.country')</label>
                                        <select class="form-control" name="country_id">
                                            <option selected> @lang('site.select')</option>
                                            @foreach(\App\Models\Country::get() as $country)
                                            <option value="{{$country->id}}" @if($city->country_id ==$country->id)
                                                selected
                                                @endif> {{$country->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <br>


                                <!--<div class="text-end  group-btn-top">-->
                                <!--    <div class="form-group">-->
                                <!--        <button type="button" class="btn btn-warning mr-1"-->
                                <!--                onclick="history.back();">-->
                                <!--            <i class="fa fa-backward"></i> @lang('site.back')-->
                                <!--        </button>-->
                                <!--        <button type="submit" class="btn btn-primary"><i-->
                                <!--                class="fa fa-plus"></i>-->
                                <!--            @lang('site.edit')</button>-->
                                <!--    </div>-->
                                <!--</div>-->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</section>



@endsection