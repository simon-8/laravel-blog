<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCompanyRequest extends BaseRequest
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
            //
        ];
    }

    /**
     * @return array
     */
    protected function storeRules()
    {
        return [
            'name' => 'required',
            'organ_code' => 'required',
            'reg_type' => 'required',
            'legal_name' => 'required',
            'legal_idno' => 'required',
        ];
    }

    /**
     * @return array
     */
    protected function updateRules()
    {
        return [
            'name' => 'required',
            'organ_code' => 'required',
            'reg_type' => 'required',
            'legal_name' => 'required',
            'legal_idno' => 'required',
        ];
    }

    /**
     * 保存校验
     * @param $data
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateStore($data)
    {
        $this->check($data, $this->storeRules());
    }

    /**
     * 更新校验
     * @param $data
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateUpdate($data)
    {
        $this->check($data, $this->updateRules());
    }

    /**
     * @param $data
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateConfirm($data)
    {
        $rules = [
            'name' => 'required',
            'cardno' => 'required',
            'subbranch' => 'required',
            'bank' => 'required',
            'provice' => 'required',
            'city' => 'required',
        ];
        $this->check($data, $rules);
    }

    /**
     * @param $data
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateBanks($data)
    {
        $rules = [
            'keyword' => 'required',
        ];
        $this->check($data, $rules);
    }
}
