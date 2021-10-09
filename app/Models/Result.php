<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Result
 *
 * @package App\Models
 * @property int     $points
 * @property string     $date_time
 * @property int    $user_id
 * @property int        $test_performed_id
 *
 * Модель для результатов тестов
 */
class Result extends Model
{
    use HasFactory;
    /**
     * Таблица базы данных, используемая моделью.
     *
     * @var string
     */
    protected $table = 'results';

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
        'points',
        'date_time',
        'user_id',
        'test_performed_id'
    ];
}
