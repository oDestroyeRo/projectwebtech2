**READ ME**
1.  Clone projectwebtech2 ขึ้นมา
2.       ใน terminal ให้ cd ไปที่โฟเดอร์ที่โคลนมา แล้ว พิมพ์ composer install เมื่อ install เสร็จให้พิมพ์ npm install
3. 	พิม copy .env.example .env แล้วพิม  php artisan key:generate
4.	จากนั้นใส่
	DB_DATABASE=ชื่อดาต้าเบส
	DB_USERNAME=username ของดาต้าเบส
	DB_PASSWORD=password ของดาต้าเบส
	
	MAIL_DRIVER=smtp
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=587
	MAIL_USERNAME=odestroyero@hotmail.com
	MAIL_PASSWORD=svylgjdfjbcetkbl
	MAIL_ENCRYPTION=tls	
5.        เข้าไปที่ไฟล์ php.ini โดยเปิด laragon ขึ้นมา -> menu->PHP->php.ini หา  extension=php_fileinfo.dll แล้วเอา ; ข้างหน้าออกแล้ว save
6.	สร้าง database ตามชื่อที่ใส่
7.	ใน command line พิม php artisan migrate เสร็จแล้วพิม php artisan db:seed
8. 	เมื่อเข้ามาหน้าเว็บให้ log in ด้วย 
	Email: admin@gmail.com
	Password: 0000
9. 	ลอง register โดยกดที่แถบ Register ระบบจะทำการสร้างไอดีขึ้นมา ไอดีนี้จะนำไปเป็นรหัสผ่านในการล็อคอินเข้าไปเปลี่ยนพาสเวิร์ดใหม่

**หน้าที่**
5710404241 นางสาว กานต์พิชชา วงศ์สว่าง  - ออกแบบดาต้าเบส,ทำหน้า point,profile,order และ เชื่อม controller ในหน้าที่ทำ
5710404250 นางสาว เขมิกา ธิติธัญธวัช - ช่วยออกแบบดาต้าเบส,ทำหน้า menu,promotion,gift voucher และ หน้าช่วยกานต์พิชชาแก้ไขการ update database เพื่อโชว์หน้า profile มีการเชื่อม controller กับหน้าต่างๆที่ทำ ออกแบบโลโก้ของร้าน และ photoshop menu ต่างๆ
5710404624 นางสาว วรัญญา ธรรมศรีทิพย์ - มีส่วนร่วมในการออกแบบดาต้าเบส, ทำ layout ทั้งหมด, ทำไฟล์ app.blade.php และจัดหน้าล็อคอินและหน้าโฮม
5710451444 นางสาว วรินทร ประสารกก - ออกแบบดาต้าเบส, ทำไฟล์ migration, ทำไฟล์ Databaseseeder,ออกแบบpromotion and voucher และช่วยทำหน้า voucher 
5710450201 นายณัฐปคัลภ์ วงศ์ชำนาญ - ทำระบบ Login,สมัครสมาชิก,resetpassword,permisssion ของแต่ละหน้า,ทำ smtp mailserver,หน้าหน้า product voucher users ในส่วนของ admin,ทำส่วนที่ login ครั้งแรกจะต้องเปลี่ยนรหัสผ่าน
5610450993 นายปัณณวัชร์ กัลยาวุณิพัฒน์ - ทำหน้า report promotion order ของ admin


facebook ในการติดต่อ :  www.facebook.com/oDestroyeRo Natpakan Wongchmanan