<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
// Mobile
            //Mobile(category=>1) ->Apple(brand=>1)
            [
                'category_id' => '1',
                'name' => 'Iphone 13 Pro Max',
                'slug' => 'iphone-13-pro-max',
                'brand' => '1',
                'description' => 'iPhone 13 Pro Max 1 TB thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ "khủng", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.',
                'original_price' => 1500,
                'selling_price' => 1452,
                'quantity' => 10,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Iphone 13 Pro Max',
                'meta_keyword'=>'Iphone 13 Pro Max',
                'meta_description'=>'Iphone 13 Pro Max'
            ], 
            [
                'category_id' => '1',
                'name' => 'Iphone 12',
                'slug' => 'iphone-12',
                'brand' => '1',
                'description' => 'iPhone 12 thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ "khủng", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.',
                'original_price' => 1300,
                'selling_price' => 1260,
                'quantity' => 0,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Iphone 12',
                'meta_keyword'=>'Iphone 12',
                'meta_description'=>'Iphone 12'
            ], 
            //Mobile(category=>1) ->SamSung(brand=>2)
            [
                'category_id' => '1',
                'name' => 'Samsung Galaxy S20 FE',
                'slug' => 'samsung-galaxy-s20-fe',
                'brand' => '2',
                'description' => 'Samsung đã giới thiệu đến người dùng thành viên mới của dòng S20 Series đó chính là điện thoại Samsung Galaxy S20 FE. Đây là mẫu flagship cao cấp quy tụ nhiều tính năng mà Samfan yêu thích, hứa hẹn sẽ mang lại trải nghiệm cao cấp của dòng Galaxy S với mức giá dễ tiếp cận hơn.',
                'original_price' => 1601,
                'selling_price' => 1590,
                'quantity' => 1,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Samsung Galaxy S20 FE',
                'meta_keyword'=>'Samsung Galaxy S20 FE',
                'meta_description'=>'Samsung Galaxy S20 FE'
            ], 
            [
                'category_id' => '1',
                'name' => 'Samsung Galaxy S22 Ultra 5G 128GB',
                'slug' => 'samsung-galaxy-s20-fe',
                'brand' => '2',
                'description' => 'Galaxy S22 Ultra 5G chiếc smartphone cao cấp nhất trong bộ 3 Galaxy S22 series mà Samsung đã cho ra mắt. Tích hợp bút S Pen hoàn hảo trong thân máy, trang bị vi xử lý mạnh mẽ cho các tác vụ sử dụng vô cùng mượt mà và nổi bật hơn với cụm camera không viền độc đáo mang đậm dấu ấn riêng.',
                'original_price' => 1401,
                'selling_price' => 1300,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Samsung Galaxy S22 Ultra 5G 128GB ',
                'meta_keyword'=>'Samsung Galaxy S22 Ultra 5G 128GB ',
                'meta_description'=>'Samsung Galaxy S22 Ultra 5G 128GB '
            ], 
            //Mobile(category=>1) ->Xiaomi(brand=>3)
            [
                'category_id' => '1',
                'name' => 'Xiaomi Redmi Note 11',
                'slug' => 'xiaomi-redmi-note-11',
                'brand' => '3',
                'description' => 'Điện thoại Redmi được mệnh danh là dòng sản phẩm quốc dân ngon - bổ  - rẻ của Xiaomi và Redmi Note 11 (4GB/64GB) cũng không phải ngoại lệ, máy sở hữu một hiệu năng ổn định, màn hình 90 Hz mượt mà, cụm camera AI đến 50 MP cùng một mức giá vô cùng tốt.',
                'original_price' => 800,
                'selling_price' => 759,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Xiaomi Redmi Note 11',
                'meta_keyword'=>'Xiaomi Redmi Note 11',
                'meta_description'=>'Xiaomi Redmi Note 11'
            ], 
            [
                'category_id' => '1',
                'name' => 'Xiaomi Redmi Note 11S',
                'slug' => 'xiaomi-redmi-note-11s',
                'brand' => '3',
                'description' => 'Điện thoại Redmi được mệnh danh là dòng sản phẩm quốc dân ngon - bổ  - rẻ của Xiaomi và Redmi Note 11 (4GB/64GB) cũng không phải ngoại lệ, máy sở hữu một hiệu năng ổn định, màn hình 90 Hz mượt mà, cụm camera AI đến 50 MP cùng một mức giá vô cùng tốt.',
                'original_price' => 850,
                'selling_price' => 810,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Xiaomi Redmi Note 11S',
                'meta_keyword'=>'Xiaomi Redmi Note 11S',
                'meta_description'=>'Xiaomi Redmi Note 11S'
            ], 
            //Mobile(category=>1) ->Oppo(brand=>4)
            [
                'category_id' => '1',
                'name' => 'OPPO Reno8 Pro 5G',
                'slug' => 'oppo-reno8-pro-5g',
                'brand' => '4',
                'description' => 'OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt vào thời điểm 09/2022, máy hướng đến sự hoàn thiện cao cấp ở phần thiết kế cùng khả năng quay chụp chuyên nghiệp nhờ trang bị vi xử lý hình ảnh MariSilicon X chuyên dụng.',
                'original_price' => 1355,
                'selling_price' => 1300,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'OPPO Reno8 Pro 5G',
                'meta_keyword'=>'OPPO Reno8 Pro 5G',
                'meta_description'=>'OPPO Reno8 Pro 5G'
            ], 
            [
                'category_id' => '1',
                'name' => ' OPPO A55',
                'slug' => 'oppo-a55',
                'brand' => '4',
                'description' => 'OPPO cho ra mắt OPPO A55 4G chiếc smartphone giá rẻ tầm trung có thiết kế đẹp mắt, cấu hình khá ổn, cụm camera chất lượng và dung lượng pin ấn tượng, mang đến một lựa chọn trải nghiệm thú vị vừa túi tiền cho người tiêu dùng.',
                'original_price' => 1355,
                'selling_price' => 1300,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>' OPPO A55',
                'meta_keyword'=>' OPPO A55',
                'meta_description'=>' OPPO A55'
            ], 
// Laptop
            //Laptop(category=>2) ->Dell(brand=>5)
            [
                'category_id' => '2',
                'name' => 'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11',
                'slug' => 'laptop-dell-gaming-g15-5511',
                'brand' => '5',
                'description' => 'Không những mang đến cho người dùng hiệu năng ấn tượng nhờ con chip Intel thế hệ 11 tân tiến, laptop Dell Gaming G15 5511 i5 11400H (70266676) còn sở hữu thiết kế thời thượng, lôi cuốn, hứa hẹn sẽ là người cộng sự lý tưởng cùng bạn chinh phục mọi chiến trường.',
                'original_price' => 1800,
                'selling_price' => 1750,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11',
                'meta_keyword'=>'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11',
                'meta_description'=>'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11'
            ],
            [
                'category_id' => '2',
                'name' => 'Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11',
                'slug' => 'laptop-dell-vostro-3510',
                'brand' => '5',
                'description' => 'Laptop Dell Vostro 3510 i5 (P112F002BBL) sở hữu cấu hình mạnh mẽ, đa nhiệm mượt mà trên sức mạnh của bộ vi xử lý Intel thế hệ 11, cùng một thiết kế đơn giản mà sang đẹp, sẽ là lựa chọn đắt giá đáp ứng nhu cầu học tập, làm việc hay giải trí của bạn.',
                'original_price' => 1750,
                'selling_price' => 1500,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11',
                'meta_keyword'=>'Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11',
                'meta_description'=>'Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11'
            ], 
            //Laptop(category=>2) ->Asus(brand=>6)
            [
                'category_id' => '2',
                'name' => 'Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11',
                'slug' => 'laptop-asus-tuf-gaming-fx5-6-i5',
                'brand' => '6',
                'description' => 'Nếu bạn đang tìm kiếm một chiếc laptop gaming nhưng vẫn sở hữu một mức giá phải chăng thì laptop Asus TUF Gaming FX506LHB i5 (HN188W) sẽ là sự lựa chọn đáng cân nhắc với card đồ họa rời NVIDIA GeForce GTX mạnh mẽ cùng phong cách thiết kế cứng cáp, độc đáo.',
                'original_price' => 1750,
                'selling_price' => 1500,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11',
                'meta_keyword'=>'Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11',
                'meta_description'=>'Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11'
            ], 
            [
                'category_id' => '2',
                'name' => 'Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11',
                'slug' => 'laptop-asus-vivobook-15x-qled',
                'brand' => '6',
                'description' => 'Laptop Asus VivoBook 15X OLED A1503ZA i5 (L1290W) là phiên bản laptop cao cấp - sang trọng không chỉ giải quyết triệt để các tác vụ học tập, văn phòng nhờ sức mạnh bùng nổ đến từ bộ vi xử lý Intel thế hệ 12 mà còn mang đến không gian giải trí trọn vẹn khi sở hữu những thông số màn hình ấn tượng. ',
                'original_price' => 1750,
                'selling_price' => 1500,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11',
                'meta_keyword'=>'Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11',
                'meta_description'=>'Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11'
            ], 
            //Laptop(category=>2) ->Macbook(brand=>7)
            [
                'category_id' => '2',
                'name' => 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU',
                'slug' => 'laptop-apple-macbook-air-m1-2020',
                'brand' => '7',
                'description' => 'Laptop Apple Air M1 2020 có thiết kế đẹp, sang trọng với CPU M1 độc quyền từ Apple cho hiệu năng đồ họa cao, màn hình Retina hiển thị siêu nét cùng với hệ thống bảo mật tối ưu.',
                'original_price' => 2100,
                'selling_price' => 2050,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU',
                'meta_keyword'=>'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU',
                'meta_description'=>'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU'
            ], 
            [
                'category_id' => '2',
                'name' => 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU',
                'slug' => 'laptop-apple-macbook-pro-m2-2022',
                'brand' => '7',
                'description' => 'Sở hữu thiết kế thanh lịch, sang trọng cùng hiệu năng vượt trội đến từ bộ vi xử lý Apple M2 tân tiến, Macbook Pro M2 hứa hẹn sẽ đáp ứng hoàn hảo cho người dùng sáng tạo, phục vụ tốt cho các nhu cầu thiết kế đồ họa nâng cao.',
                'original_price' => 2100,
                'selling_price' => 2050,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU',
                'meta_keyword'=>'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU',
                'meta_description'=>'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU'
            ], 
            //Laptop(category=>2) ->Lenovo(brand=>8)
            [
                'category_id' => '2',
                'name' => 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10',
                'slug' => 'laptop-lenovo-yoga-duet-7-14itl6',
                'brand' => '8',
                'description' => 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 (82MA003UVN) là sự kết hợp hoàn hảo giữa một chiếc máy tính Windows và Tablet từ đó mang đến một siêu phẩm có thiết kế cơ động, nhỏ gọn cùng hiệu năng mạnh mẽ, phù hợp cho mọi tác vụ giải trí, sáng tạo nội dung với bút cảm ứng Digital Pen tặng kèm.',
                'original_price' => 1700,
                'selling_price' => 1650,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10',
                'meta_keyword'=>'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10',
                'meta_description'=>'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10'
            ], 
            [
                'category_id' => '2',
                'name' => 'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN) ',
                'slug' => 'laptop-lenovo-ideapad-3-15IAU7-i3',
                'brand' => '8',
                'description' => 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 (82MA003UVN) là sự kết hợp hoàn hảo giữa một chiếc máy tính Windows và Tablet từ đó mang đến một siêu phẩm có thiết kế cơ động, nhỏ gọn cùng hiệu năng mạnh mẽ, phù hợp cho mọi tác vụ giải trí, sáng tạo nội dung với bút cảm ứng Digital Pen tặng kèm.',
                'original_price' => 1500,
                'selling_price' => 1490,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title'=>'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN) ',
                'meta_keyword'=>'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN) ',
                'meta_description'=>'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN) '
            ], 
             //tablet(category=>3)->ipad(brand=9)
             [
                'category_id' => '3',
                'name' => ' iPad Pro M1 11 inch WiFi Cellular 1TB (2021)  ',
                'slug' => 'iPad-Pro-M1-11-inch-WiFi-Cellular-1TB',
                'brand' => '9',
                'description' => 'Máy tính bảng iPad Pro M1 11 inch WiFi Cellular 1TB (2021) thiết kế hình hộp vát cạnh vuông vức, hiện đại với thân máy bằng kim loại chắc chắn, hoàn thiện tỉ mỉ và sang trọng, khối lượng nhẹ, kích cỡ hợp lý thuận tiện sử dụng và mang theo',
                'original_price' => 1900,
                'selling_price' => 1790,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'iPad Pro M1 11 inch WiFi Cellular 1TB (2021) ',
                'meta_keyword' => 'iPad Pro M1 11 inch WiFi Cellular 1TB (2021) ',
                'meta_description' => 'iPad Pro M1 11 inch WiFi Cellular 1TB (2021) '
            ],

            [
                'category_id' => '3',
                'name' => ' iPad Pro M1 12.9 inch WiFi Cellular 128GB (2021)   ',
                'slug' => ' iPad-Pro-M1-12.9-inch-WiFi-Cellular-128GB ',
                'brand' => '9',
                'description' => 'iPad Pro M1 12.9 inch 2021 sở hữu màn hình Liquid Retina XDR mini-LED LCD, áp dụng công nghệ mini-LED với 10.000 bóng được tuỳ chỉnh nhỏ hơn 120 lần so với thế hệ trước nên độ sáng có thể lên đến 1600 nits ngay cả ngoài trời vẫn có thể sử dụng tốt.',
                'original_price' => 3000,
                'selling_price' => 2890,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'iPad Pro M1 12.9 inch WiFi Cellular 128GB (2021) ',
                'meta_keyword' => 'iPad Pro M1 12.9 inch WiFi Cellular 128GB (2021) ',
                'meta_description' => 'iPad Pro M1 12.9 inch WiFi Cellular 128GB (2021) '
            ],
            //tablet(category=>3)->Samsung(brand=10)
            [
                'category_id' => '3',
                'name' => ' Máy tính bảng Samsung Galaxy Tab A7 Lite   ',
                'slug' => ' May-Tinh-Bang-Samsung-Galaxy-Tab-A7-Lite ',
                'brand' => '10',
                'description' => 'Galaxy Tab A7 Lite sở hữu kiểu thiết kế đặc trưng của dòng Galaxy Tab A7. Thiết bị sử dụng chất liệu nhôm với thiết kế nguyên khối giúp cho máy trở nên cao cấp hơn dù chỉ thuộc phân khúc tầm trung giá rẻ.',
                'original_price' => 1100,
                'selling_price' => 1090,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Samsung Galaxy Tab A7 Lite ',
                'meta_keyword' => 'Máy tính bảng Samsung Galaxy Tab A7 Lite ',
                'meta_description' => 'Máy tính bảng Samsung Galaxy Tab A7 Lite '
            ],

            [
                'category_id' => '3',
                'name' => ' Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G   ',
                'slug' => ' May-Tinh-Bang-Samsung-Galaxy-Tab-S8-Ultra-5G ',
                'brand' => '10',
                'description' => 'Samsung Galaxy Tab S8 Ultra trang bị tấm nền Super AMOLED với kích thước lên đến 14.6 inch, điều này giúp cho hình ảnh hiển thị được rực rỡ và bắt mắt hơn khi trải nghiệm trên một chiếc màn hình khủng.',
                'original_price' => 2000,
                'selling_price' => 1890,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G',
                'meta_keyword' => 'Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G',
                'meta_description' => 'Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G'
            ],
            //tablet(category=>3)->Lenovo(brand=11)
            [
                'category_id' => '3',
                'name' => 'Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB  ',
                'slug' => ' May-Tinh-Bang-Lenovo-Tab-M10 ',
                'brand' => '11',
                'description' => 'Lenovo Tab M10 được trang bị màn hình IPS LCD kích thước lớn 10.1 inch với độ phân giải 1200 x 1920 Pixels có thể hiển thị sắc nét mọi chi tiết của hình ảnh, từ đó nâng cao trải nghiệm giải trí nói chung.',
                'original_price' => 1200,
                'selling_price' => 1190,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB  ',
                'meta_keyword' => 'Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB  ',
                'meta_description' => 'Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB  '
            ],

            [
                'category_id' => '3',
                'name' => 'Máy tính bảng Lenovo Tab P11 Plus ',
                'slug' => ' May-Tinh-Bang-Lenovo-Tab-P11-Plus ',
                'brand' => '11',
                'description' => 'Máy tính bảng Lenovo Tab P11 Plus mang đến hiệu suất hoạt động khá ấn tượng nhờ vi xử lý MediaTek Helio G90T sản xuất trên tiến trình 12 nm với xung nhịp cao nhất có thể lên đến 2.05 GHz đem lại khả năng xử lý những tác vụ từ cơ bản đến nâng cao đều mượt mà.',
                'original_price' => 1300,
                'selling_price' => 1290,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Lenovo Tab P11 Plus ',
                'meta_keyword' => 'Máy tính bảng Lenovo Tab P11 Plus',
                'meta_description' => 'Máy tính bảng Lenovo Tab P11 Plus'
            ],
            //tablet(category=>3)->Masstel(brand=12)
            [
                'category_id' => '3',
                'name' => 'Máy tính bảng Masstel Tab 10A  ',
                'slug' => ' May-Tinh-Bang-Masstel-Tab-10A  ',
                'brand' => '12',
                'description' => 'Máy tính bảng Masstel Tab 10A sở hữu màn hình 10.1 inch, tỉ lệ 16:10 tối ưu cho mọi hoạt động học tập hay giải trí, có độ phân giải 1280 x 800 pixels với 16.7 triệu màu, công nghệ IPS cho màu sắc chính xác, độ sáng cao và độ tương phản tốt để bạn có thể tha hồ học tập, làm việc hay xem phim giải trí.',
                'original_price' => 1350,
                'selling_price' => 1250,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Masstel Tab 10A  ',
                'meta_keyword' => 'Máy tính bảng Masstel Tab 10A ',
                'meta_description' => 'Máy tính bảng Masstel Tab 10A '
            ],

            [
                'category_id' => '3',
                'name' => 'Máy tính bảng Masstel Tab 10S   ',
                'slug' => ' May-Tinh-Bang-Masstel-Tab-10S  ',
                'brand' => '12',
                'description' => 'Máy tính bảng Masstel Tab 10S  sở hữu màn hình 10.1 inch, tỉ lệ 16:10 tối ưu cho mọi hoạt động học tập hay giải trí, có độ phân giải 1280 x 800 pixels với 16.7 triệu màu, công nghệ IPS cho màu sắc chính xác, độ sáng cao và độ tương phản tốt để bạn có thể tha hồ học tập, làm việc hay xem phim giải trí.',
                'original_price' => 1250,
                'selling_price' => 1050,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Máy tính bảng Masstel Tab 10S   ',
                'meta_keyword' => 'Máy tính bảng Masstel Tab 10S  ',
                'meta_description' => 'Máy tính bảng Masstel Tab 10S  '
            ],
            //smartwatch(category=>4)->Apple(brand=13)
            [
                'category_id' => '4',
                'name' => ' Apple Watch Ultra LTE 49mm    ',
                'slug' => ' Đong-ho-thong-minh-Apple-Watch-Ultra-LTE-49mm   ',
                'brand' => '13',
                'description' => 'Đây cũng là phiên bản có màn hình sáng nhất trong tất cả Apple Watch với độ sáng lên đến 2000 nits, nút xoay Digital Crown cũng được chế tác to và bền hơn, giúp người dùng thao tác dễ dàng hơn trong mọi hoàn cảnh. ',
                'original_price' => 1550,
                'selling_price' => 1450,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => ' Apple Watch Ultra LTE 49mm   ',
                'meta_keyword' => 'Apple Watch Ultra LTE 49mm  ',
                'meta_description' => ' Apple Watch Ultra LTE 49mm  '
            ],

            [
                'category_id' => '4',
                'name' => 'Apple Watch Series 7 GPS 45mm   ',
                'slug' => ' Apple-Watch-Series-7-GPS45mm  ',
                'brand' => '13',
                'description' => 'Apple trang bị cho dòng S7 khung viền bằng nhôm tái chế 100% giúp bảo vệ môi trường. Dây đeo silicone dẻo dai, không thấm nước mang lại cảm giác thoải mái, dễ chịu cho người dùng đặc biệt là những lúc tay đổ nhiều mồ hôi khi luyện tập thể thao.',
                'original_price' => 1250,
                'selling_price' => 1050,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Apple Watch Series 7 GPS 45mm  ',
                'meta_keyword' => 'Apple Watch Series 7 GPS 45mm ',
                'meta_description' => 'Apple Watch Series 7 GPS 45mm '
            ],
            //smartwatch(category=>4)->Samsung(brand=14)
            [
                'category_id' => '4',
                'name' => 'Samsung Galaxy Watch5 LTE 40mm   ',
                'slug' => ' Samsung-Galaxy-Watch5-LTE-40mm  ',
                'brand' => '14',
                'description' => 'sở hữu mặt tròn quen thuộc được thiết kế tạo cảm giác liền mạch với khung viền hợp kim nhôm bền bỉ. Chất liệu kính cường lực quen thuộc ở các dòng Galaxy Watch đã được nâng cấp thành mặt kính Sapphire cao cấp giúp tăng độ cứng cho màn hình, giảm tình trạng trầy xước, nứt vỡ trong quá trình sử dụng.',
                'original_price' => 1120,
                'selling_price' => 1100,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Samsung Galaxy Watch5 LTE 40mm  ',
                'meta_keyword' => 'Samsung Galaxy Watch5 LTE 40mm ',
                'meta_description' => 'Samsung Galaxy Watch5 LTE 40mm '
            ],

            [
                'category_id' => '4',
                'name' => 'Samsung Galaxy Watch5 LTE 44mm   ',
                'slug' => ' Samsung-Galaxy-Watch5-LTE-44mm  ',
                'brand' => '14',
                'description' => 'Màn hình 1.2 inch có độ phân giải 396 x 396 pixels, mật độ điểm ảnh 330 ppi mang đến độ chi tiết cao. Công nghệ màn hình Super AMOLED nổi tiếng của nhà Samsung mang đến màu sắc sống động, nịnh mắt cùng khả năng hiển thị sắc nét.',
                'original_price' => 1020,
                'selling_price' => 1000,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Samsung Galaxy Watch5 LTE 44mm  ',
                'meta_keyword' => 'Samsung Galaxy Watch5 LTE 44mm ',
                'meta_description' => 'Samsung Galaxy Watch5 LTE 44mm '
            ],
            //smartwatch(category=>4)->Amazfit(brand=15)
            [
                'category_id' => '4',
                'name' => 'Đồng hồ thông minh Amazfit GTR 3 45.8mm   ',
                'slug' => ' Đong-ho-thong-minh-Amazfit-GTR-3-45.8mm ',
                'brand' => '15',
                'description' => 'Amazfit GTR 3 dùng mặt đồng hồ hình tròn vừa cổ điển vừa hiện đại, mang đến vẻ ngoài thanh lịch phù hợp với nhiều phong cách. Mặt kính cường lực kết hợp cùng khung viền hợp kim nhôm mang đến độ bền cao, hạn chế hư hỏng khi va chạm trong quá trình sử dụng. ',
                'original_price' => 1060,
                'selling_price' => 1010,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Đồng hồ thông minh Amazfit GTR 3 45.8mm ',
                'meta_keyword' => 'Đồng hồ thông minh Amazfit GTR 3 45.8mm',
                'meta_description' => 'Đồng hồ thông minh Amazfit GTR 3 45.8mm'
            ],

            [
                'category_id' => '4',
                'name' => 'Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm  ',
                'slug' => ' Đong-ho-thong-minh-Amazfit-GTS 4 mini 41.8mm  ',
                'brand' => '15',
                'description' => 'Sở hữu thiết kế thời thượng, đậm chất xu hướng với mặt đồng hồ hình chữ nhật bo cong nhẹ 4 góc. Khung viền hợp kim nhôm kết hợp mặt kính cường lực có độ hoàn thiện cao mang lại tổng thể hài hoà, cao cấp cho chiếc đồng hồ..',
                'original_price' => 1220,
                'selling_price' => 1190,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm  ',
                'meta_keyword' => 'Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm ',
                'meta_description' => 'Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm '
            ],
            //smartwatch(category=>4)->Garmin(brand=16)
            [
                'category_id' => '4',
                'name' => 'Đồng hồ thông minh Garmin Forerunner 955 46.5mm  ',
                'slug' => ' Đong-ho-thong-minh-Garmin Forerunner 955 46.5mm  ',
                'brand' => '16',
                'description' => 'có thiết kế mặt thanh thoát hơn, phần khung cũng được chế tác lại cho cảm giác đầy đặn, cứng cáp hơn thế hệ tiền nhiệm. Cạnh phải với những đường sọc đã được thay thế bằng dòng chữ Forerunner dập chìm ấn tượng. Dây đeo silicone mềm mại, thoáng mồ hôi cho cảm giác thoải mái trên cổ tay cả ngày dài hoạt động.',
                'original_price' => 1420,
                'selling_price' => 1390,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Đồng hồ thông minh Garmin Forerunner 955 46.5mm  ',
                'meta_keyword' => 'Đồng hồ thông minh Garmin Forerunner 955 46.5mm ',
                'meta_description' => 'Đồng hồ thông minh Garmin Forerunner 955 46.5mm '
            ],

            [
                'category_id' => '4',
                'name' => 'Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm  ',
                'slug' => ' Đong-ho-thong-minh-Garmin Fenix 7 Sapphire 47mm ',
                'brand' => '16',
                'description' => 'Đồng hồ thông minh Garmin nổi bật với kiểu dáng thể thao hoàn toàn mới kết hợp cùng màn hình 1.3 inch và có kích thước mặt đến 47 mm. Bên cạnh đó, sản phẩm còn đạt độ bền tiêu chuẩn quân đội của Hoa Kỳ về khả năng chống sốc, chống nước ở độ sâu 100 mét.',
                'original_price' => 1420,
                'selling_price' => 1390,
                'quantity' => 15,
                'trending' => 1,
                'featured' => 1,
                'status' => 0,
                'meta_title' => 'Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm  ',
                'meta_keyword' => 'Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm ',
                'meta_description' => 'Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm '
            ],


           
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
