<?php
$array        = array(
                        0  => 'Бренд',
                        1  => 'Артикул',
                        2  => 'Товарная группа',
                        3  => 'Наименование',
                        4  => 'МРЦ',
                        5  => 'Lussole склад',
                        6  => 'SvetResurs склад',
                        7  => 'СВХ',
                        8  => 'Основной склад',
                        9  => 'склад Европа',
                        10 => 'Суммарные остатки',
                        11 => 'Дата поступления',
                        12 => 'Ссылка на картику',
                        13 => 'Параметры',
                        14 => '',
                        15 => '',
                        16 => '',
                        17 => '',
                        18 => '',
                        19 => 'Свойства товара',
                        20 => '',
                        21 => '',
                        22 => '',
                        23 => '',
                        24 => '',
                        25 => '',
                        26 => '',
                        27 => '',
                        28 => '',
                        29 => '',
                        30 => '',
                        31 => '',
                        32 => '',
                        33 => '',
                        34 => '',
                        35 => '',
                        36 => '',
                        37 => '',
                        38 => '',
                        39 => '',
                        40 => 'Габариты товара (мм)',
                        41 => '',
                        42 => '',
                        43 => '',
                        44 => '',
                        45 => 'Упаковка',
                        46 => '',
                        47 => '',
                        48 => '',
                        49 => '',
                        50 => '',
                        51 => '',
                        52 => ''
                    );
$skuRowNumber = array_search('Артикул', $array);
$stockRowNumber = array_search('Суммарные остатки', $array);
var_dump($skuRowNumber, $stockRowNumber);

foreach ($array as $key => $value) {
    if ($value=='Артикул')
        $key=$skuRowNumber;
    if ($value=='Суммарные остатки')
        $key=$stockRowNumber;
}
var_dump($skuRowNumber, $stockRowNumber);