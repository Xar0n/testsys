<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Question
 *
 * @package App\Models
 * @property string     $question
 * @property string     $answer
 * @property int    $type
 * @property int        $test_id
 *
 * Модель для вопросов
 */
class Question extends Model
{
    use HasFactory;
    /**
     * Таблица базы данных, используемая моделью.
     *
     * @var string
     */
    protected $table = 'questions';

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
        'name',
        'test_id'

    ];
}
