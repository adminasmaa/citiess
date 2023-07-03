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
{{--                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">@lang('site.roles')</h1>--}}
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
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0"><!-- Dashboard Ecommerce Starts -->

               <div class="overlay mt-80">
        <div class="container-fluid">
            <div class="page-title">
                <div class="align-items-center row">
                    <div class="col-6">
                        <h3>@lang('site.roles')</h3>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <form action="{{ route('dashboard.roles.update', $role->id) }}" method="post"
                            enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('put') }}


                            <div class="card-header d-flex justify-content-between">
                                <h5>@lang('site.edit') </h5>
                                <div class="text-end  group-btn-top">
                                    <div class="form-group d-flex form-group justify-content-between">
                                        <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                            onclick="history.back();">
                                            <!--<i class="fa fa-backward"></i> -->
                                            @lang('site.back')
                                        </button>
                                        <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                                class="fa fa-plus"></i>
                                            @lang('site.edit')</button>
                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                @include('partials._errors')






                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="col-md-7 form-group col-7 p-2">
                                                <label>@lang('site.name')<span
                                                        class="text-danger">*</span></label>
                                                <input required type="text" name="name" class="form-control"
                                                       value="{{ $role->name }}">
                                            </div>


                                        </div>

                                    </div>
                                    <div class="row">

                                        <label><input class="permission m-0 form-check-input select-all"
                                                      id="CheckAll" type="checkbox"
                                                      data-permission="CheckAll">CheckAll
                                        </label>
                                        @foreach ($models as $index=>$model)

                                            <div class="col-md-6 form-group col-6 p-2">


                                                <div class="card">
                                                    <div class="card-header p-1 text-capitalize"
                                                         style="background-color: #f0f1f7;align-items: center">
                                                        <label><input class="permission m-0 form-check-input parent_id"
                                                                       type="checkbox"
                                                                      data-permission="{{$model}}"

                                                            >@lang('site.' . $model)
                                                        </label>
                                                    </div>
                                                    <div class="card-body">

                                                        @foreach ($maps as $map)
                                                            <label class="col-12 m-1">
                                                                <input class="office m-0 form-check-input"
                                                                       type="checkbox" name="permissions[]"  data-permission="{{$model}}"
                                                                       value="{{ $map . '_' . $model }}" {{ $role->hasPermission($map . '_' . $model) ? 'checked' : '' }} >
                                                                @lang('site.' . $model)_ @lang('site.'. $map)
                                                            </label>
                                                        @endforeach


                                                    </div><!-- end of nav tabs -->


                                                </div>


                                            </div>

                            @endforeach

                                    </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select-all').on('click', function () {
                var checkAll = this.checked;
                $('input[type=checkbox]').each(function () {
                    this.checked = checkAll;
                });
            });
        });







        $(".parent_id").attr("class", "parent_id").change(function () {
            //alert('Ok!');
            var value = $(this).attr("data-permission");
            $(":checkbox[data-permission='" + value + "']").prop("checked", this.checked);
        })

    </script>
@endsection
