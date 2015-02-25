<?php
return array(
    'service_manager' => array(
        'invokables' => array(
            'Api\\V1\\Rest\\Employee\\EmployeeListener' => 'Api\\V1\\Rest\\Employee\\EmployeeListener',
            'Api\\V1\\Rest\\Experience\\ExperienceListener' => 'Api\\V1\\Rest\\Experience\\ExperienceListener',
            'Api\\V1\\Rest\\Mission\\MissionListener' => 'Api\\V1\\Rest\\Mission\\MissionListener',
            'Application\\Stdlib\\Hydrator\\Strategy\\UpdatableHalCollection' => 'Application\\Stdlib\\Hydrator\\Strategy\\UpdatableHalCollection',
            'Application\\Stdlib\\Hydrator\\Filter\\ExperienceFilter' => 'Application\\Stdlib\\Hydrator\\Filter\\ExperienceFilter',
            'Application\\Stdlib\\Hydrator\\Filter\\MissionFilter' => 'Application\\Stdlib\\Hydrator\\Filter\\MissionFilter'
        ),
    ),
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
            'api.rpc.register' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rpc\\Register\\Controller',
                        'action' => 'register',
                    ),
                ),
            ),
            'api.rest.doctrine.country' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/country[/:country_id]',
                    'defaults' => array(
                        'controller' => 'Api\\V1\\Rest\\Country\\Controller',
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
            6 => 'api.rpc.register',
            7 => 'api.rest.doctrine.country',
        ),
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
                2 => 'PUT',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 5,
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
                1 => 'DELETE',
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
                1 => 'DELETE',
                2 => 'PUT',
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
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
                1 => 'PUT',
                2 => 'DELETE',
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Tag',
            'collection_class' => 'Api\\V1\\Rest\\Tag\\TagCollection',
        ),
        'Api\\V1\\Rest\\Country\\Controller' => array(
            'listener' => 'Api\\V1\\Rest\\Country\\CountryResource',
            'route_name' => 'api.rest.doctrine.country',
            'route_identifier_name' => 'country_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'countries',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 250,
            'page_size_param' => 'limit',
            'entity_class' => 'Application\\Entity\\Country',
            'collection_class' => 'Api\\V1\\Rest\\Country\\CountryCollection',
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
            'Api\\V1\\Rpc\\Register\\Controller' => 'Json',
            'Api\\V1\\Rest\\Country\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Api\\V1\\Rest\\Tag\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rest\\Mission\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rest\\Job\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rest\\Experience\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rest\\Employee\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rest\\Company\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Api\\V1\\Rpc\\Register\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Api\\V1\\Rest\\Tag\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rest\\Mission\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rest\\Job\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rest\\Experience\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rest\\Employee\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rest\\Company\\Controller' => array(
                0 => 'application/json',
            ),
            'Api\\V1\\Rpc\\Register\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
        ),
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
            'Api\\V1\\Rest\\Country\\Controller' => array(
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
            'Api\\V1\\Rest\\Country\\Controller' => array(
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'renderer' => array(
        ),
        'metadata_map' => array(
            'Application\\Entity\\Employee' => array(
                'route_identifier_name' => 'employee_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.employee',
                'hydrator' => 'Api\\V1\\Rest\\Employee\\EmployeeHydrator',
                //'max_depth' => 6,
            ),
            'Api\\V1\\Rest\\Employee\\EmployeeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.employee',
                'is_collection' => true,
                //'max_depth' => 1,
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
            'Application\\Entity\\Country' => array(
                'route_identifier_name' => 'country_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.country',
                'hydrator' => 'Api\\V1\\Rest\\Country\\CountryHydrator',
            ),
            'Api\\V1\\Rest\\Country\\CountryCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.country',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Api\\V1\\Rest\\Employee\\EmployeeResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Employee\\EmployeeHydrator',
                'listeners' => array(
                    0 => 'Api\\V1\\Rest\\Employee\\EmployeeListener',
                ),
            ),
            'Api\\V1\\Rest\\Company\\CompanyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Company\\CompanyHydrator',
                'listeners' => array(),
            ),
            'Api\\V1\\Rest\\Experience\\ExperienceResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Experience\\ExperienceHydrator',
                'listeners' => array(
                    0 => 'Api\\V1\\Rest\\Experience\\ExperienceListener',
                ),
            ),
            'Api\\V1\\Rest\\Job\\JobResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Job\\JobHydrator',
            ),
            'Api\\V1\\Rest\\Mission\\MissionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Mission\\MissionHydrator',
                'listeners' => array(
                    0 => 'Api\\V1\\Rest\\Mission\\MissionListener',
                ),
            ),
            'Api\\V1\\Rest\\Tag\\TagResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Tag\\TagHydrator',
            ),
            'Api\\V1\\Rest\\Country\\CountryResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Country\\CountryHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Api\\V1\\Rest\\Employee\\EmployeeHydrator' => array(
            'entity_class' => 'Application\\Entity\\Employee',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'experiences' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract',
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
                'missions' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract',
                //'employee' => 'Application\\Stdlib\\Hydrator\\Strategy\\ExtractOnlyId'
            ),
            'use_generated_hydrator' => true,
            'filters' => array(
                array(
                    'filter' => 'Application\\Stdlib\\Hydrator\\Filter\\ExperienceFilter'
                )
            )
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
                'tags' => 'Application\\Stdlib\\Hydrator\\Strategy\\UpdatableHalCollection',
                //'experience' => 'Application\\Stdlib\\Hydrator\\Strategy\\ExtractOnlyId'
            ),
            'use_generated_hydrator' => true,
            'filters' => array(
                array(
                    'filter' => 'Application\\Stdlib\\Hydrator\\Filter\\MissionFilter'
                )
            )
        ),
        'Api\\V1\\Rest\\Tag\\TagHydrator' => array(
            'entity_class' => 'Application\\Entity\\Tag',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Api\\V1\\Rest\\Country\\CountryHydrator' => array(
            'entity_class' => 'Application\\Entity\\Country',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Api\\V1\\Rest\\Employee\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => true,
                    'PUT' => false,
                    'DELETE' => false,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'Api\\V1\\Rest\\Company\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'Api\\V1\\Rest\\Experience\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'Api\\V1\\Rest\\Job\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'Api\\V1\\Rest\\Mission\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'Api\\V1\\Rest\\Tag\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Api\\V1\\Rest\\Employee\\Controller' => array(
            'input_filter' => 'Api\\V1\\Rest\\Employee\\EmployeeInputFilter',
        ),
        'Api\\V1\\Rest\\Experience\\Controller' => array(
            'input_filter' => 'Api\\V1\\Rest\\Experience\\ExperienceInputFilter',
        ),
        'Api\\V1\\Rest\\Mission\\Controller' => array(
            'input_filter' => 'Api\\V1\\Rest\\Mission\\MissionInputFilter',
        ),
        'Api\\V1\\Rpc\\Register\\Controller' => array(
            'input_filter' => 'Api\\V1\\Rpc\\Register\\RegisterInputFilter',
        ),
    ),
    'input_filter_specs' => array(
        'Api\\V1\\Rest\\Employee\\EmployeeInputFilter' => array(
            'id' => array(
                'name' => 'id',
                'required' => true,
                'allow_empty' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Int',
                    ),
                ),
            ),
            'firstName' => array(
                'name' => 'firstName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'min' => 3,
                            'max' => 25,
                        ),
                    ),
                    1 => array(
                        'name' => 'Regex',
                        'options' => array(
                            'pattern' => '/[\\p{L}\\p{N} \\–\']{3,25}/u',
                        ),
                    ),
                ),
            ),
            'lastName' => array(
                'name' => 'lastName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'min' => 3,
                            'max' => 25,
                        ),
                    ),
                    1 => array(
                        'name' => 'Regex',
                        'options' => array(
                            'pattern' => '/[\\p{L}\\p{N} \\–\']{3,25}/u',
                        ),
                    ),
                ),
            ),
            'email' => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'EmailAddress',
                        'options' => array(
                            'break_chain_on_failure' => true,
                        )
                    ),
                    1 => array(
                        'name' => 'DoctrineModule\Validator\UniqueObject',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Employee',
                            'fields' => 'email',
                            'messages' => array(
                                'objectNotUnique' => 'Cette adresse email existe déjà.'
                            )
                        ),
                    ),
                ),
            ),            
            'hasDriversLicence' => array(
                'name' => 'hasDriversLicence',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'isCurrentlyEmployed' => array(
                'name' => 'isCurrentlyEmployed',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'isLookingForAJob' => array(
                'name' => 'isLookingForAJob',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'currentJobName' => array(
                'name' => 'currentJobName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            'avatarUrl' => array(
                'name' => 'avatarUrl',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array('name' => 'Regex', 'options' => array('pattern' => '/^http:\/\/.+\/[^\/]+\.jpg$/i'))
                )
            ),
            'description' => array(
                'name' => 'description',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 500,
                        ),
                    ),
                ),
            ),
            'city' => array(
                'name' => 'city',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            'zipCode' => array(
                'name' => 'zipCode',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Digits',
                    ),
                    1 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 10,
                        ),
                    ),
                ),
            ),
            'country' => array(
                'name' => 'country',
                'required' => true,                
                'validators' => array(
                    array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Country',
                            'fields' => 'id',
                        ),
                    ),
                ),
            ),
            'birthdate' => array(
                'name' => 'birthdate',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Date',
                    ),
                ),
            ),
        ),
        'Api\\V1\\Rpc\\Register\\RegisterInputFilter' => array(
            'firstName' => array(
                'name' => 'firstName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'min' => 3,
                            'max' => 25,
                        ),
                    ),
                    1 => array(
                        'name' => 'Regex',
                        'options' => array(
                            'pattern' => '/[\\p{L}\\p{N} \\–\']{3,25}/u',
                        ),
                    ),
                ),
            ),
            'lastName' => array(
                'name' => 'lastName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'min' => 3,
                            'max' => 25,
                        ),
                    ),
                    1 => array(
                        'name' => 'Regex',
                        'options' => array(
                            'pattern' => '/[\\p{L}\\p{N} \\–\']{3,25}/u',
                        ),
                    ),
                ),
            ),
            'email' => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'EmailAddress',
                        'options' => array(
                            'break_chain_on_failure' => true,
                        )
                    ),
                    1 => array(
                        'name' => 'DoctrineModule\Validator\NoObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Employee',
                            'fields' => 'email',
                            'messages' => array(
                                'objectFound' => 'Cette adresse email existe déjà.'
                            )
                        ),
                    ),
                ),
            ),            
            'hasDriversLicence' => array(
                'name' => 'hasDriversLicence',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'isCurrentlyEmployed' => array(
                'name' => 'isCurrentlyEmployed',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'isLookingForAJob' => array(
                'name' => 'isLookingForAJob',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Boolean',
                    ),
                ),
            ),
            'currentJobName' => array(
                'name' => 'currentJobName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            'avatarUrl' => array(
                'name' => 'avatarUrl',
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array('name' => 'Regex', 'options' => array('pattern' => '/^http:\/\/.+\/[^\/]+\.jpg$/i'))
                )
            ),
            'description' => array(
                'name' => 'description',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 500,
                        ),
                    ),
                ),
            ),
            'city' => array(
                'name' => 'city',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            'zipCode' => array(
                'name' => 'zipCode',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Digits',
                    ),
                    1 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 10,
                        ),
                    ),
                ),
            ),
            'country' => array(
                'name' => 'country',
                'required' => true,                
                'validators' => array(
                    array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Country',
                            'fields' => 'id',
                        ),
                    ),
                ),
            ),
            'birthdate' => array(
                'name' => 'birthdate',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Date',
                    ),
                ),
            ),
            'userName' => array(
                'name' => 'userName',
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                    2 => array(
                        'name' => 'StringToLower',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Regex',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'pattern' => '/^[a-z]+[a-z\\-\\.]*[a-z]+$/',
                        ),
                    ),
                    1 => array(
                        'name' => 'DoctrineModule\Validator\NoObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\OAuthUser',
                            'fields' => 'userName',
                            'messages' => array(
                                'objectFound' => 'Ce nom est déjà pris.'
                            )
                        ),
                    ),
                ),
            ),
            'password' => array(
                'name' => 'password',
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'messages' => array(
                                'isEmpty' => 'Le mot de passe est obligatoire.',
                            ),
                        ),
                    ),
                    1 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                            'min' => 6,
                            'max' => 30,
                        ),
                    ),
                    2 => array(
                        'name' => 'Application\\Validator\\PasswordStrength',
                        'options' => array(
                            'break_chain_on_failure' => true,
                        )
                    ),
                    3 => array(
                        'name' => 'Identical',
                        'options' => array(
                            'token' => 'passwordConfirm',
                        ),
                    ),
                ),
            ),
            'passwordConfirm' => array(
                'name' => 'passwordConfirm',
                'required' => true,
            ),
        ),
        'Api\\V1\\Rest\\Experience\\ExperienceInputFilter' => array(
            'description' => array(
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 500,
                        ),
                    ),
                ),
            ),
            'dateStart' => array(
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Date',
                    ),
                ),
            ),
            'dateEnd' => array(
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Date',
                    ),
                ),
            ),
            'employee' => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Employee',
                            'fields' => 'id',
                        ),
                    ),
                ),
            ),
            'company' => array(
                'required' => false,
                'allow_empty' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Company',
                            'fields' => 'id',
                        ),
                    ),
                ),
            ),
            'job' => array(
                'required' => false,
                'allow_empty' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Job',
                            'fields' => 'id',
                        ),
                    ),
                ),
            ),
        ),
        'Api\\V1\\Rest\\Mission\\MissionInputFilter' => array(
            'name' => array(
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'StripTags',
                    ),
                    1 => array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 250,
                        ),
                    ),
                ),
            ),
            'description' => array(
                'required' => false,
                'allow_empty' => true,
                'filters' => array(
                    array(
                        'name' => 'StripTags',
                    ),
                    array(
                        'name' => 'StringTrim',
                    ),
                ),
                'validators' => array(
                    array(
                        'name' => 'StringLength',
                        'options' => array(
                            'max' => 500,
                        ),
                    ),
                ),
            ),
            'experience' => array(
                'required' => true,
                'validators' => array(
                    array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Experience',
                            'fields' => 'id',
                        ),
                    ),
                )
            ),
            'tags' => array(
                'type' => 'collection',
                'required' => false,
                'allow_empty' => true,
                'validators' => array(
                    array(
                        'name' => 'DoctrineModule\\Validator\\ObjectExists',
                        'options' => array(
                            'object_manager' => 'doctrine.entitymanager.orm_default',
                            'object_repository' => 'Application\\Entity\\Tag',
                            'fields' => 'id',
                        ),
                    ),
                )
            )
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Api\\V1\\Rpc\\Register\\Controller' => 'Api\\V1\\Rpc\\Register\\RegisterControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'Api\\V1\\Rpc\\Register\\Controller' => array(
            'service_name' => 'Register',
            'http_methods' => array(
                0 => 'POST',
            ),
            'route_name' => 'api.rpc.register',
        ),
    ),
);
