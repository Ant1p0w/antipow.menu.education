<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<ul>
    <li>
        <a href="/education_center/">Учебный центр</a>
    </li>
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
    <li>
        <a href="/seminars/">
            Семинары
        </a>
    </li>
</ul>
