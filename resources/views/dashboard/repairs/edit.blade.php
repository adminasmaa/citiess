@extends('dashboard.layouts.app')


@section('content')

    <!-- BEGIN: Content-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">

                    <!--end::Card header-->
                    <!--begin::Card body-->
            <div class="content-body"><!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">

                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <!-- Individual column searching (text inputs) Starts-->
                                        <div class="col-sm-12">
                                            <div class="card">

                                                <form action="{{ route('dashboard.repairs.update',$data->id) }}"
                                                      method="post"
                                                      enctype="multipart/form-data">

                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}

                                                    <div class="card-header d-flex justify-content-between">
                                                        <h5>@lang('site.edit') </h5>
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
                                                                    @lang('site.edit')</button>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="card-body">

                                                        @include('partials._errors')


                                                        <div class="row m-0">

                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.servicetype')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="type"
                                                                       class="form-control"
                                                                       value="{{ $data->type  ?? ''}}" required>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.estimatedprice')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="price"
                                                                       class="form-control"
                                                                       value="{{$data->price ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.emlpoyeesname')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="employee_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach($emlpoyees as $emlpoyee)
                                                                        <option
                                                                            value="{{$emlpoyee->id}}"
                                                                            @if($data->employee_id==$emlpoyee->id) selected @endif>{{$emlpoyee->first_name.$emlpoyee->father_name}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.avaiabletime')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="time"
                                                                       class="form-control"
                                                                       value="{{ $data->time ?? '' }}">
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
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Modals-->

                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>


@endsection

