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

    /**
     * Группа для которой запланирован тест.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    /**
     * Запланированный тест.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}
