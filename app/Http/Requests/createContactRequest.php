<?php

namespace App\Http\Requests;

use App\Rules\LowerCase;
use App\Rules\uppercase;
use Illuminate\Foundation\Http\FormRequest;

class createContactRequest extends FormRequest
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
            'name' => ['required'], 'lastname' => 'required|max:20', 'pic' => ['required', 'max:2000', 'mimes:jpeg,png,jpg'], 'password' => ['required', 'min:8', 'string', 'regex:([A-Z][0-9])']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "پر کردن  فیلد نام الزامی است",
            'password.required' => "رمز عبور الزامی است",
            'password.min' => "رمز عبور حداقل باید 8 کاراکتر باشد",
            'password.regex' => "رمز عبور باید فرمتی از حروف انگلیسی بزرگ و اعداد باشد",
            'pic.max' => "حجم عکس حداکثر تا 2 مگابایت باید باشد",
            'name.min' => "حداقل تعداد کاراکتر در فیلد نام  3 است",
            'lastname.max' => "نام خانوادگی نمیتواند بیشت از 20 حرف باشد",
            'pic.required' => "آپلود عکس برای این مطلب الزامی است",
            'pic.mimes' => "لطفا یک عکس با فرمت png یا jpeg یا jpg آپلود کنید!"
        ];
    }
}
