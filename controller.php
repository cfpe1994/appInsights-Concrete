<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class AppInsightsAddOnPackage extends Package {

     protected $pkgHandle = 'app_insights_addon';
     protected $appVersionRequired = '5.6.0';
     protected $pkgVersion = '1.0';

     public function getPackageDescription() {
          return t("Integrates a Concrete5 site with Microsoft Application Insights");
     }

     public function getPackageName() {
          return t("Application Insights Add-On");
     }
    
     public function install() {
          $pkg = parent::install();
    
          BlockType::installBlockTypeFromPackage('app_insights_addon', $pkg);
     }
     
     if ($c->isEditMode()) { 
          //////This is the backend - Do something//////////// 
          } 
          else { 
               //////This is the frontend - Do another thing//////////// 
               }
}

?>
