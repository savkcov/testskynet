<?php

class TarifDto
{
    public string $name;
    public int $cost;
    public string $type;
    public int $speed;

    public string $ValidityPeriod;
    public $types=[
        'Актуальный',
        'Архивный',
        'Системный'
    ];
    public function __construct(array $data)
    {
        $this->Validate($data);

        $this->name=$data['name'];

        $this->cost=$data['cost'];

        $this->type=$data['type'];

        $this->speed=$data['speed'];

        $this->ValidityPeriod=$data['ValidityPeriod'];
    }

    private function Validate($data)
    {

        if(!in_array($data['type'], $this->types)){
            throw new \Exception('Не верный тип тарифа', 1);
        }

        if(!$this->ValidateDate($data['ValidityPeriod'])){
            throw new \Exception('Указана не верная дата', 2);
        }

    }

    private function ValidateDate($date, $format = 'd.m.Y')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}