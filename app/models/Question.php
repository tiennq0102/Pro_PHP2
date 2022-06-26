<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;
class Question extends Model{
    
    public $timestamps = false;
    protected $table = 'questions';
    protected $fillable = ['name','quiz_id','img'];


    public function quiz(){
        $quiz = Quiz::where('id',$this->quiz_id)->first();
        // var_dump($quiz);die;
        if($quiz){
            return $quiz;
        }
        return null;
    }
    //quan hệ  giữa Quiz và answer là quan hệ 1 Quiz <=> nhiều answer;
    //từ bảng cha là Quiz sử dụng hasMany để có thể lấy được thuộc tính từ bảng con
    //hasMany :có nhiều; dùng khi từ lớp cha muốn lấy thuộc tính lớp con

    //belongsTo: thuộc về; dùng khi từ lớp con muốn lấy thuộc tính từ lớp cha

    public function answers(){
        return $this->hasMany(Answer::class, 'question_id');
        //hasMany(tên class con,khóa ngoại của con, khóa chính của cha )
    }
}
?>