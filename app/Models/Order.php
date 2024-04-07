namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="donhang";
    protected $fillable = [
        'username',
        'fullname',
        'thoigiandathang',
        'tongtien',
        'soluongdonhang',
        'diachigiaohang',
        'lienlac',
        'trangthai',
        'ghichu',
        'nguoihoanthanh'
    ];

    public function saveOrder($data){
	$order = new self();
	$order->hovaten = $data['fullname'];
	$order->diachigiaohang = $data['address'];
	$order->lienlac = $data['phone'];
	$order->note = $data['ghichu'];
	$order->method = $data['method'];
	
	return $order->save();
    }
}
