<?php

namespace App\Components;

class Recusive
{
    private $data;
    private $htmlSelect = '';

    /**
     * @param [type]
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handleRecusive($parentId, $id = 0, $text = ''): string
    {
        foreach ($this->data as $value) {
            if ($value['parent_id']  === $id) {
                if (!empty($parentId) && $parentId === $value['id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                }

                $this->handleRecusive($parentId, $value['id'], $text . '--');
            }
        }

        return $this->htmlSelect;
    }
}

