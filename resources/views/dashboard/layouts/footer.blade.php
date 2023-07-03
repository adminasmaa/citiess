<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('style/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('style/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('style/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('style/assets/js/custom/apps/ecommerce/customers/listing/listing.js')}}"></script>
<script src="{{asset('style/assets/js/custom/apps/ecommerce/customers/listing/add.js')}}"></script>
<script src="{{asset('style/assets/js/custom/apps/ecommerce/customers/listing/export.js')}}"></script>
<script src="{{asset('style/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('style/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('style/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('style/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('style/assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('style/assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
@yield('scripts')
<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })


</script>



<br>


<script>
    $(document).ready(function () {
        jQuery('.delete').click(function (event) {
            event.preventDefault();


            console.log("Tapped Delete button")
            var that = $(this)
            e.preventDefault();
            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();


        });
    });
</script>





<script>
    function confirmDelete($id) {
        console.log("Tapped Delete button")
        var that = document.getElementById("deleteForm" + $id);
        var n = new Noty({
            text: "@lang('site.confirm_delete')",
            type: "error",
            killer: true,
            buttons: [
                Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                    that.submit();
                }),
                Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });
        n.show();
    }

    $(document).ready(function () {

        $("#deleteForm").on('click', "#delete", function (e) {

            console.log("Tapped Delete button")
            var that = $(this)
            e.preventDefault();
            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();

        });


    });
</script>
