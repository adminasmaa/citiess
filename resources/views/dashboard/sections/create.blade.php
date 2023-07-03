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

                    <h4>@lang('site.sections')

                    </h4>
                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <!-- Individual column searching (text inputs) Starts-->
                                        <div class="col-sm-12">
                                            <div class="card">

                                                <form action="{{ route('dashboard.sections.store') }}"
                                                      method="post"
                                                      enctype="multipart/form-data">

                                                    {{ csrf_field() }}
                                                    {{ method_field('post') }}

                                                    <div class="card-header d-flex justify-content-between">
                                                        <h5>@lang('site.add') </h5>
                                                        <div class="text-end  group-btn-top">
                                                            <div
                                                                class="form-group d-flex form-group justify-content-between">
                                                                <button type="button"
                                                                        class="btn btn-pill btn-outline-primary btn-air-primary"
                                                                        onclick="history.back();">
                                                                    <!--<i class="fa fa-backward"></i>-->
                                                                    @lang('site.back')
                                                                </button>
                                                                <button type="submit"
                                                                        class="btn btn-air-primary btn-pill btn-primary">
                                                                    <i
                                                                        class="fa fa-plus"></i>
                                                                    @lang('site.adds')</button>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="card-body">

                                                        @include('partials._errors')


                                                        <div class="row m-0">

                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.jod_id')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="jod_id"
                                                                       class="form-control"
                                                                       value="{{ old('jod_id') }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.emlpoyeesname')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="employee_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach($emlpoyees as $emlpoyee)
                                                                        <option
                                                                            value="{{$emlpoyee->id}}">{{$emlpoyee->first_name.$emlpoyee->father_name}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.section')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="section"
                                                                       class="form-control"
                                                                       value="{{ old('section') }}" required>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.position')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="position"
                                                                       class="form-control"
                                                                       value="{{ old('position') }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.career_title')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="career_title"
                                                                       class="form-control"
                                                                       value="{{ old('career_title') }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.workplace')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="workplace"
                                                                       class="form-control"
                                                                       value="{{ old('workplace') }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.contract')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="contract"
                                                                       class="form-control"
                                                                       value="{{ old('contract') }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.jurisdiction')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="jurisdiction"
                                                                       class="form-control"
                                                                       value="{{ old('jurisdiction') }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.status')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="status">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    <option value="active">@lang('site.active')</option>
                                                                    <option
                                                                        value="noactive">@lang('site.noactive')</option>

                                                                </select>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                       value="{{ old('date') }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.notes')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="notes"
                                                                          class="form-control"
                                                                          cols="4" rows="4"></textarea>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                            </div>


                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                        <!-- Individual column searching (text inputs) Ends-->
                                    </div>

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

@endsection

