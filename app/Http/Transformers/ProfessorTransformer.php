<?php

namespace App\Http\Transformers;


use App\Models\Professor;
use App\Models\Subject;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class ProfessorTransformer extends TransformerAbstract
{
    //protected array $availableIncludes = ['image', 'documents'];

    public function transform(Professor $professor): array
    {
        $data = [
            'id' => $professor->id,
            'department_id' => $professor->department_id,
            'department' => fractal($professor->department, new DepartmentTransformer())->toArray(),
            'major' => $professor->major,
            'prefix' => $professor->prefix,
            'first_name' => $professor->first_name,
            'last_name' => $professor->last_name,
            'full_name' => $professor->prefix . ' ' . $professor->first_name . ' ' . $professor->last_name

        ];
        return $data;
    }



}
