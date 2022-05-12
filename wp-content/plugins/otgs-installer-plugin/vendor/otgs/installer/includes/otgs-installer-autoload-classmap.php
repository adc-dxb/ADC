<?php
$baseDir = dirname( __DIR__ );

return [
	'Installer_Dependencies'                                       => $baseDir . '/includes/class-installer-dependencies.php',
	'Installer_Theme_Class'                                        => $baseDir . '/includes/class-installer-theme.php',
	'Installer_Upgrader_Skins'                                     => $baseDir . '/includes/class-installer-upgrader-skins.php',
	'OTGS_Installer_Autoloader'                                    => $baseDir . '/includes/class-otgs-installer-autoloader.php',
	'OTGS_Installer_Factory'                                       => $baseDir . '/includes/class-otgs-installer-factory.php',
	'OTGS_Installer_Fetch_Subscription'                            => $baseDir . '/includes/site-key/class-otgs-installer-fetch-subscription.php',
	'OTGS_Installer_Fetch_Subscription_Exception'                  => $baseDir . '/includes/exceptions/class-otgs-installer-fetch-subscription-exception.php',
	'OTGS_Installer_Filename_Hooks'                                => $baseDir . '/includes/class-otgs-installer-filename-hooks.php',
	'OTGS_Installer_Icons'                                         => $baseDir . '/includes/class-otgs-installer-icons.php',
	'OTGS_Installer_Logger'                                        => $baseDir . '/includes/debug/class-otgs-installer-logger.php',
	'OTGS_Installer_PHP_Functions'                                 => $baseDir . '/includes/class-otgs-installer-php-functions.php',
	'OTGS_Installer_Package'                                       => $baseDir . '/includes/class-otgs-installer-package.php',
	'OTGS_Installer_Package_Product'                               => $baseDir . '/includes/class-otgs-installer-package-product.php',
	'OTGS_Installer_Package_Product_Finder'                        => $baseDir . '/includes/class-otgs-installer-package-product-finder.php',
	'OTGS_Installer_Plugin'                                        => $baseDir . '/includes/class-otgs-installer-plugin.php',
	'OTGS_Installer_Plugin_Factory'                                => $baseDir . '/includes/class-otgs-installer-plugin-factory.php',
	'OTGS_Installer_Plugin_Finder'                                 => $baseDir . '/includes/class-otgs-installer-plugin-finder.php',
	'OTGS_Installer_Plugins_Page_Notice'                           => $baseDir . '/includes/class-otgs-installer-plugins-page-notice.php',
	'OTGS_Installer_Repositories'                                  => $baseDir . '/includes/repository/class-otgs-installer-repositories.php',
	'OTGS_Installer_Repositories_Factory'                          => $baseDir . '/includes/repository/class-otgs-installer-repositories-factory.php',
	'OTGS_Installer_Repository'                                    => $baseDir . '/includes/repository/class-otgs-installer-repository.php',
	'OTGS_Installer_Repository_Factory'                            => $baseDir . '/includes/repository/class-otgs-installer-repository-factory.php',
	'OTGS_Installer_Site_Key_Ajax'                                 => $baseDir . '/includes/site-key/class-otgs-installer-site-key-ajax.php',
	'OTGS_Installer_Site_Key_Exception'                            => $baseDir . '/includes/exceptions/class-otgs-installer-site-key-exception.php',
	'OTGS_Installer_Source'                                        => $baseDir . '/includes/class-otgs-installer-source.php',
	'OTGS_Installer_Source_Factory'                                => $baseDir . '/includes/class-otgs-installer-source-factory.php',
	'OTGS_Installer_Subscription'                                  => $baseDir . '/includes/class-otgs-installer-subscription.php',
	'OTGS_Php_Template_Service_Loader'                             => $baseDir . '/includes/template-service/class-otgs-php-template-service-loader.php',
	'OTGS_Template_Service_Factory'                                => $baseDir . '/includes/template-service/class-otgs-template-service-factory.php',
	'OTGS_Php_Template_Service'                                    => $baseDir . '/includes/template-service/class-otgs-php-template-service.php',
	'OTGS_Template_Service'                                        => $baseDir . '/includes/template-service/interface-otgs-template-service.php',
	'OTGS_Template_Service_Loader'                                 => $baseDir . '/includes/template-service/interface-otgs-template-service-loader.php',
	'OTGS_Template_Service_Php_Model'                              => $baseDir . '/includes/template-service/class-otgs-template-service-php-model.php',
	'OTGS_Installer_Upgrade_Response'                              => $baseDir . '/includes/upgrade/class-otgs-installer-upgrade-response.php',
	'OTGS_Installer_WP_Components_Hooks'                           => $baseDir . '/includes/class-otgs-installer-wp-components-hooks.php',
	'OTGS_Installer_WP_Components_Sender'                          => $baseDir . '/includes/class-otgs-installer-wp-components-sender.php',
	'OTGS_Installer_WP_Components_Setting_Ajax'                    => $baseDir . '/includes/class-otgs-installer-wp-components-setting-ajax.php',
	'OTGS_Installer_WP_Components_Setting_Resources'               => $baseDir . '/includes/class-otgs-installer-wp-components-setting-resources.php',
	'OTGS_Installer_WP_Components_Storage'                         => $baseDir . '/includes/class-otgs-installer-wp-components-storage.php',
	'OTGS_Installer_WP_Share_Local_Components_Setting'             => $baseDir . '/includes/class-otgs-installer-wp-share-local-components-setting.php',
	'OTGS_Installer_WP_Share_Local_Components_Setting_Hooks'       => $baseDir . '/includes/class-otgs-installer-wp-share-local-components-setting-hooks.php',
	'OTGS_Installer_WPML_Core_Plugin'       					   => $baseDir . '/includes/class-otgs-installer-wpml-core-plugin.php',
	'OTGS_Installer_Subscription_Factory'                          => $baseDir . '/includes/class-otgs-installer-subscription-factory.php',
	'Translation_Service_Info'                                     => $baseDir . '/includes/class-translation-service-info.php',
	'WP_Installer'                                                 => $baseDir . '/includes/class-wp-installer.php',
	'WP_Installer_API'                                             => $baseDir . '/includes/class-wp-installer-api.php',
	'WP_Installer_Channels'                                        => $baseDir . '/includes/class-wp-installer-channels.php',
	'OTGS_Installer_Debug_Info'                                    => $baseDir . '/includes/class-otgs-installer-debug-info.php',
	'OTGS_Installer_Loader'                                        => $baseDir . '/includes/class-otgs-installer-loader.php',
	'OTGS_Installer_Logger_Storage'                                => $baseDir . '/includes/debug/class-otgs-installer-logger-storage.php',
	'OTGS_Installer_Log'                                           => $baseDir . '/includes/debug/class-otgs-installer-log.php',
	'OTGS_Installer_Log_Factory'                                   => $baseDir . '/includes/debug/class-otgs-installer-log-factory.php',
	'OTGS_Installer_Support_Hooks'                                 => $baseDir . '/includes/support/class-otgs-installer-support-hooks.php',
	'OTGS_Installer_Support_Template'                              => $baseDir . '/includes/support/class-otgs-installer-support-template.php',
	'OTGS_Installer_Support_Template_Factory'                      => $baseDir . '/includes/support/class-otgs-installer-support-template-factory.php',
	'OTGS_Installer_Connection_Test'                               => $baseDir . '/includes/support/class-otgs-installer-connection-test.php',
	'OTGS_Installer_Connection_Test_Exception'                     => $baseDir . '/includes/support/class-otgs-installer-connection-test-exception.php',
	'OTGS_Installer_Connection_Test_Ajax'                          => $baseDir . '/includes/support/class-otgs-installer-connection-test-ajax.php',
	'OTGS_Installer_Requirements'                                  => $baseDir . '/includes/support/class-otgs-installer-requirements.php',
	'OTGS_Installer_Instance'                                      => $baseDir . '/includes/instances/class-otgs-installer-instance.php',
	'OTGS_Installer_Instances'                                     => $baseDir . '/includes/instances/class-otgs-installer-instances.php',
	'OTGS_Installer_Instances_Factory'                             => $baseDir . '/includes/instances/class-otgs-installer-instances-factory.php',
	'OTGS_Installer_Plugins_Update_Cache_Cleaner'                  => $baseDir . '/includes/class-otgs-installer-plugins-update-cache-cleaner.php',
	'OTGS_Installer_Buy_URL_Hooks'                                 => $baseDir . '/includes/buy-url/class-otgs-installer-buy-url-hooks.php',
	'OTGS_Products_Bucket_Repository'                              => $baseDir . '/includes/products/repository/OTGS_Products_Bucket_Repository.php',
	'OTGS_Products_Bucket_Repository_Factory'                      => $baseDir . '/includes/products/repository/OTGS_Products_Bucket_Repository_Factory.php',
	'OTGS_Products_Manager'                                        => $baseDir . '/includes/products/OTGS_Products_Manager.php',
	'OTGS_Products_Manager_Factory'                                => $baseDir . '/includes/products/OTGS_Products_Manager_Factory.php',
	'OTGS_Products_Config_Db_Storage'                              => $baseDir . '/includes/products/OTGS_Products_Config_Db_Storage.php',
	'OTGS_Products_Config_Xml'                                     => $baseDir . '/includes/products/OTGS_Products_Config_Xml.php',
	'OTGS\Installer\Collection'                                    => $baseDir . '/includes/utilities/Collection.php',
	'OTGS_Installer_Products_Parser'                               => $baseDir . '/includes/products/OTGS_Installer_Products_Parser.php',
	'OTGS_Installer_Products_Parsing_Exception'                    => $baseDir . '/includes/exceptions/OTGS_Installer_Products_Parsing_Exception.php',
	'OTGS\Installer\AdminNotices\Display'                          => $baseDir . '/includes/admin-notices/Display.php',
	'OTGS\Installer\AdminNotices\Config'                           => $baseDir . '/includes/admin-notices/Config.php',
	'OTGS\Installer\AdminNotices\PageConfig'                       => $baseDir . '/includes/admin-notices/PageConfig.php',
	'OTGS\Installer\AdminNotices\ScreenConfig'                     => $baseDir . '/includes/admin-notices/ScreenConfig.php',
	'OTGS\Installer\AdminNotices\MessageTexts'                     => $baseDir . '/includes/admin-notices/MessageTexts.php',
	'OTGS\Installer\AdminNotices\Dismissed'                        => $baseDir . '/includes/admin-notices/Dismissed.php',
	'OTGS\Installer\AdminNotices\Loader'                           => $baseDir . '/includes/admin-notices/Loader.php',
	'OTGS\Installer\AdminNotices\Store'                            => $baseDir . '/includes/admin-notices/Store.php',
	'OTGS\Installer\AdminNotices\WPMLConfig'                       => $baseDir . '/includes/admin-notices/config/WPMLConfig.php',
	'OTGS\Installer\AdminNotices\TMConfig'                         => $baseDir . '/includes/admin-notices/config/TMConfig.php',
	'OTGS\Installer\AdminNotices\ToolsetConfig'                    => $baseDir . '/includes/admin-notices/config/ToolsetConfig.php',
	'OTGS\Installer\AdminNotices\Notices\Account'                  => $baseDir . '/includes/admin-notices/notices/Account.php',
	'OTGS\Installer\AdminNotices\Notices\Texts'                    => $baseDir . '/includes/admin-notices/notices/Texts.php',
	'OTGS\Installer\AdminNotices\Notices\WPMLTexts'                => $baseDir . '/includes/admin-notices/notices/WPMLTexts.php',
	'OTGS\Installer\AdminNotices\Notices\ToolsetTexts'             => $baseDir . '/includes/admin-notices/notices/ToolsetTexts.php',
	'OTGS\Installer\AdminNotices\Notices\ApiConnection'            => $baseDir . '/includes/admin-notices/notices/ApiConnection.php',
	'OTGS\Installer\AdminNotices\Notices\Notice'                   => $baseDir . '/includes/admin-notices/notices/Notice.php',
	'OTGS\Installer\AdminNotices\Notices\Hooks'                    => $baseDir . '/includes/admin-notices/notices/Hooks.php',
	'OTGS\Installer\Templates\Repository\Register'                 => $baseDir . '/templates/repository-register.php',
	'OTGS\Installer\Templates\Repository\Expired'                  => $baseDir . '/templates/repository-expired.php',
	'OTGS\Installer\Templates\Repository\Refunded'                 => $baseDir . '/templates/repository-refunded.php',
	'OTGS\Installer\Templates\Repository\EndUsers'                 => $baseDir . '/templates/repository-end-users.php',
	'OTGS\Installer\Templates\Repository\Registered'               => $baseDir . '/templates/repository-registered.php',
	'OTGS\Installer\Templates\Repository\LegacyFree'               => $baseDir . '/templates/repository-legacy-free.php',
	'OTGS\Installer\Templates\Repository\RegisteredButtons'        => $baseDir . '/templates/repository-registered-buttons.php',
	'OTGS\Installer\Rest\Push'                                     => $baseDir . '/includes/rest/Push.php',
	'OTGS\Installer\Recommendations\RecommendationsManager'        => $baseDir . '/src/Recommendations/RecommendationsManager.php',
	'OTGS\Installer\Recommendations\RecommendationsManagerFactory' => $baseDir . '/src/Recommendations/RecommendationsManagerFactory.php',
	'OTGS\Installer\Recommendations\Storage'                       => $baseDir . '/src/Recommendations/Storage.php',
	'OTGS\Installer\AdminNotices\Notices\Recommendation'           => $baseDir . '/includes/admin-notices/notices/Recommendation.php',
	'OTGS\Installer\AdminNotices\Notices\Dismissions'              => $baseDir . '/includes/admin-notices/notices/Dismissions.php',
	'OTGS\Installer\Loader\Config'                                 => $baseDir . '/includes/loader/Config.php',
	'OTGS\Installer\Settings'                                      => $baseDir . '/includes/class-otgs-installer-settings.php',
	'OTGS\Installer\CommercialTab\SectionsManager'                 => $baseDir . '/includes/products/commercial-tab/SectionsManager.php',
	'OTGS\Installer\CommercialTab\DownloadsList'                   => $baseDir . '/includes/products/commercial-tab/DownloadsList.php',
	'OTGS\Installer\CommercialTab\DownloadFilter'                  => $baseDir . '/includes/products/commercial-tab/DownloadFilter.php',
	'OTGS\Installer\Upgrade\AutoUpgrade'                           => $baseDir . '/includes/upgrade/AutoUpgrade.php',
	'OTGS\Installer\Upgrade\InstallerPlugins'                      => $baseDir . '/includes/upgrade/InstallerPlugins.php',
];
