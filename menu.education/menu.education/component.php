<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
\Bitrix\Main\Loader::includeModule('iblock');


if ($this->StartResultCache())
{
    $arFilterSections = Array('IBLOCK_ID' => 46, 'GLOBAL_ACTIVE' => 'Y');
    $resSections = CIBlockSection::GetList(Array("SORT" => "ASC"), $arFilterSections);
    while ($arSection = $resSections->GetNext())
    {
        $arResult['SECTIONS'][$arSection['ID']] = $arSection['NAME'];

        //находим элементы
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL");
        $arFilter = Array("IBLOCK_ID" => 46, "ACTIVE" => "Y", "SECTION_ID" => $arSection['ID']);
        $res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array(), $arSelect);
        while ($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            $arResult['ITEMS'][$arSection['ID']][$arFields['ID']] = $arFields;
        }
    }
    $this->IncludeComponentTemplate();
}





