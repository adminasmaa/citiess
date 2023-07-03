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

                    <h4>@lang('site.prices')

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

                                                <form action="{{ route('dashboard.prices.store') }}" method="post"
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
{{--                                                            <h4 class="card-title">@lang('site.blocks')</h4>--}}




                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.zonename')</label>
                                                                <span class="text-danger">*</span>
                                                              <select class="form-control" name="zone_id" required id="zone_id" >
                                                              <option value="0">@lang('site.select') </option>
                                                                  @foreach($zones as $zone)
                                                                      <option value="{{$zone->id}}">{{$zone->name}}</option>


                                                                  @endforeach
                                                              </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.blockname')</label>
                                                                <span class="text-danger">*</span>
                                                              <select class="form-control" name="block_id" id="block_id">
                                                              <option value="0">@lang('site.select') </option>

                                                              </select>
                                                            </div>


                                                        </div>
                                                        <center>
                                                            <label class="alert-danger">@lang('site.units_number')</label>
                                                        </center>

                                                            <table class="price-list" id="tb_price">





                                                            </table>

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
            var block_id = e.target.value;



            $.get("{{url('dashboard/BlockSelectUnit')}}/"+block_id, function(data){
                console.log(data);
                $('#price-list').empty();
                $.each(data, function(key, value){
                    var newRow = jQuery('<tr><td><div class="row">  <div class="col-md-5 form-group col-12 p-2"> <label>Units Name</label>' +
                        '<input type="text"  name="unit_number[]"  value="'+value.name_en+'" class="form-control"   /></div><div class="col-md-5 form-group col-12 p-2"> <label>Price</label> ' +
                        '<input type="number" name="prices[]"  value="'+value.price+'" class="form-control" >' +
                        '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +

                        '</div></div> </td>  </tr>');
                    jQuery('.price-list').append(newRow);

                });
            })
        })
    </script>
@endsection

