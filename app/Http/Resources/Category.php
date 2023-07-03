<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lang = $request->header('localization');

        if ($lang == 'ar') {
            $name = 'name_ar';

        } else {
            $name = 'name_en';


        }
        return [
            "id" => $this->id,
            "name" => $this->$name,
            "image" => asset('images/categories') . "/" . $this->image,

            "status" => $this->status,
        ];
    }
}
