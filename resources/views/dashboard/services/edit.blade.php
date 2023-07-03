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

                    <h4>@lang('site.services')

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

                                                <form action="{{ route('dashboard.services.update',$service->id) }}"
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


                                                                <label>@lang('site.services_type')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="services_type"
                                                                       class="form-control"
                                                                       value="{{ $service->services_type ?? '' }}" required>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.emlpoyeesname')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="employee_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach($emlpoyees as $emlpoyee)
                                                                        <option
                                                                            value="{{$emlpoyee->id}}"  @if($service->employee_id==$emlpoyee->id)  selected @endif> {{$emlpoyee->first_name.$emlpoyee->father_name}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.description')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="description"
                                                                       class="form-control"
                                                                       value="{{$service->description ?? ''}}">
                                                            </div>





                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                       value="{{$service->date ?? ''}}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.time')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="time"
                                                                       class="form-control"
                                                                       value="{{ $service->time ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.client')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="client_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach($clients as $client)
                                                                        <option
                                                                            value="{{$client->id}}" @if($service->client_id==$client->id)  selected @endif>{{$client->name ?? ''}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.unit')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="unit_id">
                                                                    <option value="0">@lang('site.select')</option>
                                                                    @foreach($units as $unit)
                                                                        <option
                                                                            value="{{$unit->id}}"   @if($service->unit_id==$unit->id)  selected @endif>{{$unit->name_en ?? ''}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.estimated_price')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="price"
                                                                       class="form-control"
                                                                       value="{{ $service->price ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.notes')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="notes"
                                                                          class="form-control"
                                                                          cols="4" rows="4">{{ $service->notes ?? '' }}</textarea>
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
</div>

@endsection

