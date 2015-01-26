<?php
return array(
    'router' => array(
        'routes' => array(
            'api.rest.doctrine.employee' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/employee[/:employee_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Employee\\Controller',
                    ),

                ),
            ),
            'api.rest.doctrine.employee.experience' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/employee/:employee_id/experience/:experience_id',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Experience\\Controller',
                    ),
                ),
            ),
            'api.rest.doctrine.company' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/company[/:company_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Company\\Controller',
                    ),
                ),
            ),
            'api.rest.doctrine.experience' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/experience[/:experience_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Experience\\Controller',
                    ),
                ),
            ),
            'api.rest.doctrine.job' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/job[/:job_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Job\\Controller',
                    ),
                ),
            ),
            'api.rest.doctrine.mission' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/mission[/:mission_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Mission\\Controller',
                    ),
                ),
            ),
            'api.rest.doctrine.tag' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/tag[/:tag_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Tag\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'api.rest.doctrine.employee',
            1 => 'api.rest.doctrine.company',
            2 => 'api.rest.doctrine.experience',
            3 => 'api.rest.doctrine.job',
            4 => 'api.rest.doctrine.mission',
            5 => 'api.rest.doctrine.tag',
        ),
    ),
    'service_manager' => array(
        'factories' => array(),
    ),
    'zf-rest' => array(
        'Api\\V1\\Rest\\Employee\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Employee\\EmployeeResource',
            'route_name' => 'api.rest.doctrine.employee',
            'route_identifier_name' => 'employee_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'employees',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Employee',
            'collection_class' => 'Api\\V1\\Rest\\Employee\\EmployeeCollection',
        ),
        'Api\\V1\\Rest\\Company\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Company\\CompanyResource',
            'route_name' => 'api.rest.doctrine.company',
            'route_identifier_name' => 'company_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'companies',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Company',
            'collection_class' => 'Api\\V1\\Rest\\Company\\CompanyCollection',
        ),
        'Api\\V1\\Rest\\Experience\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Experience\\ExperienceResource',
            'route_name' => 'api.rest.doctrine.experience',
            'route_identifier_name' => 'experience_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'experiences',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Experience',
            'collection_class' => 'Api\\V1\\Rest\\Experience\\ExperienceCollection',
        ),
        'Api\\V1\\Rest\\Job\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Job\\JobResource',
            'route_name' => 'api.rest.doctrine.job',
            'route_identifier_name' => 'job_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'jobs',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Job',
            'collection_class' => 'Api\\V1\\Rest\\Job\\JobCollection',
        ),
        'Api\\V1\\Rest\\Mission\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Mission\\MissionResource',
            'route_name' => 'api.rest.doctrine.mission',
            'route_identifier_name' => 'mission_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'missions',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Mission',
            'collection_class' => 'Api\\V1\\Rest\\Mission\\MissionCollection',
        ),
        'Api\\V1\\Rest\\Tag\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Tag\\TagResource',
            'route_name' => 'api.rest.doctrine.tag',
            'route_identifier_name' => 'tag_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'tags',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Tag',
            'collection_class' => 'Api\\V1\\Rest\\Tag\\TagCollection',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Api\\V1\\Rest\\Employee\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Company\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Experience\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Job\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Mission\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Tag\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(),
        'content_type_whitelist' => array(),
        'accept-whitelist' => array(
            'Api\\V1\\Rest\\Employee\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Api\\V1\\Rest\\Company\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Api\\V1\\Rest\\Experience\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Api\\V1\\Rest\\Job\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Api\\V1\\Rest\\Mission\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Api\\V1\\Rest\\Tag\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'Api\\V1\\Rest\\Employee\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
            'Api\\V1\\Rest\\Company\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
            'Api\\V1\\Rest\\Experience\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
            'Api\\V1\\Rest\\Job\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
            'Api\\V1\\Rest\\Mission\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
            'Api\\V1\\Rest\\Tag\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'renderer' => array(
            'render_embedded_entities' => false,
            //'render_collections' => false
        ),
        'metadata_map' => array(
            'Application\\Entity\\Employee' => array(
                'route_identifier_name' => 'employee_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.employee',
                'hydrator' => 'Api\\V1\\Rest\\Employee\\EmployeeHydrator',
            ),
            'Api\\V1\\Rest\\Employee\\EmployeeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.employee',
                'is_collection' => true,
            ),
            'Application\\Entity\\Company' => array(
                'route_identifier_name' => 'company_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.company',
                'hydrator' => 'Api\\V1\\Rest\\Company\\CompanyHydrator',
            ),
            'Api\\V1\\Rest\\Company\\CompanyCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.company',
                'is_collection' => true,
            ),
            'Application\\Entity\\Experience' => array(
                'route_identifier_name' => 'experience_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.experience',
                'hydrator' => 'Api\\V1\\Rest\\Experience\\ExperienceHydrator',
            ),
            'Api\\V1\\Rest\\Experience\\ExperienceCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.experience',
                'is_collection' => true,
            ),
            'Application\\Entity\\Job' => array(
                'route_identifier_name' => 'job_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.job',
                'hydrator' => 'Api\\V1\\Rest\\Job\\JobHydrator',
            ),
            'Api\\V1\\Rest\\Job\\JobCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.job',
                'is_collection' => true,
            ),
            'Application\\Entity\\Mission' => array(
                'route_identifier_name' => 'mission_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.mission',
                'hydrator' => 'Api\\V1\\Rest\\Mission\\MissionHydrator',
            ),
            'Api\\V1\\Rest\\Mission\\MissionCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.mission',
                'is_collection' => true,
            ),
            'Application\\Entity\\Tag' => array(
                'route_identifier_name' => 'tag_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.tag',
                'hydrator' => 'Api\\V1\\Rest\\Tag\\TagHydrator',
            ),
            'Api\\V1\\Rest\\Tag\\TagCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.tag',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Api\\V1\\Rest\\Employee\\EmployeeResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Employee\\EmployeeHydrator',
            ),
            'Api\\V1\\Rest\\Company\\CompanyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Company\\CompanyHydrator',
            ),
            'Api\\V1\\Rest\\Experience\\ExperienceResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Experience\\ExperienceHydrator',
            ),
            'Api\\V1\\Rest\\Job\\JobResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Job\\JobHydrator',
            ),
            'Api\\V1\\Rest\\Mission\\MissionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Mission\\MissionHydrator',
            ),
            'Api\\V1\\Rest\\Tag\\TagResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Tag\\TagHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Api\\V1\\Rest\\Employee\\EmployeeHydrator' => array(
            'entity_class' => 'Application\\Entity\\Employee',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'experiences' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract'
            ),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Company\\CompanyHydrator' => array(
            'entity_class' => 'Application\\Entity\\Company',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Experience\\ExperienceHydrator' => array(
            'entity_class' => 'Application\\Entity\\Experience',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                //'company' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\RenderEntity'
                'missions' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract'
            ),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Job\\JobHydrator' => array(
            'entity_class' => 'Application\\Entity\\Job',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Mission\\MissionHydrator' => array(
            'entity_class' => 'Application\\Entity\\Mission',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'tags' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract'
            ),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Tag\\TagHydrator' => array(
            'entity_class' => 'Application\\Entity\\Tag',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
);
