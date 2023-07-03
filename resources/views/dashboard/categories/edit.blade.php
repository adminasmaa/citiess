@extends('dashboard.layouts.app')

@section('content')

    <!-- BEGIN: Content-->
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

                                    <form action="{{ route('dashboard.categories.update', $data->id) }}" method="post"
                                          enctype="multipart/form-data">

                                        {{ csrf_field() }}
                                        {{ method_field('put') }}

                                        <div class="card-header d-flex justify-content-between">
                                            <h5>@lang('site.edit') </h5>
                                            <div class="text-end  group-btn-top">
                                                <div class="form-group d-flex form-group justify-content-between">
                                                    <button type="button"
                                                            class="btn btn-pill btn-outline-primary btn-air-primary"
                                                            onclick="history.back();">
                                                        <!--<i class="fa fa-backward"></i>-->
                                                        @lang('site.back')
                                                    </button>
                                                    <button type="submit"
                                                            class="btn btn-air-primary btn-pill btn-primary"><i
                                                            class="fa fa-magic"></i>
                                                        @lang('site.edit')</button>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="card-body">
                                            @include('partials._errors')


                                            <div class="row">

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.ar.name')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                           value="{{$data->name_ar ?? '' }}"
                                                           required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.en.name')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_en" class="form-control"
                                                           value="{{$data->name_en ?? '' }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.status')</label>
                                                    <select name="status" class="form-control select2">
                                                        <option disabled selected>@lang('site.select')</option>
                                                        <option value="1" @if($data->status=='1') selected @endif>
                                                            @lang('site.active')
                                                        </option>
                                                        <option value="0" @if($data->status=='0') selected @endif>
                                                            @lang('site.noactive')
                                                        </option>

                                                    </select>


                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.image')</label>
                                                    <input type="file" name="image" class="form-control"
                                                           value="{{ old('image') }}">


                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.image')</label>

                                                    <img src="{{asset('images/categories/'.$data->image)}}"
                                                         width="150px"
                                                         height="150px">

                                                </div>


                                            </div>
                                        </div>
                                    </form>


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

        document.querySelectorAll('.role-select').forEach(function (select) {
            select.addEventListener('change', function (e) {
                console.log("xgdgfd");
                e.preventDefault();
                var item = this.value;
                // document.getElementById('Permissions').attr('hide');
                console.log(item);
                var xhr = new XMLHttpRequest();
                // var csrf_token = document.querySelector('meta[name="csrf-token"]');
                var csrf_token = "{{ csrf_token() }}";

                xhr.open('POST', "{{route('dashboard.roles.selecteddata')}}");
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                // xhr.responseType = 'json';
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var permissons = xhr.response
                        document.getElementById('Permissions').innerHTML = xhr.response;
                        // for (var i = 1; i < permissons.length; i++) {
                        //     document.getElementById('Permissions').innerHTML +=xhr.response ;
                        // }
                        // ;

                        // document.getElementById('stage').innerHTML = xhr.responseText;
                    }
                };
                xhr.send("name=" + encodeURIComponent(item) + "&_token=" + encodeURIComponent(csrf_token));
            });
        });
        {{--$('.role-select').on('change', function (e) {--}}
        {{--    e.preventDefault();--}}
        {{--    var item = $(this).val();--}}
        {{--    $.post(--}}
        {{--        "{{route('dashboard.roles.selecteddata')}}",--}}
        {{--        {name: item},--}}
        {{--        {token: "{{ csrf_token() }}"},--}}
        {{--        function (data) {--}}


        {{--        }--}}
        {{--    );--}}
        {{--});--}}

    </script>
@endsection
