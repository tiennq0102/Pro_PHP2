<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Quiz extends Model{
    public $timestamps = false;
    protected $table = 'quizs';
    protected $fillable = ['name','subject_id','duration_minutes','start_time','end_time','status','is_shuffle'];
    //show all thông tin của 1 subject dựa vào subject_id của bảng quiz
    public function subject(){
        $subject = Subject::where('id', $this->subject_id)->first();
        if($subject){
            return $subject;
        }
        return null;
    }
}
?>