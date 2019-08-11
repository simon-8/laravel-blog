<?php
/**
 * Note: *
 * User: Liu
 * Date: 2019/8/11
 * Time: 10:40
 */
namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContractCategoryRequest;
use App\Models\ContractCategory;

class ContractCategoryController extends BaseController
{
    /**
     * 合同类型
     * @param ContractCategory $contractCategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ContractCategory $contractCategory)
    {
        $lists = $contractCategory->paginate();
        return view('admin.contract_category.index', compact('lists'));
    }

    /**
     * 添加
     * @param ContractCategoryRequest $request
     * @param ContractCategory $contractCategory
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(ContractCategoryRequest $request, ContractCategory $contractCategory)
    {
        $data = $request->all();
        $request->validateStore($data);

        if (!$contractCategory->create($data)) {
            return back()->withErrors(__('web.failed'))->withInput();
        }
        return redirect()->route('admin.contract-category.index')->with('message' , __('web.success'));
    }

    /**
     * 更新
     * @param ContractCategoryRequest $request
     * @param ContractCategory $contractCategory
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(ContractCategoryRequest $request, ContractCategory $contractCategory)
    {
        $data = $request->all();
        $request->validateUpdate($data);

        if (!$contractCategory->update($data)) {
            return back()->withErrors(__('web.failed'))->withInput();
        }
        return redirect()->route('admin.contract-category.index')->with('message' , __('web.success'));
    }

    /**
     * 删除
     * @param ContractCategory $contractCategory
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(ContractCategory $contractCategory)
    {
        if (!$contractCategory->delete()) {
            return back()->withErrors('删除失败')->withInput();
        }
        return redirect()->route('admin.contract-category.index')->with('message' , __('web.success'));
    }
}