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

                    <h4>@lang('site.employees')

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

                                                <form action="{{ route('dashboard.employees.update',$client->id) }}"
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


                                                                <label>@lang('site.first_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="first_name"
                                                                       class="form-control"
                                                                       value="{{$client->first_name ?? '' }}" required>
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.father_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="father_name"
                                                                       class="form-control"
                                                                       value="{{$client->father_name ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.grand_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="grand_name"
                                                                       class="form-control"
                                                                       value="{{$client->grand_name ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.mother_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="mother_name"
                                                                       class="form-control"
                                                                       value="{{$client->mother_name ?? '' }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.address')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="address"
                                                                       class="form-control"
                                                                       value="{{$client->address ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.gender')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="gender">
                                                                    <option
                                                                        value="0">@lang('site.select')</option>
                                                                    <option
                                                                        value="male" @if($client->gender=='male') selected @endif>@lang('site.male') </option>
                                                                    <option
                                                                        value="female" @if($client->gender=='female') selected @endif>@lang('site.female')</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.status')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="status">
                                                                    <option
                                                                        value="0">@lang('site.select')</option>
                                                                    <option value="Single" @if($client->status=='Single') selected @endif>
                                                                        @lang('site.Single')
                                                                    </option>
                                                                    <option value="Married" @if($client->status=='Married') selected @endif>
                                                                        @lang('site.Married')
                                                                    </option>

                                                                    <!--<option value="Separate" @if($client->status=='Separate') selected @endif>-->
                                                                    <!--    @lang('site.Separate')-->
                                                                    <!--</option>-->

                                                                    <!--<option value="Widower" @if($client->status=='Widower') selected @endif>-->
                                                                    <!--    @lang('site.Widower')-->
                                                                    <!--</option>-->


                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                       value="{{$client->date ?? '' }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.placebirth')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="placebirth"
                                                                       class="form-control"
                                                                       value="{{$client->placebirth ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.email')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="email" name="email" class="form-control"
                                                                       value="{{$client->email ?? '' }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.phone')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="phone" class="form-control"
                                                                       value="{{$client->phone ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.last_certificale')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="last_certificale"
                                                                       class="form-control"
                                                                       value="{{$client->last_certificale ?? '' }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.calculayed_certificale')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="calculayed_certificale"
                                                                       class="form-control"
                                                                       value="{{$client->calculayed_certificale ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.notes')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="notes"
                                                                          class="form-control"
                                                                          cols="4" rows="4">   {{$client->notes ?? '' }}</textarea>
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

