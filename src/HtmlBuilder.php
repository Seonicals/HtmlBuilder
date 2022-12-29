<?php

class HtmlBuilder {

    /**
     * Function divStart
     *
     * @param string $class
     * @param string $id
     * @param $attributes
     * @return string
     */
    public function divStart (string $class = "", string $id = "", $attributes = []) : string
    {
        return "<div class='$class' id='$id'>";
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
     * Function p
     *
     * @param string $innerHTML
     * @param string $class
     * @param string $id
     * @return string
     */
    public function p (string $innerHTML = "", string $class = "", string $id = "") : string
    {
        return $this->pStart($class, $id) . $innerHTML . $this->pEnd();
    }

    /**
     * Function pStart
     *
     * @param string $class
     * @param string $id
     * @return string
     */
    public function pStart (string $class = "", string $id = "") : string
    {
        return "<p class='$class' id='$id'>";
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

    public function sectionStart (string $class = "", string $id = "", $attributes = []) : string
    {
        return "<section>";
    }
    public function sectionEnd () : string
    {
        return "</section>";
    }

}