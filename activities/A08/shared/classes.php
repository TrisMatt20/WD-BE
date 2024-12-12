<?php
class Island
{
    public $name;
    public $description;
    public $image;
    public $islandOfPersonalityID;

    public function __construct($name, $description, $image, $islandOfPersonalityID)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
    }

    public function createIsland()
    {
        return "
        <div class='col-12 col-md-6'>
            <img class='islandImage img-fluid' src='assets/img/" . $this->image . "' alt='" . $this->name . "'>
            <h3 class='islandName'>
                " . $this->name . "
            </h3>
            <h5 class='p1 animate-up'>
                " . $this->description . "
            </h5>
            <div class='d-flex justify-content-center'>
                <a href='view.php?id=" . $this->islandOfPersonalityID . "'>
                    <button class='visit button-64 animate-up' role='button'>
                        <span class='text'>Visit Island</span>
                    </button>
                </a>
            </div>
        </div>";
    }

    public function showDescrip() {
        return "
        <p class='islandDescription px-5'>
                    ".$this->description."
                </p>";
    }
}

class IslandContent 
{
    public $islandContentID;
    public $islandOfPersonalityID;

    public $content;

    public function __construct($islandContentID, $islandOfPersonalityID, $content) 
    {
        $this->islandContentID = $islandContentID;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->content = $content;
    }

    public function displayContent() {
        return "<p class='islandDescription px-5'>
                    ".$this->content."
                </p>";
    }
}
?>