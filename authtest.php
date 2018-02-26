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

    $this->displayName = $this->l('My module');
    $this->description = $this->l('Description of my module.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('MYMODULE_NAME'))
      $this->warning = $this->l('No name provided');
  }
}
parent::__construct();
$this->displayName = $this->l('Author Test');
$this->description = $this->l('Just an hopeless test.');

$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
