<?php
/**
 * Note: 验证基类
 * User: Liu
 * Date: 2018/11/02
 * Time: 21:01
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class BaseRequest extends FormRequest
{

    /**
     * 校验数据
     * @param array $data
     * @param array $rules
     * @return array|bool
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function check(array $data, array $rules)
    {
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            if (\Request::ajax() || Str::startsWith(\Request::path(), 'api')) {
                exit(responseException($validator->errors()->first()));
            } else {
                return $validator->validate();
            }
        }
        return true;
    }
}