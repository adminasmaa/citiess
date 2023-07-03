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

                    <h4>@lang('site.invoices')

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

                                                <form action="{{ route('dashboard.invoices.store') }}" method="post"
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
                                                            {{--                                                            <h4 class="card-title">@lang('site.clients')</h4>--}}
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.paymentamount')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="amount" class="form-control"
                                                                        required>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.installmenttype')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="type">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    <option value="Advance Payment" >@lang('site.Advance Payment')</option>
                                                                    <option value="First Payment" >@lang('site.First Payment')</option>
                                                                    <option value="Second Payment" >@lang('site.Second Payment')</option>
                                                                    <option value="Third Payment" >@lang('site.Third Payment')</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.currency')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="currency">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    <option value="iraqiDinor" >@lang('site.iraqiDinor')</option>
                                                                    <option value="dollar" >@lang('site.dollar')</option>

                                                                </select>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoicenumber')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="number" name="number" class="form-control"
                                                                >
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                    >
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

