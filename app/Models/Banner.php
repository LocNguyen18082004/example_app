<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners'; // Nếu bảng trong database có tên khác model

    protected $fillable = ['title', 'image', 'description']; // Danh sách các cột có thể được thêm/sửa
}
