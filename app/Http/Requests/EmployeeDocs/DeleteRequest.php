<?php
namespace App\Http\Requests\EmployeeDocs;

use App\Models\User;
use Illuminate\Support\Facades\Request;

class DeleteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * Only users with the admin role are allowed to delete employee documents.
     *
     * @return bool
     */

    public function authorize()
    {
        return User::isAdmin(user()->id);
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

}
