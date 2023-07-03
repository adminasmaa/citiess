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

                    <h4>@lang('site.blocks')

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

                                                <form action="{{ route('dashboard.blocks.update',$block->id) }}" method="post"
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
<!--{{--                                                            <h4 class="card-title">@lang('site.zones')</h4>--}}-->
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.ar.name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="name_ar" class="form-control"
                                                                       value="{{ $block->name_ar }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.en.name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="name_en" class="form-control"
                                                                       value="{{ $block->name_en }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.units_number')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="units_number" class="form-control"
                                                                       value="{{ $block->units_number }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.type')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="type" class="form-control"
                                                                       value="{{ $block->type }}" required>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-6 form-group col-12 p-2">

                                                            <label>@lang('site.zone')</label>
                                                            <span class="text-danger">*</span>
                                                            <select class="form-control" name="zone_id">
                                                                <option value="0">@lang('site.select') </option>
                                                                @foreach($zones as $zone)
                                                                    <option value="{{$zone->id}}" @if($block->zone_id==$zone->id)  selected @endif>{{$zone->name}}</option>


                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="row m-0">
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.ar.description')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="description_ar"
                                                                          class="form-control"
                                                                          cols="4" rows="4">{{$block->description_ar ?? ''}}</textarea>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.en.description')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="description_en"
                                                                          class="form-control"
                                                                          cols="4" rows="4">{{$block->description_en ?? ''}}</textarea>
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

