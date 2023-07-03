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

                    <h4>@lang('site.installments')

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

                                                <form action="{{ route('dashboard.installments.update', $data->id) }}" method="post"
                                                      enctype="multipart/form-data">

                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
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
                                                                    @lang('site.add')</button>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <div class="card-body">

                                                        @include('partials._errors')



                                                        <div class="row m-0">
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.amount')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="number" name="amount" class="form-control"
                                                                       value="{{$data->amount }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.price')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="number" name="price" class="form-control"
                                                                       value="{{ $data->price }}" required>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.phone_one')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="phone_one"
                                                                       class="form-control"
                                                                       value="{{ $data->phone_one }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.phone_two')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="phone_two"
                                                                       class="form-control"
                                                                       value="{{ $data->phone_two }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.price_part_delay')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="number" name="price_part_delay"
                                                                       class="form-control"
                                                                       value="{{ $data->price_part_delay }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.delay_total')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="number" name="delay_total"
                                                                       class="form-control"
                                                                       value="{{ $data->delay_total }}">
                                                            </div>



                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.units')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="unit_id" required>
                                                                    <option
                                                                        value="0">@lang('site.select') @endlang</option>
                                                                    @foreach($units as $unit)
                                                                        <option
                                                                            value="{{$unit->id}}" @if($data->unit_id==$unit->id) selected @endif>{{$unit->name}}</option>

                                                                    @endforeach
                                                                </select>
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


