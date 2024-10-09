<?php


<<<<<<< Updated upstream
class HtmlBuilder {

    protected \Builder $builder;

    public function __construct ()
    {
        $this->builder = new \Builder();
    }

=======
>>>>>>> Stashed changes
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
        return $this->buildStartTag("div", $class, $id, $attributes);
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
<<<<<<< Updated upstream
=======
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
        return $this->buildStartTag("h1", $class, $id, $attributes);
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
>>>>>>> Stashed changes
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
        return $this->buildStartTag("p", $class, $id, $attributes);
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
        return $this->buildStartTag("section", $class, $id, $attributes);
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
        return $this->buildStartTag("article", $class, $id, $attributes);
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
        return $this->buildStartTag("ul", $class, $id, $attributes);
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
        return $this->buildStartTag("li", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function liEnd () : string
    {
        return $this->buildEndTag("li");
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
        return $this->buildStartTag("main", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function mainEnd () : string
    {
        return $this->buildEndTag("main");
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
        return $this->buildStartTag("nav", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function navEnd () : string
    {
        return $this->buildEndTag("nav");
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
        return $this->buildStartTag("aside", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function asideEnd () : string
    {
        return $this->buildEndTag("aside");
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
        return $this->buildStartTag("footer", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function footerEnd () : string
    {
        return $this->buildEndTag("footer");
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
        return $this->buildStartTag("header", $class, $id, $attributes);
    }

    /**
     * Function liEnd
     *
     * @return string
     */
    public function headerEnd () : string
    {
        return $this->buildEndTag("header");
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
        return $this->buildStartTag("span", $class, $id, $attributes);
    }

    /**
     * Function spanEnd
     *
     * @return string
     */
    public function spanEnd () : string
    {
        return $this->buildEndTag("span");
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

        return $this->buildStartTag("button", $class, $id, $attributes);
    }

    /**
     * Function buttonEnd
     *
     * @return string
     */
    public function buttonEnd () : string
    {
        return $this->buildEndTag("button");
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


    public function img (string $class = "", string $id = "", string $src = "",  string $alt = "", array $attributes = [])  : string
    {

        $showAttributes = $this->buildAttributes($attributes);

        if ($class != "") $class = "class='$class'";
        if ($id != "") $id = "id='$id'";
        if ($src != "") $src = "src='$src'";
        if ($alt != "") $alt = "alt='$alt'";

        return "<img $class $id $src $alt $showAttributes>";
    }

}