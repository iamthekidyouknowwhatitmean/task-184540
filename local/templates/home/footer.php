<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <!-- <h3 class="footer-heading mb-4">About HomeSpace</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque,
              consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima
              minus odio!</p> -->

              <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_about.php"
                  )
                );?>
          </div>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"MAX_LEVEL" => "4",	// Уровень вложенности меню
		//"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?>          
        <div class="col-lg-4 mb-5 mb-lg-0">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_media.php"
            )
          );?>
        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/includes/footer_copyright.php",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
        </div>

      </div>
    </div>
  </footer>

  </div>

</body>

</html>
