<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $is_note
 * @property int|null $note_item_id
 * @property int $is_stackable
 * @property int $is_tradable
 * @property int $is_two_handed
 * @property int $is_sellable
 * @property int $value_shop
 * @property int $value_low_alchemy
 * @property int $value_high_alchemy
 * @property int $bonus_attack_stab
 * @property int $bonus_attack_slash
 * @property int $bonus_attack_crush
 * @property int $bonus_attack_magic
 * @property int $bonus_attack_range
 * @property int $bonus_defence_stab
 * @property int $bonus_defence_slash
 * @property int $bonus_defence_crush
 * @property int $bonus_defence_magic
 * @property int $bonus_defence_range
 * @property int $bonus_strength
 * @property int $bonus_prayer
 * @property string|null $comments
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusAttackCrush($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusAttackMagic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusAttackRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusAttackSlash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusAttackStab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusDefenceCrush($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusDefenceMagic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusDefenceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusDefenceSlash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusDefenceStab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusPrayer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereBonusStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsSellable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsStackable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsTradable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsTwoHanded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereNoteItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereValueHighAlchemy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereValueLowAlchemy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereValueShop($value)
 */
class Item extends Model
{
    //
}
