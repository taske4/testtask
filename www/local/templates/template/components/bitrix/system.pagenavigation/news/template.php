<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="row">
    <nav class="pagination-container">
        <ul class="d-flex flex-row pagination">
            <?if($arResult["bDescPageNumbering"] === true):?>
                 <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                    <?if($arResult["bSavePage"]):?>
                       <li class="page-item page-prev page-item--colored"><a class="page-link" class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">Назад</a></li>
                    <?else:?>
                       <?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1)):?>
                          <li class="page-item page-prev page-item--colored"><a class="page-link" class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">Назад</a></li>
                       <?else:?>
                          <li class="page-item page-prev page-item--colored"><a class="page-link" class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">Назад</a></li>
                       <?endif?>
                    <?endif?>

                    <?if ($arResult["nStartPage"] < $arResult["NavPageCount"]):?>
                       <?if($arResult["bSavePage"]):?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">1</a></li>
                       <?else:?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                       <?endif?>
                       <?if($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)):?>
                          <li class="page-item">...</li>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=intVal($arResult["nStartPage"] + ($arResult["NavPageCount"] - $arResult["nStartPage"]) / 2)?>">...</a></li>
                       <?endif?>
                    <?endif?>
                 <?endif?>
                 <?do{$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>
                    <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                       <li class="page-item" class="page-item--colored"><?=$NavRecordGroupPrint?></li>
                    <?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li>
                    <?else:?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li>
                    <?endif?>
                    <?$arResult["nStartPage"]--;?>
                 <?} while($arResult["nStartPage"] >= $arResult["nEndPage"]);?>
                 <?if ($arResult["NavPageNomer"] > 1):?>
                    <?if ($arResult["nEndPage"] > 1):?>
                       <?if ($arResult["nEndPage"] > 2):?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] / 2)?>">...</a></li>
                       <?endif?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=$arResult["NavPageCount"]?></a></li>
                    <?endif?>
                    <li class="page-item page-next page-item--colored"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">Вперед</a></li>
                 <?endif?>
              <?else:?>
                 <?if ($arResult["NavPageNomer"] > 1):?>
                    <?if($arResult["bSavePage"]):?>
                       <li class="page-item page-prev page-item--colored"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">Назад</a></li>
                    <?else:?>
                       <?if ($arResult["NavPageNomer"] > 2):?>
                          <li class="page-item page-prev page-item--colored"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">Назад</a></li>
                       <?else:?>
                          <li class="page-item page-prev page-item--colored"><a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">Назад</a></li>
                       <?endif?>
                    <?endif?>
                    <?if ($arResult["nStartPage"] > 1):?>
                       <?if($arResult["bSavePage"]):?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a></li>
                       <?else:?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                       <?endif?>
                       <?if ($arResult["nStartPage"] > 2):?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nStartPage"] / 2)?>">...</a></li>
                       <?endif?>
                    <?endif?>
                 <?endif?>
                 <?do{?>
                    <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                       <li class="page-item page-item--colored"><a class="page-link" href="javascript:void(0);"><?=$arResult["nStartPage"]?></a></li>
                    <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
                    <?else:?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
                    <?endif?>
                    <?
                       $arResult["nStartPage"]++;
                    ?>
                 <?} while($arResult["nStartPage"] <= $arResult["nEndPage"]);?>
                 <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                    <?if ($arResult["nEndPage"] < $arResult["NavPageCount"]):?>
                       <?if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):?>
                          <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2)?>">...</a></li>
                       <?endif?>
                       <li class="page-item"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a></li>
                    <?endif?>
                    <li class="page-item page-next page-item--colored"><a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">Вперед</a></li>
                 <?endif?>
              <?endif?>
              <?if ($arResult["bShowAll"]):?>
                 <?if ($arResult["NavShowAll"]):?>
                    <li class="page-item"><a class="page-link" class="modern-page-pagen" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a></li>
                 <?else:?>
                    <li class="page-item"><a class="page-link" class="modern-page-all" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_all")?></a></li>
                 <?endif?>
              <?endif?>
        </ul>
    </nav>
</div>