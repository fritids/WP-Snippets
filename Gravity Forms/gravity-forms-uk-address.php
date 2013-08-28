<?php

/* --------------------------------------------------------------------
   Add UK Address option in Gravity Forms
   http://www.wpsites.co.uk/468-gravity-forms-adding-uk-specific-address-field.php
   -------------------------------------------------------------------- */


add_filter("gform_address_types", "uk_address", 10, 2);
function uk_address($address_types, $form_id){
$address_types["uk"] = array(
"label" => "UK",
"country" => "United Kingdom",
"zip_label" => "Postcode",
"state_label" => "County",
"states" => array(""=>"","Aberdeenshire"=>"Aberdeenshire","Angus/Forfarshire"=>"Angus/Forfarshire","Argyllshire"=>"Argyllshire","Ayrshire"=>"Ayrshire","Banffshire"=>"Banffshire","Bedfordshire"=>"Bedfordshire","Berkshire"=>"Berkshire",
"Berwickshire"=>"Berwickshire","Blaenau Gwent"=>"Blaenau Gwent","Bridgend"=>"Bridgend","Buckinghamshire"=>"Buckinghamshire","Buteshire"=>"Buteshire","Caerphilly"=>"Caerphilly","Caithness"=>"Caithness",
"Cambridgeshire"=>"Cambridgeshire","Cardiff"=>"Cardiff","Carmarthenshire"=>"Carmarthenshire","Ceredigion"=>"Ceredigion","Cheshire"=>"Cheshire","Clackmannanshire"=>"Clackmannanshire",
"Conwy"=>"Conwy","Cornwall"=>"Cornwall","Cromartyshire"=>"Cromartyshire","Cumberland"=>"Cumberland","Denbighshire"=>"Denbighshire","Derbyshire"=>"Derbyshire","Devon"=>"Devon","Dorset"=>"Dorset",
"Dumfriesshire"=>"Dumfriesshire","Dunbartonshire/Dumbartonshire"=>"Dunbartonshire/Dumbartonshire","Durham"=>"Durham","East Lothian/Haddingtonshire"=>"East Lothian/Haddingtonshire","Essex"=>"Essex","Fife"=>"Fife",
"Flintshire"=>"Flintshire","Gloucestershire"=>"Gloucestershire","Gwynedd"=>"Gwynedd","Hampshire"=>"Hampshire","Herefordshire"=>"Herefordshire","Hertfordshire"=>"Hertfordshire","Huntingdonshire"=>"Huntingdonshire",
"Inverness-shire"=>"Inverness-shire","Isle of Anglesey"=>"Isle of Anglesey","Kent"=>"Kent","Kincardineshire"=>"Kincardineshire","Kinross-shire"=>"Kinross-shire","Kirkcudbrightshire"=>"Kirkcudbrightshire",
"Lanarkshire"=>"Lanarkshire","Lancashire"=>"Lancashire","Leicestershire"=>"Leicestershire","Lincolnshire"=>"Lincolnshire","Merthyr Tydfil"=>"Merthyr Tydfil","Middlesex"=>"Middlesex",
"Midlothian/Edinburghshire"=>"Midlothian/Edinburghshire","Monmouthshire"=>"Monmouthshire","Morayshire"=>"Morayshire","Nairnshire"=>"Nairnshire","Neath Port Talbot"=>"Neath Port Talbot",
"Newport"=>"Newport","Norfolk"=>"Norfolk","Northamptonshire"=>"Northamptonshire","Northumberland"=>"Northumberland","Nottinghamshire"=>"Nottinghamshire","Orkney"=>"Orkney",
"Oxfordshire"=>"Oxfordshire","Peeblesshire"=>"Peeblesshire","Pembrokeshire"=>"Pembrokeshire","Perthshire"=>"Perthshire","Powys"=>"Powys","Renfrewshire"=>"Renfrewshire",
"Rhondda Cynon Taff"=>"Rhondda Cynon Taff","Ross-shire"=>"Ross-shire","Roxburghshire"=>"Roxburghshire","Rutland"=>"Rutland","Selkirkshire"=>"Selkirkshire","Shetland"=>"Shetland","Shropshire"=>"Shropshire",
"Somerset"=>"Somerset","Staffordshire"=>"Staffordshire","Stirlingshire"=>"Stirlingshire","Suffolk"=>"Suffolk","Surrey"=>"Surrey","Sussex"=>"Sussex","Sutherland"=>"Sutherland","Swansea"=>"Swansea","Torfaen"=>"Torfaen",
"Vale of Glamorgan"=>"Vale of Glamorgan","Warwickshire"=>"Warwickshire","West Lothian/Linlithgowshire"=>"West Lothian/Linlithgowshire","Westmorland"=>"Westmorland",
"Wigtownshire"=>"Wigtownshire","Wiltshire"=>"Wiltshire","Worcestershire"=>"Worcestershire","Wrexham"=>"Wrexham","Yorkshire"=>"Yorkshire")
);
return $address_types;
}
?>