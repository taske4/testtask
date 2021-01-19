<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="row flex-column articles">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <article class="col article" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="row flex-column m-0">

                <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <a class="article__detail" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h2 class="article__title"><?echo $arItem["NAME"]?></h2></a>
                <?endif;?>

                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <time><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
                <?endif?>
            </div>
            <div class="row article-content-container">
                <? if ($arItem["PREVIEW_PICTURE"]) { ?>
                    <div class="col-auto article-image-container">
                        <img
                            class="preview_picture"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        >
                    </div>
                <? } ?>
                <div class="col d-flex align-items-center">
                    <p class="article__content-text">
                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        <?endif;?>
                        <? if ($address = $arItem['PROPERTIES']['ADDRESS']['VALUE']) { ?>
                            <a href="#" class="article__content-address"><?=$address?></a>
                        <? } ?>
                    </p>
                </div>
            </div>
        </article>
    <?endforeach;?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>