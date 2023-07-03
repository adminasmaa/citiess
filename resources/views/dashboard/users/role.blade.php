<div class="row">

    @if(!empty($role->permissions) && $role->permissions != null && isset($role->permissions) && !$role->permissions->isEmpty())

        @foreach ($models as $index=>$model)

            <div class="col-md-6 form-group col-6 p-2">


{{--                <div class="card">--}}
{{--                    @if($models==$role->permissions)--}}
{{--                    <div class="card-header p-1 text-capitalize"--}}
{{--                         style="background-color: #f0f1f7;align-items: center">--}}
{{--                        <label><input class="permission m-0 form-check-input parent_id"--}}
{{--                                      type="checkbox"--}}
{{--                                      data-permission="{{$model}}" readonly disabled--}}

{{--                            >@lang('site.' . $model)--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                    @endif--}}

                    <div class="card-body">

                        @foreach ($maps as $map)
                            @if($role->hasPermission($map . '_' . $model))
                                <label class="col-12 m-1">
                                    <input class="office m-0 form-check-input"
                                           type="checkbox" data-permission="{{$model}}"
                                           value="{{ $map . '_' . $model }}"
                                           {{ $role->hasPermission($map . '_' . $model) ? 'checked' : '' }}  readonly
                                           disabled>
                                    @lang('site.' . $model)_ @lang('site.'. $map)
                                </label>
                            @endif
                        @endforeach


                    </div><!-- end of nav tabs -->


                </div>


            </div>

        @endforeach
    @endif
</div>
