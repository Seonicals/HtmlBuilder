<?php

use Builder;

class FormBuilder
{
    protected \Builder $builder;

    /**
     *
     */
    public function __construct ()
    {
        $this->builder = new \Builder();
    }

    /**
     * Function formStart
     *
     * @param string $class
     * @param string $id
     * @param string $action
     * @param array $attributes
     * @return string
     */
    public function formStart (string $class = "", string $id = "", string $action = "", array $attributes = []) : string
    {
        $showAttributes = $this->builder->buildAttributes($attributes);

        return "<form class='$class' id='$id' action='$action' $showAttributes>";
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
     * @param array $attributes
     * @return string
     */
    public function labelStart (string $class = "", string $id = "", string $for = "", array $attributes = []) : string
    {
        $showAttributes = $this->builder->buildAttributes($attributes);

        return "<label class='$class' id='$id' for='$for' $showAttributes>";
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
    public function label(string $innerHTML = "", string $class = "", string $id = "", string $for = "", array $attributes = []) : string
    {

        return $this->labelStart($class, $id, $for, $attributes) . $innerHTML . $this->labelEnd();
    }

    /**
     * Function selectStart
     *
     * @param string $class
     * @param string $id
     * @param string $name
     * @return string
     */
    public function selectStart (string $class = "", string $id = "", string $name = "", array $attributes = []) : string
    {
        $showAttributes = $this->builder->buildAttributes($attributes);

        return "<select class='$class' id='$id' name='$name' $showAttributes>";
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
        $showAttributes = $this->builder->buildAttributes($attributes);

        return "<option value='$value' $showAttributes>$innerHTML</option>";
    }

}