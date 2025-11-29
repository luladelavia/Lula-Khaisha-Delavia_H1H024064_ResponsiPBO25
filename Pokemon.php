<?php

abstract class Pokemon {
    protected $name;
    protected $type;
    protected $level;
    protected $hp;
    protected $specialMove;

    public function __construct($name, $type, $level, $hp, $specialMove) {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
        $this->specialMove = $specialMove;
    }

    public function getName() { return $this->name; }
    public function getType() { return $this->type; }
    public function getLevel() { return $this->level; }
    public function getHP() { return $this->hp; }
    public function getSpecialMove() { return $this->specialMove; }

    abstract public function specialMoveDescription();

    public function train($jenis, $intensitas) {
        $before = [
            "level" => $this->level,
            "hp" => $this->hp
        ];

        // efek latihan
        $this->level += 1;
        $this->hp += $intensitas * 5;

        return [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "before" => $before,
            "after" => [
                "level" => $this->level,
                "hp" => $this->hp
            ],
            "special" => $this->specialMoveDescription(),
            "time" => date("Y-m-d H:i:s")
        ];
    }
}
