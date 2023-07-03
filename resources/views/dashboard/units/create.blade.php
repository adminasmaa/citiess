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

                                    <form action="{{ route('dashboard.units.store') }}" method="post"
                                          enctype="multipart/form-data"
                                          id="" class="form-main">

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


                                            <div class="row form-group">

                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.zones')</label>
                                                    <span class="text-danger">*</span>
                                                    <select class="form-control" name="zone_id" id="zone_id">
                                                        <option value="0"> @lang('site.select')</option>

                                                        @foreach($zones as $zone)
                                                            <option
                                                                value="{{$zone->id}}">{{$zone->name ?? ''}}</option>

                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.blocks')</label>
                                                    <span class="text-danger">*</span>
                                                    <select class="form-control" name="block_id" id="block_id">
                                                        <option value="0"> @lang('site.select')</option>
                                                        {{--                                                                    @foreach($blocks as $block)--}}
                                                        {{--                                                                        <option--}}
                                                        {{--                                                                            value="{{$block->id}}">{{$block->name}}</option>--}}

                                                        {{--                                                                    @endforeach--}}
                                                    </select>
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.ar.name')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="name_ar" class="form-control"
                                                           value="{{ old('name_ar') }}" required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.en.name')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="name_en" class="form-control"
                                                           value="{{ old('name_en') }}">
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.units_number')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="units_number"
                                                           class="form-control"
                                                           value="{{ old('units_number') }}" required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.price')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="price"
                                                           class="form-control"
                                                           value="{{ old('price') }}" required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.number_floors')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="number" name="number_floors"
                                                           class="form-control"
                                                           value="{{ old('number_floors') }}" required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.area')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="area"
                                                           class="form-control"
                                                           value="{{ old('area') }}" required>
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.number_room')</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="number" name="number_room"
                                                           class="form-control"
                                                           value="{{ old('number_room') }}" required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.type')</label>
                                                    <span class="text-danger">*</span>

                                                    <select class="form-control" name="type" required>
                                                        <option
                                                            value="0">@lang('site.select') </option>

                                                        <option
                                                            value="one floor">@lang('site.one floor')
                                                        </option>

                                                        <option
                                                            value="two floor">@lang('site.two floor')
                                                        </option>

                                                        <option
                                                            value="Villas">@lang('site.Villas')
                                                        </option>


                                                    </select>
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.status')</label>
                                                    <span class="text-danger">*</span>
                                                    <select class="form-control" name="status" required>
                                                        <option
                                                            value="0">@lang('site.select') </option>

                                                        <option
                                                            value="Sold Unit">@lang('site.Sold Unit')
                                                        </option>

                                                        <option
                                                            value="Rented Unit">@lang('site.Rented Unit')
                                                        </option>

                                                        <option
                                                            value="Empty Unit">@lang('site.Empty Unit')
                                                        </option>

                                                        <option
                                                            value="Units Offered For Sale">@lang('site.Units Offered For Sale')
                                                        </option>

                                                    </select>
                                                </div>


                                            </div>

                                            <div class="row m-0">
                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.ar.description')</label>
                                                    <span class="text-danger">*</span>
                                                    <textarea type="text" name="description_ar"
                                                              class="form-control"
                                                              cols="4" rows="4"></textarea>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.en.description')</label>
                                                    <span class="text-danger">*</span>
                                                    <textarea type="text" name="description_en"
                                                              class="form-control"
                                                              cols="4" rows="4"></textarea>
                                                </div>


                                            </div>


                                        </div>


                                </div>

                                </form>


                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->
                </section>
            </div>
        </div>
    </div>


    </div>

    <!-- Dashboard Ecommerce ends -->

    </div>






    </div>

    </div>
@endsection

@section('scripts')

    <script>


        $('#zone_id').on('change', function (e) {
            var zone_id = e.target.value;


            $.get("{{url('dashboard/zoneSelectBlock')}}/" + zone_id, function (data) {
                console.log(data);
                $('#block_id').empty();
                $('#block_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#block_id').append('<option value="' + value.id + '">' + value.name_en + '</option>')

                });
            })
        })


    </script>
@endsection
