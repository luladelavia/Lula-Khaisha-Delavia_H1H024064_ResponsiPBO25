<?php
require_once "Pokemon.php";

class Alakazam extends Pokemon {

    public function __construct() {
        parent::__construct(
            "Alakazam",
            "Psychic",
            5,
            120,
            "Psychic Blast"
        );
    }

    public function specialMoveDescription() {
        return "Alakazam melepaskan energi psikis besar yang meningkatkan fokus dan kekuatan.";
    }
}
