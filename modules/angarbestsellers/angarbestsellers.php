<?php
/**
* @author      Krzysztof Pecak
* @copyright   2017 Krzysztof Pecak
* @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Adapter\BestSales\BestSalesProductSearchProvider;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

if (!defined('_PS_VERSION_')) {
    exit;
}

class AngarBestsellers extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'angarbestsellers';
        $this->tab = 'front_office_features';
        $this->author = 'AngarThemes';
        $this->version = '1.0.0';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('AT - Bestsellers', array(), 'Modules.Bestsellers.Admin');
        $this->description = $this->trans('Adds a block displaying your store top-selling products.', array(), 'Modules.Bestsellers.Admin');

        $this->templateFile = 'module:angarbestsellers/views/templates/hook/angarbestsellers.tpl';
    }

    public function install()
    {
        $this->_clearCache('*');

        return parent::install()
            && Configuration::updateValue('ANGAR_BESTSELLERS_TO_DISPLAY', 4)
            && $this->registerHook('actionOrderStatusPostUpdate')
            && $this->registerHook('actionProductAdd')
            && $this->registerHook('actionProductUpdate')
            && $this->registerHook('actionProductDelete')
            && $this->registerHook('displayHomeTab')
            && $this->registerHook('displayHomeTabContent')
            && ProductSale::fillProductSales()
        ;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        if (!parent::uninstall() ||
            !Configuration::deleteByName('ANGAR_BESTSELLERS_TO_DISPLAY')) {
            return false;
        }

        return true;
    }

    public function hookdisplayHomeTab($params)
    {
        $products = $this->getBestSellers();

        if (!empty($products)) {
            return $this->display(__file__, 'tab.tpl');
        } else {
            return false;
        }
    }

    public function hookActionProductAdd($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductDelete($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionOrderStatusPostUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        if ($template || $cache_id || $compile_id) {
        }
        parent::_clearCache($this->templateFile);
    }

    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submitAngarBestSellers')) {
            Configuration::updateValue('ANGAR_BESTSELLERS_TO_DISPLAY', (int)Tools::getValue('ANGAR_BESTSELLERS_TO_DISPLAY'));
            $this->_clearCache('*');
            $output .= $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
        }

        return $output.$this->renderForm();
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Products to display', array(), 'Modules.Bestsellers.Admin'),
                        'name' => 'ANGAR_BESTSELLERS_TO_DISPLAY',
                        'desc' => $this->trans('Determine the number of product to display in this block', array(), 'Modules.Bestsellers.Admin'),
                        'class' => 'fixed-width-xs',
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions')
                )
            )
        );

        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitAngarBestSellers';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'ANGAR_BESTSELLERS_TO_DISPLAY' => (int)Tools::getValue('ANGAR_BESTSELLERS_TO_DISPLAY', Configuration::get('ANGAR_BESTSELLERS_TO_DISPLAY')),
        );
    }

    public function renderWidget($hookName = null, array $configuration = array())
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('angarbestsellers'))) {
            $variables = $this->getWidgetVariables($hookName, $configuration);

            if (empty($variables)) {
                return false;
            }

            $this->smarty->assign($variables);
        }

        return $this->fetch($this->templateFile, $this->getCacheId('angarbestsellers'));
    }

    public function getWidgetVariables($hookName = null, array $configuration = array())
    {
        if ($hookName || $configuration) {
        }
        $products = $this->getBestSellers();

        if (!empty($products)) {
            return array(
                'products' => $products,
                'allBestSellers2' => Context::getContext()->link->getPageLink('best-sales'),
            );
        }

        return false;
    }

    protected function getBestSellers()
    {
        if (Configuration::get('PS_CATALOG_MODE')) {
            return false;
        }

        $searchProvider = new BestSalesProductSearchProvider(
            $this->context->getTranslator()
        );

        $context = new ProductSearchContext($this->context);

        $query = new ProductSearchQuery();

        $nProducts = (int) Configuration::get('ANGAR_BESTSELLERS_TO_DISPLAY');

        $query
            ->setResultsPerPage($nProducts)
            ->setPage(1)
        ;

        $query->setSortOrder(SortOrder::random());

        $result = $searchProvider->runQuery(
            $context,
            $query
        );

        $assembler = new ProductAssembler($this->context);

        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $products_for_template = array();

        foreach ($result->getProducts() as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $this->context->language
            );
        }

        return $products_for_template;
    }
}