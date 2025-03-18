<?php

return [
    'users' => [
        [
            'email' => 'test@example.com',
            'password' => '12345678',
            'role' => 'user',
        ],
        [
            'email' => 'admin@example.com',
            'password' => '123987456',
            'role' => 'admin',
        ],

        [
            'email' => 'seller@example.com',
            'password' => '987654321',
            'role' =>'seller',
        ],

        [
            'email' => 'invalid@example.com',
            'password' => '867492922',
            'role' => 'user',
        ],

        [
            'email' => "fkfjis@fjhf.it",
            'password' => '47444949494',
            'role' => 'user',
        ]
    ],

    'user_info' => [
        [
            'user_id' => 1,
            'first_name' => 'John',
            'surname' => 'Doe',
            'phone' => '+1234567890',
            'address' => '123 Main St',
            'image' => 'dshdsjdjsds',
            'tax_id_code' => '123456789a',
        ],

        [
            'user_id' => 4,
            'first_name' => 'Jane',
            'surname' => 'Smith',
            'phone' => '+9876543210',
            'address' => '987 Elm St',
            'image' => 'hsgjsdjsdjs',
            'tax_id_code' => '987654321',
        ],

        [
            'user_id' => 3,
            'first_name' => 'Johsss',
            'surname' => 'Doeddd',
            'phone' => '+1234567890',
            'address' => '12332 Main St',
            'image' => 'dshdsjdjsds',
            'tax_id_code' => '1234s56789',
        ],
    ],

    'admins' => [
        [
            'user_id' => 2,
        ]
    ],

    'sellers' => [
        [
            'user_id' => 3,
            'store_name' => 'Store',
            'logo_store' => 'djdskjdsfhds',
            'vat' => '18293hddaa',
        ]
    ],

    'seller_reviews' => [
        [
            'comment' => 'Buono',
            'rating' => 4,
            'seller_id' => 3,
        ],
        [
            'comment' => 'Catastrofico',
            'rating' => 1,
            'seller_id' => 3,
        ],
        [
            'comment' => 'Molto bene',
            'rating' => 5,
            'seller_id' => 3,
        ]
    ],

    'products_prices' => [
        [
            'product_id' => 1,
            'admin_id' => 2,
            'seller_id' => null,
            'price' => 19.99,
        ],
        [
            'product_id' => 2,
            'admin_id' => null,
            'seller_id' => 3,
            'price' => 29.99,
        ],
        [
            'product_id' => 3,
            'admin_id' => 2,
            'seller_id' => null,
            'price' => 9.99,
        ], 
    ],
    'products' => [
        [
            'name' => 'Product 1',
            'description' => 'Product 1 description',
            'category_id' => 1,
            'stock' => 20,
            'is_approved' => true,
            'is_private' => false,
            'brand' => 'Brand 1',
        ],
        [
            'name' => 'Product 2',
            'description' => 'Product 2 description',
            'category_id' => 2,
            'stock' => 10,
            'is_approved' => true,
            'is_private' => false,
            'brand' => 'Brand 2',
        ],
        [
            'name' => 'Product 3',
            'description' => 'Product 3 description',
            'category_id' => 3,
            'stock' => 5,
            'is_approved' => false,
            'is_private' => true,
            'brand' => 'Brand 3',
        ],
    ],
    'categories' => [
        [
            'type' => 'Category 1',
            'parent_id' => null,
        ],
        [
            'type' => 'SubCategory 1',
            'parent_id' => 1,
        ],
        [
            'type' => 'Category 2',
            'parent_id' => null,
        ],
        [
            'type' => 'SubCategory 2',
            'parent_id' => 2,
        ],
        [
            'type' => 'Category 3',
            'parent_id' => null,
        ],
        [
            'type' => 'SubCategory 3',
            'parent_id' => 3,
        ],
    ],
    'product_approvals' => [
        [
            'product_id' => 1,
            'new_name' => 'nome prodotto 1 modificato',
            'new_price' => 24.99,
            'new_stock' => 15,
            'new_brand' => 'Brand 4',
            'new_description' => 'New Product 1 description',
            'type' => 'addition',
            'seller_id' => 3,
            'admin_id' => 2,
            'reason' => 'perchè mi va',
            'status' => 'pending',
        ],
        [
            'product_id' => 2,
            'new_name' => 'nome prodotto 2 modificato',
            'new_price' => 34.99,
            'new_stock' => 10,
            'new_brand' => 'Brand 5',
            'new_description' => 'New Product 2 description',
            'type' => 'addition',
            'seller_id' => 3,
            'admin_id' => 2,
            'reason' => 'sdjsdjdsj',
            'status' => 'reject',
        ],
        [
            'product_id' => 3,
            'new_name' => 'nome prodotto 3 modificato',
            'new_price' => 19.99,
            'new_stock' => 5,
            'new_brand' => 'Brand 6',
            'new_description' => 'New Product 3 description',
            'type' =>'modification',
            'seller_id' => 3,
            'admin_id' => 2,
            'reason' => 'dkjdsfaoas',
            'status' => 'approved',
        ],
    ],
    'product_images' => [
        [
            'product_id' => 1,
            'image_url' => 'image1.jpg',
            'is_primary' => true,
        ],
        [
            'product_id' => 1,
            'image_url' => 'image2.jpg',
            'is_primary' => false,
        ],
        [
            'product_id' => 2,
            'image_url' => 'image3.jpg',
            'is_primary' => true,
        ],
        [
            'product_id' => 3,
            'image_url' => 'image4.jpg',
            'is_primary' => false,
        ],
    ],
    'product_reviews' => [
        [
            'product_id' => 1,
            'comment' => 'Buono',
            'rating' => 4,
        ],
        [
            'product_id' => 2,
            'comment' => 'Catastrofico',
            'rating' => 1,
        ],
        [
            'product_id' => 3,
            'comment' => 'Molto bene',
            'rating' => 5,
        ],
    ],

    'product_variants' => [
        [
            'product_id' => 1,
            'type' => 'Color',
            'type_value' => 'Rosso Bello', 
        ],
        [
            'product_id' => 2,
            'type' => 'memoria',
            'type_value' => 'tanta', 
        ],
        [
            'product_id' => 3,
            'type' => 'Sistema operativo',
            'type_value' => 'Android', 
        ],
        [
            'product_id' => 3,
            'type' => 'Dimensioni',
            'type_value' => 'Bello grande', 
        ],
    ],
    'orders' => [
        [
            'user_id' => 1,
            'total_price' => 129.99,
            'status' => 'pending',
            'cart_id' => 1,
        ],
        [
            'user_id' => 4,
            'total_price' => 29.99,
            'status' => 'completed',
            'cart_id' => 2,
        ],
        [
            'user_id' => 5,
            'total_price' => 9.99,
            'status' => 'pending',
            'cart_id' => 3,
        ],
    ],            
    'cart' => [
        [
            'user_id' => 1,
        ],
        [
            'user_id' => 4,
        ],
        [
            'user_id' => 5,
        ]
    ],
    'payements' => [
        [
            'order_id' => 1,
            'pay_method' => 'paypal',
            'amount' => 129.99,
            'status' => 'pending',
        ],
        [
            'order_id' => 2,
            'pay_method' => 'credit card',
            'amount' => 29.99,
            'status' => 'completed',
        ],
        [
            'order_id' => 3,
            'pay_method' => 'paypal',
            'amount' => 9.99,
            'status' => 'pending',
        ],
    ],
    'shipments' => [
        [
            'order_id' => 1,
            'tracking_number' => '1234567890',
            'carrier' => 'Poste Italiane',
            'status' => 'pending',
        ],
        [
            'order_id' => 2,
            'tracking_number' => '9876543210',
            'carrier' => 'TNT',
            'status' => 'completed',
        ],
        [
            'order_id' => 3,
            'tracking_number' => '0987654321',
            'carrier' => 'UPS',
            'status' => 'pending',
        ],
    ],
];