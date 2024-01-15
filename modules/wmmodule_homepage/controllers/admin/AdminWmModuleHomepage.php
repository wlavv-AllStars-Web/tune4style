<?php
class AdminWmModuleHomepageController extends AdminController{
    
    public function __construct()
    {
        $this->bootstrap = true;
        parent::__construct();
        $this->context = Context::getContext();
    }

    public function initContent()
    {
        parent::initContent();
        include dirname(__FILE__).'/../../classes/WmModuleHomepageMain.php';
        $template_file = _PS_MODULE_DIR_. 'wmmodule_homepage/views/templates/admin/view.tpl';

        $this->context->smarty->assign("banners",        Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="desktop" AND icon_type=1 ORDER BY id ASC'));
        $this->context->smarty->assign("array_icons_50", Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="desktop" AND icon_type=2 ORDER BY id ASC'));
        $this->context->smarty->assign("array_icons_33", Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="desktop" AND icon_type=3 ORDER BY id ASC'));
        $this->context->smarty->assign("array_videos",   Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="desktop" AND icon_type=4 ORDER BY id ASC'));
        $this->context->smarty->assign("mobile_icons",   Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="mobile"'));
        $this->context->smarty->assign("manufacturers",  self::getManufacturers());
        $this->context->smarty->assign("modules",        _PS_MODULE_DIR_);

        $content = $this->context->smarty->fetch($template_file);
        $this->context->smarty->assign("content", $content);        

    }

    public function getManufacturers(){
        return Db::getInstance()->executeS('SELECT name, CONCAT( CONCAT(id_manufacturer, "_"), REPLACE(LOWER(name), " ", "-")) AS link_data FROM ps_manufacturer WHERE active=1 ORDER BY name ASC');
    }
/*
    public function getCompatibilities(){
        
        $result = Db::getInstance()->executeS("SELECT * FROM ps_ukoocompat_compat_asm");

        $compats_list = array();

        foreach ($result AS $row) {

            $line= array();
            $line['id_ukoocompat_compat'] = $row['id_ukoocompat_compat'];

            $sql_1 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $row['id_filter_value_1'];
            $sql_2 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $row['id_filter_value_2'];
            $sql_3 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $row['id_filter_value_3'];
            $sql_4 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $row['id_filter_value_4'];

            $result_1 = Db::getInstance()->executeS($sql_1);
            $result_2 = Db::getInstance()->executeS($sql_2);
            $result_3 = Db::getInstance()->executeS($sql_3);
            $result_4 = Db::getInstance()->executeS($sql_4);

            $filters= array();
            foreach ($result_1 AS $row_1) $filters[$row['id_filter_value_1']] = $row_1['value'];
            foreach ($result_2 AS $row_2) $filters[$row['id_filter_value_2']] = $row_2['value'];
            foreach ($result_3 AS $row_3) $filters[$row['id_filter_value_3']] = $row_3['value'];
            foreach ($result_4 AS $row_4) $filters[$row['id_filter_value_4']] = $row_4['value'];

            $line['filters'] = $filters;
            $compats_list[] = $line;
        }

        return $compats_list;

    }

    public function getCompatibilitiesName($brand, $model, $type, $version){
        
        $sql_1 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $brand;
        $sql_2 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $model;
        $sql_3 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $type;
        $sql_4 = "SELECT value FROM ps_ukoocompat_criterion_lang WHERE id_ukoocompat_criterion = " . $version;

        $result_1 = Db::getInstance()->getValue($sql_1);
        $result_2 = Db::getInstance()->getValue($sql_2);
        $result_3 = Db::getInstance()->getValue($sql_3);
        $result_4 = Db::getInstance()->getValue($sql_4);

        return $result_1 . ' ' . $result_2 . ' ' . $result_3 . ' ' . $result_4;
    }
*/
    public function postProcess(){
        
        if(Tools::getValue('action') == 'updateDesktop'){
            
            echo '<pre>' . print_r(Tools::getAllValues(), 1) . '</pre>';
            exit;
        }        
        if(Tools::getValue('action') == 'update'){
            
            $data = Tools::getAllValues();
            $car = '';
            $image_en = '';
            $image_es = '';
            $image_fr = '';

            if (isset($_FILES['fileUpload_en']['name']) && !empty($_FILES['fileUpload_en']) && !empty($_FILES['fileUpload_en']['tmp_name']))
            {

            	$file_object = array();
                $file_object['name'] = $data['id'];
                $file_object['type'] = $_FILES['fileUpload_en']['type'];
                $file_object['tmp_name'] = $_FILES['fileUpload_en']['tmp_name'];
                $file_object['error'] = $_FILES['fileUpload_en']['error'];
                $file_object['size'] = $_FILES['fileUpload_en']['size'];

                $ext = substr($_FILES['fileUpload_en']['name'], strrpos($_FILES['fileUpload_en']['name'] , '.') + 1);
                $full_final_path = '/img/homepage/' . $data['type'] . '/' . $data['id'] . '_en.' . $ext;
                echo $full_final_path;
                exit;
                if (!move_uploaded_file($file_object['tmp_name'], $full_final_path)) {
                    
                }else{
                    move_uploaded_file($file_object['tmp_name'], $full_final_path);
                    move_uploaded_file($file_object['name'], $full_final_path);
                }
                
                $image_en = "https://" . $_SERVER['SERVER_NAME'] . '/img/homepage/' . $data['type'] . '/' . $data['id'] . '_en.' . $ext;
            }
            
            
            if (isset($_FILES['fileUpload_es']['name']) && !empty($_FILES['fileUpload_es']) && !empty($_FILES['fileUpload_es']['tmp_name']))
            {

            	$file_object = array();
                $file_object['name'] = $data['id'];
                $file_object['type'] = $_FILES['fileUpload_es']['type'];
                $file_object['tmp_name'] = $_FILES['fileUpload_es']['tmp_name'];
                $file_object['error'] = $_FILES['fileUpload_es']['error'];
                $file_object['size'] = $_FILES['fileUpload_es']['size'];

                $ext = substr($_FILES['fileUpload_es']['name'], strrpos($_FILES['fileUpload_es']['name'] , '.') + 1);
                $full_final_path = '/home/allstar1/public_html/img/homepage/' . $data['type'] . '/' . $data['id'] . '_es.' . $ext;
                
                if (!move_uploaded_file($file_object['tmp_name'], $full_final_path)) {
                    
                }else{
                    move_uploaded_file($file_object['tmp_name'], $full_final_path);
                    move_uploaded_file($file_object['name'], $full_final_path);
                }
                
                $image_es = "https://" . $_SERVER['SERVER_NAME'] . '/img/homepage/' . $data['type'] . '/' . $data['id'] . '_es.' . $ext;
            }
            
            
            if (isset($_FILES['fileUpload_fr']['name']) && !empty($_FILES['fileUpload_fr']) && !empty($_FILES['fileUpload_fr']['tmp_name']))
            {

            	$file_object = array();
                $file_object['name'] = $data['id'];
                $file_object['type'] = $_FILES['fileUpload_fr']['type'];
                $file_object['tmp_name'] = $_FILES['fileUpload_fr']['tmp_name'];
                $file_object['error'] = $_FILES['fileUpload_fr']['error'];
                $file_object['size'] = $_FILES['fileUpload_fr']['size'];

                $ext = substr($_FILES['fileUpload_fr']['name'], strrpos($_FILES['fileUpload_fr']['name'] , '.') + 1);
                $full_final_path = '/home/allstar1/public_html/img/homepage/' . $data['type'] . '/' . $data['id'] . '_fr.' . $ext;
                
                if (!move_uploaded_file($file_object['tmp_name'], $full_final_path)) {
                    
                }else{
                    move_uploaded_file($file_object['tmp_name'], $full_final_path);
                    move_uploaded_file($file_object['name'], $full_final_path);
                }
                
                $image_fr = "https://" . $_SERVER['SERVER_NAME'] . '/img/homepage/' . $data['type'] . '/' . $data['id'] . '_fr.' . $ext;
            }
            
            if($data['icon_type'] == 4) $image_fr = $image_es = $image_en;
            
            if(isset($data['car'])) $car  = explode('_', $data['car']);

            
            $sql = "UPDATE ps_asm_homepage_temp SET ";
            if(isset($data['active'])) $sql.= " active=1 "; else  $sql.= " active=0 ";
            if(isset($data['icon_type'])) $sql.= ", icon_type='" . $data['icon_type'] . "'";
            if(isset($data['type'])) $sql.= ", destination='" . $data['type'] . "'";
            if(strlen($image_en) > 0) $sql.= ", image_en='" . $image_en . "'";
            if(strlen($image_es) > 0) $sql.= ", image_es='" . $image_es . "'";
            if(strlen($image_fr) > 0) $sql.= ", image_fr='" . $image_fr . "'";
            
            $sql.= ", title_en='" . $data['title_en'] ."', title_es='" . $data['title_es'] . "', title_fr='" . $data['title_fr'] . "', link='" . strtolower($data['link']) . "', brand=" . ($car[0]+0) . ", model=" . ($car[1]+0) . ", type=" . ($car[2]+0) . ", version=" . ($car[3]+0) . " WHERE id=" . $data['id'];
            Db::getInstance()->execute($sql);
            
        }elseif(Tools::getValue('action') == 'getBrandImages'){
           $this->getBrandImages(Tools::getValue('id_image'), Tools::getValue('id_element'), Tools::getValue('type'), Tools::getValue('element'));
            die();
        }elseif(Tools::getValue('action') == 'updateHomepageTemp'){

            $data = Tools::getAllValues();
            
            $car_brand = 0;
            $car_model = 0;
            $car_type = 0;
            $car_version = 0;
            $link = '';
            
            $row_data = Db::getInstance()->getRow("SELECT * FROM ps_asm_homepage_manufacturers WHERE id=" . $data['id_ps_asm_homepage_temp']);

            if($row_data['id_manufacturer']  > 0){
                $name = Db::getInstance()->getValue('SELECT name FROM ps_manufacturer WHERE id_manufacturer = ' . $row_data['id_manufacturer']);
                $link = $row_data['id_manufacturer'] . '_' . str_replace(' ', '-', $name);
            }elseif($row_data['id_category']  > 0){
                $name = Db::getInstance()->getValue('SELECT name FROM ps_category_lang WHERE id_category = ' . $row_data['id_category'] . ' AND id_lang=1');
                $link = $row_data['id_category'] . '_' . str_replace(' ', '-', $name);
            }
            
            $type="desktop";
            if($row_data['zone'] == 5) $type="mobile";
            
            $sql = "UPDATE ps_asm_homepage_temp 
                    SET active=1, 
                        icon_type='" . $row_data['zone'] . "', 
                        destination='" . $type . "', 
                        image_en='" . $row_data['url_en'] . "', 
                        image_es='" . $row_data['url_es'] . "', 
                        image_fr='" . $row_data['url_fr'] . "', 
                        title_en='" . $data['title_en'] ."', 
                        title_es='" . $data['title_es'] . "',
                        title_fr='" . $data['title_fr'] . "', 
                        link='" .   strtolower($link) . "', 
                        brand=" .   $car_brand . ", 
                        model=" .   $car_model . ", 
                        type="  .   $car_type . ", 
                        version=" . $car_version . " 
                    WHERE id=" . $data['id_image'];
            Db::getInstance()->execute($sql);
            
        }elseif(Tools::getValue('action') == 'uploadSubmitButton'){
            
            $element = Tools::getValue('uploadElement');
            $idElement = Tools::getValue('uploadIdElement');
            $zone = Tools::getValue('uploadTypeValue');
            $id_image = Tools::getValue('uploadIdImage');
            
            $image_name = Tools::getValue('uploadIdElement').'_'.date('ymdhis');
            
            $zoneString = '';

            switch($zone){
                case 1:{
                    $zoneString = 'slider';
                    $fileUpload_name = 'slider';
                    break;
                }
                case 2:{
                    $zoneString = 'icon50';
                    $fileUpload_name = 'icon_50';
                    break;
                }
                case 3:{
                    $zoneString = 'icon33';
                    $fileUpload_name = 'icon_33';
                    break;
                }
                case 4:{
                    $zoneString = 'video';
                    $fileUpload_name = 'icon_video';
                    break;
                }
                case 5:{
                    $zoneString = 'mobile';
                    $fileUpload_name = 'icon_mobile';
                    break;
                }
            }

            if($idElement == 523) $element = 'category';
            
            $image_en = self::uploadIconsProcess($_FILES['fileUpload_' . $fileUpload_name . '_en'], $zoneString, 'en', $image_name);
            $image_es = self::uploadIconsProcess($_FILES['fileUpload_' . $fileUpload_name . '_es'], $zoneString, 'es', $image_name);
            $image_fr = self::uploadIconsProcess($_FILES['fileUpload_' . $fileUpload_name . '_fr'], $zoneString, 'fr', $image_name);
            
            if($element == 'manufacturer'){
                $sql = 'INSERT INTO `ps_asm_homepage_manufacturers`(`id_manufacturer`,  `zone`, `url_en`, `url_es`, `url_fr`, `inserted_at`) VALUES (' . $idElement . ',' . $zone . '' . ',"' . $image_en . '","' . $image_es . '","' . $image_fr . '","' . date('Y-m-d') . '")';
            }elseif($element == 'category'){
                $sql = 'INSERT INTO `ps_asm_homepage_manufacturers`(`id_category`,      `zone`, `url_en`, `url_es`, `url_fr`, `inserted_at`) VALUES (' . $idElement . ',' . $zone . '' . ',"' . $image_en . '","' . $image_es . '","' . $image_fr . '","' . date('Y-m-d') . '")';
            }elseif($element == 'compatibility'){
                $sql = 'INSERT INTO `ps_asm_homepage_manufacturers`(`id_compatibility`, `zone`, `url_en`, `url_es`, `url_fr`, `inserted_at`) VALUES ("' . $idElement . '",' . $zone . '' . ',"' . $image_en . '","' . $image_es . '","' . $image_fr . '","' . date('Y-m-d') . '")';
            }elseif($element == 'video'){
                $sql = 'INSERT INTO `ps_asm_homepage_manufacturers`(`id_video`, `zone`, `url_en`, `url_es`, `url_fr`, `inserted_at`) VALUES (' . $idElement . ', ' . $zone . '' . ',"' . $image_en . '","' . $image_es . '","' . $image_fr . '","' . date('Y-m-d') . '")';
            }
            
            Db::getInstance()->execute($sql);
            
            /** VER TIPOS POSSIVEIS **/
            $this->getBrandImages($id_image, $idElement, $zone, $element);
            
            die();
        }elseif(Tools::getValue('action') == 'updateVideoCode'){
            self::setVideoCode();
        }elseif(Tools::getValue('action') == 'setDesktopLive'){
            self::setDesktopLive();
        }elseif(Tools::getValue('action') == 'setMobileLive'){
            self::setMobileLive();
        }

    }

    public function getBrandImages($id_image, $id_element, $zone, $element){

        if($id_element == 523) $element = 'category';

        if($element == 'manufacturer'){
            $id_elements = explode("_", $id_element);
            $id_element = $id_elements[0];
            $sql = 'SELECT name FROM ps_manufacturer WHERE id_manufacturer = ' . $id_element;
            $name = Db::getInstance()->getValue($sql);
        }elseif($element == 'category'){
            $sql = 'SELECT name FROM ps_category_lang WHERE id_category = ' . $id_element . ' AND id_lang=1';
            $name = Db::getInstance()->getValue($sql);
        }elseif($element == 'video'){
            $name = "Video " . $id_element;
        }

        $model_content = self::getImagesOfZone($id_image, $id_element, $zone, $element);
        
        $array=[
            'modal_title' => $name,
            'modal_content' => $model_content,
            ];

        echo json_encode($array);
    }
    
    public function getImagesOfZone($id_image, $id_element, $zone, $element)
    {

        if (strpos($id_element, "_") !== false) {
            $id_elements = explode("_", $id_element);
            
            if(count($id_elements) > 2){
                $id_element = $id_elements[0] . '_' . $id_elements[1] . '_' . $id_elements[2] . '_' . $id_elements[3];
            }else{
                $id_element = $id_elements[0];
            }
        }

        if($element == 'manufacturer'){
            $field = 'id_manufacturer';
            $sql = 'SELECT * FROM ps_asm_homepage_manufacturers WHERE ' . $field . ' = '. $id_element . " AND zone=" . $zone;
        }elseif($element == 'category'){
            $field = 'id_category';
            $sql = 'SELECT * FROM ps_asm_homepage_manufacturers WHERE ' . $field . ' = '. $id_element . " AND zone=" . $zone;
        }elseif($element == 'compatibility'){
            $field = 'id_compatibility';
            $sql = 'SELECT * FROM ps_asm_homepage_manufacturers WHERE ' . $field . ' = "'. $id_element . '" AND zone=' . $zone;
        }elseif($element == 'video'){
            $sql = 'SELECT * FROM ps_asm_homepage_manufacturers WHERE id_video > 0';
        }
        
        $icons_brand = Db::getInstance()->executeS($sql);
        
        switch($zone){
            case 1:{
                $fileUpload_name = 'fileUpload_slider';
                $upload_image = 'upload_banner';
                break;
            };
            case 2:{
                $fileUpload_name = 'fileUpload_icon_50';
                $upload_image = 'upload_50';
                break;
            };
            case 3:{
                $fileUpload_name = 'fileUpload_icon_33';
                $upload_image = 'upload_33';
                break;
            };
            case 4:{
                $fileUpload_name = 'fileUpload_icon_video';
                $upload_image = 'upload_video';
                break;
            };
            case 5:{
                $fileUpload_name = 'fileUpload_icon_mobile';
                $upload_image = 'upload_mobile';
                break;
            };
            default:{
                $fileUpload_name = 'fileUpload_slider';
                $upload_image = 'upload_banner';
                break;
            }
        }
        
        $html = '<div style="text-align: center;">';
            if(isset($icons_brand) && ( count($icons_brand) > 0 ) ){
            $html .= '<div id="image_selector_container">';
                $html .= '<h2>SELECT IMAGE</h2>';
                foreach($icons_brand AS $icon){
                    $html .= '<div class="image_container" onclick="setImage(' . $zone . ', ' . $id_image  . ', \'' . $icon['url_en'] . '\', ' . $icon['id'] . ', ' . $icon[$field] . ')">';
                        $html .= '<img src="' . $icon['url_en'] . '" style="width: 100%;">';
                    $html .= '</div>';
                }
            $html .= '</div>';
            }
            $html .= '<div>';
                if(count($icons_brand) > 0){
                    $html .= '<div style="text-align: center; display: inline-block;width: 100%;margin-top: 20px;" id="upload_button_container">';
                        $html .= '<div style="height: 30px;float: left;width: 40%;border-bottom:3px dashed #444;"></div>';
                        $html .= '<div style="height: 50px;float: left;width: 20%;height:50px;font-size: 40px;"> OR </div>';
                        $html .= '<div style="height: 30px;float: left;width: 40%;border-bottom:3px dashed #444;"></div>';
                    $html .= '</div>';
                    $html .= '<div class="row" style="margin-top: 20px;">';
                }else{
                    $html .= '<div class="row">';
                }

                $html .= '<h2>UPLOAD IMAGE</h2>
                        <form id="uploadForm" name="uploadForm" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="uploadTypeValue" id="uploadTypeValue" value="' . $zone . '">
                            <input type="hidden" name="uploadIdImage"   id="uploadIdImage"   value="' . $id_image . '">
                            <input type="hidden" name="uploadElement"   id="uploadElement"   value="' . $element . '">
                            <input type="hidden" name="uploadIdElement" id="uploadIdElement" value="' . $id_element . '">
                            <div class="col-md-4" style="text-align: center;">
                                <div style="display: none;"> <input type="file" id="' . $fileUpload_name . '_en" name="' . $fileUpload_name . '_en" onchange="addCheck(\'imageUploadEN\', 1)"/> </div>  
                                <img src="/modules/wmmodule_homepage/img/' . $upload_image . '_en.jpg?t='.rand().'" onclick="$(\'#' . $fileUpload_name . '_en\').click()" style="margin:0 auto;border: 1px solid dodgerblue;width: 100%;" id="imageUploadEN">
                            </div>	
                            <div class="col-md-4" style="text-align: center;">
                                <div style="display: none;"> <input type="file" id="' . $fileUpload_name . '_es" name="' . $fileUpload_name . '_es" onchange="addCheck(\'imageUploadES\', 2)"/> </div>  
                                <img src="/modules/wmmodule_homepage/img/' . $upload_image . '_es.jpg?t='.rand().'" onclick="$(\'#' . $fileUpload_name . '_es\').click()" style="margin:0 auto;border: 1px solid dodgerblue;width: 100%;" id="imageUploadES">
                                <button type="button" id="uploadSubmitButton" class="btn btn-primary" style="width: 100%; margin: 10px 0;">Upload</button> 
                            </div>	
                            <div class="col-md-4" style="text-align: center;">
                                <div style="display: none;"> <input type="file" id="' . $fileUpload_name . '_fr" name="' . $fileUpload_name . '_fr" onchange="addCheck(\'imageUploadFR\', 3)"/> </div>  
                                <img src="/modules/wmmodule_homepage/img/' . $upload_image . '_fr.jpg?t='.rand().'" onclick="$(\'#' . $fileUpload_name . '_fr\').click()" style="margin:0 auto;border: 1px solid dodgerblue;width: 100%;" id="imageUploadFR">
                            </div>
                        </form>';
            $html .= '</div>';
        $html .= '</div>';
        
        return $html;
    }
    
    public function uploadIconsProcess($array, $zone, $lang, $image_name)
    {

        $rot = getcwd() ;
        $rots  = explode('admin3355', $rot);
        $rot = $rots[0];
        $root_path = $rot . 'img/homepage/' . $zone . '/' . $lang . '/';
        $web_path = '/img/homepage/' . $zone . '/' . $lang . '/';

        if (!file_exists($root_path)) mkdir($root_path, 0777, true);
        
        if (isset($array['name']) && !empty($array['name']) && !empty($array['tmp_name'])){

            $ext = substr($array['name'], strrpos($array['name'] , '.') + 1);
            $full_final_path = $root_path . $image_name . '_' . $lang . '.' . $ext;

            if (!move_uploaded_file($array['tmp_name'], $full_final_path)) {
                /** Do nothing **/
            }else{
                move_uploaded_file($array['tmp_name'], $full_final_path);
                move_uploaded_file($array['name'], $full_final_path);
            }
        }

        return $web_path . $image_name . '_' . $lang . '.' . $ext;
    }
    
    public function setDesktopLive()
    {
        $desktop_rows = Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="desktop"');
        
        foreach($desktop_rows AS $row){

            $sql = "UPDATE ps_asm_homepage 
                    SET active="        . $row['active'] . ", 
                        icon_type='"    . $row['icon_type'] . "', 
                        destination='"  . $row['destination'] . "', 
                        image_en='"     . $row['image_en'] . "', 
                        image_es='"     . $row['image_es'] . "', 
                        image_fr='"     . $row['image_fr'] . "', 
                        title_en='"     . $row['title_en'] ."', 
                        title_es='"     . $row['title_es'] . "',
                        title_fr='"     . $row['title_fr'] . "', 
                        link='"         . $row['link'] . "', 
                        brand="         . $row['brand'] . ", 
                        model="         . $row['model'] . ", 
                        type="          . $row['type'] . ", 
                        version="       . $row['version'] . ", 
                        youtube_code='" . $row['youtube_code'] . "' 
                    WHERE id=" . $row['id'];
            Db::getInstance()->execute($sql);
            
        }

    }
    
    public function setMobileLive()
    {
        $desktop_rows = Db::getInstance()->executeS('SELECT * FROM ps_asm_homepage_temp WHERE destination="mobile"');
        
        foreach($desktop_rows AS $row){

            $sql = "UPDATE ps_asm_homepage 
                    SET active="        . $row['active'] . ", 
                        icon_type='"    . $row['icon_type'] . "', 
                        destination='"  . $row['destination'] . "', 
                        image_en='"     . $row['image_en'] . "', 
                        image_es='"     . $row['image_es'] . "', 
                        image_fr='"     . $row['image_fr'] . "', 
                        title_en='"     . $row['title_en'] ."', 
                        title_es='"     . $row['title_es'] . "',
                        title_fr='"     . $row['title_fr'] . "', 
                        link='"         . $row['link'] . "', 
                        brand="         . $row['brand'] . ", 
                        model="         . $row['model'] . ", 
                        type="          . $row['type'] . ", 
                        version="       . $row['version'] . "
                    WHERE id=" . $row['id'];
            Db::getInstance()->execute($sql);
            
        }
        
    }
    
    public function setVideoCode()
    {
        return Db::getInstance()->execute("UPDATE ps_asm_homepage_temp SET youtube_code='" . Tools::getValue('code') . "' WHERE id=" . (Tools::getValue('position')+16));
    }
}