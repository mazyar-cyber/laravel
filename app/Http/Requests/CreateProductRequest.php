<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'title' => 'required', 'time' => 'required', 'des' => ['required', 'min:6'], 'photo' => ['max:1000','required','mimes:jpeg,jpg,png']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان محصول را بنویسید',
            'time.required' => 'لطفا زمان محصول را بنویسید',
            'des.required' => 'لطفا توضیحات محصول را بنویسید',
            'des.min' => 'توضیحات از شش کلمه باید بیشتر باشد',
            'photo.max' => 'حجم عکس ارسالی نبایداز 1 مگابایت بیشتر باشد',
            'photo.mimes' => 'لطفا یک عکس با فرمت png یا jpeg یا png بفرستید!',
            'photo.required' => 'آپلود عکس برای این مطلب الزامی است'
        ];
    }
}
