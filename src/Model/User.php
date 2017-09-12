<?php

namespace ErikFig\Model;

class User extends AbstractModel
{
    public function getName()
    {
        return $this->data['name'];
    }
}
