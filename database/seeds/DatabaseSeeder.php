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
          'product_img' => 'img/1-1.png',
          'product_name' => 'Espresso',
          'product_price' => '60'
        ]);
        App\Product::create([
          'product_id' => '0002',
          'product_img' => 'img/2.png',
          'product_name' => 'Green Latte',
          'product_price' => '90'
        ]);
        App\Product::create([
          'product_id' => '0003',
          'product_img' => 'img/3.png',
          'product_name' => 'Chocolate',
          'product_price' => '80'
        ]);
        App\Product::create([
          'product_id' => '0004',
          'product_img' => 'img/4.png',
          'product_name' => 'Caffe Latte',
          'product_price' => '70'
        ]);
        App\Product::create([
          'product_id' => '0005',
          'product_img' => 'img/5.png',
          'product_name' => 'Caramel Macchiato',
          'product_price' => '95'
        ]);
        App\Product::create([
          'product_id' => '0006',
          'product_img' => 'img/6.png',
          'product_name' => 'Cinnamon Cafe Mocha',
          'product_price' => '95'
        ]);
        App\Product::create([
          'product_id' => '0007',
          'product_img' => 'img/7.png',
          'product_name' => 'Caffe Mocha',
          'product_price' => '85'
        ]);
        App\Product::create([
          'product_id' => '0008',
          'product_img' => 'img/8.png',
          'product_name' => 'White Chocolate',
          'product_price' => '85'
        ]);
        App\Product::create([
          'product_id' => '0009',
          'product_img' => 'img/9.png',
          'product_name' => 'Plain Yogurt Smoothie',
          'product_price' => '95'
        ]);
        // App\Product::create([
        //   'product_id' => '0010',
        //   'product_img' => 'img/10.png',
        //   'product_name' => 'Walnutccino',
        //   'product_price' => '55'
        // ]);

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
          'promotion_id' => '1',
          'promotion_img' => 'img/pro1.png',
          'description' => 'แก้วที่สองลด 50% เมื่อซื้อเครื่องดื่มรสชาติใดก็ได้ สามารถรับส่วนลด 50% ในการซื้อเครื่องดื่มแก้วที่สองรสชาติใดก็ได้',
          'discount' => '50'
        ]);
        App\Promotion::create([
          'promotion_id' => '2',
          'promotion_img' => 'img/pro2.png',
          'description' => 'เมื่อซื้อเครื่องดื่มตั้งแต่ 80 บาทขึ้นไปสามารถ upsize M free',
          'discount' => '0'
        ]);
        // App\Promotion::create([
        //   'promotion_id' => '2',
        //   'promotion_img' => 'img/pro3.jpg',
        //   'description' => 'ซื้อเครื่องดื่มครบ 200 บาท รับคะแนนสะสมคูณ 2 เมื่อซื้อเครื่องดื่มครบ 200 บาท จะได้รับคะแนนสะสมสองเท่า **เฉพาะลูกค้าที่เป็นสมาชิกเท่านั้น**',
        //   'discount' => '0'
        // ]);

        // Vouchers

        App\Voucher::create([
          'voucher_img' => 'img/voucher1.png',
          'voucher_point' => '150',
          'voucher_price' => '50'
        ]);
        App\Voucher::create([
          'voucher_img' => 'img/voucher2.png',
          'voucher_point' => '200',
          'voucher_price' => '100'
        ]);
        App\Voucher::create([
          'voucher_img' => 'img/voucher3.png',
          'voucher_point' => '275',
          'voucher_price' => '150'
        ]);


        // Orders
        App\Order::create([
          'user_id' => '1234',
          'order_id' => '1',
          'price' => '50'
        ]);

        App\Order::create([
          'user_id' => '2525',
          'order_id' => '2',
          'price' => '50'
        ]);

        App\Order::create([
          'user_id' => '3434',
          'order_id' => '3',
          'price' => '50'
        ]);


        // Order_datails
        App\OrderDetail::create([
          'order_id' => '1',
          'product_id' => '0001',
          'total_price' => '500'
        ]);

        App\OrderDetail::create([
          'order_id' => '2',
          'product_id' => '0002',
          'total_price' => '300'
        ]);

        App\OrderDetail::create([
          'order_id' => '3',
          'product_id' => '0003',
          'total_price' => '800'
        ]);

        // Order_dete
        App\OrderDate::create([
          'order_id' => '1',
          'date' => '2016-05-7'
        ]);

        App\OrderDate::create([
          'order_id' => '2',
          'date' => '2016-05-7'
        ]);

        App\OrderDate::create([
          'order_id' => '3',
          'date' => '2016-05-7'
        ]);



    }
}
