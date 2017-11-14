<?php

function values_rooms($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        '1' => 1,
        '1.5' => 1.5,
        '2' => 2,
        '2.5' => 2.5,
        '3' => 3,
        '3.5' => 3.5,
        '4' => 4,
        '4.5' => 4.5,
        '5' => 5,
        '5.5' => 5.5,
        '6' => 6,
        '6.5' => 6.5,
        '7' => 7,
        '7.5' => 7.5,
        '8' => 8,
        '8.5' => 8.5,
        '9' => 9,
        '9.5' => 9.5,
        '10' => 10
        
    ];
}

function values_wholerooms($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10
    ];
}

function values_halfrooms($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5
    ];
}

function values_gardenconnect($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => 'Nincs',
        2 => 'Van',
        3 => 'Belső udvar'
    ];
}

function values_stock($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        0 => Yii::t('apartment', 'Ground floor'),
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10
    ];
}

function values_stocks($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10
    ];
}

function values_type($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => Yii::t('apartment', 'House'),
        2 => Yii::t('apartment', 'Flat'),
        3 => Yii::t('apartment', 'Room')
    ];
}

function values_type_search($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        'haz' => Yii::t('apartment', 'House'),
        'lakas' => Yii::t('apartment', 'Flat'),
        'haz-es-lakas' => Yii::t('apartment', 'House & Flat'),
        'szoba' => Yii::t('apartment', 'Room')
    ];
}

function values_material($default = null, $is_apartment = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    $values = [
        '' => $default,
        1 => Yii::t('apartment', 'Brick'),
        2 => Yii::t('apartment', 'Panel'),
        3 => Yii::t('apartment', 'Wooden'),
        4 => Yii::t('apartment', 'Vályog'),
        6 => Yii::t('apartment', 'Kő'),
        7 => Yii::t('apartment', 'Könnyűszerkezetes'),
        8 => Yii::t('apartment', 'Alternatív'),
        9 => Yii::t('apartment', 'Csúsztatott zsalu'),
        10 => Yii::t('apartment', 'Rönk'),
        11 => Yii::t('apartment', 'Kő és tégla'),
        12 => Yii::t('apartment', 'Szilikát'),
        13 => Yii::t('apartment', 'Prokoncept'),
        14 => Yii::t('apartment', 'Tufa'),
        15 => Yii::t('apartment', 'YTONG'),
        5 => Yii::t('apartment', 'Egyéb')
    ];
    

    return $values;
}

function values_heating($default = null)
{
    
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => Yii::t('apartment', 'Egyedi fűtés'),
        2 => Yii::t('apartment', 'Központi fűtés'),
        3 => Yii::t('apartment', 'Távfűtés'),
        4 => Yii::t('apartment', 'Központi (egyedi mérővel)'),
        5 => Yii::t('apartment', 'Házközponti'),
        6 => Yii::t('apartment', 'Házközponti (egyedi mérővel)'),
        7 => Yii::t('apartment', 'Villany'),
        8 => Yii::t('apartment', 'Konvektoros'),
        9 => Yii::t('apartment', 'Geotermikus'),
        10 => Yii::t('apartment', 'Kandalló'),
        11 => Yii::t('apartment', 'Cserépkályha'),
        12 => Yii::t('apartment', 'Héra'),
        13 => Yii::t('apartment', 'Cirkó'),
        14 => Yii::t('apartment', 'Egyéb')
    ];
}

function values_furnitured($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        0 => Yii::t('apartment', 'Bútorozatlan'),
        1 => Yii::t('apartment', 'Bútorozott'),
        2 => Yii::t('apartment', 'Részben bútorozott'),
        
    ];
}

function values_parking($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => Yii::t('apartment', 'Utcán'),
        2 => Yii::t('apartment', 'Udvarban'),
        3 => Yii::t('apartment', 'Garázsban')
    ];
}

function values_price($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => '40e Ft-ig',
        2 => '41 - 60e Ft',
        3 => '61 - 80e Ft',
        4 => '81 - 100e Ft',
        5 => '101e Ft-tól',
    ];
}

function values_subtypes($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => Yii::t('apartment', 'Családi ház'),
        2 => Yii::t('apartment', 'Házrész'),
        3 => Yii::t('apartment', 'Ikerház'),
        4 => Yii::t('apartment', 'Könnyűszerkezetes ház'),
        5 => Yii::t('apartment', 'Egyéb')
    ];
}

function values_bathrooms($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5
    ];
}

function values_garden($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => 'Nincs',
        2 => '1-300nm',
        3 => '301-600nm',
        4 => '601-900nm',
        5 => '900nm +',
    ];
}

function values_condition($default = null)
{
    if(is_null($default)) $default = Yii::t('apartment', 'Kiválasztás');
    
    return [
        '' => $default,
        1 => Yii::t('apartment', 'Normál'),
        2 => Yii::t('apartment', 'Felújított'),
        3 => Yii::t('apartment', 'Felújítandó'),
    ];
}

function get_value($fn, $value, $default = ''){
    
    $fn = "values_{$fn}";
    
    if(!function_exists($fn)){
        throw new Exception("Nincs ilyen funkció: $fn");
    }
    
    $values = $fn($default);
    
    return isset($values[$value]) ? $values[$value] : $default;
    
    
}
