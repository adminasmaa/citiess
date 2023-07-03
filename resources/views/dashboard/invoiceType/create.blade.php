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

                    <h4>@lang('site.invoiceType')

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

                                                <form action="{{ route('dashboard.invoiceType.store') }}" method="post"
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


                                                                <label>@lang('site.invoice_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="invoice_name"
                                                                       class="form-control"
                                                                       value="{{ old('invoice_name') }}" required>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoice_type')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="invoice_type">
                                                                    <option
                                                                        value="0">@lang('site.select')</option>
                                                                    <option
                                                                        value="water">@lang('site.water') </option>
                                                                    <option value="electricity">@lang('site.electricity')</option>
                                                                    <option value="theinternet">@lang('site.theinternet')</option>

                                                                </select>
                                                            </div>








                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoice_price')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="invoice_price" class="form-control"
                                                                       value="{{ old('invoice_price') }}">
                                                            </div>
                                                            
                                                            
                                                            <!--<div class="col-md-6 form-group col-12 p-2">-->

                                                            <!--    <label>@lang('site.invoice_date')</label>-->
                                                            <!--    <span class="text-danger">*</span>-->
                                                            <!--    <input type="date" name="date"-->
                                                            <!--           class="form-control"-->
                                                            <!--           value="{{ old('invoice_date') }}">-->
                                                            <!--</div>-->


<!--
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.client')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="client_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach(\App\Models\Client::all() as $client)
                                                                        <option
                                                                            value="{{$client->id}}">{{$client->name ?? ''}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
-->

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                            </div>


                                                        </div>

                                                        <br>


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
</div>
@endsection

