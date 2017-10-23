<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Inventory
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $item_id_1
 * @property int|null $item_quantity_1
 * @property int|null $item_id_2
 * @property int|null $item_quantity_2
 * @property int|null $item_id_3
 * @property int|null $item_quantity_3
 * @property int|null $item_id_4
 * @property int|null $item_quantity_4
 * @property int|null $item_id_5
 * @property int|null $item_quantity_5
 * @property int|null $item_id_6
 * @property int|null $item_quantity_6
 * @property int|null $item_id_7
 * @property int|null $item_quantity_7
 * @property int|null $item_id_8
 * @property int|null $item_quantity_8
 * @property int|null $item_id_9
 * @property int|null $item_quantity_9
 * @property int|null $item_id_10
 * @property int|null $item_quantity_10
 * @property int|null $item_id_11
 * @property int|null $item_quantity_11
 * @property int|null $item_id_12
 * @property int|null $item_quantity_12
 * @property int|null $item_id_13
 * @property int|null $item_quantity_13
 * @property int|null $item_id_14
 * @property int|null $item_quantity_14
 * @property int|null $item_id_15
 * @property int|null $item_quantity_15
 * @property int|null $item_id_16
 * @property int|null $item_quantity_16
 * @property int|null $item_id_17
 * @property int|null $item_quantity_17
 * @property int|null $item_id_18
 * @property int|null $item_quantity_18
 * @property int|null $item_id_19
 * @property int|null $item_quantity_19
 * @property int|null $item_id_20
 * @property int|null $item_quantity_20
 * @property int|null $item_id_21
 * @property int|null $item_quantity_21
 * @property int|null $item_id_22
 * @property int|null $item_quantity_22
 * @property int|null $item_id_23
 * @property int|null $item_quantity_23
 * @property int|null $item_id_24
 * @property int|null $item_quantity_24
 * @property int|null $item_id_25
 * @property int|null $item_quantity_25
 * @property int|null $item_id_26
 * @property int|null $item_quantity_26
 * @property int|null $item_id_27
 * @property int|null $item_quantity_27
 * @property int|null $item_id_28
 * @property int|null $item_quantity_28
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId21($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId22($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId23($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId24($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId25($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId26($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId27($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId28($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemId9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity21($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity22($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity23($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity24($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity25($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity26($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity27($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity28($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereItemQuantity9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inventory whereUserId($value)
 */
class Inventory extends Model
{

}
