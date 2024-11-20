<?php

/**
 * Class FormBuilder
 *
 * @author Tristan Heckelsmüller <t.heckelsmueller@seonicals.de>
 * @copyright Copyright (c) 2024, Seonicals GmbH
 */
final class FormBuilder extends Builder
{
    protected \Builder $builder;


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
     * @param array $attributes
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
     * @param array $attributes
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

    /**
     * Function input
     *
     * @param string $type
     * @param string $class
     * @param string $id
     * @param string $name
     * @param string $placeholder
     * @param string $value
     * @param string $autocomplete
     * @param array $attributes
     * @return string
     */
    public function input (string $type = "text", string $class = "", string $id = "", string $name = "", string $placeholder = "", string $value = "", string $autocomplete = "off", array $attributes = []) : string
    {
        $showAttributes = $this->builder->buildAttributes($attributes);

        return "<input type='$type' value='$value' class='$class' id='$id' name='$name' placeholder='$placeholder' autocomplete='$autocomplete' $showAttributes />";
    }

}