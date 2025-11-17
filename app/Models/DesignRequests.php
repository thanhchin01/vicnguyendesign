<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignRequests extends Model
{
    //
    protected $table = 'design_requests';

    protected $fillable = [
        'id_contacts',
        'project_type',
        'area',
        'scale',
        'location',
        'investment_cost', // Nhà ở – Chi phí dự trù đầu tư
        'people', // số người sinh hoạt
        'expected_rooms', //Số phòng mong muốn
        'other_construction', //Công trình khác
        'function_description', //Mô tả chức năng
        'design_speed', //Tiến độ mong muốn thiết kế
        'complete_speed', //Tiến độ mong muốn hoàn thiện
        'habits', //Sở thích thói quen
        'referral_source', //Vì sao biết VIC
    ];
}
