<?php

namespace Sprint\Migration;


class Version20220528172207 extends Version
{
    protected $description = "";

    public function up()
    {
        $helper = $this->getHelperManager();

        $helper->Iblock()->saveIblockType([
            'ID' => 'kontakty',
            'LANG' => [
                'en' => [
                    'NAME' => 'Kontakty',
                ],
                'ru' => [
                    'NAME' => 'Контакты',
                ],
            ],
        ]);

        $iblockId1 = $helper->Iblock()->saveIblock([
            'NAME' => 'Адрес',
            'CODE' => 'user_address',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'kontakty',
        ]);

        $iblockId2 = $helper->Iblock()->saveIblock([
            'NAME' => 'Контакты',
            'CODE' => 'user_contacts',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'kontakty',
        ]);

        $helper->Iblock()->saveProperty($iblockId1, [
            'NAME' => 'Город',
            'CODE' => 'CITY',
            'PROPERTY_TYPE' => 'S',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId1, [
            'NAME' => 'Улица',
            'CODE' => 'STREET',
            'PROPERTY_TYPE' => 'S',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId1, [
            'NAME' => 'Номер дома',
            'CODE' => 'HOUSE',
            'PROPERTY_TYPE' => 'S',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId1, [
            'NAME' => 'Квартира',
            'CODE' => 'APPARTMENT',
            'PROPERTY_TYPE' => 'N',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId2, [
            'NAME' => 'ФИО',
            'CODE' => 'FIO',
            'PROPERTY_TYPE' => 'S',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId2, [
            'NAME' => 'Телефон',
            'CODE' => 'PHONE',
            'PROPERTY_TYPE' => 'S',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($iblockId2, [
            'NAME' => 'Адрес',
            'CODE' => 'ADDRESS',
            'PROPERTY_TYPE' => 'E',
        ]);

        $this->outSuccess('Инфоблоки созданы');

    }

    public function down()
    {
        $helper = $this->getHelperManager();
        $okIB1 = $helper->Iblock()->deleteIblockIfExists('user_address');
        $okIBType = $helper->Iblock()->deleteIblockTypeIfExists('kontakty');

        if ($okIBType) {
            $this->outSuccess('Тип Инфоблока удален');
        } else {
            $this->outError('Ошибка удаления типа инфоблока');
        }

        if ($okIB1) {
            $this->outSuccess('Инфоблок удален');
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }
}
