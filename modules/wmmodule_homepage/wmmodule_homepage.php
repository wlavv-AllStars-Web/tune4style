<?php
class wmmodule_homepage extends Module
{
    public function __construct()
    {
        $this->name = "wmmodule_homepage";
        $this->tab = "front_office_features";
        $this->version = "1.0.0";
        $this->author = "All Stars Motorsport";
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->module_key = '109266ed154d174c4856ec18homepage';
        $this->displayName = $this->l('Homepage editor');
        $this->description = $this->l('Professional');
        parent::__construct();
    }
	
    public function install()
    {
        if (parent::install() == false) return false;

        $this->installMenu();

        return true;
    }

    public function installMenu()
    {
        $tab = new Tab();

        foreach (Language::getLanguages(true) as $lang) {
            switch ($lang['iso_code']) {
                case 'fr':
                    $tab->name[$lang['id_lang']] = 'HomeEditor';
                    break;
                default:
                    $tab->name[$lang['id_lang']] = 'HomeEditor';
                    break;
            }
        }

        $tab->class_name = 'AdminWmModuleHomepage';
        $tab->id_parent = Tab::getIdFromClassName('SELL');
        $tab->module = $this->name;
        $tab->icon = 'article';
        $tab->add();
    }
	
    public function uninstall()
    {
        if (parent::uninstall() == false) return false;
		
        return true;
    }
	
}