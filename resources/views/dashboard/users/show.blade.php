@extends('dashboard.layouts.app')


@section('content')


<section class="dashboard-section body-collapse">
    <div class="overlay mt-80">
        <div class="container-fluid">
            <div class="page-title">
                <div class="align-items-center row">
                    <div class="col-6">
                        <h3>@lang('site.users')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome') }}">
                                    <!--@lang('site.dashboard')-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a hhref="{{ route('dashboard.users.index') }}">
                                    @lang('site.users') </a></li>
                            <li class="breadcrumb-item active"><a> @lang('site.show') </a></li>
                        </ol>
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
                        <div class="card-header">
                            <h5>@lang('site.show') </h5>


                        </div>
                        <div class="card-body">
                            <h4 class="card-title">@lang('site.users')</h4>
                            @include('partials._errors')



                            <input id="type" hidden type="text" name="type" value="Admin" required>
                            <div class="row form-group">
                                <label for="name"
                                    class="col-sm-3 col-form-label input-label">@lang('site.image')</label>
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <label>@lang('site.image')</label>
                                            <img src="{{asset('images/employee/'.$user->image)}}" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalss" width="100px" height="100px">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang('site.image')</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="border-5">
                                                <tr>
                                                    <th>
                                                        <img name="soso" src="{{asset('uploads/'.$user->image)}}" alt=""
                                                            width="400px" height="aut0">

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
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>@lang('site.name')</label>
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                            disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>@lang('site.phone')</label>
                                        <div id="result">
                                            <input type="text" name="phone" class="form-control" type="tel" id="phone"
                                                value="{{ $user->phone }}" disabled>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.password')</label>
                                        <input type="password" name="password" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('site.code')</label>
                                        <input type="text" name="code" class="form-control" value="{{ $user->code }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('site.address')</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ $user->address }}" disabled>
                                    </div>


                                    <div class="form-group">
                                        <label>@lang('site.email')</label>
                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                            disabled>
                                    </div>





                                    <div class="form-group">
                                        <label>@lang('site.password_confirmation')</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            disabled>
                                    </div>



                                </div>
                            </div>

                            <h4 class="card-title mt-4">@lang('site.roles')</h4>

                            <div class="row">
                                <div class="col-md-6">

                                    @if (auth()->user()->hasPermission('read_roles'))
                                    <div class="form-group">
                                        <label>@lang('site.roles')</label>
                                        <select name="roles[]" class="form-control select2" disabled>
                                            <option disabled selected>@lang('site.select')</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif

                                </div>

                            </div>


                            <div class="text-end mt-4">
                                <div class="form-group">
                                    <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                        <i class="fa fa-backward"></i> @lang('site.back')
                                    </button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Individual column searching (text inputs) Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</section>



@endsection
