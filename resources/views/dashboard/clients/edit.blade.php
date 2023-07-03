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

                    <h4>@lang('site.clients')

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

                                                <form action="{{ route('dashboard.clients.update',$client->id) }}" method="post"
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
{{--                                                            <h4 class="card-title">@lang('site.clients')</h4>--}}
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.client_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="name" class="form-control"
                                                                       value="{{ $client->name }}" required>
                                                            </div>
{{--                                                            <div class="col-md-6 form-group col-12 p-2">--}}

{{--                                                                <label>@lang('site.price')</label>--}}
{{--                                                                <span class="text-danger">*</span>--}}
{{--                                                                <input type="text" name="price" class="form-control"--}}
{{--                                                                       value="{{ $client->price }}">--}}
{{--                                                            </div>--}}


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.unit_type')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="type">
                                                                    <option value="0">Select Please</option>
                                                                    <option value="Rented" @if($client->type=='Rented') selected @endif>Rented</option>
                                                                    <option value="Sold" @if($client->type=='Sold') selected @endif>Sold</option>

                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.installment_amount')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="amount" class="form-control"
                                                                       value="{{ $client->amount ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.member')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="member" class="form-control"
                                                                       value="{{ $client->member ?? '' }}">
                                                            </div>


                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.Zone Name')</label>

                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="zone_id" id="zone_id">
                                                                    <option value="0">@lang('site.select') @endlang</option>
                                                                    @foreach($zones as $zone)
                                                                        <option value="{{$zone->id}}" @if($client->zone_id==$zone->id)  selected @endif>{{$zone->name}}</option>


                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.Block Name')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="block_id" id="block_id">
                                                                    @foreach($blocks as $block)
                                                                        <option
                                                                            value="{{$block->id}}"  @if($client->block_id==$block->id)  selected @endif>{{$block->name ?? ''}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.Unit Name')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="unit_id" id="unit_id">
                                                                    <option value="0">Select Please</option>

                                                                    @foreach($units as $unit)
                                                                        <option
                                                                            value="{{$unit->id}}" @if($client->unit_id==$unit->id)  selected @endif>{{$unit->name ?? ''}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.email')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="email" class="form-control"
                                                                       value="{{ $client->email ?? '' }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.password')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="password" name="password" class="form-control"
                                                                       value="{{ old('password') }}">
                                                            </div>





                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.phone_one')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="phone1" class="form-control"
                                                                       value="{{ $client->phone1 }}" required>
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.phone_two')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="phone2" class="form-control"
                                                                       value="{{ $client->phone2 }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                       value="{{ $client->date }}">
                                                            </div>



                                                        <div class="row m-0">
                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.notes')</label>
                                                                <span class="text-danger">*</span>
                                                                <textarea type="text" name="note"
                                                                          class="form-control"
                                                                          cols="4" rows="4">{{$client->note ?? ''}}</textarea>
                                                            </div>




                                                        </div>




                                                            <div class="row m-0">

                                                            <div class="col-md-6 form-group col-12 p-2">


                                                                <label>@lang('site.official_documents')</label>
                                                                <input type="file" name="documents" class="form-control"
                                                                       value="{{ old('documents') }}">


                                                            </div>
                                                                <div class="col-md-6 form-group col-12 p-2">
                                                                    <img src="{{asset('images/clients/'.$client->documents)}}">
                                                                </div>

                                                        <br>


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

@section('scripts')

    <script>




        $('#zone_id').on('change',function(e){
            var zone_id = e.target.value;



            $.get("{{url('dashboard/zoneSelectBlock')}}/"+zone_id, function(data){
                console.log(data);
                $('#block_id').empty();
                $('#block_id').append('<option>@lang('site.select')</option>');
                $.each(data, function(key, value){
                    $('#block_id').append('<option value="'+value.id+'">'+value.name_en+'</option>')

                });
            })
        })

        $('#block_id').on('change',function(e){
            var zone_id = e.target.value;



            $.get("{{url('dashboard/BlockSelectUnit')}}/"+zone_id, function(data){
                console.log(data);
                $('#unit_id').empty();
                $('#unit_id').append('<option>@lang('site.select')</option>');
                $.each(data, function(key, value){
                    $('#unit_id').append('<option value="'+value.id+'">'+value.name_en+'</option>')

                });
            })
        })
    </script>
@endsection

