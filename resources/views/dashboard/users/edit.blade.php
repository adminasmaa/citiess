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

                                    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post"
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


                                            <div class="row form-group">

                                                <div class="col-sm-12">


                                                    <label>@lang('site.image')</label>
                                                    <img src="{{asset('images/users/'.$user->image)}}"
                                                         data-bs-toggle="modal"
                                                         data-bs-target="#exampleModalss" width="100px" height="100px"
                                                         class="d-block"

                                                         onerror="this.src='{{asset('images/default.jpg')}}'"
                                                    >


                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">@lang('site.image')</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="border-5">
                                                                <tr>
                                                                    <th>
                                                                        <img name="soso"
                                                                             src="{{asset('images/users/'.$user->image)}}"
                                                                             alt="" width="400px" height="aut0"
                                                                             onerror="this.src='{{asset('images/default.jpg')}}'"
                                                                        >

                                                                    </th>
                                                                </tr>


                                                            </table>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  End Of Modal -->
                                            <div class="row">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                           value="{{ $user->name }}"
                                                           required>
                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.phone')<span class="text-danger">*</span></label>
                                                    <div id="result">
                                                        <input type="text" name="phone" class="form-control"
                                                               value="{{ $user->phone }}" id="mobilephone"
                                                               maxlength="10" size="10"
                                                               required>

                                                    </div>
                                                </div>


                                                <!--</div>-->
                                                <!--<div class="col-md-6">-->
                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>Designation<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="address" class="form-control"
                                                           value="{{ $user->address }}" required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.email')<span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                           value="{{ $user->email }}"
                                                           required>
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.password')</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.password_confirmation')</label>
                                                    <input type="password" name="password_confirmation"
                                                           class="form-control">
                                                </div>




                                                <div class="col-md-6 form-group col-12 p-2">

                                                    <label>@lang('site.status')</label>
                                                    <select name="status" class="form-control select2">
                                                        <option disabled selected>@lang('site.select')</option>
                                                        <option value="1" @if($user->status==1)  selected  @endif>
                                                            Active
                                                        </option>
                                                        <option value="0" @if($user->status==0)  selected  @endif>
                                                            De_Active
                                                        </option>

                                                    </select>


                                                </div>


                                                <div class="col-md-6 form-group col-12 p-2">


                                                    <label>@lang('site.image')</label>
                                                    <input type="file" name="image" class="form-control"
                                                           value="{{ old('image') }}">


                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2">
                                                    <label>@lang('site.roles')</label>
                                                    <select name="roles[]" class="form-control select2 role-select">
                                                        <option disabled selected>@lang('site.select')</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                                {{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>

@if($role)
                                            <div class="row" id="Permissions" >


                                                @foreach ($models as $index=>$model)

                                                    <div class="col-md-6 form-group col-6 p-2">


                                                        <div class="card">
                                                            <div class="card-header p-1 text-capitalize"
                                                                 style="background-color: #f0f1f7;align-items: center">
                                                                <label><input class="permission m-0 form-check-input parent_id"
                                                                              type="checkbox"
                                                                              data-permission="{{$model}}" readonly disabled

                                                                    >@lang('site.' . $model)
                                                                </label>
                                                            </div>
                                                            <div class="card-body">

                                                                @foreach ($maps as $map)
                                                                    <label class="col-12 m-1">
                                                                        <input class="office m-0 form-check-input"
                                                                               type="checkbox" name="permissions[]"  data-permission="{{$model}}"
                                                                               value="{{ $map . '_' . $model }}" {{ $role->hasPermission($map . '_' . $model) ? 'checked' : '' }}  readonly disabled>
                                                                        @lang('site.' . $model)_ @lang('site.'. $map)
                                                                    </label>
                                                                @endforeach


                                                            </div><!-- end of nav tabs -->


                                                        </div>


                                                    </div>

                                                @endforeach

                                            </div>
                                            @endif


                                            <div id="Permissions" class="row">


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
                        document.getElementById('Permissions').innerHTML =xhr.response ;
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
