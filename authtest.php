<?php
if (!defined('_PS_VERSION_'))
{
  exit;
}

class AuthTest extends Module
{
  public function __construct()
  {
    $this->name = 'authtest';
    $this->tab = 'front_office_features';
    $this->version = '0.0.5';
    $this->author = 'Giacomo Micoli';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('Author Test');
    $this->description = $this->l('Just an hopeless test.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    parent::__construct();

   }

  public function install()
  {
    if (Shop::isFeatureActive())
        Shop::setContext(Shop::CONTEXT_ALL);

    if (!parent::install() ||
        !$this->registerHook('leftColumn') ||
        !$this->registerHook('header') ||
        !Configuration::updateValue('AUTH_TEST', 'my friend')
    )
      return false;

      return true;
  }

  public function uninstall()
  {
    if (!parent::uninstall() ||
        !Configuration::deleteByName('AUTH_TEST')
    )
    return false;

    return true;
  }

  // this code add configuration option in module selection tab: not for now
  /** public function getContent()
  {
    $output = null;
   
    if (Tools::isSubmit('submit'.$this->name))
      {
        $auth_test = strval(Tools::getValue('AUTH_TEST'));
          if (!$auth_test
            || empty($auth_test)
            || !Validate::isGenericName($auth_test))
            $output .= $this->displayError($this->l('Invalid Configuration value'));
          else
          {
            Configuration::updateValue('AUTH_TEST', $auth_test);
            $output .= $this->displayConfirmation($this->l('Settings updated'));
          }
      }
      return $output.$this->displayForm();
  }*/


}