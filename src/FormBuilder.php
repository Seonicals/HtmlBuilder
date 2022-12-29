<?php

class FormBuilder
{
    /**
     * Function formStart
     *
     * @param $class
     * @param $id
     * @param $action
     * @return string
     */
    public function formStart ($class = "", $id = "", $action = "") : string
    {
        return "<form class='$class' id='$id' action='$action'>";
    }

    /**
     * Function formEnd
     *
     * @return string
     */
    public function formEnd () : string
    {
        return "</form>";
    }


    /**
     * Function labelStart
     *
     * @param string $class
     * @param string $id
     * @param string $for
     * @return string
     */
    public function labelStart (string $class = "", string $id = "", string $for = "") : string
    {
        return "<label class='$class' id='$id' for='$for'>";
    }

    /**
     * Function labelEnd
     *
     * @return string
     */
    public function labelEnd () : string
    {
        return "</label>";
    }

    /**
     * Function label
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @param string $for
     * @return string
     */
    public function label(string $innerHTML = "", string $class = "", string $id = "", string $for = "") : string
    {
        return $this->labelStart($class, $id, $for) . $innerHTML . $this->labelEnd();
    }

    /**
     * Function selectStart
     *
     * @param string $class
     * @param string $id
     * @param string $name
     * @return string
     */
    public function selectStart (string $class = "", string $id = "", string $name = "") : string
    {
        return "<select class='$class' id='$id' name='$name'>";
    }

    /**
     * Function selectEnd
     *
     * @return string
     */
    public function selectEnd () : string
    {
        return "</select>";
    }

    /**
     * Function option
     *
     * @param string $innerHTML
     * @param string $value
     * @param array $attributes
     * @return string
     */
    public function option (string $innerHTML = "", string $value = "", array $attributes = []) : string
    {
        $html = "";
        foreach ($attributes as $attribute) {
            $name = $attribute["name"];
            $attributeValue = $attribute["value"];
            $html = $html . " " . "data-$name='$attributeValue'";
        }
        return "<option value='$value' $html>$innerHTML</option>";
    }

}