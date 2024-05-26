<?php

namespace App\Http\Transformers;

use App\Models\Announcement;
use App\Models\Subject;
use App\Models\Professor;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class SubjectTransformer extends TransformerAbstract
{
    //protected array $availableIncludes = ['image', 'documents'];

    public function transform(Subject $subject): array
    {
        $data = [
            'id' => $subject->id,
            'name_th' => $subject->name_th,
            'name_en' => $subject->name_en,
            'code' => $subject->code,
            'professors' => fractal($subject->professors, new ProfessorTransformer())->toArray()['data'],
            'published_at' => Carbon::parse($subject->published_at)->format('Y-m-d'),
            // 'display_published_at' => $subject->published_at ? Carbon::parse($subject->published_at)
            //     ->thaidate('j M Y') : null,
        ];
        return $data;
    }



}
