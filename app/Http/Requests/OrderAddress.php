<?php
  
namespace App\Http\Requests;
  
use Illuminate\Foundation\Http\FormRequest;
  
class OrderAddress extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
  
    /** 
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name'=>'required|string|max:255',
            'customer_last_name'=>'required|string|max:255',
            'customer_company'=>'required|string|max:255',
            'customer_country'=>'required',
            'customer_address'=>'required',
            'customer_city'=>'required',
            'customer_state'=>'required',
            'customer_postcode'=>'required',
            'customer_phone'=>'required|max:12|min:10|numeric',
            'customer_email'=>'required|email',

            'shipping_customer_name'=>'required|string|max:255',
            'shipping_customer_last_name'=>'required|string|max:255',
            'shipping_customer_company'=>'required|string|max:255',
            'shipping_customer_country'=>'required',
            'shipping_customer_address'=>'required',
            'shipping_customer_city'=>'required',
            'shipping_customer_state'=>'required',
            'shipping_customer_postcode'=>'required',
            'shipping_customer_phone'=>'required|max:12|min:10|numeric',
            'shipping_customer_email'=>'required|unique:Order|email',
            ];
    }
}