<?php


declare(strict_types=1);

namespace App\Http\Requests\Api;

use App\Infrastructure\Requests\JsonRequest;

/**
 * Validate the passed parameters to follow the validation rules on the /categories resource of the GET method.
 * @package Categories
 */
class SearchCategoriesRequest extends JsonRequest
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
        $parentRules = parent::rules();

        return $parentRules + [
                'category' => ['nullable', 'string'],
            ];
    }
}
