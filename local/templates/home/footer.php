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
        <?$APPLICATION->IncludeComponent("bitrix:menu",".default",Array(
                      "ROOT_MENU_TYPE" => "top", 
                      "MAX_LEVEL" => "4", 
                      "CHILD_MENU_TYPE" => "top", 
                      "USE_EXT" => "Y",
                      "DELAY" => "N",
                      "ALLOW_MULTI_SELECT" => "Y",
                      "MENU_CACHE_TYPE" => "N", 
                      "MENU_CACHE_TIME" => "3600", 
                      "MENU_CACHE_USE_GROUPS" => "Y", 
                      "MENU_CACHE_GET_VARS" => "" 
                    )
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
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_copyright.php"
            )
          );?>
        </div>

      </div>
    </div>
  </footer>

  </div>

</body>

</html>