<?php

/**
 * Class Builder
 *
 * @author Tristan Heckelsmüller <t.heckelsmueller@seonicals.de>
 * @copyright Copyright (c) 2024, Seonicals GmbH
 */
abstract class Builder
{

    /**
     * Function buildStartTag
     *
     * @param $tag
     * @param $class
     * @param $id
     * @param $attributes
     * @return string
     */
    public function buildStartTag ($tag, $class, $id, $attributes) : string
    {
        $showAttributes = $this->buildAttributes($attributes);
        return "<$tag class='$class' id='$id' $showAttributes>";
    }

    /**
     * Function buildEndTag
     *
     * @param $tag
     * @return string
     */
    public function buildEndTag ($tag) : string
    {
        return "</$tag>";
    }

    /**
     * Function buildAttributes
     *
     * @param array $attributes
     * @return string
     */
    public function buildAttributes (array $attributes) : string
    {
        $html = "";
        foreach ($attributes as $attribute) {
            $name = $attribute["name"];
            $attributeValue = $attribute["value"];
            $html = $html . " " . "data-$name='$attributeValue'";
        }
        return $html;
    }

}