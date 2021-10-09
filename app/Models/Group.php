<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Group
 *
 * @package App\Models
 * @property string     $name
 *
 * Модель для групп
 */
class Group extends Model
{
    use HasFactory;
    /**
     * Таблица базы данных, используемая моделью.
     *
     * @var string
     */
    protected $table = 'groups';

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
        'name'
    ];

    /**
     * Пользователи, принадлежащие группе.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users', 'group_id', 'id');
    }
}
