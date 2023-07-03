@extends('dashboard.layouts.app')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">

            </div>

            <div class="content-body"><!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">


                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">

                                    <form action="{{ route('dashboard.categories.store') }}" method="post"
                                          enctype="multipart/form-data"
                                          id="" class="form-main">

                                        {{ csrf_field() }}
                                        {{ method_field('post') }}
                                        <div class="card-header d-flex justify-content-between">
                                            <h5>@lang('site.add') </h5>
                                            <div class="text-end  group-btn-top">
                                                <div class="form-group d-flex form-group justify-content-between">
                                                    <button type="button"
                                                            class="btn btn-pill btn-outline-primary btn-air-primary"
                                                            onclick="history.back();">
                                                        <!--<i class="fa fa-backward"></i> -->
                                                        @lang('site.back')
                                                    </button>
                                                    <button type="submit"
                                                            class="btn btn-air-primary btn-pill btn-primary"><i
                                                            class="fa fa-plus"></i>
                                                        @lang('site.adds')</button>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="card-body">
                                            @include('partials._errors')


                                            <div class="row">

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.ar.name')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                           value="{{ old('name_ar') }}"
                                                           required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.en.name')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_en" class="form-control"
                                                           value="{{ old('name_en') }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.status')</label>
                                                    <select name="status" class="form-control select2">
                                                        <option disabled selected>@lang('site.select')</option>
                                                        <option value="1">
                                                            @lang('site.active')
                                                        </option>
                                                        <option value="0">
                                                            @lang('site.noactive')
                                                        </option>

                                                    </select>


                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.image')</label>
                                                    <input type="file" name="image" class="form-control"
                                                           value="{{ old('image') }}">


                                                </div>


                                            </div>


                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>
                        <!--/ Company Table Card -->


                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    </div>

@endsection



