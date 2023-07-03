<?php


namespace App\Helpers;


class DTHelper
{





    public static function dtEditButton($link, $title, $permission)
    {

//        if (auth()->user()->hasPermission($permission)) {

        $html = <<< HTML
 <a href="$link" class="update btn-table" >

 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path>
 <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
 </a>
HTML;

        return $html;
    }

//    }


    public static function dtDeleteButton($link, $title, $permission, $id)
    {


        $csrf = csrf_field();
        $method_field = method_field('delete');
//        if (auth()->user()->hasPermission($permission)) {

        $html = <<< HTML
<form action="$link" method="post" style="display: inline-block" id="deleteForm$id">
$csrf
$method_field
<button type="button" onclick="confirmDelete($id)" id="delete" class="btn-table delete btn  btn-xs 88" style="border: none;
    background: transparent;">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
</svg>
</button>
</form>
HTML;


        return $html;
//        }
    }


    public static function dtShowButton($link, $title, $permission)
    {

//        if (auth()->user()->hasPermission($permission)) {

        $html = <<< HTML
 <a href="$link" class="btn-table"> <i class="fa fa-eye fa-1x"></i></a>
HTML;


        return $html;
    }


}
