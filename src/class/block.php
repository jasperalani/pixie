<?php


class block
{
    public $content;

    public function __construct($content = 'undefined')
    {
        $this->content = $content = 'undefined' ? $content : 'undefined';
    }

    /**
     * @return int
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param int $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}