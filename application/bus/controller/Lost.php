<?php
namespace app\bus\controller;
use think\Controller;
use app\bus\model\bus as BusModel;
use app\bus\model\lost as LostModel;
use think\Request;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 10:14
 */
class Lost extends Controller
{

    public function Lost(){
        $view = view('lost');
        $busList = BusModel::all();
//        $lostList = LostModel::all(['State'==1]);
        $lostList = LostModel::where('State','=',1)->select();
        foreach ($lostList as $lost){
            $busInfo = BusModel::get($lost->BusId);
            trace($busInfo->Interval);
//            array_push($lostList,"busInfo",$busInfo->Interval);
            $lost['busInfo'] = $busInfo->Interval;
        }
        trace($lostList);
        $this->assign('busList',$busList);
        $this->assign('lostList',$lostList);
        return $view;
    }

    public function LostAdd(Request $request){
        $url = $request->url();
        trace($_POST);
        trace("进入了物品添加控制器");
        $view = view('lost');
        $lost = new LostModel;
        $lost->BusId = $_POST['BusId'];
        $lost->Description = $_POST['Description'];
        $lost->State = 1;
        $lost->LossDate = $_POST['lossDate'];
        if($lost->save()){
            $this->success('丢失物品信息添加成功.','lost');
//            $this->assign('message','丢失物品信息添加成功.');
//            return $view;
        }else{
            $this->assign('message','丢失物品信息添加失败.');
            return $lost->getError();
        }
    }

    public function LostSearch(){
        $view = view("lost");
        $busList = BusModel::all();
        $BusId = $_POST['BusId'];
        $LossDate = $_POST['lossDate'];
        $LostInfo = $_POST['lostInfo'];
        trace($BusId);
        trace($LossDate);
        trace($LostInfo);
        if($BusId != 0 && empty($LossDate) && $LostInfo == "请描述丢失物品"){
            $lostList = LostModel::where('BusId','=',$BusId)->select();
            $busInfo = BusModel::get($BusId);
            foreach ($lostList as $lost){
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId == 0 && !empty($LossDate) && $LostInfo == "请描述丢失物品"){
            $lostList = LostModel::where('LossDate','=',$LossDate)->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId == 0 && empty($LossDate) && $LostInfo != "请描述丢失物品"){
            $lostList = LostModel::where('Description','LIKE','%'.$LostInfo.'%')->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId !=0 && !empty($LossDate) && $LostInfo == "请描述丢失物品"){
            $lostList = LostModel::where('BusId','=',$BusId)
                ->where('LossDate','=',$LossDate)
                ->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId != 0 && empty($LossDate) && $LostInfo != "请描述丢失物品"){
            $lostList = LostModel::where('BusId','=',$BusId)
                ->where('Description','LIKE','%'.$LostInfo.'%')
                ->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId == 0 && !empty($LossDate) && $LostInfo != "请描述丢失物品"){
            $lostList = LostModel::where('LossDate','=',$LossDate)
                ->where('Description','LIKE','%'.$LostInfo.'%')
                ->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }elseif ($BusId != 0 && !empty($LossDate) && $LostInfo != "请描述丢失物品"){
            $lostList = LostModel::where('LossDate','=',$LossDate)
                ->where('Description','LIKE','%'.$LostInfo.'%')
                ->where('BusId','=',$BusId)
                ->select();
            foreach ($lostList as $lost){
                $busInfo = BusModel::get($lost->BusId);
                $lost['busInfo'] = $busInfo->Interval;
            }
            $this->assign('busList',$busList);
            $this->assign('lostList',$lostList);
            return $view;
        }
        else{
            return '没有相符合的遗失物品信息';
        }
    }

}