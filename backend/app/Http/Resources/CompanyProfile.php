<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyProfile extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'password' => $this->password,
            'company_name' => $this->company_name,
            'company_code' => $this->company_code,
            'vat_code' => $this->vat_code,
            'contact_name' => $this->contact_name,
            'contact_role' => $this->contact_role,
            'address' => $this->address,
            'phone' => $this->phone,
            'description' => $this->description,
            'image' => $this->image,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i')
        ];
    }
}
