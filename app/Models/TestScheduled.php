<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class TestScheduled
 *
 * @package App\Models
 * @property string     $time
 * @property string     $date_time_begin
 * @property string     $date_time_end
 * @property int     $group_id
 * @property int     $test_id
 *
 * Модель для запланированных тестов
 */
class TestScheduled extends Model
{
    use HasFactory;
    /**
     * Таблица базы данных, используемая моделью.
     *
     * @var string
     */
    protected $table = 'tests';

    /**
     * Указывает, должна ли модель иметь временную метку.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Атрибуты, которые можно назначать массово.
     *
     * @var string[]
     */
    protected $fillable = [
        'time',
        'date_time_begin',
        'date_time_end',
        'group_id',
        'test_id'
    ];
}
