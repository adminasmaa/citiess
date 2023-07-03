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

                    <h4>@lang('site.invoicesbase')

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

                                                <form action="{{ route('dashboard.invoicesbase.update',$invoice->id) }}"
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


                                                                <label>@lang('site.invoice_name')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="invoice_name"
                                                                       class="form-control"
                                                                       value="{{$invoice->invoice_name ?? '' }}" required>
                                                            </div>






                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.client')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="client_id" readonly>

                                                                    <option
                                                                        value="{{$clients->id}}">{{$clients->name ?? ''}}</option>


                                                                </select>
                                                            </div>

                                                            <!--<div class="col-md-6 form-group col-12 p-2">-->

                                                            <!--    <label>@lang('site.unit_name')</label>-->
                                                            <!--    <span class="text-danger">*</span>-->
                                                            <!--    <select class="form-control" name="unit_id">-->
                                                            <!--        <option value="0">@lang('site.select')</option>-->
                                                            <!--        @foreach($units as $unit)-->
                                                            <!--            <option-->
                                                            <!--                value="{{$unit->id}}" @if($invoice->unit_id==$unit->id) selected @endif>{{$unit->name_en ?? ''}}</option>-->

                                                            <!--        @endforeach-->
                                                            <!--    </select>-->
                                                            <!--</div>-->





                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoice_date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="date" class="form-control"
                                                                       value="{{$invoice->date ?? '' }}">
                                                            </div>
                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.payment_date')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="date" name="payment_date"
                                                                       class="form-control"
                                                                       value="{{$invoice->payment_date ?? '' }}">
                                                            </div>
                                                            <!--<div class="col-md-6 form-group col-12 p-2">-->

                                                            <!--    <label>@lang('site.invoice_amount')</label>-->
                                                            <!--    <span class="text-danger">*</span>-->
                                                            <!--    <input type="text" name="amount"-->
                                                            <!--           class="form-control"-->
                                                            <!--           value="{{$invoice->amount ?? '' }}">-->
                                                            <!--</div>-->



                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoice_type')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="invoice_type" id="invoicetype">
                                                                    <option
                                                                        value="0">@lang('site.select')</option>
                                                                    @foreach(\App\Models\BasicInvoice::where('type','=','type')->get() as $invoices )
                                                                        <option
                                                                            value="{{$invoices->invoice_name}}" @if($invoice->invoice_type==$invoices->invoice_name) selected @endif >{{$invoices->invoice_name ?? ''}} </option>

                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.invoice_price')</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" name="invoice_price" class="form-control pricedata"


                                                                       value="{{$invoice->invoice_price ?? '' }}"
                                                                       id="pricedata">
                                                            </div>



                                                            <div class="col-md-6 form-group col-12 p-2">

                                                                <label>@lang('site.type')</label>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="type" >
                                                                    <option
                                                                        value="0">@lang('site.select')</option>

                                                                    <option value="Paid" @if($invoice->type=="Paid") selected @endif >@lang('site.Invoices Paid') </option>
                                                                              <option
                                                                        value="unPaid"  @if($invoice->type=="unPaid") selected @endif>@lang('site.Invoices UnPaid') </option>


                                                                </select>
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

@section('scripts')

    <script>


        $('#invoicetype').on('change', function (e) {
            var invoicetype = e.target.value;


            $.get("{{url('dashboard/invoicetype')}}/" + invoicetype, function (data) {
                console.log(data);
                $('.pricedata').val(data);



                // $.each(data, function (key, value) {
                //     $('#price').valueOf(value.invoice_price)

                // });
            })
        })


    </script>
@endsection


