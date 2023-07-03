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

                    <h4>@lang('site.unitstatus')

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

                                                <form action="{{ route('dashboard.unitstatus.update',$data->id) }}" method="post"
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

                                                            <label>@lang('site.zonename')</label>
                                                            <span class="text-danger">*</span>
                                                            <select class="form-control" name="zone_id" id="zone_id">
                                                                <option value="0">@lang('site.select') </option>
                                                                @foreach($zones as $zone)
                                                                    <option value="{{$zone->id}}" @if($data->zone_id==$zone->id)  selected @endif>{{$zone->name}}</option>


                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 form-group col-12 p-2">

                                                            <label>@lang('site.blockname')</label>
                                                            <span class="text-danger">*</span>
                                                            <select class="form-control" name="block_id" id="block_id">
                                                                <option value="0">@lang('site.select') </option>
                                                                @foreach($blocks as $block)
                                                                    <option value="{{$block->id}}" @if($data->block_id==$block->id)  selected @endif>{{$zone->name}}</option>


                                                                @endforeach
                                                            </select>
                                                        </div>



                                                            <div class="col-md-6 form-group col-12 p-2">
                                                                <label>@lang('site.name')<span
                                                                        class="text-danger">*</span></label>
                                                                <input required type="text" name="name_en" class="form-control"
                                                                       value="{{ $data->name_en ?? '' }}">
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">
                                                                <label>@lang('site.status')<span
                                                                        class="text-danger">*</span></label>
                                                                 <select class="form-control" name="status" >
                                                                    <option value="Sold Unit" @if($data->status=='Sold Unit')  selected @endif>@lang('site.Sold Unit')  </option>
                                                                    <option value="Rented Unit" @if($data->status=='Rented Unit')  selected @endif>@lang('site.Rented Unit')</option>
                                                                    <option value="Empty Unit" @if($data->status=='Empty Unit')  selected @endif>@lang('site.Empty Unit')  </option>
                                                                    <option value="Units Offered For Sale"  @if($data->status=='Units Offered For Sale')  selected @endif>@lang('site.Units Offered For Sale')  </option></select>


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


@section('scripts')

    <script>


        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#block_id').on('change',function(e){
            var block_id = e.target.value;



            $.get("{{url('dashboard/BlockSelectUnit')}}/"+block_id, function(data){
                console.log(data);
                $('.price-list').empty();
                $('.price-list').append('<div class="row"></div>');
                $('#tb_price').append('<div class="row"></div>');

                $.each(data, function(key, value){
                    var newRow = jQuery('<tr><td><div class="row">  <div class="col-md-5 form-group col-12 p-2"> <label>Name Unit</label>' +
                        '<input type="text"  name="unit_number[]"  value="'+value.name_en+'" class="form-control"   /></div><div class="col-md-5 form-group col-12 p-2"> <label>Status</label> ' +
                        ' <select class="form-control" name="status[]" required>' +
                        ' <option value="Sold Unit">Sold Unit  </option>' +
                        ' <option value="Rented Unit">Rented Unit  </option>' +
                        ' <option value="Empty Unit">Empty Unit  </option>' +
                        ' <option value="Units Offered For Sale">Units Offered For Sale  </option></select>' +
                        '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                        '</div></div> </td>  </tr>');
                    jQuery('.price-list').append(newRow);

                });
            })
        })

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
    </script>
@endsection
