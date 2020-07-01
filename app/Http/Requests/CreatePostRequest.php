<?php

namespace App\Http\Requests;

use App\Rules\LowerCase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required'], 'content' => ['max:30', new LowerCase()], 'pic' => ['required', 'max:2000', 'mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'پر کردن فیلد عنوان الزامی است',
            'content.max' => 'توضیحات نمیتواند بیش از 30 کاراکتر باشد',
            'pic.required' => 'آپلود عکس برای این مطلب لازم است',
            'pic.max' => 'حجم عکس حداکثر میتواند2 مگ باشد',
            'pic.mimes' => 'فایلی آپلودی باید عکسی با فرمت jpeg یا jpg با png باشد'
        ];
    }
}
