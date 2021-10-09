<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class TestPerformed
 *
 * @package App\Models
 * @property string     $date_time
 * @property int     $test_scheduled_id
 * @property int     $user_id
 *
 * Модель для завершенных тестов
 */
class TestPerformed extends Model
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
        'date_time',
        'test_scheduled_id',
        'user_id'
    ];
}
