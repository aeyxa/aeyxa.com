<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuestionMarkRequest extends Request
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
     * Request requires a question mark.
     *
     * @return array
     */
    public function rules()
    {
        $regex = '.*?\\\?';

        return
        [
            'Front' => "required|regex:'$regex'"
        ];
    }
}
