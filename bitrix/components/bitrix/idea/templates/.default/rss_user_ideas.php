<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$AuthorId = intval($arResult["VARIABLES"]["user_id"]);
if($arUser = $USER->GetByID($AuthorId)->Fetch())
{
	$UName = CUser::FormatName($arParams["NAME_TEMPLATE"], $arUser, true);
}
?>
<?$APPLICATION->IncludeComponent(
		"bitrix:idea.rss",
		"",
		Array(
			"RSS_TYPE" => $arResult["VARIABLES"]["type"],
			"IDEA_URL" => $arParams["BLOG_URL"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"FILTER" => array(
				"AUTHOR_ID" => $AuthorId,
			),
			"PATH_TO_POST" => $arResult["PATH_TO_POST"],
			"IMAGE_MAX_WIDTH"			=> $arParams["IMAGE_MAX_WIDTH"],
			"IMAGE_MAX_HEIGHT"			=> $arParams["IMAGE_MAX_HEIGHT"],
			"USER"			=> $arResult["PATH_TO_USER"],
			"INDEX"			=> $arResult["PATH_TO_INDEX"],
			"RSS_CNT" => 10,
			"CUSTOM_TITLE" => GetMessage("RSS_TITLE", array("#USER_NAME#" => $UName)),
			"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
		),
		$component
);
?>