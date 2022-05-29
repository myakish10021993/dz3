<?php

    foreach($arResult["ITEMS"] as $key => $item){
        $address = GetIBlockElement($arResult["ITEMS"][$key]["PROPERTIES"]["ADDRESS"]["VALUE"], 'kontakty');
        $arResult["ITEMS"][$key]["PROPERTIES"]["ADDRESS"] = $address;
    }

?>