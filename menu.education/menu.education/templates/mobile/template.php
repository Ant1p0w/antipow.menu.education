<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<ul>
    <? foreach ($arResult['ITEMS'] as $key => $arSection) { ?>
        <li class="has-sub">
           <?=$arResult['SECTIONS'][$key]?>
            <ul>
                <?foreach ($arSection as $item){?>
                    <li>
                        <a href=" <?=$item['DETAIL_PAGE_URL']?>">
                            <?=$item['NAME']?>
                        </a>
                    </li>
                <?}?>
            </ul>
        </li>
    <? } ?>
</ul>
