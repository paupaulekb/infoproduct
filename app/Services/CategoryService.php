<?php


namespace App\Services;

use App\Models\Category;
use App\Http\Resources\Category as CategoryResource;

/**
 * Trait CategoryService
 * Helpers for Category
 *
 * @package App\Services
 */
trait CategoryService
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMainCategoryWithChild($id)
    {
        $category = Category::find($id);

        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }

        $resource['mainCategory'] = new CategoryResource($category);

        $user = auth()->user();
        $categoriesChild = Category::where(['parent_id'=>$category->id,'status'=>1,'user_id'=>0])
            ->orWhere(['parent_id'=>$category->id])->where(['user_id'=>$user->id])
            ->orderBy('sort')->get();

        if(!is_null($categoriesChild)) {
            $resource['child'] = CategoryResource::collection($categoriesChild);
        }

        return $resource;
    }
}
