<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            $description = 'description_ar';

        } else {
            $name = 'name_en';
            $description = 'description_en';


        }
        return [
            "id" => $this->id,
            "name" => $this->$name,
            "description" => $this->$description,
            "image" => asset('images/products') . "/" . $this->image,

            "price" => $this->price ?? '',
            'category'=> new Category($this->category) ?? ''

        ];
    }
}
