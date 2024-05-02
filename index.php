<?php
include ('TarifDto.php');
/*
 * Вместо простого массива можно брать данные из БД и т.д.
 */
$data=['name'=>'Базовый',
    'cost'=>3,
    'type'=>'Актуальный',
    'speed'=>100,
    'ValidityPeriod'=>'21.03.2025'];
$dto=new TarifDto($data);

?>
<!-- Верстка просто для примера -->
<!DOCTYPE html>
<html>
 <head>
   <title>Тарифный план</title>
   <meta charset="utf-8">
     <style>
         div{
             margin-top: 10px;
         }
     </style>
 </head>
 <body>

    <div><b>Наименование:</b> <?php echo $dto->name; ?></div>
    <div><b>Стоимость:</b> <?php echo $dto->cost; ?></div>
    <div><b>Скорость:</b> <?php echo $dto->speed; ?></div>
    <div><b>Тип тарифа:</b> <?php echo $dto->type; ?></div>
    <div><b>Срок действия:</b> <?php echo $dto->ValidityPeriod; ?></div>

</body>
</html>