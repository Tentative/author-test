<?php
if (!defined('_PS_VERSION_'))
{
  exit;
}

class AuthorTest extends Module
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


}