<?php
class Image {
    private $dates;
    private $img_path;
    private $caption;
    private $id;
    private static $count = 1;

    public function __construct($dates, $img_path, $caption) {
        $this->dates = $dates;
        $this->img_path = $img_path;
        $this->caption = $caption;
        $this->id = self::$count;

        self::$count++;
    }

    public function getImg() {
        return $this->img_path;
    }

    public function getDates() {
        return $this->dates;
    }

    public function getCaption() {
        return $this->caption;
    }

};
?>