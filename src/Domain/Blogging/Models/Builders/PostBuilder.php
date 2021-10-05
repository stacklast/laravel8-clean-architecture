<?php
declare(strict_types=1);

namespace Domain\Blogging\Models\Builders;

use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder
{
    public function wherePublished(): self
    {
        return $this->where('published','=', true);
    }

    public function whereDraft(): self
    {
        return $this->where('published','=', false);
        
    }
}
