<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EpisodeRequest extends FormRequest
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
        return [];
       /* if ($this->method()=='POST'){
            return [
                'title'=>'required',
                'course_id='required',
                'type'=>'required',
                'description'=>'required',
                'videoUrl'=>'required',
                'number'=>'required',
                'tags'=>'required'
                'time'=>'required'

            ];
        }
            return [
                'title'=>'required',
                'course_id='required',
                'type'=>'required',
                'description'=>'required',
                'videoUrl'=>'required',
                'number'=>'required',
                'tags'=>'required'
                'time'=>'required'
            ];*/
    }
}
