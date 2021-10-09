<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Test
 *
 * @package App\Models
 * @property string     $description
 *
 * Модель для тестов
 */
class Test extends Model
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
        'description'
    ];
}
