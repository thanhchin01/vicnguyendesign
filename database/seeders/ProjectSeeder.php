<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $project = [
            [
                'title'         => 'NGUYET HOUSE',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/2.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'

            ],
            [
                'title'         => 'DA NANG VILLA',
                'address'       => 'Thái Nguyên',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/3.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ],
            [
                'title'         => 'LUU HOUSE',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/4.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ],
            [
                'title'         => 'VIN HOME',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/6.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ],
            [
                'title'         => 'ABC HOUSE',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/8.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ],
            [
                'title'         => '!@# HOUSE',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/8.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ],
            [
                'title'         => '123 HOUSE',
                'address'       => 'Hà Nội',
                'acreage'       => '400m2',
                'image_url'     => '/ckfinder/userfiles/files/portfolio/9.png',
                'description'   => 'Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu'
            ]
        ];

        foreach ($project as $item) {
            Projects::create([
                'title'        => $item['title'],
                'slug'         => Str::slug($item['title']),
                'image_url'    => $item['image_url'],
                'description'  => $item['description'],
                'address'      => $item['address'],
                'date'         => '2024-01-01',
                'acreage'      => $item['acreage'],
                'team_design'  => 'VIC Nguyễn, Hưng Đào',
                'category_id'  => 1,
                'status'       => 1,
                'created_by'   => 1,
            ]);
        }
    }
}
