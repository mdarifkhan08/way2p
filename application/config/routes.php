<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['contact']='home/contact';
$route['contactRequest']='home/contactRequest';
$route['page-views']='Home/pageViews';
$route['getPageViews']='Home/getPageViews';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*hibernate*/
$route['hibernate-introduction'] = 'Hibernate/hibernate_introduction';
$route['introduction-hibernate'] = 'Hibernate/introduction_hibernate';
$route['basic-application-hibernate'] = 'Hibernate/first_app';
$route['hibernate-basic-application-with-annotation'] = 'Hibernate/second_app';
$route['how-to-work-with-hibernate-query-language'] = 'Hibernate/hql_operation';
$route['hibernate-states-of-objects'] = 'Hibernate/hibernate_states_of_object';
$route['hibernate-auto-ddl-operations'] = 'Hibernate/hibernate_auto_ddl_operations';
$route['hibernate-curd-operations'] = 'Hibernate/curd_in_hibernate';
$route['hibernate-primary-key-auto-generators-part1'] = 'Hibernate/hibernate_primary_key_generators1';
$route['hibernate-select-query'] = 'Hibernate/hibernate_select_query';
$route['hibernate-delete-or-update-query'] = 'Hibernate/hibernate_delete_update_query';
$route['difference-between-get-and-load-in-hibernate'] = 'Hibernate/difference_between_get_and_load_in_hibernate';
$route['one-to-one-mapping-using-annotation'] = 'Hibernate/one_to_one_mapping_using_annotation';
$route['mapping-or-relationship-in-hibernate'] = 'Hibernate/mapping_or_relationship_in_hibernate';
$route['eager-loading-or-fetch-and-lazy-loading-or-fetch'] = 'Hibernate/eager_loading_or_fetch_and_lazy_loading_or_fetch';
$route['hbm2ddl.auto'] = 'Hibernate/hbm2ddl';
$route['basic-annotations-in-hibernate'] = 'Hibernate/basic_annotations_in_hibernate';
$route['primary-key-auto-generator-part2'] = 'Hibernate/primary_key_auto_generator_part2';
$route['one-to-one-mapping-or-relationship'] = 'Hibernate/one_to_one_mapping_or_relationship';
$route['many-to-one-mapping'] = 'Hibernate/many_to_one_mapping';
$route['many-to-one-and-one-to-many-bidirection-mapping'] = 'Hibernate/many_to_one_and_one_to_many_bidirection_mapping';

/*struts*/
$route['struts-basic-apps'] = 'Struts/struts_basic_apps';
$route['struts-introduction'] = 'Struts/struts_introduction';
$route['struts-first-application'] = 'Struts/struts_first_application';
$route['struts-login-application'] = 'Struts/struts_login_application';


/*core java*/
$route['prime-number-java-program'] = 'CoreJava/prime_number_program';
$route['increment-decrement-operator-example'] = 'CoreJava/increment_decrement_operator';
$route['sum-of-digits-java-program'] = 'CoreJava/sum_of_digits_java_program';
$route['convert-binary-number-to-decimal'] = 'CoreJava/convert_binary_number_to_decimal';
$route['even-and-odd-number-application'] = 'CoreJava/even_and_odd_number_application';
$route['private-constructor'] = 'CoreJava/private_constructor';
$route['singleton-design-pattern'] = 'CoreJava/singleton_design_pattern';
$route['tightly-coupled-and-loosely-coupled-code'] = 'CoreJava/tightly_and_loosely_couple_code';




/*Laravel*/
$route['download-install-laravel'] = 'Laravel/download_laravel';
$route['working-with-migration-in-laravel'] = 'Laravel/create_migration';
$route['htaccess-file-for-production'] = 'Laravel/htaccess_file_for_production';
$route['static-file-in-laravel'] = 'Laravel/static_file_in_laravel';
$route['template-system-in-laravel'] = 'Laravel/template_system_in_laravel';
$route['control-view-using-controller-in-laravel'] = 'Laravel/control_view_using_controller_in_laravel';
$route['configure-database-in-laravel'] = 'Laravel/configure_database_in_laravel';
$route['insert-data-into-database-using-laravel'] = 'Laravel/insert_data';
$route['settings-of-html-and-forms-facades'] = 'Laravel/settings_form_facades_html_facedes';
$route['errors-in-laravel-and-solutions-of-them'] = 'Laravel/errors_in_laravel_and_solutions_of_them';
$route['mvc-and-student-registration-in-php'] = 'Laravel/mvc_and_student_registration_in_php';
$route['how-to-use-core-php-in-laravel'] = 'Laravel/use_core_php_in_laravel';
$route['complete-mvc-in-laravel'] = 'Laravel/complete_mvc_in_laravel';
$route['small-application-in-laravel'] = 'Laravel/first_app';
$route['authentication-system-in-laravel'] = 'Laravel/authentication_system_in_laravel';
$route['facebook-social-login'] = 'Laravel/social_login_facebook';



/*codeigniter*/
$route['codeigniter-basics'] = 'Codeigniter/codeigniter_introduction';
$route['codeigniter-controller'] = 'Codeigniter/codeigniter_controller';
$route['codeigniter-welcome-page'] = 'Codeigniter/codeigniter_welcome_page';
$route['codeigniter-live-server-settings'] = 'Codeigniter/codeigniter_live_server_settings';
$route['codeigniter-seo-friendly-url'] = 'Codeigniter/seo_url_in_codeigniter';
$route['insert-data-in-database-using-codeigniter'] = 'Codeigniter/insert_data';
$route['codeigniter-login-logout-system-or-user-panel'] = 'Codeigniter/user_panel_in_codeigniter';
$route['i18n-in-codeigniter'] = 'Codeigniter/internationalization_in_codeigniter';
$route['insert-and-select-operation-in-codeigniter'] = 'Codeigniter/insert_and_select';
$route['pagination-in-codeigniter3'] = 'Codeigniter/pagination_in_codeigniter';
$route['htaccess-file-for-codeigniter-and-hostinger'] = 'Codeigniter/htaccess_for_hostinger';


/*django*/
$route['install-django-project-in-ubuntu-operating-system'] = 'django/django_setup_for_ubuntu';
$route['django-migrations'] = 'django/django_migrations';
$route['create-super-user-in-django'] = 'django/create_super_user';
$route['apps-in-django'] = 'django/apps_in_django';
$route['setup_for_setting_py'] = 'django/setup_for_setting_py';
$route['working-with-views-and-urls-in-django'] = 'django/working_with_views_and_urls_in_django';
$route['models-in-django'] = 'django/models_in_django';
$route['register-model-inside-admin'] = 'django/register_model_inside_admin_py';
$route['forms-in-django'] = 'django/forms_in_django';
$route['register-model-with-form'] = 'django/form_models_registration';
$route['custom-validation-on-form'] = 'django/custom_validation_on_form';
$route['using-context-pass-the-variable-to-view'] = 'django/using_context_pass_the_variable_to_view';
$route['sending-form-to-view'] = 'django/sending_form_to_view';
$route['sending-mail-in-django-using-gmail-smtp'] = 'django/using_gmail_smtp_to_send_mail';
$route['static-files-in-django'] = 'django/static_files_in_django';
$route['how-to-include-template-and-uses-of-block'] = 'django/include_template_and_block_in_django';



/*Android*/
$route['adding-two-number-basic-application-in-android'] = 'android/adding_two_number_basic_application_in_android';
$route['using-Toast-to-view-the-password-field'] = 'android/using_Toast_to_view_the_password_field';
$route['get-response-of-checkbox-basic-behavior'] = 'android/get_response_of_checkbox_basic_behavior';
$route['get-response-of-radio-button-basic-behavior'] = 'android/get_response_of_radio_button_basic_behavior';
$route['get-response-of-rating-system-basic-behavior'] = 'android/get_response_of_rating_system_basic_behavior';
$route['get-response-of-alert-dialog-basic-behavior'] = 'android/get_response_of_alert_dialog_basic_behavior';
$route['login-system-basic-app-in-android'] = 'android/login_basic_app';
$route['android-login-app-with-mysql-database'] = 'android/android_login_app_with_mysql_database';
$route['android-register-app-with-mysql-database'] = 'android/android_register_app_with_mysql_database';
/*$route['android-login-register-and-get-json-response'] = 'android/android_login_register_and_get_json_response';
*/



/*Angular js*/
$route['angularjs-basic-application-part1']='Angularjs/angularjs_basic_application_part1';
$route['complete-angularjs-learn-and-understand']='Angularjs/angularjs_application_part2';
$route['how-to-work-with-angularjs-http-service-find-angularjs-service-over-http']='Angularjs/http_service';
$route['how-to-work-with-route-in-angularjs']='Angularjs/route_in_angularjs';
$route['weather-forecast-app-in-angularjs']='Angularjs/weather_forecast_app';
$route['how-to-work-with-resource-service-in-angularjs']='Angularjs/how_to_work_with_resource_service_in_angularjs';
$route['using-resource-service-get-data']='Angularjs/using_resource_service_get_data';
$route['using-resource-service-get-data-and-post-data']='Angularjs/using_resource_service_get_data_and_post_data';
$route['using-resource-service-get-data-and-post-data-and-put-data']='Angularjs/using_resource_service_get_data_and_post_data_and_put_data';
$route['get-data-from-checkbox-using-angularjs']='Angularjs/control_checkbox_using_angularjs';
$route['validation-in-angularjs']='Angularjs/validation_in_angularjs';
$route['basic-curd-operation-with-php-slim-framework']='Angularjs/basic_curd_operation_with_php_slim_framework';
$route['filter-service-in-angularjs']='Angularjs/angular_filter_service';
$route['angularjs-interpolation']='Angularjs/angularjs_interpolation';
$route['angularjs-ng-click']='Angularjs/angularjs_ng_click';
$route['angularjs-ng-cloak']='Angularjs/angularjs_ng_cloak';
$route['angularjs-ng-hide']='Angularjs/angularjs_ng_hide';
$route['angularjs-ng-if']='Angularjs/angularjs_ng_if';
$route['angularjs-ng-keyup']='Angularjs/angularjs_ng_keyup';
$route['angularjs-ng-repeat']='Angularjs/angularjs_ng_repeat';
$route['angularjs-ng-show']='Angularjs/angularjs_ng_show';
$route['push-data-in-array']='Angularjs/push_data_in_array';
$route['resource-service-of-angularjs']='Angularjs/resource_service_of_angularjs';
$route['route-config-in-angularjs']='Angularjs/route_config_in_angularjs';



/*Angular2*/
$route['angular2-setup']='Angular2/setup_angular2';
$route['angular2-first-app-sending-simple-json-object-to-view']='Angular2/angular2_first_app_sending_simple_json_object_to_view';
$route['angular2-binding-multiple-json-object-to-view']='Angular2/angular2_second_app_binding_multiple_json_object_to_view';
$route['angular2-onclick-name-get-the-full-details-of-person']='Angular2/angular2_third_app_onclick_name_get_the_full_details_of_person';
$route['angular2-data-sharing-between-two-component']='Angular2/angular2_data_sharing_between_two_component';
$route['angular2-data-sharing-between-three-component']='Angular2/angular2_data_sharing_between_three_component';
$route['angular2-service']='Angular2/angular2_services';
$route['angular2-related-concepts']='Angular2/angular2_related_concept';
$route['two-way-binding-with-angular-2']="Angular2/hcl_two_way_binding";
$route['routing-in-angular2']="Angular2/hcl_routing";
$route['angular2-handle-static-data-with-observable']="Angular2/handle_static_data_with_observable";
$route['configure-ngrx-store']="Angular2/how_to_configure_ngrx_store_in_angular2_webpack_starter";
$route['es5-var-es2015-let-and-es2015-const']="Angular2/es2015_var_let_const";
$route['ng2-bootstrap-typeahead']="Angular2/ng2_bootstrap_typeahead";
$route['rxJS-observable-basics']="Angular2/rxjs_observable";
$route['es2015-arrow-function']="Angular2/es2015_arrow_function";



/*html*/
$route['products-panel-with-left-navigation-menu']='Html/products_panel_with_left_navigation_menu';
$route['register-and-login-form-with-bootstrap-1']='Html/register_and_login_form_with_bootstrap_1';
$route['mega-menu-navigation-menu-with-bootstrap']='Html/mega_menu_navigation_menu_with_bootstrap';
$route['slide-div-over-the-div-vertically']='Html/slide_div_over_the_div_vertically';
$route['text-area-with-tools-to-send-styling-mail']='Html/text_area_with_special_tool_for_styling_mail_or_message_service';
$route['display-inline-practice-with-unorder-list']='Html/display_inline_practice_with_unorder_list';
$route['how-to-do-image-responsive-using-css']='Html/image_with_bootstrap_setting';
$route['basic-real-time-calculator-using-html-table-and-javascript']='Html/basic_footer_with_out_bootstrap_for_beginners';
$route['basic-footer-with-out-bootstrap-for-beginners']='Html/basic_footer_with_out_bootstrap_for_beginners';



/*javascript*/
$route['validation-on-check-box']='Javascript/validation_on_check_box';
$route['control-checkbox-using-javascript']='Javascript/control_checkbox_using_javascript';
$route['location-object-in-javascript']='Javascript/location_object_in_javascript';



/*jquery*/
$route['jquery-date-picker-with-different-format']='Jquery/jquery_datepicker';
$route['submit-form-on-select-using-jquery']='Jquery/submit_form_on_select_using_jquery';
$route['jquery-validation']='Jquery/jquery_validation';



/*ajax*/
$route['send-form-data-using-ajax-and-post-request']='Ajax/post_request_in_ajax';
$route['send-get-request-with-anchor-tag-and-ajax']='Ajax/get_request_in_ajax';


/*nodejs*/
$route['node-js-mean-application']='Nodejs/node_js_mean_app_1';
$route['node-js-basic-application']='Nodejs/node_js_basic_application';
$route['node-js-chat-application']='Nodejs/node_js_chat_application';




/*bootstrap*/
$route['bootstrap-navigation-menu']='Bootstrap/bootstrap_navigation_menu';
$route['bootstrap-left-navigation-menu-_1']='Bootstrap/left_navigation_menu_1';
$route['bootstrap-left-navigation-menu-_2']='Bootstrap/left_navigation_menu_2';
$route['bootstrap-model-on-page-load']='Bootstrap/on_page_load_open_bootstrap_model';



/*opencart*/
$route['opencart-installation-in-godaddy-shared-hosting']='Opencart/opencart_installation_in_go_daddy_shared_hosting';
$route['opencart-validation-with-mvc']='Opencart/opencart_validation_with_mvc';
$route['opencart-template-system-details']='Opencart/details_of_opencart_theme_in_opencart';
$route['create-view-and-control-by-controller']='Opencart/create_view_and_control_by_the_controller';
$route['load-static-file-from-controller-to-view-in-opencart']='Opencart/load_static_file_from_controller_to_view_in_opencart';
$route['insert-data-using-custom-view-in-opencart']='Opencart/insert_data_using_custom_view';
$route['create-mvc-inside-your-theme-using-opencart']='Opencart/create_mvc_inside_your_theme_using_opencart';


/*jsf*/
$route['basic-application-in-jsf']='Jsf/basic_application_in_jsf';
$route['jsf-application-with-basic-tags']='Jsf/jsf_app_with_basic_tags';
$route['jsf-settings']='Jsf/jsf_settings';
$route['jsf-tag-information']='Jsf/jsf_tag_info';
$route['navigation-in-jsf']='Jsf/navigation_in_jsf';
$route['navigation-in-jsf-2']='Jsf/navigation_in_jsf_2';
$route['application-in-jsf-2']='Jsf/second_application_in_jsf';


/*spring*/
$route['spring-basic-application-with-configuration']='Spring/first_app';
$route['spring-mvc-file-download']='Spring/file_download';
$route['spring-mvc-file-upload']='Spring/file_upload';
$route['spring-hibernate-configuration']='Spring/hibernate_settings';
$route['spring-import-xml-file']='Spring/import_xml_file';
$route['spring-mvc-internationalization']='Spring/internationalization';
$route['spring-basic-problems-and-solutions']='Spring/problems';
$route['spring-read-properties-file']='Spring/read_properties_file';
$route['spring-read-properties-file_2']='Spring/read_properties_file2';
$route['spring-mvc-resource-manage']='Spring/resource_manage';
$route['spring-tag-libraries']='Spring/tag_lib';
$route['spring-welcome-file']='Spring/welcome_file';
$route['dependency-injection-in-spring']='Spring/dependency_injection_in_spring';
$route['spring-core-introduction']='Spring/introduction';
$route['dependency-injection-using-autowire-and-component-annotation']='Spring/dependency_injection_using_autowire_component';
$route['basic-annotations-of-spring']='Spring/basic_annotations_of_spring';
$route['spring-interview-prepration']='Spring/spring_interview_prepration';
$route['spring-data-jpa-hibernate-application']='Spring/spring_data_curd_repository';
$route['spring-container-details']='Spring/details_of_ServletContainerInitializer';
$route['spring-boot-with-spring-mvc-basic-app']='Spring/springBootWithSpringMvcFirstApp';
$route['spring-boot-with-jpa2-and-hibernate-basic-app']='Spring/springBootWithSpringMvcAndSpringHibernateWithJpaFirstApp';
$route['constructor-and-setter-dependency-injection-example']='Spring/best_example_on_dependency_injection';
$route['difference-between-page-scope-and-request-scope']='Spring/difference_between_page_scope_and_request_scope';
$route['scope-in-jsp']='Spring/scope_in_jsp';
$route['http-session-in-spring']='Spring/use_of_http_session';
$route['Spring4-Mvc-Validation-with-Annotation-Configuration']='Spring/Spring4_Mvc_Validation_with_Annotation_Configuration';
$route['spring-restful-web-services-with-jpa2-and-annotation-configuration']='Spring/spring_restful_web_services_with_jpa2_and_annotation_configuration';




/*spring hibernate*/
$route['spring-hibernate-application-1']='SpringHibernate/spring_hibernate_application_1';
$route['spring-hibernate-application-2']='SpringHibernate/spring_hibernate_application_2';
$route['spring-hibernate-application-3']='SpringHibernate/spring_hibernate_application_3';
$route['spring-hibernate-application-4']='SpringHibernate/spring_hibernate_application_4';
$route['one-to-one-mapping-with-spring-mvc-and-hibernate-1']='SpringHibernate/one_to_one_mapping_1';
$route['one-to-one-mapping-with-spring-mvc-and-hibernate-2']='SpringHibernate/one_to_one_mapping_2';
$route['datasource-in-spring-hibernate']='SpringHibernate/datasource_in_spring';
$route['hibernate-transaction-manager-in-spring-and-hibernate']='SpringHibernate/hibernatetransactionmanager';

/*rest*/
$route['restful-web-service-basic-application']='Rest/first_app';
$route['consuming-restful-webservice-with-angularjs']='Rest/consuming_restful_webservices_with_angularjs';
$route['consuming-restful-webservice-with-spring-hibernate']='Rest/restful_webservices_with_spring_hibernate_1';




/*maven*/
$route['maven-hibernate-dependency']='Maven/hibernate_dependency';
$route['maven-jaxrs-dependency']='Maven/jax_rs_dependency';
$route['maven-junit-dependency']='Maven/junit';
$route['maven-servlet-jsp-jstl-dependency']='Maven/servlet_jsp_jstl';
$route['maven-spring-hibernate-dependency']='Maven/spring_hibernate';
$route['maven-spring-mvc-dependency']='Maven/spring_mvc';
$route['maven-struts-dependency']='Maven/struts';
$route['maven-google-gson-dependency']='Maven/google_gson';
$route['maven-mysql-connector-dependency']='Maven/mysql_connector';


/*core php*/
$route['array-in-php']='CorePhp/array_in_php';
$route['pdo-in-php']='CorePhp/pdo';
$route['upload-csv-and-send-mail-in-php']='CorePhp/upload_csv_1';
$route['upload_video_1']='CorePhp/upload_videos_1';
$route['admin-panel-in-php']='CorePhp/admin_panel_in_php';
$route['dynamic-image-slider-in-php']='CorePhp/dynamic_image_slider';
$route['live-search-with-php']='CorePhp/live_search';
$route['object-oriented-programming-in-php']='CorePhp/object_oriented_programming_in_php';
$route['object-oriented-programming-in-php-1']='CorePhp/object_oriented_programming_in_php_1';
$route['implode-and-explode-in-php']='CorePhp/implode_and_explode_in_php';
$route['mysql-timestamp-with-php']='CorePhp/work_with_timestamp';