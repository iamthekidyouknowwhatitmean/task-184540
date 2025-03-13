
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "NAME","IBLOCK_ID","PROPERTY_PRICE","PROPERTY_DEAL");
$arFilter = Array("!PROPERTY_GARAGE"=>false);

$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
    echo "<pre>";
	print_r($arFields);
    echo "</pre>";
}
?> 

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>