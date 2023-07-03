@extends('dashboard.layouts.app')



@section('content')
    <!-- BEGIN: Content-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"></h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}"
                               class="text-muted text-hover-primary">@lang('site.dashboard')</a>
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">



                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">


                                        <button class="nav-link active btn btn-danger fa-3x" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><a href="{{url('dashboard/invoicesbase?type=Paid')}}">Invoices Paid</a></button>


                                        <button class="nav-link btn btn-success" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><a href="{{url('dashboard/invoicesbase?type=unPaid')}}">Invoices UnPaid</a></button>
                                        <button class="nav-link btn btn-secondary buttons-reload"  id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><a href="{{url('dashboard/invoicesbase?type=type')}}">Invoices Type</a></button>
                                        <button class="nav-link btn btn-dark buttons-reload"  id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><a href="{{url('dashboard/invoicesbase')}}">All Invoice</a></button>
                                    </div>
                                </nav>
                            <br>
                            <br>

                            <!--end::Filter-->

                        </div>

                    </div>
                    <!--end::Card toolbar-->

                    <div class="card-body pt-0">
                        <br><br>
                        <!--begin::Table-->

                        {!! $dataTable->table([], true) !!}

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Modals-->

                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

@endsection

@section('scripts')
    {!! $dataTable->scripts() !!}

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/datatables/buttons.server-side.js"></script>



    <script>





        $(document).ready(function () {
            // $(".alert").delay(5000).slideUp(300);
            $(".alert").slideDown(300).delay(5000).slideUp(300);
        });
        setTimeout(function () {
            $('.alert-box').remove();
        }, 30000);
    </script>






@endsection


