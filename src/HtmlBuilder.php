<?php

/**
 * Class HtmlBuilder
 *
 * @author Tristan Heckelsmüller <t.heckelsmueller@seonicals.de>
 * @copyright Copyright (c) 2024, Seonicals GmbH
 */
class HtmlBuilder extends Builder
{

    protected Builder $builder;

    /**
     * Function divStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function divStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("div", $class, $id, $attributes);
    }

    /**
     * Function divEnd
     *
     * @return string
     */
    public function divEnd () : string
    {
        return "</div>";
    }

    /**
     * Function div
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function div (string $innerHTML = "", string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->divStart($class, $id, $attributes) . $innerHTML . $this->divEnd();
    }

    /**
     * Function h1
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function h1 (string $innerHTML = "", string $class = "", string $id = "", array $attributes = []) : string
    {

        return $this->h1Start($class, $id, $attributes) . $innerHTML . $this->h1End();
    }

    /**
     * Function h1Start
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function h1Start (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("h1", $class, $id, $attributes);
    }

    /**
     * Function h1End
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function h1End (string $class = "", string $id = "", array $attributes = []) : string
    {
        return "</h1>";
    }

    /**
     * Function p
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function p (string $innerHTML = "", string $class = "", string $id = "", array $attributes = []) : string
    {

        return $this->pStart($class, $id, $attributes) . $innerHTML . $this->pEnd();
    }

    /**
     * Function pStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function pStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("p", $class, $id, $attributes);
    }

    /**
     * Function pEnd
     *
     * @return string
     */
    public function pEnd () : string
    {
        return "</p>";
    }

    /**
     * Function sectionStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function sectionStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("section", $class, $id, $attributes);
    }

    /**
     * Function sectionEnd
     *
     * @return string
     */
    public function sectionEnd () : string
    {
        return "</section>";
    }

    /**
     * Function articleStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function articleStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("article", $class, $id, $attributes);
    }

    /**
     * Function articleEnd
     *
     * @return string
     */
    public function articleEnd () : string
    {
        return "</article>";
    }


    /**
     * Function ulStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function ulStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("ul", $class, $id, $attributes);
    }

    /**
     * Function ulEnd
     *
     * @return string
     */
    public function ulEnd () : string
    {
        return "</ul>";
    }

    /**
     * Function liStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function liStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("li", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function liEnd () : string
    {
        return $this->builder->buildEndTag("li");
    }

    /**
     * Function mainStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function mainStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("main", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function mainEnd () : string
    {
        return $this->builder->buildEndTag("main");
    }

    /**
     * Function navStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function navStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("nav", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function navEnd () : string
    {
        return $this->builder->buildEndTag("nav");
    }


    /**
     * Function asideStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function asideStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("aside", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function asideEnd () : string
    {
        return $this->builder->buildEndTag("aside");
    }


    /**
     * Function footerStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function footerStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("footer", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function footerEnd () : string
    {
        return $this->builder->buildEndTag("footer");
    }


    /**
     * Function headerStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function headerStart (string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("header", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function headerEnd () : string
    {
        return $this->builder->buildEndTag("header");
    }

    /**
     * Function spanStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function spanStart(string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->builder->buildStartTag("span", $class, $id, $attributes);
    }

    /**
     * Function spanEnd
     *
     * @return string
     */
    public function spanEnd () : string
    {
        return $this->builder->buildEndTag("span");
    }

    /**
     * Function buttonStart
     *
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function buttonStart(string $class = "", string $id = "", array $attributes = []) : string
    {

        return $this->builder->buildStartTag("button", $class, $id, $attributes);
    }

    /**
     * Function buttonEnd
     *
     * @return string
     */
    public function buttonEnd () : string
    {
        return $this->builder->buildEndTag("button");
    }

    /**
     * Function button
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @param array $attributes
     * @return string
     */
    public function button (string $innerHTML, string $class = "", string $id = "", array $attributes = []) : string
    {
        return $this->buttonStart($class, $id, $attributes) . $innerHTML . $this->buttonEnd();
    }


    /**
     * Function img
     *
     * @param string $class
     * @param string $id
     * @param string $src
     * @param string $alt
     * @param array $attributes
     * @return string
     */
    public function img (string $class = "", string $id = "", string $src = "",  string $alt = "", array $attributes = [])  : string
    {

        $showAttributes = $this->builder->buildAttributes($attributes);

        if ($class != "") $class = "class='$class'";
        if ($id != "") $id = "id='$id'";
        if ($src != "") $src = "src='$src'";

        return "<img alt='$alt' $class $id $src $alt $showAttributes>";
    }

}