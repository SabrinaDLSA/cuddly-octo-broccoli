<?php

namespace series\Http\Requests;

use series\Http\Requests\Request;

class StoreSeriesCreateRequest extends Request
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
          'name' => 'required|unique:series|max:255',
          'genre' => 'required|exists:genres,id',
          'start' => 'required|date',
          'finish' => 'required|date|after:start',
          'description' => 'required',
          'file' => 'required',
        ];
    }
}
