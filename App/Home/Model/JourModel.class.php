<?php
//自定义Modle类
namespace Home\Model;
use Think\Model;

class JourModel extends Model{
    protected $trueTableName = 'sp_jour';
    /*创建日记*/
    public function  create($arr){
        /*错误检查
         * */
        if(!$arr['title']){
            echo json_encode("请填写标题");
            return;
        }
        if(!$arr['date']){
            echo json_encode("请选择时间");
            return;
        }
        if(!$arr['weather']){
            echo json_encode("请选择天气");
            return;
        }
        if(!$arr['content']){
            echo json_encode("日记内容不能为空");
            return;
        }
        //将日记内容保存到日记文件中
        $fileName="Upload/Jour/".$arr['date'].".txt";
        //将日记信息写入数据库
        if(file_put_contents($fileName,$arr['content'])){
            $sql="select * from  sp_jour WHERE contentFile={$arr['date']} ";
            if($this->query($sql)){
                echo json_encode("请选择天气");
                return;
            }else{
                $sql="select * from  sp_user WHERE userName={$arr['userName']} ";
                $result=$this->query($sql);
                if($result){
                    $userId=$result[0]['userid'];
                    $sql="insert into sp_jour (title,date,weather,contentFile,userId) values ";
                    $sql .="('".$arr['title']."','".$arr['date']."','".$arr['weather']."','".$fileName."','".$userId."')";
                    $result=$this->execute($sql);
                    if($result){
                        echo json_encode("创建日记成功");
                        return;
                    }else{
                        echo json_encode("创建日记失败");
                        return;
                    }
                }
            }
        }

    }
    public function selectJourList(){
        session_start();
        $sql="select * from  sp_user WHERE userName={$_SESSION['userName']} ";
        $result=$this->query($sql);
        $userId=$result[0]['userid'];
        $sql="select * from  sp_jour WHERE userId={$userId}  ORDER BY date ASC ";
        $result=$this->query($sql);
        return $result;
    }
    public function selectJourContent($jourId){
        session_start();
        $sql="select * from  sp_user WHERE userName={$_SESSION['userName']} ";
        $result=$this->query($sql);
        $userId=$result[0]['userid'];
        $sql="select * from  sp_jour WHERE userId={$userId} AND  jourId='".$jourId."' ORDER BY date ASC ";
        $result=$this->query($sql);
        return $result;
    }
}