<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Users

        App\User::create([
          'id' => '1234',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('1111'),
          'firstname' => 'adad',
          'lastname' => 'dada',
          'tel' => '0899999999',
          'birthday' => '01/01/2001',
          'gender' => 'male',
          'address' => 'tiwanon',
          'role' => 'admin'
        ]);
        App\User::create([
          'id' => '2525',
          'email' => 'pizza@gmail.com',
          'password' => bcrypt('0000'),
          'firstname' => 'pizza',
          'lastname' => 'duzz',
          'tel' => '0801231234',
          'birthday' => '01/02/2003',
          'gender' => 'female',
          'address' => 'tiwanon',
          'role' => 'customer'
        ]);
        App\User::create([
          'id' => '3434',
          'email' => 'mymy@gmail.com',
          'password' => bcrypt('2222'),
          'firstname' => 'mymy',
          'lastname' => 'ymym',
          'tel' => '0855555555',
          'birthday' => '03/04/2005',
          'gender' => 'female',
          'address' => 'phayathai',
          'role' => 'customer'
        ]);

        // User Details



        // Products

        App\Product::create([
          'product_id' => '0001',
          'product_img' => 'img/1.png',
          'product_name' => 'espresso',
          'product_price' => '25'
        ]);
        App\Product::create([
          'product_id' => '0002',
          'product_img' => 'img/2.png',
          'product_name' => 'greentea',
          'product_price' => '20'
        ]);
        App\Product::create([
          'product_id' => '0003',
          'product_img' => 'img/3.png',
          'product_name' => 'chocolate',
          'product_price' => '20'
        ]);
        App\Product::create([
          'product_id' => '0004',
          'product_img' => 'img/4.png',
          'product_name' => 'latte',
          'product_price' => '25'
        ]);
        App\Product::create([
          'product_id' => '0005',
          'product_img' => 'img/5.png',
          'product_name' => 'caramel macchiato',
          'product_price' => '30'
        ]);

        // Product Sizes

        App\ProductSize::create([
          'size' => 's',
          'size_price' => '5'
        ]);
        App\ProductSize::create([
          'size' => 'm',
          'size_price' => '10'
        ]);
        App\ProductSize::create([
          'size' => 'l',
          'size_price' => '15'
        ]);

        // Product Types

        App\ProductType::create([
          'type' => 'hot',
          'type_price' => '5'
        ]);
        App\ProductType::create([
          'type' => 'iced',
          'type_price' => '10'
        ]);
        App\ProductType::create([
          'type' => 'freppe',
          'type_price' => '15'
        ]);

        // Promotions

        App\Promotion::create([
          'promotion_id' => 'p01',
          'promotion_img' => 'img/pro1.jpg',
          'description' => 'ซื้อหนึ่งแก้ว แก้วที่สองลด 50%',
          'discount' => '50'
        ]);

        // Vouchers

        App\Voucher::create([
          'voucher_img' => 'img/voucher1.jpg',
          'voucher_point' => '15',
          'voucher_price' => '30'
        ]);
        App\Voucher::create([
          'voucher_img' => 'img/voucher1.jpg',
          'voucher_point' => '25',
          'voucher_price' => '50'
        ]);
        App\Voucher::create([
          'voucher_img' => 'img/voucher1.jpg',
          'voucher_point' => '35',
          'voucher_price' => '70'
        ]);


        // Orders



        // Order_details



        // Order_date

    }
}
