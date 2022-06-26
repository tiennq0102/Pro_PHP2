<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// class Answer extends Model{
class Answer extends Model{
    // protected $primaryKey = 'tên primaryKey của bảng';
    //vd protected $primaryKey = 'flight_id';//nếu khóa chính của bảng là Answer_id (khác id) thì dòng này sẽ chuyển khóa chính của bảng đó thành id, để thư viện eloquent có thể sử dụng và hỗ trợ làm các chức năng khác
    protected $table = 'answers';
    public $timestamps = false;//khi cài thư viện illuminate database, sẽ yêu cầu trong db phải có 2 cột created_at và updated_at trong các bảng csdl( nếu k có thì thực hiện thêm hay update sẽ lỗi). nếu cho lệnh này sẽ làm cho việc insert hay update k bị lỗi nữa. nhưng nên thêm 2 cột đó với kiểu dữ liệu timestamp. 
    // protected $fillable = ['name']; // trong ['tên cột','tên cột'...], lệnh này giúp chuyển key của 1 mảng thành thuộc tính của 1 object, giá trị của key thành giá trị của thuộc tính
    protected $fillable = ['content','question_id','is_correct'];
    public function question(){
        $question = Question::where('id', $this->question_id)->first();
        if($question){
            return $question;
        }
        return null;
    }
}
?>