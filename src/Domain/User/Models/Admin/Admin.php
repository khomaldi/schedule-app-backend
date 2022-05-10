<?php

namespace Domain\User\Models\Admin;

use Domain\Shared\Models\BaseModel;
use Domain\Shared\Models\Concerns\HasUser;

class Admin extends BaseModel
{
    use HasUser;
}
